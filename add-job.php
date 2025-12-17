<?php
session_start();
require 'db/config.php';

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit(); // Stop the script execution
}

$stmtFetchTaxs = $conn->prepare("SELECT * FROM tax WHERE status = 1");
$stmtFetchTaxs->execute();
$resultTaxs = $stmtFetchTaxs->get_result();
$taxDatas = $resultTaxs->fetch_all(MYSQLI_ASSOC); // Store tax data for reuse
$resultTaxs->data_seek(0); // Reset result pointer for use in HTML

// Fetch tax
$stmtFetchTax = $conn->prepare("SELECT * FROM tax WHERE status = 1");
$stmtFetchTax->execute();
$resultTax = $stmtFetchTax->get_result();
$taxData = $resultTax->fetch_all(MYSQLI_ASSOC); // Store tax data for reuse
$resultTax->data_seek(0); // Reset result pointer for use in HTML
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
    <title>Add Job</title>

    
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
                            <h4>New Job</h4>
                            <h6>Create new Job</h6>
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
                <form action="job-process.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="card" id="inputContainer">
                        <div class="card-body add-product pb-0">
                            <div class="accordion-card-one accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-controls="collapseOne">
                                            <div class="addproduct-icon">
                                                <h5><i data-feather="info" class="add-info"></i><span>Job
                                                        Information</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                        class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">


                                            <div class="row">
                                                <h3 style="margin-top:23px;">Job Description</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">DVEPL CODE *</label>
                                                        <input type="text" name="devel_code" class="form-control"
                                                            placeholder="Enter DVEPL CODE" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Tender ID *</label>
                                                        <input type="text" name="j_id" class="form-control"
                                                            placeholder="Enter Tender ID" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">CA No. *</label>
                                                        <input type="text" name="ca_no" class="form-control" value=""
                                                            placeholder="Enter CA No." required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Name of work</label>
                                                        <input type="text" name="job_name" class="form-control"
                                                            placeholder="Enter Name of Work" required>
                                                    </div>
                                                </div>

                                                <br /><br />
                                                <h3 style="margin-top:23px;">Customer Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Firm Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Enter Firm Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Concern Person Name</label>
                                                        <input type="text" name="name1" class="form-control"
                                                            placeholder="Enter Concern Person Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Email ID *</label>
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Enter Email ID" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Phone No. *</label>
                                                        <input type="tel" name="phone_no" class="form-control"
                                                            placeholder="Enter Phone No." required>
                                                    </div>
                                                </div>

                                                <br /><br />
                                                <h3 style="margin-top:23px;">Billing Details of Customer</h3><br />
                                                <hr style="margin-bottom:24px;" /><br />
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Amount/PO *</label>
                                                        <input type="number" name="amount" class="form-control"
                                                            id="order_amount" placeholder="Enter Order Amount/PO" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Billing Address *</label>
                                                        <input type="text" class="form-control" name="billing_address"
                                                            placeholder="Enter Billing Address" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="input-blocks">
                                                        <label>Billing GST *</label>
                                                        <select name="billing_gst"
                                                            class="select gstForCard"
                                                            required>
                                                            <option value="" selected>Choose billing gst</option>
                                                            <?php foreach ($taxDatas as $taxs) { ?>
                                                                <option
                                                                    value="<?php echo $taxs['tax_value']; ?>">
                                                                    <?php echo $taxs['tax_name'] . ' - ' . $taxs['tax_value'] . '%'; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Shipping Address *</label>
                                                        <input type="text" class="form-control" name="shipping_address"
                                                            placeholder="Enter Shipping Address" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="input-blocks">
                                                        <label>Shipping GST *</label>
                                                        <select name="shipping_gst"
                                                            class="select gstForCard"
                                                            required>
                                                            <option value="" selected>Choose shipping gst</option>
                                                            <?php foreach ($taxDatas as $taxs) { ?>
                                                                <option
                                                                    value="<?php echo $taxs['tax_value']; ?>">
                                                                    <?php echo $taxs['tax_name'] . ' - ' . $taxs['tax_value'] . '%'; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Upload PO File <span class="text-red">(Upload upto 10MB file)</span></label>
                                                        <input type="file" name="po_file" class="form-control"
                                                            placeholder="Enter PO File" required
                                                            accept="application/pdf">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Taken By *</label>
                                                        <input type="text" class="form-control" name="order_taken_by"
                                                            placeholder="Enter Order Taken By" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Order Date *</label>
                                                        <input type="date" class="form-control"
                                                            name="order_confirm_date" placeholder="Select a date"
                                                            required>
                                                    </div>
                                                </div>

                                                <br /><br /><br />
                                                <h3 style="margin-top:23px;">Project Details</h3><br />
                                                <hr style="margin-bottom:24px;" />
                                                <div id="formRows">
                                                    <div class="form-row">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Serial No. *</label>
                                                                    <input type="text" name="serial_no[]"
                                                                        class="form-control"
                                                                        placeholder="Enter Serial No." required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Product Name*</label>
                                                                    <input type="text" class="form-control"
                                                                        name="product_name[]"
                                                                        placeholder="Product Name" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Qty*</label>
                                                                    <input type="number" class="form-control quantity"
                                                                        name="product_quantity[]" placeholder="Quantity"
                                                                        required onchange="calculateTotal(this)">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Price *</label>
                                                                    <input type="number" class="form-control price"
                                                                        name="product_price[]" placeholder="Price"
                                                                        required onchange="calculateTotal(this)">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="input-blocks">
                                                                    <label>GST %</label>
                                                                    <select name="product_gst[]"
                                                                        class="select gstForCard"
                                                                        onchange="calculateTotal(this)" required>
                                                                        <option value="" selected>-- Select GST --</option>
                                                                        <?php foreach ($taxData as $tax) { ?>
                                                                            <option
                                                                                value="<?php echo $tax['tax_value']; ?>">
                                                                                <?php echo $tax['tax_name'] . ' - ' . $tax['tax_value'] . '%'; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <label class="form-label">Total Amount *</label>
                                                                    <input type="number" name="product_total_amount[]"
                                                                        step="0.01" class="form-control total_amount"
                                                                        placeholder="Enter Total Amount" required
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-sm-6 col-12">
                                                                <div class="mb-3 add-product">
                                                                    <div style="margin-top:30px;">
                                                                        <button type="button" onclick="deleteRow(this)"
                                                                            class="btn btn-cancel me-2">Delete</button>
                                                                        <button type="button"
                                                                            class="btn btn-cancel me-2"
                                                                            onclick="addRow()"
                                                                            style="background-color:#d0312d">Add</button>
                                                                    </div>
                                                                </div>
                                                            </div><br /><br /><br /><br />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="addservice-info">
                                                <div class="row"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="mb-3 add-product">
                                        <label class="form-label">Concerned Engineer*</label>
                                        <?php
                                        $brand_query = "SELECT * FROM tbl_admin WHERE status = 1 ";
                                        $result = $conn->query($brand_query);
                                        if ($result->num_rows > 0) {
                                            echo "<select name='concerned_engineer' class='select' required>";
                                            echo "<option value='' selected disabled>Choose Concerned Engineer</option>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='{$row['Username']}'>{$row['Username']}  - ({$row['admin_role']})</option>";
                                            }
                                            echo "</select>";
                                        } else {
                                            echo "No Concerned Engineer found.";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="mb-3 add-product">
                                        <label class="form-label">Costing Engineer*</label>
                                        <?php
                                        $brand_query = "SELECT * FROM tbl_admin WHERE status = 1 ";
                                        $result = $conn->query($brand_query);
                                        if ($result->num_rows > 0) {
                                            echo "<select name='costing_engineer' class='select' required>";
                                            echo "<option value='' selected disabled>Choose Costing Engineer</option>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='{$row['Username']}'>{$row['Username']} - ({$row['admin_role']})</option>";
                                            }
                                            echo "</select>";
                                        } else {
                                            echo "No Concerned Engineer found.";
                                        }
                                        ?>
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="input-blocks summer-description-box transfer mb-3">
                                        <label>Remark</label>
                                        <textarea class="form-control h-10" rows="2" name="remark"
                                            placeholder="Enter Remark" maxlength="60"></textarea>
                                        <p class="mt-1">Maximum 60 Characters</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="btn-addproduct mb-4">
                            <button type="button" class="btn btn-cancel me-2" onclick="cancelButtonClick()">Cancel</button>
                            <button type="submit" class="btn btn-submit" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                            <input type="text" name="serial_no[]" class="form-control" placeholder="Enter Serial No." required>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Product Name*</label>
                            <input type="text" class="form-control" name="product_name[]" placeholder="Product Name" required>
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Qty *</label>
                            <input type="number" class="form-control quantity" name="product_quantity[]" placeholder="Quantity" required onchange="calculateTotal(this)">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Price *</label>
                            <input type="number" class="form-control price" name="product_price[]" placeholder="Price" required onchange="calculateTotal(this)">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="input-blocks">
                            <label>GST %</label>
                            <select name="product_gst[]" class="select gstForCard form-control" onchange="calculateTotal(this)" required>
                                <option value="" selected>Choose GST</option>
                                <?php foreach ($taxData as $tax) { ?>
                                    <option value="<?php echo $tax['tax_value']; ?>">
                                        <?php echo $tax['tax_name'] . ' - ' . $tax['tax_value'] . '%'; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Total Amount *</label>
                            <input type="number" name="product_total_amount[]" step="0.01" class="form-control total_amount" placeholder="Enter Total Amount" required readonly>
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
            var siblingRows = formRow.parentNode.querySelectorAll('.form-row');
            if (siblingRows.length > 1) {
                formRow.parentNode.removeChild(formRow);
            } else {
                formRow.querySelectorAll('.form-control').forEach(function(input) {
                    input.value = '';
                });
                alert("At least one row is required.");
            }
        }

        function calculateTotal(element) {
            var row = element.closest('.row');
            var quantity = parseFloat(row.querySelector('.quantity').value) || 0;
            var price = parseFloat(row.querySelector('.price').value) || 0;
            var gst = parseFloat(row.querySelector('.gstForCard').value) || 0;
            var totalAmount = (quantity * price) + ((quantity * price * gst) / 100);
            row.querySelector('.total_amount').value = totalAmount.toFixed(2);
        }

        // Fade out messages after 5 seconds
        setTimeout(function() {
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