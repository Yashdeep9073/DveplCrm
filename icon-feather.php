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

        <!-- Feather CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">

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
										<a href="javascript:void(0);" class="active subdrop"><i data-feather="database"></i><span>Icons</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
											<li><a href="icon-feather.php" class="active">Feather Icons</a></li>
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
								<a class="tablinks nav-link" href="#set4" id="set-tab4" data-bs-toggle="tab" data-bs-target="#document"  role="tab" aria-selected="true">
									<i data-feather="user"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link active" href="#set5" id="set-tab6" data-bs-toggle="tab" data-bs-target="#permission"  role="tab" aria-selected="true">
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
									<a href="javascript:void(0);" class="active subdrop"><span>Icons</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
										<li><a href="icon-feather.php" class="active">Feather Icons</a></li>
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
							<a href="javascript:void(0);" class="active subdrop"><img src="assets/img/icons/users1.svg" alt="img"><span>User Management</span> <span class="menu-arrow"></span></a>
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
									<a href="javascript:void(0);" class="active subdrop"><span>Primary Icons</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
										<li><a href="icon-feather.php" class="active">Feather Icons</a></li>
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

            <div class="page-wrapper cardhead">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Feather Icon</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Feather Icon</li>
								</ul>
							</div>
						</div>
					</div>	
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Feather Icon</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="fe fe-activity" data-bs-toggle="tooltip" title="fe fe-activity"></i></li>
											<li><i class="fe fe-airplay" data-bs-toggle="tooltip" title="fe fe-airplay"></i></li>
											<li><i class="fe fe-alert-circle" data-bs-toggle="tooltip" title="fe fe-alert-circle"></i></li>
											<li><i class="fe fe-alert-octagon" data-bs-toggle="tooltip" title="fe fe-alert-octagon"></i></li>
											<li><i class="fe fe-alert-triangle" data-bs-toggle="tooltip" title="fe fe-alert-triangle"></i></li>
											<li><i class="fe fe-align-center" data-bs-toggle="tooltip" title="fe fe-align-center"></i></li>
											<li><i class="fe fe-align-justify" data-bs-toggle="tooltip" title="fe fe-align-justify"></i></li>
											<li><i class="fe fe-align-left" data-bs-toggle="tooltip" title="fe fe-align-left"></i></li>
											<li><i class="fe fe-align-right" data-bs-toggle="tooltip" title="fe fe-align-right"></i></li>
											<li><i class="fe fe-anchor" data-bs-toggle="tooltip" title="fe fe-anchor"></i></li>
											<li><i class="fe fe-aperture" data-bs-toggle="tooltip" title="fe fe-aperture"></i></li>
											<li><i class="fe fe-arrow-down" data-bs-toggle="tooltip" title="fe fe-arrow-down"></i></li>
											<li><i class="fe fe-arrow-down-circle" data-bs-toggle="tooltip" title="fe fe-arrow-down-circle"></i></li>
											<li><i class="fe fe-arrow-down-left" data-bs-toggle="tooltip" title="fe fe-arrow-down-left"></i></li>
											<li><i class="fe fe-arrow-down-right" data-bs-toggle="tooltip" title="fe fe-arrow-down-right"></i></li>
											<li><i class="fe fe-arrow-left" data-bs-toggle="tooltip" title="fe fe-arrow-left"></i></li>
											<li><i class="fe fe-arrow-left-circle" data-bs-toggle="tooltip" title="fe fe-arrow-left-circle"></i></li>
											<li><i class="fe fe-arrow-right" data-bs-toggle="tooltip" title="fe fe-arrow-right"></i></li>
											<li><i class="fe fe-arrow-right-circle" data-bs-toggle="tooltip" title="fe fe-arrow-right-circle"></i></li>
											<li><i class="fe fe-arrow-up" data-bs-toggle="tooltip" title="fe fe-arrow-up"></i></li>
											<li><i class="fe fe-arrow-up-circle" data-bs-toggle="tooltip" title="fe fe-arrow-up-circle"></i></li>
											<li><i class="fe fe-arrow-up-left" data-bs-toggle="tooltip" title="fe fe-arrow-up-left"></i></li>
											<li><i class="fe fe-arrow-up-right" data-bs-toggle="tooltip" title="fe fe-arrow-up-right"></i></li>
											<li><i class="fe fe-at-sign" data-bs-toggle="tooltip" title="fe fe-at-sign"></i></li>
											<li><i class="fe fe-award" data-bs-toggle="tooltip" title="fe fe-award"></i></li>
											<li><i class="fe fe-bar-chart" data-bs-toggle="tooltip" title="fe fe-bar-chart"></i></li>
											<li><i class="fe fe-bar-chart-2" data-bs-toggle="tooltip" title="fe fe-bar-chart-2"></i></li>
											<li><i class="fe fe-battery" data-bs-toggle="tooltip" title="fe fe-battery"></i></li>
											<li><i class="fe fe-battery-charging" data-bs-toggle="tooltip" title="fe fe-battery-charging"></i></li>
											<li><i class="fe fe-bell" data-bs-toggle="tooltip" title="fe fe-bell"></i></li>
											<li><i class="fe fe-bell-off" data-bs-toggle="tooltip" title="fe fe-bell-off"></i></li>
											<li><i class="fe fe-bluetooth" data-bs-toggle="tooltip" title="fe fe-bluetooth"></i></li>
											<li><i class="fe fe-bold" data-bs-toggle="tooltip" title="fe fe-bold"></i></li>
											<li><i class="fe fe-book" data-bs-toggle="tooltip" title="fe fe-book"></i></li>
											<li><i class="fe fe-book-open" data-bs-toggle="tooltip" title="fe fe-book-open"></i></li>
											<li><i class="fe fe-bookmark" data-bs-toggle="tooltip" title="fe fe-bookmark"></i></li>
											<li><i class="fe fe-box" data-bs-toggle="tooltip" title="fe fe-box"></i></li>
											<li><i class="fe fe-briefcase" data-bs-toggle="tooltip" title="fe fe-briefcase"></i></li>
											<li><i class="fe fe-calendar" data-bs-toggle="tooltip" title="fe fe-calendar"></i></li>
											<li><i class="fe fe-camera" data-bs-toggle="tooltip" title="fe fe-camera"></i></li>
											<li><i class="fe fe-camera-off" data-bs-toggle="tooltip" title="fe fe-camera-off"></i></li>
											<li><i class="fe fe-cast" data-bs-toggle="tooltip" title="fe fe-cast"></i></li>
											<li><i class="fe fe-check" data-bs-toggle="tooltip" title="fe fe-check"></i></li>
											<li><i class="fe fe-check-circle" data-bs-toggle="tooltip" title="fe fe-check-circle"></i></li>
											<li><i class="fe fe-check-square" data-bs-toggle="tooltip" title="fe fe-check-square"></i></li>
											<li><i class="fe fe-chevron-down" data-bs-toggle="tooltip" title="fe fe-chevron-down"></i></li>
											<li><i class="fe fe-chevron-left" data-bs-toggle="tooltip" title="fe fe-chevron-left"></i></li>
											<li><i class="fe fe-chevron-right" data-bs-toggle="tooltip" title="fe fe-chevron-right"></i></li>
											<li><i class="fe fe-chevron-up" data-bs-toggle="tooltip" title="fe fe-chevron-up"></i></li>
											<li><i class="fe fe-chevrons-down" data-bs-toggle="tooltip" title="fe fe-chevrons-down"></i></li>
											<li><i class="fe fe-chevrons-left" data-bs-toggle="tooltip" title="fe fe-chevrons-left"></i></li>
											<li><i class="fe fe-chevrons-right" data-bs-toggle="tooltip" title="fe fe-chevrons-right"></i></li>
											<li><i class="fe fe-chevrons-up" data-bs-toggle="tooltip" title="fe fe-chevrons-up"></i></li>
											<li><i class="fe fe-chrome" data-bs-toggle="tooltip" title="fe fe-chrome"></i></li>
											<li><i class="fe fe-circle" data-bs-toggle="tooltip" title="fe fe-circle"></i></li>
											<li><i class="fe fe-clipboard" data-bs-toggle="tooltip" title="fe fe-clipboard"></i></li>
											<li><i class="fe fe-clock" data-bs-toggle="tooltip" title="fe fe-clock"></i></li>
											<li><i class="fe fe-cloud" data-bs-toggle="tooltip" title="fe fe-cloud"></i></li>
											<li><i class="fe fe-cloud-drizzle" data-bs-toggle="tooltip" title="fe fe-cloud-drizzle"></i></li>
											<li><i class="fe fe-cloud-lightning" data-bs-toggle="tooltip" title="fe fe-cloud-lightning"></i></li>
											<li><i class="fe fe-cloud-off" data-bs-toggle="tooltip" title="fe fe-cloud-off"></i></li>
											<li><i class="fe fe-cloud-rain" data-bs-toggle="tooltip" title="fe fe-cloud-rain"></i></li>
											<li><i class="fe fe-cloud-snow" data-bs-toggle="tooltip" title="fe fe-cloud-snow"></i></li>
											<li><i class="fe fe-code" data-bs-toggle="tooltip" title="fe fe-code"></i></li>
											<li><i class="fe fe-codepen" data-bs-toggle="tooltip" title="fe fe-codepen"></i></li>
											<li><i class="fe fe-command" data-bs-toggle="tooltip" title="fe fe-command"></i></li>
											<li><i class="fe fe-compass" data-bs-toggle="tooltip" title="fe fe-compass"></i></li>
											<li><i class="fe fe-copy" data-bs-toggle="tooltip" title="fe fe-copy"></i></li>
											<li><i class="fe fe-corner-down-left" data-bs-toggle="tooltip" title="fe fe-corner-down-left"></i></li>
											<li><i class="fe fe-corner-down-right" data-bs-toggle="tooltip" title="fe fe-corner-down-right"></i></li>
											<li><i class="fe fe-corner-left-down" data-bs-toggle="tooltip" title="fe fe-corner-left-down"></i></li>
											<li><i class="fe fe-corner-left-up" data-bs-toggle="tooltip" title="fe fe-corner-left-up"></i></li>
											<li><i class="fe fe-corner-right-down" data-bs-toggle="tooltip" title="fe fe-corner-right-down"></i></li>
											<li><i class="fe fe-corner-right-up" data-bs-toggle="tooltip" title="fe fe-corner-right-up"></i></li>
											<li><i class="fe fe-corner-up-left" data-bs-toggle="tooltip" title="fe fe-corner-up-left"></i></li>
											<li><i class="fe fe-corner-up-right" data-bs-toggle="tooltip" title="fe fe-corner-up-right"></i></li>
											<li><i class="fe fe-cpu" data-bs-toggle="tooltip" title="fe fe-cpu"></i></li>
											<li><i class="fe fe-credit-card" data-bs-toggle="tooltip" title="fe fe-credit-card"></i></li>
											<li><i class="fe fe-crop" data-bs-toggle="tooltip" title="fe fe-crop"></i></li>
											<li><i class="fe fe-crosshair" data-bs-toggle="tooltip" title="fe fe-crosshair"></i></li>
											<li><i class="fe fe-database" data-bs-toggle="tooltip" title="fe fe-database"></i></li>
											<li><i class="fe fe-delete" data-bs-toggle="tooltip" title="fe fe-delete"></i></li>
											<li><i class="fe fe-disc" data-bs-toggle="tooltip" title="fe fe-disc"></i></li>
											<li><i class="fe fe-dollar-sign" data-bs-toggle="tooltip" title="fe fe-dollar-sign"></i></li>
											<li><i class="fe fe-download" data-bs-toggle="tooltip" title="fe fe-download"></i></li>
											<li><i class="fe fe-download-cloud" data-bs-toggle="tooltip" title="fe fe-download-cloud"></i></li>
											<li><i class="fe fe-droplet" data-bs-toggle="tooltip" title="fe fe-droplet"></i></li>
											<li><i class="fe fe-edit" data-bs-toggle="tooltip" title="fe fe-edit"></i></li>
											<li><i class="fe fe-edit-2" data-bs-toggle="tooltip" title="fe fe-edit-2"></i></li>
											<li><i class="fe fe-edit-3" data-bs-toggle="tooltip" title="fe fe-edit-3"></i></li>
											<li><i class="fe fe-external-link" data-bs-toggle="tooltip" title="fe fe-external-link"></i></li>
											<li><i class="fe fe-eye" data-bs-toggle="tooltip" title="fe fe-eye"></i></li>
											<li><i class="fe fe-eye-off" data-bs-toggle="tooltip" title="fe fe-eye-off"></i></li>
											<li><i class="fe fe-facebook" data-bs-toggle="tooltip" title="fe fe-facebook"></i></li>
											<li><i class="fe fe-fast-forward" data-bs-toggle="tooltip" title="fe fe-fast-forward"></i></li>
											<li><i class="fe fe-feather" data-bs-toggle="tooltip" title="fe fe-feather"></i></li>
											<li><i class="fe fe-file" data-bs-toggle="tooltip" title="fe fe-file"></i></li>
											<li><i class="fe fe-file-minus" data-bs-toggle="tooltip" title="fe fe-file-minus"></i></li>
											<li><i class="fe fe-file-plus" data-bs-toggle="tooltip" title="fe fe-file-plus"></i></li>
											<li><i class="fe fe-file-text" data-bs-toggle="tooltip" title="fe fe-file-text"></i></li>
											<li><i class="fe fe-film" data-bs-toggle="tooltip" title="fe fe-film"></i></li>
											<li><i class="fe fe-filter" data-bs-toggle="tooltip" title="fe fe-filter"></i></li>
											<li><i class="fe fe-flag" data-bs-toggle="tooltip" title="fe fe-flag"></i></li>
											<li><i class="fe fe-folder" data-bs-toggle="tooltip" title="fe fe-folder"></i></li>
											<li><i class="fe fe-folder-minus" data-bs-toggle="tooltip" title="fe fe-folder-minus"></i></li>
											<li><i class="fe fe-folder-plus" data-bs-toggle="tooltip" title="fe fe-folder-plus"></i></li>
											<li><i class="fe fe-git-branch" data-bs-toggle="tooltip" title="fe fe-git-branch"></i></li>
											<li><i class="fe fe-git-commit" data-bs-toggle="tooltip" title="fe fe-git-commit"></i></li>
											<li><i class="fe fe-git-merge" data-bs-toggle="tooltip" title="fe fe-git-merge"></i></li>
											<li><i class="fe fe-git-pull-request" data-bs-toggle="tooltip" title="fe fe-git-pull-request"></i></li>
											<li><i class="fe fe-github" data-bs-toggle="tooltip" title="fe fe-github"></i></li>
											<li><i class="fe fe-gitlab" data-bs-toggle="tooltip" title="fe fe-gitlab"></i></li>
											<li><i class="fe fe-globe" data-bs-toggle="tooltip" title="fe fe-globe"></i></li>
											<li><i class="fe fe-grid" data-bs-toggle="tooltip" title="fe fe-grid"></i></li>
											<li><i class="fe fe-hard-drive" data-bs-toggle="tooltip" title="fe fe-hard-drive"></i></li>
											<li><i class="fe fe-hash" data-bs-toggle="tooltip" title="fe fe-hash"></i></li>
											<li><i class="fe fe-headphones" data-bs-toggle="tooltip" title="fe fe-headphones"></i></li>
											<li><i class="fe fe-heart" data-bs-toggle="tooltip" title="fe fe-heart"></i></li>
											<li><i class="fe fe-help-circle" data-bs-toggle="tooltip" title="fe fe-help-circle"></i></li>
											<li><i class="fe fe-home" data-bs-toggle="tooltip" title="fe fe-home"></i></li>
											<li><i class="fe fe-image" data-bs-toggle="tooltip" title="fe fe-image"></i></li>
											<li><i class="fe fe-inbox" data-bs-toggle="tooltip" title="fe fe-inbox"></i></li>
											<li><i class="fe fe-info" data-bs-toggle="tooltip" title="fe fe-info"></i></li>
											<li><i class="fe fe-instagram" data-bs-toggle="tooltip" title="fe fe-instagram"></i></li>
											<li><i class="fe fe-italic" data-bs-toggle="tooltip" title="fe fe-italic"></i></li>
											<li><i class="fe fe-layers" data-bs-toggle="tooltip" title="fe fe-layers"></i></li>
											<li><i class="fe fe-layout" data-bs-toggle="tooltip" title="fe fe-layout"></i></li>
											<li><i class="fe fe-life-buoy" data-bs-toggle="tooltip" title="fe fe-life-buoy"></i></li>
											<li><i class="fe fe-link" data-bs-toggle="tooltip" title="fe fe-link"></i></li>
											<li><i class="fe fe-link-2" data-bs-toggle="tooltip" title="fe fe-link-2"></i></li>
											<li><i class="fe fe-linkedin" data-bs-toggle="tooltip" title="fe fe-linkedin"></i></li>
											<li><i class="fe fe-list" data-bs-toggle="tooltip" title="fe fe-list"></i></li>
											<li><i class="fe fe-loader" data-bs-toggle="tooltip" title="fe fe-loader"></i></li>
											<li><i class="fe fe-lock" data-bs-toggle="tooltip" title="fe fe-lock"></i></li>
											<li><i class="fe fe-log-in" data-bs-toggle="tooltip" title="fe fe-log-in"></i></li>
											<li><i class="fe fe-log-out" data-bs-toggle="tooltip" title="fe fe-log-out"></i></li>
											<li><i class="fe fe-mail" data-bs-toggle="tooltip" title="fe fe-mail"></i></li>
											<li><i class="fe fe-map" data-bs-toggle="tooltip" title="fe fe-map"></i></li>
											<li><i class="fe fe-map-pin" data-bs-toggle="tooltip" title="fe fe-map-pin"></i></li>
											<li><i class="fe fe-maximize" data-bs-toggle="tooltip" title="fe fe-maximize"></i></li>
											<li><i class="fe fe-maximize-2" data-bs-toggle="tooltip" title="fe fe-maximize-2"></i></li>
											<li><i class="fe fe-menu" data-bs-toggle="tooltip" title="fe fe-menu"></i></li>
											<li><i class="fe fe-message-circle" data-bs-toggle="tooltip" title="fe fe-message-circle"></i></li>
											<li><i class="fe fe-message-square" data-bs-toggle="tooltip" title="fe fe-message-square"></i></li>
											<li><i class="fe fe-mic" data-bs-toggle="tooltip" title="fe fe-mic"></i></li>
											<li><i class="fe fe-mic-off" data-bs-toggle="tooltip" title="fe fe-mic-off"></i></li>
											<li><i class="fe fe-minimize" data-bs-toggle="tooltip" title="fe fe-minimize"></i></li>
											<li><i class="fe fe-minimize-2" data-bs-toggle="tooltip" title="fe fe-minimize-2"></i></li>
											<li><i class="fe fe-minus" data-bs-toggle="tooltip" title="fe fe-minus"></i></li>
											<li><i class="fe fe-minus-circle" data-bs-toggle="tooltip" title="fe fe-minus-circle"></i></li>
											<li><i class="fe fe-minus-square" data-bs-toggle="tooltip" title="fe fe-minus-square"></i></li>
											<li><i class="fe fe-monitor" data-bs-toggle="tooltip" title="fe fe-monitor"></i></li>
											<li><i class="fe fe-moon" data-bs-toggle="tooltip" title="fe fe-moon"></i></li>
											<li><i class="fe fe-more-horizontal" data-bs-toggle="tooltip" title="fe fe-more-horizontal"></i></li>
											<li><i class="fe fe-more-vertical" data-bs-toggle="tooltip" title="fe fe-more-vertical"></i></li>
											<li><i class="fe fe-move" data-bs-toggle="tooltip" title="fe fe-move"></i></li>
											<li><i class="fe fe-music" data-bs-toggle="tooltip" title="fe fe-music"></i></li>
											<li><i class="fe fe-navigation" data-bs-toggle="tooltip" title="fe fe-navigation"></i></li>
											<li><i class="fe fe-navigation-2" data-bs-toggle="tooltip" title="fe fe-navigation-2"></i></li>
											<li><i class="fe fe-octagon" data-bs-toggle="tooltip" title="fe fe-octagon"></i></li>
											<li><i class="fe fe-package" data-bs-toggle="tooltip" title="fe fe-package"></i></li>
											<li><i class="fe fe-paperclip" data-bs-toggle="tooltip" title="fe fe-paperclip"></i></li>
											<li><i class="fe fe-pause" data-bs-toggle="tooltip" title="fe fe-pause"></i></li>
											<li><i class="fe fe-pause-circle" data-bs-toggle="tooltip" title="fe fe-pause-circle"></i></li>
											<li><i class="fe fe-percent" data-bs-toggle="tooltip" title="fe fe-percent"></i></li>
											<li><i class="fe fe-phone" data-bs-toggle="tooltip" title="fe fe-phone"></i></li>
											<li><i class="fe fe-phone-call" data-bs-toggle="tooltip" title="fe fe-phone-call"></i></li>
											<li><i class="fe fe-phone-forwarded" data-bs-toggle="tooltip" title="fe fe-phone-forwarded"></i></li>
											<li><i class="fe fe-phone-incoming" data-bs-toggle="tooltip" title="fe fe-phone-incoming"></i></li>
											<li><i class="fe fe-phone-missed" data-bs-toggle="tooltip" title="fe fe-phone-missed"></i></li>
											<li><i class="fe fe-phone-off" data-bs-toggle="tooltip" title="fe fe-phone-off"></i></li>
											<li><i class="fe fe-phone-outgoing" data-bs-toggle="tooltip" title="fe fe-phone-outgoing"></i></li>
											<li><i class="fe fe-pie-chart" data-bs-toggle="tooltip" title="fe fe-pie-chart"></i></li>
											<li><i class="fe fe-play" data-bs-toggle="tooltip" title="fe fe-play"></i></li>
											<li><i class="fe fe-play-circle" data-bs-toggle="tooltip" title="fe fe-play-circle"></i></li>
											<li><i class="fe fe-plus" data-bs-toggle="tooltip" title="fe fe-plus"></i></li>
											<li><i class="fe fe-plus-circle" data-bs-toggle="tooltip" title="fe fe-plus-circle"></i></li>
											<li><i class="fe fe-plus-square" data-bs-toggle="tooltip" title="fe fe-plus-square"></i></li>
											<li><i class="fe fe-pocket" data-bs-toggle="tooltip" title="fe fe-pocket"></i></li>
											<li><i class="fe fe-power" data-bs-toggle="tooltip" title="fe fe-power"></i></li>
											<li><i class="fe fe-printer" data-bs-toggle="tooltip" title="fe fe-printer"></i></li>
											<li><i class="fe fe-radio" data-bs-toggle="tooltip" title="fe fe-radio"></i></li>
											<li><i class="fe fe-refresh-ccw" data-bs-toggle="tooltip" title="fe fe-refresh-ccw"></i></li>
											<li><i class="fe fe-refresh-cw" data-bs-toggle="tooltip" title="fe fe-refresh-cw"></i></li>
											<li><i class="fe fe-repeat" data-bs-toggle="tooltip" title="fe fe-repeat"></i></li>
											<li><i class="fe fe-rewind" data-bs-toggle="tooltip" title="fe fe-rewind"></i></li>
											<li><i class="fe fe-rotate-ccw" data-bs-toggle="tooltip" title="fe fe-rotate-ccw"></i></li>
											<li><i class="fe fe-rotate-cw" data-bs-toggle="tooltip" title="fe fe-rotate-cw"></i></li>
											<li><i class="fe fe-rss" data-bs-toggle="tooltip" title="fe fe-rss"></i></li>
											<li><i class="fe fe-save" data-bs-toggle="tooltip" title="fe fe-save"></i></li>
											<li><i class="fe fe-scissors" data-bs-toggle="tooltip" title="fe fe-scissors"></i></li>
											<li><i class="fe fe-search" data-bs-toggle="tooltip" title="fe fe-search"></i></li>
											<li><i class="fe fe-send" data-bs-toggle="tooltip" title="fe fe-send"></i></li>
											<li><i class="fe fe-server" data-bs-toggle="tooltip" title="fe fe-server"></i></li>
											<li><i class="fe fe-settings" data-bs-toggle="tooltip" title="fe fe-settings"></i></li>
											<li><i class="fe fe-share" data-bs-toggle="tooltip" title="fe fe-share"></i></li>
											<li><i class="fe fe-share-2" data-bs-toggle="tooltip" title="fe fe-share-2"></i></li>
											<li><i class="fe fe-shield" data-bs-toggle="tooltip" title="fe fe-shield"></i></li>
											<li><i class="fe fe-shield-off" data-bs-toggle="tooltip" title="fe fe-shield-off"></i></li>
											<li><i class="fe fe-shopping-bag" data-bs-toggle="tooltip" title="fe fe-shopping-bag"></i></li>
											<li><i class="fe fe-shopping-cart" data-bs-toggle="tooltip" title="fe fe-shopping-cart"></i></li>
											<li><i class="fe fe-shuffle" data-bs-toggle="tooltip" title="fe fe-shuffle"></i></li>
											<li><i class="fe fe-sidebar" data-bs-toggle="tooltip" title="fe fe-sidebar"></i></li>
											<li><i class="fe fe-skip-back" data-bs-toggle="tooltip" title="fe fe-skip-back"></i></li>
											<li><i class="fe fe-skip-forward" data-bs-toggle="tooltip" title="fe fe-skip-forward"></i></li>
											<li><i class="fe fe-slack" data-bs-toggle="tooltip" title="fe fe-slack"></i></li>
											<li><i class="fe fe-slash" data-bs-toggle="tooltip" title="fe fe-slash"></i></li>
											<li><i class="fe fe-sliders" data-bs-toggle="tooltip" title="fe fe-sliders"></i></li>
											<li><i class="fe fe-smartphone" data-bs-toggle="tooltip" title="fe fe-smartphone"></i></li>
											<li><i class="fe fe-speaker" data-bs-toggle="tooltip" title="fe fe-speaker"></i></li>
											<li><i class="fe fe-square" data-bs-toggle="tooltip" title="fe fe-square"></i></li>
											<li><i class="fe fe-star" data-bs-toggle="tooltip" title="fe fe-star"></i></li>
											<li><i class="fe fe-stop-circle" data-bs-toggle="tooltip" title="fe fe-stop-circle"></i></li>
											<li><i class="fe fe-sun" data-bs-toggle="tooltip" title="fe fe-sun"></i></li>
											<li><i class="fe fe-sunrise" data-bs-toggle="tooltip" title="fe fe-sunrise"></i></li>
											<li><i class="fe fe-sunset" data-bs-toggle="tooltip" title="fe fe-sunset"></i></li>
											<li><i class="fe fe-tablet" data-bs-toggle="tooltip" title="fe fe-tablet"></i></li>
											<li><i class="fe fe-tag" data-bs-toggle="tooltip" title="fe fe-tag"></i></li>
											<li><i class="fe fe-target" data-bs-toggle="tooltip" title="fe fe-target"></i></li>
											<li><i class="fe fe-terminal" data-bs-toggle="tooltip" title="fe fe-terminal"></i></li>
											<li><i class="fe fe-thermometer" data-bs-toggle="tooltip" title="fe fe-thermometer"></i></li>
											<li><i class="fe fe-thumbs-down" data-bs-toggle="tooltip" title="fe fe-thumbs-down"></i></li>
											<li><i class="fe fe-thumbs-up" data-bs-toggle="tooltip" title="fe fe-thumbs-up"></i></li>
											<li><i class="fe fe-toggle-left" data-bs-toggle="tooltip" title="fe fe-toggle-left"></i></li>
											<li><i class="fe fe-toggle-right" data-bs-toggle="tooltip" title="fe fe-toggle-right"></i></li>
											<li><i class="fe fe-trash" data-bs-toggle="tooltip" title="fe fe-trash"></i></li>
											<li><i class="fe fe-trash-2" data-bs-toggle="tooltip" title="fe fe-trash-2"></i></li>
											<li><i class="fe fe-trending-down" data-bs-toggle="tooltip" title="fe fe-trending-down"></i></li>
											<li><i class="fe fe-trending-up" data-bs-toggle="tooltip" title="fe fe-trending-up"></i></li>
											<li><i class="fe fe-triangle" data-bs-toggle="tooltip" title="fe fe-triangle"></i></li>
											<li><i class="fe fe-truck" data-bs-toggle="tooltip" title="fe fe-truck"></i></li>
											<li><i class="fe fe-tv" data-bs-toggle="tooltip" title="fe fe-tv"></i></li>
											<li><i class="fe fe-twitter" data-bs-toggle="tooltip" title="fe fe-twitter"></i></li>
											<li><i class="fe fe-type" data-bs-toggle="tooltip" title="fe fe-type"></i></li>
											<li><i class="fe fe-umbrella" data-bs-toggle="tooltip" title="fe fe-umbrella"></i></li>
											<li><i class="fe fe-underline" data-bs-toggle="tooltip" title="fe fe-underline"></i></li>
											<li><i class="fe fe-unlock" data-bs-toggle="tooltip" title="fe fe-unlock"></i></li>
											<li><i class="fe fe-upload" data-bs-toggle="tooltip" title="fe fe-upload"></i></li>
											<li><i class="fe fe-upload-cloud" data-bs-toggle="tooltip" title="fe fe-upload-cloud"></i></li>
											<li><i class="fe fe-user" data-bs-toggle="tooltip" title="fe fe-user"></i></li>
											<li><i class="fe fe-user-check" data-bs-toggle="tooltip" title="fe fe-user-check"></i></li>
											<li><i class="fe fe-user-minus" data-bs-toggle="tooltip" title="fe fe-user-minus"></i></li>
											<li><i class="fe fe-user-plus" data-bs-toggle="tooltip" title="fe fe-user-plus"></i></li>
											<li><i class="fe fe-user-x" data-bs-toggle="tooltip" title="fe fe-user-x"></i></li>
											<li><i class="fe fe-users" data-bs-toggle="tooltip" title="fe fe-users"></i></li>
											<li><i class="fe fe-video" data-bs-toggle="tooltip" title="fe fe-video"></i></li>
											<li><i class="fe fe-video-off" data-bs-toggle="tooltip" title="fe fe-video-off"></i></li>
											<li><i class="fe fe-voicemail" data-bs-toggle="tooltip" title="fe fe-voicemail"></i></li>
											<li><i class="fe fe-volume" data-bs-toggle="tooltip" title="fe fe-volume"></i></li>
											<li><i class="fe fe-volume-1" data-bs-toggle="tooltip" title="fe fe-volume-1"></i></li>
											<li><i class="fe fe-volume-2" data-bs-toggle="tooltip" title="fe fe-volume-2"></i></li>
											<li><i class="fe fe-volume-x" data-bs-toggle="tooltip" title="fe fe-volume-x"></i></li>
											<li><i class="fe fe-watch" data-bs-toggle="tooltip" title="fe fe-watch"></i></li>
											<li><i class="fe fe-wifi" data-bs-toggle="tooltip" title="fe fe-wifi"></i></li>
											<li><i class="fe fe-wifi-off" data-bs-toggle="tooltip" title="fe fe-wifi-off"></i></li>
											<li><i class="fe fe-wind" data-bs-toggle="tooltip" title="fe fe-wind"></i></li>
											<li><i class="fe fe-x" data-bs-toggle="tooltip" title="fe fe-x"></i></li>
											<li><i class="fe fe-x-circle" data-bs-toggle="tooltip" title="fe fe-x-circle"></i></li>
											<li><i class="fe fe-x-square" data-bs-toggle="tooltip" title="fe fe-x-square"></i></li>
											<li><i class="fe fe-zap" data-bs-toggle="tooltip" title="fe fe-zap"></i></li>
											<li><i class="fe fe-zap-off" data-bs-toggle="tooltip" title="fe fe-zap-off"></i></li>
											<li><i class="fe fe-zoom-in" data-bs-toggle="tooltip" title="fe fe-zoom-in"></i></li>
											<li><i class="fe fe-zoom-out" data-bs-toggle="tooltip" title="fe fe-zoom-out"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
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

        <!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>

        <!-- Feather Icon JS -->
        <script src="assets/js/feather.min.js"></script>

        <!-- Slimscroll JS -->
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Chart JS -->
        <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
        <script src="assets/plugins/apexchart/chart-data.js"></script>
        
        <!-- Custom JS -->
		<script src="assets/js/theme-script.js"></script>	
		<script src="assets/js/script.js"></script>

	
    </body>
</html>