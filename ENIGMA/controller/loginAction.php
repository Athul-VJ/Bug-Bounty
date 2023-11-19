<?php
include('../model/class.php');
session_start();

// Input validation for username and password
$username = isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8') : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Set security headers
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com;");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");

$obj = new operation();
$obj->login($username, $password);
$result = $obj->executeQuery();
$count = $result->num_rows;

if ($count == 1) {
    $obj->details($username);
    $result = $obj->executeQuery();
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row["id"];
    $_SESSION['name'] = $row["name"];
    $_SESSION['college'] = $row["college"];
    $_SESSION['username'] = $row["username"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['avatar'] = $row["avatar"];
    
    header('location:../views/profile.php');
} else {
    header('location:../views/main.php?id=1');
}
?>
