<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header('Location: login.php');
    exit();
}

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
    <!-- Assuming admin-user.css is the main admin dashboard stylesheet -->
    <link rel="stylesheet" href="css/admin-user.css">
    <link rel="stylesheet" href="css/guide.css">
    <style>
        /* Additional styling for this page if needed */
        .admin-container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            padding: 32px 40px;
        }
        .admin-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: #222;
            letter-spacing: 1px;
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }
        .admin-table th, .admin-table td {
            padding: 14px 12px;
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
        .approve-btn {
            background: #27ae60;
            color: #fff;
            border: none;
            padding: 8px 18px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.2s;
            text-decoration: none;
        }
        .approve-btn:hover {
            background: #219150;
        }
        .no-guides {
            color: #888;
            font-size: 1.1rem;
            margin-top: 16px;
        }
        @media (max-width: 600px) {
            .admin-container {
                padding: 16px 6px;
            }
            .admin-title {
                font-size: 1.3rem;
            }
            .admin-table th, .admin-table td {
                padding: 8px 4px;
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-title">Pending Guides for Approval</div>
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
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= htmlspecialchars($row['created_by']) ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                    <td>
                        <a href="?approve_id=<?= $row['id'] ?>" class="approve-btn" onclick="return confirm('Approve this guide?')">Approve</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="no-guides">There are no guides pending approval.</div>
        <?php endif; ?>
        <div style="margin-top: 24px;">
            <a href="admin.php" style="color:#2980b9;text-decoration:underline;">&larr; Back to Admin Dashboard</a>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>
