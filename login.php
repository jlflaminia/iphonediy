
<?php
session_start();
// $host = 'hapart.ctsqsqyign71.ap-southeast-1.rds.amazonaws.com';
// $db = 'masterdiy';
// $user = 'admin'; 
// $pass = 'jljeongyeon1'; 

$host = 'localhost';
$db = 'masterdiy';
$user = 'root';
$pass = 'root';

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
        // Fetch password and usertype from database
        $stmt = $conn->prepare("SELECT password, usertype FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password, $usertype);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = $usertype; 

                if ($usertype === 'admin') {
                    header("Location: admin.php");
                } else {
                    header("Location: index.php");
                }
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
    <link rel="shortcut icon" href="assets/ip-wlogo.png" type="image/x-icon">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
</head>
<body>
<header>
</header>
<div class="log-cont">
<div class="modal-content">

<?php
$registration_success = false;
if (isset($_GET['registered']) && $_GET['registered'] == 1) {
    $registration_success = true;
}
?>

<?php if ($registration_success): ?>
    <p>Registration successful! You can now log in.</p>
<?php endif; ?>

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
