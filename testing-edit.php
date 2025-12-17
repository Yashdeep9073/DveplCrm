<?php
session_start();

require 'db/config.php';
$job_id = base64_decode($_GET['job_id']);

$query_testing_edit = "SELECT ujr.*, tp.product_id, tp.product_name, tp.product_quantity, tp.product_price, tp.serial_no, tp.product_gst, tp.product_total_amount 
FROM user_job_request ujr
INNER JOIN tbl_product tp ON ujr.job_id = tp.job_id
WHERE ujr.job_id = '$job_id'";
$result_testing_edit = mysqli_query($conn, $query_testing_edit);
$data_testing_edit = mysqli_fetch_assoc($result_testing_edit);

$categoryQuery = "SELECT * FROM tbl_category ";
$categorys = mysqli_query($conn, $categoryQuery);

$brandQuery = "SELECT * FROM tbl_admin ";
$brands = mysqli_query($conn, $brandQuery);

//Fetch Product Data
$fetchProductData = "SELECT  tbl_product.* , user_job_request.*
    FROM tbl_product
    INNER JOIN user_job_request ON tbl_product.job_id = user_job_request.job_id 
    WHERE tbl_product.job_id = '$job_id'
    
    ";
$resultProduct = mysqli_query($conn, $fetchProductData);
$productData = mysqli_fetch_assoc($resultProduct);



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitEditProduct'])) {
    // Sanitize user input to prevent SQL injection

    // $concerned_engineer = $_POST['concerned_engineer'];
    // $costing_engineer = $_POST['costing_engineer'];
    $material_status = $_POST['material_status'];
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);
    date_default_timezone_set('Asia/Kolkata');
    $job_done_date = $_POST['job_done_date'];
    
    $concerned_engineer = FILTER_INPUT(INPUT_POST, 'concerned_engineer', FILTER_SANITIZE_SPECIAL_CHARS);
    $costing_engineer = FILTER_INPUT(INPUT_POST, 'costing_engineer', FILTER_SANITIZE_SPECIAL_CHARS);

    date_default_timezone_set('Asia/Kolkata');
    $alloted_date = date("M d-Y");

    // Construct the SQL query to update the user_job_request table
    $sql = "UPDATE user_job_request SET status='Completed',job_status = 'Completed', material_status ='$material_status' , alloted_date='$alloted_date', remark = '$remark', job_done_date='$job_done_date' , costing_engineer= '$costing_engineer', concerned_engineer = '$concerned_engineer' WHERE `job_id`='$job_id'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // If the query is successful, set a session variable and redirect
        $stat = 1;
        $re = base64_encode($stat);
        $_SESSION['status_msg'] = "Testing Report has been Updated Successfully and the job have been completed.";
        header("location:completed-jobs.php?status_msg=$re");
    } else {
        // If there's an error, display the error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['productDetailEdit'])) {

    $product_id = $_POST['productIdEdit'];
    $serialNumber = FILTER_INPUT(INPUT_POST, 'serialNumber', FILTER_SANITIZE_SPECIAL_CHARS);
    $productName = FILTER_INPUT(INPUT_POST, 'productName', FILTER_SANITIZE_SPECIAL_CHARS);
    $productQuantity = FILTER_INPUT(INPUT_POST, 'productQuantity', FILTER_SANITIZE_SPECIAL_CHARS);
    $productPrice = FILTER_INPUT(INPUT_POST, 'productPrice', FILTER_SANITIZE_SPECIAL_CHARS);
    $productGst = FILTER_INPUT(INPUT_POST, 'productGst', FILTER_SANITIZE_SPECIAL_CHARS);
    $productTotalAmount = FILTER_INPUT(INPUT_POST, 'productTotalAmount', FILTER_SANITIZE_SPECIAL_CHARS);
    $productEditDate = FILTER_INPUT(INPUT_POST, 'productEditDate', FILTER_SANITIZE_SPECIAL_CHARS);
    $productRemark = FILTER_INPUT(INPUT_POST, 'productRemarks', FILTER_SANITIZE_SPECIAL_CHARS);

    $stmtUpdateProduct = $conn->prepare("
    UPDATE tbl_product 
    SET 
        serial_no = ?, 
        product_name = ?, 
        product_quantity = ?, 
        product_price = ?, 
        product_gst = ?, 
        product_total_amount = ?, 
        tbl_product_date = ? ,
        tbl_product_remarks = ? 
    WHERE product_id = ?
");


    $stmtUpdateProduct->bind_param(
        "ssssssssi",
        $serialNumber,
        $productName,
        $productQuantity,
        $productPrice,
        $productGst,
        $productTotalAmount,
        $productEditDate,
        $productRemark,
        $product_id
    );
    $stmtUpdateProduct->execute();
    if ($stmtUpdateProduct->execute()) {
        $stat = 1;
        $re = base64_encode($stat);
        $_SESSION['status_msg'] = "Product Details has been Updated Successfully.";
        header("location: billing.php?job_id=" . base64_encode($job_id) . "&status_msg=$re");
        exit;
    } else {
        echo "Error: " . $stmtUpdateProduct->error;
    }



}

//fetch tax
$stmtFetchTax = $conn->prepare("SELECT * FROM tax WHERE status = 1");
$stmtFetchTax->execute();
$resultTax = $stmtFetchTax->get_result();
$taxData = [];
while ($tax = $resultTax->fetch_assoc()) {
    $taxData[] = $tax;
}

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
    <title>Testing</title>

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
    <style>
        .dataTables_length label:before {
            display: none !important;
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
                            <h4>Testing Report</h4>
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
                                                <h5><i data-feather="info" class="add-info"></i><span>Testing
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

                                                <h3 style="margin-top:23px;">Job Description</h3>
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">DVEPL CODE *</label>
                                                        <input type="text" name="devel_code" class="form-control"
                                                            placeholder="Enter DVEPL CODE"
                                                            value="<?php echo $data_testing_edit['devel_code']; ?>"
                                                            required readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Tender ID *</label>
                                                        <input type="text" name="j_id" class="form-control"
                                                            placeholder="Enter Tender ID"
                                                            value="<?php echo $data_testing_edit['j_id']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">CA No. *</label>
                                                        <input type="text" name="ca_no" class="form-control" min="1"
                                                            placeholder="Enter CA No."
                                                            value="<?php echo $data_testing_edit['ca_no']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Name of work *</label>
                                                        <input type="text" name="job_name" class="form-control"
                                                            value="<?php echo $data_testing_edit['job_name']; ?>"
                                                            required readonly="">
                                                    </div>
                                                </div><br />
                                                <br />
                                                <h3 style="margin-top:23px;">Customer Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Firm Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Enter Firm Name"
                                                            value="<?php echo $data_testing_edit['name']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Concern Person Name</label>
                                                        <input type="text" name="name1" class="form-control"
                                                            placeholder="Enter Concern Person Name"
                                                            value="<?php echo $data_testing_edit['name1']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Email ID *</label>
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Enter Email ID"
                                                            value="<?php echo $data_testing_edit['email']; ?>" required
                                                            readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Phone No. *</label>
                                                        <input type="number" name="phone_no" class="form-control"
                                                            placeholder="Enter Phone No."
                                                            value="<?php echo $data_testing_edit['phone_no']; ?>"
                                                            required readonly="">
                                                    </div>
                                                </div>

                                                <br /><br /><br />
                                                <h3 style="margin-top:23px;">Project Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="table-responsive product-list">
                                                    <table class="table datanew">
                                                        <thead>
                                                            <tr>
                                                                <th class="no-sort">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" id="select-all" />
                                                                        <span class="checkmarks"></span>
                                                                    </label>
                                                                </th>
                                                                <th>Serial No</th>
                                                                <th>Product Name*</th>
                                                                <th>Qty*</th>
                                                                <th>Price *</th>
                                                                <th>GST *</th>
                                                                <th>Total Amount *</th>
                                                                <th class="no-sort">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php foreach ($resultProduct as $data_edit) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" />
                                                                            <span class="checkmarks"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td><?php echo $data_edit['serial_no']; ?></td>
                                                                    <td><?php echo $data_edit['product_name']; ?></td>
                                                                    <td><?php echo $data_edit['product_quantity']; ?>
                                                                    </td>
                                                                    <td><?php echo ' ₹' . $data_edit['product_price']; ?>
                                                                    </td>
                                                                    <td><?php echo $data_edit['product_gst'].' %' ; ?></td>
                                                                    <td><?php echo ' ₹' . $data_edit['product_total_amount']; ?>
                                                                    </td>
                                                                   
                                                                    <td class="action-table-data">
                                                                        <div class="edit-delete-action">
                                                                            <!--<a class="me-2 edit-icon p-2"-->
                                                                            <!--    href="javascript:void(0);"-->
                                                                            <!--    class="dropdown-item" data-bs-toggle="modal"-->
                                                                            <!--    data-bs-target="#showpayment"-->
                                                                            <!--    data-product-id="<?php echo $data_edit['product_id']; ?>">-->
                                                                            <!--    <i data-feather="eye"-->
                                                                            <!--        class="feather-eye"></i>-->
                                                                            <!--</a>-->
                                                                            <a class="editButton me-2 p-2"
                                                                                href="javascript:void(0);"
                                                                                data-product-id="<?php echo $data_edit['product_id']; ?>"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#createpayment">
                                                                                <i data-feather="edit"
                                                                                    class="feather-edit"></i>
                                                                            </a>
                                                                            <!-- <a class="confirm-text p-2"
                                                                            href="javascript:void(0);">
                                                                            <i data-feather="trash-2"
                                                                                class="feather-trash-2"></i>
                                                                        </a> -->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <br>


                                                <h3 style="margin-top:23px;">Fabrication Details</h3>
                                                <br /><br /><br /><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">FEB *</label>
                                                            <input type="text" name="feb" class="form-control"
                                                                placeholder="Enter FEB"
                                                                value="<?php echo $data_testing_edit['feb']; ?>"
                                                                required readonly="">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Powder Coating *</label>
                                                            <input type="text" name="powder_coating"
                                                                class="form-control" placeholder="Enter Powder Coating"
                                                                value="<?php echo $data_testing_edit['powder_coating']; ?>"
                                                                required readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">ELECT *</label>
                                                            <input type="text" name="elect" class="form-control"
                                                                placeholder="Enter ELCET"
                                                                value="<?php echo $data_testing_edit['elect']; ?>"
                                                                required readonly="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h3>Update Testing Report </h3>
                                                <br /><br /><br /><br />
                                                <hr />
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Dispatch Date *</label>
                                                            <input type="date" class="form-control" name="job_done_date"
                                                                placeholder="Select a date" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Material Status *</label>
                                                            <input type="text" class="form-control"
                                                                name="material_status"
                                                                placeholder=" Enter Material Status" required>
                                                        </div>
                                                    </div>
                                                     <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Concerned Engineer*</label>
                                                            <?php
                                                            $brand_query = "SELECT * FROM tbl_admin WHERE status = 1 ";
                                                            $result = $conn->query($brand_query);
                                                            if ($result->num_rows > 0) {
                                                                echo "<select name='concerned_engineer' class='select' required>";
                                                                echo "<option value='' disabled>Choose Concerned Engineer</option>";
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = htmlspecialchars($row['Username']);
                                                                    $fullName = htmlspecialchars($row['full_name']); // or use $row['name'] if that's the column name
                                                                    $role = htmlspecialchars($row['admin_role']);
                                                                    $selected = ($data_edit['concerned_engineer'] == $username) ? 'selected' : '';
                                                                    echo "<option value='$username' $selected>$fullName ($username) - [$role]</option>";
                                                                }
                                                                echo "</select>";
                                                            } else {
                                                                echo "No Concerned Engineer found.";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <!-- Costing Engineer -->
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Costing Engineer*</label>
                                                            <?php
                                                            $brand_query = "SELECT * FROM tbl_admin WHERE status = 1 ";
                                                            $result = $conn->query($brand_query);
                                                            if ($result->num_rows > 0) {
                                                                echo "<select name='costing_engineer' class='select' required>";
                                                                echo "<option value='' disabled>Choose Costing Engineer</option>";
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $username = htmlspecialchars($row['Username']);
                                                                    $fullName = htmlspecialchars($row['full_name']);
                                                                    $role = htmlspecialchars($row['admin_role']);
                                                                    $selected = ($data_edit['costing_engineer'] == $username) ? 'selected' : '';
                                                                    echo "<option value='$username' $selected>$fullName ($username) - [$role]</option>";
                                                                }
                                                                echo "</select>";
                                                            } else {
                                                                echo "No Costing Engineer found.";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           

                                            <div class="addservice-info">
                                                <div class="row">
                                                    <!-- Editor -->
                                                    <div class="col-lg-12">
                                                        <div class="input-blocks summer-description-box transfer mb-3">
                                                            <label>Remark</label>
                                                            <textarea class="form-control h-10" rows="2"
                                                                name="remark"><?php echo $data_testing_edit['remark']; ?></textarea>
                                                            <p class="mt-1">Maximum 60 Characters</p>
                                                        </div>
                                                    </div>
                                                    <!-- /Editor -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br /><br />

                                    <div class="col-lg-12">
                                        <div class="btn-addproduct mb-4">
                                            <button type="button" class="btn btn-cancel me-2"
                                                onclick="cancelButtonClick()">Cancel</button>
                                            <button type="submit" class="btn btn-submit"
                                                name="submitEditProduct">Submit</button>
                                        </div>
                                    </div>
                </form>
                <!-- /add -->

            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 custom-modal-header">
                    <div class="page-title">
                        <h4>Update Billing Item</h4>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body custom-modal-body">
                    <form action="" method="POST">
                        <input type="hidden" name="productIdEdit" class="productIdForCard" />
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Serial Number</label>
                                    <div class="input-groupicon calender-input">
                                        <input type="text" name="serialNumber" class="serialNameForCard" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Product Name</label>
                                    <input type="text" name="productName" class="form-control productNameForCard" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Quantity</label>
                                    <div class="input-groupicon calender-input ">
                                        <input type="text" name="productQuantity" class="quantityForCard" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Price</label>
                                    <div class="input-groupicon calender-input">
                                        <i class="fas fa-rupee-sign info-img"></i>

                                        <input type="text" name="productPrice" class="priceForCard" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <!-- <div class="input-blocks">
                                    <label>GST</label>
                                    <div class="input-groupicon calender-input">
                                        <i class="fas fa-percentage info-img"></i>
                                        <input type="text" class="gstForCard" name="productGst" />
                                    </div>
                                </div> -->
                                <div class="input-blocks">
                                    <label>GST %</label>
                                    <select required class="select gstForCard" name="productGst">
                                        <?php foreach ($taxData as $tax) { ?>
                                            <option value="<?php echo $tax['tax_value']; ?>">
                                            <?php echo $tax['tax_name'] . ' - ' . $tax['tax_value'] . '%'; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label>Total Amount</label>
                                    <div class="input-groupicon calender-input">
                                        <i class="fas fa-rupee-sign info-img"></i>
                                        <input type="text" name="productTotalAmount" class="totalAmountForCard" />
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="input-blocks">
                                    <label> Date</label>
                                    <div class="input-groupicon calender-input">
                                        <i data-feather="calendar" class="info-img"></i>
                                        <input type="text" class="datetimepicker dateForCard" name="productEditDate"
                                            placeholder="Choose Date" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-blocks">
                                    <label>Description</label>
                                    <textarea class="form-control remarkForCard" name="productRemarks"></textarea>
                                    <p>Maximum 60 Characters</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="modal-footer-btn">
                                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                                <button type="submit" name="productDetailEdit" class="btn btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
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

    <script>
        setTimeout(function () {
            $('#message').fadeOut('fast');
        }, 5000);
    </script>

    <script>
        document.getElementById('price').addEventListener('input', calculateAmount);
        document.getElementById('gst').addEventListener('input', calculateAmount);
        document.getElementById('amount').addEventListener('input', calculateBalance);
        document.getElementById('advance').addEventListener('input', calculateBalance);

        function calculateAmount() {
            const price = document.getElementById('price').value;
            const gst = document.getElementById('gst').value;
            const amount = price * (1 + gst / 100);
            document.getElementById('amount').value = amount.toFixed(2);
        }

        function calculateBalance() {
            const amount = document.getElementById('amount').value;
            const advance = document.getElementById('advance').value;
            const balance = advance - amount;
            document.getElementById('balance').value = balance.toFixed(2);
        }
    </script>

    <script>
        // Function to add a new form row
        function addRow() {
            var formRows = document.getElementById("formRows");

            var newFormRow = document.createElement("div");
            newFormRow.classList.add("form-row");

            newFormRow.innerHTML = `
            <div class="row">
            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Serial No. *</label>
                                                                    <input type="int" name="serial_no[]"
                                                                    
                                                                    class="form-control"
                                                                        placeholder="Enter Serial No." required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Prodcut Name*</label>
                                                                    <input type="text" class="form-control"
                                                                        name="product_name[]"
                                                                        placeholder="Product Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Qty *</label>
                                                                    <input type="number" class="form-control"
                                                                        name="product_quantity[]" placeholder="Quantity" id="total_qty"  onchange="calculateTotal()">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Price *</label>
                                                                    <input type="number" class="form-control"
                                                                        name="product_price[]" placeholder="Price" id="price"  onchange="calculateTotal()">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">GST *</label>
                                                                    <input type="number" name="product_gst[]" class="form-control"
                                                                        placeholder="Enter GST"  required id="total_gst"  onchange="calculateTotal()">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Total Amount *</label>
                                                                    <input type="number" name="product_total_amount[]"
                                                                        class="form-control" placeholder="Enter Total Amount"
                                                                        id="total" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                <div  style="margin-top:30px;">
                                                                <button type="button"
                                                                onclick="deleteRow(this)"  class="btn btn-cancel me-2">Delete</button></div>
                                                                </div>
                                                            </div>
                                                            


                                                        </div>
        `;

            formRows.appendChild(newFormRow);
        }
        function deleteRow(button) {
            var formRow = button.closest('.form-row');
            if (formRow.parentNode.querySelectorAll('.form-row').length > 1) {
                formRow.parentNode.removeChild(formRow);
            } else {
                alert("At least one row is required.");
            }
        }

        // Function to fade out messages after 5 seconds
        setTimeout(function () {
            $('#message').fadeOut('fast');
        }, 5000);
    </script>

    <script>
        function calculateTotal() {
            var total = 0;

            // Loop through each product row
            $('.row').each(function () {
                var quantity = parseFloat($(this).find('.form-control[name="product_quantity[]"]').val());
                var price = parseFloat($(this).find('.form-control[name="product_price[]"]').val());
                var gst = parseFloat($(this).find('.form-control[name="product_gst[]"]').val());
                var amount = parseFloat($(this).find('.form-control[name="amount[]"]').val());

                // Calculate total amount for each product
                var totalAmount = (quantity * price) + ((quantity * price * gst) / 100);

                // Update the total amount input field for the current product row
                $(this).find('.form-control[name="product_total_amount[]"]').val(totalAmount.toFixed(2));

                // Add the total amount to the overall total
                total += totalAmount;
            });

            // Update the overall total input field
            // $('#overall_total').val(total.toFixed(2));
        }

        // Function to delete a row
        function deleteRow(button) {
            var formRow = button.closest('.form-row');
            var siblingRows = formRow.parentNode.querySelectorAll('.form-row');

            if (siblingRows.length > 1) {
                formRow.parentNode.removeChild(formRow);
            } else {
                // Clear input values instead of deleting the row
                formRow.querySelectorAll('.form-control').forEach(function (input) {
                    input.value = '';
                });
            }
        }

    </script>


    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <script>
        $(document).ready(function () {
            $('.editButton').on('click', function () {
                let productId = $(this).data('product-id');

                // Clear previous options in the select elements
                // $('#concernedEngineerForCard').empty().append('<option disabled selected>Choose</option>');
                // $('#costEngineerForCard').empty().append('<option disabled selected>Choose</option>');

                $.ajax({
                    url: 'fetch-product-details.php',
                    type: 'POST',
                    data: { productId: productId },
                    success: function (response) {
                        if (response.success) {
                            // Populate inputs with fetched data
                            $('.productIdForCard').val(productId || '');
                            $('.serialNameForCard').val(response.productserialnumber || '');
                            $('.productNameForCard').val(response.productname || '');
                            $('.quantityForCard').val(response.productquantity || '');
                            $('.priceForCard').val(response.productprice || '');
                            $('.gstForCard').val(response.productgst || '');
                            $('.totalAmountForCard').val(response.producttotalamount || '');
                            $('.dateForCard').val(response.productRemarkDate || '');
                            $('.remarkForCard').val(response.productRemarks || '');

                            // Clear existing options in the dropdowns
                            $('#concernedEngineerForCard').empty().append('<option disabled>Select Concerned Engineer</option>');
                            $('#costEngineerForCard').empty().append('<option disabled>Select Costing Engineer</option>');

                            // Populate "Concerned Engineer" dropdown
                            response.engineers.forEach((engineerName) => {
                                let isSelected = response.concernedengineer.includes(engineerName); // Check if the engineer is selected
                                let option = $('<option></option>')
                                    .attr('value', engineerName)
                                    .text(engineerName);
                                if (isSelected) {
                                    option.attr('selected', 'selected'); // Mark as selected if applicable
                                }
                                $('#concernedEngineerForCard').append(option);
                            });

                            // Populate "Costing Engineer" dropdown
                            response.engineers.forEach((engineerName) => {
                                let isSelected = response.costingengineer.includes(engineerName); // Check if the engineer is selected
                                let option = $('<option></option>')
                                    .attr('value', engineerName)
                                    .text(engineerName);
                                if (isSelected) {
                                    option.attr('selected', 'selected'); // Mark as selected if applicable
                                }
                                $('#costEngineerForCard').append(option);
                            });



                        } else {
                            console.error(response.error);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                    }
                });
            });

            $(".quantityForCard").keyup(function () {
                let gstPercentage = $(this).val();
                let quantityForCard = $(".quantityForCard").val();
                let priceForCard = $(".priceForCard").val();

                let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                // console.log(totalAmount);

                $(".totalAmountForCard").val(totalAmount);

            });
            $(".priceForCard").keyup(function () {
                let gstPercentage = $(this).val();
                let quantityForCard = $(".quantityForCard").val();
                let priceForCard = $(".priceForCard").val();

                let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                // console.log(totalAmount);

                $(".totalAmountForCard").val(totalAmount);

            });
            $(".gstForCard").on('change', function () {
                let gstPercentage = $(this).val();
                let quantityForCard = $(".quantityForCard").val();
                let priceForCard = $(".priceForCard").val();

                let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                // console.log(totalAmount);

                $(".totalAmountForCard").val(totalAmount);

            });
        });
    </script>


</body>

</html>