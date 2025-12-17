<?php
session_start();
if(!isset($_SESSION['login_email'])){
    header("location:login.php");
  }

include("db/config.php");

?>


<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2023 07:24:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RAWOSPHERE | MANAGE DEPARTMENT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Data Table CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
        <?php
        include('header.php');
        ?>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <?php
               include("sidebar.php");
               ?>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Department</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Manage Department</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Manage Department</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <a href="add-department.php " class="btn btn-success fw-btn-fill btn-gradient-yellow" style="margin-left:960px; width:150px; margin-bottom:5px;">Add Department</a>
                                    
                                </div> -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <div class="form-group">
                                                <a href="add-department.php" class="btn btn-success fw-btn-fill btn-gradient-yellow" style="width:150px;">Add Department</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <form class="mg-b-20" method="GET">
                        <?php
                        // $student_id =$_GET['student_id'];


                        ?>
                            <!-- <div class="row gutters-8">

                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" id="class" placeholder="Search by Roll ..." class="form-control" name="search">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" id="stu_name" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text"  id="section" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" id="submit" class="fw-btn-fill btn-gradient-yellow" name="search">SEARCH</button>
                                </div>
                            </div> -->
                        </form>
                        <div class="table-responsive">
                            <table id="example"  class="table display data-table text-nowrap">
                            <?php
                             if(isset($_SESSION['status_msg']))
                            {
                                $st = $_GET['status_msg'];
                                $st1 = base64_decode($st);
                                if ($st1 > 0) {
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="message">
                                        <strong>Thanks !</strong> <?= $_SESSION['status_msg']; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php 
                                unset($_SESSION['status_msg']);
                            }}
                                 ?> 
                                
                                <thead>
                                    <tr>
                                    
                                        <th>Sno.</th>
                                        <th>Department</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "select * from `department`";
                                $result = mysqli_query($db, $q);
                                $i = 1;

                                foreach ($result as $data) {
                                    ?>
                                        <tr>
                                            <td>
                                            <?php echo $i; ?>
                                            </td>
                                            <td>
                                            <?php echo $data['department_name']; ?>
                                </td>
                                            <td><a href="edit-department.php?department_id=<?php echo base64_encode($data['department_id']); ?>"
                                                class="btn btn-success">EDIT</a>
                                            <a href="delete-department.php?department_id=<?php echo $data['department_id']; ?>"
                                            onclick="return confirm('Are you sure want to delete ?')"     class="btn btn-danger  ">DELETE</a></td>
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
                <!-- Student Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <?php
                    include('footer.php');
                    ?>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <script>
        setTimeout(function() {
        $('#message').fadeOut('fast');
        }, 5000);
    </script>
    <!-- datatable-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js" type="text/javascript"></script>
    <script type="text/javascript">
       let table = new DataTable('#example', {
        dom: 'Bfrtip',
        buttons: [
            { extend: 'pdf', className: 'custom-button' },
            { extend: 'print', className: 'custom-button' },
            { extend: 'excel', className: 'custom-button' },
            { extend: 'csv', className: 'custom-button' },
        ]
});
    </script>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
   
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2023 07:24:17 GMT -->
</html>