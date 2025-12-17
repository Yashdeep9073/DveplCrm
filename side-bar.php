<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
	header("Location: index.php");
	exit(); // Stop the script execution
} else {
	$adminID = $_SESSION['admin_id'];
	$User_name = $_SESSION['user_name'];
	$adminPermissionQuery = "SELECT nm.title FROM admin_permissions ap
        INNER JOIN navigation_menus nm ON ap.navigation_menu_id = nm.id WHERE ap.admin_id='" . $adminID . "'";

	$adminPermissionResult = mysqli_query($conn, $adminPermissionQuery);

	if (!$adminPermissionResult) {
		die("Query failed: " . mysqli_error($conn));
	}

	$permissions = [];
	while ($item = mysqli_fetch_row($adminPermissionResult)) {
		array_push($permissions, $item[0]);
	}
}






?>
<style>
	.submenu-selected {
		background-color: #FFFFFF;
		border-left: 4px solid #D0312D;
	}
</style>
<div class="sidebar-inner slimscroll">
	<div id="sidebar-menu" class="sidebar-menu">
		<ul>
			<?php if (in_array('All', $permissions)) { ?>
				<li class="submenu">
					<a href="dashboard.php" id="dashboardLink" onclick="handleDashboardClick(event)"
						class="submenu-selected"><i data-feather="grid"></i><span>Dashboard</span></a>
				</li>
			<?php } ?>


			<?php
			$allowed_roles = [
				'Job Evaluation Specialist',
				'Engineer',
				'Fabrication and Coating Technician',
				'Tester'
			];

			if (isset($_SESSION['admin_role']) && in_array($_SESSION['admin_role'], $allowed_roles)) {
			?>
				<li>
					<a href="user-work.php" class="submenu">
						<i data-feather="grid"></i><span>Assign Work</span>
					</a>
				</li>
			<?php
			}
			?>



			<?php if ((in_array('Add Job', $permissions)) || (in_array('Completed Jobs', $permissions)) || (in_array('All', $permissions))) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="file-plus"></i><span>Add New Job</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php if ((in_array('Add Job', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='add-job.php'>Add Job</a></li>";
						}

						?>
					</ul>
				</li>
			<?php } ?>
			<?php if ((in_array('Manage Job', $permissions)) || (in_array('Completed Jobs', $permissions)) || (in_array('All', $permissions))) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="file-plus"></i><span>Manage Job</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php

						if ((in_array('Manage Job', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='manage-jobs.php'>Manage Job</a></li>";
						}
						if ((in_array('Completed Jobs', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='completed-jobs.php'>Completed Job</a></li>";
						}
						?>
					</ul>
				</li>
			<?php } ?>


			<?php if ((in_array('Check Feasibility', $permissions)) || (in_array('All', $permissions))) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="command"></i><span> Job Evaluation </span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php if ((in_array('Check Feasibility', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='manage-check-feasibility.php'>Check Feasibility</a></li>";
						}
						?>
					</ul>
				</li>
			<?php } ?>


			<?php if ((in_array('Drawing And Design', $permissions)) || (in_array('All', $permissions))) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="codesandbox"></i><span>Development Phase</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php if ((in_array('Drawing And Design', $permissions)) || (in_array('All', $permissions))) {
							echo " <li><a href='manage-development.php'>Drawing And Design</a></li>";
						}
						?>
					</ul>
				</li>
			<?php } ?>


			<?php if ((in_array('Fabrication And Coating', $permissions)) || (in_array('All', $permissions))) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="chrome"></i><span>Fabrication And <br />
							Coating</span><span class="menu-arrow"></span></a>
					<!-- <h6 class="submenu-hdr">Design & Development</h6> -->
					<ul>
						<?php if ((in_array('Fabrication And Coating', $permissions)) || (in_array('All', $permissions))) {
							echo " <li><a href='manage-fabrication.php'>Fabrication And Coating</a></li>";
						}
						?>
					</ul>
				</li>
			<?php } ?>


			<?php if (
				(in_array('Testing Report', $permissions)) || (in_array('All', $permissions))
			) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="repeat"></i><span>Testing</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php if ((in_array('Testing Report', $permissions)) || (in_array('All', $permissions))) {
							echo " <li><a href='manage-testing.php'>Testing Report</a></li>";
						}
						?>
					</ul>
				</li>
			<?php } ?>

			<?php if (
				(in_array('Billing', $permissions)) || (in_array('All', $permissions))
			||   (isset($_SESSION['admin_role']) && $_SESSION['admin_role'] === 'Accountant')) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="credit-card"></i><span>Billing</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php if ((in_array('Billing', $permissions))||   (isset($_SESSION['admin_role']) && $_SESSION['admin_role'] === 'Accountant') || (in_array('All', $permissions))) {
							echo " <li><a href='billing.php'>Billing Report</a></li>";
						}
						?>
					</ul>
				</li>
			<?php } ?>


			<?php if (
				(in_array('Add Brand', $permissions)) || (in_array('Manage Brand', $permissions))
				|| (in_array('All', $permissions))
			) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="life-buoy"></i><span>Brand</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php if ((in_array('Add Brand', $permissions)) || (in_array('All', $permissions))) {
							echo " <li><a href='add-brand.php'>Add Brand</a></li>";
						}
						if ((in_array('Manage Brand', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='manage-brand.php'>Manage Brand</a></li>";
						} ?>
					</ul>
				</li>
			<?php } ?>


			<?php if (
				(in_array('Add Category', $permissions)) || (in_array('Manage Category', $permissions))
				|| (in_array('All', $permissions))
			) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="codepen"></i><span>Category</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php if ((in_array('Add Category', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='add-category.php'>Add Category</a></li>";
						}
						if ((in_array('Manage Category', $permissions)) || (in_array('All', $permissions))) {
							echo " <li><a href='manage-category.php'> Manage Category</a></li>";
						}
						?>
					</ul>
				</li>
			<?php } ?>


			<?php if (
				(in_array('Add Staff', $permissions)) || (in_array('Manage Staff', $permissions))
				|| (in_array('Suspend Account', $permissions)) || (in_array('Suspend Jobs', $permissions)) || (in_array('General Settings', $permissions))
				|| (in_array('All', $permissions))
			) {
			?>
				<li class="submenu">
					<a href="javascript:void(0);"><i data-feather="settings"></i><span>Settings</span><span
							class="menu-arrow"></span></a>
					<ul>
						<?php

						if ((in_array('Add Staff', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='users.php'>Add Staff</a></li>";
						}
						if ((in_array('Add Staff', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='add-status.php'>Add Status</a></li>";
						}
						if ((in_array('Add Staff', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='add-tax.php'>Add Tax</a></li>";
						}
						if ((in_array('Manage Staff', $permissions)) || (in_array('All', $permissions))) {
							echo " <li><a href='manage-staff.php'> Manage Staff</a></li>";
						}

						if ((in_array('Suspend Account', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='suspend-account.php'>Suspend Account</a></li>";
						}
						if ((in_array('Suspend Jobs', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='suspend-jobs.php'>Suspend Jobs</a></li>";
						}
						if ((in_array('General Settings', $permissions)) || (in_array('All', $permissions))) {
							echo "<li><a href='general-settings.php'>General Settings</a></li>";
						} ?>

					</ul>
				</li>
			<?php } ?>

			<li><a href="logout.php"><i data-feather="log-out"></i><span>Logout</span> </a></li>
			<li><a href="javascript:void(0);"><i data-feather="layers"></i><span>Version 1.0.0</span> </a></li>
		</ul>
	</div>
</div>
<script>
	document.querySelectorAll('.submenu a').forEach(function(categoryLink) {
		categoryLink.addEventListener('click', function(event) {
			document.querySelectorAll('.submenu a').forEach(function(link) {
				link.classList.remove('submenu-selected');
			});
			categoryLink.classList.add('submenu-selected');
		});
	});
</script>
<script>
	function handleDashboardClick(event) {
		document.querySelectorAll('.submenu a').forEach(function(link) {
			link.classList.remove('submenu-selected');
		});

		event.currentTarget.classList.add('submenu-selected');
		window.location.href = event.currentTarget.href;
	}
</script>