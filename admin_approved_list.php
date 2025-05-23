
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['usertype'] !== 'admin') {
    header('Location: login.php');
    exit();
}

$host = 'localhost';
$db = 'masterdiy';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch approved guides
$result = $conn->query("SELECT id, title, created_by, created_at FROM guides WHERE approved = 1 ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Approved Guides</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/admin-dash.css">
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
                        <li><a href="logout.php" onclick="toggleMenu()">Logout</a></li>            
                </div>
            </div>
    </nav>
    <div class="admin-container">
        <div class="title">Dashboard</div>
        <p class="section__text__p1">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <br/>
        <div class="admin-actions">
            <ul class="admin-actions-list">
                <li><a class="admin-action-link" href="admin.php">Submitted Guides</a></li>
                <li><a class="admin-action-link" href="admin-user.php">Manage Users</a></li>
                <li><a class="admin-action-link" href="admin_approved_list.php" style="background:#f5f6fa ;color:#333;">Approved Guides</a></li>
                <li><a class="admin-action-link" href="admin_approve_guides.php">Pending Guides</a></li>
            </ul>
        </div>
        <hr>
        <br/>    
        <p class="section__text__p2">Approve Guides</p>
        <?php if ($result->num_rows > 0): ?>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= htmlspecialchars($row['created_by']) ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="no-guides">There are no approved guides.</div>
        <?php endif; ?>
        <div style="margin-top: 24px;">
            <a href="admin.php" style="color:#2980b9;text-decoration:underline;">&larr; Back to Admin Dashboard</a>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>
