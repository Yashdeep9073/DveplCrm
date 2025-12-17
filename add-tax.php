<?php
session_start();
require 'db/config.php';

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit(); // Stop the script execution
}


try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

        $taxName = filter_var($_POST['taxName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $taxValue = filter_var($_POST['taxValue'], FILTER_SANITIZE_SPECIAL_CHARS);
        $status = filter_var($_POST['taxStatus'], FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($taxName) || empty($taxValue) || empty($status)) {
            throw new Exception("All fields are required.");
        }

        $stmtInsert = $conn->prepare("INSERT INTO tax (tax_name,tax_value,status) VALUES (?,?,?)");
        if ($stmtInsert === false) {
            throw new Exception("Failed to prepare the insert statement.");
        }

        $stmtInsert->bind_param("sss", $taxName, $taxValue, $status);
        if (!$stmtInsert->execute()) {
            throw new Exception("Failed to insert status into the database.");
        }

        $stmtInsert->close();
    }

    $stmtFetchTax = $conn->prepare("SELECT * FROM tax");
    if ($stmtFetchTax === false) {
        throw new Exception("Failed to prepare the fetch statement.");
    }

    if (!$stmtFetchTax->execute()) {
        throw new Exception("Failed to execute fetch query.");
    }

    $resultTax = $stmtFetchTax->get_result();
    if ($resultTax === false) {
        throw new Exception("Failed to fetch results.");
    }


    //Delete 
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Get the vendor_id from the AJAX request
        if (isset($_GET['taxId'])) {
            $taxId = base64_decode($_GET['taxId']);
            // Prepare the SQL statement to delete the vendor
            $stmtDelete = $conn->prepare("DELETE FROM tax WHERE tax_id = ?");
            $stmtDelete->bind_param("i", $taxId);

            if ($stmtDelete->execute()) {
                // Return a success response
                echo json_encode(['status' => 'success']);
            } else {
                // Return an error response
                echo json_encode(['status' => 'error']);
            }

            // $stmt->close();
            // $conn->close();  
        }
    }

    //Edit
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editTaxSubmit'])) {
        $taxName = filter_var($_POST['editTaxName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $taxValue = filter_var($_POST['editTaxValue'], FILTER_SANITIZE_SPECIAL_CHARS);
        $status = filter_var($_POST['editTaxStatus'], FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($taxName) || empty($taxValue) || empty($status)) {
            throw new Exception("All fields are required.");
        }
        $taxID = $_POST['editTaxId'];
        

        $stmtUpdate = $conn->prepare("UPDATE tax SET tax_name = ?,tax_value=?,status=? WHERE tax_id = ?");
        if ($stmtUpdate === false) {
            throw new Exception("Failed to prepare the update statement.");
        }

        $stmtUpdate->bind_param("sssi", $taxName,$taxValue,$status, $taxID);
        if (!$stmtUpdate->execute()) {
            throw new Exception("Failed to update status into the database.");
        }

        $stmtUpdate->close();
    }


} catch (Exception $e) {
    $_SESSION['error_message'] = "Error: " . $e->getMessage();
    // Redirect or handle the error accordingly
    // header("Location: error_page.php");
    // exit();
    echo $_SESSION['error_message'];
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
    <title>Tax</title>

  
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        div.dt-buttons>.dt-button,
        div.dt-buttons>div.dt-button-split .dt-button {
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            margin-left: 0.167em;
            margin-right: 0.167em;
            margin-bottom: 0.333em;
            padding: 0.5em 1em;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            cursor: pointer;
            font-size: 0.88em;
            line-height: 1.6em;
            color: #fff !important;
            white-space: nowrap;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.1);
            /* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr="rgba(230, 230, 230, 0.1)", EndColorStr="rgba(0, 0, 0, 0.1)");
            background: #d0312d;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            text-decoration: none;
            outline: none;
            text-overflow: ellipsis;
        }

        div.dt-buttons>.dt-button:hover {
            color: inherit !important;
        }


        div.dt-buttons>.dt-button,
        div.dt-buttons>div.dt-button-split .dt-button {
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            margin-left: 0.167em;
            margin-right: 0.167em;
            margin-bottom: 0.333em;
            padding: 0.5em 1em;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            cursor: pointer;
            font-size: 0.88em;
            line-height: 1.6em;
            color: inherit;
            white-space: nowrap;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.1);
            /* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr="rgba(230, 230, 230, 0.1)", EndColorStr="rgba(0, 0, 0, 0.1)");
            background: #d0312d;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            text-decoration: none;
            outline: none;
            text-overflow: ellipsis;
        }



        div.dt-container .dt-paging .dt-paging-button.current,
        div.dt-container .dt-paging .dt-paging-button.current:hover {
            color: #ffffff !important;
            border: 1px solid rgba(0, 0, 0, 0.3);
            background-color: rgba(0, 0, 0, 0.05);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(230, 230, 230, 0.05)), color-stop(100%, rgba(0, 0, 0, 0.05)));
            background: -webkit-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            background: -moz-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            background: -ms-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            background: -o-linear-gradient(top, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
            /* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%); */
            background: #d0312d;

        }

        div.dt-container .dt-paging .dt-paging-button.current:hover,
        div.dt-container .dt-paging .dt-paging-button.current:hover {
            color: #fff !important;
            border: 1px solid #fff;
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
                            <h4>Add/ Delete Tax</h4>
                        </div>
                    </div>
                    <div class="page-btn">
                        <a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i
                                data-feather="plus-circle" class="me-2"></i>Add Tax</a>
                    </div>
                </div>


                <!-- /product list -->
                <?php
                if (isset($_SESSION['status'])) {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="message"
                        style="height:50px; font-size:15px; font-weight:50px;">
                        <strong>Success !</strong>
                        <?= $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card table-list-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display " id="example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SNO</th>
                                        <th>Tax Name</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $_count = 1;
                                    while ($tax = $resultTax->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $_count; ?>
                                            </td>
                                            <td>
                                                <?php echo $tax['tax_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $tax['tax_value']; ?>
                                            </td>
                                            <td>
                                                <?php if($tax['status']){
                                                    echo "Active";
                                                }else{
                                                    echo "Inactive";
                                                } ?>
                                            </td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a href="javascript:void(0);"
                                                        data-tax-id="<?php echo $tax['tax_id']; ?>"
                                                        class="editButton btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#edit-units">
                                                        UPDATE
                                                    </a>
                                                    <!-- <a href="#" class="btn btn-added" data-bs-toggle="modal"
                                                        data-bs-target="#add-units"><i data-feather="plus-circle"
                                                            class="me-2"></i>Add Status
                                                    </a> -->
                                                    <a href="javascript:void(0);"
                                                        data-tax-id="<?php echo base64_encode($tax['tax_id']); ?>"
                                                        class="deleteButton btn btn-danger">DELETE</a>
                                                </div>
                                            </td>
                                            <?php
                                            $_count++;
                                    }
                                    $stmtFetchTax->close();
                                    ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /product list -->
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- Add User -->
    <div class="modal fade" id="add-units">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add Tax</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <form method="post" action="" id="myForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-blocks">
                                            <label>Tax Name</label>
                                            <input type="text" name="taxName" class="form-control"
                                                placeholder="Enter Tax Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-blocks">
                                            <label>Value</label>
                                            <input type="text" name="taxValue" class="form-control"
                                                placeholder="Enter Tax Value" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-blocks">
                                            <label>Status *</label>
                                            <select name="taxStatus" id="taxStatus" class="select" required>
                                                <option>Choose</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer-btn">
                                    <button type="button" class="btn btn-cancel me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add User -->

    <!-- Edir User -->
    <div class="modal fade" id="edit-units">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Add Tax</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body">
                            <form method="post" action="">
                                <div class="row">
                                    <input type="hidden" name="editTaxId" class="editTaxId">
                                    <div class="col-lg-6">
                                        <div class="input-blocks">
                                            <label>Tax Name</label>
                                            <input type="text" name="editTaxName" class="form-control editTaxName"
                                                placeholder="Enter Tax Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-blocks">
                                            <label>Value</label>
                                            <input type="text" name="editTaxValue" class="form-control editTaxValue"
                                                placeholder="Enter Tax Value" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-blocks">
                                            <label>Status *</label>
                                            <select name="editTaxStatus" id="editTaxStatus" class="select">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer-btn">
                                    <button type="button" class="btn btn-cancel me-2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-submit" name="editTaxSubmit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add User -->


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script scr="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>


    <script>
        setTimeout(function () {
            $('#message').fadeOut('fast');
        }, 5000);
    </script>

    <script>

        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o" style="font-size:150%;"></i>',
                            titleAttr: 'Copy'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o" style="font-size:150%;"></i>',
                            titleAttr: 'Excel'
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-text-o" style="font-size:150%;"></i>',
                            titleAttr: 'CSV'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o" style="font-size:150%;" ></i>',
                            titleAttr: 'PDF'
                        }
                    ]
                }
            }
        });
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

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS -->
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Sweetalert 2 -->
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/theme-script.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>



    <script>
        $(document).ready(function () {

            // Handle the click event on the delete button
            $('.deleteButton').on('click', function (event) {
                let taxId = $(this).data('tax-id');
                console.log(taxId);

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    showCancelButton: true,
                    confirmButtonColor: "#ff9f43",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Send AJAX request to delete the record from the database
                        $.ajax({
                            url: 'add-tax.php', // The PHP file that will handle the deletion
                            type: 'GET',
                            data: { taxId: taxId },
                            success: function (response) {
                                console.log(response);

                                // Show success message and reload the page
                                Swal.fire(
                                    'Deleted!',
                                    'The Tax Slab has been deleted.',
                                ).then(() => {
                                    // Reload the page or remove the deleted row from the UI
                                    location.reload();
                                });
                            },
                            error: function (xhr, status, error) {
                                // Show error message if the AJAX request fails
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the vendor.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });

            $('.editButton').on('click', function () {
                let taxId = $(this).data('tax-id');

                $('.editTaxId').val(taxId);
                $.ajax({
                    url: 'fetch-tax.php', // The PHP file that will handle the deletion
                    type: 'POST',
                    data: { taxId: taxId },
                    success: function (response) {
                        response.taxName.forEach((name) => {
                            $('.editTaxName').val(name);
                        });
                        response.taxValue.forEach((val) => {
                            $('.editTaxValue').val(val);
                        });
                        response.status.forEach((status) => {
                            if (status == 1) {

                                $('#editTaxStatus').val('1');
                            } else {
                                $('#editTaxStatus').val('0');
                            }
                        });


                    },
                    error: function (xhr, status, error) {
                        // Show error message if the AJAX request fails
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the vendor.',
                            'error'
                        );
                    }
                });

            });
        });

    </script>
</body>

</html>