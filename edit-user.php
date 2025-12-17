<?php
session_start();
include('db/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords"
		content="">
	<meta name="author" content="">
	<meta name="robots" content="noindex, nofollow">
	<title>Edit User-D.V. Electromatic Pvt. Ltd.</title>

	
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Include jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

	<!-- Include Select2 CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" />

	<!-- Include Select2 JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.full.min.js"></script>


	<script>
		function cancelButtonClick() {
			// Reload the page
			location.reload();
		}
	</script>

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
		if (isset($_GET['id'])) {
			$userId = base64_decode($_GET['id']);

			$query = "SELECT * FROM tbl_admin WHERE _id = $userId";
			$userResult = mysqli_query($conn, $query);

			$query = "SELECT id, title FROM navigation_menus";
			$navigationMenuResult = $conn->query($query);

			if ($userResult) {
				$user = mysqli_fetch_assoc($userResult);
				$username = $user['Username'];
				$email = $user['email'];
				$phone = $user['mobile'];
				$status = $user['status'];
				$role = $user['admin_role'];
			} else {
				echo "Error fetching user details: " . mysqli_error($conn);
				exit();
			}
			$query = "SELECT title, (CASE WHEN ap.admin_id IS NOT NULL THEN 1 ELSE 0 END) AS has_permission
                     FROM navigation_menus nm LEFT JOIN admin_permissions ap ON nm.id = ap.navigation_menu_id AND ap.admin_id = $userId";

			$navigationMenuResult = $conn->query($query);

			if ($navigationMenuResult) {
				$navigation_menu_values = [];
				while ($row = $navigationMenuResult->fetch_assoc()) {
					$navigation_menu_values[$row['title']] = $row['has_permission'] ?? null;
				}
			} else {
				echo "Error fetching navigation menu values: " . mysqli_error($conn);
			}
			$conn->close();
		} else {
			echo "Invalid request";
		}
		?>

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">

					</div>
					<div class="row">
						<div class="col">
							<ul class="table-top-head">
								<li>
									<div class="page-btn">
										<a href="manage-staff.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Users List</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Edit Staff User</h4>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<ul class="table-top-head">
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
								</li>
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
								</li>
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
								</li>
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
								</li>
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>


				<!-- /add -->
				<form action="update-user.php?id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
					<div class="card">
						<div class="card-body add-product pb-0">
							<div class="accordion-card-one accordion" id="accordionExample">
								<div class="accordion-item">
									<div class="accordion-header" id="headingOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
											<div class="addproduct-icon">
												<h5><i data-feather="info" class="add-info"></i><span>User Information</span></h5>
												<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
											</div>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<?php
											if (isset($_SESSION['status'])) {
											?>
												<div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
													<strong>Success !</strong> <?= $_SESSION['status']; ?>
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
												</div>
											<?php
												unset($_SESSION['status']);
											}
											?>
											<div class="row">
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="username">Username</label>
														<input type="text" id="username" name="username" class="form-control" value="<?= $username ?>" readonly style="background-color: #f0f0f0;">
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="password">Enter Password</label>
														<input type="password" id="password" name="password" placeholder="Enter new password,if you want to change current password" class="form-control" value="<?= $password ?>">
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="email">Email *</label>
														<input type="email" id="email" name="email" class="form-control" value="<?= $email ?>" required>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="password">Phone *</label>
														<input type="text" id="mobile" name="mobile" class="form-control" pattern="[6789]\d{9}" title="Please enter a valid phone number (10 digits, starting with 7, 8, or 9)" value="<?= $phone ?>" required>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="status">Status *</label>
														<select id="status" name="status" class="form-control" required>
															<option value="1" <?php if ($status == 1) echo 'selected="selected"'; ?>>Enable</option>
															<option value="0" <?php if ($status == 0) echo 'selected="selected"'; ?>>Disable</option>
														</select>

													</div>
												</div>

												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="status">Role *</label>
														<select id="status" name="admin_role" class="form-control" required>
															<option value="Admin" <?= ($role === 'Admin') ? 'selected' : '' ?>>Admin</option>
															<option value="Job Evaluation Specialist" <?= ($role === 'Job Evaluation Specialist') ? 'selected' : '' ?>>Job Evaluation Specialist</option>
															<option value="Engineer" <?= ($role === 'Engineer') ? 'selected' : '' ?>>Engineer</option>
															<option value="Fabrication and Coating Technician" <?= ($role === 'Fabrication and Coating Technician') ? 'selected' : '' ?>>Fabrication and Coating Technician</option>
															<option value="Tester" <?= ($role === 'Tester') ? 'selected' : '' ?>>Tester</option>
															<option value="Accountant" <?= ($role === 'Accountant') ? 'selected' : '' ?>>Accountant</option>
															
														</select>


													</div>
												</div>




												<div class="col-lg-4 col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="navigation_menu">User Type *</label>
														<select type="text" id="navigation_menu" name="title[]" class="form-control select2" multiple="multiple" required>
															<?php
															if (isset($navigation_menu_values) && is_array($navigation_menu_values)) {
																foreach ($navigation_menu_values as $value => $hasPermission) {
																	$selected = $hasPermission ? 'selected="selected"' : '';
																	echo "<option value=\"$value\" $selected>$value</option>";
																}
															}
															?>
														</select>
													</div>
												</div>
												<!-- /Editor -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="btn-addproduct mb-4">
										<button type="button" class="btn btn-cancel me-2" onclick="cancelButtonClick()">Cancel</button>
										<button type="submit" class="btn btn-submit" name="submit">Submit</button>
									</div>
								</div>
				</form>
				<!-- /add -->
			</div>
		</div>
	</div>
	<script>
		setTimeout(function() {
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

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->

	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>

	<script>
		$(document).ready(function() {
			$('.select2').select2();
		});
	</script>


</body>

</html>