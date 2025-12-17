<?php
include("db/config.php");

// Check if the currency_id is set in the URL
if(isset($_GET['currency_id'])) {
    // Decode and sanitize the currency_id
    $currency_id = base64_decode($_GET['currency_id']);
    $currency_id = mysqli_real_escape_string($conn, $currency_id);

    // Construct the SQL query to delete the currency
    $sql = "DELETE FROM currency_details WHERE currency_id = '$currency_id'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was executed successfully
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    }

    // Redirect back to currency-settings.php
    header("Location: currency-settings.php");
    exit; // Ensure that no further output is sent
} else {
    // If currency_id is not set in the URL, handle the situation accordingly
    echo "Currency ID not provided.";
}
?>
