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
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Currencies Settings- D.V. Electromatic Pvt. Ltd</title>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        div.dt-buttons>.dt-button,
        div.dt-buttons>div.dt-button-split .dt-button {
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            margin-left: 0.167em;
            margin-right: 0.167em;
            margin-bottom: 0.333em;
            padding: 0.5em 1em;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            cursor: pointer;
            font-size: 0.88em;
            line-height: 1.6em;
            color: #fff !important;
            white-space: nowrap;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.1);
            /* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr="rgba(230, 230, 230, 0.1)", EndColorStr="rgba(0, 0, 0, 0.1)");
            background: #d0312d;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            text-decoration: none;
            outline: none;
            text-overflow: ellipsis;
        }

        div.dt-buttons>.dt-button:hover {
            color: inherit !important;
        }


        div.dt-buttons>.dt-button,
        div.dt-buttons>div.dt-button-split .dt-button {
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            margin-left: 0.167em;
            margin-right: 0.167em;
            margin-bottom: 0.333em;
            padding: 0.5em 1em;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            cursor: pointer;
            font-size: 0.88em;
            line-height: 1.6em;
            color: inherit;
            white-space: nowrap;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.1);
            /* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr="rgba(230, 230, 230, 0.1)", EndColorStr="rgba(0, 0, 0, 0.1)");
            background: #d0312d;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            text-decoration: none;
            outline: none;
            text-overflow: ellipsis;
        }



        div.dt-container .dt-paging .dt-paging-button.current,
        div.dt-container .dt-paging .dt-paging-button.current:hover {
            color: #ffffff !important;
            border: 1px solid rgba(0, 0, 0, 0.3);
            background-color: rgba(0, 0, 0, 0.05);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(230, 230, 230, 0.05)), color-stop(100%, rgba(0, 0, 0, 0.05)));
            background: -webkit-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            background: -moz-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            background: -ms-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            background: -o-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            /* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%); */
            background: #d0312d;

        }

        div.dt-container .dt-paging .dt-paging-button.current:hover,
        div.dt-container .dt-paging .dt-paging-button.current:hover {
            color: #fff !important;
            border: 1px solid #fff;
        }
    </style>

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
					<!-- <ul class="table-top-head">
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i
									data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
									data-feather="chevron-up" class="feather-chevron-up"></i></a>
						</li>
					</ul> -->
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
														<a href="javascript:void(0);" class="subdrop active"><i
																data-feather="credit-card"></i><span>Financial
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="payment-gateway-settings.php">Payment
																	Gateway</a></li>
															<li><a href="bank-settings-grid.php">Bank Accounts </a></li>
															<!-- <li><a href="tax-rates.php">Tax Rates</a></li> -->
															<li><a href="currency-settings.php"
																	class="active">Currencies</a></li>
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
								<div class="setting-title">
									<h4>Currency</h4>
								</div>
								<div class="page-header bank-settings justify-content-end">
									<div class="page-btn">
										<a href="#" class="btn btn-added" data-bs-toggle="modal"
											data-bs-target="#add-currency"><i data-feather="plus-circle"
												class="me-2"></i>Add New Currency</a>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="card table-list-card">
											<div class="card-body">
												<!-- <div class="table-top">
													<div class="search-set">
														<div class="search-input">
															<a href="" class="btn btn-searchset"><i
																	data-feather="search"
																	class="feather-search"></i></a>
														</div>
													</div>
													<div class="search-path">
														<div class="d-flex align-items-center">
															<a class="btn btn-filter" id="filter_search">
																<i data-feather="filter" class="filter-icon"></i>
																<span><img src="assets/img/icons/closes.svg"
																		alt="img"></span>
															</a>
														</div>
													</div>
													<div class="form-sort">
														<i data-feather="sliders" class="info-img"></i>
														<select class="select">
															<option>Sort by Date</option>
															<option>Newest</option>
															<option>Oldest</option>
														</select>
													</div>
												</div> -->
												<!-- /Filter -->
												<div class="card" id="filter_inputs">
													<div class="card-body pb-0">
														<div class="row">
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks">
																	<i data-feather="user" class="info-img"></i>
																	<select class="select">
																		<option>Choose Name</option>
																		<option>Euro</option>
																		<option>England Pound</option>
																	</select>
																</div>
															</div>
															<!-- <div class="col-lg-3 col-sm-6 col-12 ms-auto">
																<div class="input-blocks">
																	<a class="btn btn-filters ms-auto"> <i
																			data-feather="search"
																			class="feather-search"></i> Search </a>
																</div>
															</div> -->
														</div>
													</div>
												</div>
												<!-- /Filter -->
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
												<div class="table-responsive">
												<table class=" display " id="example" style="width:100%">
														<thead>
															<tr>
																<!-- <th class="no-sort">
																	<label class="checkboxs">
																		<input type="checkbox" id="select-all">
																		<span class="checkmarks"></span>
																	</label>
																</th> -->
																<th>Currency Name</th>
																<th>Code </th>
																<th>Symbol</th>
																<th>Exchange Rate</th>
																<th>Created On</th>
																<th class="no-sort text-end">Action</th>
															</tr>
														</thead>
														<tbody>	
															<?php
