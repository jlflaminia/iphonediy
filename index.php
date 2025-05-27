<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iPhone DIY</title>
    <link rel="shortcut icon" href="assets/iphone-x.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">iPhone DIY</div>
      <div>
        <ul class="nav-links">
          <li><a href="#categories">Categories</a></li>
          <li><a href="#about">About Us</a></li>
          <?php if (isset($_SESSION['username'])): ?>
          <?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin'): ?>
            <li><a href="admin.php">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php else: ?>
            <li><a href="#profile">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php endif; ?>
          <?php else: ?>
            <li><a href="login.php">Login</a></li>
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
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#categories" onclick="toggleMenu()">Categories</a></li>
          <li><a href="#news" onclick="toggleMenu()">News</a></li>
          <!-- <li><a href="#login" onclick="toggleMenu()">Login</a></li> -->
          <!-- <li><a href="#login" onclick="openLoginModal()">Login</a></li> -->
          <?php if (isset($_SESSION['username'])): ?>
          <?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin'): ?>
            <li><a href="admin.php">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php else: ?>
            <li><a href="#profile">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php endif; ?>
          <?php else: ?>
            <li><a href="login.php">Login</a></li>
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])): ?>
             <li><a href="logout.php">Logout</a></li>
          <?php endif; ?>     
        </div>
      </div>
    </nav>

    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/iphone-x.png" alt="Master DIY logo" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Welcome to</p>
        <h1 class="title">iPhone DIY</h1>
        <p class="section__text__p2">Find the best repair guides</p>
        <div class="btn-container">
          <div class="search-box">
            
            <input type="text" class="btn btn-color-3" placeholder="Search for a device">
            <button class="btn btn-color-1" onclick="location.href='search.php'">
            Find Device</button>
          </div>  
        </div>
      </div>
    </section>
    <!-- <section id="about">    
      <h1 class="title">Master the Art of Repair</h1>
      <p class="section__text__p1">Your one-stop resource for all your repair needs</p>
      <div class="main-details-container">
        <div class="about-containers">
          <div class="details-container color-container sec-cat">
            <div class="imgs-container">
              <img src="./assets/samp.jpg" alt="Step-by-Step Guides" class="project-img"/>
            </div>
            <p class="about-info">Learn how to fix anything with simple and instructions.</p>
            <div class="btn-container">
              
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='step-by-step.html'">Step-by-Step Guides</button>
            </div>
          </div>
          <div class="details-container color-container sec-cat">
            <div class="imgs-container">
              <img
                src="./assets/samp.jpg" alt="Project 2" class="project-img"/>
            </div>
            <p class="about-info">Precision tools and thousands of parts to get the job done.</p>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='quality-parts.html'">Quality Parts and Tools</button>
            </div>
          </div>
        </div>
      </div>
      <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#categories'"/>
    </section> -->
    
    <section id="categories">
      <h1 class="title">Categories</h1>
      <p class="section__text__p1">Fix It Right: Your Ultimate DIY Repair Resource.</p>
      <div class="main-details-container">
      <div class="about-containers cat-grid">
        <a href="ip16.php" class="details-container color-container cat">
          <img src="./categories/ip16.png" alt="Category 1" class="project-img"/>
          <p class="section__text__p1">iPhone 16</p>
        </a>
        <a href="ip15.php" class="details-container color-container cat">
          <img src="./categories/ip15.png" alt="Category 2" class="project-img"/>
          <p class="section__text__p1">iPhone 15</p>
        </a>
        <a href="ip14.php" class="details-container color-container cat">
          <img src="./categories/ip14.png" alt="Category 3" class="project-img"/>
          <p class="section__text__p1">iPhone 14</p>
        </a>
        <a href="ip13.php" class="details-container color-container cat">
          <img src="./categories/ip13.png" alt="Category 4" class="project-img"/>
          <p class="section__text__p1">iPhone 13</p>
        </a>
        <a href="ip12.php" class="details-container color-container cat">
          <img src="./categories/ip12.png" alt="Category 5" class="project-img"/>
          <p class="section__text__p1">iPhone 12</p>
        </a>
        <a href="ip11.php" class="details-container color-container cat">
          <img src="./categories/ip11.png" alt="Category 6" class="project-img"/>
          <p class="section__text__p1">iPhone 11</p>
        </a>
        <a href="ipxs.php" class="details-container color-container cat">
          <img src="./categories/ipxs.png" alt="Category 7" class="project-img"/>
          <p class="section__text__p1">iPhone XS</p>
        </a>
        <a href="ipx.php" class="details-container color-container cat">
          <img src="./categories/ipx.png" alt="Category 8" class="project-img"/>
          <p class="section__text__p1">iPhone X</p>
        </a>
      </div>  
      </div>
      
      <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#about'"/>

    </section>

    <section id="about">
      <h1 class="title">About Us</h1>
      <p class="section__text__p1">Welcome to <strong>iPhone DIY</strong>!</p>
      <br><br>
             <div class="container">
        <p class="section__text__p1">We are your ultimate resource for iPhone repairs, dedicated to helping users like you maintain and fix your devices with confidence. Our mission is to empower iPhone owners by providing comprehensive repair guides that are easy to follow, regardless of your technical skills.</p>
        <br>
        <p class="section__text__p1">At iPhone DIY, we believe in the power of community. Our platform not only offers expert-created tutorials but also allows users to share their own repair guides. We encourage you to contribute your knowledge and experiences, helping others tackle their repair challenges.</p>
        <br>
        <p class="section__text__p1">Interaction is key to our community. Our comment sections provide a space for you to ask questions, share insights, and connect with fellow iPhone enthusiasts. Together, we can create a supportive environment where everyone feels welcome to learn and grow.</p>
        <br>
        <p class="section__text__p1">Join us on this journey to become a DIY repair pro! Whether you’re fixing a cracked screen or troubleshooting software issues, <strong>iPhone DIY</strong> is here to guide you every step of the way. Thank you for being part of our community!</p>
    </div>
<br><br><br><br>
      <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#contact'"/>
    
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Us</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img src="./assets/email.png" alt="Email icon" class="icon contact-icon email-icon"/>
          <p><a href="mailto:iphonediy@gmail.com">iphonediy@gmail.com</a></p>
        </div>
        
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div>
          <ul class="nav-links">
            <li><a href="#profile">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2025 iPhone DIY. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
