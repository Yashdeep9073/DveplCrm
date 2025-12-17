<?php
session_start();

include('db/config.php');
$job_id = base64_decode($_GET['job_id']);
$query_suspend_edit= "SELECT * FROM user_job_request where job_id= '$job_id'";
$result_suspend_edit = mysqli_query($conn, $query_suspend_edit);
$data_suspend_edit = mysqli_fetch_assoc($result_suspend_edit);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user input to prevent SQL injection
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    // Construct the SQL query to update the user_job_request table
    $sql = "UPDATE user_job_request SET status = '$status', remark = '$remark' WHERE `job_id`='$job_id'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // If the query is successful, set a session variable and redirect
        $stat = 1;
            $re = base64_encode($stat);
            $_SESSION['status_msg'] = "Suspend Jobs has been Updated Successfully.";
          header("location:suspend-jobs.php?status_msg=$re");
        
    } else {
        // If there's an error, display the error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection

$categoryQuery = "SELECT * FROM tbl_category ";
$categorys = mysqli_query($conn, $categoryQuery);

$brandQuery = "SELECT * FROM tbl_brand ";
$brands = mysqli_query($conn, $brandQuery);

// $sectionQuery = "SELECT * FROM section where status=1";
// $sections = mysqli_query($conn, $sectionQuery);
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
    <title>Edit Suspend Jobs -D.V. Electromatic Pvt. Ltd</title>
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

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4>Edit Suspend Jobs</h4>
                            <!-- <h6></h6> -->
                        </div>
                    </div>
                    <ul class="table-top-head">

                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                    data-feather="chevron-up" class="feather-chevron-up"></i></a>
                        </li>
                    </ul>

                </div>
                <!-- /add -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body add-product pb-0">
                            <div class="accordion-card-one accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-controls="collapseOne">
                                            <div class="addproduct-icon">
                                                <h5><i data-feather="info" class="add-info"></i><span>Edit Suspend Jobs
                                                    </span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                        class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php
                                            if (isset($_SESSION['status'])) {
                                                ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert"
                                                    id="message">
                                                    <strong>Success !</strong>
                                                    <?= $_SESSION['status']; ?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                                <?php
                                                unset($_SESSION['status']);
                                            }
                                            ?>
                                            <div class="row">
                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                <div class="mb-3 add-product">
                                                    <label class="form-label">Store</label>
                                                    <select class="select">
                                                        <option>Choose</option>
                                                        <option>Thomas</option>
                                                        <option>Rasmussen</option>
                                                        <option>Fred john</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 col-12">
                                                <div class="mb-3 add-product">
                                                    <label class="form-label">Warehouse</label>
                                                    <select class="select">
                                                        <option>Choose</option>
                                                        <option>Legendary</option>
                                                        <option>Determined</option>
                                                        <option>Sincere</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>-->
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Job ID *</label>
                                                        <input type="text" name="j_id" class="form-control"
                                                            placeholder="Enter Job ID"
                                                            value="<?php echo $data_suspend_edit['j_id']; ?>" required readonly="">
                                                    </div>
                                                </div>
                                              
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">DEVEL/CODE *</label>
                                                        <input type="text" name="devel_code" class="form-control"
                                                            placeholder="Enter DEVEL/CODE"
                                                            value="<?php echo $data_suspend_edit['devel_code']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Confirm Date *</label>
                                                        <input type="date" class="form-control"
                                                            name="order_confirm_date" placeholder="Select a date"
                                                            value="<?php echo $data_suspend_edit['order_confirm_date']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Taken By *</label>
                                                        <input type="text" class="form-control" name="order_taken_by"
                                                            placeholder="
                                                    Enter Order Taken By"
                                                            value="<?php echo $data_suspend_edit['order_taken_by']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Concerned Engineer*</label>
                                                        <input type="text" class="form-control"
                                                            name="concerned_engineer"
                                                            placeholder="Enter Concerned Engineer"
                                                            value="<?php echo $data_suspend_edit['concerned_engineer']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Enter Name"
                                                            value="<?php echo $data_suspend_edit['name']; ?>" required readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Email ID *</label>
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Enter Email ID"
                                                            value="<?php echo $data_suspend_edit['email']; ?>" required readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Phone No. *</label>
                                                        <input type="number" name="phone_no" class="form-control"
                                                            placeholder="Enter Phone No."
                                                            value="<?php echo $data_suspend_edit['phone_no']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">CA No. *</label>
                                                        <input type="number" name="ca_no" class="form-control" min="1"
                                                            placeholder="Enter CA No."
                                                            value="<?php echo $data_suspend_edit['ca_no']; ?>" required readonly="">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Item No. </label>
                                                        <input type="number" name="item_no" class="form-control"
                                                            placeholder="Enter Item No."
                                                            value="<?php echo $data_suspend_edit['item_no']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">QTY*</label>
                                                        <input type="number" name="quantity" class="form-control"
                                                            min="1" placeholder="Enter QTY"
                                                            value="<?php echo $data_suspend_edit['quantity']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Amount *</label>
                                                        <input type="number" name="amount" class="form-control"
                                                            placeholder="Enter Amount"
                                                            value="<?php echo $data_suspend_edit['amount']; ?>" required readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">GST *</label>
                                                        <input type="number" name="gst" class="form-control"
                                                            placeholder="Enter GST"
                                                            value="<?php echo $data_suspend_edit['amount']; ?>" required readonly="">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Total *</label>
                                                        <input type="number" name="total" class="form-control"
                                                            placeholder="Enter Total"
                                                            value="<?php echo $data_suspend_edit['total']; ?>" required readonly="">
                                                    </div>
                                                </div> -->
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Total Amount *</label>
                                                        <input type="number" name="total_amount" class="form-control"
                                                            placeholder="Enter Total Amount"
                                                            value="<?php echo $data_suspend_edit['total_amount']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Advance *</label>
                                                        <input type="number" name="advance" class="form-control"
                                                            placeholder="Enter Advance"
                                                            value="<?php echo $data_suspend_edit['advance']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Balance *</label>
                                                        <input type="number" name="balance" class="form-control"
                                                            placeholder="Enter Balance"
                                                            value="<?php echo $data_suspend_edit['balance']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div> -->

                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Placed To/ Date *</label>
                                                        <input type="Date" name="order_placed_to_date"
                                                            class="form-control"
                                                            placeholder="Enter Order Placed To/ Date"
                                                            value="<?php echo $data_suspend_edit['order_placed_to_date']; ?>"
                                                            required readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Job Name *</label>
                                                        <input type="text" name="job_name" class="form-control"
                                                            value="<?php echo $data_suspend_edit['job_name']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="status">Status *</label>
                                                        <select id="status" name="status" class="form-control" required>
                                                            <option value="Request" selected="selected">Request</option>
                                                            <option value="Alloted" selected="selected">Alloted</option>
                                                            <option value="Fabrication" selected="selected">Fabrication
                                                            </option>
                                                            <option value="Testing" selected="selected">Testing</option>
                                                            <option value="Completed" selected="selected">Completed</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Serial No. *</label>
                                                        <input type="text" name="serial_no" class="form-control"
                                                            value="<?php echo $data_suspend_edit['serial_no']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">P.O Payment</label>
                                                        <input type="text" name="po_payment" class="form-control"
                                                            placeholder="Enter P.O Payment"
                                                            value="<?php echo $data_suspend_edit['po_payment']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">P.O No.</label>
                                                        <input type="text" name="po_no" class="form-control"
                                                            placeholder="Enter P.O Payment"
                                                            value="<?php echo $data_suspend_edit['po_no']; ?>" required readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">FEB *</label>
                                                        <input type="text" name="feb" class="form-control"
                                                            placeholder="Enter FEB" value="<?php echo $data_suspend_edit['feb']; ?>"
                                                            required readonly="">
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Powder Coating *</label>
                                                        <input type="text" name="powder_coating" class="form-control"
                                                            placeholder="Enter Powder Coating"
                                                            value="<?php echo $data_suspend_edit['powder_coating']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">ELECT *</label>
                                                        <input type="text" name="elect" class="form-control"
                                                            placeholder="Enter ELCET"
                                                            value="<?php echo $data_suspend_edit['elect']; ?>" required readonly="">
                                                    </div> -->
                                                </div>


                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                <div class="mb-3 add-product">
                                                    <label class="form-label">Slug</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>  -->
                                                <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                <div class="input-blocks add-product list">
                                                    <label>SKU</label>
                                                    <input type="text" class="form-control list" placeholder="Enter SKU">
                                                    <button type="submit" class="btn btn-primaryadd">
                                                        Generate Code
                                                    </button>
                                                </div>
                                            </div> -->
                                            </div>
                                            <div class="addservice-info">
                                                <div class="row">
                                                    <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <div class="add-newplus">
                                                                <label class="form-label">Category *</label>
                                                            </div>
                                                          <?php

                                                          echo "<select class='form-control' name='category' required readonly=''>";
                                                          while ($row = mysqli_fetch_row($categorys)) {
                                                              $selected = $data_suspend_edit['0'] == $row['1'] ? "selected=''" : '';

                                                              echo "<option value='" . $row['0'] . "' " . $selected . ">" . $row['1'] . "</option>";
                                                          }
                                                          echo "</select>";
                                                          ?>

                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <div class="add-newplus">
                                                            <label class="form-label">Category *</label>
                                                        </div>
                                                        
                                                        </div>
                                                    </div>		 -->
                                                    <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <div class="add-newplus">
                                                                <label class="form-label"> Brand *</label>
                                                            </div>
                                                            <?php

                                                            echo "<select class='form-control' name='category' required readonly=''>";
                                                            while ($row = mysqli_fetch_row($brands)) {
                                                                $selected = $data_suspend_edit['0'] == $row['1'] ? "selected=''" : '';

                                                                echo "<option value='" . $row['0'] . "' " . $selected . ">" . $row['1'] . "</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
                                                        </div>
                                                    </div> -->




                                                    <!-- <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Status *</label>
                                                                <select class="select" name="status" required>
                                                                        <option value="" disabled selected>Choose</option>
                                                                    <option value="move_to_evaluation">Move To Product Evaluation Phase</option>
                                                                    <option value="disable">Disable</option>
                                                                </select>
                                                        </div>
                                                  </div> -->

                                                    <!--<div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Sub Sub Category</label>
                                                        <select class="select">
                                                            <option>Choose</option>
                                                            <option>Fruits</option>
                                                            <option>Computers</option>
                                                            <option>Shoes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-product-new">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <div class="add-newplus">
                                                            <label class="form-label">Brand</label>
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-brand"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add New</span></a>
                                                        </div>
                                                        <select class="select">
                                                            <option>Choose</option>	
                                                            <option>Nike</option>
                                                            <option>Bolt</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                    
                                                        <div class="add-newplus">
                                                            <label class="form-label">Unit</label>
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-unit"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add New</span></a>
                                                        </div>
                                                        <select class="select">
                                                            <option>Choose</option>
                                                            <option>Kg</option>
                                                            <option>Pc</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Selling Type</label>
                                                        <select class="select">
                                                            <option>Choose</option>
                                                            <option>Transactional selling</option>
                                                            <option>Solution selling</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>			
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="mb-3 add-product">
                                                    <label class="form-label">Barcode Symbology</label>
                                                    <select class="select">
                                                        <option>Choose</option>
                                                        <option>Code34</option>
                                                        <option>Code35</option>
                                                        <option>Code36</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="input-blocks add-product list">
                                                    <label>Item Code</label>
                                                    <input type="text" class="form-control list"  placeholder="Please Enter Item Code">
                                                    <button type="submit" class="btn btn-primaryadd">
                                                        Generate Code
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->
                                                    <!-- Editor -->
                                                    <div class="col-lg-12">
                                                        <div class="input-blocks summer-description-box transfer mb-3">
                                                            <label>Remark</label>
                                                            <textarea class="form-control h-10" rows="2"
                                                                name="remark"><?php echo $data_suspend_edit['remark']; ?></textarea>
                                                            <p class="mt-1">Maximum 60 Characters</p>
                                                        </div>
                                                    </div>
                                                    <!-- /Editor -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <!-- <div class="accordion-card-one accordion" id="accordionExample2">
                                <div class="accordion-item"> -->
                                    <!-- <div class="accordion-header" id="headingTwo">
                                    <div class="accordion-button"  data-bs-toggle="collapse" data-bs-target="#collapseTwo"  aria-controls="collapseTwo">
                                        <div class="text-editor add-list">
                                            <div class="addproduct-icon list icon">
                                                <h5><i data-feather="life-buoy" class="add-info"></i><span>Pricing & Stocks</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    </div> -->
                                    <!-- <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="input-blocks add-products">
                                                <label class="d-block">Product Type</label>
                                                <div class="single-pill-product">
                                                    <ul class="nav nav-pills" id="pills-tab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <span class="custom_radio me-4 mb-0 active" id="pills-home-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-home"  role="tab" aria-controls="pills-home" aria-selected="true">
                                                                <input type="radio" class="form-control" name="payment">
                                                            <span class="checkmark"></span> Single Product</span>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <span  class="custom_radio me-2 mb-0" id="pills-profile-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-profile"  role="tab" aria-controls="pills-profile" aria-selected="false">
                                                            <input type="radio" class="form-control" name="sign">
                                                            <span class="checkmark"></span> Variable Product</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                    aria-labelledby="pills-home-tab">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Quantity</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Price</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Tax Type</label>
                                                                <select class="select">
                                                                    <option>Exclusive</option>
                                                                    <option>Sales Tax</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Discount Type</label>
                                                                <select class="select">
                                                                    <option>Choose</option>
                                                                    <option>Percentage</option>
                                                                    <option>Cash</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Discount Value</label>
                                                                <input type="text" placeholder="Choose">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks add-product">
                                                                <label>Quantity Alert</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-card-one accordion" id="accordionExample3">
                                                        <div class="accordion-item">
                                                            <div class="accordion-header" id="headingThree">
                                                                <div class="accordion-button"  data-bs-toggle="collapse" data-bs-target="#collapseThree"  aria-controls="collapseThree">
                                                                    <div class="addproduct-icon list">
                                                                        <h5><i data-feather="image" class="add-info"></i><span>Images</span></h5>
                                                                        <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                                            <div class="accordion-body">
                                                                <div class="text-editor add-list add">
                                                                    <div class="col-lg-12">
                                                                        <div class="add-choosen">
                                                                            <div class="input-blocks">
                                                                                <div class="image-upload">
                                                                                    <input type="file">
                                                                                    <div class="image-uploads">
                                                                                        <i data-feather="plus-circle" class="plus-down-add me-0"></i>
                                                                                        <h4>Add Images</h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="phone-img">
                                                                                <img src="assets/img/products/phone-add-2.png" alt="image">
                                                                                <a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
                                                                            </div>
                                
                                                                            <div class="phone-img">
                                                                                <img src="assets/img/products/phone-add-1.png" alt="image">
                                                                                <a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <div class="row select-color-add">
                                                    <div class="col-lg-6 col-sm-6 col-12">
                                                        <div class="input-blocks add-product">
                                                            <label>Variant Attribute</label>
                                                            <div class="row">
                                                                <div class="col-lg-10 col-sm-10 col-10">
                                                                    <select class="form-control variant-select select-option" id="colorSelect">
                                                                        <option >Choose</option>
                                                                        <option >Color</option>
                                                                        <option value="red" >Red</option>
                                                                        <option value="black">Black</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                                                    <div class="add-icon tab">
                                                                        <a class="btn btn-filter" data-bs-toggle="modal"
                                                                            data-bs-target="#add-units"><i class="feather feather-plus-circle"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="selected-hide-color" id="input-show">
                                                            <div class="row align-items-center" >
                                                                <div class="col-sm-10">
                                                                    <div class="input-blocks">
                                                                        <input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="specialist" value="red, black" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="input-blocks ">
                                                                        <a href="javascript:void(0);" class="remove-color"><i class="far fa-trash-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-body-table variant-table" id="variant-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Variantion</th>
                                                                    <th>Variant Value</th>
                                                                    <th>SKU</th>
                                                                    <th>Quantity</th>
                                                                    <th>Price</th>
                                                                    <th class="no-sort">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="color">
                                                                        </div>												
                                                                    </td>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="red">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="1234">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-quantity">
                                                                            <span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
                                                                            <input type="text" class="quntity-input" value="2">
                                                                            <span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="50000">
                                                                        </div>
                                                                    </td>
                                                                    <td class="action-table-data">
                                                                        <div class="edit-delete-action">
                                                                            <div class="input-block add-lists">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox" checked>
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-variation">
                                                                                <i data-feather="plus" class="feather-edit"></i>
                                                                            </a>
                                                                            <a class="confirm-text p-2" href="javascript:void(0);">
                                                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                                                            </a>
                                                                        </div>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="color">
                                                                        </div>												
                                                                    </td>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="black">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="2345">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-quantity">
                                                                            <span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
                                                                            <input type="text" class="quntity-input" value="3">
                                                                            <span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="add-product">
                                                                            <input type="text" class="form-control" value="50000">
                                                                        </div>
                                                                    </td>
                                                                    <td class="action-table-data">
                                                                        <div class="edit-delete-action">
                                                                            <div class="input-block add-lists">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox" checked>
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                                                <i data-feather="plus" class="feather-edit"></i>
                                                                            </a>
                                                                            <a class="confirm-text p-2" href="javascript:void(0);">
                                                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                                                            </a>
                                                                        </div>													
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                </div>	
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- </div>
                            </div>
                            <div class="accordion-card-one accordion" id="accordionExample4">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                        <div class="accordion-button"  data-bs-toggle="collapse" data-bs-target="#collapseFour"  aria-controls="collapseFour">
                                        <div class="text-editor add-list">
                                            <div class="addproduct-icon list">
                                                <h5><i data-feather="list" class="add-info"></i><span>Custom Fields</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            <div class="text-editor add-list add">
                                                <div class="custom-filed">
                                                    <div class="input-block add-lists">
                                                        <label class="checkboxs">
                                                            <input type="checkbox">
                                                            <span class="checkmarks"></span>Warranties
                                                        </label>
                                                        <label class="checkboxs">
                                                            <input type="checkbox">
                                                            <span class="checkmarks"></span>Manufacturer
                                                        </label>
                                                        <label class="checkboxs">
                                                            <input type="checkbox">
                                                            <span class="checkmarks"></span>Expiry
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="input-blocks add-product">
                                                            <label>Discount Type</label>
                                                            <select class="select">
                                                                <option>Choose</option>
                                                                <option>Percentage</option>
                                                                <option>Cash</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="input-blocks add-product">
                                                            <label>Quantity Alert</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="input-blocks">
                                                            <label>Manufactured Date</label>
                    
                                                            <div class="input-groupicon calender-input">
                                                                <i data-feather="calendar" class="info-img"></i>
                                                                <input type="text" class="datetimepicker" placeholder="Choose Date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6 col-12">
                                                        <div class="input-blocks">
                                                            <label>Expiry On</label>
                    
                                                            <div class="input-groupicon calender-input">
                                                                <i data-feather="calendar" class="info-img"></i>
                                                                <input type="text" class="datetimepicker" placeholder="Choose Date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                                    <div class="col-lg-12">
                                        <div class="btn-addproduct mb-4">
                                            <button type="button" class="btn btn-cancel me-2"
                                                onclick="cancelButtonClick()">Cancel</button>
                                            <button type="submit" class="btn btn-submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                </form>
                <!-- /add -->

            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- Add Adjustment -->
    <!--<div class="modal fade" id="add-units">
        <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add Variation Attribute</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-blocks">
                                        <label>Attribute Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-blocks">
                                        <label>Add Value</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="nav user-menu">
                                    <li class="nav-item nav-searchinputs">
                                        <div class="top-nav-search">
                                            <form action="#" class="dropdown">
                                                <div class="searchinputs list dropdown-toggle" id="dropdownMenuClickable2" data-bs-toggle="dropdown" data-bs-auto-close="false" >
                                                    <input type="text" placeholder="Search">
                                                    <i data-feather="search" class="feather-16 icon"></i>
                                                    <div class="search-addon d-none">
                                                        <span><i data-feather="x-circle" class="feather-14"></i></span>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu search-dropdown idea" aria-labelledby="dropdownMenuClickable2">
                                                    <div class="search-info">
                                                        <p>Black </p>
                                                        <p>Red</p>
                                                        <p>Green</p>
                                                        <p>S</p>
                                                        <p>M</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                <div class="modal-footer-btn popup">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
                                    <a href="javascript:void(0);" class="btn btn-submit" data-bs-dismiss="modal">Create Attribute</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- /Add Adjustment -->

    <!-- Add Category -->
    <!--<div class="modal fade" id="add-units-category">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add New Category</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="modal-footer-btn">
                                <a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
                                <a href="add-product.php" class="btn btn-submit">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /Add Category -->

    <!-- Add Brand -->
    <!--<div class="modal fade" id="add-units-brand">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add New Brand</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <div class="mb-3">
                                <label class="form-label">Brand</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="modal-footer-btn">
                                <a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
                                <a href="add-product.php" class="btn btn-submit">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- /Add Brand -->

    <!-- Add Unit -->
    <!--<div class="modal fade" id="add-unit">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add Unit</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <div class="mb-3">
                                <label class="form-label">Unit</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="modal-footer-btn">
                                <a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
                                <a href="add-product.php" class="btn btn-submit">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- /Add Unit -->

    <!-- Add Variatent -->
    <!--<div class="modal fade" id="add-variation">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add Variation</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <div class="modal-title-head people-cust-avatar">
                                <h6>Variant Thumbnail</h6>
                            </div>
                            <div class="new-employee-field">
                                <div class="profile-pic-upload">
                                    <div class="profile-pic">
                                        <span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
                                    </div>
                                    <div class="mb-3">
                                        <div class="image-upload mb-0">
                                            <input type="file">
                                            <div class="image-uploads">
                                                <h4>Change Image</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 pe-0">
                                    <div class="mb-3">
                                        <label class="form-label">Barcode Symbology</label>
                                        <select class="select">
                                            <option>Choose</option>
                                            <option>Code34</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-0">
                                    <div class="mb-3">
                                        <div class="input-blocks add-product list">
                                            <label>Item Code</label>
                                            <input type="text" class="form-control list" value="455454478844">
                                            <button type="submit" class="btn btn-primaryadd">
                                                Generate Code
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-blocks image-upload-down">
                                        <div class="image-upload download">
                                            <input type="file">
                                            <div class="image-uploads">
                                                <img src="assets/img/download-img.png" alt="img">
                                                <h4>Drag and drop a <span>file to upload</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-body">
                                        <div class="text-editor add-list add">
                                            <div class="col-lg-12">
                                                <div class="add-choosen mb-3">
                                                    <div class="phone-img ms-0">
                                                        <img src="assets/img/products/phone-add-2.png" alt="image">
                                                        <a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
                                                    </div>
        
                                                    <div class="phone-img">
                                                        <img src="assets/img/products/phone-add-1.png" alt="image">
                                                        <a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-0">
                                    <div class="mb-3">
                                        <label class="form-label">Quantity</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-0">
                                    <div class="mb-3">
                                        <label class="form-label">Quantity Alert</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-0">
                                    <div class="mb-3">
                                        <label class="form-label">Tax Type</label>
                                        <select class="select">
                                            <option>Choose</option>
                                            <option>Direct</option>
                                            <option>Indirect</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 pe-0">
                                    <div class="mb-3">
                                        <label class="form-label">Tax </label>
                                        <select class="select">
                                            <option>Choose</option>
                                            <option>Income Tax</option>
                                            <option>Service Tax</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 pe-0">
                                    <div class="mb-3">
                                        <label class="form-label">Discount Type </label>
                                        <select class="select">
                                            <option>Choose</option>
                                            <option>Percentage</option>
                                            <option>Early Payment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 pe-0">
                                    <div >
                                        <label class="form-label">Discount Value</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>								
                            </div>
                            
                            
                            <div class="modal-footer-btn">
                                <a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
                                <a href="add-product.php" class="btn btn-submit">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- /Add Variatent -->
    <!--<div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div>  -->
    <script>
        setTimeout(function () {
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


</body>

</html>