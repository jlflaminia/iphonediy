

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

// Handle approve or delete actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['approve_id'])) {
        $approve_id = intval($_POST['approve_id']);
        $stmt = $conn->prepare("UPDATE guides SET approval_status = 'approved' WHERE id = ?");
        $stmt->bind_param("i", $approve_id);
        $stmt->execute();
        $stmt->close();
    }
    if (isset($_POST['delete_id'])) {
        $delete_id = intval($_POST['delete_id']);
        $stmt = $conn->prepare("DELETE FROM guides WHERE id = ?");
        $stmt->bind_param("i", $delete_id);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch all guides with approval status
$query = "SELECT id, title, device, part, created_by, created_at, approval_status FROM guides ORDER BY created_at DESC";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Guide Approval - iPhone DIY</title>
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
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
        .pending-badge {
            color: #fff;
            background: orange;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.9em;
        }
        .approved-badge {
            color: #fff;
            background: green;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.9em;
        }
        .action-btn {
            margin-right: 8px;
            padding: 4px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .approve-btn {
            background: #4CAF50;
            color: #fff;
        }
        .delete-btn {
            background: #f44336;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">iPhone DIY Admin</div>
        <div>
            <ul class="nav-links">
                <li><a href="admin.php">Admin Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <section id="admin-guides">
        <h1 class="title">Guide Approval & Management</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Device</th>
                <th>Part</th>
                <th>Created By</th>
                <th>Created At</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                        <td><?php echo htmlspecialchars($row['device']); ?></td>
                        <td><?php echo htmlspecialchars($row['part']); ?></td>
                        <td><?php echo htmlspecialchars($row['created_by']); ?></td>
                        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                        <td>
                            <?php
                                if ($row['approval_status'] === 'approved') {
                                    echo '<span class="approved-badge">Approved</span>';
                                } else {
                                    echo '<span class="pending-badge">Pending</span>';
                                }
                            ?>
                        </td>
                        <td>
                            <?php if ($row['approval_status'] !== 'approved'): ?>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="approve_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="action-btn approve-btn">Approve</button>
                                </form>
                            <?php endif; ?>
                            <form method="post" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this guide?');">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="action-btn delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="8">No guides found.</td></tr>
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
