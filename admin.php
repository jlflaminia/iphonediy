
<?php
session_start();

$host = 'localhost';
$db = 'masterdiy';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Security: Only allow admin users
if (!isset($_SESSION['username']) || !isset($_SESSION['usertype']) || $_SESSION['usertype'] !== 'admin') {
    header('Location: login.php');
    exit();
}

// Handle delete action only
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_id'])) {
        $delete_id = intval($_POST['delete_id']);
        $stmt = $conn->prepare("DELETE FROM guides WHERE id = ?");
        $stmt->bind_param("i", $delete_id);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch all submitted guides (pending, approved, declined)
$query = "SELECT id, title, device, part, created_by, created_at, approval_status FROM guides ORDER BY created_at DESC";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - iPhone DIY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/iphone-x.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
    <link rel="stylesheet" href="css/admin-dash.css" />
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
                <li><a class="admin-action-link" href="admin.php" style="background:#f5f6fa ;color:#333;">Submitted Guides</a></li>
                <li><a class="admin-action-link" href="admin-user.php">Manage Users</a></li>
                <li><a class="admin-action-link" href="admin_approved_list.php">Approved Guides</a></li>
                <li><a class="admin-action-link" href="admin_approve_guides.php">Pending Guides</a></li>
            </ul>
        </div>
        <hr>
        <br/>
        <p class="section__text__p2">Submitted Guides</p>
        <?php if ($result->num_rows > 0): ?>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Device</th>
                    <th>Part</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th style="text-align:center;">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= htmlspecialchars($row['device']) ?></td>
                    <td><?= htmlspecialchars($row['part']) ?></td>
                    <td><?= htmlspecialchars($row['created_by']) ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                    <td class="actions-cell">
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="delete_id" value="<?= $row['id'] ?>">
                            <button type="submit" class="action-btn delete-btn" onclick="return confirm('Delete this guide?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="no-guides">There are no submitted guides.</div>
        <?php endif; ?>
    </div>
    <footer>
        <p>&copy; <?= date('Y') ?> Master DIY. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>

</body>
</html>
<?php
$conn->close();
?>
