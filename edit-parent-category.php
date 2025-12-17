<?php
session_start();
include('config.php');

if(isset($_GET['id'])) {
    $encodedCategoryId = $_GET['id'];
    $categoryId = base64_decode($encodedCategoryId);
    
    $query = "SELECT * FROM add_parent_category WHERE _id = $categoryId";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Fetch category details from $row
        $categoryName = $row['category_name'];
        
        // Check if the form is submitted for updating
        if(isset($_POST['update_category'])) {
            // Get updated values from the form
            $updatedCategoryName = mysqli_real_escape_string($conn, $_POST['category_name']);
            
            // Update the category in the database
            $updateQuery = "UPDATE add_parent_category SET category_name = '$updatedCategoryName' WHERE _id = $categoryId";
            if ($conn->query($updateQuery) === TRUE)
            {
                $_SESSION['status'] = "the category is updated.";
                header("Location: edit-parent-category.php?id=$encodedCategoryId");
                exit;
            } 
        }
    } else {
        // Handle case where category with given ID is not found
        echo "Category not found!";
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
	<title>D.V. Electromatic Pvt. Ltd</title>

	
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
                        <h4>Edit Parent Category</h4>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body add-product pb-0">
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
                    <!-- Your HTML form code here, populate the fields with fetched values -->
                    <form action="" method="POST">
    					<div class="row">
        					<div class="col-md-4">
            					<div class="mb-3">
                					<label for="category_name" class="form-label">Category Name:</label>
                					<input type="text" name="category_name" value="<?php echo $categoryName; ?>" class="form-control" required>
            					</div>
        					</div>
    					</div>

                        <!-- Add other form fields as needed -->

                        <div class="row">
        					<div class="col-md-4">
            					<div class="mb-3">
                					<input type="submit" name="update_category" value="Update Category" class="btn btn-primary">
            					</div>
        					</div>
    					</div>
                    </form>
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
