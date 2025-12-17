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

        	<!-- Ionic CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/ionic/ionicons.css">
        
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
											<li><a href="icon-feather.php">Feather Icons</a></li>
											<li><a href="icon-ionic.php" class="active">Ionic Icons</a></li>
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
										<li><a href="icon-feather.php">Feather Icons</a></li>
										<li><a href="icon-ionic.php" class="active">Ionic Icons</a></li>
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
										<li><a href="icon-feather.php">Feather Icons</a></li>
										<li><a href="icon-ionic.php" class="active">Ionic Icons</a></li>
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
								<h3 class="page-title">Ionic Icon</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Ionic Icon</li>
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
									<div class="card-title">Ionic Icon</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="ion-ionic" data-bs-toggle="tooltip" title="ion-ionic"></i></li>
											<li><i class="ion-arrow-up-a" data-bs-toggle="tooltip" title="ion-arrow-up-a"></i></li>
											<li><i class="ion-arrow-right-a" data-bs-toggle="tooltip" title="ion-arrow-right-a"></i></li>
											<li><i class="ion-arrow-down-a" data-bs-toggle="tooltip" title="ion-arrow-down-a"></i></li>
											<li><i class="ion-arrow-left-a" data-bs-toggle="tooltip" title="ion-arrow-left-a"></i></li>
											<li><i class="ion-arrow-up-b" data-bs-toggle="tooltip" title="ion-arrow-up-b"></i></li>
											<li><i class="ion-arrow-right-b" data-bs-toggle="tooltip" title="ion-arrow-right-b"></i></li>
											<li><i class="ion-arrow-down-b" data-bs-toggle="tooltip" title="ion-arrow-down-b"></i></li>
											<li><i class="ion-arrow-left-b" data-bs-toggle="tooltip" title="ion-arrow-left-b"></i></li>
											<li><i class="ion-arrow-up-c" data-bs-toggle="tooltip" title="ion-arrow-up-c"></i></li>
											<li><i class="ion-arrow-right-c" data-bs-toggle="tooltip" title="ion-arrow-right-c"></i></li>
											<li><i class="ion-arrow-down-c" data-bs-toggle="tooltip" title="ion-arrow-down-c"></i></li>
											<li><i class="ion-arrow-left-c" data-bs-toggle="tooltip" title="ion-arrow-left-c"></i></li>
											<li><i class="ion-arrow-return-right" data-bs-toggle="tooltip" title="ion-arrow-return-right"></i></li>
											<li><i class="ion-arrow-return-left" data-bs-toggle="tooltip" title="ion-arrow-return-left"></i></li>
											<li><i class="ion-arrow-swap" data-bs-toggle="tooltip" title="ion-arrow-swap"></i></li>
											<li><i class="ion-arrow-shrink" data-bs-toggle="tooltip" title="ion-arrow-shrink"></i></li>
											<li><i class="ion-arrow-expand" data-bs-toggle="tooltip" title="ion-arrow-expand"></i></li>
											<li><i class="ion-arrow-move" data-bs-toggle="tooltip" title="ion-arrow-move"></i></li>
											<li><i class="ion-arrow-resize" data-bs-toggle="tooltip" title="ion-arrow-resize"></i></li>
											<li><i class="ion-chevron-up" data-bs-toggle="tooltip" title="ion-chevron-up"></i></li>
											<li><i class="ion-chevron-right" data-bs-toggle="tooltip" title="ion-chevron-right"></i></li>
											<li><i class="ion-chevron-down" data-bs-toggle="tooltip" title="ion-chevron-down"></i></li>
											<li><i class="ion-chevron-left" data-bs-toggle="tooltip" title="ion-chevron-left"></i></li>
											<li><i class="ion-navicon-round" data-bs-toggle="tooltip" title="ion-navicon-round"></i></li>
											<li><i class="ion-navicon" data-bs-toggle="tooltip" title="ion-navicon"></i></li>
											<li><i class="ion-drag" data-bs-toggle="tooltip" title="ion-drag"></i></li>
											<li><i class="ion-log-in" data-bs-toggle="tooltip" title="ion-log-in"></i></li>
											<li><i class="ion-log-out" data-bs-toggle="tooltip" title="ion-log-out"></i></li>
											<li><i class="ion-checkmark-round" data-bs-toggle="tooltip" title="ion-checkmark-round"></i></li>
											<li><i class="ion-checkmark" data-bs-toggle="tooltip" title="ion-checkmark"></i></li>
											<li><i class="ion-checkmark-circled" data-bs-toggle="tooltip" title="ion-checkmark-circled"></i></li>
											<li><i class="ion-close-round" data-bs-toggle="tooltip" title="ion-close-round"></i></li>
											<li><i class="ion-close" data-bs-toggle="tooltip" title="ion-close"></i></li>
											<li><i class="ion-close-circled" data-bs-toggle="tooltip" title="ion-close-circled"></i></li>
											<li><i class="ion-plus-round" data-bs-toggle="tooltip" title="ion-plus-round"></i></li>
											<li><i class="ion-plus" data-bs-toggle="tooltip" title="ion-plus"></i></li>
											<li><i class="ion-plus-circled" data-bs-toggle="tooltip" title="ion-plus-circled"></i></li>
											<li><i class="ion-minus-round" data-bs-toggle="tooltip" title="ion-minus-round"></i></li>
											<li><i class="ion-minus" data-bs-toggle="tooltip" title="ion-minus"></i></li>
											<li><i class="ion-minus-circled" data-bs-toggle="tooltip" title="ion-minus-circled"></i></li>
											<li><i class="ion-information" data-bs-toggle="tooltip" title="ion-information"></i></li>
											<li><i class="ion-information-circled" data-bs-toggle="tooltip" title="ion-information-circled"></i></li>
											<li><i class="ion-help" data-bs-toggle="tooltip" title="ion-help"></i></li>
											<li><i class="ion-help-circled" data-bs-toggle="tooltip" title="ion-help-circled"></i></li>
											<li><i class="ion-help-buoy" data-bs-toggle="tooltip" title="ion-help-buoy"></i></li>
											<li><i class="ion-asterisk" data-bs-toggle="tooltip" title="ion-asterisk"></i></li>
											<li><i class="ion-alert" data-bs-toggle="tooltip" title="ion-alert"></i></li>
											<li><i class="ion-alert-circled" data-bs-toggle="tooltip" title="ion-alert-circled"></i></li>
											<li><i class="ion-refresh" data-bs-toggle="tooltip" title="ion-refresh"></i></li>
											<li><i class="ion-loop" data-bs-toggle="tooltip" title="ion-loop"></i></li>
											<li><i class="ion-shuffle" data-bs-toggle="tooltip" title="ion-shuffle"></i></li>
											<li><i class="ion-home" data-bs-toggle="tooltip" title="ion-home"></i></li>
											<li><i class="ion-search" data-bs-toggle="tooltip" title="ion-search"></i></li>
											<li><i class="ion-flag" data-bs-toggle="tooltip" title="ion-flag"></i></li>
											<li><i class="ion-star" data-bs-toggle="tooltip" title="ion-star"></i></li>
											<li><i class="ion-heart" data-bs-toggle="tooltip" title="ion-heart"></i></li>
											<li><i class="ion-heart-broken" data-bs-toggle="tooltip" title="ion-heart-broken"></i></li>
											<li><i class="ion-gear-a" data-bs-toggle="tooltip" title="ion-gear-a"></i></li>
											<li><i class="ion-gear-b" data-bs-toggle="tooltip" title="ion-gear-b"></i></li>
											<li><i class="ion-toggle-filled" data-bs-toggle="tooltip" title="ion-toggle-filled"></i></li>
											<li><i class="ion-toggle" data-bs-toggle="tooltip" title="ion-toggle"></i></li>
											<li><i class="ion-settings" data-bs-toggle="tooltip" title="ion-settings"></i></li>
											<li><i class="ion-wrench" data-bs-toggle="tooltip" title="ion-wrench"></i></li>
											<li><i class="ion-folder" data-bs-toggle="tooltip" title="ion-folder"></i></li>
											<li><i class="ion-hammer" data-bs-toggle="tooltip" title="ion-hammer"></i></li>
											<li><i class="ion-edit" data-bs-toggle="tooltip" title="ion-edit"></i></li>
											<li><i class="ion-trash-a" data-bs-toggle="tooltip" title="ion-trash-a"></i></li>
											<li><i class="ion-trash-b" data-bs-toggle="tooltip" title="ion-trash-b"></i></li>
											<li><i class="ion-document" data-bs-toggle="tooltip" title="ion-document"></i></li>
											<li><i class="ion-document-text" data-bs-toggle="tooltip" title="ion-document-text"></i></li>
											<li><i class="ion-clipboard" data-bs-toggle="tooltip" title="ion-clipboard"></i></li>
											<li><i class="ion-scissors" data-bs-toggle="tooltip" title="ion-scissors"></i></li>
											<li><i class="ion-funnel" data-bs-toggle="tooltip" title="ion-funnel"></i></li>
											<li><i class="ion-bookmark" data-bs-toggle="tooltip" title="ion-bookmark"></i></li>
											<li><i class="ion-email" data-bs-toggle="tooltip" title="ion-email"></i></li>
											<li><i class="ion-folder" data-bs-toggle="tooltip" title="ion-folder"></i></li>
											<li><i class="ion-filing" data-bs-toggle="tooltip" title="ion-filing"></i></li>
											<li><i class="ion-archive" data-bs-toggle="tooltip" title="ion-archive"></i></li>
											<li><i class="ion-reply" data-bs-toggle="tooltip" title="ion-reply"></i></li>
											<li><i class="ion-reply-all" data-bs-toggle="tooltip" title="ion-reply-all"></i></li>
											<li><i class="ion-forward" data-bs-toggle="tooltip" title="ion-forward"></i></li>
											<li><i class="ion-share" data-bs-toggle="tooltip" title="ion-share"></i></li>
											<li><i class="ion-paper-airplane" data-bs-toggle="tooltip" title="ion-paper-airplane"></i></li>
											<li><i class="ion-link" data-bs-toggle="tooltip" title="ion-link"></i></li>
											<li><i class="ion-paperclip" data-bs-toggle="tooltip" title="ion-paperclip"></i></li>
											<li><i class="ion-compose" data-bs-toggle="tooltip" title="ion-compose"></i></li>
											<li><i class="ion-briefcase" data-bs-toggle="tooltip" title="ion-briefcase"></i></li>
											<li><i class="ion-medkit" data-bs-toggle="tooltip" title="ion-medkit"></i></li>
											<li><i class="ion-at" data-bs-toggle="tooltip" title="ion-at"></i></li>
											<li><i class="ion-pound" data-bs-toggle="tooltip" title="ion-pound"></i></li>
											<li><i class="ion-quote" data-bs-toggle="tooltip" title="ion-quote"></i></li>
											<li><i class="ion-cloud" data-bs-toggle="tooltip" title="ion-cloud"></i></li>
											<li><i class="ion-upload" data-bs-toggle="tooltip" title="ion-upload"></i></li>
											<li><i class="ion-more" data-bs-toggle="tooltip" title="ion-more"></i></li>
											<li><i class="ion-grid" data-bs-toggle="tooltip" title="ion-grid"></i></li>
											<li><i class="ion-calendar" data-bs-toggle="tooltip" title="ion-calendar"></i></li>
											<li><i class="ion-clock" data-bs-toggle="tooltip" title="ion-clock"></i></li>
											<li><i class="ion-compass" data-bs-toggle="tooltip" title="ion-compass"></i></li>
											<li><i class="ion-pinpoint" data-bs-toggle="tooltip" title="ion-pinpoint"></i></li>
											<li><i class="ion-pin" data-bs-toggle="tooltip" title="ion-pin"></i></li>
											<li><i class="ion-navigate" data-bs-toggle="tooltip" title="ion-navigate"></i></li>
											<li><i class="ion-location" data-bs-toggle="tooltip" title="ion-location"></i></li>
											<li><i class="ion-map" data-bs-toggle="tooltip" title="ion-map"></i></li>
											<li><i class="ion-model-s" data-bs-toggle="tooltip" title="ion-model-s"></i></li>
											<li><i class="ion-locked" data-bs-toggle="tooltip" title="ion-locked"></i></li>
											<li><i class="ion-unlocked" data-bs-toggle="tooltip" title="ion-unlocked"></i></li>
											<li><i class="ion-key" data-bs-toggle="tooltip" title="ion-key"></i></li>
											<li><i class="ion-arrow-graph-up-right" data-bs-toggle="tooltip" title="ion-arrow-graph-up-right"></i></li>
											<li><i class="ion-arrow-graph-down-right" data-bs-toggle="tooltip" title="ion-arrow-graph-down-right"></i></li>
											<li><i class="ion-arrow-graph-down-left" data-bs-toggle="tooltip" title="ion-arrow-graph-down-left"></i></li>
											<li><i class="ion-stats-bars" data-bs-toggle="tooltip" title="ion-stats-bars"></i></li>
											<li><i class="ion-connection-bars" data-bs-toggle="tooltip" title="ion-connection-bars"></i></li>
											<li><i class="ion-pie-graph" data-bs-toggle="tooltip" title="ion-pie-graph"></i></li>
											<li><i class="ion-chatbubble" data-bs-toggle="tooltip" title="ion-chatbubble"></i></li>
											<li><i class="ion-chatbubble-working" data-bs-toggle="tooltip" title="ion-chatbubble-working"></i></li>
											<li><i class="ion-chatbubbles" data-bs-toggle="tooltip" title="ion-chatbubbles"></i></li>
											<li><i class="ion-chatbox" data-bs-toggle="tooltip" title="ion-chatbox"></i></li>
											<li><i class="ion-chatbox-working" data-bs-toggle="tooltip" title="ion-chatbox-working"></i></li>
											<li><i class="ion-chatboxes" data-bs-toggle="tooltip" title="ion-chatboxes"></i></li>
											<li><i class="ion-person" data-bs-toggle="tooltip" title="ion-person"></i></li>
											<li><i class="ion-person-add" data-bs-toggle="tooltip" title="ion-person-add"></i></li>
											<li><i class="ion-person-stalker" data-bs-toggle="tooltip" title="ion-person-stalker"></i></li>
											<li><i class="ion-woman" data-bs-toggle="tooltip" title="ion-woman"></i></li>
											<li><i class="ion-man" data-bs-toggle="tooltip" title="ion-man"></i></li>
											<li><i class="ion-female" data-bs-toggle="tooltip" title="ion-female"></i></li>
											<li><i class="ion-male" data-bs-toggle="tooltip" title="ion-male"></i></li>
											<li><i class="ion-fork" data-bs-toggle="tooltip" title="ion-fork"></i></li>
											<li><i class="ion-knife" data-bs-toggle="tooltip" title="ion-knife"></i></li>
											<li><i class="ion-spoon" data-bs-toggle="tooltip" title="ion-spoon"></i></li>
											<li><i class="ion-beer" data-bs-toggle="tooltip" title="ion-beer"></i></li>
											<li><i class="ion-wineglass" data-bs-toggle="tooltip" title="ion-wineglass"></i></li>
											<li><i class="ion-coffee" data-bs-toggle="tooltip" title="ion-coffee"></i></li>
											<li><i class="ion-icecream" data-bs-toggle="tooltip" title="ion-icecream"></i></li>
											<li><i class="ion-pizza" data-bs-toggle="tooltip" title="ion-pizza"></i></li>
											<li><i class="ion-power" data-bs-toggle="tooltip" title="ion-power"></i></li>
											<li><i class="ion-mouse" data-bs-toggle="tooltip" title="ion-mouse"></i></li>
											<li><i class="ion-battery-full" data-bs-toggle="tooltip" title="ion-battery-full"></i></li>
											<li><i class="ion-battery-half" data-bs-toggle="tooltip" title="ion-battery-half"></i></li>
											<li><i class="ion-battery-low" data-bs-toggle="tooltip" title="ion-battery-low"></i></li>
											<li><i class="ion-battery-empty" data-bs-toggle="tooltip" title="ion-battery-empty"></i></li>
											<li><i class="ion-battery-charging" data-bs-toggle="tooltip" title="ion-battery-charging"></i></li>
											<li><i class="ion-bluetooth" data-bs-toggle="tooltip" title="ion-bluetooth"></i></li>
											<li><i class="ion-calculator" data-bs-toggle="tooltip" title="ion-calculator"></i></li>
											<li><i class="ion-camera" data-bs-toggle="tooltip" title="ion-camera"></i></li>
											<li><i class="ion-eye" data-bs-toggle="tooltip" title="ion-eye"></i></li>
											<li><i class="ion-eye-disabled" data-bs-toggle="tooltip" title="ion-eye-disabled"></i></li>
											<li><i class="ion-flash" data-bs-toggle="tooltip" title="ion-flash"></i></li>
											<li><i class="ion-flash-off" data-bs-toggle="tooltip" title="ion-flash-off"></i></li>
											<li><i class="ion-qr-scanner" data-bs-toggle="tooltip" title="ion-qr-scanner"></i></li>
											<li><i class="ion-image" data-bs-toggle="tooltip" title="ion-image"></i></li>
											<li><i class="ion-images" data-bs-toggle="tooltip" title="ion-images"></i></li>
											<li><i class="ion-contrast" data-bs-toggle="tooltip" title="ion-contrast"></i></li>
											<li><i class="ion-wand" data-bs-toggle="tooltip" title="ion-wand"></i></li>
											<li><i class="ion-aperture" data-bs-toggle="tooltip" title="ion-aperture"></i></li>
											<li><i class="ion-monitor" data-bs-toggle="tooltip" title="ion-monitor"></i></li>
											<li><i class="ion-laptop" data-bs-toggle="tooltip" title="ion-laptop"></i></li>
											<li><i class="ion-ipad" data-bs-toggle="tooltip" title="ion-ipad"></i></li>
											<li><i class="ion-iphone" data-bs-toggle="tooltip" title="ion-iphone"></i></li>
											<li><i class="ion-ipod" data-bs-toggle="tooltip" title="ion-ipod"></i></li>
											<li><i class="ion-printer" data-bs-toggle="tooltip" title="ion-printer"></i></li>
											<li><i class="ion-usb" data-bs-toggle="tooltip" title="ion-usb"></i></li>
											<li><i class="ion-outlet" data-bs-toggle="tooltip" title="ion-outlet"></i></li>
											<li><i class="ion-bug" data-bs-toggle="tooltip" title="ion-bug"></i></li>
											<li><i class="ion-code" data-bs-toggle="tooltip" title="ion-code"></i></li>
											<li><i class="ion-code-working" data-bs-toggle="tooltip" title="ion-code-working"></i></li>
											<li><i class="ion-code-download" data-bs-toggle="tooltip" title="ion-code-download"></i></li>
											<li><i class="ion-fork-repo" data-bs-toggle="tooltip" title="ion-fork-repo"></i></li>
											<li><i class="ion-network" data-bs-toggle="tooltip" title="ion-network"></i></li>
											<li><i class="ion-pull-request" data-bs-toggle="tooltip" title="ion-pull-request"></i></li>
											<li><i class="ion-merge" data-bs-toggle="tooltip" title="ion-merge"></i></li>
											<li><i class="ion-game-controller-a" data-bs-toggle="tooltip" title="ion-game-controller-a"></i></li>
											<li><i class="ion-game-controller-b" data-bs-toggle="tooltip" title="ion-game-controller-b"></i></li>
											<li><i class="ion-xbox" data-bs-toggle="tooltip" title="ion-xbox"></i></li>
											<li><i class="ion-playstation" data-bs-toggle="tooltip" title="ion-playstation"></i></li>
											<li><i class="ion-steam" data-bs-toggle="tooltip" title="ion-steam"></i></li>
											<li><i class="ion-closed-captioning" data-bs-toggle="tooltip" title="ion-closed-captioning"></i></li>
											<li><i class="ion-videocamera" data-bs-toggle="tooltip" title="ion-videocamera"></i></li>
											<li><i class="ion-film-marker" data-bs-toggle="tooltip" title="ion-film-marker"></i></li>
											<li><i class="ion-disc" data-bs-toggle="tooltip" title="ion-disc"></i></li>
											<li><i class="ion-headphone" data-bs-toggle="tooltip" title="ion-headphone"></i></li>
											<li><i class="ion-music-note" data-bs-toggle="tooltip" title="ion-music-note"></i></li>
											<li><i class="ion-radio-waves" data-bs-toggle="tooltip" title="ion-radio-waves"></i></li>
											<li><i class="ion-speakerphone" data-bs-toggle="tooltip" title="ion-speakerphone"></i></li>
											<li><i class="ion-mic-a" data-bs-toggle="tooltip" title="ion-mic-a"></i></li>
											<li><i class="ion-mic-b" data-bs-toggle="tooltip" title="ion-mic-b"></i></li>
											<li><i class="ion-mic-c" data-bs-toggle="tooltip" title="ion-mic-c"></i></li>
											<li><i class="ion-volume-high" data-bs-toggle="tooltip" title="ion-volume-high"></i></li>
											<li><i class="ion-volume-medium" data-bs-toggle="tooltip" title="ion-volume-medium"></i></li>
											<li><i class="ion-volume-low" data-bs-toggle="tooltip" title="ion-volume-low"></i></li>
											<li><i class="ion-volume-mute" data-bs-toggle="tooltip" title="ion-volume-mute"></i></li>
											<li><i class="ion-levels" data-bs-toggle="tooltip" title="ion-levels"></i></li>
											<li><i class="ion-play" data-bs-toggle="tooltip" title="ion-play"></i></li>
											<li><i class="ion-pause" data-bs-toggle="tooltip" title="ion-pause"></i></li>
											<li><i class="ion-stop" data-bs-toggle="tooltip" title="ion-stop"></i></li>
											<li><i class="ion-record" data-bs-toggle="tooltip" title="ion-record"></i></li>
											<li><i class="ion-skip-forward" data-bs-toggle="tooltip" title="ion-skip-forward"></i></li>
											<li><i class="ion-skip-backward" data-bs-toggle="tooltip" title="ion-skip-backward"></i></li>
											<li><i class="ion-eject" data-bs-toggle="tooltip" title="ion-eject"></i></li>
											<li><i class="ion-bag" data-bs-toggle="tooltip" title="ion-bag"></i></li>
											<li><i class="ion-card" data-bs-toggle="tooltip" title="ion-card"></i></li>
											<li><i class="ion-cash" data-bs-toggle="tooltip" title="ion-cash"></i></li>
											<li><i class="ion-pricetag" data-bs-toggle="tooltip" title="ion-pricetag"></i></li>
											<li><i class="ion-pricetags" data-bs-toggle="tooltip" title="ion-pricetags"></i></li>
											<li><i class="ion-thumbsup" data-bs-toggle="tooltip" title="ion-thumbsup"></i></li>
											<li><i class="ion-thumbsdown" data-bs-toggle="tooltip" title="ion-thumbsdown"></i></li>
											<li><i class="ion-happy" data-bs-toggle="tooltip" title="ion-happy"></i></li>
											<li><i class="ion-sad" data-bs-toggle="tooltip" title="ion-sad"></i></li>
											<li><i class="ion-trophy" data-bs-toggle="tooltip" title="ion-trophy"></i></li>
											<li><i class="ion-podium" data-bs-toggle="tooltip" title="ion-podium"></i></li>
											<li><i class="ion-ribbon-a" data-bs-toggle="tooltip" title="ion-ribbon-a"></i></li>
											<li><i class="ion-ribbon-b" data-bs-toggle="tooltip" title="ion-ribbon-b"></i></li>
											<li><i class="ion-university" data-bs-toggle="tooltip" title="ion-university"></i></li>
											<li><i class="ion-magnet" data-bs-toggle="tooltip" title="ion-magnet"></i></li>
											<li><i class="ion-beaker" data-bs-toggle="tooltip" title="ion-beaker"></i></li>
											<li><i class="ion-flask" data-bs-toggle="tooltip" title="ion-flask"></i></li>
											<li><i class="ion-egg" data-bs-toggle="tooltip" title="ion-egg"></i></li>
											<li><i class="ion-earth" data-bs-toggle="tooltip" title="ion-earth"></i></li>
											<li><i class="ion-planet" data-bs-toggle="tooltip" title="ion-planet"></i></li>
											<li><i class="ion-lightbulb" data-bs-toggle="tooltip" title="ion-lightbulb"></i></li>
											<li><i class="ion-cube" data-bs-toggle="tooltip" title="ion-cube"></i></li>
											<li><i class="ion-leaf" data-bs-toggle="tooltip" title="ion-leaf"></i></li>
											<li><i class="ion-waterdrop" data-bs-toggle="tooltip" title="ion-waterdrop"></i></li>
											<li><i class="ion-flame" data-bs-toggle="tooltip" title="ion-flame"></i></li>
											<li><i class="ion-fireball" data-bs-toggle="tooltip" title="ion-fireball"></i></li>
											<li><i class="ion-bonfire" data-bs-toggle="tooltip" title="ion-bonfire"></i></li>
											<li><i class="ion-umbrella" data-bs-toggle="tooltip" title="ion-umbrella"></i></li>
											<li><i class="ion-nuclear" data-bs-toggle="tooltip" title="ion-nuclear"></i></li>
											<li><i class="ion-no-smoking" data-bs-toggle="tooltip" title="ion-no-smoking"></i></li>
											<li><i class="ion-thermometer" data-bs-toggle="tooltip" title="ion-thermometer"></i></li>
											<li><i class="ion-speedometer" data-bs-toggle="tooltip" title="ion-speedometer"></i></li>
											<li><i class="ion-plane" data-bs-toggle="tooltip" title="ion-plane"></i></li>
											<li><i class="ion-jet" data-bs-toggle="tooltip" title="ion-jet"></i></li>
											<li><i class="ion-load-a" data-bs-toggle="tooltip" title="ion-load-a"></i></li>
											<li><i class="ion-load-b" data-bs-toggle="tooltip" title="ion-load-b"></i></li>
											<li><i class="ion-load-c" data-bs-toggle="tooltip" title="ion-load-c"></i></li>
											<li><i class="ion-load-d" data-bs-toggle="tooltip" title="ion-load-d"></i></li>
											<li><i class="ion-ios7-ionic-outline" data-bs-toggle="tooltip" title="ion-ios7-ionic-outline"></i></li>
											<li><i class="ion-ios7-arrow-back" data-bs-toggle="tooltip" title="ion-ios7-arrow-back"></i></li>
											<li><i class="ion-ios7-arrow-forward" data-bs-toggle="tooltip" title="ion-ios7-arrow-forward"></i></li>
											<li><i class="ion-ios7-arrow-up" data-bs-toggle="tooltip" title="ion-ios7-arrow-up"></i></li>
											<li><i class="ion-ios7-arrow-right" data-bs-toggle="tooltip" title="ion-ios7-arrow-right"></i></li>
											<li><i class="ion-ios7-arrow-down" data-bs-toggle="tooltip" title="ion-ios7-arrow-down"></i></li>
											<li><i class="ion-ios7-arrow-left" data-bs-toggle="tooltip" title="ion-ios7-arrow-left"></i></li>
											<li><i class="ion-ios7-arrow-thin-up" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-up"></i></li>
											<li><i class="ion-ios7-arrow-thin-right" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-right"></i></li>
											<li><i class="ion-ios7-arrow-thin-down" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-down"></i></li>
											<li><i class="ion-ios7-arrow-thin-left" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-left"></i></li>
											<li><i class="ion-ios7-circle-filled" data-bs-toggle="tooltip" title="ion-ios7-circle-filled"></i></li>
											<li><i class="ion-ios7-circle-outline" data-bs-toggle="tooltip" title="ion-ios7-circle-outline"></i></li>
											<li><i class="ion-ios7-checkmark-empty" data-bs-toggle="tooltip" title="ion-ios7-checkmark-empty"></i></li>
											<li><i class="ion-ios7-checkmark-outline" data-bs-toggle="tooltip" title="ion-ios7-checkmark-outline"></i></li>
											<li><i class="ion-ios7-checkmark" data-bs-toggle="tooltip" title="ion-ios7-checkmark"></i></li>
											<li><i class="ion-ios7-plus-empty" data-bs-toggle="tooltip" title="ion-ios7-plus-empty"></i></li>
											<li><i class="ion-ios7-plus-outline" data-bs-toggle="tooltip" title="ion-ios7-plus-outline"></i></li>
											<li><i class="ion-ios7-plus" data-bs-toggle="tooltip" title="ion-ios7-plus"></i></li>
											<li><i class="ion-ios7-close-empty" data-bs-toggle="tooltip" title="ion-ios7-close-empty"></i></li>
											<li><i class="ion-ios7-close-outline" data-bs-toggle="tooltip" title="ion-ios7-close-outline"></i></li>
											<li><i class="ion-ios7-close" data-bs-toggle="tooltip" title="ion-ios7-close"></i></li>
											<li><i class="ion-ios7-minus-empty" data-bs-toggle="tooltip" title="ion-ios7-minus-empty"></i></li>
											<li><i class="ion-ios7-minus-outline" data-bs-toggle="tooltip" title="ion-ios7-minus-outline"></i></li>
											<li><i class="ion-ios7-minus" data-bs-toggle="tooltip" title="ion-ios7-minus"></i></li>
											<li><i class="ion-ios7-information-empty" data-bs-toggle="tooltip" title="ion-ios7-information-empty"></i></li>
											<li><i class="ion-ios7-information-outline" data-bs-toggle="tooltip" title="ion-ios7-information-outline"></i></li>
											<li><i class="ion-ios7-information" data-bs-toggle="tooltip" title="ion-ios7-information"></i></li>
											<li><i class="ion-ios7-help-empty" data-bs-toggle="tooltip" title="ion-ios7-help-empty"></i></li>
											<li><i class="ion-ios7-help-outline" data-bs-toggle="tooltip" title="ion-ios7-help-outline"></i></li>
											<li><i class="ion-ios7-help" data-bs-toggle="tooltip" title="ion-ios7-help"></i></li>
											<li><i class="ion-ios7-search" data-bs-toggle="tooltip" title="ion-ios7-search"></i></li>
											<li><i class="ion-ios7-search-strong" data-bs-toggle="tooltip" title="ion-ios7-search-strong"></i></li>
											<li><i class="ion-ios7-star" data-bs-toggle="tooltip" title="ion-ios7-star"></i></li>
											<li><i class="ion-ios7-star-half" data-bs-toggle="tooltip" title="ion-ios7-star-half"></i></li>
											<li><i class="ion-ios7-star-outline" data-bs-toggle="tooltip" title="ion-ios7-star-outline"></i></li>
											<li><i class="ion-ios7-heart" data-bs-toggle="tooltip" title="ion-ios7-heart"></i></li>
											<li><i class="ion-ios7-heart-outline" data-bs-toggle="tooltip" title="ion-ios7-heart-outline"></i></li>
											<li><i class="ion-ios7-more" data-bs-toggle="tooltip" title="ion-ios7-more"></i></li>
											<li><i class="ion-ios7-more-outline" data-bs-toggle="tooltip" title="ion-ios7-more-outline"></i></li>
											<li><i class="ion-ios7-home" data-bs-toggle="tooltip" title="ion-ios7-home"></i></li>
											<li><i class="ion-ios7-home-outline" data-bs-toggle="tooltip" title="ion-ios7-home-outline"></i></li>
											<li><i class="ion-ios7-cloud" data-bs-toggle="tooltip" title="ion-ios7-cloud"></i></li>
											<li><i class="ion-ios7-cloud-outline" data-bs-toggle="tooltip" title="ion-ios7-cloud-outline"></i></li>
											<li><i class="ion-ios7-cloud-upload" data-bs-toggle="tooltip" title="ion-ios7-cloud-upload"></i></li>
											<li><i class="ion-ios7-cloud-upload-outline" data-bs-toggle="tooltip" title="ion-ios7-cloud-upload-outline"></i></li>
											<li><i class="ion-ios7-cloud-download" data-bs-toggle="tooltip" title="ion-ios7-cloud-download"></i></li>
											<li><i class="ion-ios7-cloud-download-outline" data-bs-toggle="tooltip" title="ion-ios7-cloud-download-outline"></i></li>
											<li><i class="ion-ios7-upload" data-bs-toggle="tooltip" title="ion-ios7-upload"></i></li>
											<li><i class="ion-ios7-upload-outline" data-bs-toggle="tooltip" title="ion-ios7-upload-outline"></i></li>
											<li><i class="ion-ios7-download" data-bs-toggle="tooltip" title="ion-ios7-download"></i></li>
											<li><i class="ion-ios7-refresh" data-bs-toggle="tooltip" title="ion-ios7-refresh"></i></li>
											<li><i class="ion-ios7-refresh-outline" data-bs-toggle="tooltip" title="ion-ios7-refresh-outline"></i></li>
											<li><i class="ion-ios7-refresh-empty" data-bs-toggle="tooltip" title="ion-ios7-refresh-empty"></i></li>
											<li><i class="ion-ios7-reload" data-bs-toggle="tooltip" title="ion-ios7-reload"></i></li>
											<li><i class="ion-ios7-loop-strong" data-bs-toggle="tooltip" title="ion-ios7-loop-strong"></i></li>
											<li><i class="ion-ios7-loop" data-bs-toggle="tooltip" title="ion-ios7-loop"></i></li>
											<li><i class="ion-ios7-bookmarks" data-bs-toggle="tooltip" title="ion-ios7-bookmarks"></i></li>
											<li><i class="ion-ios7-bookmarks-outline" data-bs-toggle="tooltip" title="ion-ios7-bookmarks-outline"></i></li>

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
        
        <!-- Custom JS --><script src="assets/js/theme-script.js"></script>	
		<script src="assets/js/script.js"></script>

	
    </body>
</html>