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
    if (isset($_POST['productId']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $productID = intval($_POST['productId']); // Sanitize the input

        // Prepare the SQL statement
        $stmtFetchProduct = $conn->prepare("SELECT * FROM tbl_product
        INNER JOIN user_job_request ON tbl_product.job_id = user_job_request.job_id 
        WHERE tbl_product.product_id = ?");
        $stmtFetchProduct->bind_param("i", $productID);

        $stmtFetchEngineers = $conn->prepare("SELECT * FROM tbl_admin WHERE admin_role = 'Engineer'");
        $stmtFetchEngineers->execute();
        $resultEngineers = $stmtFetchEngineers->get_result();

        // Execute the statement
        if (!$stmtFetchProduct->execute()) {
            throw new Exception("Query execution failed: " . $stmtFetchProduct->error);
        }

        // Get the result
        $resultProduct = $stmtFetchProduct->get_result();

        // Check if any product is found
        if ($resultProduct->num_rows > 0) {
            $productSerialNumber = [];
            $productName = [];
            $productQuantity = [];
            $productPrice = [];
            $productGst = [];
            $productTotalAmount = [];
            $concernedEngineer = [];
            $costingEngineer = [];
            $engineers = [];
            $productRemarks = [];

            // Fetch product details
            while ($productDetails = $resultProduct->fetch_assoc()) {
                $productSerialNumber[] = $productDetails['serial_no'];
                $productName[] = $productDetails['product_name'];
                $productQuantity[] = $productDetails['product_quantity'];
                $productPrice[] = $productDetails['product_price'];
                $productGst[] = $productDetails['product_gst'];
                $productTotalAmount[] = $productDetails['product_total_amount'];
                $concernedEngineer[] = $productDetails['concern_engineers'];
                $costingEngineer[] = $productDetails['costing_engineers'];
                $productRemarks[] = $productDetails['tbl_product_remarks'];
                $productRemarkDate[] = $productDetails['tbl_product_date'];
            }

            // Fetch Engineers details
            while ($engineersDetails = $resultEngineers->fetch_assoc()) {
                $engineers[] = $engineersDetails['Username'];
            }

            // Return success response
            echo json_encode([
                'success' => true,
                'productserialnumber' => $productSerialNumber,
                'productname' => $productName,
                'productquantity' => $productQuantity,
                'productprice' => $productPrice,
                'productgst' => $productGst,
                'producttotalamount' => $productTotalAmount,
                'concernedengineer' => $concernedEngineer,
                'costingengineer' => $costingEngineer,
                'productRemarks' => $productRemarks,
                'productRemarkDate' => $productRemarkDate,
                'engineers' => $engineers
            ]);
        } else {
            // Return error response if no product is found
            echo json_encode([
                'success' => false,
                'error' => 'No product found'
            ]);
        }

        // Close the statement
        $stmtFetchProduct->close();
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