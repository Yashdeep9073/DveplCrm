
<?php
error_reporting(0);
session_start();
include("db/config.php");
$result3 = mysqli_query($conn, "SELECT * FROM localization");
$row3 = mysqli_fetch_assoc($result3);

$Language = isset($row3['website_language']) ? $row3['website_language'] : '';
$Timezone = isset($row3['website_timezone']) ? $row3['website_timezone'] : '';
$DateFormat = isset($row3['website_date_format']) ? $row3['website_date_format'] : '';
$TimeFormat = isset($row3['website_time_format']) ? $row3['website_time_format'] : '';
$StartingMonth = isset($row3['website_starting_month']) ? $row3['website_starting_month'] : '';
$FinancialYear = isset($row3['website_financial_year']) ? $row3['website_financial_year'] : '';
$l = isset($row3['id']) ? $row3['id'] : '';
if (isset($_POST['submit'])) {

	$Newlanguage = $_POST['language'];
	$NewTimeZone = $_POST['timezone'];
	$NewDateFormat = $_POST['date_format'];
	$NewTimeFormat = $_POST['time_format'];
	$NewFinancialYear = $_POST['finanical_year'];
	$NewStartingMonth = $_POST['starting_month'];
	
	$sql = "INSERT INTO localization (id, website_language, website_timezone, website_date_format, website_time_format, website_financial_year, website_starting_month)
			VALUES ('$l', '$Newlanguage', '$NewTimeZone', '$NewDateFormat', '$NewTimeFormat', '$NewFinancialYear', '$NewStartingMonth')
			ON DUPLICATE KEY UPDATE website_language='$Newlanguage', website_timezone='$NewTimeZone', website_date_format='$NewDateFormat', website_time_format='$NewTimeFormat', website_financial_year='$NewFinancialYear', website_starting_month='$NewStartingMonth'";
	
	if ($conn->query($sql) === TRUE) {
		$_SESSION['status'] = "The localization settings has been updated.";
	}else {
		echo "Error: " . $sql . "<br>" . $conn->error;
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
        <title>Localization Settings -D.V. Electromatic Pvt. Ltd</title>
		
		
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- animation CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

		<!-- Bootstrap Tagsinput CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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
		
		<div id="global-loader" >
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
															<a href="javascript:void(0);"><i data-feather="settings"></i><span>General Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="general-settings.php">Profile</a></li>
																<li><a href="change-password.php">Change Password</a></li>
																<!-- <li><a href="security-settings.php">Security</a></li>
																<li><a href="notification.php">Notifications</a></li>
																<li><a href="connected-apps.php">Connected Apps</a></li> -->
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);" class="active subdrop"><i data-feather="airplay"></i><span>Website Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<!-- <li><a href="system-settings.php">System Settings</a></li> -->
																<li><a href="company-settings.php">Company Settings </a></li>
																<li><a href="localization-settings.php" class="active">Localization</a></li>
																<!-- <li><a href="prefixes.php">Prefixes</a></li>
																<li><a href="preference.php">Preference</a></li>
																<li><a href="appearance.php">Appearance</a></li>
																<li><a href="social-authentication.php">Social Authentication</a></li>
																<li><a href="language-settings.php">Language</a></li> -->
															</ul>
														</li>
														<!-- <li class="submenu">
															<a href="javascript:void(0);"><i data-feather="archive"></i><span>App Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="invoice-settings.php">Invoice</a></li>
																<li><a href="printer-settings.php">Printer </a></li>
																<li><a href="pos-settings.php">POS</a></li>
																<li><a href="custom-fields.php">Custom Fields</a></li>
															</ul>
														</li> -->
														<li class="submenu">
															<a href="javascript:void(0);"><i data-feather="server"></i><span>System Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="email-settings.php">Email</a></li>
																<li><a href="sms-gateway.php">SMS Gateways</a></li>
																<li><a href="otp-settings.php">OTP</a></li>
																<!-- <li><a href="gdpr-settings.php">GDPR Cookies</a></li> -->
															</ul>
														</li>
														<li class="submenu">
															<a href="javascript:void(0);"><i data-feather="credit-card"></i><span>Financial Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
																<li><a href="bank-settings-grid.php">Bank Accounts </a></li>
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
								
								<div class="settings-page-wrap">
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
									<form action="" method="post">
									
										<div class="setting-title">
											<h4>Localization</h4>
										</div>
										
										<div class="company-info company-images">
											<div class="card-title-head">
												<h6><span><i data-feather="list"></i></span>Basic Information</h6>
											</div>
											<div class="localization-info">
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Language</h6>
															<p>Select Language of the Website</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select" name="language" value="<?php echo $Language; ?>">
																<option value="English">English</option>
																<option value="Spanish">Spanish</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Language Switcher</h6>
															<p>To display in all the pages</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																<input type="checkbox" id="user3" class="check" checked>
																<label for="user3" class="checktoggle"></label>
															</div>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Timezone</h6>
															<p>Select Time zone in website</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select" name="timezone">
															<option value="" disabled>Choose</option>
            									<option value="UTC+04:00" <?php if ($Timezone == "UTC+04:00") echo "selected"; ?>>UTC+04:00</option>
            									<option value="UTC+05:30" <?php if ($Timezone == "UTC+05:30") echo "selected"; ?>>UTC+05:30</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Date format</h6>
															<p>Select date format to display in website</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select" name="date_format">
															<option value="" disabled>Choose</option>
            										<option value="DD-MM-YYYY" <?php if ($DateFormat == "DD-MM-YYYY") echo "selected"; ?>>DD-MM-YYYY</option>
            										<option value="MM-DD-YYYY" <?php if ($DateFormat == "MM-DD-YYYY") echo "selected"; ?>>MM-DD-YYYY</option>
        										</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Time Format</h6>
															<p>Select time format to display in website</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select" name="time_format">
															<option value="" disabled>Choose</option>
            										<option value="12 Hours" <?php if ($TimeFormat == "12 Hours") echo "selected"; ?>>12 Hours</option>
           	 										<option value="24 Hours" <?php if ($TimeFormat == "24 Hours") echo "selected"; ?>>24 Hours</option>
        										</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Financial Year</h6>
															<p>Select year for finance </p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select" name="finanical_year">
																<option value="2024" value="<?php echo $FinancialYear; ?>" >2024</option>
																<option vallue="2023" value="<?php echo $FinancialYear; ?>" >2023</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Starting Month</h6>
															<p>Select starting month to display  </p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select" name="starting_month">
															<option value="" disabled>Choose</option>
            										<option value="January" <?php if ($StartingMonth == "January") echo "selected"; ?>>January</option>
            										<option value="February" <?php if ($StartingMonth == "February") echo "selected"; ?>>February</option>
            										<option value="March" <?php if ($StartingMonth == "March") echo "selected"; ?>>March</option>
            										<option value="April" <?php if ($StartingMonth == "April") echo "selected"; ?>>April</option>
        										</select>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<!-- <div class="company-info company-images">
											<div class="card-title-head">
												<h6><span><i data-feather="credit-card"></i></span>Currency Settings</h6>
											</div>
											<div class="localization-info">
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Currency</h6>
															<p>Select currency </p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select">
																<option>United Stated of America</option>
																<option>India</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Currency Symbol</h6>
															<p>Select currency symbol</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select">
																<option>$</option>
																<option>€</option>
																<option>¥</option>
																
															</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Currency Position</h6>
															<p>Select currency position</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select">
																<option>$100</option>
																<option>$400</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Decimal Separator</h6>
															<p>Select decimal</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select">
																<option>.</option>
																<option>.</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Thousand Separator</h6>
															<p>Select thousand</p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select">
																<option>,</option>
																<option>,</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<div class="company-info company-images">
											<div class="card-title-head">
												<h6><span><i data-feather="map"></i></span>Country Settings</h6>
											</div>
											<div class="localization-info">
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Countries Restriction</h6>
															<p>Select country </p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select">
															<select class="select">
																<option>Allow All Countries</option>
																<option>Deny All Countries</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="company-images">
											<div class="card-title-head">
												<h6><span><i data-feather="map"></i></span>File Settings</h6>
											</div>
											<div class="localization-info">
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info">
															<h6>Allowed Files</h6>
															<p>Select files </p>
														</div>
													</div>
													<div class="col-xl-6 col-lg-8 col-sm-4">
														<div class="localization-select w-100">
															<div class="input-blocks">
																<input class="input-tags form-control" type="text" data-role="tagsinput"  name="specialist" value="JPG,GIF,PNG">
															</div>
															
														</div>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col-sm-4">
														<div class="setting-info mb-sm-0">
															<h6>Max File Size</h6>
															<p>File size </p>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="localization-select d-flex align-items-center mb-0">
															<input type="text" class="form-control" value="5000">
															<span class="ms-2"> MB</span>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<div class="modal-footer-btn">
											<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
											<button type="submit"  name="submit" value="submit" class="btn btn-submit">Save Changes</button>
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

		<!-- Bootstrap Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

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