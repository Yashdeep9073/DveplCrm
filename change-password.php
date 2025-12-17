<?php
// error_reporting(0);
session_start();
include('db/config.php');

$name = $_SESSION['admin_id'];
$query_general = "SELECT * FROM `tbl_admin` WHERE _id ='" . $_SESSION['admin_id'] . "'";
$result_general = mysqli_query($conn, $query_general);
$data_general = mysqli_fetch_assoc($result_general);

if (isset($_POST['submit'])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];

    // Retrieve the user's old password from the database
    $query_check_password = "SELECT `password` FROM `tbl_admin` WHERE _id ='" . $_SESSION['admin_id'] . "'";
    $result_check_password = mysqli_query($conn, $query_check_password);
    $row = mysqli_fetch_assoc($result_check_password);
    $stored_password = $row['password'];

    // Check if the old password entered by the user matches the stored password
    if (md5($old_password) != $stored_password) {
        $_SESSION['msg'] = "Old password is incorrect.";
        header("Location: change-password.php");
        exit();
    }

    // Check if the new password and confirm password match
    if ($new_password != $confirm_password) {
        $_SESSION['msg'] = "New password and Confirm password do not match.";
        header("Location: change-password.php");
        exit();
    }

    // Update the password in the database
    $hashed_password = md5($new_password);
    $query_update_password = "UPDATE `tbl_admin` SET password = '$hashed_password' WHERE _id ='" . $_SESSION['admin_id'] . "'";
    $result_update_password = mysqli_query($conn, $query_update_password);

    if ($result_update_password) {
        $_SESSION['status'] = "Your password has been updated successfully.";
        header("Location: change-password.php");
        exit();
    } else {
        $_SESSION['msg'] = "Error updating password: " . mysqli_error($conn);
        header("Location: change-password.php");
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
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Change Password - D.V. Electromatic Pvt. Ltd</title>

	
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- animation CSS -->
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
		<div class="whirly-loader"> </div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">
			<?php
			include("header.php");
			?>
		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<?php
			include("side-bar.php");
			?>
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
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i
									data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
									data-feather="chevron-up" class="feather-chevron-up"></i></a>
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
                            if (isset ($_SESSION['status'])) {
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="message"
                                    style="font-size:15px; font-weight:50px;">
                                    <strong>Success !</strong>
                                    <?= $_SESSION['status']; ?>
                                </div>
                                <?php
                                unset($_SESSION['status']);
                            }
                            if (isset ($_SESSION['msg'])) {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message"
                                    style="font-size:15px; font-weight:50px;">
                                    <strong>Error !</strong>
                                    <?= $_SESSION['msg']; ?>
                                </div>
                                <?php
                                unset($_SESSION['msg']);
                            }
                            ?>

									<div class="setting-title">
										<h4>Chnage Password</h4>
									</div>
									<div class="card-title-head">
										<h6><span><i data-feather="user" class="feather-chevron-up"></i></span>Employee
											Information</h6>
									</div>
									
									<div class="row">
										<!-- <div class="col-md-4">
												<div class="mb-3">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" >
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control">
												</div>
											</div> -->
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Old Password</label>
												<input type="password" class="form-control" name="old_password" placeholder="Enter Old Password" 
													>
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">New Password</label>
												<input type="password" class="form-control" name="password"
													placeholder="Enter New Password">
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Confirm Password</label>
												<input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm Password">
											</div>
										</div>
									</div>
									<!-- <div class="card-title-head">
											<h6><span><i data-feather="map-pin" class="feather-chevron-up"></i></span>Our Address</h6>
										</div> -->
									<div class="row">
										<!-- <div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">Address</label>
													<input type="email" class="form-control">
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-3">
												<div class="mb-3">
													<label class="form-label">Country</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-3">
												<div class="mb-3">
													<label class="form-label">State / Province</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-3">
												<div class="mb-3">
													<label class="form-label">City</label>
													<input type="text" class="form-control">
												</div>
											</div> -->
										<!-- <div class="col-xl-3 col-lg-4 col-md-3">
												<div class="mb-3">
													<label class="form-label">Postal Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div> -->
										<div class="text-end settings-bottom-btn">
											<!-- <button type="button" class="btn btn-cancel me-2">Cancel</button> -->
											<button type="submit" class="btn btn-submit" value="submit"
												name="submit">Save Changes</button>
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
				<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
					data-bs-original-title="Theme">
					<i data-feather="settings" class="feather-five"></i>
				</a>
			</li>
		</ul>
	</div>

	<script>	setTimeout(function () {
			$('#message').fadeOut('fast');
		}, 5000);
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