<!-- filepath: c:\xampp\htdocs\diy\hapart\register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Save user data (for demonstration, no database is used)
    echo "<script>alert('Registration successful!'); window.location.href='index.php#login';</script>";
}
?>