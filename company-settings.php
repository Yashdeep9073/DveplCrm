<?php
session_start();
include('db/config.php');

$result_a = mysqli_query($conn, "SELECT * FROM company_info");
$row = mysqli_fetch_assoc($result_a);

$companyName = isset($row['company_name']) ? $row['company_name'] : '';
$companyEmail = isset($row['email']) ? $row['email'] : '';
$companyMobile = isset($row['mobile']) ? $row['mobile'] : '';
$companyFax = isset($row['fax']) ? $row['fax'] : '';
$companyWebsite = isset($row['website']) ? $row['website'] : '';
$companyAboutUs = isset($row['about_us']) ? $row['about_us'] : '';
$c = isset($row['id']) ? $row['id'] : '';

$query = "SELECT * FROM `tbl_setting`";
$result = mysqli_query($conn, $query);
$data1 = mysqli_fetch_assoc($result);
$logo_id = $data1['logo_id'];
$upload_directory = "logo/";
$faviupload_directory = "favicon/";

if (isset($_POST['submit'])) {
    // Validate required fields
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['fax']) || empty($_POST['Website'])) {
        $_SESSION['msg'] = "All required fields must be filled.";
        header("Location: company-settings.php");
        exit();
    }

    // Handle Company Logo Upload
    $unique_filename = mysqli_real_escape_string($conn, $_POST['old_image']);
    if (!empty($_FILES["uploaded_file"]["name"])) {
        if ($_FILES["uploaded_file"]["error"] !== UPLOAD_ERR_OK) {
            $_SESSION['msg'] = "Error uploading company logo.";
            header("Location: company-settings.php");
            exit();
        }
        $temp_name = $_FILES["uploaded_file"]["tmp_name"];
        $original_name = $_FILES["uploaded_file"]["name"];
        $file_size = $_FILES["uploaded_file"]["size"];
        $file_type = mime_content_type($temp_name);
        if (!in_array($file_type, ["image/jpeg", "image/png", "image/gif"])) {
            $_SESSION['msg'] = "Please upload a valid image file for Company Logo.";
            header("Location: company-settings.php");
            exit();
        }
        if ($file_size > 2 * 1024 * 1024) {
            $_SESSION['msg'] = "Company logo file size exceeds 2MB.";
            header("Location: company-settings.php");
            exit();
        }
        $unique_filename = uniqid() . '_' . $original_name;
        if (!move_uploaded_file($temp_name, $upload_directory . $unique_filename)) {
            $_SESSION['msg'] = "Failed to move uploaded company logo.";
            header("Location: company-settings.php");
            exit();
        }
    }

    // Handle Favicon Upload
    $unique_file = mysqli_real_escape_string($conn, $_POST['old_favicon']);
    if (!empty($_FILES["favicon"]["name"])) {
        if ($_FILES["favicon"]["error"] !== UPLOAD_ERR_OK) {
            $_SESSION['msg'] = "Error uploading favicon.";
            header("Location: company-settings.php");
            exit();
        }
        $favitemp_name = $_FILES["favicon"]["tmp_name"];
        $favioriginal_name = $_FILES["favicon"]["name"];
        $favifile_size = $_FILES["favicon"]["size"];
        $favifile_type = mime_content_type($favitemp_name);
        if (!in_array($favifile_type, ["image/png", "image/svg+xml", "image/gif"])) {
            $_SESSION['msg'] = "Please upload a valid image file for Favicon.";
            header("Location: company-settings.php");
            exit();
        }
        if ($favifile_size > 2 * 1024 * 1024) {
            $_SESSION['msg'] = "Favicon file size exceeds 2MB.";
            header("Location: company-settings.php");
            exit();
        }
        $unique_file = uniqid() . '_' . $favioriginal_name;
        if (!move_uploaded_file($favitemp_name, $faviupload_directory . $unique_file)) {
            $_SESSION['msg'] = "Failed to move uploaded favicon.";
            header("Location: company-settings.php");
            exit();
        }
    }

    // Handle Backpanel Image Upload
    $unique_backpanel = mysqli_real_escape_string($conn, $_POST['old_backpanel'] ?? '');
    if (!empty($_FILES["backpanel_image"]["name"])) {
        if ($_FILES["backpanel_image"]["error"] !== UPLOAD_ERR_OK) {
            $_SESSION['msg'] = "Error uploading backpanel image.";
            header("Location: company-settings.php");
            exit();
        }
        $backpanel_temp_name = $_FILES["backpanel_image"]["tmp_name"];
        $backpanel_original_name = $_FILES["backpanel_image"]["name"];
        $backpanel_file_size = $_FILES["backpanel_image"]["size"];
        $backpanel_file_type = mime_content_type($backpanel_temp_name);
        if (!in_array($backpanel_file_type, ["image/jpeg", "image/png", "image/gif"])) {
            $_SESSION['msg'] = "Please upload a valid image file for Backpanel Image.";
            header("Location: company-settings.php");
            exit();
        }
        if ($backpanel_file_size > 2 * 1024 * 1024) {
            $_SESSION['msg'] = "Backpanel image file size exceeds 2MB.";
            header("Location: company-settings.php");
            exit();
        }
        $unique_backpanel = uniqid() . '_' . $backpanel_original_name;
        if (!move_uploaded_file($backpanel_temp_name, $upload_directory . $unique_backpanel)) {
            $_SESSION['msg'] = "Failed to move uploaded backpanel image.";
            header("Location: company-settings.php");
            exit();
        }
    }

    // Start transaction
    mysqli_begin_transaction($conn);
    try {
        // Update tbl_setting
        $stmt = $conn->prepare("UPDATE `tbl_setting` SET uploaded_file = ?, favicon = ?, backpanel_image = ? WHERE logo_id = ?");
        $stmt->bind_param("ssss", $unique_filename, $unique_file, $unique_backpanel, $logo_id);
        if (!$stmt->execute()) {
            throw new Exception("Error updating settings: " . $stmt->error);
        }
        $stmt->close();

        // Update company_info
        $NewCompanyName = mysqli_real_escape_string($conn, $_POST['name']);
        $NewCompanyEmail = mysqli_real_escape_string($conn, $_POST['email']);
        $NewCompanyMobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $NewCompanyFax = mysqli_real_escape_string($conn, $_POST['fax']);
        $NewCompanyWebsite = mysqli_real_escape_string($conn, $_POST['Website']);
        $NewCompanyAboutUs = mysqli_real_escape_string($conn, $_POST['About_us']);

        $stmt = $conn->prepare("INSERT INTO company_info (id, company_name, email, mobile, fax, website, about_us)
                               VALUES (?, ?, ?, ?, ?, ?, ?)
                               ON DUPLICATE KEY UPDATE company_name = ?, email = ?, mobile = ?, fax = ?, website = ?, about_us = ?");
        $stmt->bind_param("sssssssssssss", $c, $NewCompanyName, $NewCompanyEmail, $NewCompanyMobile, $NewCompanyFax, $NewCompanyWebsite, $NewCompanyAboutUs,
                                         $NewCompanyName, $NewCompanyEmail, $NewCompanyMobile, $NewCompanyFax, $NewCompanyWebsite, $NewCompanyAboutUs);
        if (!$stmt->execute()) {
            throw new Exception("Error updating company info: " . $stmt->error);
        }
        $stmt->close();

        mysqli_commit($conn);
        $_SESSION['status'] = "Your changes to Admin setting information have been saved successfully";
        header("Location: company-settings.php");
        exit();
    } catch (Exception $e) {
        mysqli_rollback($conn);
        $_SESSION['msg'] = $e->getMessage();
        header("Location: company-settings.php");
        exit();
    }
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
    <title>Company Settings - D.V. Electromatic Pvt. Ltd</title>

    
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

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
                                <?php require_once('setting-sidebar.php');?>
                            </div>
                            <div class="settings-page-wrap">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <?php
                                    if (isset($_SESSION['status'])) {
                                    ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="message" style="height:50px; font-size:15px; font-weight:50px;">
                                            <strong>Success !</strong>
                                            <?= $_SESSION['status']; ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php
                                        unset($_SESSION['status']);
                                    }
                                    if (isset($_SESSION['msg'])) {
                                    ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message" style="height:50px; font-size:15px; font-weight:50px;">
                                            <strong>Error !</strong>
                                            <?= $_SESSION['msg']; ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
                                    <div class="setting-title">
                                        <h4>Company Settings</h4>
                                    </div>
                                    <div class="company-info">
                                        <div class="card-title-head">
                                            <h6><span><i data-feather="zap"></i></span>Company Information</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Company Name</label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $companyName; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Company Email Address</label>
                                                    <input type="email" name="email" class="form-control" value="<?php echo $companyEmail; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" name="mobile" class="form-control" value="<?php echo $companyMobile; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Fax</label>
                                                    <input type="text" name="fax" class="form-control" value="<?php echo $companyFax; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Website</label>
                                                    <input type="text" name="Website" class="form-control" value="<?php echo $companyWebsite; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-info company-images">
                                        <div class="card-title-head">
                                            <h6><span><i data-feather="image"></i></span>Company Images</h6>
                                        </div>
                                        <ul class="logo-company">
                                            <li class="d-flex align-items-center">
                                                <div class="logo-info">
                                                    <h6>Company Logo</h6>
                                                    <p>Upload Logo of your Company to display in website</p>
                                                </div>
                                                <div class="profile-pic-upload mb-0">
                                                    <div class="new-employee-field">
                                                        <div class="mb-0">
                                                            <div>
                                                                <div class="col-lg-4 col-12 form-group">
                                                                    <input name="uploaded_file" type="file" class="form-control input-md" accept="image/*">
                                                                    <input type="hidden" name="old_image" value="<?php echo $data1['uploaded_file'] ?>">
                                                                </div>
                                                            </div>
                                                            <span>For better preview recommended size is 450px x 450px. Max size 5MB.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-logo ms-auto">
                                                    <a href="#"><img id="logo-preview" src="logo/<?php echo $data1['uploaded_file']; ?>" name="uploaded_file" alt="Logo"><span><i data-feather="x"></i></span></a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="logo-info">
                                                    <h6>Favicon</h6>
                                                    <p>Upload Favicon of your Company to display in website</p>
                                                </div>
                                                <div class="profile-pic-upload mb-0">
                                                    <div class="new-employee-field">
                                                        <div class="mb-0">
                                                            <div>
                                                                <div class="col-lg-4 col-12 form-group">
                                                                    <input name="favicon" type="file" class="form-control input-md" accept="image/*">
                                                                    <input type="hidden" name="old_favicon" value="<?php echo $data1['favicon'] ?>">
                                                                </div>
                                                            </div>
                                                            <span>For better preview recommended size is 450px x 450px. Max size 5MB.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-logo ms-auto">
                                                    <a href="#"><img id="favicon-preview" src="favicon/<?php echo $data1['favicon']; ?>" name="favicon" alt="Logo"><span><i data-feather="x"></i></span></a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="logo-info">
                                                    <h6>Backpanel Image</h6>
                                                    <p>Upload Backpanel Image of your Company to display in website</p>
                                                </div>
                                                <div class="profile-pic-upload mb-0">
                                                    <div class="new-employee-field">
                                                        <div class="mb-0">
                                                            <div>
                                                                <div class="col-lg-4 col-12 form-group">
                                                                    <input name="backpanel_image" type="file" class="form-control input-md" accept="image/*">
                                                                    <input type="hidden" name="old_backpanel" value="<?php echo $data1['backpanel_image'] ?? ''; ?>">
                                                                </div>
                                                            </div>
                                                            <span>For better preview recommended size is 700px x 1074px. Max size 5MB.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-logo ms-auto">
                                                    <a href="#"><img id="backpanel-preview" src="logo/<?php echo $data1['backpanel_image'] ?? 'logo-small.png'; ?>" name="backpanel_image" alt="Backpanel Image"><span><i data-feather="x"></i></span></a>
                                                </div>
                                            </li>
                                        </ul>
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

        // Image preview functionality
        function readURL(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + previewId).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#uploaded_file").change(function() {
            readURL(this, 'logo-preview');
        });

        $("#favicon").change(function() {
            readURL(this, 'favicon-preview');
        });

        $("#backpanel_image").change(function() {
            readURL(this, 'backpanel-preview');
        });
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>
    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Summernote JS -->
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <!-- Sticky-sidebar -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <!-- Sweetalert 2 -->
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/theme-script.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>