<?php
header('Content-Type: application/json');
session_start();
require "./db/config.php";
error_reporting(E_ALL);

// Check if the user is logged in and CSRF token is set
if (!isset($_SESSION['user_name']) || !isset($_SESSION['csrf_token'])) {
    echo json_encode([
        'success' => false,
        'error' => 'Session expired or invalid'
    ]);
    exit();
}

try {
    // Check if the request method is POST and productId is set
    if (isset($_POST['user_Id']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $userId = base64_decode($_POST['user_Id']); // Sanitize the input

        // Prepare the SQL statement
        $stmtFetchUsers = $conn->prepare("SELECT * FROM tbl_admin
        WHERE _id = ?");
        $stmtFetchUsers->bind_param("i", $userId);

        // Execute the statement
        if (!$stmtFetchUsers->execute()) {
            throw new Exception("Query execution failed: " . $stmtFetchUsers->error);
        }

        // Get the result
        $resultUsers = $stmtFetchUsers->get_result();

        // Check if any product is found
        if ($resultUsers->num_rows > 0) {
            $users = [];
            $phone = [];
            $email = [];
            $role = [];
            $status = [];
            // Fetch product details
            while ($rowUsers = $resultUsers->fetch_assoc()) {
                $users[] = $rowUsers['Username'];
                $phone[] = $rowUsers['mobile'];
                $email[] = $rowUsers['email'];
                $role[] = $rowUsers['admin_role'];
                $status[] = $rowUsers['status'];
            }

            // Return success response
            echo json_encode([
                'success' => true,
                'username' => $users,
                'phone' => $phone,
                'email' => $email,
                'status' => $status,
                'role' => $role,
            ]);
        } else {
            // Return error response if no product is found
            echo json_encode([
                'success' => false,
                'error' => 'No users found'
            ]);
        }

        // Close the statement
        $stmtFetchUsers->close();
    } else {
        // Return error response for invalid request
        echo json_encode([
            'success' => false,
            'error' => 'Invalid request'
        ]);
    }
} catch (Exception $e) {
    // Return error response for any exception
    echo json_encode([
        'success' => false,
        'error' => 'An error occurred: ' . $e->getMessage()
    ]);
}
?>