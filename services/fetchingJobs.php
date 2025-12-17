<?php


require_once __DIR__ . '/../db/config.php';
$token = getenv("TOKEN");
$secretKey = getenv("SECRET_KEY");
$timestamp = time();
$serverUrl = getenv("SEVER_URL");
$signature = hash_hmac('sha256', $token . $timestamp, $secretKey);
$apiUrl = $serverUrl . "/login/api/awardTenders.php?token=" . urlencode($token) . "&ts=" . $timestamp
    . "&sig=" . $signature;

// echo $apiUrl;

// Initialize cURL
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response instead of printing
curl_setopt($ch, CURLOPT_HTTPGET, true); // HTTP GET request

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Convert JSON response to PHP array
    $awardTenders = json_decode($response, true);
}


if (!$awardTenders || empty($awardTenders['data'])) {
    die("Invalid API response");
}


// ---------- PREPARE INSERT ONCE ----------
$stmt = mysqli_prepare(
    $conn,
    "INSERT IGNORE INTO user_job_request
    (
        j_id,
        job_name,
        devel_code,
        order_confirm_date,
        order_taken_by,
        name,
        email,
        phone_no,
        remark,
        created_date,
        status,
        costing_engineer,
        concerned_engineer,
        billing_status
    )
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'ACTIVE', ?, ?, ?)"
);

if (!$stmt) {
    die("Prepare failed: " . mysqli_error($conn));
}


foreach ($awardTenders['data'] as $row) {
    $j_id = preg_replace('/[^A-Za-z0-9_-]/', '', $row['tenderID']);
    $job_name = trim(strip_tags($row['name_of_work']));
    $devel_code = trim(strip_tags($row['department_name']));
    $order_confirm_date = date('Y-m-d H:i:s', strtotime($row['remarked_at']));
    $order_taken_by = trim(strip_tags($row['name']));
    $name = trim(strip_tags($row['name']));
    $email = filter_var($row['email_id'], FILTER_VALIDATE_EMAIL) ?: null;
    $phone = preg_replace('/\D/', '', $row['mobile']);
    $remark = trim(strip_tags($row['remark']));
    $created_date = date('Y-m-d H:i:s');


    // REQUIRED NOT NULL FIELDS (from schema)
    $costing_engineer = 'SYSTEM';
    $concerned_engineer = 'SYSTEM';
    $billing_status = 'PENDING';

    mysqli_stmt_bind_param(
        $stmt,
        "sssssssssssss",
        $j_id,
        $job_name,
        $devel_code,
        $order_confirm_date,
        $order_taken_by,
        $name,
        $email,
        $phone,
        $remark,
        $created_date,
        $costing_engineer,
        $concerned_engineer,
        $billing_status
    );

    if (!mysqli_stmt_execute($stmt)) {
        echo "Insert failed for Tender {$j_id}: " . mysqli_stmt_error($stmt) . "<br>";
    }

}

mysqli_stmt_close($stmt);
echo "Job sync completed successfully.";



?>