<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 12</title>
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="stylesheet" href="iphone-style.css">
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
      <img src="./categories/ip12.png" alt="iPhone 12" class="project-img ip12-img"/>
      <h1 class="title">iPhone 12</h1>
    </div> -->
    <div class="container">
        <div class="product-image">
            <img src="./categories/ip12.png" alt="iPhone 12">
        </div>
        <div class="product-info">
            <h1>iPhone 12 Repair</h1>
            <p>Repair and disassembly information for the iPhone 12, released September 20th, 2024. It features a 6.1" OLED display, a 48 MP dual-camera system, and USB-C port.</p>
            <!-- <p class="rating">Repairability: <span>7 / 10</span></p> -->
            <div class="actions">
                <button>Create a Guide</button>
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


</body>
</html>