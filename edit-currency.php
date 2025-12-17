<?php
session_start();
include ('db/config.php');

if (isset($_GET['currency_id'])) {
    $encodedCurrencyId = $_GET['currency_id'];
    $currencyId = base64_decode($encodedCurrencyId);

    $query = "SELECT * FROM currency_details WHERE currency_id = $currencyId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Fetch currency details from $row
        $currency_name = $row['currency_name'];
        $code = $row['code'];
        $symbol = $row['symbol'];
        $exchange_rate = $row['exchange_rate'];

        // Check if the form is submitted for updating
        if (isset($_POST['submit'])) {
            // Get updated values from the form
            $currency_name = mysqli_real_escape_string($conn, $_POST['currency_name']);
            $code = mysqli_real_escape_string($conn, $_POST['code']);
            $symbol = mysqli_real_escape_string($conn, $_POST['symbol']);
            $exchange_rate = mysqli_real_escape_string($conn, $_POST['exchange_rate']);

            // Update the currency details in the database
            $updateQuery = "UPDATE currency_details SET currency_name = '$currency_name', code = '$code', symbol = '$symbol', exchange_rate = '$exchange_rate' WHERE currency_id = $currencyId";

            if ($conn->query($updateQuery) === TRUE) {
                $_SESSION['status'] = "Currency details have been updated successfully.";
                header("location:currency-settings.php");
                exit();
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    } else {
        // Handle case where currency with given ID is not found
        echo "Currency not found!";
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
    <title>Edit Currency-D.V. Electromatic Pvt. Ltd</title>

    
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
            include ("header.php");
            ?>
        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <?php
            include ("side-bar.php");
            ?>
        </div>
        <!-- /Sidebar -->

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4>Edit Currency</h4>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <!-- <li>
                            <div class="page-btn">
                                <a href="manage-category.php" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back To Manage Category</a>
                            </div>
                        </li>				 -->
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                    data-feather="chevron-up" class="feather-chevron-up"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-body add-product pb-0">
                        <div class="accordion-card-one accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <div class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-controls="collapseOne">
                                        <div class="addproduct-icon">
                                            <h5><i data-feather="info" class="add-info"></i><span>Currency</span></h5>
                                            <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                    class="chevron-down-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Currency Name <span> *</span></label>
                                                        <input type="text" name="currency_name" class="form-control"
                                                            value="<?php echo $row['currency_name']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Currency Symbol <span>
                                                                *</span></label>
                                                        <input type="text" name="code" class="form-control"
                                                            value="<?php echo $row['code']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Currency Code <span> *</span></label>
                                                        <input type="text" name="symbol" class="form-control"
                                                            value="<?php echo $row['symbol']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Exchange Rate <span> *</span></label>
                                                        <input type="text" name="exchange_rate" class="form-control"
                                                            value="<?php echo $row['exchange_rate']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer-btn">
                                                <button type="button" class="btn btn-cancel me-2"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" name="submit" value="submit"
                                                    class="btn btn-submit">Save Changes</button>
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