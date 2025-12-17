<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="POS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
		<meta name="author" content="Dreamguys - Bootstrap Admin Template">
		<meta name="robots" content="noindex, nofollow">
		<title>Dreams Pos Admin Template</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- animation CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">

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
												<div class="imgbody flex-grow-1">
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
												<div class="imgbody flex-grow-1">
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
												<div class="imgbody flex-grow-1">
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
												<div class="imgbody flex-grow-1">
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
												<div class="imgbody flex-grow-1">
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
										<a href="javascript:void(0);"><i data-feather="smartphone"></i><span>Application</span><span class="menu-arrow"></span></a>
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
											<li><a href="file-manager.php">File Manager</a></li>
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
										<a href="javascript:void(0);" class="subdrop active">
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
											<li><a href="ui-cards.php" class="active">Card</a></li>
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
								<a class="tablinks nav-link" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"  role="tab" aria-selected="true">
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
								<a class="tablinks nav-link active" href="#set4" id="set-tab4" data-bs-toggle="tab" data-bs-target="#document"  role="tab" aria-selected="true">
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
							<ul class="tab-pane" id="home" aria-labelledby="home-tab">
								<li class="submenu">
									<a href="javascript:void(0);"><span>Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="dashboard.php">Admin Dashboard</a></li>
										<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
									</ul>
								</li>                                    
								<li class="submenu">
									<a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
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
										<li><a href="file-manager.php">File Manager</a></li>
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
							<ul class="tab-pane active" id="permission" aria-labelledby="set-tab4">
								<li><a href="users.php"><span>Users</span></a></li>
								<li><a href="roles-permissions.php"><span>Roles & Permissions</span></a></li>
								<li><a href="delete-account.php"><span>Delete Account Request</span></a></li>		
								<li class="submenu">
									<a href="javascript:void(0);" class="active subdrop">
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
										<li><a href="ui-cards.php" class="active">Card</a></li>
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
									<a href="javascript:void(0);">
										<span>Charts</span><span class="menu-arrow"></span>
									</a>
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
									<a href="javascript:void(0);">
										<span>Tables</span><span class="menu-arrow"></span>
									</a>
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
							<a href="dashboard.php" ><i data-feather="grid"></i><span> Main Menu</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="dashboard.php">Admin Dashboard</a></li>
										<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
									</ul>
								</li>  							
								<li class="submenu">
									<a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
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
										<li><a href="file-manager.php">File Manager</a></li>
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
							<a href="javascript:void(0);" class="active subdrop">
								<img src="assets/img/icons/users1.svg" alt="img">
								<span>User Management</span> <span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<span>People</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="customers.php"><span>Customers</span></a></li>
										<li><a href="suppliers.php"><span>Suppliers</span></a></li>
										<li><a href="store-list.php"><span>Stores</span></a></li>
										<li><a href="warehouse.php"><span>Warehouses</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<span>Roles &amp; Permissions</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="roles-permissions.php"><span>Roles & Permissions</span></a></li>
										<li><a href="delete-account.php"><span>Delete Account Request</span></a></li>								
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="active">
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
										<li><a href="ui-cards.php" class="active">Card</a></li>
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
										<li><a href="ui-rating.php">Rating</a></li>
										<li><a href="ui-text-editor.php">Text Editor</a></li>
										<li><a href="ui-counter.php">Counter</a></li>
										<li><a href="ui-scrollbar.php">Scrollbar</a></li>
										<li><a href="ui-stickynote.php">Sticky Note</a></li>
										<li><a href="ui-timeline.php">Timeline</a></li>
									</ul>
								</li>
								<li  class="submenu">
									<a href="javascript:void(0);">
										<span>Charts</span><span class="menu-arrow"></span>
									</a>
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
									<a href="javascript:void(0);">
										<span>Icons</span><span class="menu-arrow"></span>
									</a>
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
										<span> Forms Elements</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">
												<span>Form Elements</span><span class="menu-arrow inside-submenu"></span>
											</a>
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
											<a href="javascript:void(0);">
												<span>Layouts</span><span class="menu-arrow inside-submenu"></span>
											</a>
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
									<a href="javascript:void(0);">
										<span>Tables</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="tables-basic.php">Basic Tables </a></li>
										<li><a href="data-tables.php">Data Table </a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" ><i data-feather="user"></i><span>Profile</span> <span class="menu-arrow"></span></a>
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
									<li class="submenu"><a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.php">404 Error </a></li>
										<li><a href="error-500.php">500 Error </a></li>
										<li>
											<a href="blank-page.php"><span>Blank Page</span> </a>
										</li>
										<li>
											<a href="coming-soon.php"><span>Coming Soon</span> </a>
										</li>
										<li>
											<a href="under-maintenance.php"><span>Under Maintenance</span> </a>
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

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="page-title">
							<h4>Cards</h4>
						</div>
					</div>
					
					<!-- Feature Card -->
					<div class="row">
						<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<img src="assets/img/img-01.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h6 class="card-title fw-semibold">Card title</h6>
									<p class="card-text text-muted">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
									<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
								</div>
								<div class="card-footer">
									<span class="card-text">Last updated 3 mins ago</span>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Featured</div>
								</div>
								<div class="card-body">
									<h6 class="card-title fw-semibold">Special title treatment</h6>
									<p class="card-text">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
									<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h6 class="card-title fw-semibold mb-2">Card title</h6>
									<p class="card-subtitle mb-3 text-muted">Card subtitle</p>
									<p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration many variations of passages of Lorem Ipsum available there are so many ways to solve but the majority have suffered.</p>
								</div>
								<div class="card-footer">
									<a href="javascript:void(0);" class="card-link text-danger m-1">Buy Now</a>
									<a href="javascript:void(0);" class="card-link text-success m-1"><u>Review</u></a>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<img src="assets/img/img-02.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and
										make up the bulk of the card's content.</p>
								</div>
							</div>
							<h6 class="mb-3">Only Card Body:</h6>
							<div class="card">
								<div class="card-body">
									<div class="card-text">
										<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<img src="assets/img/img-03.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h6 class="card-title fw-semibold">Card title</h6>
									<p class="card-text">Some quick example text to build on the card title and
										make up the bulk of the card's content.</p>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">An item</li>
									<li class="list-group-item">A second item</li>
								</ul>
								<div class="card-body">
									<a href="javascript:void(0);" class="card-link text-primary">Card link</a>
									<a href="javascript:void(0);" class="card-link text-secondary d-inline-block">Another link</a>
								</div>
							</div>
						</div>
					</div>
					<!-- / Feature Card -->

					<!-- Quote Card -->
					<div class="row">
						<div class="col-xxl-6 col-xl-6 col-lg-12">
							<div class="row">
								<h6 class="mb-3">Quote:</h6>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-body">
											<blockquote class="blockquote mb-0 text-center">
											<h6 class="">The greatest glory in living lies not in never falling, but in rising every time we fall.</h6>
											<footer class="blockquote-footer mt-2 fs-14">Someone famous in <cite title="Source Title">Source Title</cite></footer>
											</blockquote>
										</div>
										</div>
								</div>
								<div class="col-xl-12">
									<h6 class="mb-3">List Group:</h6>
									<div class="row">
										<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
											<div class="card">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">An item</li>
													<li class="list-group-item">A second item</li>
													<li class="list-group-item">A third item</li>
													<li class="list-group-item">A fourth item</li>
												</ul>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
											<div class="card">
												<div class="card-header">
													Featured
												</div>
												<ul class="list-group list-group-flush">
													<li class="list-group-item">An item</li>
													<li class="list-group-item">A second item</li>
													<li class="list-group-item">A third item</li>
												</ul>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
											<div class="card">
												<ul class="list-group list-group-flush">
													<li class="list-group-item">An item</li>
													<li class="list-group-item">A second item</li>
													<li class="list-group-item">A third item</li>
												</ul>
												<div class="card-footer">
													Card footer
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-6 col-lg-12">
							<h6 class="mb-3">Using Grid Markups:</h6>
							<div class="row row-cols-12">
								<div class="col">
									<div class="card">
										<div class="card-body">
											<img src="assets/img/img-04.jpg" class="card-img mb-3" alt="...">
											<h6 class="card-title fw-semibold">Product A</h6>
											<p class="card-text">With supporting text below as a natural
												lead-in to additional content.</p>
											<a href="javascript:void(0);" class="btn btn-primary">Purchase</a>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
										<div class="card-body">
											<img src="assets/img/img-05.jpg" class="card-img mb-3" alt="...">
											<h6 class="card-title fw-semibold">Product B</h6>
											<p class="card-text">With supporting text below as a natural
												lead-in to additional content.</p>
											<a href="javascript:void(0);" class="btn btn-secondary">Purchase</a>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
										<div class="card-body">
											<img src="assets/img/img-02.jpg" class="card-img mb-3" alt="...">
											<h6 class="card-title fw-semibold">Product-C</h6>
											<p class="card-text">With supporting text below as a natural
												lead-in to additional content.</p>
											<a href="javascript:void(0);" class="btn btn-light">Purchase</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<!-- /Quote Card -->

					<!-- Text Alignment -->
					<div class="row">
						<div class="col-xl-9">
							<h6 class="mb-3">Text Alignment:</h6>
							<div class="row">
								<div class="col-xl-4">
									<div class="card">
										<div class="card-body">
											<div class="mb-2">
												<span class="avatar avatar-md">
													<img src="assets/img/img-01.jpg" alt="img">
												</span>
											</div>
											<h6 class="card-title fw-semibold">Where it come from</h6>
											<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
											<a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="card text-center">
										<div class="card-body">
											<div class="mb-2">
												<span class="avatar avatar-md">
													<img src="assets/img/img-02.jpg" alt="img">
												</span>
											</div>
											<h6 class="card-title fw-semibold">Why do we use it?</h6>
											<p class="card-text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
											<a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="card text-end">
										<div class="card-body">
											<div class="mb-2">
												<span class="avatar avatar-md">
													<img src="assets/img/img-03.jpg" alt="img">
												</span>
											</div>
											<h6 class="card-title fw-semibold">What is special?</h6>
											<p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
											<a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="row">
								<h6 class="mb-3">Mixins utilities:</h6>
								<div class="col-xl-12">
									<div class="card border border-success mb-3">
										<div class="card-header bg-transparent border-bottom border-success">Header</div>
										<div class="card-body text-success">
											<h6 class="card-title fw-semibold">Looking For Success?</h6>
											<p class="card-text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
										</div>
										<div class="card-footer bg-transparent border-top border-success">Footer</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Text Alignment -->

					<!-- Card Header & Footer -->
					<h6 class="mb-3">Card Header & Footer:</h6>
					<div class="row">
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center w-100">
										<img src="assets/img/avatar/avatar-1.jpg" alt="img" class="avatar avatar-rounded me-2">
										<div class="">
											<div class="fs-15 fw-semibold">Adam Smith</div>
											<p class="mb-0 text-muted fs-11">28 Years, Male</p>
										</div>
										<div class="dropdown ms-auto">
											<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown">
												<i class="fa-solid fa-ellipsis-vertical"></i>
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									If you are going to use, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.
								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-between">
										<div class="fs-semibold fs-14">28,Nov 2022</div>
										<div class="fw-semibold text-success">Assistant Professor</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header border-bottom-0 pb-0">
									<div>
										<span class="text-warning me-1"><i class="fa-solid fa-star"></i></span>
										<span class="text-warning me-1"><i class="fa-solid fa-star"></i></span>
										<span class="text-warning me-1"><i class="fa-solid fa-star"></i></span>
										<span class="text-warning me-1"><i class="fa-solid fa-star"></i></span>
										<span class="text-black op-1"><i class="fa-solid fa-star"></i></span>
										<p class="d-block text-muted mb-0 fs-12 fw-semibold">1 year ago</p>
									</div>    
								</div>
								<div class="card-body pt-3">
									<div class="fw-semibold fs-15 mb-2">Very Great!</div>
									There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
								</div>
								<div class="card-footer">
									<div class="d-flex align-items-center">
										<span class="avatar avatar-sm avatar-rounded me-2">
											<img src="assets/img/avatar/avatar-2.jpg" alt="img">
										</span>
										<div class="fw-semibold fs-14">Corey Anderson</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card text-center">
								<div class="card-header border-bottom-0 pb-0">
									<span class="ms-auto shadow-lg fs-17"><i class="fa-solid fa-heart text-danger"></i></span>
								</div>
								<div class="card-body pt-1">
									<span class="avatar avatar-xl avatar-rounded me-2 mb-2">
										<img src="assets/img/avatar/avatar-7.jpg" alt="img">
									</span>
									<div class="fw-semibold fs-16">Sasha Max</div>
									<p class="mb-4 text-muted fs-11">Web Developer</p>
									<div class="btn-list">
										<button class="btn btn-icon btn-facebook btn-wave">
											<i class="fa-brands fa-facebook-f"></i>
										</button>
										<button class="btn btn-icon btn-twitter btn-wave">
											<i class="fa-brands fa-twitter"></i>
										</button>
										<button class="btn btn-icon btn-instagram btn-wave">
											<i class="fa-brands fa-instagram"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-primary">
								<div class="card-body">
									<div class="cals-icon">
										<i class="fa solid fa-calculator"></i>
									</div>
									<p class="mb-0 mt-3 fs-20 fw-semibold lh-1">
										Calculations
									</p>
								</div>
								<div class="card-footer">
									Lorem Ipsum is therefore always free from repetition, injected humour.
								</div>
							</div>
						</div>
						<div class="col-xl-2">
							<div class="card">
								<div class="card-body">
									<img src="assets/img/img-1.jpg" class="card-img mb-3" alt="...">
									<h6 class="card-title fw-semibold mb-3">Mountains<span class="badge bg-primary float-end fs-10">New</span></h6>
									<p class="card-text">With supporting text below as a natural
										lead-in.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2">
							<div class="card">
								<div class="card-body">
									<img src="assets/img/img-2.jpg" class="card-img mb-3" alt="...">
									<h6 class="card-title fw-semibold mb-3">Hills<span class="badge bg-secondary float-end fs-10">Hot</span></h6>
									<p class="card-text">With supporting text below as a natural
										lead-in.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-2">
							<div class="card">
								<div class="card-body">
									<img src="assets/img/img-3.jpg" class="card-img mb-3" alt="...">
									<h6 class="card-title fw-semibold mb-3">Nature<span class="badge bg-light text-dark float-end fs-10">Offer</span></h6>
									<p class="card-text">With supporting text below as a natural
										lead-in.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card text-center">
								<div class="card-header">
									<div class="card-title">Featured</div>
								</div>
								<div class="card-body">
									<h6 class="card-title fw-semibold mb-2">Breaking News !</h6>
									<p class="card-text mb-4">With supporting text below as a natural lead-in to
										additional content.</p>
									<a href="javascript:void(0);" class="btn btn-primary mt-2">Read More</a>
									<a href="javascript:void(0);" class="btn btn-outline-secondary mt-2">Close</a>
								</div>
								<div class="card-footer text-muted">
									11.32pm
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="d-flex w-100">
										<div class="me-4">
											<span class="avatar avatar-lg avatar-rounded">
												<img src="assets/img/avatar/avatar-3.jpg" alt="img">
											</span>
										</div>
										<div class="d-flex align-items-center justify-content-between w-100 flex-wrap">
											<div class="me-3">
												<p class="text-muted mb-0">Posts</p>
												<p class="fw-semibold fs-16 mb-0">25</p>
											</div>
											<div class="me-3">
												<p class="text-muted mb-0">Followers</p>
												<p class="fw-semibold fs-16 mb-0">1253</p>
											</div>
											<div class="me-3">
												<p class="text-muted mb-0">Following</p>
												<p class="fw-semibold fs-16 mb-0">367</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="fw-semibold fs-16">Angelina Caprio</div>
									<div class="text-muted fs-11 mb-4">Angular Developer</div>
									<p class="fs-14 fw-semibold mb-1">About:</p>
									<p class="mb-0 card-text">Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions </p>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header justify-content-between d-flex flex-wrap">
									<div class="card-title">
										Card With Collapse Button
									</div>
									<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										<i class="fa-solid fa-chevron-down fs-18 collapse-open"></i>
										<i class="fa-solid fa-chevron-up collapse-close fs-18"></i>
									</a>
								</div>
								<div class="collapse show" id="collapseExample">
									<div class="card-body">
										<h6 class="card-text fw-semibold">Collapsible Card</h6>
										<p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
									</div>
									<div class="card-footer">
										<button class="btn btn-primary">Read More</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header justify-content-between d-flex flex-wrap">
									<div class="card-title">
										Card With Close Button
									</div>
									<a href="javascript:void(0);" data-bs-toggle="card-remove">
										<i class="fa-solid fa-xmark fs-18"></i>
									</a>
								</div>
								<div class="card-body">
									<h6 class="card-text fw-semibold">Closed Card</h6>
									<p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary">Read More</button>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header justify-content-between d-flex flex-wrap">
									<div class="card-title">
										Card With Fullscreen Button
									</div>
									<a href="javascript:void(0);" data-bs-toggle="card-fullscreen">
										<i class="fa-solid fa-expand"></i>
									</a>
								</div>
								<div class="card-body">
									<h6 class="card-text fw-semibold">FullScreen Card</h6>
									<p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary">Read More</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Card Header & Footer -->

					<!-- Using Utilities -->
					<div class="row">
						<div class="col-xxl-6 col-xl-12">
							<h6 class="mb-3">Using Utilities:</h6>
							<div class="row">
								<div class="col-xl-6">
									<div class="card w-75">
										<div class="card-header">
											<div class="card-title">Using Width 75%</div>
										</div> 
										<div class="card-body">
											<div class="card-text">
												Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nostrum omnis excepturi consequatur molestiae 
											</div>
										</div>
										<div class="card-footer">
											<a href="javascript:void(0);" class="btn btn-primary d-grid">Button</a>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="card w-50">
										<div class="card-header">
											<div class="card-title">Using Width 50%</div>
										</div> 
										<div class="card-body">
											<div class="card-text">
												Lorem ipsum dolor sit amet consectetur adipisicing elit 
											</div>
										</div>
										<div class="card-footer">
											<a href="javascript:void(0);" class="btn btn-primary d-grid">Button</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-12">
							<h6 class="mb-3">Navigation:</h6>
							<div class="row">
								<div class="col-xl-6">
									<div class="card text-center">
										<div class="card-header">
											<ul class="nav nav-tabs card-header-tabs ms-1">
												<li class="nav-item">
													<a class="nav-link active" aria-current="true" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item">
													<a class="nav-link disabled">Disabled</a>
												</li>
											</ul>
										</div>
										<div class="card-body">
											<h6 class="card-title fw-semibold">Special title treatment</h6>
											<p class="card-text">With supporting text below as a natural lead-in to
												additional content.</p>
											<a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="card text-center">
										<div class="card-header">
											<ul class="nav nav-pills card-header-pills ms-1">
												<li class="nav-item">
													<a class="nav-link active" href="javascript:void(0);">Active</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="javascript:void(0);">Link</a>
												</li>
												<li class="nav-item">
													<a class="nav-link disabled">Disabled</a>
												</li>
											</ul>
										</div>
										<div class="card-body">
											<h6 class="card-title fw-semibold">Special title treatment</h6>
											<p class="card-text">With supporting text below as a natural lead-in to
												additional content.</p>
											<a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Using Utilities -->

					<!-- Image Caps -->
					<h6 class="mb-3">Image Caps:</h6>
					<div class="row">
						<div class="col-xl-4">
							<div class="card">
								<img src="assets/img/img-01.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h6 class="card-title fw-semibold">Image caps are widely used in Blog's</h6>
									<p class="card-text mb-3 text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
									<p class="card-text mb-0"><small>Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-body">
									<h6 class="card-title fw-semibold">Image caps are widely used in Blog's</h6>
									<p class="card-text mb-3 text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound.</p>
									<p class="card-text mb-0"><small>Last updated 3 mins ago</small></p>
								</div>
								<img src="assets/img/img-02.jpg" class="card-img-bottom" alt="...">
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-body">
									<h6 class="card-title fw-semibold mb-1">Image caps are widely used in Blog's</h6>
									<p class="card-text mb-1 text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<img src="assets/img/img-2.jpg" class="card-img rounded-0" alt="...">
								<div class="card-body">
									<p class="card-text mb-0"><small>Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Image caps are widely used in Blog's</div>
								</div>
								<div class="card-body">
									<p class="card-text mb-1 text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<img src="assets/img/img-04.jpg" class="card-img rounded-0" alt="...">
								<div class="card-footer">
									<p class="card-text mb-0"><small>Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<img src="assets/img/img-05.jpg" class="card-img-top" alt="...">
								<div class="card-header">
									<div class="card-title">Image caps are widely used in Blog's</div>
								</div>
								<div class="card-body">
									<p class="card-text mb-1 text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<div class="card-footer">
									<p class="card-text mb-0"><small>Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Image caps are widely used in Blog's</div>
								</div>
								<div class="card-body">
									<p class="card-text mb-1 text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<div class="card-footer">
									<p class="card-text mb-0"><small>Last updated 3 mins ago</small></p>
								</div>
								<img src="assets/img/img-1.jpg" class="card-img-bottom" alt="...">
							</div>
						</div>
					</div>
					<!-- /Image Caps -->

					<!-- Image Overlays -->
					<h6 class="mb-3">Image Overlays:</h6>
					<div class="row">
						<div class="col-xl-4">
							<div class="card overlay-card">
								<img src="assets/img/img-2.jpg" class="card-img" alt="...">
								<div class="card-img-overlay d-flex flex-column p-0">
									<div class="card-header">
										<div class="card-title text-fixed-white">
											Image Overlays Are Awesome!
										</div>
									</div>
									<div class="card-body text-fixed-white">
										<div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
										<div class="card-text">Last updated 3 mins ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card overlay-card">
								<img src="assets/img/img-3.jpg" class="card-img" alt="...">
								<div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
									<div class="card-body text-fixed-white">
										<div class="card-text text-fixed-white">
											Image Overlays Are Awesome!
										</div>
										<div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
										<div class="card-text">Last updated 3 mins ago</div>
									</div>
									<div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card overlay-card">
								<img src="assets/img/img-4.jpg" class="card-img" alt="...">
								<div class="card-img-overlay d-flex flex-column p-0">
									<div class="card-header">
										<div class="card-title text-fixed-white">
											Image Overlays Are Awesome!
										</div>
									</div>
									<div class="card-body text-fixed-white">
										<div class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
									</div>
									<div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Image Overlays -->

					<!-- Horizontal Cards -->
					<h6 class="mb-3">Horizontal Cards:</h6>
					<div class="row">
						<div class="col-xl-4">
							<div class="card">
								<div class="row g-0">
									<div class="col-md-4">
										<img src="assets/img/img-05.jpg" class="img-fluid rounded-start object-fit-cover h-100 w-100" alt="...">
									</div>
									<div class="col-md-8">
										<div class="card-header">
											<div class="card-title">Horizontal Cards</div>
										</div>
										<div class="card-body">
											<h6 class="card-title fw-semibold">Horizontal cards are awesome!</h6>
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										</div>
										<div class="card-footer">
											<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="row g-0">
									<div class="col-md-8">
										<div class="card-header">
											<div class="card-title">Horizontal Cards</div>
										</div>
										<div class="card-body">
											<h6 class="card-title fw-semibold">Horizontal cards are awesome!</h6>
											<p class="card-text mb-3">This is a wider card with suppo    rting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
									</div>
									<div class="col-md-4">
										<img src="assets/img/img-01.jpg" class="img-fluid rounded-end object-fit-cover h-100 w-100" alt="...">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="row g-0">
									<div class="col-md-8">
										<div class="card-body">
											<h6 class="card-title fw-semibold mb-2">Horizontal Cards</h6>
											<div class="card-title mb-3">Horizontal cards are awesome!</div>
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										</div>
										<div class="card-footer">
											<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
									</div>
									<div class="col-md-4">
										<img src="assets/img/img-02.jpg" class="img-fluid rounded-end object-fit-cover h-100 w-100" alt="...">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Horizontal Cards -->

					<!-- Background Colored Cards -->
					<h6 class="mb-3">Background Colored Cards:</h6>
					<div class="row">
						<div class="col-xl-3">
							<div class="card card-bg-primary">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-2.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold">Adam Smith</div>
											<p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-fixed-white"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card card-bg-secondary">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-1.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold">Elisha Corner</div>
											<p class="mb-0 text-fixed-white op-7 fs-12">Completed 24 days back</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-fixed-white"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card card-bg-warning">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-3.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold">Sarah Alina</div>
											<p class="mb-0 text-fixed-white op-7 fs-12">Completed today</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-fixed-white"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card card-bg-info">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-7.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold">Monica Karen</div>
											<p class="mb-0 text-fixed-white op-7 fs-12">Pending from 4 days</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-fixed-white"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card card-bg-success">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-11.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold">Samantha sid</div>
											<p class="mb-0 text-fixed-white op-7 fs-12">In leave for 1 month</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-fixed-white"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card card-bg-danger">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-4.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold">Sebastien steyn</div>
											<p class="mb-0 text-fixed-white op-7 fs-12">Completed by Tomorrow</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-fixed-white"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card card-bg-light">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-5.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold">Jacob Smith</div>
											<p class="mb-0 text-muted op-7 fs-12">Finished by 24,Nov</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-default"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card card-bg-dark">
								<div class="card-body">
									<div class="d-flex align-items-center w-100">
										<div class="me-2">
											<span class="avatar avatar-rounded">
												<img src="assets/img/avatar/avatar-6.jpg" alt="img">
											</span>
										</div>
										<div class="">
											<div class="fs-15 fw-semibold text-white">Pope Adam</div>
											<p class="mb-0 op-7 fs-12 text-white">Completed on 24,may</p>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="text-white"><i class="fa-solid fa-ellipsis-vertical"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Background Colored Cards -->

					<!-- Colored Border Cards -->
					<h6 class="mb-3">Colored Border Cards:</h6>
					<div class="row">
						<div class="col-xl-3">
							<div class="card border border-primary">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">Home Page Design
									</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-primary-transparent">Framework</span>
										<span class="badge bg-secondary-transparent">Angular</span>
										<span class="badge bg-info-transparent">Php</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-1.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-2.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-3.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-secondary">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">Landing Page Design</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-danger-transparent">Laravel</span>
										<span class="badge bg-info-transparent">Codeignitor</span>
										<span class="badge bg-success-transparent">Php</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-4.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-5.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-warning">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">Update New Project</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-warning-transparent">Html</span>
										<span class="badge bg-secondary-transparent">Bootstrap</span>
										<span class="badge bg-info-transparent">React</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-6.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-7.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-8.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-9.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-info">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">New Project Discussion</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-info-transparent">React</span>
										<span class="badge bg-primary-transparent">Typescript</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-10.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-11.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-12.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-danger">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">Recent Projects Testing</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-primary-transparent">Ui</span>
										<span class="badge bg-secondary-transparent">Angular</span>
										<span class="badge bg-info-transparent">Java</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-13.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-success">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">About Us Page redesign</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-danger-transparent">Html</span>
										<span class="badge bg-warning-transparent">Symphony</span>
										<span class="badge bg-success-transparent">Php</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-14.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-15.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-light">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">New Employees</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-warning-transparent">Html</span>
										<span class="badge bg-info-transparent">Cake Php</span>
										<span class="badge bg-success-transparent">React</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-16.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-17.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-18.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card border border-dark">
								<div class="card-body">
									<p class="fs-14 fw-semibold mb-2 lh-1">Terminated Employees</p>
									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge bg-primary-transparent">Angular</span>
									</div>
									<div class="avatar-list-stacked">
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-1.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-2.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-3.jpg" alt="img">
										</span>
										<span class="avatar avatar-sm avatar-rounded">
											<img src="assets/img/avatar/avatar-4.jpg" alt="img">
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Colored Border Cards -->

					<!-- Card Groups With Footer -->
					<h6 class="mb-3">Card Groups With Footer:</h6>
					<div class="row">
						<div class="col-xl-12">
							<div class="card-group">
								<div class="card">
									<img src="assets/img/img-01.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h6 class="card-title fw-semibold">Delecious food is a blessing!</h6>
										<p class="card-text">This is a wider card with supporting text below as
											a
											natural lead-in to additional content. This content is a little bit
											longer.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
								<div class="card">
									<img src="assets/img/img-02.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h6 class="card-title fw-semibold">Is office the best place to earn knowledge?</h6>
										<p class="card-text">This card has supporting text below as a natural
											lead-in to additional content.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
								<div class="card">
									<img src="assets/img/img-03.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h6 class="card-title fw-semibold">Writing is an art.</h6>
										<p class="card-text">This is a wider card with supporting text below as
											a
											natural lead-in to additional content. This card has even longer
											content
											than the first to show that equal height action.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Card Groups With Footer -->

					<!-- Cards With Link -->
					<h6 class="mb-3">Cards With Link:</h6>
					<div class="row">
						<div class="col-xxl-3 col-xl-12">
							<div class="card">
								<a href="javascript:void(0);" class="card-anchor"></a>
								<img src="assets/img/img-1.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h6 class="card-title fw-semibold mb-0">Forests are Awesome.</h6>
								</div>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-6">
							<div class="row">
								<div class="col-xxl-12 col-xl-12">
									<div class="card card-bg-primary">
										<a href="javascript:void(0);" class="card-anchor"></a>
										<div class="card-body">
											<blockquote class="blockquote mb-0 text-center">
											<h6 class="text-fixed-white">The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
											<footer class="blockquote-footer mt-3 fs-14 text-fixed-white op-7">Someone famous as <cite title="Source Title">-Helen Keller</cite></footer>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="col-xxl-5 col-xl-12">
									<div class="card">
										<a href="javascript:void(0);" class="card-anchor"></a>
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div class="me-3">
													<span class="avatar avatar-md">
														<img src="assets/img/avatar/avatar-2.jpg" alt="img">
													</span>
												</div>
												<div>
													<p class="card-text mb-0 fs-14 fw-semibold">Atharva Simon.</p>
													<div class="card-title text-muted fs-12 mb-0">Correspondent Professor</div>
												</div>    
											</div>
										</div>
									</div>
									<div class="card border border-info">
										<a href="javascript:void(0);" class="card-anchor"></a>
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div class="me-3">
													<span class="avatar avatar-xl">
														<img src="assets/img/avatar/avatar-1.jpg" alt="img">
													</span>
												</div>
												<div>
													<p class="card-text text-info mb-1 fs-14 fw-semibold">Alicia Keys.</p>
													<div class="card-title fs-12 mb-1">Department Of Commerce</div>
													<div class="card-title text-muted fs-11 mb-0">24 Years, Female</div>
												</div>    
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-7 col-xl-12">
									<div class="card">
										<a href="javascript:void(0);" class="card-anchor"></a>
										<div class="row g-0">
											<div class="col-md-8">
												<div class="card-body">
													<h6 class="card-title mb-2 fw-semibold">Fox is Beautiful ?</h6>
													<p class="card-text mb-0">This is a wild animal with supporting tactics and are very efficient at kill,they are very Dangerous.</p>
													<p class="mb-0 card-text">
														Fox lives mainly in forests and are well known for their hunting skills.
													</p>
												</div>
												<div class="card-footer">
													<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
												</div>
											</div>
											<div class="col-md-4">
												<img src="assets/img/img-5.jpg" class="img-fluid rounded-end object-fit-cover h-100" alt="...">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6">
							<div class="card">
								<a href="javascript:void(0);" class="card-anchor"></a>
								<img src="assets/img/img-4.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h6 class="card-title fw-semibold">Most tropical areas are suitable</h6>
									<p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /Cards With Link -->

					<!-- Grid Cards -->
					<h6 class="mb-3">Grid Cards:</h6>
					<div class="row">
						<div class="col-xl-12">
							<div class="row row-cols-1 row-cols-md-4 g-4">
								<div class="col">
									<div class="card">
										<img src="assets/img/img-01.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title fw-semibold">Morphology of a typical fruit.</h6>
											<p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
										<img src="assets/img/img-02.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title fw-semibold">Research improves ability & agility !</h6>
											<p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
										<img src="assets/img/img-03.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title fw-semibold">Most tropical areas are suitable</h6>
											<p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
										<img src="assets/img/img-04.jpg" class="card-img-top" alt="...">
										<div class="card-body">
											<h6 class="card-title fw-semibold">Are They seasonal fruits ?</h6>
											<p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Grid Cards -->
					
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

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/theme-script.js"></script>
		<script src="assets/js/script.js"></script>
				
			
	</body>
</html>