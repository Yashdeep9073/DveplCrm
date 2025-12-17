<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("db/config.php");

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit(); // Stop the script execution
}

$query_completed = "SELECT 
    user_job_request.job_id, 
   
    user_job_request.devel_code,  
    user_job_request.order_confirm_date,  
    user_job_request.order_taken_by,  
    user_job_request.job_name,  
    user_job_request.name,  
    user_job_request.name1,  
    user_job_request.email,  
    user_job_request.phone_no,  
    user_job_request.amount,  
    user_job_request.po_gst,  
    user_job_request.advance,  
    user_job_request.balance,  
    user_job_request.status,  
    user_job_request.created_date,  
    user_job_request.concerned_engineer,
    user_job_request.costing_engineer,
    user_job_request.j_id,
    user_job_request.ca_no,
    user_job_request.remark,
    user_job_request.file_excel,
    user_job_request.billing_status,
    GROUP_CONCAT(DISTINCT tbl_product.product_name) AS product_names,
    JSON_ARRAYAGG(
        JSON_OBJECT(
            'product_name', tbl_product.product_name,
            'product_quantity', tbl_product.product_quantity,
            'concern_engineers', tbl_product.concern_engineers,
             'serial_no', tbl_product.serial_no
        )
    ) AS job_details
FROM user_job_request 
INNER JOIN tbl_product ON user_job_request.job_id = tbl_product.job_id
WHERE user_job_request.status = 'Completed'
GROUP BY 
    user_job_request.job_id,
    user_job_request.status,
    user_job_request.devel_code,
    user_job_request.j_id,
    user_job_request.ca_no,
    user_job_request.job_name,
    user_job_request.created_date,
    user_job_request.remark,
    user_job_request.file_excel;

