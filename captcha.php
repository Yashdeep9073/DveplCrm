<?php
session_start();
include('db/config.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Generate CSRF token
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Fetch favicon for display
$query = "SELECT favicon FROM `tbl_setting` LIMIT 1"; // Fetch any row, adjust if specific ID is needed
$result = mysqli_query($conn, $query);
if (!$result) {
    $_SESSION['msg'] = "Error fetching settings: " . mysqli_error($conn);
    header("Location: captcha.php");
    exit();
}
$data1 = mysqli_fetch_assoc($result);
$favicon = $data1['favicon'] ?? 'favicon.png';

// Fetch Cloudflare Turnstile settings
$stmt = $conn->prepare("SELECT site_key, secret_key, status FROM cloudflare_turnstile WHERE id = 1");
if (!$stmt) {
    $_SESSION['msg'] = "Error preparing Turnstile query: " . mysqli_error($conn);
    header("Location: captcha.php");
    exit();
}
$stmt->execute();
$stmt->bind_result($site_key, $secret_key, $turnstile_status);
$record_exists = $stmt->fetch();
$stmt->close();

if (!$record_exists) {
    $_SESSION['msg'] = "No Turnstile settings found for ID 1. Please contact the administrator.";
    header("Location: captcha.php");
    exit();
}

if (isset($_POST['submit'])) {
    // Handle CSRF token validation
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $_SESSION['msg'] = "Invalid CSRF token.";
        header("Location: captcha.php");
        exit();
    }

    // Handle Turnstile settings
    $new_site_key = mysqli_real_escape_string($conn, $_POST['site_key'] ?? '');
    $new_secret_key = mysqli_real_escape_string($conn, $_POST['secret_key'] ?? '');
    $new_turnstile_status = isset($_POST['turnstile_status']) ? 1 : 0;

    // Update Turnstile settings
    $stmt = $conn->prepare("UPDATE cloudflare_turnstile SET site_key = ?, secret_key = ?, status = ? WHERE id = 1");
    if (!$stmt) {
        $_SESSION['msg'] = "Error preparing update query: " . mysqli_error($conn);
        header("Location: captcha.php");
        exit();
    }
    $stmt->bind_param("ssi", $new_site_key, $new_secret_key, $new_turnstile_status);
    $turnstile_result = $stmt->execute();
    if (!$turnstile_result) {
        $_SESSION['msg'] = "Error updating Turnstile settings: " . mysqli_error($conn);
        $stmt->close();
        header("Location: captcha.php");
        exit();
    }
    $stmt->close();

    $_SESSION['status'] = "Turnstile settings updated successfully";
    header("Location: captcha.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Turnstile Settings - D.V. Electromatic Pvt. Ltd</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo htmlspecialchars($favicon); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <?php include("header.php"); ?>
        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <?php include("side-bar.php"); ?>
        </div>
        <!-- /Sidebar -->

        <div class="page-wrapper">
            <div class="content settings-content">
                <div class="page-header settings-pg-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4>Settings</h4>
                            <h6>Manage your settings on portal</h6>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh">
                                <i data-feather="rotate-ccw" class="feather-rotate-ccw"></i>
                            </a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header">
                                <i data-feather="chevron-up" class="feather-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="settings-wrapper d-flex">
                            <div class="sidebars settings-sidebar theiaStickySidebar" id="sidebar2">
                                <?php require_once('setting-sidebar.php'); ?>
                            </div>
                            <div class="settings-page-wrap">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                                    <?php
                                    if (isset($_SESSION['status'])) {
                                    ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message" style="height:50px; font-size:15px; font-weight:50px;">
                                            <strong>Success!</strong>
                                            <?= htmlspecialchars($_SESSION['status']); ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php
                                        unset($_SESSION['status']);
                                    }
                                    if (isset($_SESSION['msg'])) {
                                    ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message" style="height:50px; font-size:15px; font-weight:50px;">
                                            <strong>Error!</strong>
                                            <?= htmlspecialchars($_SESSION['msg']); ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
                                    <div class="setting-title">
                                        <h4>Turnstile Settings</h4>
                                    </div>
                                    <div class="company-info turnstile-settings">
                                        <div class="card-title-head">
                                            <h6><span><i data-feather="shield"></i></span>Cloudflare Turnstile Settings</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Site Key</label>
                                                    <input type="text" name="site_key" class="form-control" value="<?php echo htmlspecialchars($site_key ?? ''); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Secret Key</label>
                                                    <input type="text" name="secret_key" class="form-control" value="<?php echo htmlspecialchars($secret_key ?? ''); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Turnstile Status</label>
                                                    <div class="status-toggle">
                                                        <input type="checkbox" id="turnstile_status" name="turnstile_status" class="check" <?php echo ($turnstile_status == 1) ? 'checked' : ''; ?>>
                                                        <label for="turnstile_status" class="checktoggle">Enable/Disable</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer-btn">
                                        <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-submit" value="submit" name="submit">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    <div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div>
    <script>
        setTimeout(function() {
            $('#message').fadeOut('fast');
        }, 5000);
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Feather Icon JS -->a
    <script src="assets/js/feather.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/theme-script.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>