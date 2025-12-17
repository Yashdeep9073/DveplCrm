<?php
include("db/config.php");

$brand_id = base64_decode($_GET['id']);
$brand_id = mysqli_real_escape_string($conn, $brand_id);

$sql = "DELETE from tbl_brand where brand_id = '$brand_id'";
$result1 = mysqli_query($conn, $sql);

if (!$result1) {
    echo "Error: " . mysqli_error($conn);
}
header("Location: manage-brand.php");
?>