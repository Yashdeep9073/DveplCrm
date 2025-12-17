<?php
include("config.php");

$id = base64_decode($_GET['id']);
$id = mysqli_real_escape_string($conn, $id);

$sql = "DELETE from add_parent_category where _id = '$id'";
$result = mysqli_query($conn, $sql);

header("Location: manage-parent-category.php");
?>