
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

// Fetch a single guide if guide_id is set
$guide = null;
$guide_selected = false;
if (isset($_GET['guide_id'])) {
    $guide_id = intval($_GET['guide_id']);
    $sql = "SELECT * FROM guides WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $guide_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $guide = $result->fetch_assoc();
    $stmt->close();
    $guide_selected = true;
}

// Fetch all guides for the user section
$all_guides = [];
$sql_all = "SELECT id, title, device, part, guide_type FROM guides ORDER BY id DESC";
$result_all = $conn->query($sql_all);
while ($row = $result_all->fetch_assoc()) {
    $all_guides[] = $row;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 16</title>
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/iphone-style.css">
    <link rel="stylesheet" href="css/user-guide.css">
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
      <div class="logo">iPhone DIY</div>
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

    <section id="categories">
    <div class="container">
        <div class="product-image">
            <img src="./categories/ip16.png" alt="iPhone 16">
        </div>
        <div class="product-info">
            <h1>iPhone 16 Repair</h1>
            <p>Repair and disassembly information for the iPhone 16, released September 20th, 2024. It features a 6.1" OLED display, a 48 MP dual-camera system, and USB-C port.</p>
            <div class="actions">
                <button onclick="location.href='guide.php'">Create a Guide</button>
            </div>
        </div>
    </div>

      <div class="main-details-container">
      <div class="about-containers ip-cat-grid">
        <a href="battery.php" class="details-container color-container cat">
          <img src="./ip/battery.png" alt="Category 1" class="project-img"/>
          <p class="section__text__p1">Battery</p>
        </a>
        <a href="screen.php" class="details-container color-container cat">
          <img src="./ip/screen.png" alt="Category 2" class="project-img"/>
          <p class="section__text__p1">Screen</p>
        </a>
        <a href="microphone.php" class="details-container color-container cat">
          <img src="./ip/microphone.png" alt="Category 3" class="project-img"/>
          <p class="section__text__p1">Microphone</p>
        </a>
        <a href="speaker.php" class="details-container color-container cat">
          <img src="./ip/speaker.png" alt="Category 4" class="project-img"/>
          <p class="section__text__p1">Speaker</p>
        </a>
        <a href="camera.php" class="details-container color-container cat">
          <img src="./ip/camera.png" alt="Category 5" class="project-img"/>
          <p class="section__text__p1">Camera</p>
        </a>
        <a href="charging-port.php" class="details-container color-container cat">
          <img src="./ip/chargin-port.png" alt="Category 6" class="project-img"/>
          <p class="section__text__p1">Charging Port</p>
        </a>
      </div>  
      </div>
    </section>

<section class="about">
  <?php if ($guide): ?>
        <div id="openGuideModal"></div>
    <!-- Modal for Guide Details -->
    <div id="guideModal" class="modal">
      <div class="modal-content">
        <span class="close-modal" id="closeGuideModal">&times;</span>
        <h2><?php echo htmlspecialchars($guide['title']); ?></h2>
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
                    echo "<em>Wisdom:</em> " . htmlspecialchars($wisdom[$i]) . "<br>";
                }
                echo "</div>";
            }
        } else {
            echo "<p>No steps found.</p>";
        }
        ?>
      </div>
    </div>
  <?php endif; ?>

    <div class="user-section">
        <h2>All Saved Guides</h2>
          <p>Select a guide from the list below to view details.</p>
        <ul>
            <?php foreach ($all_guides as $g): ?>
                <li>
                    <a href="ip16.php?guide_id=<?php echo $g['id']; ?>">
                        <?php echo htmlspecialchars($g['title']); ?> (<?php echo htmlspecialchars($g['device']); ?> - <?php echo htmlspecialchars($g['part']); ?>)
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var openBtn = document.getElementById('openGuideModal');
    var modal = document.getElementById('guideModal');
    var closeBtn = document.getElementById('closeGuideModal');
    // If a guide is selected, open the modal automatically
    <?php if ($guide_selected): ?>
        if(modal) {
            modal.style.display = "block";
            document.body.style.overflow = "hidden";
        }
    <?php endif; ?>
    if(openBtn && modal && closeBtn) {
        openBtn.onclick = function() {
            modal.style.display = "block";
            document.body.style.overflow = "hidden";
        }
        closeBtn.onclick = function() {
            modal.style.display = "none";
            document.body.style.overflow = "";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.body.style.overflow = "";
            }
        }
    }
});
</script>
</body>
</html>