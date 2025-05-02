
<?php
session_start();

$host = 'hapart.ctsqsqyign71.ap-southeast-1.rds.amazonaws.com';
$db = 'masterdiy';
$user = 'admin';
$pass = 'jljeongyeon1';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Security: Only allow admin users
if (!isset($_SESSION['username']) || !isset($_SESSION['usertype']) || $_SESSION['usertype'] !== 'admin') {
    header('Location: login.php');
    exit();
}

// Fetch all users
$query = "SELECT id, username, usertype FROM users";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - iPhone DIY</title>
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
    <!-- <link rel="stylesheet" href="admin-dash.css"> -->
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background: #f2f2f2;
        }
        .admin-badge {
            color: #fff;
            background: grey;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">iPhone DIY Admin</div>
        <div>
            <ul class="nav-links">
                <li><a href="index.php">Main Site</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <nav id="hamburger-nav">
      <div class="logo">iPhone DIY Admin</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="index.php" onclick="toggleMenu()">Main Site</a></li>
          <li><a href="logout.php" onclick="toggleMenu()">Lagout</a></li>
        </div>
      </div>
    </nav>

    <section id="admin-dashboard">
        <h1 class="title">Dashboard</h1>
        <p class="section__text__p1">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <div class="admin-actions">
            <ul>
                <li><a href="#">Manage Users</a></li>
                <br/>
                <li><a href="#">Site Settings</a></li>
            </ul>
            <br/>
        </div>
        <hr>
        <br/>
        <h2>Registered Users</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                        <td>
                            <?php echo ($row['usertype'] === 'admin') ? '<span class="admin-badge">Admin</span>' : 'User'; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="3">No users found.</td></tr>
            <?php endif; ?>
        </table>
    </section>
    <footer>
        <p>Copyright &#169; 2025 Master DIY. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
<?php
$conn->close();
?>
