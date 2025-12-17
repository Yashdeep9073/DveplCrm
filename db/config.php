<?php
require_once __DIR__ . '/../env.php';


$host = getenv('DB_SERVER');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_NAME');

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "SELECT * FROM `tbl_setting`";
$result = mysqli_query($conn, $query);
$data1 = mysqli_fetch_assoc($result);
$logo_id = $data1['logo_id'];
$upload_directory = "logo/";
$faviupload_directory = "favicon/";


?>