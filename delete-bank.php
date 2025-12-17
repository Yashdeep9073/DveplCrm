<?php
include("db/config.php");

$bank_id = base64_decode($_GET['bank_id']);
$bank_id = mysqli_real_escape_string($conn, $brand_id);

$sql = "DELETE from bank_account_details where bank_id = '$brand_id'";
$result1 = mysqli_query($conn, $sql);

if (!$result1) {
    echo "Error: " . mysqli_error($conn);
}
header("Location: bank-settings-grid.php");
?>