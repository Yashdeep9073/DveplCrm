<?php
session_start();
include('db/config.php');

if(isset($_GET['id'])) {
    $encodedBrandId = $_GET['id'];
    $brandId = base64_decode($encodedBrandId);
    
    $query = "SELECT * FROM tbl_brand WHERE brand_id = $brandId";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    
        $BrandName = $row['brand_name'];
        $Brandstatus = $row['status'];
        
        // Check if the form is submitted for updating
        if(isset($_POST['update_brand'])) {
            // Get updated values from the form
            $updatedBrandName = mysqli_real_escape_string($conn, $_POST['brand_name']);
            $updatedBrandStatus = mysqli_real_escape_string($conn, $_POST['status']);
            
            $updateQuery = "UPDATE tbl_brand SET brand_name = '$updatedBrandName', status='$updatedBrandStatus' WHERE brand_id = $brandId";
            if ($conn->query($updateQuery) === TRUE)
            {
               
		$stat = 1;
		$re = base64_encode($stat);
		$_SESSION['status_msg'] = "Brand has been Updated Successfully.";
	  header("location:manage-brand.php?status_msg=$re");
    
            } 
        }
    } else {
        echo "Brand not found!";
        exit;
    }
} else {
    // Handle case where ID parameter is not provided
    echo "Invalid request!";
    exit;
}
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
	<title>Edit Brand-D.V. Electromatic Pvt. Ltd</title>

	
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
</head>
<body>

    <div id="global-loader">
       <div class="whirly-loader"></div>
    </div>

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
							<h4>Edit Brand</h4>
							<!-- <h6>Update Inventory</h6> -->
						</div>
					</div>
					<ul class="table-top-head">
						<li>
							<div class="page-btn">
								<a href="manage-brand.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Manage Brand</a>
							</div>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
						</li>
					</ul>
					
				</div>

                <div class="card">
                   <div class="card-body add-product pb-0">
                    	<div class="accordion-card-one accordion" id="accordionExample">
								<div class="accordion-item">
									<div class="accordion-header" id="headingOne">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-controls="collapseOne">
											<div class="addproduct-icon">
												<h5><i data-feather="info" class="add-info"></i><span>Brand Information</span></h5>
												<a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
											</div>
										</div>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
                    					 	<?php 
                                                if(isset($_SESSION['status']))
                                                {
                                                    ?>
         				 							<div class="alert alert-success alert-dismissible fade show" role="alert">
           				 								<strong>Success !</strong> <?= $_SESSION['status']; ?>
                         								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            	         							</div>
       					 							<?php 
                                                        unset($_SESSION['status']);
                                                }
                                            ?>
                    						<form action="" method="POST">
    											<div class="row">
        											<div class="col-md-4">
            											<div class="mb-3">
                											<label for="brand_name" class="form-label">Brand Name *</label>
                											<input type="text" name="brand_name" value="<?php echo $BrandName; ?>" class="form-control" required>
            											</div>
        											</div>
        											<div class="col-md-4">
            											<div class="mb-3">
    														<label for="status" class="form-label">Status *</label>
    															<select name="status" class="form-control" required>
        															  	<option value="1" <?php echo ($Brandstatus == 1) ? 'selected' : ''; ?>>Enable</option>
        																<option value="0" <?php echo ($Brandstatus != 1) ? 'selected' : ''; ?>>Disable</option>
    															</select>
														</div>
        											</div>
    											</div>
        										<div class="col-lg-12">
            										<div class="btn-addproduct mb-4">
                										<input type="submit" name="update_brand" value="Update Brand" class="btn btn-primary">
            										</div>
        										</div>
                   							 </form>
                						</div>
            						</div>
        						</div>
    						</div>
						</div>
				   </div>
			  </div>
		 </div>
	</div>

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

</body>
</html>
