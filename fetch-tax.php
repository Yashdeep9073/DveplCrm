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
    if (isset($_POST['taxId']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $taxId = intval($_POST['taxId']); // Sanitize the input

        // Prepare the SQL statement
        $stmtFetchTax = $conn->prepare("SELECT * FROM tax
        WHERE tax_id = ?");
        $stmtFetchTax->bind_param("i", $taxId);

        // Execute the statement
        if (!$stmtFetchTax->execute()) {
            throw new Exception("Query execution failed: " . $stmtFetchTax->error);
        }

        // Get the result
        $resultTax = $stmtFetchTax->get_result();

        // Check if any product is found
        if ($resultTax->num_rows > 0) {
            $taxName = [];
            $taxValue = [];
            $status = [];
            // Fetch product details
            while ($rowStatus = $resultTax->fetch_assoc()) {
                $taxName[] = $rowStatus['tax_name'];
                $taxValue[] = $rowStatus['tax_value'];
                $status[] = $rowStatus['status'];
            }

            // Return success response
            echo json_encode([
                'success' => true,
                'taxName' => $taxName,
                'taxValue' => $taxValue,
                'status' => $status
            ]);
        } else {
            // Return error response if no product is found
            echo json_encode([
                'success' => false,
                'error' => 'No product found'
            ]);
        }

        // Close the statement
        $stmtFetchTax->close();
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