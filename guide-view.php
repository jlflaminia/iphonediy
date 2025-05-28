
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

$guide = null;
$guide_id = null;
$comment_error = '';

// Handle comment deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_comment_id']) && isset($_SESSION['username'])) {
    $delete_comment_id = intval($_POST['delete_comment_id']);
    $username = $_SESSION['username'];

    // Check if the comment belongs to the user
    $stmt = $conn->prepare("SELECT username, guide_id FROM comments WHERE id = ?");
    $stmt->bind_param("i", $delete_comment_id);
    $stmt->execute();
    $stmt->bind_result($comment_user, $comment_guide_id);
    $stmt->fetch();
    $stmt->close();

    if ($comment_user === $username) {
        $stmt = $conn->prepare("DELETE FROM comments WHERE id = ?");
        $stmt->bind_param("i", $delete_comment_id);
        $stmt->execute();
        $stmt->close();
        // Redirect to avoid resubmission and stay on the same guide
        header("Location: guide-view.php?guide_id=" . $comment_guide_id);
        exit();
    } else {
        $comment_error = "You can only delete your own comments.";
    }
}

if (isset($_GET['guide_id'])) {
    $guide_id = intval($_GET['guide_id']);
    $sql = "SELECT * FROM guides WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $guide_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $guide = $result->fetch_assoc();
    $stmt->close();
}

// Handle comment submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment_submit']) && isset($_SESSION['username']) && isset($_POST['guide_id'])) {
    $comment_text = trim($_POST['comment_text']);
    $guide_id = intval($_POST['guide_id']);
    $username = $_SESSION['username'];
    if ($comment_text !== '') {
        $stmt = $conn->prepare("INSERT INTO comments (guide_id, username, comment, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param("iss", $guide_id, $username, $comment_text);
        $stmt->execute();
        $stmt->close();
        // Redirect to avoid form resubmission
        header("Location: guide-view.php?guide_id=" . $guide_id);
        exit();
    } else {
        $comment_error = "Comment cannot be empty.";
    }
}

// Fetch comments for the selected guide
$comments = [];
if ($guide_id) {
    // Now also fetch the comment id for deletion
    $stmt = $conn->prepare("SELECT id, username, comment, created_at FROM comments WHERE guide_id = ? ORDER BY created_at DESC");
    $stmt->bind_param("i", $guide_id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide Details</title>
    <link rel="shortcut icon" href="assets/iphone-x.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/iphone-style.css">
    <link rel="stylesheet" href="css/user-guide.css">
    <style>
        .comment-delete-btn {
            background: none;
            border: none;
            color: #d00;
            font-size: 1em;
            cursor: pointer;
            float: right;
            margin-left: 10px;
            opacity: 0.7;
            transition: opacity 0.2s;
        }
        .comment-delete-btn:hover {
            opacity: 1;
        }
        @media (max-width: 600px) {
            .comment-delete-btn {
                float: none;
                display: block;
                margin: 0.5em 0 0 0;
            }
        }
    </style>
</head>
<body>
<nav id="desktop-nav">
      <div class="logo" onclick="location.href='index.php'">iPhone DIY</div>
      <div>
        <ul class="nav-links">
          <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#profile">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php else: ?>
            <li><a href="login.php">  </a></li>
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])): ?>
             <li><a href="logout.php">Logout</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo"><a href="index.php" style="text-decoration:none;color:inherit;">iPhone DIY</a></div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#profile">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php else: ?>
            <li><a href="login.php">  </a></li>
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])): ?>
             <li><a href="logout.php">Logout</a></li>
          <?php endif; ?>     
        </div>
      </div>
    </nav>

