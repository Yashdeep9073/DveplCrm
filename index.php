<?php
session_start();
require "db/config.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Fetch Cloudflare Turnstile settings
$stmt = $conn->prepare('SELECT site_key, secret_key, status FROM cloudflare_turnstile'); // Update table name if needed
$stmt->execute();
$stmt->bind_result($sitekey, $secretkey, $turnstile_status);
$stmt->fetch();
$stmt->close();

// Fetch logo, favicon and backpanel image from tbl_setting
$stmt = $conn->prepare('SELECT uploaded_file, favicon, backpanel_image FROM tbl_setting WHERE logo_id = 1');
$stmt->execute();
$stmt->bind_result($logo_image, $favicon, $backpanel_image);
$stmt->fetch();
$stmt->close();

// Set default images if not found
$logo_image      = $logo_image ?: 'assets/img/logo.png';
$favicon         = $favicon ?: 'assets/img/favicon.png'; // <-- add proper default favicon
$backpanel_image = $backpanel_image ?: 'assets/img/authentication/login02.png';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email']) && isset($_POST['password']) && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        // If Turnstile is enabled (status = 1), verify it
        if ($turnstile_status == 1) {
            $turnstile_response = $_POST['cf-turnstile-response'];
            if (empty($turnstile_response)) {
                $_SESSION['error_message'] = "Please complete the Turnstile verification.";
                header("Location: index.php");
                exit();
            }

            $verify_url = "https://challenges.cloudflare.com/turnstile/v0/siteverify";
            $verify_data = [
                'secret' => $secretkey,
                'response' => $turnstile_response,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ];
            $options = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($verify_data)
                ]
            ];
            $context = stream_context_create($options);
            $result = file_get_contents($verify_url, false, $context);
            $turnstile_success = json_decode($result);

            if (!$turnstile_success->success) {
                $_SESSION['error_message'] = "Turnstile verification failed. Please try again.";
                header("Location: index.php");
                exit();
            }
        }

        // Proceed with email and password validation
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS));

        $sql = "SELECT * FROM tbl_admin WHERE email = ? AND status = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if ($password === $row['password']) {
                $_SESSION['admin_id'] = $row['_id'];
                $_SESSION['user_name'] = $row['Username'];
                $_SESSION['admin_role'] = $row['admin_role'];

                header("Location: dashboard.php");
                exit();
            } else {
                $_SESSION['error_message'] = "Please enter a valid password.";
                header("Location: index.php");
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Please enter a valid email.";
            header("Location: index.php");
            exit();
        }
        $stmt->close();
    } else {
        $_SESSION['error_message'] = "Invalid form submission.";
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex, nofollow">
    <title>Job Control Management - D.V. Electromatic Pvt. Ltd</title>

    <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo htmlspecialchars($favicon); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="account-page">
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <form action="" method="post">
                        <div class="login-userset">
                            <div class="login-logo logo-normal">
                                <img src="logo/<?php echo htmlspecialchars($logo_image); ?>" alt="Logo">
                            </div>
                            <?php if (isset($_SESSION['error_message'])) { ?>
                                <div id="dangerAlert" class="login-userheading">
                                    <div class="alert alert-danger alert-dismissible fade show custom-alert-icon shadow-sm d-flex align-items-center"
                                        role="alert">
                                        <i class="feather-alert-octagon flex-shrink-0 me-2"></i>
                                        <?php echo htmlspecialchars($_SESSION['error_message']); ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"><i class="fas fa-xmark"></i></button>
                                    </div>
                                </div>
                                <?php unset($_SESSION['error_message']); ?>
                            <?php } ?>
                            <div id="dangerAlert" class="login-userheading" style="display: none;">
                                <div class="alert alert-danger alert-dismissible fade show custom-alert-icon shadow-sm d-flex align-items-center"
                                    role="alert">
                                    <i class="feather-alert-octagon flex-shrink-0 me-2"></i>
                                    Please enter a valid Email Address
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"><i class="fas fa-xmark"></i></button>
                                </div>
                            </div>

                            <a href="index.php" class="login-logo logo-white">
                                <img src="assets/img/logo-white.png" alt="Logo">
                            </a>

                            <div class="login-userheading">
                                <h3>Sign In</h3>
                            </div>
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="text" name="email" id="userInputEmail" class="form-control" required
                                        placeholder="Enter email" autocomplete="email">
                                    <img src="assets/img/icons/mail.svg" alt="img">
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="pass-input" required
                                        placeholder="********" autocomplete="current-password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <input type="hidden" name="csrf_token"
                                value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                            <?php if ($turnstile_status == 1) { ?>
                                <div class="form-login authentication-check">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="cf-turnstile" data-sitekey="<?php echo htmlspecialchars($sitekey); ?>"
                                                data-callback="enableSubmit" data-expired-callback="disableSubmit"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="form-login">
                                <button type="submit" id="submitButton" class="btn btn-login"
                                    <?php echo $turnstile_status == 1 ? 'disabled' : ''; ?>>Sign In</button>
                            </div>
                            <div class="form-sociallink">
                                <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                    <p>Copyright © <?php echo date('Y'); ?> Dvepl Jobs System | <a
                                            href="https://vibrantick.in/">Designed by
                                            Vibrantick Infotech Solutions.</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-img">
                    <img src="logo/<?php echo htmlspecialchars($backpanel_image); ?>" alt="Backpanel Image">
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Turnstile Script -->
    <?php if ($turnstile_status == 1) { ?>
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <?php } ?>

    <!-- Custom JS -->
    <script src="assets/js/theme-script.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        $(document).ready(function () {
            $('#userInputEmail').on('focusout', function () {
                let email = $(this).val();
                let emailReg = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                if (!emailReg.test(email)) {
                    $('#dangerAlert').show();
                } else {
                    $('#dangerAlert').hide();
                    $.ajax({
                        type: 'POST',
                        url: 'validate-email.php',
                        data: { email: email, csrf_token: '<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>' },
                        success: function (response) {
                            // Handle the success response here
                            // console.log('Email validated successfully:', response);
                        },
                        error: function (xhr, status, error) {
                            // Handle the error response here
                            // console.error('Email validation failed:', error);
                        }
                    });
                }
            });
        });

        // Enable submit button when Turnstile is completed (only if Turnstile is enabled)
        function enableSubmit() {
            $('#submitButton').prop('disabled', false);
        }

        // Disable submit button when Turnstile expires (only if Turnstile is enabled)
        function disableSubmit() {
            $('#submitButton').prop('disabled', true);
        }
    </script>
</body>

</html>