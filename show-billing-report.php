<?php
session_start();

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_role']) && !isset($_SESSION['admin_id']) && !isset($_SESSION['csrf_token'])) {
    header("Location: index.php");
    exit(); // Stop the script execution
}

include('db/config.php');

// Sanitize job_id to prevent SQL injection
$job_id = mysqli_real_escape_string($conn, base64_decode($_GET['job_id']));

// Fetch data for the job
$query_testing_edit = "SELECT tbl_product.*, user_job_request.*
    FROM tbl_product
    INNER JOIN user_job_request ON tbl_product.job_id = user_job_request.job_id 
    WHERE tbl_product.job_id = '$job_id'";
$result_testing_edit = mysqli_query($conn, $query_testing_edit);
$data_testing_edit = mysqli_fetch_assoc($result_testing_edit);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate required fields

    $billing_status = mysqli_real_escape_string($conn, $_POST['billing_status']);
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);
    date_default_timezone_set('Asia/Kolkata');
    $job_done_date = date("M d-Y");
    $alloted_date = date("M d-Y");

    // Handle file upload
    $file_excel = $data_testing_edit['file_excel']; // Default to existing file
    if (isset($_FILES['file_excel']) && $_FILES['file_excel']['error'] == 0) {
        $upload_dir = 'payment/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        $file_name = basename($_FILES['file_excel']['name']);
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_size = $_FILES['file_excel']['size'];

        // Validate file type and size (10 MB = 10 * 1024 * 1024 bytes)
        if (!in_array($file_ext, ['xls', 'xlsx']) || $file_size > 10 * 1024 * 1024) {
            $_SESSION['status'] = "Error: Only Excel files (.xls, .xlsx) up to 10 MB are allowed.";
        } else {
            $file_path = $upload_dir . time() . '_' . $file_name;
            if (!move_uploaded_file($_FILES['file_excel']['tmp_name'], $file_path)) {
                $_SESSION['status'] = "Error: Failed to upload file.";
            } else {
                $file_excel = $file_path;
            }
        }
    }

    // Proceed with update if no errors
    if (!isset($_SESSION['status'])) {
        $sql = "UPDATE user_job_request 
                    SET status='Completed', 
                        job_status='Completed',  
                        alloted_date='$alloted_date', 
                        remark='$remark', 
                        job_done_date='$job_done_date', 
                        billing_status='$billing_status', 
                        file_excel='$file_excel' 
                    WHERE job_id='$job_id'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['status_msg'] = "Billing has been Updated Successfully.";
            header("Location: billing.php"); // Redirect to main billing page
            exit();
        } else {
            $_SESSION['status'] = "Error: " . $conn->error;
        }
    }
}


$categoryQuery = "SELECT * FROM tbl_category";
$categorys = mysqli_query($conn, $categoryQuery);