<section class="about">
    <div class="user-section">
        <?php if ($guide): ?>
            <h2><?php echo htmlspecialchars($guide['title']); ?></h2>
            <p><strong>Created by:</strong> <?php echo htmlspecialchars($guide['created_by']); ?></p>
            <p><strong>Type:</strong> <?php echo htmlspecialchars($guide['guide_type']); ?></p>
            <p><strong>Device:</strong> <?php echo htmlspecialchars($guide['device']); ?></p>
            <p><strong>Part:</strong> <?php echo htmlspecialchars($guide['part']); ?></p>
            <p><strong>Introduction:</strong> <?php echo nl2br(htmlspecialchars($guide['introduction'])); ?></p>
            <p><strong>Difficulty:</strong> <?php echo htmlspecialchars($guide['difficulty_estimate']); ?></p>
            <p><strong>Tools:</strong> <?php echo htmlspecialchars($guide['tools']); ?></p>
            <p><strong>Conclusion:</strong> <?php echo nl2br(htmlspecialchars($guide['conclusion'])); ?></p>
            <h3>Steps</h3>
            <?php
            $steps = json_decode($guide['steps'], true);
            $wisdom = json_decode($guide['wisdom'], true);
            $step_images = isset($guide['step_images']) ? json_decode($guide['step_images'], true) : [];
            if ($steps && count($steps) > 0) {
                foreach ($steps as $i => $step) {
                    echo "<div class='step-block'>";
                    echo "<span class='step-title'>Step " . ($i+1) . ":</span> " . htmlspecialchars($step) . "<br>";
                    // Show step image if exists
                    if (!empty($step_images[$i])) {
                        $imgPath = htmlspecialchars($step_images[$i]);
                        echo "<img src='$imgPath' alt='Step Image' class='step-image'><br>";
                    }
                    if (!empty($wisdom[$i])) {
                        echo "Description: " . htmlspecialchars($wisdom[$i]) . "<br>";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p>No steps found.</p>";
            }
            ?>
        <?php else: ?>
            <p>Guide not found.</p>
        <?php endif; ?>
    </div>

    <div class="user-section">
        <h3>Comments</h3>
        <?php if (isset($_SESSION['username']) && $guide): ?>
            <form method="post" style="margin-bottom:1em;">
                <input type="hidden" name="guide_id" value="<?php echo htmlspecialchars($guide_id); ?>">
                <textarea name="comment_text" rows="5" style="width:96%;padding:0.5em; border-radius:18px; margin-top: 15px;" placeholder="Write your comment here..."></textarea>
                <?php if ($comment_error): ?>
                    <div style="color:red;"><?php echo htmlspecialchars($comment_error); ?></div>
                <?php endif; ?>
                <div class="actions">
                <button type="submit" name="comment_submit">Post Comment</button>
                </div>
            </form>
        <?php elseif ($guide): ?>
            <p>
                <a href="login.php" style="display:inline; color: #333; text-decoration:underline;">Login</a> to post a comment.
            </p>
        <?php endif; ?>

        <?php if ($guide && count($comments) > 0): ?>
            <ul style="list-style:none;padding:0;">
                <?php foreach ($comments as $c): ?>
                    <li style="margin-bottom:1em;padding-bottom:0.5em;border-bottom:1px solid #eee; position:relative;">
                        <strong><?php echo htmlspecialchars($c['username']); ?></strong>
                        <span style="color:#888;font-size:0.9em;">on <?php echo htmlspecialchars($c['created_at']); ?></span>
                        <?php if (isset($_SESSION['username']) && $_SESSION['username'] === $c['username']): ?>
                            <form method="post" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                <input type="hidden" name="delete_comment_id" value="<?php echo htmlspecialchars($c['id']); ?>">
                                <button type="submit" class="comment-delete-btn" title="Delete Comment">&#128465;</button>
                            </form>
                        <?php endif; ?>
                        <div style="margin-top:0.3em;"><?php echo nl2br(htmlspecialchars($c['comment'])); ?></div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php elseif ($guide): ?>
            <p style="font-weight:bold; color:#797979;">No comments yet. Be the first to comment!</p>
        <?php endif; ?>
    </div>
</section>
<footer>
  <p>&copy; <?= date('Y') ?> Master DIY. All Rights Reserved.</p>
</footer>
</body>
</html>
