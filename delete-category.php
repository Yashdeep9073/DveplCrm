<?php
include("db/config.php");

$category_id = base64_decode($_GET['id']);
$category_id = mysqli_real_escape_string($conn, $category_id);

$sql = "DELETE FROM tbl_category WHERE category_id = '$category_id'";
$result = mysqli_query($conn, $sql);

header("Location: manage-category.php");

?>