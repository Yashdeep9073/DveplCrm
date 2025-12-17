<?php
session_start();
require 'db/config.php';

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

try {
    // Fetch user status
    $stmtFetchStatus = $conn->prepare("SELECT * FROM user_status");
    if ($stmtFetchStatus === false) {
        throw new Exception("Failed to prepare the fetch statement.");
    }
    if (!$stmtFetchStatus->execute()) {
        throw new Exception("Failed to execute fetch query.");
    }
    $resultStatus = $stmtFetchStatus->get_result();
    if ($resultStatus === false) {
        throw new Exception("Failed to fetch results.");
    }

    // Fetch job details
    $job_id = intval(base64_decode($_GET['job_id']));
    $query_edit = "SELECT ujr.*, tp.product_id, tp.product_name, tp.product_quantity, tp.product_price, tp.serial_no, tp.product_gst, tp.product_total, tp.product_total_amount
        FROM user_job_request ujr
        INNER JOIN tbl_product tp ON ujr.job_id = tp.job_id
        WHERE ujr.job_id = ?";
    $stmt_edit = $conn->prepare($query_edit);
    $stmt_edit->bind_param("i", $job_id);
    $stmt_edit->execute();
    $result_edit = $stmt_edit->get_result();
    $data_edit = $result_edit->fetch_assoc();

    // Handle form submission for job update
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        date_default_timezone_set('Asia/Kolkata');
        $created_date = date("M d-Y");

        // Safely extract and sanitize values
        $j_id = $_POST['j_id'] ?? '';
        $job_name = $_POST['job_name'] ?? '';
        $devel_code = $_POST['devel_code'] ?? '';
        $order_confirm_date = $_POST['order_confirm_date'] ?? '';
        $order_taken_by = $_POST['order_taken_by'] ?? '';
        $name1 = $_POST['name1'] ?? '';
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone_no = $_POST['phone_no'] ?? '';
        $order_placed_to_date = $_POST['order_placed_to_date'] ?? '';
        $billing_address = $_POST['billing_address'] ?? '';
        $billing_gst = $_POST['billing_gst'] ?? '';
        $shipping_address = $_POST['shipping_address'] ?? '';
        $shipping_gst = $_POST['shipping_gst'] ?? '';
        $amount = $_POST['amount'] ?? '';
        $ca_no = $_POST['ca_no'] ?? '';
        $status = $_POST['status'] ?? '';
        $remark = $_POST['remark'] ?? '';
        $costing_engineer = $_POST['costing_engineer'] ?? '';
        $concerned_engineer = $_POST['concerned_engineer'] ?? '';
        $job_status = $_POST['job_status'] ?? '';



        // Update job details
        $sql = "UPDATE user_job_request SET
            remark = ?,
            job_name = ?,
            devel_code = ?,
            order_confirm_date = ?,
            order_taken_by = ?,
            name1 = ?,
            name = ?,
            email = ?,
            phone_no = ?,
            order_placed_to_date = ?,
            amount = ?,
            ca_no = ?,
            billing_address = ?,
            billing_gst = ?,
            shipping_address = ?,
            shipping_gst = ?,
            costing_engineer = ?,
            concerned_engineer = ?,
            status=?,
            j_id = ?
            WHERE job_id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param(
            "ssssssssssssssssssssi",
            $remark,
            $job_name,
            $devel_code,
            $order_confirm_date,
            $order_taken_by,
            $name1,
            $name,
            $email,
            $phone_no,
            $order_placed_to_date,
            $amount,
            $ca_no,
            $billing_address,
            $billing_gst,
            $shipping_address,
            $shipping_gst,
            $costing_engineer,
            $concerned_engineer,
            $job_status,
            $j_id,
            $job_id
        );

        if ($stmt->execute()) {
            $_SESSION['status_msg'] = "Jobs has been Updated Successfully.";
            $stat = 1;
            $re = base64_encode($stat);
            header("location:manage-jobs.php?status_msg=$re");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    // Handle form submission for product detail update
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['productDetailEdit']) && isset($_POST['submit'])) {
        $product_id = $_POST['productIdEdit'];
        $serialNumber = FILTER_INPUT(INPUT_POST, 'serialNumber', FILTER_SANITIZE_SPECIAL_CHARS);
        $productName = FILTER_INPUT(INPUT_POST, 'productName', FILTER_SANITIZE_SPECIAL_CHARS);
        $productQuantity = FILTER_INPUT(INPUT_POST, 'productQuantity', FILTER_SANITIZE_SPECIAL_CHARS);
        $productPrice = FILTER_INPUT(INPUT_POST, 'productPrice', FILTER_SANITIZE_SPECIAL_CHARS);
        $productGst = FILTER_INPUT(INPUT_POST, 'productGst', FILTER_SANITIZE_SPECIAL_CHARS);
        $productTotalAmount = FILTER_INPUT(INPUT_POST, 'productTotalAmount', FILTER_SANITIZE_SPECIAL_CHARS);
        $concerned_engineer = FILTER_INPUT(INPUT_POST, 'concerned_engineer', FILTER_SANITIZE_SPECIAL_CHARS);
        $costing_engineer = FILTER_INPUT(INPUT_POST, 'costing_engineer', FILTER_SANITIZE_SPECIAL_CHARS);
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
                concern_engineers = ?,
                costing_engineers = ?,
                tbl_product_date = ?,
                tbl_product_remarks = ?
            WHERE product_id = ?");

        $stmtUpdateProduct->bind_param(
            "ssssssssssi",
            $serialNumber,
            $productName,
            $productQuantity,
            $productPrice,
            $productGst,
            $productTotalAmount,
            $concerned_engineer,
            $costing_engineer,
            $productEditDate,
            $productRemark,
            $product_id
        );

        if ($stmtUpdateProduct->execute()) {
            $stat = 1;
            $re = base64_encode($stat);
            $_SESSION['statusmsg'] = "Product Details has been Updated Successfully.";
            header("location: jobs-edit.php?job_id=" . base64_encode($job_id) . "&status_msg=$re");
            exit;
        } else {
            echo "Error: " . $stmtUpdateProduct->error;
        }
    }

    // Fetch categories and brands
    $categoryQuery = "SELECT * FROM tbl_admin";
    $categorys = mysqli_query($conn, $categoryQuery);
    $brandQuery = "SELECT * FROM tbl_admin";
    $brands = mysqli_query($conn, $brandQuery);

    // Fetch tax data
    $stmtFetchTax = $conn->prepare("SELECT * FROM tax WHERE status = 1");
    $stmtFetchTax->execute();
    $resultTax = $stmtFetchTax->get_result();
    $taxData = [];
    while ($tax = $resultTax->fetch_assoc()) {
        $taxData[] = $tax;
    }

    $stmtFetchTaxs = $conn->prepare("SELECT * FROM tax WHERE status = 1");
    $stmtFetchTaxs->execute();
    $resultTaxs = $stmtFetchTaxs->get_result();
    $taxDatas = [];
    while ($tax = $resultTaxs->fetch_assoc()) {
        $taxDatas[] = $tax;
    }
} catch (Exception $e) {
    echo "Database Error: " . $e->getMessage();
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
    <title>Edit Jobs-D.V. Electromatic Pvt. Ltd</title>
    
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
            <?php include("header.php"); ?>
        </div>
        <!-- /Header -->
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <?php include("side-bar.php"); ?>
        </div>
        <!-- /Sidebar -->
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4>Edit Job</h4>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /add -->
                <form action="" method="POST" id="myForm" autocomplete="off">
                    <div class="card" id="inputContainer">
                        <div class="card-body add-product pb-0">
                            <div class="accordion-card-one accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                                            <div class="addproduct-icon">
                                                <h5><i data-feather="info" class="add-info"></i><span>Job Information</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php if (isset($_SESSION['statusmsg'])) { ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="message" style="height:50px; font-size:15px; font-weight:50px;">
                                                    <strong>Success !</strong>
                                                    <?= $_SESSION['statusmsg']; ?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            <?php unset($_SESSION['statusmsg']);
                                            } ?>
                                            <div class="row">
                                                <h3 style="margin-top:23px;">Job Description</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">DVEPL CODE *</label>
                                                        <input type="text" name="devel_code" class="form-control" placeholder="Enter DVEPL CODE" required value="<?php echo $data_edit['devel_code']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Tender ID *</label>
                                                        <input type="text" name="j_id" class="form-control" placeholder="Enter Tender ID" required value="<?php echo $data_edit['j_id']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">CA No. *</label>
                                                        <input type="text" name="ca_no" class="form-control" min="1" placeholder="Enter CA No." value="<?php echo $data_edit['ca_no']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Name of work</label>
                                                        <input type="text" name="job_name" class="form-control" placeholder="Enter Name of Work " value="<?php echo $data_edit['job_name']; ?>">
                                                    </div>
                                                </div>
                                                <br /><br />
                                                <h3 style="margin-top:23px;">Customer Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Firm Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Enter Firm Name" value="<?php echo $data_edit['name']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Concern Person Name</label>
                                                        <input type="text" name="name1" class="form-control" placeholder="Enter Concern Person Name" value="<?php echo $data_edit['name1']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Email ID *</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Enter Email ID" value="<?php echo $data_edit['email']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Phone No. *</label>
                                                        <input type="number" name="phone_no" class="form-control" placeholder="Enter Phone No." value="<?php echo $data_edit['phone_no']; ?>">
                                                    </div>
                                                </div>
                                                <br /><br />
                                                <h3 style="margin-top:23px;">Billing Details of Customer</h3><br />
                                                <hr style="margin-bottom:24px;" /><br />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Amount/PO *</label>
                                                        <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter Order Amount/PO" required value="<?php echo $data_edit['amount']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Billing Address *</label>
                                                        <input type="text" class="form-control" name="billing_address" placeholder="Enter Billing Address" required value="<?php echo $data_edit['billing_address']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Billing GST *</label>
                                                        <select class="form-control" name="billing_gst" id="billing_gst" required>
                                                            <option value="" selected>-- Select Billing GST --</option>
                                                            <?php
                                                            $stmtFetchTaxs = $conn->prepare("SELECT * FROM tax WHERE status = 1");
                                                            $stmtFetchTaxs->execute();
                                                            $resultTaxs = $stmtFetchTaxs->get_result();
                                                            while ($tax = $resultTaxs->fetch_assoc()) {
                                                                $value = htmlspecialchars($tax['tax_value']);
                                                                $label = htmlspecialchars($tax['tax_name'] . ' - ' . $tax['tax_value'] . '%');
                                                                $selected = ($data_edit['billing_gst'] == $tax['tax_value']) ? 'selected' : '';
                                                                echo "<option value='$value' $selected>$label</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Shipping Address *</label>
                                                        <input type="text" class="form-control" name="shipping_address" placeholder="Enter Shipping Address" required value="<?php echo $data_edit['shipping_address']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Shipping GST *</label>
                                                        <select class="form-control" name="shipping_gst" id="shipping_gst" required>
                                                            <option value="" selected>-- Select Shipping GST --</option>
                                                            <?php
                                                            $stmtFetchTaxs = $conn->prepare("SELECT * FROM tax WHERE status = 1");
                                                            $stmtFetchTaxs->execute();
                                                            $resultTaxs = $stmtFetchTaxs->get_result();
                                                            while ($tax = $resultTaxs->fetch_assoc()) {
                                                                $value = htmlspecialchars($tax['tax_value']);
                                                                $label = htmlspecialchars($tax['tax_name'] . ' - ' . $tax['tax_value'] . '%');
                                                                $selected = ($data_edit['shipping_gst'] == $tax['tax_value']) ? 'selected' : '';
                                                                echo "<option value='$value' $selected>$label</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Taken By *</label>
                                                        <input type="text" class="form-control" name="order_taken_by" placeholder="Enter Order Taken By" required value="<?php echo $data_edit['order_taken_by']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Date *</label>
                                                        <input type="date" class="form-control" name="order_confirm_date" placeholder="Select a date" required value="<?php echo $data_edit['order_confirm_date']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 style="margin-top:23px;">Project Details</h3>
                                            <hr style="margin-bottom:24px;" />
                                            <div class="table-responsive product-list">
                                                <table class="table ">
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
                                                        <?php foreach ($result_edit as $data_edit) { ?>
                                                            <tr>
                                                                <td>
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" />
                                                                        <span class="checkmarks"></span>
                                                                    </label>
                                                                </td>
                                                                <td><?php echo $data_edit['serial_no']; ?></td>
                                                                <td><?php echo $data_edit['product_name']; ?></td>
                                                                <td><?php echo $data_edit['product_quantity']; ?></td>
                                                                <td><?php echo ' ₹' .$data_edit['product_price'] ; ?></td>
                                                                <td><?php echo $data_edit['product_gst'] . '%'; ?></td>
                                                                <td><?php echo ' ₹' .$data_edit['product_total_amount']; ?></td>
                                                                <td class="action-table-data">
                                                                    <div class="edit-delete-action">
                                                                        <a class="editButton me-2 p-2" href="javascript:void(0);" data-product-id="<?php echo $data_edit['product_id']; ?>" data-bs-toggle="modal" data-bs-target="#createpayment">
                                                                            <i data-feather="edit" class="feather-edit"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="addservice-info">
                                                <div class="row">
                                                    <!-- Concerned Engineer -->
                                                    <div class="col-lg-4 mt-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Concerned Engineer*</label>
                                                            <?php
                                                            $brand_query = "SELECT * FROM tbl_admin WHERE status = 1 AND admin_role = 'Engineer'";
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
                                                    <div class="col-lg-4 mt-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Costing Engineer*</label>
                                                            <?php
                                                            $brand_query = "SELECT * FROM tbl_admin WHERE status = 1 AND admin_role = 'Engineer'";
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

                                                    <div class="col-lg-4 mt-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label ">Status *</label>
                                                            <select id="status" name="job_status" class="form-control" required>
                                                                <option value="Request" selected="selected">Select Status</option>
                                                                <?php while ($status = $resultStatus->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $status['user_status_name']; ?>" >
                                                                        <?php echo $status['user_status_name']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-blocks summer-description-box transfer mb-3">
                                                            <label>Remark</label>
                                                            <textarea class="form-control h-10" rows="2" name="remark"><?php echo $data_edit['remark']; ?></textarea>
                                                            <p class="mt-1">Maximum 60 Characters</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-addproduct mb-4">
                                        <button type="button" class="btn btn-cancel me-2" onclick="cancelButtonClick()">Cancel</button>
                                        <button type="submit" value="submit" class="btn btn-submit" name="submit">Submit</button>
                                    </div>
                                </div>
                </form>
                <!-- /add -->
            </div>
        </div>
    </div>
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
                                <div class="input-blocks">
                                    <label>GST %</label>
                                    <select class="select gstForCard" name="productGst">
                                        <option>Choose</option>
                                        <?php foreach ($taxData as $tax) { ?>
                                            <option value="<?php echo htmlspecialchars($tax['tax_value']); ?>" selected>
                                                <?php echo htmlspecialchars($tax['tax_name']) . ' - ' . htmlspecialchars($tax['tax_value']) . '%'; ?>
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
                                        <input type="text" class="datetimepicker dateForCard" name="productEditDate" placeholder="Choose Date" />
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
        function calculateTotal() {
            var total = 0;
            // Loop through each product row
            $('.row').each(function() {
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
        }

        // Function to delete a row
        function deleteRow(button) {
            $(button).closest('.row').remove();
            calculateTotal(); // Recalculate total after deleting a row
        }
    </script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                let productId = $(this).data('product-id');
                // Clear previous options in the select elements
                // $('#concernedEngineerForCard').empty().append('<option disabled selected>Choose</option>');
                // $('#costEngineerForCard').empty().append('<option disabled selected>Choose</option>');
                $.ajax({
                    url: 'fetch-product-details.php',
                    type: 'POST',
                    data: {
                        productId: productId
                    },
                    success: function(response) {
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
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                    }
                });
            });

            $(".quantityForCard").keyup(function() {
                let gstPercentage = $(this).val();
                let quantityForCard = $(".quantityForCard").val();
                let priceForCard = $(".priceForCard").val();
                let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                $(".totalAmountForCard").val(totalAmount);
            });

            $(".priceForCard").keyup(function() {
                let gstPercentage = $(this).val();
                let quantityForCard = $(".quantityForCard").val();
                let priceForCard = $(".priceForCard").val();
                let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                $(".totalAmountForCard").val(totalAmount);
            });

            $(".gstForCard").on("change", function() {
                let selectedOption = $('.gstForCard option:selected');
                let gstPercentage = selectedOption.val();
                console.log("Selected Text:", gstPercentage);
                let quantityForCard = parseFloat($(".quantityForCard").val()) || 0;
                let priceForCard = parseFloat($(".priceForCard").val()) || 0;
                let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                $(".totalAmountForCard").val(totalAmount.toFixed(2));
            });
        });
    </script>
</body>

</html>