
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

// Fetch approved guides
$result = $conn->query("SELECT id, title, created_by, created_at FROM guides WHERE approved = 1 ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Approved Guides</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin-user.css">
    <link rel="stylesheet" href="css/guide.css">
    <style>
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
        <div class="admin-title">Approved Guides</div>
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
