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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <style>
        .ip-cat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        @media (max-width: 768px) {
            .ip-cat-grid {
            grid-template-columns: repeat(1, 1fr); 
            }
            .container {
                margin-bottom: 25px;
                flex-direction: column;
                align-items: center;
                padding: 0;
            }
        }
        .details-container.cat {
            height: 90px;
            width: 200px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .details-container {
            border-radius: 1rem;
            background-color: white;
        }
        .container {
            display: flex;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .product-image {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product-image img {
            max-width: 80%;
            height: auto;
        }
        .product-info {
            flex: 2;
            padding: 20px;
        }
        .product-info h1 {
            margin: 0;
            font-size: 24px;
        }
        .product-info p {
            margin: 10px 0;
        }
        /* .rating {
            font-weight: bold;
        }
        .rating span {
            color: green;
        } */
        .actions {
            margin: 20px 0;
        }
        .actions button {
            padding: 10px 15px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            background-color: grey;
            color: white;
            cursor: pointer;
        }
        .actions button:hover {
            background-color: black;
        }


@media (max-width: 900px) {
  .container {
    flex-direction: column;
    align-items: center;
    padding: 0;
  }
}

/* Mobile: Single column grid, tighter spacing */
@media (max-width: 600px) {
  .container {
    flex-direction: column;
    align-items: center;
    padding: 0;
  }
}

    </style>
</head>
<body>
<nav id="desktop-nav">
      <div class="logo">iPhone DIY</div>
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


</body>
</html>