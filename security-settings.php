<?php

session_start();
require_once('db/config.php');
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
        <title>Security - D.V. Electromatic Pvt. Ltd</title>
		
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
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
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
															<a href="javascript:void(0);" class="active subdrop"><i data-feather="settings"></i><span>General Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="general-settings.php">Profile</a></li>
																<li><a href="security-settings.php" class="active">Security</a></li>
																<li><a href="notification.php">Notifications</a></li>
																<li><a href="connected-apps.php">Connected Apps</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);"><i data-feather="airplay"></i><span>Website Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="system-settings.php">System Settings</a></li>
																<li><a href="company-settings.php">Company Settings </a></li>
																<li><a href="localization-settings.php">Localization</a></li>
																<li><a href="prefixes.php">Prefixes</a></li>
																<li><a href="preference.php">Preference</a></li>
																<li><a href="appearance.php">Appearance</a></li>
																<li><a href="social-authentication.php">Social Authentication</a></li>
																<li><a href="language-settings.php">Language</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);"><i data-feather="archive"></i><span>App Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="invoice-settings.php">Invoice</a></li>
																<li><a href="printer-settings.php">Printer </a></li>
																<li><a href="pos-settings.php">POS</a></li>
																<li><a href="custom-fields.php">Custom Fields</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);"><i data-feather="server"></i><span>System Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="email-settings.php">Email</a></li>
																<li><a href="">SMS Gateways</a></li>
																<li><a href="otp-settings.php">OTP</a></li>
																<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);"><i data-feather="credit-card"></i><span>Financial Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
																<li><a href="bank-settings-grid.php">Bank Accounts </a></li>
																<li><a href="tax-rates.php">Tax Rates</a></li>
																<li><a href="currency-settings.php">Currencies</a></li>
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);"><i data-feather="layout"></i><span>Other Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="storage-settings.php">Storage</a></li>
																<li><a href="ban-ip-address.php">Ban IP Address </a></li>
															</ul>
														</li>
													</ul>								
												</li>
												
											</ul>
										</div>
									</div>
								</div>
								<div class="settings-page-wrap">
									<div class="setting-title">
										<h4>Security</h4>
									</div>
									<div class="security-settings">
										<ul>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="eye-off"></i></span>
													<div class="security-title">
														<h5>Password</h5>
														<p>Last Changed 22 July 2023, 10:30 AM</p>
													</div>
												</div>
												<div class="security-btn">
													<a href="javascript:void(0);" class="btn btn-primary">Change Password</a>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="shield"></i></span>
													<div class="security-title">
														<h5>Two Factor</h5>
														<p>Receive codes via SMS or email every time you login</p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<a href="javascript:void(0);" class="btn btn-danger">Disable</a>
													<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
														<input type="checkbox" id="user3" class="check" checked="">
														<label for="user3" class="checktoggle">	</label>
													</div>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="shield"></i></span>
													<div class="security-title">
														<h5>Google Authentication</h5>
														<p>Connect to Google</p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<span class="badges-connected">Connected</span>
													<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
														<input type="checkbox" id="user4" class="check" checked="">
														<label for="user4" class="checktoggle">	</label>
													</div>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="phone"></i></span>
													<div class="security-title">
														<h5>Phone Number Verification</h5>
														<p>Verified Mobile Number : +81699799974</p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<span><i class=" fa fa-check-circle me-2"></i></span>
													<a href="javascript:void(0);" class="btn btn-primary">Change</a>
													<a href="javascript:void(0);" class="remove-red ms-2">Remove</a>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="mail"></i></span>
													<div class="security-title">
														<h5>Email Verification</h5>
														<p>Verified Email : <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f79e999198b7928f969a879b92d994989a">[email&#160;protected]</a></p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<span><i class=" fa fa-check-circle me-2"></i></span>
													<a href="javascript:void(0);" class="btn btn-primary">Change</a>
													<a href="javascript:void(0);" class="remove-red ms-2">Remove</a>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="tool"></i></span>
													<div class="security-title">
														<h5>Device Management</h5>
														<p>Last Changed 22 July 2023, 10:30 AM</p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<a href="javascript:void(0);" class="manage-btn">Manage</a>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="box"></i></span>
													<div class="security-title">
														<h5>Account Activity</h5>
														<p>Last Changed 25 July 2023, 11:00 AM</p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<a href="javascript:void(0);" class="manage-btn">View</a>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="slash"></i></span>
													<div class="security-title">
														<h5>Deactivate Account</h5>
														<p>Last Changed 21 July 2023, 09:37 AM</p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<a href="javascript:void(0);" class="manage-btn">Deactivate</a>
												</div>
											</li>
											<li>
												<div class="security-type">
													<span class="security-icon"><i data-feather="trash-2"></i></span>
													<div class="security-title">
														<h5>Delete Account</h5>
														<p>Last Changed 26 July 2023, 11:40 AM</p>
													</div>
												</div>
												<div class="security-btn d-flex align-items-center">
													<a href="javascript:void(0);" class="btn btn-danger">Delete</a>
												</div>
											</li>
										</ul>
									</div>
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

		 
		<!-- jQuery -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>

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

		<!-- Custom JS --><script src="assets/js/theme-script.js"></script>	
		<script src="assets/js/script.js"></script>

	
    </body>
</html>