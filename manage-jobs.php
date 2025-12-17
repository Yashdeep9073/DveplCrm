<?php
session_start();
require "db/config.php";

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit(); // Stop the script execution
}




$query_jobs = "
    SELECT 
    ujr.job_id,
    ujr.devel_code,
    ujr.order_confirm_date,
    ujr.order_taken_by,
    ujr.job_name,
    ujr.name,
    ujr.name1,
    ujr.email,
    ujr.phone_no,
    ujr.po_gst,
    ujr.amount,
    ujr.advance,
    ujr.balance,
    ujr.po_payment,
    ujr.po_no,
    ujr.uploaded_file,
    ujr.po_file,
    ujr.created_date,
    ujr.concerned_engineer,
    ujr.remark,

    JSON_ARRAYAGG(
        JSON_OBJECT(
            'job_id', ujr.job_id,
            'product_name', tbl_product.product_name,
            'product_quantity', tbl_product.product_quantity,
            'concern_engineers', tbl_product.concern_engineers
        )
    ) AS job_details

FROM user_job_request ujr
LEFT JOIN tbl_product 
    ON tbl_product.job_id = ujr.job_id

GROUP BY ujr.job_id;

";

$result_jobs = mysqli_query($conn, $query_jobs);
if (!$result_jobs) {
    die("Query failed: " . mysqli_error($conn));
}

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Manage Jobs - D.V. Electromatic Pvt. Ltd</title>

    
	 <link rel="shortcut icon" type="image/x-icon" href="favicon/<?php echo $data1['favicon']; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Animation CSS -->
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

        div.dt-container .dt-paging .dt-paging-button.current,
        div.dt-container .dt-paging .dt-paging-button.current:hover {
            color: #ffffff !important;
            border: 1px solid rgba(0, 0, 0, 0.3);
            background-color: rgba(0, 0, 0, 0.05);
            background: #d0312d;
        }

        div.dt-container .dt-paging .dt-paging-button.current:hover {
            color: #fff !important;
            border: 1px solid #fff;
        }
    </style>
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <?php include('header.php'); ?>
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
                            <h4>All Jobs</h4>
                            <h6>Manage Jobs</h6>
                        </div>
                    </div>
                </div>
                <!-- /product list -->
                <div class="card table-list-card">
                    <div class="card-body">
                        <?php if (isset($_SESSION['status_msg'])) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="message" style="height:50px; font-size:15px; font-weight:50px;">
                                <strong>Success!</strong> <?= htmlspecialchars($_SESSION['status_msg']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php unset($_SESSION['status_msg']); ?>
                        <?php } ?>
                        <div>
                            <div class="table-responsive">
                                <table class="display" id="example" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>DVEPL CODE.</th>
                                            <th>Order Date</th>
                                            <th>Order Taken Date</th>
                                            <th>Concerned Engineer</th>
                                            <th>Name of work</th>
                                            <th>Firm Name</th>
                                            <th>Concern Person Name</th>
                                            <th>Email ID</th>
                                            <th>Phone No.</th>
                                            <th>GST</th>
                                            <th>Amount</th>
                                            <th>Advance</th>
                                            <th>Balance</th>
                                            <th>PO Payment</th>
                                            <th>PO No.</th>
                                            <th>Drawing File</th>
                                            <th>PO File</th>
                                            <th>Created On</th>
                                            <th>Remark</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($result_jobs as $data_jobs) {
                                            $job_details = json_decode($data_jobs['job_details'], true);
                                            $engineer = 'N/A';
                                            if (is_array($job_details)) {
                                                foreach ($job_details as $detail) {
                                                    if (!empty($detail['concern_engineers'])) {
                                                        $engineer = htmlspecialchars($detail['concern_engineers']);
                                                        break; // Stop after the first non-empty value
                                                    }
                                                }
                                            }
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['devel_code'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['order_confirm_date'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['order_taken_by'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['concerned_engineer'] ?? 'N/A') ; ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['job_name'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['name'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['name1'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['email'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['phone_no'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['po_gst'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['amount'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['advance'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['balance'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['po_payment'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['po_no'] ?? 'N/A'); ?></td>
                                                <td>
                                                    <?php
                                                    $download_link = 'https://vibrantick.org/CRM/drawing/' . ($data_jobs['uploaded_file'] ?? '');
                                                    echo "<a href='$download_link' target='_blank'>View File</a>";
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $download_link = 'https://vibrantick.org/CRM/' . ($data_jobs['po_file'] ?? '');
                                                    echo "<a href='$download_link' target='_blank'>PO File</a>";
                                                    ?>
                                                </td>
                                                <td><?php echo htmlspecialchars($data_jobs['created_date'] ?? 'N/A'); ?></td>
                                                <td><?php echo htmlspecialchars($data_jobs['remark'] ?? 'N/A'); ?></td>
                                                <td>
                                                    <a href="jobs-edit.php?job_id=<?php echo base64_encode($data_jobs['job_id']); ?>" class="btn btn-success">UPDATE</a>
                                                    <br><br/>
                                                    <a href="delete-jobs.php?job_id=<?php echo $data_jobs['job_id']; ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger rounded-sm">DELETE</a>
                                                </td>
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
                                    <span aria-hidden="true">×</span>
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
                                            <span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
                                        </div>
                                        <div class="image-upload mb-0">
                                            <input type="file">
                                            <div class="image-uploads">
                                                <h4>Change Image</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                            <span class="status-label">Status</span>
                                            <input type="checkbox" id="user2" class="check" checked="">
                                            <label for="user2" class="checktoggle"></label>
                                        </div>
                                    </div>
                                    <div class="modal-footer-btn">
                                        <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
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
                                    <span aria-hidden="true">×</span>
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
                                            <a href="javascript:void(0);" class="remove-photo"><i data-feather="x" class="x-square-add"></i></a>
                                        </div>
                                        <div class="image-upload mb-0">
                                            <input type="file">
                                            <div class="image-uploads">
                                                <h4>Change Image</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                            <span class="status-label">Status</span>
                                            <input type="checkbox" id="user4" class="check" checked="">
                                            <label for="user4" class="checktoggle"></label>
                                        </div>
                                    </div>
                                    <div class="modal-footer-btn">
                                        <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-submit">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Brand -->

        <script>
            setTimeout(function() {
                $('#message').fadeOut('fast');
            }, 5000);
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
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
                                text: '<i class="fa fa-file-pdf-o" style="font-size:150%;"></i>',
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
</body>

</html>