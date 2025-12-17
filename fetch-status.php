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
    if (isset($_POST['statusId']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $statusId = intval($_POST['statusId']); // Sanitize the input

        // Prepare the SQL statement
        $stmtFetchStatus = $conn->prepare("SELECT * FROM user_status
        WHERE user_status_id = ?");
        $stmtFetchStatus->bind_param("i", $statusId);

        // Execute the statement
        if (!$stmtFetchStatus->execute()) {
            throw new Exception("Query execution failed: " . $stmtFetchStatus->error);
        }

        // Get the result
        $resultStatus = $stmtFetchStatus->get_result();

        // Check if any product is found
        if ($resultStatus->num_rows > 0) {
            $statusName = [];
            // Fetch product details
            while ($rowStatus = $resultStatus->fetch_assoc()) {
                $statusName[] = $rowStatus['user_status_name'];
            }

            // Return success response
            echo json_encode([
                'success' => true,
                'statusName' => $statusName
            ]);
        } else {
            // Return error response if no product is found
            echo json_encode([
                'success' => false,
                'error' => 'No product found'
            ]);
        }

        // Close the statement
        $stmtFetchStatus->close();
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