";
$result_completed = mysqli_query($conn, $query_completed);


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
    <title>Billing Report- D.V. Electromatic Pvt. Ltd</title>

    
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
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

        .view-file:hover {
            color: #00ff00 !important;
            /* Use !important to override Bootstrap's default styles */
            font-size: 13px;
            font-weight: bold;
            /* animation: glow 1.5s ease-in-out infinite alternate; */
        }

        /* @keyframes glow {
    from {
        text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 15px #00ff00, 0 0 20px #00ff00;
    }
    to {
        text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00;
    }
} */
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
            include('header.php');
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
                            <h4>Billing Report</h4>
                            <h6>Manage Billing Report</h6>
                        </div>
                    </div>

                </div>
                <!-- /product list -->
                <div class="card table-list-card">
                    <div class="card-body">
                        <div>

                            <!-- /Filter -->
                            <div class="card" id="filter_inputs">
                                <div class="card-body pb-0">

                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['status_msg'])) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="message" style=" font-size:15px; font-weight:50px;">
                                    <strong>Success!</strong> <?= htmlspecialchars($_SESSION['status_msg']); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['status_msg']); ?>
                            <?php } ?>
                            <!-- /Filter -->
                            <div class="table-responsive">
                                <table class=" display " id="example" style="width:100%">
                                    <thead>
                                        <tr>

                                            <th>Serial No.</th>
                                            <th>DVEPL CODE.</th>
                                            <th>Order Date</th>
                                            <th>Order Taken Date</th>
                                            <th>Name of work</th>
                                            <th>Firm Name</th>
                                            <th>Concern Person Name</th>
                                            <th>Email ID</th>
                                            <th>Phone No.</th>

                                            <th>Amount</th>
                                            <th>GST</th>
                                            <th>Advance</th>
                                            <th>Balance</th>
                                            <th>Billing Status</th>
                                            <th>Created On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $i = 1;

                                        foreach ($result_completed as $data_completed) {
                                        ?>
                                            <tr>


                                                <td>
                                                    <?php
                                                    $job_details = json_decode($data_completed['job_details'], true);
                                                    if (is_array($job_details)) {
                                                        $serial_numbers = array_column($job_details, 'serial_no'); // Extract all serial_no values
                                                        echo htmlspecialchars(implode(', ', $serial_numbers)); // Join with commas
                                                    } else {
                                                        echo 'No serial numbers available';
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['devel_code']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['order_confirm_date']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['order_taken_by']; ?>
                                                </td>

                                                <td>
                                                    <?php echo $data_completed['job_name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['name1']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['phone_no']; ?>
                                                </td>

                                                <td>
                                                    <?php echo $data_completed['amount']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_completed['po_gst'] . '%'; ?>
                                                </td>


                                                <td>
                                                    <?php echo $data_completed['advance']; ?>
                                                </td>

                                                <td>
                                                    <?php echo $data_completed['balance']; ?>
                                                </td>
                                                <td>
                                                    <?php if (isset($data_completed['billing_status'])): ?>
                                                        <?php
                                                        $status = $data_completed['billing_status'];
                                                        $badgeClass = ($status == 'Paid') ? 'bg-success' : 'bg-danger';
                                                        ?>
                                                        <span class="badge <?= $badgeClass; ?>">
                                                            <?= htmlspecialchars($status); ?>
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="badge bg-secondary">N/A</span>
                                                    <?php endif; ?>
                                                </td>



                                                <td>
                                                    <?php echo $data_completed['created_date']; ?>
                                                </td>
                                                <td >
                                                    <div class="edit-delete-action d-flex align-items-center gap-2">
                                                        <!-- View Button -->
                                                        <a class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1"
                                                            href="show-billing-report.php?job_id=<?= base64_encode($data_completed['job_id']) ?>"
                                                            target="" title="View">
                                                            <i data-feather="eye" class="feather-eye"></i> View
                                                        </a>

                                                        <!-- Print Button -->
                                                        <a class="btn btn-sm btn-outline-success d-flex align-items-center gap-1"
                                                            href="print-billing-report.php?job_id=<?= base64_encode($data_completed['job_id']) ?>"
                                                            target="_blank" title="Print">
                                                            <i data-feather="printer" class="feather-printer" style="width: 14px;"></i> Print
                                                        </a>
                                                    </div>

                                                </td>



                                                <!-- <td class="action-table-data">
                                                    <div class="edit-delete-action">
                                                        <a href="testing-edit.php?job_id=<?php echo base64_encode($data_completed['job_id']); ?>"
                                                            class="btn btn-success">Update</a>
                                                        <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#edit-brand"> -->
                                                <!-- </a> &nbsp;
                                                        <a href="delete-testing.php?job_id=<?php echo $data_completed['job_id']; ?>"
                                                            onclick="return confirm('Are you sure want to delete?')"
                                                            class="btn btn-danger">DELETE</a>
                                                    </div>

                                                </td>  -->
                                            </tr>
                                        <?php
                                            $i++;
                                        }
                                        ?>


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

        <!-- Add Brand -->
        <div class="modal fade" id="add-brand">
            <div class="modal-dialog modal-dialog-centered custom-modal-two">
                <div class="modal-content">
                    <div class="page-wrapper-new p-0">
                        <div class="content">
                            <div class="modal-header border-0 custom-modal-header">
                                <div class="page-title">
                                    <h4>Create Brand</h4>
                                </div>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body custom-modal-body new-employee-field">
                                <form action="brand-list.html">
                                    <div class="mb-3">
                                        <label class="form-label">Brand</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="form-label">Logo</label>
                                    <div class="profile-pic-upload mb-3">
                                        <div class="profile-pic brand-pic">
                                            <span><i data-feather="plus-circle" class="plus-down-add"></i> Add
                                                Image</span>
                                        </div>
                                        <div class="image-upload mb-0">
                                            <input type="file">
                                            <div class="image-uploads">
                                                <h4>Change Image</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div
                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                            <span class="status-label">Status</span>
                                            <input type="checkbox" id="user2" class="check" checked="">
                                            <label for="user2" class="checktoggle"></label>
                                        </div>
                                    </div>
                                    <div class="modal-footer-btn">
                                        <button type="button" class="btn btn-cancel me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-submit">Create Brand</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Brand -->

        <!-- Edit Brand -->
        <div class="modal fade" id="edit-brand">
            <div class="modal-dialog modal-dialog-centered custom-modal-two">
                <div class="modal-content">
                    <div class="page-wrapper-new p-0">
                        <div class="content">
                            <div class="modal-header border-0 custom-modal-header">
                                <div class="page-title">
                                    <h4>Edit Brand</h4>
                                </div>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body custom-modal-body new-employee-field">
                                <form action="brand-list.html">
                                    <div class="mb-3">
                                        <label class="form-label">Brand</label>
                                        <input type="text" class="form-control" value="Boat">
                                    </div>
                                    <label class="form-label">Logo</label>
                                    <div class="profile-pic-upload mb-3">
                                        <div class="profile-pic brand-pic">
                                            <span><img src="assets/img/brand/brand-icon-02.png" alt=""></span>
                                            <a href="javascript:void(0);" class="remove-photo"><i data-feather="x"
                                                    class="x-square-add"></i></a>
                                        </div>
                                        <div class="image-upload mb-0">
                                            <input type="file">
                                            <div class="image-uploads">
                                                <h4>Change Image</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div
                                            class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                            <span class="status-label">Status</span>
                                            <input type="checkbox" id="user4" class="check" checked="">
                                            <label for="user4" class="checktoggle"></label>
                                        </div>
                                    </div>
                                    <div class="modal-footer-btn">
                                        <button type="button" class="btn btn-cancel me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-submit">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Brand -->
        <!-- <div class="customizer-links" id="setdata">
            <ul class="sticky-sidebar">
                <li class="sidebar-icons">
                    <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="Theme">
                        <i data-feather="settings" class="feather-five"></i>
                    </a>
                </li>
            </ul>
        </div> -->
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
            new DataTable('#example', {
                layout: {
                    topStart: {
                        buttons: [{
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

        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>

        <!-- Datetimepicker JS -->
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Sweetalert 2 -->
        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/theme-script.js"></script>
        <script src="assets/js/script.js"></script>

        <script>
            setTimeout(function() {
                $('#message').fadeOut('fast');
            }, 5000);
        </script>
</body>

</html>