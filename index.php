<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Master DIY</title>
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">Master DIY</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#categories">Categories</a></li>
          <li><a href="#news">News</a></li>
          <!-- <li><a href="#login">Login</a></li> -->
          <li><a href="#login" onclick="openLoginModal()">Login</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Master DIY</div>
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
          <li><a href="#login" onclick="openLoginModal()">Login</a></li>
        </div>
      </div>
    </nav>
    <!-- <button id="login-btn" class="btn btn-color-2">Login</button>  -->
    <!-- Login Modal -->
<div id="login-modal" class="modal">
  <div class="modal-content">
    <!-- <span class="close-btn">&times;</span> -->
    <span class="close-btn" onclick="closeLoginModal()">&times;</span>
    <h2 class="teks">Login</h2>
    <form action="login.php" method="POST" class="login-form">
      <input type="text" name="username" placeholder="Username" class="login-input" required />
      <input type="password" name="password" placeholder="Password" class="login-input" required />
      <button type="submit" class="btn login-btn">Login</button>
    </form>
    <p>New user? <a href="#" id="register-btn">Create an account</a>.</p>
  </div>
</div>

    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/logo.png" alt="Master DIY logo" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Welcome to</p>
        <h1 class="title">Master DIY</h1>
        <p class="section__text__p2">Find the best repair guides</p>
        <div class="btn-container">
          <div class="search-box">
            
            <input type="text" class="btn btn-color-3" placeholder="Search for a device">
            <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Find Device</button>
          </div>  
        </div>
      </div>
    </section>
    <section id="about">    
      <h1 class="title">Master the Art of Repair</h1>
      <p class="section__text__p1">Your one-stop resource for all your repair needs</p>
      <div class="main-details-container">
        <div class="about-containers">
          <div class="details-container color-container sec-cat">
            <div class="imgs-container">
              <img src="./assets/repair.jpg" alt="Step-by-Step Guides" class="project-img"/>
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
                src="./assets/repair2.jpg" alt="Project 2" class="project-img"/>
            </div>
            <p class="about-info">Precision tools and thousands of parts to get the job done.</p>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='quality-parts.html'">Quality Parts and Tools</button>
            </div>
          </div>
        </div>
      </div>
      <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#categories'"/>
    </section>
    
    <section id="categories">
      <h1 class="title">Categories</h1>
      <p class="section__text__p1">Fix It Right: Your Ultimate DIY Repair Resource.</p>
      <div class="main-details-container">
      <div class="about-containers">
        <div class="details-container color-container cat">
          <img src="./categories/phone.png" alt="Category 1" class="project-img"/>
          <p class="section__text__p1">Phone</p>
        </div>
        <div class="details-container color-container cat">
          <img src="./categories/computer.png" alt="Category 2" class="project-img"/>
          <p class="section__text__p1">Computer</p>
        </div>
        <div class="details-container color-container cat">
          <img src="./categories/home.png" alt="Category 3" class="project-img"/>
          <p class="section__text__p1">Household</p>
        </div>
        <div class="details-container color-container cat">
          <img src="./categories/appliances.png" alt="Category 4" class="project-img"/>
          <p class="section__text__p1">Appliance</p></div>
      </div>
      </div>
      
      <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#news'"/>

    </section>

    <section id="news">
      <h1 class="title">News</h1>
      <p class="section__text__p1">Stay Updated: Latest Tips and Trends in DIY Repairs!</p>

      <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#contact'"/>
    
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Us</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img src="./assets/email.png" alt="Email icon" class="icon contact-icon email-icon"/>
          <p><a href="mailto:masterdiy@gmail.com">masterdiy@gmail.com</a></p>
        </div>
        
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div>
          <ul class="nav-links">
            <li><a href="#profile">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#news">News</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2025 Master DIY. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
