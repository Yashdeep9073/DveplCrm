<?php
session_Start();
require("db/config.php");
// Check if the form is submitted
if (isset($_POST['smtp_email'], $_POST['pass'], $_POST['host'], $_POST['port'])) {
    // Establish a database connection (replace placeholders with actual values)
   
    // Sanitize inputs (you may need more validation depending on your requirements)
    $smtp_email = mysqli_real_escape_string($conn, $_POST['smtp_email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $host = mysqli_real_escape_string($conn, $_POST['host']);
    $port = mysqli_real_escape_string($conn, $_POST['port']);

    // Insert data into the database table
    $insert_query = mysqli_query($conn, "INSERT INTO smtp_email (smtp_email, pass, host, port) 
                                       VALUES ('$smtp_email', '$password', '$host', '$port')");
    // Check if the insert query is successful
    if ($insert_query) {
        $_SESSION['status']="SMTP settings updated successfully.";
        // Redirect to a success page or do something else
        header("Location: email-settings.php");
        exit();
    } else {
        // Handle insert error
        echo "Error: " . mysqli_error($conn);
    }

}
?>
