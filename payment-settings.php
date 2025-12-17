<?php
session_start();
include("db/config.php");
// Check if the form is submitted
if (isset($_POST['payment_email'], $_POST['api_key'], $_POST['secret_key'])) {
    // Establish a database connection (replace placeholders with actual values)

    // Sanitize inputs (you may need more validation depending on your requirements)
    $payment_email = mysqli_real_escape_string($conn, $_POST['payment_email']);
    $api_key = mysqli_real_escape_string($conn, $_POST['api_key']);
    $secret_key = mysqli_real_escape_string($conn, $_POST['secret_key']);

    // Insert data into the database table
    $insert_query = mysqli_query($conn, "INSERT INTO payment_gateway (payment_email, api_key, secret_key) 
                                       VALUES ('$payment_email', '$api_key', '$secret_key')");
    // Check if the insert query is successful
    if ($insert_query) {
        $_SESSION['status']="Payment Settings Updated Successfully.";
        // Redirect to a success page or do something else
        header("Location: payment-gateway-settings.php");
        exit();
    } else {
        // Handle insert error
        echo "Error: " . mysqli_error($conn);
    }
}
?>
