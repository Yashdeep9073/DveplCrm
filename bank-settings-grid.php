<?php
error_reporting(0);
session_start();
include("db/config.php");


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
	<title>Bank Settings- D.V. Electromatic Pvt. Ltd</title>

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
								<div class="sidebar-inner slimscroll">
									<div id="sidebar-menu5" class="sidebar-menu">
										<ul>
											<li class="submenu-open">
												<ul>
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="settings"></i><span>General
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="general-settings.php">Profile</a></li>
															<li><a href="change-password.php">Change Password</a></li>
															<!-- <li><a href="security-settings.php">Security</a></li>
															<li><a href="notification.php">Notifications</a></li>
															<li><a href="connected-apps.php">Connected Apps</a></li> -->
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="airplay"></i><span>Website
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<!-- <li><a href="system-settings.php">System Settings</a></li> -->
															<li><a href="company-settings.php">Company Settings </a>
															</li>
															<li><a href="localization-settings.php">Localization</a>
															</li>
															<!-- <li><a href="prefixes.php">Prefixes</a></li>
															<li><a href="preference.php">Preference</a></li>
															<li><a href="appearance.php">Appearance</a></li>
															<li><a href="social-authentication.php">Social
																	Authentication</a></li>
															<li><a href="language-settings.php">Language</a></li> -->
														</ul>
													</li>
													<!-- <li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="archive"></i><span>App
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="invoice-settings.php">Invoice</a></li>
															<li><a href="printer-settings.php">Printer </a></li>
															<li><a href="pos-settings.php">POS</a></li>
															<li><a href="custom-fields.php">Custom Fields</a></li>
														</ul>
													</li> -->
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="server"></i><span>System
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="email-settings.php">Email</a></li>
															<li><a href="sms-gateway.php">SMS Gateways</a></li>
															<li><a href="otp-settings.php">OTP</a></li>
															<!-- <li><a href="gdpr-settings.php">GDPR Cookies</a></li> -->
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);" class="active subdrop"><i
																data-feather="credit-card"></i><span>Financial
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="payment-gateway-settings.php">Payment
																	Gateway</a></li>
															<li><a href="bank-settings-grid.php" class="active">Bank
																	Accounts </a></li>
															<!-- <li><a href="tax-rates.php">Tax Rates</a></li> -->
															<li><a href="currency-settings.php">Currencies</a></li>
														</ul>
													</li>
													<!-- <li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="layout"></i><span>Other
																Settings</span></a>
														<ul>
															<li><a href="storage-settings.php">Storage</a></li>
															<li><a href="ban-ip-address.php">Ban IP Address </a></li>
														</ul>
													</li> -->
												</ul>
											</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="settings-page-wrap w-50">
								<div class="setting-title">
									<h4>Bank Account</h4>
								</div>
							
								<div class="page-header bank-settings justify-content-end">
									<a href="bank-settings-list.php" class="btn-list me-2"><i data-feather="list"
											class="feather-user"></i></a>
									<a href="bank-settings-grid.php" class="btn-grid active"><i data-feather="grid"
											class="feather-user"></i></a>
									<div class="page-btn">
										<a href="#" class="btn btn-added" data-bs-toggle="modal"
											data-bs-target="#add-account"><i data-feather="plus-circle"
												class="me-2"></i>Add New Account</a>
									</div>
								</div>
								<?php
									if (isset($_SESSION['status'])) {
										?>
										<div class="alert alert-success alert-dismissible fade show" role="alert"
											id="message" style="height:50px; font-size:15px; font-weight:50px;">
											<strong>Success !</strong>
											<?= $_SESSION['status']; ?>
											<button type="button" class="btn-close" data-bs-dismiss="alert"
												aria-label="Close"></button>
										</div>
										<?php
										unset($_SESSION['status']);
									}
									?>
								<div class="row">
								<?php
// Assuming you have established a database connection already

