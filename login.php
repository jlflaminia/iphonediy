
<?php
// session_start();
// $valid_username = "admin";
// $valid_password = "password";

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     if ($username === $valid_username && $password === $valid_password) {
//         $_SESSION["username"] = $username;
//         header("Location: index.php");
//         exit();
//     } else {
//         echo "<script>alert('Invalid username or password'); window.location.href='index.php';</script>";
//     }
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $username;
                header("Location: index.php");
                exit();
            } else {
                $error = "Incorrect password.";
            }
        } else {
            $error = "No user found with that username.";
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
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
</head>
<body>
<header>
</header>
<div class="log-cont">
<div class="modal-content">
    <h2 class="teks">Login</h2>

    <?php if ($error) echo "<p class='error-message'>$error</p>"; ?>

    <form method="POST" action="" class="login-form">
        <input class="login-input" type="text" id="username" name="username" placeholder="Username" required>
        <input class="login-input" type="password" id="password" name="password" placeholder="Password" required>
        
        <input class="login-btn" type="submit" value="Login">
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
</div>
</div>
</body>
</html>