<?php
session_start();
include('db/config.php');

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
	header("Location: index.php");
	exit(); // Stop the script execution
}

$query_admin = "SELECT * FROM tbl_admin";
$result_admin = mysqli_query($conn, $query_admin);
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
	<title>Users</title>

	<link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
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
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Add/ Delete Your User Staff</h4>
						</div>
					</div>

					<div class="page-btn">
						<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i
								data-feather="plus-circle" class="me-2"></i>Add Staff User</a>
					</div>
				</div>


				<!-- /product list -->
				<?php
				if (isset($_SESSION['status'])) {
					?>
					<div class="alert alert-success alert-dismissible fade show" role="alert" id="message"
						style="height:50px; font-size:15px; font-weight:50px;">
						<strong>Success !</strong>
						<?= $_SESSION['status']; ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php
					unset($_SESSION['status']);
				}
				?>
				<div class="card table-list-card">
					<div class="card-body">
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
										<th>User id</th>
										<th>Username</th>
										<th>Email</th>
										<th>Role</th>
										<th>Phone</th>
										<th>Status</th>
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									foreach ($result_admin as $data_admin) {
										?>
										<tr>
											<!-- <td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td> -->
											<td>
												<?php echo $i; ?>
											</td>
											<td>
												<?php echo $data_admin['Username']; ?>
											</td>
											<td>
												<?php echo $data_admin['email']; ?>
											</td>
											<td>
												<?php echo $data_admin['admin_role']; ?>
											</td>
											<td>
												<?php echo $data_admin['mobile']; ?>
											</td>
											<td>
												<?php
												if ($data_admin['status'] == 1) {
													echo "Enable";
												} else {
													echo "Disable";
												}
												?>
											</td>

											<td class="action-table-data">
												<div class="edit-delete-action">
													<a href="javascript:void(0);"
														data-user-id="<?php echo base64_encode(string: $data_admin['_id']); ?>"
														class="editButton btn btn-success" data-bs-toggle="modal"
														data-bs-target="#edit-units">
														UPDATE
													</a>

													<a href="delete-admin.php?id=<?php echo base64_encode($data_admin['_id']); ?>"
														onclick="return confirm('Are you sure want to delete?')"
														class="btn btn-danger">DELETE</a>
												</div>
											</td>
											<?php
											$i++;
									}
									?>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /product list -->
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add User -->
	<div class="modal fade" id="add-units">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add User Staff</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form method="post" action="register-process.php" id="myForm">
								<div class="row">
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Username *</label>
											<input type="text" name="Username" class="form-control"
												placeholder="Enter username" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Phone *</label>
											<input type="text" name="mobile" class="form-control"
												placeholder="Enter phone no" pattern="[6789]\d{9}"
												title="Please enter a valid phone number (10 digits, starting with 7, 8, or 9)"
												required>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Email *</label>
											<input type="email" name="email" class="form-control"
												placeholder="Enter email" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Status *</label>
											<select class="select" name="status" required>
												<option disable>Choose</option>
												<option value="1">Enable</option>
												<option value="0">Disable</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Role *</label>
											<select class="select" name="role" required>
												<option disable>Choose</option>
												<option value="Admin">Admin</option>
												<option value="Job Evaluation Specialist">Job Evaluation Specialist</option>
												<option value="Engineer">Engineer</option>
												<option value="Fabrication and Coating Technician">Fabrication and Coating Technician</option>
												<option value="Tester">Tester</option>
												<option value="Accountant">Accountant</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Password *</label>
											<div class="pass-group">
												<input type="password" name="password" id="password" class="pass-input"
													placeholder="Enter password" required>
												<span class="fas toggle-password fa-eye-slash"></span>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Confirm Password *</label>
											<div class="pass-group">
												<input type="password" name="confirm_password" id="confirm_password"
													class="pass-input" placeholder="Confirm password" required>
												<span class="fas toggle-password fa-eye-slash"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" name="submit" class="btn btn-submit"
										name="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add User -->

	<!-- Edit User -->
	<div class="modal fade" id="edit-units">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Edit User</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="register-process.php" method="post">

								<input type="hidden" name="userId" class="userId">
								<div class="row">

									<div class="col-lg-6">
										<div class="input-blocks">
											<label>User Name</label>
											<input type="text" name="editUserName" id="editUserName" placeholder="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Phone</label>
											<input type="text" name="editPhoneNumber" id="editPhoneNumber"
												placeholder="">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Email</label>
											<input type="email" name="editEmail" id="editEmail" placeholder="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Status</label>
											<select class="select" name="editStatus" id="editStatus">
												<option disabled>Choose</option>
												<option value="1">Enable</option>
												<option value="0">Disable</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Role</label>
											<select class="select" name="editRoles" id="editRoles">
												<option disable>Choose</option>
												<option value="Admin">Admin</option>
												<option value="Job Evaluation Specialist">Job Evaluation Specialist</option>
												<option value="Engineer">Engineer</option>
												<option value="Fabrication and Coating Technician">Fabrication and Coating Technician</option>
												<option value="Tester">Tester</option>
												<option value="Accountant">Accountant</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Password</label>
											<div class="pass-group">
												<input type="password" class="pass-input" name="editPassword"
													id="editPassword" placeholder="****">
												<span class="fas toggle-password fa-eye-slash"></span>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-blocks">
											<label>Confirm Passworrd</label>
											<div class="pass-group">
												<input type="password" name="editConfirmPassword"
													id="editConfirmPassword" class="pass-input" placeholder="****">
												<span class="fas toggle-password fa-eye-slash"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" name="submitButtonForEditUser"
										class="btn btn-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit User -->
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

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>

	<script>
		document.getElementById('myForm').addEventListener('submit', function (event) {
			var passwordField = document.getElementById('password');
			var confirmPasswordField = document.getElementById('confirm_password');

			// Check if the passwords match
			if (passwordField.value !== confirmPasswordField.value) {
				// If passwords don't match, prevent form submission and display an alert
				event.preventDefault();
				alert('Passwords do not match. Please enter the same password in both fields.');
			}
		});
	</script>


	<script>
		$(document).ready(function () {

			// Handle the click event on the delete button
			$('.deleteButton').on('click', function (event) {
				// Get the vendor ID from the data attribute
				let statusId = $(this).data('status-id');
				// Show SweetAlert confirmation popup
				console.log(statusId);

				Swal.fire({
					title: "Are you sure?",
					text: "You won't be able to revert this!",
					showCancelButton: true,
					confirmButtonColor: "#ff9f43",
					cancelButtonColor: "#d33",
					confirmButtonText: "Yes, delete it!"
				}).then((result) => {
					if (result.isConfirmed) {
						// Send AJAX request to delete the record from the database
						$.ajax({
							url: 'add-status.php', // The PHP file that will handle the deletion
							type: 'GET',
							data: { statusId: statusId },
							success: function (response) {
								console.log(response);

								// Show success message and reload the page
								Swal.fire(
									'Deleted!',
									'The User has been deleted.',
								).then(() => {
									// Reload the page or remove the deleted row from the UI
									location.reload();
								});
							},
							error: function (xhr, status, error) {
								// Show error message if the AJAX request fails
								Swal.fire(
									'Error!',
									'There was an error deleting the vendor.',
									'error'
								);
							}
						});
					}
				});
			});

			$('.editButton').on('click', function () {
				let userId = $(this).data('user-id');
				$('.userId').val(userId);
				console.log(userId);



				$.ajax({
					url: 'fetch-users.php', // The PHP file that will handle the deletion
					type: 'POST',
					data: { user_Id: userId },
					success: function (response) {
						response.username.forEach((name) => {
							$('#editUserName').val(name);
						});
						response.phone.forEach((phoneNumber) => {
							$('#editPhoneNumber').val(phoneNumber);
						});
						response.email.forEach((email) => {
							$('#editEmail').val(email);
						});

						response.status.forEach((status) => {
							$('#editStatus').val(status);
						});

						response.role.forEach((roleName) => {
							console.log(roleName);
							// // Create a new option element
							// let option = $('<option></option>')
							// 	.attr('value', roleName)
							// 	.text(roleName);

							// // Check if the role is in the list of roles fetched from the database
							// let isSelected = response.role.includes(roleName);
							// if (isSelected) {
							// 	option.attr('selected', 'selected'); // Mark as selected if applicable
							// }

							// // Append the option to the select element
							// $('#editRoles').append(option);
							$('#editRoles').val(roleName);
						});



					},
					error: function (xhr, status, error) {
						// Show error message if the AJAX request fails
						Swal.fire(
							'Error!',
							'There was an error deleting the vendor.',
							'error'
						);
					}
				});

			});
		});

	</script>
</body>

</html>