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

$all_guides = [];
$guides_stmt = $conn->prepare("SELECT id, title, device, part, created_at FROM guides WHERE approved = 1 AND device = 'iPhone 13' ORDER BY created_at DESC");
if ($guides_stmt) {
    $guides_stmt->execute();
    $result = $guides_stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $all_guides[] = $row;
    }
    $guides_stmt->close();
}

$guide_id = isset($_GET['guide_id']) ? intval($_GET['guide_id']) : 0;
$stmt = $conn->prepare("SELECT * FROM guides WHERE id = ? AND approved = 1");
$stmt->bind_param("i", $guide_id);
$stmt->execute();
$result = $stmt->get_result();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 13</title>
    <link rel="shortcut icon" href="assets/iphone-x.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/iphone-style.css">
    <link rel="stylesheet" href="css/user-guide.css">
    <style>
      .hamburger-menu .menu-links {
        z-index: 1000;
        width: auto;       
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
       }
      .hamburger-menu.open .menu-links {
        display: block;
        }
    </style>
</head>
<body>
<nav id="desktop-nav">
      <div class="logo" onclick="location.href='index.php'">iPhone DIY</div>
      <div>
        <ul class="nav-links">
          <?php if (isset($_SESSION['username'])): ?>
           <?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin'): ?>
            <li><a href="admin.php">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php else: ?>
            <li><a href="#profile">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php endif; ?> 
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
          <div>
        <a href="\iphonediy/index.php" style="color:#777;margin-left:10rem">Home ></a>
        <a href="\iphonediy/index.php#categories" style="color:#777;">iPhone ></a>
        <a href="#" style="color:black;"><b>iPhone 13</b></a>
      </div>
    <section id="categories">
    <div class="container">
        <div class="product-image">
            <img src="./categories/ip13.png" alt="iPhone 13">
        </div>
        <div class="product-info">
            <h1>iPhone 13 Repair</h1>
            <p>Repair and disassembly information for the iPhone 13, released September 20th, 2024. It features a 6.1" OLED display, a 48 MP dual-camera system, and USB-C port.</p>
            <div class="actions">
                <button onclick="location.href='guide13.php'">Create a Guide</button>
            </div>
        </div>
    </div>
      <div class="main-details-container">
      <div class="about-containers ip-cat-grid">
        <a href="iphone13/battery.php" class="details-container color-container cat">
          <img src="./ip/battery.png" alt="Category 1" class="project-img"/>
          <p class="section__text__p1">Battery</p>
        </a>
        <a href="iphone13/screen.php" class="details-container color-container cat">
          <img src="./ip/screen.png" alt="Category 2" class="project-img"/>
          <p class="section__text__p1">Screen</p>
        </a>
        <a href="iphone13/camera.php" class="details-container color-container cat">
          <img src="./ip/camera.png" alt="Category 5" class="project-img"/>
          <p class="section__text__p1">Camera</p>
        </a>
      </div>  
      </div>
    </section>
    <section class="about">
        <div class="user-section">
            <h2>All Saved Guides by Users</h2>
              <p>Select a guide below to view details.</p>
            <ul>
                <?php foreach ($all_guides as $g): ?>
                  <li>
                    <a href="guide-view.php?guide_id=<?php echo $g['id']; ?>">
                      <?php echo htmlspecialchars($g['title']); ?> (<?php echo htmlspecialchars($g['device']); ?> - <?php echo htmlspecialchars($g['part']); ?>)
                      <?php if (isset($g['created_at'])): ?>
                          <span style="color: #888; font-size: 0.9em;">
                          <?php echo date('Y-m-d H:i', strtotime($g['created_at'])); ?>
                          </span>
                      <?php endif; ?>
                    </a>                
                  </li>
                <?php endforeach; ?>
            </ul>
        </div>    
    </section>
<script src="script.js"></script>
</body>
</html>