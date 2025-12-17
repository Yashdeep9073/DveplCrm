<?php
session_start();
require("db/config.php");
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Establish a database connection (replace placeholders with actual values)

    // Sanitize inputs (you may need more validation depending on your requirements)
    $from_email = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $from_email_name = mysqli_real_escape_string($conn, $_POST['from_email_name']);

    // Insert data into the database table
    $insert_query = mysqli_query($conn, "INSERT INTO email (email, password, from_email_name) 
                                       VALUES ('$from_email', '$password', '$from_email_name')");
    // Check if the insert query is successful
    if ($insert_query) {
        $_SESSION['status']=" Email Add successfully";
        // Redirect to a success page or do something else
        header("Location:email-settings.php");
        exit();
    } else {
        // Handle insert error
        echo "Error: " . mysqli_error($db);
    }
}
?>
