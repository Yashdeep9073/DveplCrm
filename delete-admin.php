<?php
include("db/config.php");

$id = base64_decode($_GET['id']);
$id = mysqli_real_escape_string($conn, $id);

$sql = "DELETE from tbl_admin where _id = '$id'";
$result1 = mysqli_query($conn, $sql);

header("Location: users.php");
?>