<?php
session_start();
include("db/config.php");
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $api_key = $_POST['api_key'];
    $api_secret_key = $_POST['api_secret_key'];
    $sender_id = $_POST['sender_id'];

    // Validate form data (you should perform more thorough validation)
        // Prepare SQL statement to insert data into the database
        $sql = "INSERT INTO sms_gateway(api_key, api_secret_key, sender_id)
                VALUES ('$api_key', '$api_secret_key', '$sender_id')";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            $_SESSION['status']= "SMS record created successfully";
            header("location :sms-gateway.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }

?>
