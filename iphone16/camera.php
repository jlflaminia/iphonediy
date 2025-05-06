<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 16 - Camera</title>
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="stylesheet" href="iphone-style.css">
    <style>
      .tools-scrollbox {
    margin: 2rem auto;
    max-width: 400px;
    background: #f8f8f8;
    border-radius: px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    padding: 1.5rem;
}

.tools-scrollbox h2 {
    margin-top: 0;
    font-size: 1.3rem;
    margin-bottom: 1rem;
    color: #222;
}

.tools-list-scroll {
    max-height: 180px;
    overflow-y: auto;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    background: #fff;
    padding: 1rem;
}

.tools-list-scroll ul {
    list-style: disc inside;
    margin: 0;
    padding: 0;
}

.tools-list-scroll li {
    margin-bottom: 0.7rem;
    font-size: 1rem;
    color: #333;
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
    <div class="container">
        <div class="product-image">
            <img src="./ip/screen.png" alt="screen">
        </div>
        <!-- <h1>iPhone 16 screen Replacement</h1>
        <p class="date">Last updated on April 23, 2025</p> -->

        <div class="product-info">
            <h1>iPhone 16 Screen Replacement</h1>
            <p> <b>Introduction</b></p>
            <p>Use this guide to replace a broken, cracked, or non‑responsive screen in your iPhone 16.</p>
            <p>Note: Since you can't disconnect the screen during this repair, be especially careful not to use metal prying tools or touch exposed contacts in your iPhone.</p>
        </div>          
    </section>
        <!-- <section class="parts">
            <h2>Parts</h2>
            <ul>
                <li>
                    <span class="part-name">iPhone 16 screen</span>
                    <span class="part-price">$29.99</span>
                </li>
                <li>
                    <span class="part-name">iPhone 16 screen Adhesive</span>
                    <span class="part-price">$4.99</span>
                </li>
            </ul>
        </section> -->
<div class="tools-scrollbox">
    <h2>Tools You Need</h2>
    <div class="tools-list-scroll">
        <ul>
            <li>Voltaic iPhone screen Power Station</li>
            <li>Heated iOpener or Heat Gun</li>
            <li>Pentalobe Screwdriver (P2)</li>
            <li>Tri-point Y000 Screwdriver</li>
            <li>Plastic Opening Picks</li>
            <li>Suction Handle</li>
            <li>Spudger</li>
            <li>Tweezers</li>
            <li>ESD-Safe Gloves</li>
            <li>Safety Glasses</li>
        </ul>
    </div>
</div>
</div>

  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/1.jpg" alt="steps"></div>
        <div class="product-info">
            <h1> Step 1 </h1>
            <p class="section__text__p2 ">Before you begin</p>
            <p>Unplug any cables from your phone. Hold the power and either volume buttons and slide to power off your phone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/2.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 2</h1>
            <p class="section__text__p2 ">Tape over any cracks</p>
            <p>If your screen or back glass is badly cracked, lay overlapping strips of packing tape over the glass to protect yourself and make disassembly easier.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/3.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 3</h1>
            <p class="section__text__p2 ">Remove the pentalobe screws</p>
            <p>Use a P2 pentalobe driver to remove the two 7.7 mm-long screws on either side of the charging port.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/4.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 4</h1>
            <p class="section__text__p2 ">Mark your opening picks</p>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/5.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 5</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/6.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 6</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/7.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 7</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/8.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 8</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/9.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 9</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/10.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 10</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/11.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 11</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/12.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 12</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/13.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 13</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/14.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 14</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/15.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 15</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/16.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 16</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/17.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 17</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/18.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 18</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/19.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 19</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/20.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 20</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/21.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 21</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/22.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 22</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/23.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 23</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/24.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 24</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/25.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 25</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/26.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 26</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/27.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 27</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/28.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 28</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/29.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 29</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/30.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 30</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/31.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 31</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/32.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 32</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/33.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 33</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/34.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 34</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/35.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 35</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/36.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 36</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/37.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 37</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/38.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 38</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/39.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 39</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/40.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 40</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/41.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 41</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/42.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 42</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/43.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 43</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/44.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 44</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/45.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 45</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/46.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 46</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/47.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 47</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/48.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 48</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/49.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 49</h1>
            <p></p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="./ip/screen/50.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 50</h1>
            <p></p>
        </div>
    </div>
  </section>

  
    <div class="comment-box">
        <h2>Add Comment</h2>
        <div class="toolbar">
            <button>B</button>
            <button>I</button>
            <button>U</button>
            <button>🔗</button>
            <button>📷</button>
        </div>
        <textarea placeholder="Write your comment here..."></textarea>
        <button class="post-button">Post Comment</button>
    </div>
</body>
</html>