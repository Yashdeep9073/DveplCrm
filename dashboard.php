<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
	header("Location: index.php");
	exit(); // Stop the script execution
}
include('db/config.php');
$name = $_SESSION['user_name'];

$query_view = "SELECT * FROM user_job_request";

$result_view = mysqli_query($conn, $query_view);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="noindex, nofollow">
	<title>Dashboard-Job Control System</title>

	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
		.view-all:hover {
			color: #00ff00 !important;
			/* Use !important to override Bootstrap's default styles */
			font-size: 13px;
		}

		.chart-small {
			max-height: 220px !important;
		}
.card .card-header {
  background: linear-gradient(45deg, #33cc33 0%, transparent 100%);
}

	</style>

</head>

<body>
	<!-- <div id="global-loader">
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
			<div class="content">

				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count" style="background-color:#20c997;">
							<div class="dash-counts">
								<h4>
									<?php
									$dash_earning_query = "SELECT count(1) AS total_jobs FROM user_job_request ";
									$dash_earning_query_run = mysqli_query($conn, $dash_earning_query);
									$row = mysqli_fetch_assoc($dash_earning_query_run);
									$total_jobs = $row['total_jobs'];

									echo '<span>' . $total_jobs . '</span>';
									?>
								</h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="completed-jobs.php">
									<?php } ?>
									<h5>Total Jobs</h5>
									</a>
							</div>
							<div class="dash-imgs">
								<i data-feather="briefcase"></i>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das1">
							<div class="dash-counts">
								<h4>
									<?php
									$dash_staff_query = "SELECT COUNT(*) AS total_staff FROM `tbl_admin`";
									$dash_staff_query_run = mysqli_query($conn, $dash_staff_query);
									$row_staff = mysqli_fetch_assoc($dash_staff_query_run);
									$total_staff = $row_staff['total_staff'];

									echo '<span>' . $total_staff . '</span>';
									?>
								</h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="manage-staff.php">
									<?php } ?>
									<h5>Staff Users</h5>
									</a><span id="new"></span>
							</div>
							<div class="dash-imgs">
								<i data-feather="users"></i>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das2">
							<div class="dash-counts">
								<h4><?php
									$dash_design_query = "SELECT count(1) AS total_design FROM user_job_request WHERE status='Alloted'";
									$dash_design_query_run = mysqli_query($conn, $dash_design_query);
									$row_design = mysqli_fetch_assoc($dash_design_query_run);
									$total_design = $row_design['total_design'];

									echo '<span>' . $total_design . '</span>';
									?></h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="manage-development.php">
									<?php } ?>
									<h5>Design Process</h5>
									</a>
							</div>
							<div class="dash-imgs">
								<img src="assets/img/icons/file-text-icon-01.svg" class="img-fluid" alt="icon">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count" style="background-color:#0080ff;">
							<div class="dash-counts">
								<h4>
									<?php
									$dash_fabrication_query = "SELECT count(1) AS total_fabrication FROM user_job_request WHERE status='Fabrication'";
									$dash_fabrication_query_run = mysqli_query($conn, $dash_fabrication_query);
									$row_fabrication = mysqli_fetch_assoc($dash_fabrication_query_run);
									$total_fabrication = $row_fabrication['total_fabrication'];

									echo '<span>' . $total_fabrication . '</span>';
									?>
								</h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="manage-fabrication.php">
									<?php } ?>
									<h5> Febrication Process</h5>
									</a>
							</div>
							<div class="dash-imgs">
								<i data-feather="box"></i>
							</div>
						</div>
					</div>
				</div>

				<!-- Button trigger modal -->

				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count" style="background-color:#FF9900;">
							<div class="dash-counts">
								<h4><?php
									$dash_testing_query = "SELECT count(1) AS total_testing FROM user_job_request WHERE status='Testing'";
									$dash_testing_query_run = mysqli_query($conn, $dash_testing_query);
									$row_testing = mysqli_fetch_assoc($dash_testing_query_run);
									$total_testing = $row_testing['total_testing'];
									echo '<span>' . $total_testing . '</span>';
									?></h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="manage-testing.php">
									<?php } ?>
									<h5>Testing Process</h5>
									</a>
							</div>
							<div class="dash-imgs">
								<i data-feather="refresh-cw"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count" style="background-color:#336600;">
							<div class="dash-counts">
								<h4>
									<?php
									$dash_feasibility_query = "SELECT count(1) AS total_feasibility FROM user_job_request WHERE status='Request'";
									$dash_feasibility_query_run = mysqli_query($conn, $dash_feasibility_query);
									$row_feasibility = mysqli_fetch_assoc($dash_feasibility_query_run);
									$total_feasibility = $row_feasibility['total_feasibility'];
									echo '<span>' . $total_feasibility . '</span>';
									?>
								</h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="manage-check-feasibility.php">
									<?php } ?>
									<h5>New Job Requests</h5>
									</a>
							</div>
							<div class="dash-imgs">
								<i data-feather="file-plus"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das6">
							<div class="dash-counts">
								<h4><?php
									$dash_job_query = "SELECT count(1) AS total_job FROM `user_job_request` WHERE status='0'";
									$dash_job_query_run = mysqli_query($conn, $dash_job_query);
									$row_job = mysqli_fetch_assoc($dash_job_query_run);
									$total_job = $row_job['total_job'];
									echo '<span>' . $total_job . '</span>';
									?></h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="completed-jobs.php">
									<?php } ?>
									<h5>Inactive Jobs</h5>
									</a>
							</div>
							<div class="dash-imgs">
								<i data-feather="trash"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count" style="background-color:#FF5370;">
							<div class="dash-counts">
								<h4>
									<?php
									$dash_status_query = "SELECT COUNT(1) AS total_status FROM `tbl_admin` WHERE status='0'";
									$dash_status_query_run = mysqli_query($conn, $dash_status_query);
									$row_status = mysqli_fetch_assoc($dash_status_query_run);
									$total_status = $row_status['total_status'];

									echo '<span>' . $total_status . '</span>';
									?>
								</h4>
								<?php if (in_array('All', $permissions)) { ?>
									<a href="manage-staff.php">
									<?php } ?>
									<h5>Inactive Staff User</h5>
									</a>
							</div>
							<div class="dash-imgs">
								<i data-feather="user-x"></i>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-xl-7 col-sm-12 col-12 d-flex">
						<div class="card flex-fill shadow-sm border-0 rounded-3">
							<div class="card-header d-flex justify-content-between align-items-center bg-primary text-white rounded-top-3">
								<h5 class="card-title mb-0">
									<i class="fas fa-chart-bar me-2"></i> Jobs-wise Product Cost
								</h5>
							</div>

							<div class="card-body">
								<?php
								// Fetch Job-wise total amount with job names
								$query = "
                SELECT uj.j_id, uj.job_name,uj.devel_code, SUM(tp.product_total_amount) AS total_amount
                FROM tbl_product tp
                JOIN user_job_request uj ON tp.job_id = uj.job_id 
                WHERE uj.billing_status = 'Paid'
                GROUP BY uj.job_id
            ";
								$result = mysqli_query($conn, $query);

								$labels = [];
								$totals = [];
								$jobNames = [];

								while ($row = mysqli_fetch_assoc($result)) {
									$labels[] = $row['devel_code'];          // X-axis
									$totals[] = (float)$row['total_amount'];
									$jobNames[] = $row['job_name'];    // Tooltip
								}
								?>
								<div class="chart-container" style="height: 400px;">
									<canvas id="jobChart"></canvas>
								</div>

								<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
								<script>
									const ctx = document.getElementById('jobChart').getContext('2d');
									const jobNames = <?php echo json_encode($jobNames); ?>;

									new Chart(ctx, {
										type: 'bar',
										data: {
											labels: <?php echo json_encode($labels); ?>,
											datasets: [{
												label: 'Total Amount (₹)',
												data: <?php echo json_encode($totals); ?>,
												backgroundColor: 'rgba(11, 114, 133, 0.85)',
												borderRadius: 12,
												borderSkipped: false
											}]
										},
										options: {
											responsive: true,
											maintainAspectRatio: false,
											plugins: {
												legend: {
													display: false
												},
												title: {
													display: true,
													text: 'Job-wise Product Cost Summary',
													font: {
														size: 18,
														weight: 'bold'
													},
													padding: {
														top: 10,
														bottom: 15
													}
												},
												tooltip: {
													backgroundColor: '#333',
													titleFont: {
														size: 14,
														weight: 'bold'
													},
													bodyFont: {
														size: 13
													},
													callbacks: {
														label: function(context) {
															const idx = context.dataIndex;
															return jobNames[idx] + ": ₹" + context.formattedValue;
														}
													}
												}
											},
											scales: {
												x: {
													grid: {
														display: false
													},
													ticks: {
														font: {
															size: 14
														}
													},
													title: {
														display: true,
														text: 'Job ID',
														font: {
															size: 14
														}
													}
												},
												y: {
													beginAtZero: true,
													grid: {
														color: '#e5e5e5',
														borderDash: [4, 4]
													},
													ticks: {
														font: {
															size: 14
														},
														callback: function(value) {
															return '₹' + value;
														},
														stepSize: Math.ceil(Math.max(...<?php echo json_encode($totals); ?>) / 5)
													},
													title: {
														display: true,
														text: 'Total Product Amount (₹)',
														font: {
															size: 14
														}
													}
												}
											}
										}
									});
								</script>
							</div>
						</div>
					</div>

					<div class="col-xl-5 col-sm-12 col-12 d-flex">
						<div class="card flex-fill default-cover mb-4">
						
							
								<div class="card-header d-flex justify-content-between align-items-center bg-primary text-white rounded-top-3">
								<h5 class="card-title mb-0">
								<i class="fas fa-clipboard-list me-2"></i>Ongoing Jobs
								</h5>
									<div class="view-all-link">
									<?php if (in_array('All', $permissions)) { ?>
										<a href="manage-jobs.php" class="view-all d-flex align-items-center text-white">
										<?php } ?>
										View All<span class="ps-2 d-flex align-items-center"><i
												data-feather="arrow-right" class="feather-16"></i></span>
										</a>
								</div>
							</div>
							
							
							<div class="card">
								<div class="card-body add-product pb-0">
									<div class="dt-responsive table-responsive">
										<?php
										echo '<table id="basic-btn" class="table table-striped table-bordered nowrap">';
										echo "<thead>";
										echo "<tr>";
										echo "<th>SNO</th>";
										echo "<th>Job_id</th>";
										echo "<th>Job_Name</th>";
										echo "</tr>";
										echo "</thead>";

										$count = 1;
										echo "<tbody>";
										while ($row = mysqli_fetch_row($result_view)) {
											echo "<tr class='record'>";
											echo "<td>$count</td>";
											echo "<td>$row[1]</td>";
											echo "<td>$row[2]</td>";

											$res = base64_encode($row[0]);
											$count++;
										}
										echo "</tbody>";
										echo "</table>";
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<?php
			// Query 1: Status distribution
			$statusQuery = "SELECT status, COUNT(*) as count FROM user_job_request GROUP BY status";
			$statusResult = mysqli_query($conn, $statusQuery);
			$statusData = [];
			$statusLabels = [];
			$statusColors = [];

			while ($row = mysqli_fetch_assoc($statusResult)) {
				$statusLabels[] = $row['status'];
				$statusData[] = $row['count'];

				// Assign colors: Complete = green, others unique
				if (strtolower($row['status']) === 'complete') {
					$statusColors[] = '#28a745'; // green
				} else {
					$statusColors[] = '#' . substr(md5($row['status']), 0, 6);
				}
			}

			// Query 2: Payment distribution (client names + amount)
			$paymentQuery = "SELECT name, amount, COUNT(*) as count FROM user_job_request where status = 'Completed' GROUP BY name, amount ";
			$paymentResult = mysqli_query($conn, $paymentQuery);
			$paymentData = [];
			$paymentLabels = [];
			$paymentAmounts = [];
			$paymentColors = [];

			while ($row = mysqli_fetch_assoc($paymentResult)) {
				$paymentLabels[] = $row['name'];
				$paymentData[] = $row['count'];
				$paymentAmounts[] = $row['amount'];

				// random unique color for payment
				$paymentColors[] = '#' . substr(md5($row['name']), 0, 6);
			}
			?>

			<div class="container my-5">
				<div class="row g-4">

					<!-- Status Chart -->
					<div class="col-md-6">
						<div class="card shadow-sm border-0 rounded-3" style="height: 100%;">

							<div class="card-header d-flex justify-content-between align-items-center bg-primary text-white rounded-top-3">
								<h5 class="card-title mb-0">
									<i class="fa fa-tasks  me-2"></i> Status Distribution
								</h5>
							</div>
							<div class="card-body d-flex justify-content-center align-items-center">
								<?php if (!empty($statusData)) { ?>
									<canvas id="statusPie" class="chart-small"></canvas>
								<?php } else { ?>
									<p class="text-muted">No status data available.</p>
								<?php } ?>
							</div>
						</div>
					</div>


					
					<!-- Payment Chart -->
					<div class="col-md-6">
						<div class="card shadow-sm border-0 rounded-3" style="height: 100%;">

							<div class="card-header d-flex justify-content-between align-items-center bg-primary text-white rounded-top-3">
								<h5 class="card-title mb-0">
									 <i class="fa-solid fa-indian-rupee-sign inr-icon me-2"></i> Payment Distribution
								</h5>
							</div>
							<div class="card-body d-flex justify-content-center align-items-center">
								<?php if (!empty($paymentData)) { ?>
									<canvas id="paymentPie" height="250" class="chart-small"></canvas>
								<?php } else { ?>
									<p class="text-muted">No payment data available.</p>
								<?php } ?>
							</div>
						</div>
					</div>

				</div>
			</div>

			<?php if (!empty($statusData) || !empty($paymentData)) { ?>
				<script>
					<?php if (!empty($statusData)) { ?>
						new Chart(document.getElementById("statusPie"), {
							type: 'pie',
							data: {
								labels: <?php echo json_encode($statusLabels); ?>,
								datasets: [{
									data: <?php echo json_encode($statusData); ?>,
									backgroundColor: <?php echo json_encode($statusColors); ?>,
									borderColor: '#fff',
									borderWidth: 2
								}]
							},
							options: {
								responsive: true,
								plugins: {
									tooltip: {
										enabled: true,
										callbacks: {
											label: function(context) {
												return context.label + ': ' + context.raw;
											}
										}
									},
									legend: {
										position: 'bottom'
									}
								}
							}
						});
					<?php } ?>

					<?php if (!empty($paymentData)) { ?>
						new Chart(document.getElementById("paymentPie"), {
							type: 'pie',
							data: {
								labels: <?php echo json_encode($paymentLabels); ?>,
								datasets: [{
									data: <?php echo json_encode($paymentData); ?>,
									backgroundColor: <?php echo json_encode($paymentColors); ?>,
									borderColor: '#fff',
									borderWidth: 2
								}]
							},
							options: {
								responsive: true,
								plugins: {
									tooltip: {
										enabled: true,
										callbacks: {
											label: function(context) {
												const amount = <?php echo json_encode($paymentAmounts); ?>[context.dataIndex];
												return 'Client: ' + context.label + ' | INR ' + amount + ' | Count: ' + context.raw;
											}
										}
									},
									legend: {
										position: 'bottom'
									}
								}
							}
						});
					<?php } ?>
				</script>
			<?php } ?>


</body>

</html>


</div>
<!-- /Main Wrapper -->

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

<!-- Sweetalert 2 -->
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/theme-script.js"></script>
<script src="assets/js/script.js"></script>


</body>

</html>