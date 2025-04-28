<!-- filepath: c:\xampp\htdocs\diy\hapart\login.php -->
<?php
session_start();

// Dummy credentials for demonstration
$valid_username = "admin";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='index.php';</script>";
    }
}
?>