<?php
session_start();

unset($_SESSION['user_name']);
unset($_SESSION['csrf_token']);
session_destroy();


header('Location: index.php');
?>