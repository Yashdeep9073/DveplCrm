<?php

session_start();
include("db/config.php");

$job_id = $_GET['job_id'];

$sql = "DELETE from user_job_request where job_id = '$job_id'";
$result = mysqli_query($conn, $sql);

header("location:manage-testing.php");


?>