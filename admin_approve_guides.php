<?php
session_start();

$host = 'localhost';
$db = 'masterdiy';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Approve guide if requested
if (isset($_GET['approve_id'])) {
    $approve_id = intval($_GET['approve_id']);
    $conn->query("UPDATE guides SET approved = 1 WHERE id = $approve_id");
    header("Location: admin_approve_guides.php");
    exit();
}

// Fetch unapproved guides
$result = $conn->query("SELECT id, title, created_by, created_at FROM guides WHERE approved = 0 ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Approve Guides</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/admin-dash.css">
    <style>
        .action-btn {
            padding: 7px 18px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .toggle-btn {
            background: #333;
            color: #fff;
        }
        .toggle-btn:hover {
            text-decoration: none;
            background: #555;
            color: #fff;
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
                <li><a class="admin-action-link" href="admin_approved_list.php">Approved Guides</a></li>
                <li><a class="admin-action-link" href="admin_approve_guides.php" style="background:#f5f6fa ;color:#333;">Pending Guides</a></li>
            </ul>
        </div>
        <hr>
        <br/>    
        <p class="section__text__p2">Pending Guides for Approval</p>
        <?php if ($result->num_rows > 0): ?>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr class="submitted-guide">
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= htmlspecialchars($row['created_by']) ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                    <td>
                        <a href="?approve_id=<?= $row['id'] ?>" class="action-btn toggle-btn" onclick="return confirm('Approve this guide?')">Approve</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="no-guides">There are no guides pending approval.</div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php $conn->close(); ?>
