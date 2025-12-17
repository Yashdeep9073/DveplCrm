<?php
session_start();
ini_set('display_errors', '1');
error_reporting(E_ALL);

require 'db/config.php';

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id']) && !isset($_SESSION['csrf_token'])) {
    header("Location: index.php");
    exit();
}

// Fetch user's role from session, with a fallback if not set
$admin_role = isset($_SESSION['admin_role']) ? $_SESSION['admin_role'] : '';

// Fetch Job Data
$job_id = base64_decode($_GET['job_id']);

$query_check_edit = "SELECT user_job_request.*
    FROM user_job_request 
    WHERE job_id = '$job_id'";
$result_check_edit = mysqli_query($conn, $query_check_edit);
$data_check_edit = mysqli_fetch_assoc($result_check_edit);

// Fetch Roles Data
$stmtFetchEngineers = $conn->prepare("SELECT * FROM tbl_admin");
$stmtFetchEngineers->execute();
$resultEngineers = $stmtFetchEngineers->get_result();

// Fetch Product Data (for display only)
$fetchProductData = "SELECT tbl_product.*
    FROM tbl_product
    WHERE tbl_product.job_id = '$job_id'";
$resultProduct = mysqli_query($conn, $fetchProductData);

// Fetch Tax
$stmtFetchTax = $conn->prepare("SELECT * FROM tax WHERE status = 1");
$stmtFetchTax->execute();
$resultTax = $stmtFetchTax->get_result();
$taxData = [];
while ($tax = $resultTax->fetch_assoc()) {
    $taxData[] = $tax;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitBtn'])) {
    // Retrieve form data with sanitization
    $remark = filter_input(INPUT_POST, 'remark', FILTER_SANITIZE_SPECIAL_CHARS);
    $po_date = filter_input(INPUT_POST, 'po_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $po_payment = filter_input(INPUT_POST, 'po_amount', FILTER_SANITIZE_SPECIAL_CHARS);
    $gst = filter_input(INPUT_POST, 'po_gst', FILTER_SANITIZE_SPECIAL_CHARS);
    $po_no = filter_input(INPUT_POST, 'po_no', FILTER_SANITIZE_SPECIAL_CHARS);
    $po_placed_to = filter_input(INPUT_POST, 'po_placed_to', FILTER_SANITIZE_SPECIAL_CHARS);
    $advance = filter_input(INPUT_POST, 'advance', FILTER_SANITIZE_SPECIAL_CHARS);
    $balance = filter_input(INPUT_POST, 'balance', FILTER_SANITIZE_SPECIAL_CHARS);
    $vendor_phone = filter_input(INPUT_POST, 'vendor_phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $vendor_email = filter_input(INPUT_POST, 'vendor_email', FILTER_SANITIZE_EMAIL);
    $po_payment_date = filter_input(INPUT_POST, 'po_payment_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $po_amount = filter_input(INPUT_POST, 'po_amount', FILTER_SANITIZE_SPECIAL_CHARS);
    $po_received_date = filter_input(INPUT_POST, 'po_received_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $po_generate_date = filter_input(INPUT_POST, 'po_generate_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $drawing_date = filter_input(INPUT_POST, 'drawing_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $modify_date = filter_input(INPUT_POST, 'modify_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $feb = filter_input(INPUT_POST, 'feb', FILTER_SANITIZE_SPECIAL_CHARS);
    $powder_coating = filter_input(INPUT_POST, 'powder_coating', FILTER_SANITIZE_SPECIAL_CHARS);
    $elect = filter_input(INPUT_POST, 'elect', FILTER_SANITIZE_SPECIAL_CHARS);
    $job_done_date = filter_input(INPUT_POST, 'job_done_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $material_status = filter_input(INPUT_POST, 'material_status', FILTER_SANITIZE_SPECIAL_CHARS);

    // File upload logic for Excel file (Job Evaluation Specialist)
    $unique_filename = $data_check_edit['file_excel'] ?? null;
    if (isset($_FILES["file_excel"]) && $_FILES["file_excel"]["size"] > 0) {
        $upload_directory = "payment/";
        $temp_name = $_FILES["file_excel"]["tmp_name"];
        $original_name = $_FILES["file_excel"]["name"];
        $file_size = $_FILES["file_excel"]["size"];
        $file_type = mime_content_type($temp_name);

        // Allowed file types for Excel
        $allowed_types = ["application/vnd.ms-excel", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"];
        if (!in_array($file_type, $allowed_types)) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
                <strong><i class='feather icon-check'></i>Error!</strong> Please upload a valid Excel file.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
            </div>";
        } elseif ($file_size > 10 * 1024 * 1024) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
                <strong><i class='feather icon-check'></i>Error!</strong> File size exceeds the 10MB limit.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
            </div>";
        } else {
            $unique_filename = uniqid() . '_' . basename($original_name);
            if (!move_uploaded_file($temp_name, $upload_directory . $unique_filename)) {
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
                    <strong><i class='feather icon-check'></i>Error!</strong> File upload failed.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                    </button>
                </div>";
            }
        }
    }

    // File upload logic for PDF file (Engineer)
    $drawing_filename = $data_check_edit['uploaded_file'] ?? null;
    if (isset($_FILES["uploaded_file"]) && $_FILES["uploaded_file"]["size"] > 0) {
        $upload_directory = "drawings/";
        $temp_name = $_FILES["uploaded_file"]["tmp_name"];
        $original_name = $_FILES["uploaded_file"]["name"];
        $file_size = $_FILES["uploaded_file"]["size"];
        $file_type = mime_content_type($temp_name);

        // Allowed file type for PDF
        if ($file_type !== "application/pdf") {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
                <strong><i class='feather icon-check'></i>Error!</strong> Please upload a valid PDF file.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
            </div>";
        } elseif ($file_size > 20 * 1024 * 1024) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
                <strong><i class='feather icon-check'></i>Error!</strong> File size exceeds the 20MB limit.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
            </div>";
        } else {
            $drawing_filename = uniqid() . '_' . basename($original_name);
            if (!move_uploaded_file($temp_name, $upload_directory . $drawing_filename)) {
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
                    <strong><i class='feather icon-check'></i>Error!</strong> Drawing file upload failed.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                    </button>
                </div>";
            }
        }
    }

    if (!isset($msg)) {
        // Prepare SQL query and params
        $query = "UPDATE user_job_request SET remark = ?";
        $params = [$remark];
        $types = "s";

        if ($admin_role == 'Job Evaluation Specialist') {
            $query .= ", po_no = ?, po_payment_date = ?, po_amount = ?, po_gst = ?, file_excel = ?, vendor_phone = ?, vendor_email = ?, advance = ?, balance = ?, po_placed_to = ?, po_date = ?, po_received_date = ?, po_generate_date = ?, po_payment = ?, status = ?";
            $params = array_merge($params, [
                $po_no, $po_payment_date, $po_amount, $gst, $unique_filename, $vendor_phone,
                $vendor_email, $advance, $balance, $po_placed_to, $po_date, $po_received_date,
                $po_generate_date, $po_payment, 'Alloted'
            ]);
            $types .= "sssssssssssssss";
        } elseif ($admin_role == 'Engineer') {
            $query .= ", drawing_date = ?, modify_date = ?, uploaded_file = ?, status = ?";
            $params = array_merge($params, [$drawing_date, $modify_date, $drawing_filename, 'Fabrication']);
            $types .= "ssss";
        } elseif ($admin_role == 'Fabrication and Coating Technician') {
            $query .= ", feb = ?, powder_coating = ?, elect = ?, status = ?";
            $params = array_merge($params, [$feb, $powder_coating, $elect, 'Testing']);
            $types .= "ssss";
        } elseif ($admin_role == 'Tester') {
            $query .= ", job_done_date = ?, material_status = ?, status = ?";
            $params = array_merge($params, [$job_done_date, $material_status, 'Completed']);
            $types .= "sss";
        }

        // Final WHERE clause
        $query .= " WHERE job_id = ?";
        $params[] = $job_id;
        $types .= "i";

        // Prepare statement
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind and execute
        $stmt->bind_param($types, ...$params);

        if ($stmt->execute()) {
            $_SESSION['status_msg'] = "Job details have been updated successfully.";
            header("Location: user-work.php?status_msg=" . base64_encode(1));
            exit;
        } else {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
                <strong><i class='feather icon-check'></i> Error!</strong> Error updating record: " . $stmt->error . "
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
            </div>";
        }

        $stmt->close();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['productDetailEdit'])) {
    $product_id = filter_input(INPUT_POST, 'productIdEdit', FILTER_SANITIZE_SPECIAL_CHARS);
    $serialNumber = filter_input(INPUT_POST, 'serialNumber', FILTER_SANITIZE_SPECIAL_CHARS);
    $productName = filter_input(INPUT_POST, 'productName', FILTER_SANITIZE_SPECIAL_CHARS);
    $productQuantity = filter_input(INPUT_POST, 'productQuantity', FILTER_SANITIZE_SPECIAL_CHARS);
    $productPrice = filter_input(INPUT_POST, 'productPrice', FILTER_SANITIZE_SPECIAL_CHARS);
    $productGst = filter_input(INPUT_POST, 'productGst', FILTER_SANITIZE_SPECIAL_CHARS);
    $productTotalAmount = filter_input(INPUT_POST, 'productTotalAmount', FILTER_SANITIZE_SPECIAL_CHARS);
    $productEditDate = filter_input(INPUT_POST, 'productEditDate', FILTER_SANITIZE_SPECIAL_CHARS);
    $productRemark = filter_input(INPUT_POST, 'productRemarks', FILTER_SANITIZE_SPECIAL_CHARS);

    $stmtUpdateProduct = $conn->prepare("
        UPDATE tbl_product 
        SET 
            serial_no = ?, 
            product_name = ?, 
            product_quantity = ?, 
            product_price = ?, 
            product_gst = ?, 
            product_total_amount = ?, 
            tbl_product_date = ?, 
            tbl_product_remarks = ? 
        WHERE product_id = ?");

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

    if ($stmtUpdateProduct->execute()) {
        $_SESSION['status'] = "Product details have been updated successfully.";
    } else {
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
            <strong><i class='feather icon-check'></i>Error!</strong> Error updating product details: " . $stmtUpdateProduct->error . "
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>×</span>
            </button>
        </div>";
    }
    $stmtUpdateProduct->close();
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
    <title>User Module</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Animation CSS -->
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
            location.reload();
        }
    </script>

    <style>
        .dataTables_length label:before {
            display: none !important;
        }
        .file-status {
            margin-top: 5px;
            font-size: 12px;
            color: #555;
        }
    </style>
</head>
<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        <div class="header">
            <?php include("header.php"); ?>
        </div>

        <div class="sidebar" id="sidebar">
            <?php include("side-bar.php"); ?>
        </div>

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4>Job</h4>
                            <h6>User Module</h6>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header">
                                <i data-feather="chevron-up" class="feather-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <?php if (isset($msg)) echo $msg; ?>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body add-product pb-0">
                            <div class="accordion-card-one accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                                            <div class="addproduct-icon">
                                                <h5><i data-feather="info" class="add-info"></i><span>User Module</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <br />
                                                <h3 style="margin-top:23px;">Job Description</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">DVEPL CODE *</label>
                                                        <input type="text" name="devel_code" class="form-control" placeholder="Enter DVEPL CODE" value="<?php echo htmlspecialchars($data_check_edit['devel_code'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Tender ID *</label>
                                                        <input type="text" name="j_id" class="form-control" placeholder="Enter Tender ID" value="<?php echo htmlspecialchars($data_check_edit['j_id'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">CA No. *</label>
                                                        <input type="text" name="ca_no" class="form-control" min="1" placeholder="Enter CA No." value="<?php echo htmlspecialchars($data_check_edit['ca_no'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Name of Work *</label>
                                                        <input type="text" name="job_name" class="form-control" value="<?php echo htmlspecialchars($data_check_edit['job_name'] ?? ''); ?>" placeholder="Enter Name of Work" required readonly>
                                                    </div>
                                                </div>
                                                <br />
                                                <h3 style="margin-top:23px;">Customer Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Firm Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Enter Firm Name" value="<?php echo htmlspecialchars($data_check_edit['name'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Concern Person Name</label>
                                                        <input type="text" name="name1" class="form-control" placeholder="Enter Concern Person Name" value="<?php echo htmlspecialchars($data_check_edit['name1'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Email ID *</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Enter Email ID" value="<?php echo htmlspecialchars($data_check_edit['email'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Phone No. *</label>
                                                        <input type="number" name="phone_no" class="form-control" placeholder="Enter Phone No." value="<?php echo htmlspecialchars($data_check_edit['phone_no'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>

                                                <br /><br /><br />

                                                <?php if ($admin_role == 'Job Evaluation Specialist') { ?>
                                                    <div class="row">
                                                        <h3 style="margin-top:23px;">PO Details</h3><br />
                                                        <hr style="margin-bottom:24px;" />
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">PO Ready Date *</label>
                                                                <input type="date" name="po_date" class="form-control" placeholder="Enter Date" value="<?php echo htmlspecialchars($data_check_edit['po_date'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">PO No.</label>
                                                                <input type="text" name="po_no" class="form-control" placeholder="Enter PO No." value="<?php echo htmlspecialchars($data_check_edit['po_no'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">PO Placed To *</label>
                                                                <input type="text" name="po_placed_to" class="form-control" placeholder="Enter PO Placed To" value="<?php echo htmlspecialchars($data_check_edit['po_placed_to'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">Vendor Phone No. *</label>
                                                                <input type="number" name="vendor_phone" class="form-control" placeholder="Enter Vendor Phone No." value="<?php echo htmlspecialchars($data_check_edit['vendor_phone'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">Vendor Email ID *</label>
                                                                <input type="email" name="vendor_email" class="form-control" placeholder="Enter Vendor Email ID" value="<?php echo htmlspecialchars($data_check_edit['vendor_email'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">Date of Payment</label>
                                                                <input type="date" name="po_payment_date" class="form-control" placeholder="Enter Date of Payment" value="<?php echo htmlspecialchars($data_check_edit['po_payment_date'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">Amount *</label>
                                                                <input type="number" name="po_amount" class="form-control" id="amount" placeholder="Enter Amount" value="<?php echo htmlspecialchars($data_check_edit['po_amount'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                                <label>GST %</label>
                                                                <select required id="gst" class="select gstForCard1" name="po_gst">
                                                                    <?php foreach ($taxData as $tax) { ?>
                                                                        <option value="<?php echo htmlspecialchars($tax['tax_value']); ?>" <?php echo ($data_check_edit['po_gst'] ?? '') == $tax['tax_value'] ? 'selected' : ''; ?>>
                                                                            <?php echo htmlspecialchars($tax['tax_name'] . ' - ' . $tax['tax_value'] . '%'); ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">Advance *</label>
                                                                <input type="number" name="advance" class="form-control" id="advance" placeholder="Enter Advance" value="<?php echo htmlspecialchars($data_check_edit['advance'] ?? ''); ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">Balance *</label>
                                                                <input type="number" name="balance" class="form-control" id="balance" placeholder="Enter Balance" value="<?php echo htmlspecialchars($data_check_edit['balance'] ?? ''); ?>" required readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">Upload File*<span>(Only Excel File 10 MB)</span></label>
                                                                <input type="file" name="file_excel" class="form-control" placeholder="Enter P.O File" accept=".xls,.xlsx">
                                                                <?php if (!empty($data_check_edit['file_excel'])) { ?>
                                                                    <div class="file-status">Current file: <?php echo htmlspecialchars($data_check_edit['file_excel']); ?></div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">PO Received Date *</label>
                                                                <input type="date" name="po_received_date" class="form-control" placeholder="Enter PO Received Date" value="<?php echo htmlspecialchars($data_check_edit['po_received_date'] ?? ''); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="mb-3 add-product">
                                                                <label class="form-label">PO Generate Date *</label>
                                                                <input type="date" name="po_generate_date" class="form-control" placeholder="Enter PO Generate Date" value="<?php echo htmlspecialchars($data_check_edit['po_generate_date'] ?? ''); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php if ($admin_role == 'Engineer') { ?>
                                                    <div class="row">
                                                        <div class="form-row">
                                                            <div class="row">
                                                                <h3>Update Drawing & Design</h3><br />
                                                                <br />
                                                                <hr />
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-6 col-12">
                                                                    <div class="mb-3 add-product">
                                                                        <label class="form-label">Drawing Upload Date *</label>
                                                                        <input type="date" class="form-control" id="uploaded_file" name="drawing_date" value="<?php echo htmlspecialchars($data_check_edit['drawing_date'] ?? ''); ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-sm-6 col-12">
                                                                    <div class="mb-3 add-product">
                                                                        <label class="form-label">Drawing File *<span>(Upload PDF 20 MB File)</span></label>
                                                                        <input type="file" class="form-control" id="uploaded_file" name="uploaded_file" accept="application/pdf">
                                                                        <?php if (!empty($data_check_edit['uploaded_file'])) { ?>
                                                                            <div class="file-status">Current file: <?php echo htmlspecialchars($data_check_edit['uploaded_file']); ?></div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-sm-6 col-12">
                                                                    <div class="mb-3 add-product">
                                                                        <label class="form-label">Drawing Approved Date *</label>
                                                                        <input type="date" class="form-control" name="modify_date" placeholder="Select a date" value="<?php echo htmlspecialchars($data_check_edit['modify_date'] ?? ''); ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br />
                                                    </div>
                                                <?php } ?>

                                                <?php if ($admin_role == 'Fabrication and Coating Technician') { ?>
                                                    <div class="row">
                                                        <br /><br /><br /><br />
                                                        <h3>Update Fabrication & Coating</h3>
                                                        <hr /><br />
                                                        <div class="row">
                                                            <div class="col-lg-3 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">FEB *</label>
                                                                    <input type="text" name="feb" class="form-control" placeholder="Enter FEB" value="<?php echo htmlspecialchars($data_check_edit['feb'] ?? ''); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Powder Coating *</label>
                                                                    <input type="text" name="powder_coating" class="form-control" placeholder="Enter Powder Coating" value="<?php echo htmlspecialchars($data_check_edit['powder_coating'] ?? ''); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">ELECT *</label>
                                                                    <input type="text" name="elect" class="form-control" placeholder="Enter ELECT" value="<?php echo htmlspecialchars($data_check_edit['elect'] ?? ''); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php if ($admin_role == 'Tester') { ?>
                                                    <div class="row">
                                                        <h3>Update Testing Report</h3>
                                                        <br /><br /><br /><br />
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-lg-3 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Dispatch Date *</label>
                                                                    <input type="date" class="form-control" name="job_done_date" placeholder="Select a date" value="<?php echo htmlspecialchars($data_check_edit['job_done_date'] ?? ''); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Material Status *</label>
                                                                    <input type="text" class="form-control" name="material_status" placeholder="Enter Material Status" value="<?php echo htmlspecialchars($data_check_edit['material_status'] ?? ''); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <br /><br /><br />
                                                <h3 style="margin-top:23px;">Project Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <?php if (isset($_SESSION['status'])) { ?>
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="message" style="height:50px; font-size:15px; font-weight:50px;">
                                                        <strong>Success!</strong> <?= htmlspecialchars($_SESSION['status']); ?>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                    <?php unset($_SESSION['status']); ?>
                                                <?php } ?>

                                                <div class="table-responsive product-list">
                                                    <table class="table">
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
                                                            <?php while ($data_edit = mysqli_fetch_assoc($resultProduct)) { ?>
                                                                <tr>
                                                                    <td>
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" />
                                                                            <span class="checkmarks"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td><?php echo htmlspecialchars($data_edit['serial_no']); ?></td>
                                                                    <td><?php echo htmlspecialchars($data_edit['product_name']); ?></td>
                                                                    <td><?php echo htmlspecialchars($data_edit['product_quantity']); ?></td>
                                                                    <td><?php echo htmlspecialchars($data_edit['product_price']); ?></td>
                                                                    <td><?php echo htmlspecialchars($data_edit['product_gst']); ?> % </td>
                                                                    <td><?php echo htmlspecialchars($data_edit['product_total_amount']); ?></td>
                                                                    <td class="action-table-data">
                                                                        <div class="edit-delete-action">
                                                                            <a class="editButton me-2 p-2" href="javascript:void(0);" data-product-id="<?php echo htmlspecialchars($data_edit['product_id']); ?>" data-bs-toggle="modal" data-bs-target="#createpayment">
                                                                                <i data-feather="edit" class="feather-edit"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <br /><br /><br /><br />
                                                <div class="addservice-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="input-blocks summer-description-box transfer mb-3">
                                                                <label>Remark</label>
                                                                <textarea class="form-control h-10" rows="2" name="remark"><?php echo htmlspecialchars($data_check_edit['remark'] ?? ''); ?></textarea>
                                                                <p class="mt-1">Maximum 60 Characters</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="btn-addproduct mb-4">
                                                   <a href="user-work.php"> <button type="button" class="btn btn-cancel me-2" onclick="cancelButtonClick()">Cancel</button></a>
                                                    <button type="submit" class="btn btn-submit" name="submitBtn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0 custom-modal-header">
                                <div class="page-title">
                                    <h4>Update Billing Item</h4>
                                </div>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
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
                                                <div class="input-groupicon calender-input">
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
                                                <select required class="select gstForCard" name="productGst">
                                                    <?php foreach ($taxData as $tax) { ?>
                                                        <option value="<?php echo htmlspecialchars($tax['tax_value']); ?>">
                                                            <?php echo htmlspecialchars($tax['tax_name'] . ' - ' . $tax['tax_value'] . '%'); ?>
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
                                                <label>Date</label>
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
                                         <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" name="productDetailEdit" class="btn btn-submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
                        <div class="modal-content">
                            <div class="page-wrapper-new p-0">
                                <div class="content">
                                    <div class="modal-header border-0 custom-modal-header">
                                        <div class="page-title">
                                            <h4>Show Details</h4>
                                        </div>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body custom-modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="modal-body-table total-orders">
                                                    <div class="table-responsive">
                                                        <table class="table datanew">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Reference</th>
                                                                    <th>Amount</th>
                                                                    <th>Paid By</th>
                                                                    <th class="no-sort">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>19 Jan 2023</td>
                                                                    <td>INV/SL0101</td>
                                                                    <td>$1500</td>
                                                                    <td>Cash</td>
                                                                    <td class="action-table-data">
                                                                        <div class="edit-delete-action">
                                                                            <a class="me-3 p-2" href="javascript:void(0);">
                                                                                <i data-feather="printer" class="feather-rotate-ccw"></i>
                                                                            </a>
                                                                            <a class="me-3 p-2" href="#" data-bs-toggle="modal" data-bs-target="#editpayment">
                                                                                <i data-feather="edit" class="feather-edit"></i>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="assets/js/jquery-3.7.1.min.js"></script>
                <script src="assets/js/feather.min.js"></script>
                <script src="assets/js/jquery.slimscroll.min.js"></script>
                <script src="assets/js/jquery.dataTables.min.js"></script>
                <script src="assets/js/dataTables.bootstrap5.min.js"></script>
                <script src="assets/js/bootstrap.bundle.min.js"></script>
                <script src="assets/plugins/select2/js/select2.min.js"></script>
                <script src="assets/js/moment.min.js"></script>
                <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
                <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
                <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
                <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
                <script src="assets/js/theme-script.js"></script>
                <script src="assets/js/script.js"></script>
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                <script>
                    setTimeout(function() {
                        $('#message, #goldmessage').fadeOut('fast');
                    }, 5000);
                </script>
                <script>
                    $(document).ready(function() {
                        $('.editButton').on('click', function() {
                            let productId = $(this).data('product-id');
                            $.ajax({
                                url: 'fetch-product-details.php',
                                type: 'POST',
                                data: { productId: productId },
                                success: function(response) {
                                    if (response.success) {
                                        $('.productIdForCard').val(productId || '');
                                        $('.serialNameForCard').val(response.productserialnumber || '');
                                        $('.productNameForCard').val(response.productname || '');
                                        $('.quantityForCard').val(response.productquantity || '');
                                        $('.priceForCard').val(response.productprice || '');
                                        $('.gstForCard').val(response.productgst || '');
                                        $('.totalAmountForCard').val(response.producttotalamount || '');
                                        $('.dateForCard').val(response.productRemarkDate || '');
                                        $('.remarkForCard').val(response.productRemarks || '');
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
                            let gstPercentage = $(".gstForCard").val();
                            let quantityForCard = $(".quantityForCard").val();
                            let priceForCard = $(".priceForCard").val();
                            let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                            $(".totalAmountForCard").val(totalAmount);
                        });

                        $(".priceForCard").keyup(function() {
                            let gstPercentage = $(".gstForCard").val();
                            let quantityForCard = $(".quantityForCard").val();
                            let priceForCard = $(".priceForCard").val();
                            let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                            $(".totalAmountForCard").val(totalAmount);
                        });

                        $(".gstForCard").on('change', function() {
                            let gstPercentage = $(this).val();
                            let quantityForCard = $(".quantityForCard").val();
                            let priceForCard = $(".priceForCard").val();
                            let totalAmount = (quantityForCard * priceForCard) + ((quantityForCard * priceForCard) * gstPercentage / 100);
                            $(".totalAmountForCard").val(totalAmount);
                        });
                    });
                </script>
                <script>
                    document.getElementById('amount').addEventListener('input', calculateBalance);
                    document.getElementById('gst').addEventListener('input', calculateBalance);
                    document.getElementById('advance').addEventListener('input', calculateBalance);

                    function calculateBalance() {
                        const amount = parseFloat(document.getElementById('amount').value) || 0;
                        const gst = parseFloat(document.getElementById('gst').value) || 0;
                        const advance = parseFloat(document.getElementById('advance').value) || 0;
                        const totalAmount = amount + (amount * gst / 100);
                        const balance = totalAmount - advance;
                        document.getElementById('balance').value = balance.toFixed(2);
                    }
                </script>
                <script>
                    setTimeout(function() {
                        $('#message, #goldmessage').fadeOut('fast');
                    }, 5000);
                </script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var dateInput = document.getElementById('productEditDate');
                        var today = new Date().toISOString().split('T')[0];
                        dateInput.value = today;
                    });
                </script>
</body>
</html>