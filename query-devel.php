
<?php

session_start();
include('db/config.php');
$upload_directory ="drawing/";

$job_id = $_GET['job_id'];
$query_devel_edit = "SELECT ujr.*, tp.product_id, tp.product_name, tp.product_quantity, tp.product_price, tp.serial_no, tp.product_gst, tp.product_total, tp.product_total_amount 
FROM user_job_request ujr
INNER JOIN tbl_product tp ON ujr.job_id = tp.job_id
WHERE ujr.job_id = '$job_id'";
$result_devel_edit = mysqli_query($conn, $query_devel_edit);
$data_devel_edit = mysqli_fetch_assoc($result_devel_edit);
if (!isset($_POST['submit'])) {
    // Include your database connection file here
    // require_once 'db_connect.php';

    $remark = $_POST['remark'];
    $po_received_date = $_POST['po_received_date'];
    $po_generate_date = $_POST['po_generate_date'];
    $concerned_engineer = $_POST['concerned_engineer'];
    $costing_engineer = $_POST['costing_engineer'];

    $drawing_date = $_POST['drawing_date'];
    $modify_date = $_POST['modify_date'];
    $temp_name = $_FILES["uploaded_file"]["tmp_name"];
    $original_name = $_FILES["uploaded_file"]["name"];
    $file_size = $_FILES["uploaded_file"]["size"];
   
    // Check if file type is PDF
    $allowed_types = ["application/pdf"];
    $file_type = mime_content_type($temp_name);
    if (!in_array($file_type, $allowed_types)) {
        echo"erorr";
        // $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        //     <strong><i class='feather icon-check'></i>Error !</strong> Please Upload PDF File.
        //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        //         <span aria-hidden='true'>&times;</span>
        //     </button>
        // </div>";
    } else {
        if ($file_size < 5 * 1024 ) { // Check if file size is less than 2 MB
            $unique_filename = uniqid() . '_' . $original_name;

            // Delete the old file
            $query = "SELECT uploaded_file FROM user_job_request WHERE job_id='$job_id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            if (!empty($row['uploaded_file'])) {
                $old_file_path = "drawing/" . $row['uploaded_file']; // Path to the old file
                unlink($old_file_path);
            }

            move_uploaded_file($temp_name, $upload_directory . $unique_filename);

            $sql = "UPDATE user_job_request SET status = 'Fabrication', costing_engineer= '$costing_engineer',drawing_date ='$drawing_date',po_received_date = '$po_received_date',concerned_engineer = '$concerned_engineer', remark = '$remark', modify_date ='$modify_date', uploaded_file = '$unique_filename' ,po_generate_date = '$po_generate_date' WHERE job_id='$job_id'";
            echo "SQL Query: " . $sql . "<br>"; // Debugging: Print out the SQL query
            if ($conn->query($sql) === TRUE) {
                $stat = 1;
                $re = base64_encode($stat);
                $_SESSION['status_msg'] = "Design & Development has been Updated Successfully.";
                header("location: manage-development.php?status_msg=$re");
                exit(); // Add exit to stop further execution
            } else {
               echo"elese eroro";
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        <strong><i class='feather icon-check'></i>Error !</strong> File size exceeds the limit of 2MB.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        }
    }
}

?>