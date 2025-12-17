<?php
session_start();
error_reporting(E_ALL);
require 'db/config.php';

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
	header("Location: index.php");
	exit(); // Stop the script execution
}

$userName = $_SESSION['user_name'];

// Check admin ID is set
if (!isset($_SESSION['admin_id'])) {
    die("Unauthorized access");
}

$admin_id = $_SESSION['admin_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploaded_file'])) {
    $file = $_FILES['uploaded_file'];
    $fileName = time() . '_' . basename($file['name']); // Just the filename
    $targetDir = "user_image/";
    $targetFile = $targetDir . $fileName;

    // Create folder if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Move uploaded file to the folder
    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        // Save only the filename (not full path) in the DB
        $stmt = $conn->prepare("UPDATE tbl_admin SET uploaded_file = ? WHERE _id = ?");
        $stmt->bind_param("si", $fileName, $admin_id);
        
        if ($stmt->execute()) {
            echo "Image uploaded and saved successfully.";
        } else {
            echo "DB update failed: " . $stmt->error;
        }
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "No file uploaded.";
}



function get_user_details($userName, $conn)
{
	// Use a prepared statement to prevent SQL injection
	$sql = "SELECT * FROM tbl_admin WHERE Username = ?";
	$stmt = $conn->prepare($sql);

	if ($stmt === false) {
		// Handle preparation error
		die("Prepare failed: " . htmlspecialchars($conn->error));
	}

	// Bind the parameter
	$stmt->bind_param("s", $userName);

	// Execute the statement
	$stmt->execute();

	// Get the result
	$result = $stmt->get_result();

	if ($result && $result->num_rows > 0) {
		$userDetails = $result->fetch_assoc();
		$stmt->close();
		return $userDetails;
	} else {
		$stmt->close();
		return false;
	}
}
$userDetails = get_user_details($userName, $conn);

if (!$userDetails) {
	echo "User details not found!";
	exit();
}

$Username = $userDetails['Username'];
$email = $userDetails['email'];
$phone = $userDetails['mobile'];
$status = $userDetails['status'];
$password = $userDetails['password'];
$image =  $userDetails['uploaded_file'];
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
	<title>Profile-D.V. Electromatic Pvt. Ltd</title>

	
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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

		<?php

		?>

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="page-title">
						<h4>Profile</h4>
						<h6>User Profile</h6>
					</div>
				</div>
				<!-- /product list -->
				<div class="card">
					<div class="card-body">
						<div class="profile-set">
							<div class="profile-head">

							</div>
							<div class="profile-top">
								<div class="profile-content">
									
									<div class="profile-contentimg">
										<img src="user_image/<?php echo $image; ?>"  alt="img" id="blah">
									</div>
									<div class="profile-contentname">
										<h2><?php echo $Username ?></h2>
									</div>
								</div>
								<div class="ms-auto">
									<form action="" method="POST" enctype="multipart/form-data">
										<input type="file" name="uploaded_file" required>
										<button type="submit" class="btn btn-submit me-2">Save</button>
										<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									</form>


								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">Full-name</label>
									<input type="text" class="form-control" readonly value="<?php echo $Username ?>"
										style="background-color: #f0f0f0;">
								</div>
							</div>
							<!-- 								<div class="col-lg-6 col-sm-12"> -->
							<!-- 									<div class="input-blocks"> -->
							<!-- 										<label class="form-label">Last Name</label> -->
							<!-- 										<input type="text" class="form-control" value="Castilo"> -->
							<!-- 									</div> -->
							<!-- 								</div> -->
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label>Email</label>
									<input type="email" class="form-control" readonly value="<?php echo $email ?>"
										style="background-color: #f0f0f0;">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">Phone</label>
									<input type="text" readonly value="<?php echo $phone ?>"
										style="background-color: #f0f0f0;">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">Status</label>
									<input type="text" class="form-control" readonly value="<?php echo $status ?>"
										style="background-color: #f0f0f0;">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">Password</label>
									<div class="pass-group">
										<input type="password" class="pass-input form-control" readonly
											value="<?php echo $password ?>" style="background-color: #f0f0f0;">
										<span class="fas toggle-password fa-eye-slash"></span>
									</div>
								</div>
							</div>
							<!-- 								<div class="col-12"> -->
							<!--     								<a href="javascript:void(0);" class="btn btn-edit me-2" style="background-color: #d0312d; color: #fff;"><i class="fas fa-pencil-alt"></i> Edit</a> -->
							<!-- 									<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a> -->
							<!-- 								</div> -->
						</div>
					</div>
				</div>
				<!-- /product list -->
			</div>
		</div>
	</div>


	<!-- /Main Wrapper -->
	<!-- <div class="customizer-links" id="setdata">
			<ul class="sticky-sidebar">
				<li class="sidebar-icons">
					<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
						data-bs-original-title="Theme">
						<i data-feather="settings" class="feather-five"></i>
					</a>
				</li>
			</ul>
		</div> -->


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

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>