$brandQuery = "SELECT * FROM tbl_admin";
$brands = mysqli_query($conn, $brandQuery);

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
    <title>Billing Report</title>

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
            location.reload();
        }
    </script>
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
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
                            <h4>Billing Report</h4>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                    data-feather="chevron-up" class="feather-chevron-up"></i></a>
                        </li>
                    </ul>
                </div>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body add-product pb-0">
                            <div class="accordion-card-one accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-controls="collapseOne">
                                            <div class="addproduct-icon">
                                                <h5><i data-feather="credit-card" class="add-info"></i><span>Billing</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                        class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php if (isset($_SESSION['status'])) { ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="message">
                                                    <strong>Error !</strong> <?= htmlspecialchars($_SESSION['status']); ?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                                <?php unset($_SESSION['status']); ?>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['status_msg'])) { ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                                                    <strong>Success !</strong> <?= htmlspecialchars($_SESSION['status_msg']); ?>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                                <?php unset($_SESSION['status_msg']); ?>
                                            <?php } ?>
                                            <div class="row">
                                                <h3 style="margin-top:23px;">Job Description</h3>
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">DVEPL CODE *</label>
                                                        <input type="text" name="devel_code" class="form-control"
                                                            placeholder="Enter DVEPL CODE"
                                                            value="<?php echo htmlspecialchars($data_testing_edit['devel_code'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Tender ID *</label>
                                                        <input type="text" name="j_id" class="form-control"
                                                            placeholder="Enter Tender ID"
                                                            value="<?php echo htmlspecialchars($data_testing_edit['j_id'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">CA No. *</label>
                                                        <input type="text" name="ca_no" class="form-control"
                                                            placeholder="Enter CA No."
                                                            value="<?php echo htmlspecialchars($data_testing_edit['ca_no'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Name of work *</label>
                                                        <input type="text" name="job_name" class="form-control"
                                                            value="<?php echo htmlspecialchars($data_testing_edit['job_name'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <br /><br />
                                                <h3 style="margin-top:23px;">Customer Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Firm Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Enter Firm Name"
                                                            value="<?php echo htmlspecialchars($data_testing_edit['name'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Concern Person Name</label>
                                                        <input type="text" name="name1" class="form-control"
                                                            placeholder="Enter Concern Person Name"
                                                            value="<?php echo htmlspecialchars($data_testing_edit['name1'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Email ID *</label>
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Enter Email ID"
                                                            value="<?php echo htmlspecialchars($data_testing_edit['email'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Phone No. *</label>
                                                        <input type="number" name="phone_no" class="form-control"
                                                            placeholder="Enter Phone No."
                                                            value="<?php echo htmlspecialchars($data_testing_edit['phone_no'] ?? ''); ?>" required readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <h3 style="margin-top:23px;">PO Details</h3><br />
                                                    <hr style="margin-bottom:24px;" />
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">PO Ready Date.</label>
                                                            <input readonly type="date" name="po_no"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['po_date'] ?? ''); ?>"
                                                                class="form-control" placeholder="Enter PO date." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">PO No.</label>
                                                            <input readonly type="text" name="po_no"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['po_no'] ?? ''); ?>"
                                                                class="form-control" placeholder="Enter PO No." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">PO Placed To *</label>
                                                            <input readonly type="text" name="po_placed_to" class="form-control"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['po_placed_to'] ?? ''); ?>"
                                                                placeholder="Enter PO Placed To" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Vendor Phone No. *</label>
                                                            <input readonly type="number" name="vendor_phone" class="form-control"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['vendor_phone'] ?? ''); ?>"
                                                                placeholder="Enter Vendor Phone No." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Vendor Email ID *</label>
                                                            <input readonly type="email" name="vendor_email" class="form-control"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['vendor_email'] ?? ''); ?>"
                                                                placeholder="Enter Vendor Email ID" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Date of Payment</label>
                                                            <input readonly type="date" name="po_payment_date"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['po_payment_date'] ?? ''); ?>"
                                                                class="form-control" placeholder="Enter Date of Payment" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Amount *</label>
                                                             <div class="input-group"> <span class="input-group-text"> ₹</span>
                                                            <input readonly type="number" name="po_amount" class="form-control"
                                                                id="amount"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['amount'] ?? ''); ?>"
                                                                placeholder="Enter Amount" required>
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="input-blocks">
                                                            <label>GST %</label>
                                                            <select readonly required id="gst" class="select gstForCard1" name="po_gst">
                                                                <?php foreach ($taxData as $tax) { ?>
                                                                    <option readonly value="<?php echo htmlspecialchars($tax['tax_value']); ?>"
                                                                        <?php if (($data_testing_edit['po_gst'] ?? '') == $tax['tax_value']) echo 'selected'; ?>>
                                                                        <?php echo htmlspecialchars($tax['tax_name'] . ' - ' . $tax['tax_value'] . '%'); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Advance *</label>
                                                             <div class="input-group"> <span class="input-group-text"> ₹</span>
                                                            <input readonly type="number" name="advance" class="form-control"
                                                                id="advance" placeholder="Enter Advance"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['advance'] ?? ''); ?>" required>
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            
                                                            <label class="form-label">Remaining Balance *</label>
                                                             <div class="input-group"> <span class="input-group-text"> ₹</span>
                                                            <input readonly type="number" name="balance" class="form-control"
                                                                id="balance" placeholder="Enter Balance"
                                                                value="<?php echo htmlspecialchars($data_testing_edit['balance'] ?? ''); ?>" required readonly>
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="mb-3 add-product">
                                                            <label class="form-label">Upload File*<span>(Only Excel File 10 MB)</span></label>
                                                            <input type="file" name="file_excel" class="form-control"
                                                                placeholder="Enter P.O File" accept=".xls,.xlsx">
                                                            <?php if (!empty($data_testing_edit['file_excel'])) { ?>
                                                                <a href="<?php echo 'payment' . htmlspecialchars($data_testing_edit['file_excel']); ?>"
                                                                    target="_blank" class="btn btn-primary btn-sm mt-2">View File</a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br /><br /><br />
                                                <h3 style="margin-top:23px;">Project Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <?php
                                                // Reset result pointer to handle multiple rows
                                                mysqli_data_seek($result_testing_edit, 0);
                                                while ($data_testing_edit_row = mysqli_fetch_assoc($result_testing_edit)) { ?>
                                                    <div id="formRows">
                                                        <div class="form-row">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-sm-6 col-12">
                                                                    <div class="mb-3 add-product">
                                                                        <label class="form-label">Serial No. *</label>
                                                                        <input type="int" name="serial_no[]" class="form-control"
                                                                            placeholder="Enter Serial No."
                                                                            value="<?php echo htmlspecialchars($data_testing_edit_row['serial_no'] ?? ''); ?>" required readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-6 col-12">
                                                                    <div class="mb-3 add-product">
                                                                        <label class="form-label">Product Name*</label>
                                                                        <input type="text" class="form-control" name="product_name[]"
                                                                            placeholder="Product Name"
                                                                            value="<?php echo htmlspecialchars($data_testing_edit_row['product_name'] ?? ''); ?>" required readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-6 col-12">
                                                                    <div class="mb-3 add-product">
                                                                        <label class="form-label">Qty*</label>
                                                                        <input type="number" class="form-control" name="product_quantity[]"
                                                                            placeholder="Quantity" id="total_qty" onchange="calculateTotal()"
                                                                            value="<?php echo htmlspecialchars($data_testing_edit_row['product_quantity'] ?? ''); ?>" required readonly>
                                                                    </div>
                                                                </div>
                                                                <?php if (in_array('All', $permissions ?? []) ||   (isset($_SESSION['admin_role']) && $_SESSION['admin_role'] === 'Accountant')) { ?>
                                                                    <div class="col-lg-2 col-sm-6 col-12">
                                                                        <div class="mb-3 add-product">
                                                                            <label class="form-label">Price *</label>
                                                                            <div class="input-group"> <span class="input-group-text"> ₹</span>
                                                                                <input type="number" class="form-control" name="product_price[]"
                                                                                    placeholder="Price" id="price" onchange="calculateTotal()"
                                                                                    value="<?php echo htmlspecialchars($data_testing_edit_row['product_price'] ?? ''); ?>" required readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-2 col-sm-6 col-12">
                                                                        <div class="mb-3 add-product">
                                                                            <label class="form-label">GST *</label>
                                                                            <div class="input-group">
                                                                                <input type="number" name="product_gst[]" class="form-control"
                                                                                    placeholder="Enter GST" id="total_gst"
                                                                                    onchange="calculateTotal()" required readonly
                                                                                    value="<?php echo htmlspecialchars($data_testing_edit_row['product_gst'] ?? ''); ?>">
                                                                                <span class="input-group-text">%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-2 col-sm-6 col-12">
                                                                        <div class="mb-3 add-product">
                                                                            <label class="form-label">Total Amount *</label>
                                                                            <div class="input-group"> <span class="input-group-text"> ₹</span>
                                                                                <input type="text" name="product_total_amount[]" class="form-control"
                                                                                    placeholder="Enter Total Amount" id="total_amount_amount"
                                                                                    value="<?php echo htmlspecialchars($data_testing_edit_row['product_total_amount'] ?? ''); ?>" required readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div><br />
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="addservice-info">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="input-blocks summer-description-box transfer mb-3">
                                                                <label>Billing Status</label>
                                                                <select name="billing_status" class='form-control' required>
                                                                    <option value="" disabled selected>-- Select a billing status --</option>
                                                                    <option value="Paid" <?php if (($data_testing_edit['billing_status'] ?? '') == 'Paid') echo 'selected'; ?>>Paid</option>
                                                                    <option value="Unpaid" <?php if (($data_testing_edit['billing_status'] ?? '') == 'Unpaid') echo 'selected'; ?>>Unpaid</option>
                                                                    
                                                                   
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-blocks summer-description-box transfer mb-3">
                                                                <label>Remark</label>
                                                                <textarea class="form-control h-10" rows="2" name="remark"><?php echo htmlspecialchars($data_testing_edit['remark'] ?? ''); ?></textarea>
                                                                <p class="mt-1">Maximum 60 Characters</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br /><br />
                                        <div class="col-lg-12">
                                            <div class="btn-addproduct mb-4">
                                                <a href="billing.php"><button type="button" class="btn btn-cancel me-2">Cancel</button></a>
                                                <button type="submit" class="btn btn-submit" name="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <script>
        setTimeout(function() {
            $('#message').fadeOut('fast');
        }, 5000);
    </script>
    <script>
        document.getElementById('price')?.addEventListener('input', calculateAmount);
        document.getElementById('gst')?.addEventListener('input', calculateAmount);
        document.getElementById('amount')?.addEventListener('input', calculateBalance);
        document.getElementById('advance')?.addEventListener('input', calculateBalance);

        function calculateAmount() {
            const price = document.getElementById('price')?.value || 0;
            const gst = document.getElementById('gst')?.value || 0;
            const amount = price * (1 + gst / 100);
            document.getElementById('amount').value = amount.toFixed(2);
        }

        function calculateBalance() {
            const amount = document.getElementById('amount')?.value || 0;
            const advance = document.getElementById('advance')?.value || 0;
            const balance = advance - amount;
            document.getElementById('balance').value = balance.toFixed(2);
        }
    </script>
    <script>
        function addRow() {
            var formRows = document.getElementById("formRows");
            var newFormRow = document.createElement("div");
            newFormRow.classList.add("form-row");
            newFormRow.innerHTML = `
                <div class="row">
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Serial No. *</label>
                            <input type="int" name="serial_no[]" class="form-control" placeholder="Enter Serial No." required>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Product Name*</label>
                            <input type="text" class="form-control" name="product_name[]" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Qty *</label>
                            <input type="number" class="form-control" name="product_quantity[]" placeholder="Quantity" id="total_qty" onchange="calculateTotal()">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Price *</label>
                            <input type="number" class="form-control" name="product_price[]" placeholder="Price" id="price" onchange="calculateTotal()">
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">GST *</label>
                            <input type="number" name="product_gst[]" class="form-control" placeholder="Enter GST" required id="total_gst" onchange="calculateTotal()">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Total Amount *</label>
                            <input type="number" name="product_total_amount[]" class="form-control" placeholder="Enter Total Amount" id="total" required>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <div style="margin-top:30px;">
                                <button type="button" onclick="deleteRow(this)" class="btn btn-cancel me-2">Delete</button>
                            </div>
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
    </script>
    <script>
        function calculateTotal() {
            var total = 0;
            $('.row').each(function() {
                var quantity = parseFloat($(this).find('.form-control[name="product_quantity[]"]').val()) || 0;
                var price = parseFloat($(this).find('.form-control[name="product_price[]"]').val()) || 0;
                var gst = parseFloat($(this).find('.form-control[name="product_gst[]"]').val()) || 0;
                var totalAmount = (quantity * price) + ((quantity * price * gst) / 100);
                $(this).find('.form-control[name="product_total_amount[]"]').val(totalAmount.toFixed(2));
                total += totalAmount;
            });
        }
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