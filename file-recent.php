<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dreams Pos Admin Template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- animation CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

		<!-- Summernote CSS -->
		<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="assets/css/plyr.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		
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

				<!-- Logo -->
				<div class="header-left active">
					<a href="dashboard.php" class="logo logo-normal">
						<img src="assets/img/logo.png" alt="">
					</a>
					<a href="dashboard.php" class="logo logo-white">
						<img src="assets/img/logo-white.png" alt="">
					</a>
					<a href="dashboard.php" class="logo-small">
						<img src="assets/img/logo-small.png" alt="">
					</a>
					<a id="toggle_btn" href="javascript:void(0);">
						<i data-feather="chevrons-left" class="feather-16"></i>
					</a>
				</div>
				<!-- /Logo -->

				<a id="mobile_btn" class="mobile_btn" href="#sidebar">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>

				<!-- Header Menu -->
				<ul class="nav user-menu">

					<!-- Search -->
						<li class="nav-item nav-searchinputs">
							<div class="top-nav-search">
								<a href="javascript:void(0);" class="responsive-search">
									<i class="fa fa-search"></i>
								</a>
								<form action="#" class="dropdown">
									<div class="searchinputs dropdown-toggle" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false">
										<input type="text" placeholder="Search">
										<div class="search-addon">
											<span><i data-feather="x-circle" class="feather-14"></i></span>
										</div>
									</div>
									<div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
										<div class="search-info">
											<h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches
											</h6>
											<ul class="search-tags">
												<li><a href="javascript:void(0);">Products</a></li>
												<li><a href="javascript:void(0);">Sales</a></li>
												<li><a href="javascript:void(0);">Applications</a></li>
											</ul>
										</div>
										<div class="search-info">
											<h6><span><i data-feather="help-circle" class="feather-16"></i></span>Help</h6>
											<p>How to Change Product Volume from 0 to 200 on Inventory management</p>
											<p>Change Product Name</p>
										</div>
										<div class="search-info">
											<h6><span><i data-feather="user" class="feather-16"></i></span>Customers</h6>
											<ul class="customers">
												<li><a href="javascript:void(0);">Aron Varu<img src="assets/img/profiles/avator1.jpg" alt="" class="img-fluid"></a></li>
												<li><a href="javascript:void(0);">Jonita<img src="assets/img/profiles/avatar-01.jpg" alt="" class="img-fluid"></a></li>
												<li><a href="javascript:void(0);">Aaron<img src="assets/img/profiles/avatar-10.jpg" alt="" class="img-fluid"></a></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
						</li>
						<!-- /Search -->


					<!-- Select Store -->
					<li class="nav-item dropdown has-arrow main-drop select-store-dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle nav-link select-store"
							data-bs-toggle="dropdown">
							<span class="user-info">
								<span class="user-letter">
									<img src="assets/img/store/store-01.png" alt="Store Logo" class="img-fluid">
								</span>
								<span class="user-detail">
									<span class="user-name">Select Store</span>
								</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/store/store-01.png" alt="Store Logo" class="img-fluid"> Grocery Alpha
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/store/store-02.png" alt="Store Logo" class="img-fluid"> Grocery Apex
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/store/store-03.png" alt="Store Logo" class="img-fluid"> Grocery Bevy
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/store/store-04.png" alt="Store Logo" class="img-fluid"> Grocery Eden
							</a>
						</div>
					</li>
					<!-- /Select Store -->

					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav nav-item-box">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
							role="button">
							<img src="assets/img/flags/us.png" alt="Language" class="img-fluid">
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item active">
								<img src="assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->

					<li class="nav-item nav-item-box">
						<a href="javascript:void(0);" id="btnFullscreen">
							<i data-feather="maximize"></i>
						</a>
					</li>
					<li class="nav-item nav-item-box">
						<a href="email.php">
							<i data-feather="mail"></i>
							<span class="badge rounded-pill">1</span>
						</a>
					</li>
					<!-- Notifications -->
					<li class="nav-item dropdown nav-item-box">
						<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i data-feather="bell"></i><span class="badge rounded-pill">2</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.php">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">John Doe</span> added
														new task <span class="noti-title">Patient appointment booking</span>
													</p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span>
													</p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
														changed the task name <span class="noti-title">Appointment booking
															with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span>
													</p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Misty Tison</span>
														added <span class="noti-title">Domenic Houston</span> and <span
															class="noti-title">Claire Mapes</span> to project <span
															class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span>
													</p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span>
														completed task <span class="noti-title">Patient and Doctor video
															conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span>
													</p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.php">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
														added new task <span class="noti-title">Private chat module</span>
													</p>
													<p class="noti-time"><span class="notification-time">2 days ago</span>
													</p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.php">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<li class="nav-item nav-item-box">
						<a href="general-settings.php"><i data-feather="settings"></i></a>
					</li>
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
							<span class="user-info">
								<span class="user-letter">
									<img src="assets/img/profiles/avator1.jpg" alt="" class="img-fluid">
								</span>
								<span class="user-detail">
									<span class="user-name">John Smilga</span>
									<span class="user-role">Super Admin</span>
								</span>
							</span>
						</a>
						<div class="dropdown-menu menu-drop-user">
							<div class="profilename">
								<div class="profileset">
									<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
										<span class="status online"></span></span>
									<div class="profilesets">
										<h6>John Smilga</h6>
										<h5>Super Admin</h5>
									</div>
								</div>
								<hr class="m-0">
								<a class="dropdown-item" href="profile.php"> <i class="me-2" data-feather="user"></i> My
									Profile</a>
								<a class="dropdown-item" href="general-settings.php"><i class="me-2"
										data-feather="settings"></i>Settings</a>
								<hr class="m-0">
								<a class="dropdown-item logout pb-0" href="signin.php"><img
										src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
							</div>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->

				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
						aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="general-settings.php">Settings</a>
						<a class="dropdown-item" href="signin.php">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
			</div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Main</h6>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="dashboard.php">Admin Dashboard</a></li>
											<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);" class="active subdrop"><i data-feather="smartphone"></i><span>Application</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="chat.php">Chat</a></li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="video-call.php">Video Call</a></li>
													<li><a href="audio-call.php">Audio Call</a></li>
													<li><a href="call-history.php">Call History</a></li>
												</ul>
											</li>
											<li><a href="calendar.php">Calendar</a></li>
											<li><a href="email.php">Email</a></li>
											<li><a href="todo.php">To Do</a></li>
											<li><a href="notes.php">Notes</a></li>
											<li><a href="file-manager.php" class="active">File Manager</a></li>
										</ul>
									</li>
								</ul>								
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Inventory</h6>
								<ul>
									<li><a href="product-list.php"><i data-feather="box"></i><span>Products</span></a></li>
									<li><a href="add-product.php"><i data-feather="plus-square"></i><span>Create Product</span></a></li>
									<li><a href="expired-products.php"><i data-feather="codesandbox"></i><span>Expired Products</span></a></li>
									<li><a href="low-stocks.php"><i data-feather="trending-down"></i><span>Low Stocks</span></a></li>
									<li><a href="category-list.php"><i data-feather="codepen"></i><span>Category</span></a></li>
									<li><a href="sub-categories.php"><i data-feather="speaker"></i><span>Sub Category</span></a></li>
									<li><a href="brand-list.php"><i data-feather="tag"></i><span>Brands</span></a></li>
									<li><a href="units.php"><i data-feather="speaker"></i><span>Units</span></a></li>
									<li><a href="varriant-attributes.php"><i data-feather="layers"></i><span>Variant Attributes</span></a></li>
									<li><a href="warranty.php"><i data-feather="bookmark"></i><span>Warranties</span></a></li>									
									<li><a href="barcode.php"><i data-feather="align-justify"></i><span>Print Barcode</span></a></li>
									<li><a href="qrcode.php"><i data-feather="maximize"></i><span>Print QR Code</span></a></li>
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Stock</h6>
								<ul>
									<li><a href="manage-stocks.php"><i data-feather="package"></i><span>Manage Stock</span></a></li>
									<li><a href="stock-adjustment.php"><i data-feather="clipboard"></i><span>Stock Adjustment</span></a></li>
									<li><a href="stock-transfer.php"><i data-feather="truck"></i><span>Stock Transfer</span></a></li>								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Sales</h6>
								<ul>
									<li><a href="sales-list.php"><i data-feather="shopping-cart"></i><span>Sales</span></a></li>
									<li><a href="invoice-report.php"><i data-feather="file-text"></i><span>Invoices</span></a></li>
									<li><a href="sales-returns.php"><i data-feather="copy"></i><span>Sales Return</span></a></li>	
									<li><a href="quotation-list.php"><i data-feather="save"></i><span>Quotation</span></a></li>								
									<li><a href="pos.php"><i data-feather="hard-drive"></i><span>POS</span></a></li>
								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Promo</h6>
								<ul>
									<li><a href="coupons.php"><i data-feather="shopping-cart"></i><span>Coupons</span></a></li>
								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Purchases</h6>
								<ul>
									<li><a href="purchase-list.php"><i data-feather="shopping-bag"></i><span>Purchases</span></a></li>
									<li><a href="purchase-order-report.php"><i data-feather="file-minus"></i><span>Purchase Order</span></a></li>
									<li><a href="purchase-returns.php"><i data-feather="refresh-cw"></i><span>Purchase Return</span></a></li>									
								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Finance & Accounts</h6>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="file-text"></i><span>Expenses</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="expense-list.php">Expenses</a></li>
											<li><a href="expense-category.php">Expense Category</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Peoples</h6>		
								<ul>
									<li><a href="customers.php"><i data-feather="user"></i><span>Customers</span></a></li>
									<li><a href="suppliers.php"><i data-feather="users"></i><span>Suppliers</span></a></li>
									<li><a href="store-list.php"><i data-feather="home"></i><span>Stores</span></a></li>
									<li><a href="warehouse.php"><i data-feather="archive"></i><span>Warehouses</span></a></li>
								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">HRM</h6>
								<ul>
									<li><a href="employees-grid.php"><i data-feather="user"></i><span>Employees</span></a></li>
									<li><a href="department-grid.php"><i data-feather="users"></i><span>Departments</span></a></li>
									<li><a href="designation.php"><i data-feather="git-merge"></i><span>Designation</span></a></li>
									<li><a href="shift.php"><i data-feather="shuffle"></i><span>Shifts</span></a></li>	
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="book-open"></i><span>Attendence</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="attendance-employee.php">Employee</a></li>
											<li><a href="attendance-admin.php">Admin</a></li>
										</ul>
									</li>
									<li class="submenu">
											<a href="javascript:void(0);"><i data-feather="calendar"></i><span>Leaves</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="leaves-admin.php">Admin Leaves</a></li>
												<li><a href="leaves-employee.php">Employee Leaves</a></li>
												<li><a href="leave-types.php">Leave Types</a></li>
											</ul>
										</li>
									<li><a href="holidays.php"><i data-feather="credit-card"></i><span>Holidays</span></a></li>
									<li class="submenu">
										<a href="payroll-list.php"><i data-feather="dollar-sign"></i><span>Payroll</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="payroll-list.php">Employee Salary</a></li>
											<li><a href="payslip.php">Payslip</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Reports</h6>
								<ul>
									<li><a href="sales-report.php"><i data-feather="bar-chart-2"></i><span>Sales Report</span></a></li>
									<li><a href="purchase-report.php"><i data-feather="pie-chart"></i><span>Purchase report</span></a></li>
									<li><a href="inventory-report.php"><i data-feather="inbox"></i><span>Inventory Report</span></a></li>									
									<li><a href="invoice-report.php"><i data-feather="file"></i><span>Invoice Report</span></a></li>
									<li><a href="supplier-report.php"><i data-feather="user-check"></i><span>Supplier Report</span></a></li>
									<li><a href="customer-report.php"><i data-feather="user"></i><span>Customer Report</span></a></li>
									<li><a href="expense-report.php"><i data-feather="file"></i><span>Expense Report</span></a></li>
									<li><a href="income-report.php"><i data-feather="bar-chart"></i><span>Income Report</span></a></li>
									<li><a href="tax-reports.php"><i data-feather="database"></i><span>Tax Report</span></a></li>
									<li><a href="profit-and-loss.php"><i data-feather="pie-chart"></i><span>Profit & Loss</span></a></li>
								</ul>
							</li>															
							<li class="submenu-open">
								<h6 class="submenu-hdr">User Management</h6>		
								<ul>
									<li><a href="users.php"><i data-feather="user-check"></i><span>Users</span></a></li>
									<li><a href="roles-permissions.php"><i data-feather="shield"></i><span>Roles & Permissions</span></a></li>
									<li><a href="delete-account.php"><i data-feather="lock"></i><span>Delete Account Request</span></a></li>
								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Pages</h6>		
								<ul>
									<li><a href="profile.php"><i data-feather="user"></i><span>Profile</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="shield"></i><span>Authentication</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="signin.php">Cover</a></li>
													<li><a href="dashboard.php">Illustration</a></li>
													<li><a href="signin-3.php">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="register.php">Cover</a></li>
													<li><a href="register-2.php">Illustration</a></li>
													<li><a href="register-3.php">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="forgot-password.php">Cover</a></li>
													<li><a href="forgot-password-2.php">Illustration</a></li>
													<li><a href="forgot-password-3.php">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="reset-password.php">Cover</a></li>
													<li><a href="reset-password-2.php">Illustration</a></li>
													<li><a href="reset-password-3.php">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="email-verification.php">Cover</a></li>
													<li><a href="email-verification-2.php">Illustration</a></li>
													<li><a href="email-verification-3.php">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="two-step-verification.php">Cover</a></li>
													<li><a href="two-step-verification-2.php">Illustration</a></li>
													<li><a href="two-step-verification-3.php">Basic</a></li>										
												</ul>
											</li>
											<li><a href="lock-screen.php">Lock Screen</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error Pages</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="error-404.php">404 Error </a></li>
											<li><a href="error-500.php">500 Error </a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="map"></i><span>Places</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="countries.php">Countries</a></li>
											<li><a href="states.php">States</a></li>
										</ul>
									</li>
									<li>
										<a href="blank-page.php" ><i data-feather="file"></i><span>Blank Page</span> </a>
									</li>
									<li>
										<a href="coming-soon.php" ><i data-feather="send"></i><span>Coming Soon</span> </a>
									</li>
									<li>
										<a href="under-maintenance.php" ><i data-feather="alert-triangle"></i><span>Under Maintenance</span> </a>
									</li>
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Settings</h6>		
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="settings"></i><span>General Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="general-settings.php">Profile</a></li>
											<li><a href="security-settings.php">Security</a></li>
											<li><a href="notification.php">Notifications</a></li>
											<li><a href="connected-apps.php">Connected Apps</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="globe"></i><span>Website Settings</span><span class="menu-arrow"></span></a>
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
										<a href="javascript:void(0);"><i data-feather="smartphone"></i><span>App Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="invoice-settings.php">Invoice</a></li>
											<li><a href="printer-settings.php">Printer</a></li>
											<li><a href="pos-settings.php">POS</a></li>
											<li><a href="custom-fields.php">Custom Fields</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="monitor"></i><span>System Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="email-settings.php">Email</a></li>
											<li><a href="sms-gateway.php">SMS Gateways</a></li>
											<li><a href="otp-settings.php">OTP</a></li>
											<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="dollar-sign"></i><span>Financial Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
											<li><a href="bank-settings-grid.php">Bank Accounts</a></li>
											<li><a href="tax-rates.php">Tax Rates</a></li>
											<li><a href="currency-settings.php">Currencies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="hexagon"></i><span>Other Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="storage-settings.php">Storage</a></li>
											<li><a href="ban-ip-address.php">Ban IP Address</a></li>
										</ul>
									</li>
									<li>
										<a href="signin.php" ><i data-feather="log-out"></i><span>Logout</span> </a>
									</li>
								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">UI Interface</h6>		
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);">
											<i data-feather="layers"></i><span>Base UI</span><span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="ui-alerts.php">Alerts</a></li>
											<li><a href="ui-accordion.php">Accordion</a></li>
											<li><a href="ui-avatar.php">Avatar</a></li>
											<li><a href="ui-badges.php">Badges</a></li>
											<li><a href="ui-borders.php">Border</a></li>
											<li><a href="ui-buttons.php">Buttons</a></li>
											<li><a href="ui-buttons-group.php">Button Group</a></li>
											<li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
											<li><a href="ui-cards.php">Card</a></li>
											<li><a href="ui-carousel.php">Carousel</a></li>
											<li><a href="ui-colors.php">Colors</a></li>
											<li><a href="ui-dropdowns.php">Dropdowns</a></li>
											<li><a href="ui-grid.php">Grid</a></li>
											<li><a href="ui-images.php">Images</a></li>
											<li><a href="ui-lightbox.php">Lightbox</a></li>
											<li><a href="ui-media.php">Media</a></li>
											<li><a href="ui-modals.php">Modals</a></li>
											<li><a href="ui-offcanvas.php">Offcanvas</a></li>
											<li><a href="ui-pagination.php">Pagination</a></li>
											<li><a href="ui-popovers.php">Popovers</a></li>
											<li><a href="ui-progress.php">Progress</a></li>
											<li><a href="ui-placeholders.php">Placeholders</a></li>
											<li><a href="ui-rangeslider.php">Range Slider</a></li>
											<li><a href="ui-spinner.php">Spinner</a></li>
											<li><a href="ui-sweetalerts.php">Sweet Alerts</a></li>
											<li><a href="ui-nav-tabs.php">Tabs</a></li>
											<li><a href="ui-toasts.php">Toasts</a></li>
											<li><a href="ui-tooltips.php">Tooltips</a></li>
											<li><a href="ui-typography.php">Typography</a></li>
											<li><a href="ui-video.php">Video</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<i data-feather="layers"></i><span>Advanced UI</span><span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="ui-ribbon.php">Ribbon</a></li>
											<li><a href="ui-clipboard.php">Clipboard</a></li>
											<li><a href="ui-drag-drop.php">Drag & Drop</a></li>
											<li><a href="ui-rangeslider.php">Range Slider</a></li>
											<li><a href="ui-rating.php">Rating</a></li>
											<li><a href="ui-text-editor.php">Text Editor</a></li>
											<li><a href="ui-counter.php">Counter</a></li>
											<li><a href="ui-scrollbar.php">Scrollbar</a></li>
											<li><a href="ui-stickynote.php">Sticky Note</a></li>
											<li><a href="ui-timeline.php">Timeline</a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><i data-feather="bar-chart-2"></i><span>Charts</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="chart-apex.php">Apex Charts</a></li>
											<li><a href="chart-c3.php">Chart C3</a></li>
											<li><a href="chart-js.php">Chart Js</a></li>
											<li><a href="chart-morris.php">Morris Charts</a></li>
											<li><a href="chart-flot.php">Flot Charts</a></li>
											<li><a href="chart-peity.php">Peity Charts</a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><i data-feather="database"></i><span>Icons</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
											<li><a href="icon-feather.php">Feather Icons</a></li>
											<li><a href="icon-ionic.php">Ionic Icons</a></li>
											<li><a href="icon-material.php">Material Icons</a></li>
											<li><a href="icon-pe7.php">Pe7 Icons</a></li>
											<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
											<li><a href="icon-themify.php">Themify Icons</a></li>
											<li><a href="icon-weather.php">Weather Icons</a></li>
											<li><a href="icon-typicon.php">Typicon Icons</a></li>
											<li><a href="icon-flag.php">Flag Icons</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<i data-feather="edit"></i><span>Forms</span><span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-basic-inputs.php">Basic Inputs</a></li>
													<li><a href="form-checkbox-radios.php">Checkbox & Radios</a></li>
													<li><a href="form-input-groups.php">Input Groups</a></li>
													<li><a href="form-grid-gutters.php">Grid & Gutters</a></li>
													<li><a href="form-select.php">Form Select</a></li>
													<li><a href="form-mask.php">Input Masks</a></li>
													<li><a href="form-fileupload.php">File Uploads</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-horizontal.php">Horizontal Form</a></li>
													<li><a href="form-vertical.php">Vertical Form</a></li>
													<li><a href="form-floating-labels.php">Floating Labels</a></li>
												</ul>
											</li>
											<li><a href="form-validation.php">Form Validation</a></li>
											<li><a href="form-select2.php">Select2</a></li>
											<li><a href="form-wizard.php">Form Wizard</a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><i data-feather="columns"></i><span>Tables</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="tables-basic.php">Basic Tables </a></li>
											<li><a href="data-tables.php">Data Table </a></li>
										</ul>
									</li>
								
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Help</h6>
								<ul>
									<li><a href="javascript:void(0);"><i data-feather="file-text"></i><span>Documentation</span></a></li>
									<li><a href="javascript:void(0);"><i data-feather="lock"></i><span>Changelog v2.0.3</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Multi Level</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Level 1.1</a></li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 2.1</a></li>
													<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
														<ul>
															<li><a href="javascript:void(0);">Level 3.1</a></li>
															<li><a href="javascript:void(0);">Level 3.2</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->

			 <!-- Sidebar -->
			 <div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
						<aside id="aside" class="ui-aside">
							<ul class="tab nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"  role="tab" aria-selected="true">
									<img src="assets/img/icons/menu-icon.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#messages" id="messages-tab" data-bs-toggle="tab" data-bs-target="#product"  role="tab" aria-selected="false">
									<img src="assets/img/icons/product.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation"> 
								<a class="tablinks nav-link"  href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sales"  role="tab" aria-selected="false">
									<img src="assets/img/icons/sales1.svg" alt="">
								</a>
							</li>
							
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab" data-bs-target="#purchase"  role="tab" aria-selected="true">
									<img src="assets/img/icons/purchase1.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab" data-bs-target="#user"  role="tab" aria-selected="true">
									<img src="assets/img/icons/users1.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set2" id="set-tab2" data-bs-toggle="tab" data-bs-target="#employee"  role="tab" aria-selected="true">
									<img src="assets/img/icons/calendars.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set3" id="set-tab3" data-bs-toggle="tab" data-bs-target="#report"  role="tab" aria-selected="true">
									<img src="assets/img/icons/printer.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set4" id="set-tab4" data-bs-toggle="tab" data-bs-target="#document"  role="tab" aria-selected="true">
									<i data-feather="user"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set5" id="set-tab6" data-bs-toggle="tab" data-bs-target="#permission"  role="tab" aria-selected="true">
									<i data-feather="file-text"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set6" id="set-tab5" data-bs-toggle="tab" data-bs-target="#settings"  role="tab" aria-selected="true">
									<i data-feather="settings"></i>
								</a>
							</li> 
							</ul>
						</aside>
						<div class="tab-content tab-content-four pt-2">
							<ul class="tab-pane active" id="home" aria-labelledby="home-tab">
								<li class="submenu">
									<a href="javascript:void(0);"><span>Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="dashboard.php">Admin Dashboard</a></li>
										<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
									</ul>
								</li>                                    
								<li class="submenu">
									<a href="javascript:void(0);" class="active subdrop"><span>Application</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.php">Chat</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);"><span>Call</span><span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="video-call.php">Video Call</a></li>
												<li><a href="audio-call.php">Audio Call</a></li>
												<li><a href="call-history.php">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.php">Calendar</a></li>
										<li><a href="email.php">Email</a></li>
										<li><a href="todo.php">To Do</a></li>
										<li><a href="notes.php">Notes</a></li>
										<li><a href="file-manager.php" class="active">File Manager</a></li>
									</ul>
								</li>
							</ul>
							<ul class="tab-pane" id="product" aria-labelledby="messages-tab">
								<li><a href="product-list.php"><span>Products</span></a></li>
								<li><a href="add-product.php"><span>Create Product</span></a></li>
								<li><a href="expired-products.php"><span>Expired Products</span></a></li>
								<li><a href="low-stocks.php"><span>Low Stocks</span></a></li>
								<li><a href="category-list.php"><span>Category</span></a></li>
								<li><a href="sub-categories.php"><span>Sub Category</span></a></li>
								<li><a href="brand-list.php"><span>Brands</span></a></li>
								<li><a href="units.php"><span>Units</span></a></li>
								<li><a href="varriant-attributes.php"><span>Variant Attributes</span></a></li>
								<li><a href="warranty.php"><span>Warranties</span></a></li>									
								<li><a href="barcode.php"><span>Print Barcode</span></a></li>
								<li><a href="qrcode.php"><span>Print QR Code</span></a></li>
							</ul>
							<ul class="tab-pane" id="sales" aria-labelledby="profile-tab">
								<li><a href="sales-list.php"><span>Sales</span></a></li>
								<li><a href="invoice-report.php"><span>Invoices</span></a></li>
								<li><a href="sales-returns.php"><span>Sales Return</span></a></li>	
								<li><a href="quotation-list.php"><span>Quotation</span></a></li>								
								<li><a href="pos.php"><span>POS</span></a></li>
								<li><a href="coupons.php"><span>Coupons</span></a></li>								
							</ul>                                                 
							<ul class="tab-pane" id="purchase" aria-labelledby="report-tab">
								<li><a href="purchase-list.php"><span>Purchases</span></a></li>
								<li><a href="purchase-order-report.php"><span>Purchase Order</span></a></li>
								<li><a href="purchase-returns.php"><span>Purchase Return</span></a></li>	
								<li><a href="manage-stocks.php"><span>Manage Stock</span></a></li>
								<li><a href="stock-adjustment.php"><span>Stock Adjustment</span></a></li>
								<li><a href="stock-transfer.php"><span>Stock Transfer</span></a></li>								
								<li class="submenu">
									<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-list.php">Expenses</a></li>
										<li><a href="expense-category.php">Expense Category</a></li>
									</ul>
								</li>							
							
							</ul>
							<ul class="tab-pane" id="user" aria-labelledby="set-tab">
															
								<li><a href="customers.php"><span>Customers</span></a></li>
								<li><a href="suppliers.php"><span>Suppliers</span></a></li>
								<li><a href="store-list.php"><span>Stores</span></a></li>
								<li><a href="warehouse.php"><span>Warehouses</span></a></li>
							
							</ul>
							<ul class="tab-pane" id="employee" aria-labelledby="set-tab2">
								<li><a href="employees-grid.php"><span>Employees</span></a></li>
								<li><a href="department-grid.php"><span>Departments</span></a></li>
								<li><a href="designation.php"><span>Designation</span></a></li>
								<li><a href="shift.php"><span>Shifts</span></a></li>	
								<li class="submenu">
									<a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="attendance-employee.php">Employee Attendence</a></li>
										<li><a href="attendance-admin.php">Admin Attendence</a></li>
									</ul>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Leaves</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="leaves-admin.php">Admin Leaves</a></li>
											<li><a href="leaves-employee.php">Employee Leaves</a></li>
											<li><a href="leave-types.php">Leave Types</a></li>
										</ul>
									</li>
								<li><a href="holidays.php"><span>Holidays</span></a></li>
								<li class="submenu">
									<a href="payroll-list.php"><span>Payroll</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="payroll-list.php">Employee Salary</a></li>
										<li><a href="payslip.php">Payslip</a></li>
									</ul>
								</li>
							</ul>
							<ul class="tab-pane" id="report" aria-labelledby="set-tab3">
								<li><a href="sales-report.php"><span>Sales Report</span></a></li>
								<li><a href="purchase-report.php"><span>Purchase report</span></a></li>
								<li><a href="inventory-report.php"><span>Inventory Report</span></a></li>									
								<li><a href="invoice-report.php"><span>Invoice Report</span></a></li>
								<li><a href="supplier-report.php"><span>Supplier Report</span></a></li>
								<li><a href="customer-report.php"><span>Customer Report</span></a></li>
								<li><a href="expense-report.php"><span>Expense Report</span></a></li>
								<li><a href="income-report.php"><span>Income Report</span></a></li>
								<li><a href="tax-reports.php"><span>Tax Report</span></a></li>
								<li><a href="profit-and-loss.php"><span>Profit & Loss</span></a></li>
							</ul>
							<ul class="tab-pane" id="permission" aria-labelledby="set-tab4">
								<li><a href="users.php"><span>Users</span></a></li>
								<li><a href="roles-permissions.php"><span>Roles & Permissions</span></a></li>
								<li><a href="delete-account.php"><span>Delete Account Request</span></a></li>
				
								<li class="submenu">
									<a href="javascript:void(0);">
										<span>Base UI</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui-alerts.php">Alerts</a></li>
										<li><a href="ui-accordion.php">Accordion</a></li>
										<li><a href="ui-avatar.php">Avatar</a></li>
										<li><a href="ui-badges.php">Badges</a></li>
										<li><a href="ui-borders.php">Border</a></li>
										<li><a href="ui-buttons.php">Buttons</a></li>
										<li><a href="ui-buttons-group.php">Button Group</a></li>
										<li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
										<li><a href="ui-cards.php">Card</a></li>
										<li><a href="ui-carousel.php">Carousel</a></li>
										<li><a href="ui-colors.php">Colors</a></li>
										<li><a href="ui-dropdowns.php">Dropdowns</a></li>
										<li><a href="ui-grid.php">Grid</a></li>
										<li><a href="ui-images.php">Images</a></li>
										<li><a href="ui-lightbox.php">Lightbox</a></li>
										<li><a href="ui-media.php">Media</a></li>
										<li><a href="ui-modals.php">Modals</a></li>
										<li><a href="ui-offcanvas.php">Offcanvas</a></li>
										<li><a href="ui-pagination.php">Pagination</a></li>
										<li><a href="ui-popovers.php">Popovers</a></li>
										<li><a href="ui-progress.php">Progress</a></li>
										<li><a href="ui-placeholders.php">Placeholders</a></li>
										<li><a href="ui-rangeslider.php">Range Slider</a></li>
										<li><a href="ui-spinner.php">Spinner</a></li>
										<li><a href="ui-sweetalerts.php">Sweet Alerts</a></li>
										<li><a href="ui-nav-tabs.php">Tabs</a></li>
										<li><a href="ui-toasts.php">Toasts</a></li>
										<li><a href="ui-tooltips.php">Tooltips</a></li>
										<li><a href="ui-typography.php">Typography</a></li>
										<li><a href="ui-video.php">Video</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<span>Advanced UI</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui-ribbon.php">Ribbon</a></li>
										<li><a href="ui-clipboard.php">Clipboard</a></li>
										<li><a href="ui-drag-drop.php">Drag & Drop</a></li>
										<li><a href="ui-rangeslider.php">Range Slider</a></li>
										<li><a href="ui-rating.php">Rating</a></li>
										<li><a href="ui-text-editor.php">Text Editor</a></li>
										<li><a href="ui-counter.php">Counter</a></li>
										<li><a href="ui-scrollbar.php">Scrollbar</a></li>
										<li><a href="ui-stickynote.php">Sticky Note</a></li>
										<li><a href="ui-timeline.php">Timeline</a></li>
									</ul>
								</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chart-apex.php">Apex Charts</a></li>
										<li><a href="chart-c3.php">Chart C3</a></li>
										<li><a href="chart-js.php">Chart Js</a></li>
										<li><a href="chart-morris.php">Morris Charts</a></li>
										<li><a href="chart-flot.php">Flot Charts</a></li>
										<li><a href="chart-peity.php">Peity Charts</a></li>
									</ul>
								</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Icons</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
										<li><a href="icon-feather.php">Feather Icons</a></li>
										<li><a href="icon-ionic.php">Ionic Icons</a></li>
										<li><a href="icon-material.php">Material Icons</a></li>
										<li><a href="icon-pe7.php">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
										<li><a href="icon-themify.php">Themify Icons</a></li>
										<li><a href="icon-weather.php">Weather Icons</a></li>
										<li><a href="icon-typicon.php">Typicon Icons</a></li>
										<li><a href="icon-flag.php">Flag Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<span>Forms</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-basic-inputs.php">Basic Inputs</a></li>
												<li><a href="form-checkbox-radios.php">Checkbox & Radios</a></li>
												<li><a href="form-input-groups.php">Input Groups</a></li>
												<li><a href="form-grid-gutters.php">Grid & Gutters</a></li>
												<li><a href="form-select.php">Form Select</a></li>
												<li><a href="form-mask.php">Input Masks</a></li>
												<li><a href="form-fileupload.php">File Uploads</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-horizontal.php">Horizontal Form</a></li>
												<li><a href="form-vertical.php">Vertical Form</a></li>
												<li><a href="form-floating-labels.php">Floating Labels</a></li>
											</ul>
										</li>
										<li><a href="form-validation.php">Form Validation</a></li>
										<li><a href="form-select2.php">Select2</a></li>
										<li><a href="form-wizard.php">Form Wizard</a></li>
									</ul>
								</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.php">Basic Tables </a></li>
										<li><a href="data-tables.php">Data Table </a></li>
									</ul>
								</li>
							
							</ul>
							<ul class="tab-pane" id="document" aria-labelledby="set-tab5">
								<li><a href="profile.php"><span>Profile</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="signin.php">Cover</a></li>
												<li><a href="dashboard.php">Illustration</a></li>
												<li><a href="signin-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="register.php">Cover</a></li>
												<li><a href="register-2.php">Illustration</a></li>
												<li><a href="register-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="forgot-password.php">Cover</a></li>
												<li><a href="forgot-password-2.php">Illustration</a></li>
												<li><a href="forgot-password-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="reset-password.php">Cover</a></li>
												<li><a href="reset-password-2.php">Illustration</a></li>
												<li><a href="reset-password-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-verification.php">Cover</a></li>
												<li><a href="email-verification-2.php">Illustration</a></li>
												<li><a href="email-verification-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="two-step-verification.php">Cover</a></li>
												<li><a href="two-step-verification-2.php">Illustration</a></li>
												<li><a href="two-step-verification-3.php">Basic</a></li>										
											</ul>
										</li>
										<li><a href="lock-screen.php">Lock Screen</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Error Pages</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.php">404 Error </a></li>
										<li><a href="error-500.php">500 Error </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="countries.php">Countries</a></li>
										<li><a href="states.php">States</a></li>
									</ul>
								</li>
								<li>
									<a href="blank-page.php" ><span>Blank Page</span> </a>
								</li>
								<li>
									<a href="coming-soon.php" ><span>Coming Soon</span> </a>
								</li>
								<li>
									<a href="under-maintenance.php" ><span>Under Maintenance</span> </a>
								</li>
							</ul>
							<ul class="tab-pane" id="settings" aria-labelledby="set-tab6">
								<li class="submenu">
									<a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="general-settings.php">Profile</a></li>
										<li><a href="security-settings.php">Security</a></li>
										<li><a href="notification.php">Notifications</a></li>
										<li><a href="connected-apps.php">Connected Apps</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
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
									<a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="invoice-settings.php">Invoice</a></li>
										<li><a href="printer-settings.php">Printer</a></li>
										<li><a href="pos-settings.php">POS</a></li>
										<li><a href="custom-fields.php">Custom Fields</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="email-settings.php">Email</a></li>
										<li><a href="sms-gateway.php">SMS Gateways</a></li>
										<li><a href="otp-settings.php">OTP</a></li>
										<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Financial Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
										<li><a href="bank-settings-grid.php">Bank Accounts</a></li>
										<li><a href="tax-rates.php">Tax Rates</a></li>
										<li><a href="currency-settings.php">Currencies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="storage-settings.php">Storage</a></li>
										<li><a href="ban-ip-address.php">Ban IP Address</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
								<li><a href="javascript:void(0);"><span>Changelog v2.0.3</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Level 1.1</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 2.1</a></li>
												<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 3.1</a></li>
														<li><a href="javascript:void(0);">Level 3.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->
	
			<!-- Sidebar -->
			<div class="sidebar horizontal-sidebar">
				<div id="sidebar-menu-3" class="sidebar-menu">
					<ul class="nav">
						<li class="submenu">
							<a href="dashboard.php" class="active subdrop"><i data-feather="grid"></i><span> Main Menu</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="dashboard.php">Admin Dashboard</a></li>
										<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
									</ul>
								</li>  							
								<li class="submenu">
									<a href="javascript:void(0);" class="active subdrop"><span>Application</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.php">Chat</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);"><span>Call</span><span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="video-call.php">Video Call</a></li>
												<li><a href="audio-call.php">Audio Call</a></li>
												<li><a href="call-history.php">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.php">Calendar</a></li>
										<li><a href="email.php">Email</a></li>
										<li><a href="todo.php">To Do</a></li>
										<li><a href="notes.php">Notes</a></li>
										<li><a href="file-manager.php" class="active">File Manager</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li  class="submenu">
							<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Inventory </span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="product-list.php"><span>Products</span></a></li>
								<li><a href="add-product.php"><span>Create Product</span></a></li>
								<li><a href="expired-products.php"><span>Expired Products</span></a></li>
								<li><a href="low-stocks.php"><span>Low Stocks</span></a></li>
								<li><a href="category-list.php"><span>Category</span></a></li>
								<li><a href="sub-categories.php"><span>Sub Category</span></a></li>
								<li><a href="brand-list.php"><span>Brands</span></a></li>
								<li><a href="units.php"><span>Units</span></a></li>
								<li><a href="varriant-attributes.php"><span>Variant Attributes</span></a></li>
								<li><a href="warranty.php"><span>Warranties</span></a></li>									
								<li><a href="barcode.php"><span>Print Barcode</span></a></li>
								<li><a href="qrcode.php"><span>Print QR Code</span></a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span>Sales &amp; Purchase</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
									<ul>	
										<li><a href="sales-list.php"><span>Sales</span></a></li>
										<li><a href="invoice-report.php"><span>Invoices</span></a></li>
										<li><a href="sales-returns.php"><span>Sales Return</span></a></li>	
										<li><a href="quotation-list.php"><span>Quotation</span></a></li>								
										<li><a href="pos.php"><span>POS</span></a></li>
										<li><a href="coupons.php"><span>Coupons</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Purchase</span><span class="menu-arrow"></span></a>
									<ul>	
										<li><a href="purchase-list.php"><span>Purchases</span></a></li>
										<li><a href="purchase-order-report.php"><span>Purchase Order</span></a></li>
										<li><a href="purchase-returns.php"><span>Purchase Return</span></a></li>	
										<li><a href="manage-stocks.php"><span>Manage Stock</span></a></li>
										<li><a href="stock-adjustment.php"><span>Stock Adjustment</span></a></li>
										<li><a href="stock-transfer.php"><span>Stock Transfer</span></a></li>	
									</ul>
								</li>						
								<li class="submenu">
									<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-list.php">Expenses</a></li>
										<li><a href="expense-category.php">Expense Category</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span>User Management</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>People</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="customers.php"><span>Customers</span></a></li>
										<li><a href="suppliers.php"><span>Suppliers</span></a></li>
										<li><a href="store-list.php"><span>Stores</span></a></li>
										<li><a href="warehouse.php"><span>Warehouses</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Roles &amp; Permissions</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="roles-permissions.php"><span>Roles & Permissions</span></a></li>
								<li><a href="delete-account.php"><span>Delete Account Request</span></a></li>
								
									</ul>
								</li>
								<li class="submenu">
								<a href="javascript:void(0);"><span>Base UI</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="ui-alerts.php">Alerts</a></li>
									<li><a href="ui-accordion.php">Accordion</a></li>
									<li><a href="ui-avatar.php">Avatar</a></li>
									<li><a href="ui-badges.php">Badges</a></li>
									<li><a href="ui-borders.php">Border</a></li>
									<li><a href="ui-buttons.php">Buttons</a></li>
									<li><a href="ui-buttons-group.php">Button Group</a></li>
									<li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
									<li><a href="ui-cards.php">Card</a></li>
									<li><a href="ui-carousel.php">Carousel</a></li>
									<li><a href="ui-colors.php">Colors</a></li>
									<li><a href="ui-dropdowns.php">Dropdowns</a></li>
									<li><a href="ui-grid.php">Grid</a></li>
									<li><a href="ui-images.php">Images</a></li>
									<li><a href="ui-lightbox.php">Lightbox</a></li>
									<li><a href="ui-media.php">Media</a></li>
									<li><a href="ui-modals.php">Modals</a></li>
									<li><a href="ui-offcanvas.php">Offcanvas</a></li>
									<li><a href="ui-pagination.php">Pagination</a></li>
									<li><a href="ui-popovers.php">Popovers</a></li>
									<li><a href="ui-progress.php">Progress</a></li>
									<li><a href="ui-placeholders.php">Placeholders</a></li>
									<li><a href="ui-rangeslider.php">Range Slider</a></li>
									<li><a href="ui-spinner.php">Spinner</a></li>
									<li><a href="ui-sweetalerts.php">Sweet Alerts</a></li>
									<li><a href="ui-nav-tabs.php">Tabs</a></li>
									<li><a href="ui-toasts.php">Toasts</a></li>
									<li><a href="ui-tooltips.php">Tooltips</a></li>
									<li><a href="ui-typography.php">Typography</a></li>
									<li><a href="ui-video.php">Video</a></li>
								</ul>
							</li>
								<li class="submenu">
								<a href="javascript:void(0);"><span>Advanced UI</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="ui-ribbon.php">Ribbon</a></li>
									<li><a href="ui-clipboard.php">Clipboard</a></li>
									<li><a href="ui-drag-drop.php">Drag & Drop</a></li>
									<li><a href="ui-rangeslider.php">Range Slider</a></li>
									<li><a href="ui-rating.php">Rating</a></li>
									<li><a href="ui-text-editor.php">Text Editor</a></li>
									<li><a href="ui-counter.php">Counter</a></li>
									<li><a href="ui-scrollbar.php">Scrollbar</a></li>
									<li><a href="ui-stickynote.php">Sticky Note</a></li>
									<li><a href="ui-timeline.php">Timeline</a></li>
								</ul>
							</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chart-apex.php">Apex Charts</a></li>
										<li><a href="chart-c3.php">Chart C3</a></li>
										<li><a href="chart-js.php">Chart Js</a></li>
										<li><a href="chart-morris.php">Morris Charts</a></li>
										<li><a href="chart-flot.php">Flot Charts</a></li>
										<li><a href="chart-peity.php">Peity Charts</a></li>
									</ul>
								</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Primary Icons</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
										<li><a href="icon-feather.php">Feather Icons</a></li>
										<li><a href="icon-ionic.php">Ionic Icons</a></li>
										<li><a href="icon-material.php">Material Icons</a></li>
										<li><a href="icon-pe7.php">Pe7 Icons</a></li>
									</ul>
								</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Secondary Icons</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
										<li><a href="icon-themify.php">Themify Icons</a></li>
										<li><a href="icon-weather.php">Weather Icons</a></li>
										<li><a href="icon-typicon.php">Typicon Icons</a></li>
										<li><a href="icon-flag.php">Flag Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
								<a href="javascript:void(0);"><span> Forms</span><span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);"><span>Form Elements</span><span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="form-basic-inputs.php">Basic Inputs</a></li>
											<li><a href="form-checkbox-radios.php">Checkbox & Radios</a></li>
											<li><a href="form-input-groups.php">Input Groups</a></li>
											<li><a href="form-grid-gutters.php">Grid & Gutters</a></li>
											<li><a href="form-select.php">Form Select</a></li>
											<li><a href="form-mask.php">Input Masks</a></li>
											<li><a href="form-fileupload.php">File Uploads</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);"><span> Layouts</span><span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="form-horizontal.php">Horizontal Form</a></li>
											<li><a href="form-vertical.php">Vertical Form</a></li>
											<li><a href="form-floating-labels.php">Floating Labels</a></li>
										</ul>
									</li>
									<li><a href="form-validation.php">Form Validation</a></li>
									<li><a href="form-select2.php">Select2</a></li>
									<li><a href="form-wizard.php">Form Wizard</a></li>
								</ul>
							</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.php">Basic Tables </a></li>
										<li><a href="data-tables.php">Data Table </a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i data-feather="user"></i><span>Profile</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="profile.php"><span>Profile</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="signin.php">Cover</a></li>
												<li><a href="dashboard.php">Illustration</a></li>
												<li><a href="signin-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="register.php">Cover</a></li>
												<li><a href="register-2.php">Illustration</a></li>
												<li><a href="register-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="forgot-password.php">Cover</a></li>
												<li><a href="forgot-password-2.php">Illustration</a></li>
												<li><a href="forgot-password-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="reset-password.php">Cover</a></li>
												<li><a href="reset-password-2.php">Illustration</a></li>
												<li><a href="reset-password-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-verification.php">Cover</a></li>
												<li><a href="email-verification-2.php">Illustration</a></li>
												<li><a href="email-verification-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="two-step-verification.php">Cover</a></li>
												<li><a href="two-step-verification-2.php">Illustration</a></li>
												<li><a href="two-step-verification-3.php">Basic</a></li>										
											</ul>
										</li>
										<li><a href="lock-screen.php">Lock Screen</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.php">404 Error </a></li>
										<li><a href="error-500.php">500 Error </a></li>
										<li>
											<a href="blank-page.php" ><span>Blank Page</span> </a>
										</li>
										<li>
											<a href="coming-soon.php" ><span>Coming Soon</span> </a>
										</li>
										<li>
											<a href="under-maintenance.php" ><span>Under Maintenance</span> </a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="countries.php">Countries</a></li>
										<li><a href="states.php">States</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Employees</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="employees-grid.php"><span>Employees</span></a></li>
										<li><a href="department-grid.php"><span>Departments</span></a></li>
										<li><a href="designation.php"><span>Designation</span></a></li>
										<li><a href="shift.php"><span>Shifts</span></a></li>	
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="attendance-employee.php">Employee Attendence</a></li>
										<li><a href="attendance-admin.php">Admin Attendence</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Leaves &amp; Holidays</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="leaves-admin.php">Admin Leaves</a></li>
										<li><a href="leaves-employee.php">Employee Leaves</a></li>
										<li><a href="leave-types.php">Leave Types</a></li>
										<li><a href="holidays.php"><span>Holidays</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="payroll-list.php"><span>Payroll</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="payroll-list.php">Employee Salary</a></li>
										<li><a href="payslip.php">Payslip</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><img src="assets/img/icons/printer.svg" alt="img"><span>Reports</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="sales-report.php"><span>Sales Report</span></a></li>
								<li><a href="purchase-report.php"><span>Purchase report</span></a></li>
								<li><a href="inventory-report.php"><span>Inventory Report</span></a></li>									
								<li><a href="invoice-report.php"><span>Invoice Report</span></a></li>
								<li><a href="supplier-report.php"><span>Supplier Report</span></a></li>
								<li><a href="customer-report.php"><span>Customer Report</span></a></li>
								<li><a href="expense-report.php"><span>Expense Report</span></a></li>
								<li><a href="income-report.php"><span>Income Report</span></a></li>
								<li><a href="tax-reports.php"><span>Tax Report</span></a></li>
								<li><a href="profit-and-loss.php"><span>Profit & Loss</span></a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="general-settings.php">Profile</a></li>
										<li><a href="security-settings.php">Security</a></li>
										<li><a href="notification.php">Notifications</a></li>
										<li><a href="connected-apps.php">Connected Apps</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
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
									<a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="invoice-settings.php">Invoice</a></li>
										<li><a href="printer-settings.php">Printer</a></li>
										<li><a href="pos-settings.php">POS</a></li>
										<li><a href="custom-fields.php">Custom Fields</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="email-settings.php">Email</a></li>
										<li><a href="sms-gateway.php">SMS Gateways</a></li>
										<li><a href="otp-settings.php">OTP</a></li>
										<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Financial Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
										<li><a href="bank-settings-grid.php">Bank Accounts</a></li>
										<li><a href="tax-rates.php">Tax Rates</a></li>
										<li><a href="currency-settings.php">Currencies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="storage-settings.php">Storage</a></li>
										<li><a href="ban-ip-address.php">Ban IP Address</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
								<li><a href="javascript:void(0);"><span>Changelog v2.0.3</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Level 1.1</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 2.1</a></li>
												<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 3.1</a></li>
														<li><a href="javascript:void(0);">Level 3.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li> 
					</ul>
				</div>
			</div>
			<!-- /Sidebar -->

			<div class="page-wrapper notes-page-wrapper file-manager">
				<div class="content">


					<div class="page-header page-add-notes d-flex align-items-center justify-content-between">
						<div class="add-item d-flex align-items-center">
							<div class="page-title">
								<h4>File Manager</h4>
								<p>Manage your files</p>
							</div>
							<a id="toggle_btn2" class="notes-tog" href="javascript:void(0);">
								<i class="fas fa-chevron-left"></i>
							</a>
						</div>
						<div class="d-sm-flex align-items-center">
							<div class="form-sort owned-by w-auto">
								<span><i data-feather="sliders" class="info-img"></i></span>
								<select class="select">
									<option>Owned By Me</option>
									<option>Owned by Anyone</option>
									<option>Not Owned by Me</option>
								</select>
							</div>
							<ul class="table-top-head">
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
								</li>
								<li class="full-height">
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
								</li>
							</ul>
							<a href="#" class="btn btn-primary btn-added" data-bs-toggle="modal" data-bs-target="#upload-file"><span class="me-1 d-flex align-items-center"><i data-feather="upload" class="feather-16"></i></span>Upload Files</a>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget">
							<aside class="card file-manager-sidebar mb-0">
								<h5 class="d-flex align-items-center"><span class="me-2 d-flex align-items-center"><i data-feather="folder" class="feather-20"></i></span>Files</h5>
								<div class="dropdown">
	                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset btn btn-primary mb-3 btn-icon">
	                                    <span class="me-1 btn-icon"><i data-feather="plus-circle" class="feather-16"></i></span>New
	                                </a>
	                                <ul class="dropdown-menu">
	                                    <li data-bs-toggle="modal" data-bs-target="#upload-file"><a href="javascript:void(0);" class="dropdown-item"><i data-feather="upload-cloud" class="feather-16 me-2"></i>Upload File</a></li>
	                                    <li data-bs-toggle="modal" data-bs-target="#upload-folder"><a href="javascript:void(0);" class="dropdown-item"><i data-feather="folder" class="feather-16 me-2"></i>Upload Folder</a></li>
	                                    <li data-bs-toggle="modal" data-bs-target="#create-folder"><a href="javascript:void(0);" class="dropdown-item"><i data-feather="folder-minus" class="feather-16 me-2"></i>Create folder</a></li>
	                                </ul>
	                            </div>

								<ul class="mb-5">
									<li><a  href="file-manager.php"><span class="me-2 btn-icon"><i data-feather="file-text" class="feather-16"></i></span>My Files</a></li>
									<li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="star" class="feather-16"></i></span>Google Drive</a></li>
									<li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="send" class="feather-16"></i></span>Dropbox</a></li>
									<li><a  href="file-shared.php"><span class="me-2 btn-icon"><i data-feather="file" class="feather-16"></i></span>Shared With Me</a></li>
									<li><a  href="file-document.php"><span class="me-2 btn-icon"><i data-feather="file" class="feather-16"></i></span>Document</a></li>
									<li><a  href="file-recent.php" class="active"><span class="me-2 btn-icon"><i data-feather="clock" class="feather-16"></i></span>Recent</a></li>
									<li><a  href="file-favourites.php"><span class="me-2 btn-icon"><i data-feather="star" class="feather-16"></i></span>Favourites</a></li>
									<li><a  href="file-archived.php"><span class="me-2 btn-icon"><i data-feather="target" class="feather-16"></i></span>Archived</a></li>
									<li><a  href="file-manager-deleted.php"><span class="me-2 btn-icon"><i data-feather="trash-2" class="feather-16"></i></span>Deleted</a></li>
									<li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="settings" class="feather-16"></i></span>Settings</a></li>
								</ul>
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<span class="me-2 btn-icon"><i data-feather="hard-drive" class="feather-16"></i></span>
										<h6>Storage</h6>
									</div>
									<span>70%</span>
								</div>
								<div class="progress my-2">
								  	<div class="progress-bar progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>78.5 GB of 1 TB Free Used</span>
								<div class="space-manager p-4">
									<img src="assets/img/icons/half-circle.svg" alt="Folder">
									<h6><a href="javascript:void(0);">Need More Space?</a></h6>
									<p>Upgrade storage for 2TB for $60 per month</p>
									<a  href="javascript:void(0);" class="btn btn-outline-primary">Upgrade<span class="ms-1 btn-icon"><i data-feather="repeat" class="feather-16"></i></span></a>
								</div>
							</aside>
						</div>

						<div class="col-lg-9 budget-role-notes">
							<div class="row">
								<div class="col-12">
									<div class="section-bulk-wrap">
										<div class="bulk-action-type col-lg-6 col-md-6">
											<div class="form-sort select-bluk">
												<select class="select">
													<option>Sort by Date</option>
													<option>Sort By Relevance</option>
													<option>Sort By Size</option>
													<option>Order Ascending</option>
													<option>Order Descending</option>
													<option>Upload Time</option>
												</select>
											</div>
											<div class="search-set me-2" id="dropdownSort" data-bs-toggle="dropdown" data-bs-auto-close="outside">
												<div class="search-input">
													<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
												<div class="dataTables_filter">
													<label> <input type="search" class="form-control form-control-sm width-auto" placeholder="Search"></label>
												</div></div>
											</div>

											<div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
											    <div class="search-info">
											    	<h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches</h6>
											    	<ul class="search-tags">
											    		<li><a href="javascript:void(0);">Filename</a></li>
											    		<li><a href="javascript:void(0);">Excel Files</a></li>
											    	</ul>
											    </div>
											    <div class="search-info">
											    	<h6>Search Results</h6>
											    	<p class="d-flex align-items-center justify-content-between">Sportsmodel.pdf <i data-feather="chevron-right" class="feather-16"></i></p>
											    	<p class="d-flex align-items-center justify-content-between">Projectdetails.xls<i data-feather="chevron-right" class="feather-16"></i></p>
											    </div>
											</div>
										</div>
										<div class="d-sm-flex align-items-center col-lg-6 col-md-6 justify-content-end">
											<div class="form-sort me-3">
												<i data-feather="filter" class="fa-filter"></i>
												<select class="select">
													<option>Recent</option>
													<option>Last Week</option>
													<option>Last Month</option>
												</select>
											</div>
											<div class="form-sort">
												<i data-feather="file-text" class="fa-filter"></i>
												<select class="select">
													<option>All File types</option>
													<option>Folders</option>
													<option>PDF</option>
													<option>Images</option>
													<option>Videos</option>
													<option>Audios</option>
													<option>Excel</option>
												</select>
											</div>
										</div>
									</div>
								</div>

							</div>


							<!-- Accordian -->
							<div class="accordion" id="accordionPanelsStayOpenExample">
							  	<div class="accordion-item seprator-lg">
							    	<h4 class="accordion-header d-flex align-items-center justify-content-between" id="panelsStayOpen-headingOne">Folders
							      		<a href="javascript:void(0);" class="accordion-button a-auto" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"></a>
							    	</h4>
							    	<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
							      		<div class="accordion-body">
								        	<div class="row mt-3">
								        		<div class="col-sm-12 col-md-6 col-lg-6">
										            <div class="folders p-3 mb-3">
										              <div class="d-flex align-items-center justify-content-between head">
										                <div class="d-flex align-items-center">
										                  <img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">
										                  <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
										                </div>
										                <div class="dropdown">
										                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
										                    class="dropset">
										                    <i class="fa fa-ellipsis-v"></i>
										                  </a>
										                  <ul class="dropdown-menu">
										                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
										                  </ul>
										                </div>
										              </div>
										              <div class="d-flex align-items-center justify-content-start project-plan my-3">
										                <label>Project plan</label>
										                <ul class="d-flex">
										                  <li class="d-flex align-items-center">154 KB</li>
										                  <li class="d-flex align-items-center">8 Files</li>
										                </ul>
										              </div>
										              <div class="d-flex align-items-center justify-content-between avatar-wrap">
										                <div class="group-avatar">
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="assets/img/avatar/avatar-2.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="assets/img/avatar/avatar-1.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="count">
										                       <a href="javascript:void(0);">1 Members</a>
										                    </span>
										                </div>
										                <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
										              </div>
										            </div>
										        </div>
										        <div class="col-sm-12 col-md-6 col-lg-6">
										            <div class="folders p-3 mb-3">
										              <div class="d-flex align-items-center justify-content-between head">
										                <div class="d-flex align-items-center">
										                  <img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">
										                  <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
										                </div>
										                <div class="dropdown">
										                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
										                    class="dropset">
										                    <i class="fa fa-ellipsis-v"></i>
										                  </a>
										                  <ul class="dropdown-menu">
										                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
										                  </ul>
										                </div>
										              </div>
										              <div class="d-flex align-items-center justify-content-start project-plan my-3">
										                <label>Project plan</label>
										                <ul class="d-flex">
										                  <li class="d-flex align-items-center">154 KB</li>
										                  <li class="d-flex align-items-center">8 Files</li>
										                </ul>
										              </div>
										              <div class="d-flex align-items-center justify-content-between avatar-wrap">
										                <div class="group-avatar">
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="assets/img/avatar/avatar-6.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="assets/img/avatar/avatar-14.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 3" data-bs-original-title="Member 3"><img src="assets/img/avatar/avatar-15.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="avatar">
										                       <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 4" data-bs-original-title="Member 4"><img src="assets/img/avatar/avatar-16.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="avatar">
										                       <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 5" data-bs-original-title="Member 5"><img src="assets/img/avatar/avatar-17.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="count">
										                       <a href="javascript:void(0);">+9 Members</a>
										                    </span>
										                </div>
										                <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
										              </div>
										            </div>
										        </div>
										        <div class="col-sm-12 col-md-6 col-lg-6">
										            <div class="folders p-3 mb-3">
										              <div class="d-flex align-items-center justify-content-between head">
										                <div class="d-flex align-items-center">
										                  <img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">
										                  <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
										                </div>
										                <div class="dropdown">
										                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
										                    class="dropset">
										                    <i class="fa fa-ellipsis-v"></i>
										                  </a>
										                  <ul class="dropdown-menu">
										                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
										                  </ul>
										                </div>
										              </div>
										              <div class="d-flex align-items-center justify-content-start project-plan my-3">
										                <label>Project plan</label>
										                <ul class="d-flex">
										                  <li class="d-flex align-items-center">154 KB</li>
										                  <li class="d-flex align-items-center">8 Files</li>
										                </ul>
										              </div>
										              <div class="d-flex align-items-center justify-content-between avatar-wrap">
										                <div class="group-avatar">
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="assets/img/avatar/avatar-18.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="assets/img/avatar/avatar-5.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="count">
										                       <a href="javascript:void(0);">
										                       +2 Members</a>
										                    </span>
										                </div>
										                <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
										              </div>
										            </div>
										        </div>
										        <div class="col-sm-12 col-md-6 col-lg-6">
										            <div class="folders p-3 mb-3">
										              <div class="d-flex align-items-center justify-content-between head">
										                <div class="d-flex align-items-center">
										                  <img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">
										                  <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
										                </div>
										                <div class="dropdown">
										                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
										                    class="dropset">
										                    <i class="fa fa-ellipsis-v"></i>
										                  </a>
										                  <ul class="dropdown-menu">
										                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
										                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
										                  </ul>
										                </div>
										              </div>
										              <div class="d-flex align-items-center justify-content-start project-plan my-3">
										                <label>Project plan</label>
										                <ul class="d-flex">
										                  <li class="d-flex align-items-center">154 KB</li>
										                  <li class="d-flex align-items-center">8 Files</li>
										                </ul>
										              </div>
										              <div class="d-flex align-items-center justify-content-between avatar-wrap">
										                <div class="group-avatar">
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="assets/img/avatar/avatar-2.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="avatar">
										                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="assets/img/avatar/avatar-1.jpg" alt="Avatar"></a>
										                    </span>
										                    <span class="count">
										                       <a href="javascript:void(0);">1 Members</a>
										                    </span>
										                </div>
										                <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
										              </div>
										            </div>
										        </div>
								        	</div>
							    		</div>
							  		</div>
								</div>
							  <div class="accordion-item seprator-lg">
							    <h4 class="accordion-header d-flex align-items-center justify-content-between" id="panelsStayOpen-headingTwo">Files
							      <a href="javascript:void(0);" class="accordion-button w-auto" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
							      </a>
							    </h4>
							    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
							      <div class="accordion-body">
							        <div class="row mt-3">
							        	<div class="col-sm-12 col-md-6 col-lg-6">
							                <div class="folders p-3 mb-3">
							                    <div class="d-flex align-items-center justify-content-between head">
							                        <div class="d-flex align-items-center">
							                            <img src="assets/img/icons/pdf-02.svg" alt="File" class="me-2">
							                            <h6 class="popup-toggle"><a href="javascript:void(0);">hsa.pdf</a></h6>
							                        </div>
							                        <div class="d-flex align-items-center">
							                            <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
							                                    class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
							                                </ul>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="d-flex align-items-center justify-content-start project-plan mt-3">
							                        <label>Last edited  12 Jul</label>
							                        <ul class="d-flex">
							                            <li class="d-flex align-items-center">15 Memebers</li>
							                            <li class="d-flex align-items-center">8 5 MB</li>
							                        </ul>
							                    </div>
							                </div>
							            </div>
							            <div class="col-sm-12 col-md-6 col-lg-6">
							                <div class="folders p-3 mb-3">
							                    <div class="d-flex align-items-center justify-content-between head">
							                        <div class="d-flex align-items-center">
							                            <img src="assets/img/icons/pdf-02.svg" alt="File" class="me-2">
							                            <h6 class="popup-toggle"><a href="javascript:void(0);">Haird.pdf</a></h6>
							                        </div>
							                        <div class="d-flex align-items-center">
							                            <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
							                                    class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
							                                </ul>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="d-flex align-items-center justify-content-start project-plan mt-3">
							                        <label>Last edited  14 Jul</label>
							                        <ul class="d-flex">
							                            <li class="d-flex align-items-center">09 Memebers</li>
							                            <li class="d-flex align-items-center">4 MB</li>
							                        </ul>
							                    </div>
							                </div>
							            </div>
							            <div class="col-sm-12 col-md-6 col-lg-6">
							                <div class="folders p-3 mb-3">
							                    <div class="d-flex align-items-center justify-content-between head">
							                        <div class="d-flex align-items-center">
							                            <img src="assets/img/icons/xls.svg" alt="File" class="me-2">
							                            <h6 class="popup-toggle"><a href="javascript:void(0);">Estimation.xls</a></h6>
							                        </div>
							                        <div class="d-flex align-items-center">
							                            <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
							                                    class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
							                                </ul>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="d-flex align-items-center justify-content-start project-plan mt-3">
							                        <label>Last edited  14 Jul</label>
							                        <ul class="d-flex">
							                            <li class="d-flex align-items-center">05 Memebers</li>
							                            <li class="d-flex align-items-center">500 KB</li>
							                        </ul>
							                    </div>
							                </div>
							            </div>
							            <div class="col-sm-12 col-md-6 col-lg-6">
							                <div class="folders p-3 mb-3">
							                    <div class="d-flex align-items-center justify-content-between head">
							                        <div class="d-flex align-items-center">
							                            <img src="assets/img/icons/pdf-02.svg" alt="File" class="me-2">
							                            <h6 class="popup-toggle"><a href="javascript:void(0);">hsa.pdf</a></h6>
							                        </div>
							                        <div class="d-flex align-items-center">
							                            <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
							                                    class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
							                                </ul>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="d-flex align-items-center justify-content-start project-plan mt-3">
							                        <label>Last edited  12 Jul</label>
							                        <ul class="d-flex">
							                            <li class="d-flex align-items-center">15 Memebers</li>
							                            <li class="d-flex align-items-center">8 5 MB</li>
							                        </ul>
							                    </div>
							                </div>
							            </div>
							            <div class="col-sm-12 col-md-6 col-lg-6">
							                <div class="folders p-3 mb-3">
							                    <div class="d-flex align-items-center justify-content-between head">
							                        <div class="d-flex align-items-center">
							                            <img src="assets/img/icons/pdf-02.svg" alt="File" class="me-2">
							                            <h6 class="popup-toggle"><a href="javascript:void(0);">Haird.pdf</a></h6>
							                        </div>
							                        <div class="d-flex align-items-center">
							                            <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
							                                    class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
							                                </ul>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="d-flex align-items-center justify-content-start project-plan mt-3">
							                        <label>Last edited  14 Jul</label>
							                        <ul class="d-flex">
							                            <li class="d-flex align-items-center">09 Memebers</li>
							                            <li class="d-flex align-items-center">4 MB</li>
							                        </ul>
							                    </div>
							                </div>
							            </div>
							            <div class="col-sm-12 col-md-6 col-lg-6">
							                <div class="folders p-3 mb-3">
							                    <div class="d-flex align-items-center justify-content-between head">
							                        <div class="d-flex align-items-center">
							                            <img src="assets/img/icons/xls.svg" alt="File" class="me-2">
							                            <h6 class="popup-toggle"><a href="javascript:void(0);">Estimation.xls</a></h6>
							                        </div>
							                        <div class="d-flex align-items-center">
							                            <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
							                                    class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
							                                </ul>
							                            </div>
							                        </div>
							                    </div>
							                    <div class="d-flex align-items-center justify-content-start project-plan mt-3">
							                        <label>Last edited  14 Jul</label>
							                        <ul class="d-flex">
							                            <li class="d-flex align-items-center">05 Memebers</li>
							                            <li class="d-flex align-items-center">500 KB</li>
							                        </ul>
							                    </div>
							                </div>
							            </div>
							        </div>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- /Accordian -->

							<div class="card p-4 bg-white all-files mb-0">
								<div class="seprator-lg d-lg-flex align-items-center justify-content-between">
									<h4>All Files</h4>
									<div class="d-sm-flex align-items-center btn-grp">
										<a href="javascript:void(0);" class="btn btn-primary me-2"><i data-feather="list" class="feather-20"></i></a>
										<a href="javascript:void(0);" class="btn btn-outline-secondary me-2"><i data-feather="layout" class="feather-20"></i></a>
										<a href="javascript:void(0);" class="btn btn-outline-secondary me-2"><i data-feather="grid" class="feather-20"></i></a>

										<div class="icon-select">
											<span class="icon"><i data-feather="calendar" class="feather-16"></i></span>
											<select class="select">
												<option>Last Modified</option>
												<option>Last Modified by Me</option>
												<option>Last Opened by Me</option>
											</select>
										</div>
									</div>
								</div>

								<div class="table-responsive">
									<table class="table datanew">
										<thead>
											<tr>
												<th>
													<label class="checkboxs">
														<input type="checkbox" id="select-all">
														<span class="checkmarks"></span>
													</label>
												</th>
												<th>Name</th>
												<th>Last Modified</th>
												<th>Size</th>
												<th>Owned Memebr</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img d-flex align-items-center">
														<img src="assets/img/icons/folder.svg" alt="Product" class="me-2">
														<span>Digimed</span>
													</a>
												</td>
												<td>Today 08:30 AM <br>by Angel</td>
												<td>200 MB</td>
												<td>
													<a href="javascript:void(0);" class="product-img d-flex align-items-center">
														<img src="assets/img/avatar/avatar-6.jpg" alt="Product" class="me-2 rounded-circle">
														<span>Nolan Christopher</span>
													</a>
												</td>
												<td>
													<div class="d-flex align-items-center">
							                            <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
							                                </ul>
							                            </div>
							                        </div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img d-flex align-items-center">
														<img src="assets/img/icons/xls.svg" alt="Product" class="me-2">
														<span>Estimation</span>
													</a>
												</td>
												<td>Today 09:20 AM</td>
												<td>140 MB</td>
												<td>
													<a href="javascript:void(0);" class="product-img d-flex align-items-center">
														<img src="assets/img/avatar/avatar-5.jpg" alt="Product" class="me-2 rounded-circle">
														<span>Nolan Harris</span>
													</a>
												</td>
												<td>
													<div class="d-flex align-items-center">
							                            <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
							                                </ul>
							                            </div>
							                        </div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img d-flex align-items-center">
														<img src="assets/img/icons/pdf-02.svg" alt="Product" class="me-2">
														<span>Intro.pdf</span>
													</a>
												</td>
												<td>27 July 2023</td>
												<td>70 MB</td>
												<td>
													<a href="javascript:void(0);" class="product-img d-flex align-items-center">
														<img src="assets/img/avatar/avatar-10.jpg" alt="Product" class="me-2 rounded-circle">
														<span>Me</span>
													</a>
												</td>
												<td class="text-end">
													<div class="d-flex align-items-center">
							                            <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
							                                </ul>
							                            </div>
							                        </div>
												</td>
											</tr>

											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img d-flex align-items-center">
														<img src="assets/img/icons/video.svg" alt="Product" class="me-2">
														<span>Demoworrking.mp4</span>
													</a>
												</td>
												<td>24 July 2023<br>08:25 AM</td>
												<td>180 MB</td>
												<td>
													<a href="javascript:void(0);" class="product-img d-flex align-items-center">
														<img src="assets/img/avatar/avatar-2.jpg" alt="Product" class="me-2 rounded-circle">
														<span>Daniel</span>
													</a>
												</td>
												<td>
													<div class="d-flex align-items-center">
							                            <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
							                                </ul>
							                            </div>
							                        </div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
												</td>
												<td class="productimgname">
													<a href="product-list.php" class="product-img d-flex align-items-center">
														<img src="assets/img/icons/audio.svg" alt="Product" class="me-2">
														<span>voice.mp3</span>
													</a>
												</td>
												<td>27 July 2023</td>
												<td>80 MB</td>
												<td>
													<a href="javascript:void(0);" class="product-img d-flex align-items-center">
														<img src="assets/img/avatar/avatar-7.jpg" alt="Product" class="me-2 rounded-circle">
														<span>Henriques</span>
													</a>
												</td>
												<td class="text-end">
													<div class="d-flex align-items-center">
							                            <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
							                            <div class="dropdown">
							                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
							                                    <i class="fa fa-ellipsis-v"></i>
							                                </a>
							                                <ul class="dropdown-menu">
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
							                                    <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
							                                </ul>
							                            </div>
							                        </div>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>

							</div>

						</div>
					</div>
				</div>
				<!-- /Content -->
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->

		<!-- Files Toogle Slide -->
		<div class="toggle-sidebar">
			<div class="d-flex align-items-center justify-content-between head">
				<h4>File Preview</h4>
				<div class="d-flex align-items-center">
					<a href="javascript:void(0);" class="me-2 d-flex align-items-center"><i class="fa fa-star"></i></a>
					<a href="javascript:void(0);" class="me-2 d-flex align-items-center"><i data-feather="trash-2" class="feather-16 text-center text-danger"></i></a>
					<a href="javascript:void(0);" class="sidebar-closes d-flex align-items-center" aria-hidden="true"><i data-feather="x-circle" class="feather-26 color-primary"></i></a>
				</div>
			</div>
			<div class="text-center">
				<a href="javascript:void(0);"><img src="assets/img/file-manager/folder-lg.png" alt="Folder"></a>
				<h5>Website Backup for the Design team</h5>
				<p>File Size : 616 MB</p>
			</div>

			<div class="nav nav-tabs d-flex align-items-center justify-content-between py-4 mb-4" id="nav-tab" role="tablist">
				<a class="nav-link flex-fill active btn btn-light me-2 text-center" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i data-feather="list" class="feather-16 me-2 text-center"></i>Details</a>
				<a class="nav-link flex-fill btn btn-light" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i data-feather="clock" class="feather-16 me-2"></i>Activity</a>
			</div>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<h5 class="mb-4 d-flex align-items-center"><i data-feather="edit" class="feather-20 me-2"></i>Properties</h5>
					<ul class="seprator-lg">
						<li class="mb-4">
							<h6>File Name</h6>
							<p>Website Backup for the Designteam</p>
						</li>
						<li class="mb-4">
							<h6>File Type</h6>
							<p>Folder</p>
						</li>
						<li class="mb-4">
							<h6>Size</h6>
							<p>616 MB</p>
						</li>
						<li class="mb-4">
							<h6>Created</h6>
							<p>22 July 2023, 08:30 PM</p>
						</li>
						<li class="mb-4">
							<h6>Location</h6>
							<p class="location d-inline-flex align-items-center"><i data-feather="hard-drive" class="feather-16 me-1"></i>Drive</p>
						</li>
						<li class="mb-4">
							<h6>File Name</h6>
							<p>23 July 2023, 08:30 PM</p>
						</li>
						<li class="mb-4">
							<h6>Opened On</h6>
							<p>28 July 2023, 06:40 PM</p>
						</li>
						<li>
							<div class="row">
								<!-- Editor -->
								<div class="col-lg-12">
									<div class="input-blocks summer-description-box transfer">
										<label>Description</label>
										<div id="summernote3">
										</div>
										<p>Maximum 60 Characters</p>
									</div>
								</div>
								<!-- /Editor -->
							</div>
						</li>
					</ul>
					<h5 class="mb-4 d-flex align-items-center"><i data-feather="user" class="feather-20 me-2"></i>Who has access</h5>
					<div class="d-flex align-items-center justify-content-between avatar-wrap">
		                <div class="avatar-access d-flex align-items-center mb-4">
		                    <span>
		                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="assets/img/avatar/avatar-1.jpg" alt="Avatar" class="avatar-md"></a>
		                    </span>
		                    <span>
		                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="assets/img/avatar/avatar-2.jpg" alt="Avatar" class="avatar-md"></a>
		                    </span>
		                    <span>
		                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 3" data-bs-original-title="Member 3"><img src="assets/img/avatar/avatar-3.jpg" alt="Avatar" class="avatar-md"></a>
		                    </span>
		                    <span>
		                       <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 4" data-bs-original-title="Member 4"><img src="assets/img/avatar/avatar-4.jpg" alt="Avatar" class="avatar-md"></a>
		                    </span>
		                    <span>
		                       <a href="javascript:void(0);" class="avatar-md add d-flex align-items-center justify-content-center"><i data-feather="plus" class="feather-16 me-1"></i></a>
		                    </span>
		                </div>
		            </div>
		            <p>Owned by Andrew. Shared with James, Fin, Davis</p>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<h5 class="mb-4 d-flex align-items-center"><i data-feather="calendar" class="feather-20 me-2"></i>This Week</h5>
					<ul class="mb-4">
						<li class="mb-4">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-1.jpg" alt="Avatar" class="avatar-md"></a>
								<p>Andrew commented on 1 items <br>3:39 PM Jul 19</p>
							</div>
							<p class="d-flex align-items-center location border-0"><img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">Website Backup for the Design team</p>
						</li>
						<li class="mb-4">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-2.jpg" alt="Avatar" class="avatar-md"></a>
								<p>Drake shared an item<br>3:39 PM Jul 19</p>
							</div>
							<p class="d-flex align-items-center location border-0"><img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">Website Backup for the Design team</p>
						</li>
						<li class="mb-2">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-3.jpg" alt="Avatar" class="avatar-md"></a>
								<div><p class="mb-0 text-secondary">Melvin</p><p class="mb-0">Commentor</p></div>
							</div>
						</li>
						<li class="mb-2">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-4.jpg" alt="Avatar" class="avatar-md"></a>
								<div><p class="mb-0 text-secondary">Drake</p><p class="mb-0">Editor</p></div>
							</div>
						</li>
					</ul>
					<h5 class="mb-4 d-flex align-items-center"><i data-feather="calendar" class="feather-20 me-2"></i>Last Month</h5>
					<ul class="mb-4">
						<li class="mb-4">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-1.jpg" alt="Avatar" class="avatar-md"></a>
								<p>Andrew commented on 1 items <br>3:39 PM Jul 19</p>
							</div>
							<p class="d-flex align-items-center location border-0"><img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">Website Backup for the Design team</p>
						</li>
						<li class="mb-4">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-2.jpg" alt="Avatar" class="avatar-md"></a>
								<p>Drake shared an item<br>3:39 PM Jul 19</p>
							</div>
							<p class="d-flex align-items-center location border-0"><img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">Website Backup for the Design team</p>
						</li>
						<li class="mb-2">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-3.jpg" alt="Avatar" class="avatar-md"></a>
								<div><p class="mb-0 text-secondary">Melvin</p><p class="mb-0">Commentor</p></div>
							</div>
						</li>
						<li class="mb-2">
							<div class="d-flex align-items-center mb-2">
								<a href="javascript:void(0);" class="me-3"><img src="assets/img/avatar/avatar-4.jpg" alt="Avatar" class="avatar-md"></a>
								<div><p class="mb-0 text-secondary">Drake</p><p class="mb-0">Editor</p></div>
							</div>
						</li>
					</ul>
					<a href="javascript:void(0);" class="text-primary show-all"><i data-feather="plus-circle" class="feather-20 me-2"></i>Show All</a>
				</div>
			</div>

		</div>
		<!-- Files Toogle Slide -->

		<!-- Upload File -->
		<div class="modal fade modal-default pos-modal upload-modal" id="upload-file" aria-labelledby="upload-file">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header p-4">
						<h5>Upload File</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-4">
	                    <div class="drag-drop text-center mb-4">
	                    	<div class="upload">
		                    	<a href="#"><img src="assets/img/icons/drag-drop.svg" alt=""></a>
		                    	<p>Drag and drop a <a href="#">file to upload</a></p>
		                    </div>
		                    <input type="file" multiple="">
	                    </div>

						<div class="d-flex align-items-center justify-content-between">
							<p>3 of 1 files Uploaded</p>
							<span>70%</span>
						</div>
						<div class="progress mt-2 mb-4">
						  	<div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<ul>
							<li class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center w-85">
									<img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">
									<div class="flex-fill">
										<h6><a href="javascript:void(0);">latest-version.zip<i data-feather="check-circle" class="ms-2 feather-16"></i></a></h6>
										<span>616 MB</span>
									</div>
								</div>
								<a href="javascript:void(0);" class="text-danger text-right"><i data-feather="trash-2" class="feather-16"></i></a>
							</li>
							<li class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center w-85">
									<img src="assets/img/icons/xls.svg" alt="Folder" class="me-2">
									<div class="flex-fill">
										<h6><a href="javascript:void(0);">Update work history.xls</a></h6>
										<span>616 MB</span>
										<div class="progress mt-2">
										  	<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="text-danger me-2"><i data-feather="trash-2" class="feather-16"></i></a>
									<a href="javascript:void(0);" class="text-default"><i data-feather="pause-circle" class="feather-16"></i></a>
								</div>
							</li>
							<li class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center w-85">
									<img src="assets/img/icons/zip.svg" alt="Folder" class="me-2">
									<div class="flex-fill">
										<h6><a href="javascript:void(0);">Updated Project.zip</a></h6>
										<span>616 MB</span>
										<div class="progress mt-2">
										  	<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="text-danger me-2"><i data-feather="trash-2" class="feather-16"></i></a>
									<a href="javascript:void(0);" class="text-default"><i data-feather="play-circle" class="feather-16"></i></a>
								</div>
							</li>
						</ul>

	                </div>
				</div>
			</div>
		</div>
		<!-- /Upload File -->

		<!-- Upload Folder -->
		<div class="modal fade modal-default pos-modal upload-modal" id="upload-folder" aria-labelledby="upload-folder">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header p-4">
						<h5>Upload File</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-4">
	                    <div class="drag-drop text-center mb-4">
	                    	<div class="upload">
		                    	<a href="#"><img src="assets/img/icons/drag-drop.svg" alt=""></a>
		                    	<p>Drag and drop a <a href="#">file to upload</a></p>
		                    </div>
		                    <input type="file" multiple="">
	                    </div>

						<div class="d-flex align-items-center justify-content-between">
							<p>3 of 3 files Uploaded</p>
							<span>100%</span>
						</div>
						<div class="progress mt-2 mb-4">
						  	<div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<ul>
							<li class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center w-85">
									<img src="assets/img/icons/folder.svg" alt="Folder" class="me-2">
									<div class="flex-fill">
										<h6><a href="javascript:void(0);">latest-version<i data-feather="check-circle" class="ms-2 feather-16"></i></a></h6>
										<span>616 MB</span>
									</div>
								</div>
								<a href="javascript:void(0);" class="text-danger text-right"><i data-feather="trash-2" class="feather-16"></i></a>
							</li>
							<li class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center w-85">
									<img src="assets/img/icons/xls.svg" alt="Folder" class="me-2">
									<div class="flex-fill">
										<h6><a href="javascript:void(0);">Update work history.xls<i data-feather="trash-2" class="feather-16"></i></a></h6>
										<span>16 MB</span>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="text-danger me-2"><i data-feather="trash-2" class="feather-16"></i></a>
									<a href="javascript:void(0);" class="text-default"><i data-feather="pause-circle" class="feather-16"></i></a>
								</div>
							</li>
							<li class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center w-85">
									<img src="assets/img/icons/zip.svg" alt="Folder" class="me-2">
									<div class="flex-fill">
										<h6><a href="javascript:void(0);">updated project.zip<i data-feather="trash-2" class="feather-16"></i></a></h6>
										<span>14 MB</span>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<a href="javascript:void(0);" class="text-danger me-2"><i data-feather="trash-2" class="feather-16"></i></a>
									<a href="javascript:void(0);" class="text-default"><i data-feather="play-circle" class="feather-16"></i></a>
								</div>
							</li>
						</ul>

	                </div>
	                <div class="modal-footer d-sm-flex justify-content-end">
						 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clear</button>
    					<button type="button" class="btn btn-primary">Upload</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /Upload Folder -->

		<!-- Upload Folder -->
		<div class="modal fade modal-default pos-modal upload-message" id="upload-message" aria-labelledby="upload-message">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header p-4">
						<h5>Upload File</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-4">

						<div class="d-flex align-items-center justify-content-between">
							<p>3 of 3 files Uploaded</p>
							<span>100%</span>
						</div>
						<div class="progress mt-2 mb-4">
						  	<div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
	                </div>
	                <div class="modal-footer d-sm-flex justify-content-end">
						 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clear</button>
    					<button type="button" class="btn btn-primary">Upload</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /Upload Folder -->

		<!-- Create Folder -->
		<div class="modal fade modal-default pos-modal" id="create-folder" aria-labelledby="create-folder">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header p-4">
						<h5>Create Folder</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-4">
						<div class="row">
							<div class="col-12">
								<label class="form-label">Folder Name</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="modal-footer d-sm-flex justify-content-end">
							 <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
        					<button type="button" class="btn btn-primary">Create Folder</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Folder -->
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

        <!-- Owl Carousel -->
        <script src="assets/js/plyr-js.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap5.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- Chart JS -->
		<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
		<script src="assets/plugins/apexchart/chart-data.js"></script>

		<!-- Sticky-sidebar -->
		<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
		<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS --><script src="assets/js/theme-script.js"></script>	
		<script src="assets/js/script.js"></script>

	
	</body>
</html>