<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 16</title>
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/iphone-style.css">
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
    <!-- <div>
      <img src="./categories/ip16.png" alt="iPhone 16" class="project-img ip16-img"/>
      <h1 class="title">iPhone 16</h1>
    </div> -->
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
        <!-- <a href="ipxs.php" class="details-container color-container cat">
          <img src="./ip/" alt="Category 7" class="project-img"/>
          <p class="section__text__p1">iPhone XR</p>
        </a>
        <a href="ipx.php" class="details-container color-container cat">
          <img src="./ip/" alt="Category 8" class="project-img"/>
          <p class="section__text__p1">iPhone X</p>
        </a> -->
      </div>  
      </div>
    </section>


    <?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $guide = [
//         'guide_type' => htmlspecialchars($_POST['guide_type'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'device' => htmlspecialchars($_POST['device'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'part' => htmlspecialchars($_POST['part'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'title' => htmlspecialchars($_POST['title'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'introduction' => htmlspecialchars($_POST['introduction'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'difficulty_estimate' => htmlspecialchars($_POST['difficulty_estimate'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'tools' => htmlspecialchars($_POST['tools'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'parts' => htmlspecialchars($_POST['parts'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'conclusion' => htmlspecialchars($_POST['conclusion'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'step_type' => htmlspecialchars($_POST['step_type'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'wisdom' => htmlspecialchars($_POST['wisdom'] ?? '', ENT_QUOTES | ENT_HTML5),
//         'created_at' => date('Y-m-d H:i:s')
//     ];

//     $file = fopen('guides.txt', 'a');
//     fwrite($file, json_encode($guide) . PHP_EOL);
//     fclose($file);

//     header('Location: ip16.php');
//     exit;
// } else {
//     header('Location: guide.php');
//     exit;
// }
?>

</body>
</html>