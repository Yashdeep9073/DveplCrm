<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php";

function updateInventory($productId, $productName, $quantity) {
    global $conn;

    $checkProductSql = "SELECT * FROM inventory WHERE product_id = $productId";
    $result = $conn->query($checkProductSql);
    
    if ($result->num_rows > 0) {

        $updateProductSql = "UPDATE inventory SET quantity_in_stock = quantity_in_stock + $quantity WHERE product_id = $productId";
        
        if (!$conn->query($updateProductSql)) {
            echo "Update product failed: " . $conn->error;
        }
        
        $recordTransactionSql = "INSERT INTO add_inventory (product_id, transaction_type, quantity) VALUES ($productId, 'IN', $quantity)";
        
        if (!$conn->query($recordTransactionSql)) {
            echo "Record transaction failed: " . $conn->error;
        }
        
        header("Location: update_inventory.php");
        exit();
    } 
    else 
    {
        $insertProductSql = "INSERT INTO inventory (product_id, product_name, quantity_in_stock) VALUES ($productId, '$productName', $quantity)";
        
        if (!$conn->query($insertProductSql)) {
            echo "Insert product failed: " . $conn->error;
        }
        
        $recordTransactionSql = "INSERT INTO add_inventory (product_id, transaction_type, quantity) VALUES ($productId, 'IN', $quantity)";
        
        if (!$conn->query($recordTransactionSql)) {
            echo "Record transaction failed: " . $conn->error;
        }
        
        header("Location: update_inventory.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["product_id"];
    $productName = $_POST["product_name"];
    $quantity = $_POST["quantity"];

    updateInventory($productId, $productName, $quantity);
}

$conn->close();

?>