// Assuming you have already established a database connection

// Perform the query to fetch currency details
$sql = "SELECT `currency_id`, `currency_name`, `code`, `symbol`, `exchange_rate`, `created_on` FROM `currency_details`";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        // Output each column value within the table row
        echo "<td>" . $row["currency_name"] . "</td>";
        echo "<td>" . $row["code"] . "</td>";
        echo "<td>" . $row["symbol"] . "</td>";
        echo "<td>" . $row["exchange_rate"] . "</td>";
        echo "<td>" . $row["created_on"] . "</td>";
        echo "<td class='action-table-data justify-content-end'>";
        echo "<div class='edit-delete-action'>";
        echo "<a class='me-2 p-2' href='edit-currency.php?currency_id=" . base64_encode($row['currency_id']) . "'>";
        echo "<i data-feather='edit' class='feather-edit'></i>";
        echo "</a>";
		echo "<a class=' p-2' href='delete-currency.php?currency_id="  . base64_encode($row['currency_id']) .  "' onclick=\"return confirm('Are you sure want to delete?')\">";

        echo "<i data-feather='trash-2' class='feather-trash-2'></i>";
        echo "</a>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    // If no rows were returned, display a message in a single table cell
    echo "<tr><td colspan='6'>No currency details found</td></tr>";
}
$conn->close();
?>

															
														</tbody>
													</table>
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
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add Currency -->
	<div class="modal fade" id="add-currency">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Currency</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="currency-settings-query.php" method="post">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Name <span> *</span></label>
											<input type="text"  name="currency_name" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Symbol <span> *</span></label>
											<input type="text" name="symbol" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Code <span> *</span></label>
											<input type="text" name="code" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Rate <span> *</span></label>
											<input type="text"  name="exchange_rate" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user6" class="check" checked="">
											<label for="user6" class="checktoggle"></label>
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
	<!-- /Add Currency -->

	<!-- Edit Currency -->
	<div class="modal fade" id="edit-currency">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Edit Currency</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="currency-settings.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Name <span> *</span></label>
											<input type="text" class="form-control" value="Euro">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Symbol <span> *</span></label>
											<input type="text" class="form-control" value="EUR">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Code <span> *</span></label>
											<input type="text" class="form-control" value="€">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Rate <span> *</span></label>
											<input type="text" class="form-control" value="Default">
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user5" class="check" checked="">
											<label for="user5" class="checktoggle"></label>
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Currency -->
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
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script scr="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script>

        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o" style="font-size:150%;"></i>',
                            titleAttr: 'Copy'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o" style="font-size:150%;"></i>',
                            titleAttr: 'Excel'
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-text-o" style="font-size:150%;"></i>',
                            titleAttr: 'CSV'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o" style="font-size:150%;" ></i>',
                            titleAttr: 'PDF'
                        }
                    ]
                }
            }
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