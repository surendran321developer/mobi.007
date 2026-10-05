<?php
session_start();

// Login uses hardcoded credentials — no DB needed
$valid_email          = "anbuan12345@gmail.com";
$hashed_valid_password = '$2y$10$Wz6Tyml8a1qN7rx8W1KR0.2dD/WYrl.xzC0VL29ChQDGmi6UNdiFi';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$email    = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

if ($email !== strtolower(trim($valid_email))) {
    echo "<script>alert('Email not found.');window.location.href='login.php';</script>";
    exit;
}

if (!password_verify($password, $hashed_valid_password)) {
    echo "<script>alert('Password is incorrect.');window.location.href='login.php';</script>";
    exit;
}

echo "<script>alert('Login successful!');window.location.href='index.php';</script>";
