
<?php
session_start();

// // Example admin check: assumes $_SESSION['is_admin'] is set at login
// if (!isset($_SESSION['username']) || !isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
//     // Not logged in or not admin
//     header("Location: login.php");
//     exit;
// }

// Database connection settings
$host = 'localhost';
$db = 'masterdiy';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all users
$sql = "SELECT id, username, is_admin FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Master DIY</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
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
            background: #007bff;
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
    <section id="admin-dashboard">
        <h1 class="title">Admin Dashboard</h1>
        <p class="section__text__p1">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <div class="admin-actions">
            <ul>
                <li><a href="#">Manage Users</a> (Coming Soon)</li>
                <li><a href="#">Manage Guides</a> (Coming Soon)</li>
                <li><a href="#">Site Settings</a> (Coming Soon)</li>
            </ul>
        </div>
        <hr>
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
                            <?php echo ($row['is_admin'] == 1) ? '<span class="admin-badge">Admin</span>' : 'User'; ?>
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
</body>
</html>
<?php
$conn->close();
?>
