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
		<link rel="stylesheet" href="assets/css/pos-style.css">
		
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
											<li><a href="ui-accordion.php" class="active">Accordion</a></li>
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
										<li><a href="ui-accordion.php" class="active">Accordion</a></li>
										<li><a href="ui-avatar.php">Avatar</a></li>
										<li><a href="ui-badges.php" >Badges</a></li>
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
										<li><a href="ui-offcanvas.php" >Offcanvas</a></li>
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
										<li><a href="ui-accordion.php" class="active">Accordion</a></li>
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
									<a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
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
							<h4>Accordion</h4>
						</div>
					</div>			
				   
					<div class="row">

						<!-- Basic Accordion -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Basic Accordion
									</div>
								</div>
								<div class="card-body">
									<div class="accordion" id="accordionExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseOne" aria-expanded="true"
													aria-controls="collapseOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseOne" class="accordion-collapse collapse show"
												aria-labelledby="headingOne" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use
													to
													style each element. These classes control the overall appearance, as
													well as
													the
													showing and hiding via CSS transitions. You can modify any of this with
													custom
													CSS or overriding our default variables. It's also worth noting that
													just
													about
													any HTML can go within the <code>.accordion-body</code>, though the
													transition
													does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseTwo"
													aria-expanded="false" aria-controls="collapseTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseTwo" class="accordion-collapse collapse"
												aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden
													by
													default, until the collapse plugin adds the appropriate classes that we
													use
													to
													style each element. These classes control the overall appearance, as
													well as
													the
													showing and hiding via CSS transitions. You can modify any of this with
													custom
													CSS or overriding our default variables. It's also worth noting that
													just
													about
													any HTML can go within the <code>.accordion-body</code>, though the
													transition
													does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseThree"
													aria-expanded="false" aria-controls="collapseThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseThree" class="accordion-collapse collapse"
												aria-labelledby="headingThree" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden
													by
													default, until the collapse plugin adds the appropriate classes that we
													use
													to
													style each element. These classes control the overall appearance, as
													well as
													the
													showing and hiding via CSS transitions. You can modify any of this with
													custom
													CSS or overriding our default variables. It's also worth noting that
													just
													about
													any HTML can go within the <code>.accordion-body</code>, though the
													transition
													does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Basic Accordion -->

						<!-- Always Open Accordion -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Always Open Accordion
										<p class="text-muted subtitle fs-12 fw-normal">Omit the <code>data-bs-parent</code>
											attribute on each
											<code>.accordion-collapse</code>
											to make accordion items stay open when another item is opened.
										</p>
									</div>
								</div>
								<div class="card-body">
									<div class="accordion" id="accordionPanelsStayOpenExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="panelsStayOpen-headingOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
													aria-controls="panelsStayOpen-collapseOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
												aria-labelledby="panelsStayOpen-headingOne">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use
													to style each element. These classes control the overall appearance, as
													well
													as the showing and hiding via CSS transitions. It's also worth
													noting
													that just about any HTML can go within the <code>.accordion-body</code>,
													though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
													aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
												aria-labelledby="panelsStayOpen-headingTwo">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden
													by
													default, until the collapse plugin adds the appropriate classes that we
													use
													to style each element. These classes control the overall appearance, as
													well
													as the showing and hiding via CSS transitions. You can modify any of
													this
													with custom CSS or overriding our default variables. It's also worth
													noting
													that just about any HTML can go within the <code>.accordion-body</code>,
													though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="panelsStayOpen-headingThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
													aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
												aria-labelledby="panelsStayOpen-headingThree">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden
													by
													default, until the collapse plugin adds the appropriate classes that we
													use
													to style each element. These classes control the overall appearance, as
													well
													as the showing and hiding via CSS transitions. You can modify any of
													this
													with custom CSS or overriding our default variables. It's also worth
													noting
													that just about any HTML can go within the <code>.accordion-body</code>,
													though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Always Open Accordion -->

					</div>

					<div class="row">

						<!-- With Spacing -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										With Spacing
									</div>
								</div>
								<div class="card-body">
									<div class="accordions-items-seperate" id="accordionSpacingExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSpacingOne">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingOne" aria-expanded="false" aria-controls="SpacingOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="SpacingOne" class="accordion-collapse collapse" aria-labelledby="headingSpacingOne" data-bs-parent="#accordionSpacingExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSpacingTwo">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingTwo" aria-expanded="false" aria-controls="SpacingTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="SpacingTwo" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo" data-bs-parent="#accordionSpacingExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSpacingThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#SpacingThree"
													aria-expanded="false" aria-controls="SpacingThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="SpacingThree" class="accordion-collapse collapse"
												aria-labelledby="headingSpacingThree"
												data-bs-parent="#accordionSpacingExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /With Spacing -->

						<!-- Flush Accordion -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Flush Accordion
										<p class="subtitle text-muted fs-12 fw-normal">
											Add <code>.accordion-flush</code> to remove the default
											<code>background-color</code>,
											borders, and rounded corners.
										</p>
									</div>
								</div>
								<div class="card-body p-0">
									<div class="accordion accordion-flush" id="accordionFlushExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingOne">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
													aria-expanded="false" aria-controls="flush-collapseOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="flush-collapseOne" class="accordion-collapse collapse"
												aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
												<div class="accordion-body">Placeholder content for this accordion,
													which is
													intended to demonstrate the <code>.accordion-flush</code> class.
													This is
													the
													first item's accordion body.</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
													aria-expanded="false" aria-controls="flush-collapseTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="flush-collapseTwo" class="accordion-collapse collapse"
												aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
												<div class="accordion-body">Placeholder content for this accordion,
													which is
													intended to demonstrate the <code>.accordion-flush</code> class.
													This is
													the
													second item's accordion body. Let's imagine this being filled
													with
													some
													actual content.</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
													aria-expanded="false" aria-controls="flush-collapseThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="flush-collapseThree" class="accordion-collapse collapse"
												aria-labelledby="flush-headingThree"
												data-bs-parent="#accordionFlushExample">
												<div class="accordion-body">Placeholder content for this accordion,
													which is
													intended to demonstrate the <code>.accordion-flush</code> class.
													This is
													the
													third item's accordion body. Nothing more exciting happening
													here in
													terms
													of content, but just filling up the space to make it look, at
													least
													at
													first
													glance, a bit more representative of how this would look in a
													real-world
													application.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Flush Accordion -->

					</div>

					<!-- Light Colors -->
					<h6 class="mb-3">Light Colors:</h6>
					<div class="row">
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Primary
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-primary" id="accordionPrimaryExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingPrimaryOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapsePrimaryOne" aria-expanded="true"
													aria-controls="collapsePrimaryOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapsePrimaryOne" class="accordion-collapse collapse show"
												aria-labelledby="headingPrimaryOne"
												data-bs-parent="#accordionPrimaryExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingPrimaryTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsePrimaryTwo"
													aria-expanded="false" aria-controls="collapsePrimaryTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapsePrimaryTwo" class="accordion-collapse collapse"
												aria-labelledby="headingPrimaryTwo"
												data-bs-parent="#accordionPrimaryExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingPrimaryThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsePrimaryThree"
													aria-expanded="false" aria-controls="collapsePrimaryThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapsePrimaryThree" class="accordion-collapse collapse"
												aria-labelledby="headingPrimaryThree"
												data-bs-parent="#accordionPrimaryExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Secondary
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-secondary" id="accordionSecondaryExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSecondaryOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseSecondaryOne" aria-expanded="true"
													aria-controls="collapseSecondaryOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseSecondaryOne" class="accordion-collapse collapse show"
												aria-labelledby="headingSecondaryOne"
												data-bs-parent="#accordionSecondaryExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSecondaryTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
													aria-expanded="false" aria-controls="collapseSecondaryTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseSecondaryTwo" class="accordion-collapse collapse"
												aria-labelledby="headingSecondaryTwo"
												data-bs-parent="#accordionSecondaryExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSecondaryThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
													aria-expanded="false" aria-controls="collapseSecondaryThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseSecondaryThree" class="accordion-collapse collapse"
												aria-labelledby="headingSecondaryThree"
												data-bs-parent="#accordionSecondaryExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Light Colors -->

					<!-- Solid Colors -->
					<h6 class="mb-3">Solid Colors:</h6>
					<div class="row">
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Primary
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-solid-primary" id="accordionPrimarySolidExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingPrimarySolidOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapsePrimarySolidOne" aria-expanded="true"
													aria-controls="collapsePrimarySolidOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapsePrimarySolidOne" class="accordion-collapse collapse show"
												aria-labelledby="headingPrimarySolidOne"
												data-bs-parent="#accordionPrimarySolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingPrimarySolidTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidTwo"
													aria-expanded="false" aria-controls="collapsePrimarySolidTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapsePrimarySolidTwo" class="accordion-collapse collapse"
												aria-labelledby="headingPrimarySolidTwo"
												data-bs-parent="#accordionPrimarySolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingPrimarySolidThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsePrimarySolidThree"
													aria-expanded="false" aria-controls="collapsePrimarySolidThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapsePrimarySolidThree" class="accordion-collapse collapse"
												aria-labelledby="headingPrimarySolidThree"
												data-bs-parent="#accordionPrimarySolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Secondary
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-solid-secondary" id="accordionSecondarySolidExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSecondarySolidOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseSecondarySolidOne" aria-expanded="true"
													aria-controls="collapseSecondarySolidOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseSecondarySolidOne" class="accordion-collapse collapse show"
												aria-labelledby="headingSecondarySolidOne"
												data-bs-parent="#accordionSecondarySolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSecondarySolidTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidTwo"
													aria-expanded="false" aria-controls="collapseSecondarySolidTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseSecondarySolidTwo" class="accordion-collapse collapse"
												aria-labelledby="headingSecondarySolidTwo"
												data-bs-parent="#accordionSecondarySolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSecondarySolidThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseSecondarySolidThree"
													aria-expanded="false" aria-controls="collapseSecondarySolidThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseSecondarySolidThree" class="accordion-collapse collapse"
												aria-labelledby="headingSecondarySolidThree"
												data-bs-parent="#accordionSecondarySolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Warning
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-solid-warning" id="accordionWarningSolidExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingWarningSolidOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseWarningSolidOne" aria-expanded="true"
													aria-controls="collapseWarningSolidOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseWarningSolidOne" class="accordion-collapse collapse show"
												aria-labelledby="headingWarningSolidOne"
												data-bs-parent="#accordionWarningSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingWarningSolidTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseWarningSolidTwo"
													aria-expanded="false" aria-controls="collapseWarningSolidTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseWarningSolidTwo" class="accordion-collapse collapse"
												aria-labelledby="headingWarningSolidTwo"
												data-bs-parent="#accordionWarningSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingWarningSolidThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseWarningSolidThree"
													aria-expanded="false" aria-controls="collapseWarningSolidThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseWarningSolidThree" class="accordion-collapse collapse"
												aria-labelledby="headingWarningSolidThree"
												data-bs-parent="#accordionWarningSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Info
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-solid-info" id="accordionInfoSolidExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingInfoSolidOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseInfoSolidOne" aria-expanded="true"
													aria-controls="collapseInfoSolidOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseInfoSolidOne" class="accordion-collapse collapse show"
												aria-labelledby="headingInfoSolidOne"
												data-bs-parent="#accordionInfoSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingInfoSolidTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseInfoSolidTwo"
													aria-expanded="false" aria-controls="collapseInfoSolidTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseInfoSolidTwo" class="accordion-collapse collapse"
												aria-labelledby="headingInfoSolidTwo"
												data-bs-parent="#accordionInfoSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingInfoSolidThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseInfoSolidThree"
													aria-expanded="false" aria-controls="collapseInfoSolidThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseInfoSolidThree" class="accordion-collapse collapse"
												aria-labelledby="headingInfoSolidThree"
												data-bs-parent="#accordionInfoSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Success
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-solid-success" id="accordionSuccessSolidExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSuccessSolidOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseSuccessSolidOne" aria-expanded="true"
													aria-controls="collapseSuccessSolidOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseSuccessSolidOne" class="accordion-collapse collapse show"
												aria-labelledby="headingSuccessSolidOne"
												data-bs-parent="#accordionSuccessSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSuccessSolidTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseSuccessSolidTwo"
													aria-expanded="false" aria-controls="collapseSuccessSolidTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseSuccessSolidTwo" class="accordion-collapse collapse"
												aria-labelledby="headingSuccessSolidTwo"
												data-bs-parent="#accordionSuccessSolidTwo">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingSuccessSolidThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseSuccessSolidThree"
													aria-expanded="false" aria-controls="collapseSuccessSolidThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseSuccessSolidThree" class="accordion-collapse collapse"
												aria-labelledby="headingSuccessSolidThree"
												data-bs-parent="#accordionSuccessSolidThree">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Danger
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-solid-danger" id="accordionDangerSolidExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingDangerSolidOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseDangerSolidOne" aria-expanded="true"
													aria-controls="collapseDangerSolidOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseDangerSolidOne" class="accordion-collapse collapse show"
												aria-labelledby="headingDangerSolidOne"
												data-bs-parent="#accordionDangerSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingDangerSolidTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseDangerSolidTwo"
													aria-expanded="false" aria-controls="collapseDangerSolidTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseDangerSolidTwo" class="accordion-collapse collapse"
												aria-labelledby="headingDangerSolidTwo"
												data-bs-parent="#accordionDangerSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingDangerSolidThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseDangerSolidThree"
													aria-expanded="false" aria-controls="collapseDangerSolidThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseDangerSolidThree" class="accordion-collapse collapse"
												aria-labelledby="headingDangerSolidThree"
												data-bs-parent="#accordionDangerSolidExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Solid Colors -->

					<!-- Colored Borders -->
					<h6 class="mb-3">Colored Borders:</h6>
					<div class="row">
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Primary
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-border-primary accordions-items-seperate"
										id="accordionprimaryborderExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderprimaryOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#primaryBorderOne" aria-expanded="true"
													aria-controls="primaryBorderOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="primaryBorderOne" class="accordion-collapse collapse show"
												aria-labelledby="headingborderprimaryOne"
												data-bs-parent="#accordionprimaryborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderprimaryTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo"
													aria-expanded="false" aria-controls="primaryBorderTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="primaryBorderTwo" class="accordion-collapse collapse"
												aria-labelledby="headingborderprimaryTwo"
												data-bs-parent="#accordionprimaryborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderprimaryThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
													aria-expanded="false" aria-controls="primaryBorderThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="primaryBorderThree" class="accordion-collapse collapse"
												aria-labelledby="headingborderprimaryThree"
												data-bs-parent="#accordionprimaryborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Secondary
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-border-secondary accordions-items-seperate"
										id="accordioninfoborderExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderinfoOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#infoBorderOne" aria-expanded="true"
													aria-controls="infoBorderOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="infoBorderOne" class="accordion-collapse collapse show"
												aria-labelledby="headingborderinfoOne"
												data-bs-parent="#accordioninfoborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderinfoTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#infoBorderTwo"
													aria-expanded="false" aria-controls="infoBorderTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="infoBorderTwo" class="accordion-collapse collapse"
												aria-labelledby="headingborderinfoTwo"
												data-bs-parent="#accordioninfoborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderinfoThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#infoBorderThree"
													aria-expanded="false" aria-controls="infoBorderThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="infoBorderThree" class="accordion-collapse collapse"
												aria-labelledby="headingborderinfoThree"
												data-bs-parent="#accordioninfoborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Success
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-border-success accordions-items-seperate"
										id="accordionsuccessborderExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingbordersuccessOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#successBorderOne" aria-expanded="true"
													aria-controls="successBorderOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="successBorderOne" class="accordion-collapse collapse show"
												aria-labelledby="headingbordersuccessOne"
												data-bs-parent="#accordionsuccessborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingbordersuccessTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#successBorderTwo"
													aria-expanded="false" aria-controls="successBorderTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="successBorderTwo" class="accordion-collapse collapse"
												aria-labelledby="headingbordersuccessTwo"
												data-bs-parent="#accordionsuccessborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingbordersuccessThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#successBorderThree"
													aria-expanded="false" aria-controls="successBorderThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="successBorderThree" class="accordion-collapse collapse"
												aria-labelledby="headingbordersuccessThree"
												data-bs-parent="#accordionsuccessborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Info
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-border-info accordions-items-seperate"
										id="accordioninfoborderExampleTwo">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderinfoTwos">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#infoBorderOnes" aria-expanded="true"
													aria-controls="infoBorderOnes">
													Accordion Item #1
												</button>
											</h2>
											<div id="infoBorderOnes" class="accordion-collapse collapse show"
												aria-labelledby="headingborderinfoTwos"
												data-bs-parent="#accordioninfoborderExampleTwo">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderinfoTwoo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#infoBorderTwos"
													aria-expanded="false" aria-controls="infoBorderTwos">
													Accordion Item #2
												</button>
											</h2>
											<div id="infoBorderTwos" class="accordion-collapse collapse"
												aria-labelledby="headingborderinfoTwoo"
												data-bs-parent="#accordioninfoborderExample2">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderinfoThrees">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#infoBorderThrees"
													aria-expanded="false" aria-controls="infoBorderThrees">
													Accordion Item #3
												</button>
											</h2>
											<div id="infoBorderThrees" class="accordion-collapse collapse"
												aria-labelledby="headingborderinfoThrees"
												data-bs-parent="#accordioninfoborderExample2">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Warning
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-border-warning accordions-items-seperate"
										id="accordionwarningborderExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderwarningOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#warningBorderOne" aria-expanded="true"
													aria-controls="warningBorderOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="warningBorderOne" class="accordion-collapse collapse show"
												aria-labelledby="headingborderwarningOne"
												data-bs-parent="#accordionwarningborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderwarningTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#warningBorderTwo"
													aria-expanded="false" aria-controls="warningBorderTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="warningBorderTwo" class="accordion-collapse collapse"
												aria-labelledby="headingborderwarningTwo"
												data-bs-parent="#accordionwarningborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderwarningThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#warningBorderThree"
													aria-expanded="false" aria-controls="warningBorderThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="warningBorderThree" class="accordion-collapse collapse"
												aria-labelledby="headingborderwarningThree"
												data-bs-parent="#accordionwarningborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Danger
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-border-danger accordions-items-seperate"
										id="accordiondangerborderExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderdangerOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#dangerBorderOne" aria-expanded="true"
													aria-controls="dangerBorderOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="dangerBorderOne" class="accordion-collapse collapse show"
												aria-labelledby="headingborderdangerOne"
												data-bs-parent="#accordiondangerborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderdangerTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#dangerBorderTwo"
													aria-expanded="false" aria-controls="dangerBorderTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="dangerBorderTwo" class="accordion-collapse collapse"
												aria-labelledby="headingborderdangerTwo"
												data-bs-parent="#accordiondangerborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingborderdangerThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#dangerBorderThree"
													aria-expanded="false" aria-controls="dangerBorderThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="dangerBorderThree" class="accordion-collapse collapse"
												aria-labelledby="headingborderdangerThree"
												data-bs-parent="#accordiondangerborderExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Colored Borders -->

					<div class="row">

						<!-- Left Aligned Icons -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Left Aligned Icons
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordionicon-left accordions-items-seperate"
										id="accordioniconLeftExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingleftOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseleftOne" aria-expanded="true"
													aria-controls="collapseleftOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapseleftOne" class="accordion-collapse collapse show"
												aria-labelledby="headingleftOne" data-bs-parent="#accordioniconLeftExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingleftTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo"
													aria-expanded="false" aria-controls="collapseLeftTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapseLeftTwo" class="accordion-collapse collapse"
												aria-labelledby="headingleftTwo" data-bs-parent="#accordioniconLeftExample">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden
													by default, until the collapse plugin adds the appropriate classes that
													we use to style each element. These classes control the overall
													appearance, as well as the showing and hiding via CSS transitions. You
													can modify any of this with custom CSS or overriding our default
													variables. It's also worth noting that just about any HTML can go within
													the <code>.accordion-body</code>, though the transition does limit
													overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingleftThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseLeftThree"
													aria-expanded="false" aria-controls="collapseLeftThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapseLeftThree" class="accordion-collapse collapse"
												aria-labelledby="headingleftThree"
												data-bs-parent="#accordioniconLeftExample">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden
													by default, until the collapse plugin adds the appropriate classes that
													we use to style each element. These classes control the overall
													appearance, as well as the showing and hiding via CSS transitions. You
													can modify any of this with custom CSS or overriding our default
													variables. It's also worth noting that just about any HTML can go within
													the <code>.accordion-body</code>, though the transition does limit
													overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Left Aligned Icons -->

						<!-- Without Icon -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Without Icon
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordionicon-none accordions-items-seperate"
										id="accordioniconnoIconExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingnoIconOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapsenoIconOne" aria-expanded="true"
													aria-controls="collapsenoIconOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapsenoIconOne" class="accordion-collapse collapse show"
												aria-labelledby="headingnoIconOne"
												data-bs-parent="#accordioniconnoIconExample">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingnoIconTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsenoIconTwo"
													aria-expanded="false" aria-controls="collapsenoIconTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapsenoIconTwo" class="accordion-collapse collapse"
												aria-labelledby="headingnoIconTwo"
												data-bs-parent="#accordioniconnoIconExample">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden
													by default, until the collapse plugin adds the appropriate classes that
													we use to style each element. These classes control the overall
													appearance, as well as the showing and hiding via CSS transitions. You
													can modify any of this with custom CSS or overriding our default
													variables. It's also worth noting that just about any HTML can go within
													the <code>.accordion-body</code>, though the transition does limit
													overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingnoIconThree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsenoIconThree"
													aria-expanded="false" aria-controls="collapsenoIconThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapsenoIconThree" class="accordion-collapse collapse"
												aria-labelledby="headingnoIconThree"
												data-bs-parent="#accordioniconnoIconExample">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden
													by default, until the collapse plugin adds the appropriate classes that
													we use to style each element. These classes control the overall
													appearance, as well as the showing and hiding via CSS transitions. You
													can modify any of this with custom CSS or overriding our default
													variables. It's also worth noting that just about any HTML can go within
													the <code>.accordion-body</code>, though the transition does limit
													overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Without Icon -->
					</div>

					<div class="row">

						<!-- Custom Icon Accordion -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Custom Icon Accordion
									</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-customicon1 accordions-items-seperate" id="accordioncustomicon1Example">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingcustomicon1One">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapsecustomicon1One" aria-expanded="true"
													aria-controls="collapsecustomicon1One">
													Accordion Item #1
												</button>
											</h2>
											<div id="collapsecustomicon1One" class="accordion-collapse collapse show"
												aria-labelledby="headingcustomicon1One"
												data-bs-parent="#accordioncustomicon1Example">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingcustomicon1Two">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
													aria-expanded="false" aria-controls="collapsecustomicon1Two">
													Accordion Item #2
												</button>
											</h2>
											<div id="collapsecustomicon1Two" class="accordion-collapse collapse"
												aria-labelledby="headingcustomicon1Two"
												data-bs-parent="#accordioncustomicon1Example">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingcustomicon1Three">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
													aria-expanded="false" aria-controls="collapsecustomicon1Three">
													Accordion Item #3
												</button>
											</h2>
											<div id="collapsecustomicon1Three" class="accordion-collapse collapse"
												aria-labelledby="headingcustomicon1Three"
												data-bs-parent="#accordioncustomicon1Example">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Custom Icon Accordion -->

						<!-- Custom Accordion -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Custom Accordion
									</div>
								</div>
								<div class="card-body">
									<div class="accordion customized-accordion accordions-items-seperate" id="customizedAccordion">
										<div class="accordion-item custom-accordion-primary">
											<h2 class="accordion-header" id="customizedAccordionOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#customized-AccordionOne" aria-expanded="true"
													aria-controls="customized-AccordionOne">
													Accordion Item #1
												</button>
											</h2>
											<div id="customized-AccordionOne" class="accordion-collapse collapse show"
												aria-labelledby="customizedAccordionOne" data-bs-parent="#customizedAccordion">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item custom-accordion-secondary">
											<h2 class="accordion-header" id="customizedAccordionTwo">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
													data-bs-target="#customized-AccordionTwo" aria-expanded="false"
													aria-controls="customized-AccordionTwo">
													Accordion Item #2
												</button>
											</h2>
											<div id="customized-AccordionTwo" class="accordion-collapse collapse"
												aria-labelledby="customizedAccordionTwo" data-bs-parent="#customizedAccordion">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item custom-accordion-danger">
											<h2 class="accordion-header" id="customizedAccordionThree">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
													data-bs-target="#customized-AccordionThree" aria-expanded="false"
													aria-controls="customized-AccordionThree">
													Accordion Item #3
												</button>
											</h2>
											<div id="customized-AccordionThree" class="accordion-collapse collapse"
												aria-labelledby="customizedAccordionThree" data-bs-parent="#customizedAccordion">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by
													default, until the collapse plugin adds the appropriate classes that we
													use to style each element. These classes control the overall appearance,
													as well as the showing and hiding via CSS transitions. You can modify
													any of this with custom CSS or overriding our default variables. It's
													also worth noting that just about any HTML can go within the
													<code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Custom Accordion -->

					</div>

					<div class="row">

						<!-- Example -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Example
									</div>
								</div>
								<div class="card-body">
									<p class="mb-0">
										<a class="btn btn-primary collapsed mb-2" data-bs-toggle="collapse"
											href="#collapseExample" role="button" aria-expanded="false"
											aria-controls="collapseExample">
											Link with href
										</a>
										<button class="btn btn-secondary collapsed mb-2" type="button"
											data-bs-toggle="collapse" data-bs-target="#collapseExample"
											aria-expanded="false" aria-controls="collapseExample">
											Button with data-bs-target
										</button>
									</p>
									<div class="collapse" id="collapseExample">
										<div class="card card-body mb-0">
											Some placeholder content for the collapse component. This panel
											is
											hidden by default but revealed when the user activates the
											relevant
											trigger.
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Example -->

						<!-- Targets Collapse -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Targets Collapse
									</div>
								</div>
								<div class="card-body">
									<p class="mb-0">
										<a class="btn btn-primary mb-2" data-bs-toggle="collapse"
											href="#multiCollapseExample1" role="button" aria-expanded="false"
											aria-controls="multiCollapseExample1">Toggle first element</a>
										<button class="btn btn-success mb-2" type="button" data-bs-toggle="collapse"
											data-bs-target="#multiCollapseExample2" aria-expanded="false"
											aria-controls="multiCollapseExample2">Toggle second
											element</button>
										<button class="btn btn-danger mb-2" type="button" data-bs-toggle="collapse"
											data-bs-target=".multi-collapse" aria-expanded="false"
											aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle
											both elements</button>
									</p>
									<div class="row">
										<div class="col">
											<div class="collapse multi-collapse" id="multiCollapseExample1">
												<div class="card card-body mb-0">
													Some placeholder content for the first collapse
													component of
													this multi-collapse example. This panel is hidden by
													default
													but revealed when the user activates the relevant
													trigger.
												</div>
											</div>
										</div>
										<div class="col">
											<div class="collapse multi-collapse" id="multiCollapseExample2">
												<div class="card card-body mb-0">
													Some placeholder content for the second collapse
													component
													of this multi-collapse example. This panel is hidden by
													default but revealed when the user activates the
													relevant
													trigger.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Targets Collapse -->

					</div>

					<div class="row">

						<!-- Horizontal Collapse -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<div class="card-title">Horizontal Collapse</div>
								</div>
								<div class="card-body">
									<p>
										<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapseWidthExample" aria-expanded="false"
											aria-controls="collapseWidthExample">
											Toggle width collapse
										</button>
									</p>
									<div>
										<div class="collapse collapse-horizontal" id="collapseWidthExample">
											<div class="card card-body" style="width: 230px;">
												This is some placeholder content for a horizontal collapse. It's
												hidden
												by default and shown when triggered.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Horizontal Collapse -->

					</div>

				</div>
			</div>
			
		</div>
		<!-- /Main Wrapper -->

		<!-- Customize Links -->
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
		<!-- /Customize Links -->

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