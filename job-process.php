<?php
session_start();
require 'db/config.php';
require './vendor/autoload.php';
require 'env.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit(); // Stop the script execution
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Sanitize input data
        $j_id = filter_input(INPUT_POST, 'j_id', FILTER_SANITIZE_STRING);
        $po_date = filter_input(INPUT_POST, 'po_date', FILTER_SANITIZE_STRING);
        $job_name = filter_input(INPUT_POST, 'job_name', FILTER_SANITIZE_STRING);
        $name1 = filter_input(INPUT_POST, 'name1', FILTER_SANITIZE_STRING);
        $devel_code = filter_input(INPUT_POST, 'devel_code', FILTER_SANITIZE_STRING);
        $order_confirm_date = filter_input(INPUT_POST, 'order_confirm_date', FILTER_SANITIZE_STRING);
        $concerned_engineer = filter_input(INPUT_POST, 'concerned_engineer', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone_no = filter_input(INPUT_POST, 'phone_no', FILTER_SANITIZE_STRING);
        // $item_no = filter_input(INPUT_POST, 'item_no', FILTER_SANITIZE_STRING);
        // $gst = filter_input(INPUT_POST, 'gst', FILTER_SANITIZE_STRING);
        $amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING);
        // $total = filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);
        $total_amount = filter_input(INPUT_POST, 'total_amount', FILTER_SANITIZE_STRING);
        $advance = filter_input(INPUT_POST, 'advance', FILTER_SANITIZE_STRING);
        $balance = filter_input(INPUT_POST, 'balance', FILTER_SANITIZE_STRING);
        $po_payment = filter_input(INPUT_POST, 'po_payment', FILTER_SANITIZE_STRING);
        $po_no = filter_input(INPUT_POST, 'po_no', FILTER_SANITIZE_STRING);
        $ca_no = filter_input(INPUT_POST, 'ca_no', FILTER_SANITIZE_STRING);
        $billing_address = filter_input(INPUT_POST, 'billing_address', FILTER_SANITIZE_STRING);
        $billing_gst = filter_input(INPUT_POST, 'billing_gst', FILTER_SANITIZE_STRING);
        $shipping_address = filter_input(INPUT_POST, 'shipping_address', FILTER_SANITIZE_STRING);
        $shipping_gst = filter_input(INPUT_POST, 'shipping_gst', FILTER_SANITIZE_STRING);
        $order_taken_by = filter_input(INPUT_POST, 'order_taken_by', FILTER_SANITIZE_STRING);
        // $quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);
        $status = 'Request'; // Set status to 'Request' by default
        $remark = filter_input(INPUT_POST, 'remark', FILTER_SANITIZE_STRING);
        $costing_engineer = filter_input(INPUT_POST, 'costing_engineer', FILTER_SANITIZE_STRING);
        date_default_timezone_set('Asia/Kolkata');
        $created_date = date("M d-Y");

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        // Email OTP
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();
            $mail->Host = getenv('SMTP_HOST'); // Hostinger SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = getenv('SMTP_USER_NAME');
            $mail->Password = getenv('SMTP_PASSCODE');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = getenv('SMTP_PORT');

            $mail->setFrom(getenv('SMTP_USER_NAME'), 'Dvepl');
            $mail->addAddress($email, 'Recepient Name');

            $mail->isHTML(true);
            $mail->Subject = 'Purchase Order (PO) from Dvepl';
            $mail->Body = '
            <div style="font-family: Arial, sans-serif; color: #333; background-color: #f3f4f6; padding: 30px;">
                <div style="text-align: center; padding-bottom: 25px;">
                    <img style="max-width: 200px; height: auto;" src="https://vibrantick.org/CRM/assets/img/logo.png" alt="Dvepl Logo">
                </div>
                <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
                    <h2 style="text-align: center; color: #007bff;">Your Purchase Order (PO) from Dvepl</h2>
                    <p>Dear [Customer Name],<br/><br/>
                        Thank you for your recent order with <b>Dvepl</b>! We are pleased to inform you that your Purchase Order has been successfully processed. Below are the details of your order:</p>
                    <div style="background-color: #f1f8ff; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <h3 style="color: #007bff; text-align: center;">Order Details</h3>
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">PO Number:</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">[PO Number]</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Order Date:</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">[Order Date]</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Total Amount:</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">[Total Amount]</td>
                            </tr>
                        </table>
                    </div>
                    <p>If you have any questions regarding your order or require further assistance, please feel free to contact us:</p>
                    <div>
                        <b>Dvepl</b><br/>
                        Mobile: <a href="tel:+123456789" style="color: #007bff;">+123456789</a> / 
                        <a href="tel:+123456789" style="color: #007bff;">+123456789</a><br/>
                        Email: <a href="mailto:info@dvepl.in" style="color: #007bff;">info@dvepl.org</a><br/>
                        Website: <a href="https://test.org" style="color: #007bff;">www.test.org/jpcrm</a>
                    </div>
                    <p>We appreciate your business and look forward to serving you again!</p>
                </div>
            </div>
        ';

            $mail->send();
        } catch (Exception $e) {
            error_log("Mailer Error: {$mail->ErrorInfo}");
            echo "An error occurred while processing your request.";
        }


        // File upload handling
        $po_file_directory = "po_file/"; // Directory to store PDF files
        $po_file_path = $po_file_directory . basename($_FILES["po_file"]["name"]); // Construct file path
        $po_file_type = strtolower(pathinfo($po_file_path, PATHINFO_EXTENSION)); // Get file extension

        // Check file size (5 MB limit)
        if ($_FILES["po_file"]["size"] > 10 * 1024 * 1024) {
            // echo "Error: File size exceeds the limit of 5 MB.";
            $_SESSION['errorSizeMessage'] = "File size exceeds the limit of 5 MB.";
            header("Location: add-job.php");
            exit();
        }
        // Check if file is a PDF
        if ($po_file_type != "pdf") {
            // echo "Error: Only PDF files are allowed.";
            $_SESSION['errorMsg'] = "Only PDF files are allowed.";
            header("Location: add-job.php");
            exit();
        }


        // Move uploaded file to directory
        if (!move_uploaded_file($_FILES["po_file"]["tmp_name"], $po_file_path)) {
            echo "Error uploading file.";
            exit();
        }

        // Insert data into user_job_request table
        $sql = "INSERT INTO user_job_request (j_id, po_date, job_name, devel_code, amount, ca_no, order_confirm_date, order_taken_by, name, email, phone_no, total_amount, advance, balance, po_payment, po_no,status, remark, created_date, name1, po_file,billing_address, billing_gst, shipping_address, shipping_gst,costing_engineer, concerned_engineer)
                VALUES ('$j_id', '$po_date', '$job_name', '$devel_code', '$amount', '$ca_no', '$order_confirm_date', '$order_taken_by', '$name', '$email', '$phone_no', '$total_amount', '$advance', '$balance', '$po_payment', '$po_no', '$status', '$remark', '$created_date', '$name1', '$po_file_path','$billing_address','$billing_gst','$shipping_address','$shipping_gst','$concerned_engineer', '$costing_engineer')";

        if ($conn->query($sql) === TRUE) {
            $lastInsertedJobId = mysqli_insert_id($conn); // Get the last inserted ID

            // Insert product details into tbl_product table
            if (isset($_POST['product_name']) && isset($_POST['product_quantity']) && isset($_POST['product_price'])) {
                // Loop through product details arrays
                foreach ($_POST['product_name'] as $index => $product_name) {
                    // Sanitize input
                    $product_quantity = filter_var($_POST['product_quantity'][$index], FILTER_SANITIZE_STRING);
                    $product_price = filter_var($_POST['product_price'][$index], FILTER_SANITIZE_STRING);
                    $product_gst = filter_var($_POST['product_gst'][$index], FILTER_SANITIZE_STRING);
                    $serial_no = filter_var($_POST['serial_no'][$index], FILTER_SANITIZE_STRING);
                    $product_total_amount = filter_var($_POST['product_total_amount'][$index], FILTER_SANITIZE_STRING);

                    // Insert product details into tbl_product table
                    $product_sql = "INSERT INTO tbl_product (product_name, product_quantity, product_price, product_gst, serial_no, product_total_amount, job_id,concern_engineers,costing_engineers)
                                    VALUES ('$product_name', '$product_quantity', '$product_price', '$product_gst', '$serial_no', '$product_total_amount', '$lastInsertedJobId','$concerned_engineer', '$costing_engineer')";
                    if ($conn->query($product_sql) !== TRUE) {
                        echo "Error inserting product: " . $conn->error;
                    }
                }
            }

            $_SESSION['status'] = "The new job and associated products have been submitted.";
            header("Location: manage-check-feasibility.php");
            exit();
        } else {
            echo "Error inserting job request: " . $conn->error;
        }
    } else {
        echo "Error: Invalid request.";
    }
    $conn->close();
}


?>