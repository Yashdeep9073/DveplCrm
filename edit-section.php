<?php
session_start();

if(!isset($_SESSION['login_email'])){
    header("location:login.php");
  }
require("db/config.php");

$section_id = base64_decode( $_GET['section_id']);

$q = "select * from `section` where section_id= '$section_id'";
$result = mysqli_query($db, $q);
$section_data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $section = mysqli_real_escape_string($db,$_POST['section']);
    $class_id=mysqli_real_escape_string($db,$_POST['class_id']);
    $q = "update `section` set `section`='$section',`class_id`='$class_id' WHERE `section_id`='$section_id'";  
    $result = mysqli_query($db, $q);
        if ($result > 0) {
         $stat = 1;
        $re = base64_encode($stat);
        $_SESSION['status_msg'] = "Your changes to section information have been saved successfully.";
      header("location:manage-section.php?status_msg=$re");

          }else {
              $_SESSION['msg'] = "Something went wrong!!  "; 
          
          }
       }    
      
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2023 07:24:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RAWOSPHERE | EDIT SECTION</title>
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
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
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
                include('sidebar.php');
                ?>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Classes</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Edit Section</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Edit Section </h3>
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
                        <form method="POST" class="new-added-form" action="" enctype="multipart/form-data">
                            <?php
                            if (isset($_SESSION['msg'])) {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['msg']; ?>

                                </div>
                                <?php
                                unset($_SESSION['msg']);
                            }

                            if (isset($_SESSION['status'])) {
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['status']; ?>

                                </div>
                                <?php
                                unset($_SESSION['status']);
                            }

                            ?>
                            <div class="row">
                            <div class=" col-lg-6 col-12 form-group">
                                    
                                    <label>Class *</label>
                                    <select class="select2" name="class_id" required id="class_id">
                                        <option>Please Select Class *</option>
                                        <?php
                                        
                                        $b = "select * from `class` ";
                                        $resb = mysqli_query($db,$b);
                                        foreach($resb as $class){
                                        ?>
                                        <option <?php if($class['class_id'] == $section_data['class_id']){echo "selected";}?> value="<?php echo $class['class_id']; ?>"><?php echo $class['class_name']; ?></option>
                                        <?php
                                        }
                                    ?>
                                    </select>
                            </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Section *</label>
                                    <input type="text" placeholder=" Enter Section" class="form-control" name="section" required value="<?php echo $section_data['section']; ?>">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit"
                                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Update</button>
                                    <!-- <button type="reset"
                                        class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
                <footer class="footer-wrap-layout1">
                    <?php
                    include('footer.php');
                    ?>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2023 07:24:22 GMT -->

</html>