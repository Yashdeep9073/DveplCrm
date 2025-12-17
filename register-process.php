<?php
session_start();
include "db/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['Username'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $status = $_POST['status'];
    $role = $_POST['role'];
    $password = md5($_POST['password']);

    date_default_timezone_set('Asia/Kolkata');

    // Get the current date in Asia/Kolkata timezone
    $createdDate = date('Y-m-d H:i:s A');

    $sql = "INSERT INTO tbl_admin (Username, email, password, status, mobile, created_date,admin_role)
        VALUES ('$name', '$email', '$password', '$status', '$phone', '$createdDate','$role')";

    $result = $conn->query($sql);

    if ($result) {
        $_SESSION['status'] = "a new user has been added.";
        header("Location: users.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method";
}


//Update user
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitButtonForEditUser'])) {

    $userName = $_POST['editUserName'];
    $userEmail = $_POST['editEmail'];
    $userPhone = $_POST['editPhoneNumber'];
    $userStatus = $_POST['editStatus'];
    $userRole = $_POST['editRoles'];
    $password = md5($_POST['editPassword']);
    $confirmPassword = $_POST['editConfirmPassword'];

    date_default_timezone_set('Asia/Kolkata');

    // Get the current date in Asia/Kolkata timezone
    $updatedDate = date('Y-m-d H:i:s A');

    // Assuming you have a user ID to identify which user to update
    $userId = base64_decode($_POST['userId']);

    $sql = "UPDATE tbl_admin SET 
        Username = '$userName', 
        email = '$userEmail', 
        password = '$password', 
        status = '$userStatus', 
        mobile = '$userPhone', 
        created_date = '$updatedDate', 
        admin_role = '$userRole' 
        WHERE _id = '$userId'";

    $result = $conn->query($sql);

    if ($result) {
        $_SESSION['status'] = "User details have been updated.";
        header("Location: users.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method";
}
?>