<?php
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $confirm_password = $_POST["confirm_password"];
//     $email = $_POST["email"];

//     echo "<script>alert('Registration successful!'); window.location.href='index.php#login';</script>";
// }

session_start();
$host = 'localhost';
$db = 'masterdiy';
$user = 'root'; 
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username)) {
        $error = "Username is required.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters long.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Username already exists. Please choose another.";
        } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            header("Location: login.php?registered=1");
                exit;
            // $success = "Registration successful! You can now log in.";
        } else {
            $error = "Username already exists. Please choose another.";
        }
    }
        $stmt->close();
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/ip-wlogo.png" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
</head>
<body>
<header>
</header>
<div class="log-cont">
<div class="modal-content">
    <h2 class="teks">Register</h2>

    <?php if ($error) echo "<p class='error-message'>$error</p>"; ?>
    <?php if ($success) echo "<p class='success-message'>$success</p>"; ?>

    <form method="POST" action="" class="login-form">

        <input class="login-input" type="text" id="username" name="username" placeholder="Username" required>
        
        <input class="login-input" type="password" id="password" name="password" placeholder="Password" required>
        
        <input class="login-input" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
        
        <input class="login-btn" type="submit" value="Register">
    </form>

    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</div>
</div>
</body>
</html>