// Fetch bank account details from the database
$query = "SELECT `bank_id`, `bank_name`, `account_number`, `account_name`, `branch`, `ifsc`, `status` FROM `bank_account_details`";
$result = mysqli_query($conn, $query);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and generate HTML for bank account details
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
            <div class="bank-box active">
                <div class="bank-header">
                    <div class="bank-name">
                        <h6><?php echo $row['bank_name']; ?></h6>
                        <p>**** **** <?php echo substr($row['account_number'], -4); ?></p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="bank-info">
                        <span>Holder Name</span>
                        <h6><?php echo $row['account_name']; ?></h6>
                    </div>
                    <div class="edit-delete-action bank-action-btn">
                        <a class="p-2" href="edit-bank-settings.php?bank_id=<?php echo base64_encode($row['bank_id']); ?>">
                            <i data-feather="edit" class="feather-edit"></i>
                        </a>
                        <a class="p-2" href="delete-bank.php?bank_id=<?php echo base64_encode($row['bank_id']); ?>"   onclick="return confirm('Are you sure want to delete?')">
                            <i data-feather="trash-2" class="feather-trash-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    // No bank account details found
    echo "No bank account details found.";
}

?>

									<!-- <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
										<div class="bank-box">
											<div class="bank-header">
												<div class="bank-name">
													<h6>Swiss Bank</h6>
													<p>**** **** 1796</p>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<div class="bank-info">
													<span>Holder Name</span>
													<h6>Andrew</h6>
												</div>
												<div class="edit-delete-action bank-action-btn">
													<a class="me-2 p-2" href="#" data-bs-toggle="modal"
														data-bs-target="#edit-account">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
										<div class="bank-box">
											<div class="bank-header">
												<div class="bank-name">
													<h6>HDFC</h6>
													<p>**** **** 1832</p>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<div class="bank-info">
													<span>Holder Name</span>
													<h6>Mathew</h6>
												</div>
												<div class="edit-delete-action bank-action-btn">
													<a class="me-2 p-2" href="#" data-bs-toggle="modal"
														data-bs-target="#edit-account">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add Bank Account -->
	<div class="modal fade" id="add-account">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Bank Account</h4>
							</div>
							<div
								class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
								<input type="checkbox" id="user1" class="check" checked>
								<label for="user1" class="checktoggle"> </label>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="bank-settings.php" method="post">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Bank Name <span> *</span></label>
											<input type="text"  name="bank_name" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Account Number <span> *</span></label>
											<input type="text"  name="account_number" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Account Name <span> *</span></label>
											<input type="text" name="account_name" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Branch <span> *</
											span></label>
											<input type="text" name="branch" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">IFSC <span> *</span></label>
											<input type="text"  name="ifsc" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center mb-3">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user2" class="check" checked="">
											<label for="user2" class="checktoggle"></label>
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Make as default</span>
											<input type="checkbox" id="user3" class="check" checked="">
											<label for="user3" class="checktoggle"></label>
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" name="submit" value="submit" class="btn btn-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Bank Account -->

	<!-- Edit Bank Account -->
	<div class="modal fade" id="edit-account">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Edit Bank Account</h4>
							</div>
							<div
								class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
								<input type="checkbox" id="user4" class="check" checked>
								<label for="user4" class="checktoggle"> </label>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
						<form action="#" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Bank Name <span> *</span></label>
                <input type="text" name="bank_name" class="form-control" value="<?php echo $row['bank_name']; ?>">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Account Number <span> *</span></label>
                <input type="text" name="account_number" class="form-control" value="<?php echo $row['account_number']; ?>">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Account Name <span> *</span></label>
                <input type="text" name="account_name" class="form-control" value="<?php echo $row['account_name']; ?>">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Branch <span> *</span></label>
                <input type="text" name="branch" class="form-control" value="<?php echo $row['branch']; ?>">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">IFSC <span> *</span></label>
                <input type="text" name="ifsc" class="form-control" value="<?php echo $row['ifsc']; ?>">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="status-toggle modal-status d-flex justify-content-between align-items-center mb-3">
                <span class="status-label">Status</span>
                <input type="checkbox" id="user5" class="check">
                <label for="user5" class="checktoggle"></label>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                <span class="status-label">Make as default</span>
                <input type="checkbox" id="user6" class="check" >
                <label for="user6" class="checktoggle"></label>
            </div>
        </div>
    </div>
    <div class="modal-footer-btn">
        <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" value="submit" class="btn btn-submit">Save Changes</button>
    </div>
</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Bank Account -->
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
	<script>
            setTimeout(function () {
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