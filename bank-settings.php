<?php
error_reporting(0);
session_start();
include("db/config.php");
// Check if the form is submitted
if (isset($_POST['submit'])) {

    // Sanitize inputs (you may need more validation depending on your requirements)
    $bank_name = mysqli_real_escape_string($conn, $_POST['bank_name']);
    $account_number = mysqli_real_escape_string($conn, $_POST['account_number']);
    $account_name = mysqli_real_escape_string($conn, $_POST['account_name']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $ifsc = mysqli_real_escape_string($conn, $_POST['ifsc']);
    
    // Define default values for status and make_as_default
    $status = 1; // Assuming it's active by default
    $make_as_default = isset($_POST['make_default']) ? 1 : 0; // Check if the "Make as default" checkbox is checked

    // Insert data into the database table
    $insert_query = mysqli_query($conn, "INSERT INTO bank_account_details (bank_name, account_number, account_name, branch, ifsc, status) 
                                       VALUES ('$bank_name', '$account_number', '$account_name', '$branch', '$ifsc', '$status')");
    // Check if the insert query is successful
    if ($insert_query) {
        $_SESSION['status']=" Bank Account Add successfully.";
        
        // Redirect to a success page or do something else
        header("Location: bank-settings-grid.php");
        exit();
    } else {
        // Handle insert error
        echo "Error: " . mysqli_error($conn);
    }

}
?>
