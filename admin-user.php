
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

// Security: Only allow admin users
if (!isset($_SESSION['username']) || !isset($_SESSION['usertype']) || $_SESSION['usertype'] !== 'admin') {
    header('Location: login.php');
    exit();
}

// Handle usertype change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toggle_usertype'], $_POST['user_id'])) {
    $user_id = intval($_POST['user_id']);
    // Prevent admin from changing their own role
    if ($user_id != $_SESSION['user_id']) {
        // Get current usertype
        $stmt = $conn->prepare("SELECT usertype FROM users WHERE id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->bind_result($current_type);
        if ($stmt->fetch()) {
            $new_type = ($current_type === 'admin') ? 'user' : 'admin';
            $stmt->close();

            $update = $conn->prepare("UPDATE users SET usertype = ? WHERE id = ?");
            $update->bind_param("si", $new_type, $user_id);
            $update->execute();
            $update->close();
        } else {
            $stmt->close();
        }
    }
    // Redirect to avoid form resubmission
    header("Location: admin-user.php");
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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
    <style>
        body {
            background: #f6f8fa;
            margin: 0;
            padding: 0;
        }
        .admin-container {
            max-width: 900px;
            margin: 40px auto 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 36px 40px 32px 40px;
        }
        .admin-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 18px;
            color: #222;
            letter-spacing: 1px;
            text-align: center;
        }
        .admin-actions {
            margin-bottom: 18px;
        }
        .admin-actions ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 24px;
        }
        .admin-actions li {
            display: inline-block;
        }
        .admin-actions a {
            color: #2980b9;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.08rem;
            transition: color 0.2s;
        }
        .admin-actions a:hover {
            color: #1a5a8a;
            text-decoration: underline;
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
            background: #fff;
        }
        .admin-table th, .admin-table td {
            padding: 13px 12px;
            text-align: left;
        }
        .admin-table th {
            background: #f5f6fa;
            color: #333;
            font-weight: 600;
            border-bottom: 2px solid #e0e0e0;
        }
        .admin-table tr {
            border-bottom: 1px solid #e0e0e0;
        }
        .admin-table tr:last-child {
            border-bottom: none;
        }
        .badge {
            display: inline-block;
            padding: 3px 12px;
            border-radius: 12px;
            font-size: 0.97em;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .badge-admin {
            background: #2980b9;
            color: #fff;
        }
        .badge-user {
            background: #888;
            color: #fff;
        }
        .actions-cell {
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }
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
            background: #27ae60;
            color: #fff;
        }
        .toggle-btn:hover {
            background: #219150;
        }
        .toggle-btn[disabled] {
            background: #ccc;
            color: #fff;
            cursor: not-allowed;
        }
        .no-users {
            color: #888;
            font-size: 1.1rem;
            margin-top: 24px;
            text-align: center;
        }
        @media (max-width: 800px) {
            .admin-container {
                padding: 18px 4px;
            }
            .admin-title {
                font-size: 1.3rem;
            }
            .admin-table th, .admin-table td {
                padding: 8px 4px;
                font-size: 0.97rem;
            }
            .admin-actions ul {
                flex-direction: column;
                gap: 10px;
            }
        }
        nav#desktop-nav, nav#hamburger-nav {
            background: #222;
            color: #fff;
            padding: 0.7rem 0;
        }
        nav .logo {
            font-size: 1.3rem;
            font-weight: 700;
            margin-left: 2rem;
        }
        nav .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            margin-right: 2rem;
        }
        nav .nav-links li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        nav .nav-links li a:hover {
            color: #f1c40f;
        }
        footer {
            text-align: center;
            color: #888;
            font-size: 1rem;
            margin-top: 40px;
            padding: 18px 0 10px 0;
            background: #f5f6fa;
        }
        .back-link {
            color: #2980b9;
            margin-left: 0;
            text-decoration: underline;
            font-size: 1.05rem;
            display: inline-block;
            margin-bottom: 18px;
        }
        .back-link:hover {
            color: #1a5a8a;
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
    <nav id="hamburger-nav" style="display:none;">
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
        <a href="admin.php" class="back-link">&larr; Back to Guide Management</a>
        <div class="admin-title">User Management</div>
        <div class="admin-actions">
            <ul>
                <li><a href="admin-user.php">Manage Users</a></li>
                <li><a href="admin_approve_guides.php">Approve Guides</a></li>
            </ul>
        </div>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th style="text-align:center;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                        <td>
                            <?php if ($row['usertype'] === 'admin'): ?>
                                <span class="badge badge-admin">Admin</span>
                            <?php else: ?>
                                <span class="badge badge-user">User</span>
                            <?php endif; ?>
                        </td>
                        <td class="actions-cell">
                            <?php
                            $current_user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
                            if ($current_user_id === null || $row['id'] != $current_user_id):
                            ?>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="toggle_usertype" value="1">
                                    <button type="submit" class="action-btn toggle-btn">
                                        Make <?php echo ($row['usertype'] === 'admin') ? 'User' : 'Admin'; ?>
                                    </button>
                                </form>
                            <?php else: ?>
                                <button class="action-btn toggle-btn" disabled>Yourself</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4" class="no-users">No users found.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; <?= date('Y') ?> Master DIY. All Rights Reserved.</p>
    </footer>
    <script>
        // Simple hamburger menu toggle for mobile
        function toggleMenu() {
            var menu = document.querySelector('.menu-links');
            if (menu) {
                menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
            }
        }
    </script>
</body>
</html>
<?php
$conn->close();
?>
