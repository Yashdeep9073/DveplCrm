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
        <title>Email Settings - D.V. Electromatic Pvt. Ltd</title>
		
		
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
		
		<!-- <div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div> -->

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
                              <?php require_once('setting-sidebar.php');?>
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
									<div class="setting-title">
										<h4>Email Settings</h4>
									</div>
									<div class="page-header text-end justify-content-end">
										<a href="javascript:void(0);" class="btn-added btn-primary"><i data-feather="mail" class="me-2"></i>Send test email</a>
									</div>
									<div class="row">
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
											<div class="connected-app-card email-setting d-flex w-100">
												<ul class="w-100">
													<li class="flex-column align-items-start">
														<div class="d-flex align-items-center justify-content-between w-100 mb-2">
															<div class="security-type d-flex align-items-center">
																<div class="security-title">
																	<h5>PHP Mailer</h5>
																</div>
															</div>
														</div>
														<p>Used to send emails safely and easily via PHP code from a web server.</p>
													</li>
													<li>
														<div class="integration-btn">
															<a href="" data-bs-toggle="modal" data-bs-target="#php-mail"><i data-feather="tool" class="me-2"></i>Connect</a>
														</div>
														<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
															<input type="checkbox" id="user1" class="check" checked>
															<label for="user1" class="checktoggle">	</label>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
											<div class="connected-app-card email-setting d-flex w-100">
												<ul class="w-100">
													<li class="flex-column align-items-start">
														<div class="d-flex align-items-center justify-content-between w-100 mb-2">
															<div class="security-type d-flex align-items-center">
																<div class="security-title">
																	<h5>SMTP</h5>
																</div>
															</div>
														</div>
														<p>SMTP is used to send, relay or forward messages from a mail client.</p>
													</li>
													<li>
														<div class="integration-btn">
															<a href="" data-bs-toggle="modal" data-bs-target="#smtp-mail"><i data-feather="tool" class="me-2"></i>Connect</a>
														</div>
														<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
															<input type="checkbox" id="user2" class="check" checked>
															<label for="user2" class="checktoggle">	</label>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
											<div class="connected-app-card email-setting d-flex w-100">
												<ul class="w-100">
													<li class="flex-column align-items-start">
														<div class="d-flex align-items-center justify-content-between w-100 mb-2">
															<div class="security-type d-flex align-items-center">
																<div class="security-title">
																	<h5>SendGrid </h5>
																</div>
															</div>
															<div class="connect-btn">
																<a href="javascript:void(0);">Connected</a>
															</div>
														</div>
														<p>Cloud-based email marketing tool that assists marketers and developers .</p>
													</li>
													<li>
														<div class="integration-btn">
															<a href="" data-bs-toggle="modal" data-bs-target="#test-mail"><i data-feather="tool" class="me-2"></i>View Integration</a>
														</div>
														<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
															<input type="checkbox" id="user3" class="check" checked>
															<label for="user3" class="checktoggle">	</label>
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
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- Php Mail -->
		<div class="modal fade" id="php-mail">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>PHP Mailer</h4>
								</div>
								<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
									<input type="checkbox" id="user4" class="check" checked>
									<label for="user4" class="checktoggle">	</label>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="email-settings-query.php" method="post">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">From Email Address <span> *</span></label>
												<input type="email" class="form-control" name="name">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Email Password <span> *</span></label>
												<input type="password" class="form-control" name="password">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label"> From Email Name <span> *</span></label>
												<input type="text" class="form-control" name="from_email_name">
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit" name="submit" value="submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Php Mail -->

		<!-- Smtp Mail -->
		<div class="modal fade" id="smtp-mail">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>SMTP</h4>
								</div>
								<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
									<input type="checkbox" id="user5" class="check" checked>
									<label for="user5" class="checktoggle">	</label>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="smtp-setting.php" method="post">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">From Email Address <span> *</span></label>
												<input type="email" name="smtp_email" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Email Password <span> *</span></label>
												<input type="password" name="pass" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label"> Email Host <span> *</span></label>
												<input type="text" name="host" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label"> Port <span> *</span></label>
												<input type="text" class="form-control" name="port">
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit" name="submit" value="submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Smtp Mail -->

		<!-- Test Mail -->
		<div class="modal fade" id="test-mail">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Test Mail</h4>
								</div>
								<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
									<input type="checkbox" id="user6" class="check" checked>
									<label for="user6" class="checktoggle">	</label>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="email-settings.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label">Enter Email Address <span> *</span></label>
												<input type="email" class="form-control">
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Test Mail -->
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