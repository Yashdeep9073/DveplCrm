<?php
include("db/config.php");
session_start();
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $currency_name = $_POST['currency_name'];
    $symbol = $_POST['symbol'];
    $code = $_POST['code'];
    $exchange_rate = $_POST['exchange_rate'];

    // Validate form data (you should perform more thorough validation

        // Set timezone to Asia/Kolkata
        date_default_timezone_set('Asia/Kolkata');
        $created_on = date('Y-m-d');

        // Prepare SQL statement to insert data into the database
        $sql = "INSERT INTO currency_details (currency_name, symbol, code, exchange_rate, created_on)
                VALUES ('$currency_name', '$symbol', '$code', '$exchange_rate', '$created_on')";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            $_SESSION['status']= "New record created successfully";
            header("location:currency-settings.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    
}
?>
