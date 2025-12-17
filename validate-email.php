<?php
session_start();
include "db/config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email']) && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        // Perform email validation logic here
        // For example, check if the email exists in the database
        $sql = "SELECT * FROM tbl_admin WHERE email = '$email' AND status = 1";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Email is valid.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Email is not valid.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
    }
}
?>