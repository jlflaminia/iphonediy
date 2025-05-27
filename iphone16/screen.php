<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 16 - Screen</title>
      <link rel="shortcut icon" href="\iphonediy/assets/iphone-x.png" type="image/x-icon">
      <link rel="stylesheet" href="\iphonediy/css/style.css">
      <link rel="stylesheet" href="\iphonediy/css/mediaqueries.css">
      <link rel="stylesheet" href="\iphonediy/css/iphone-style.css">
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
    <div>
      <a href="\iphonediy/ip16.php" style="color:#333;margin-left:10rem">&larr; Back to iPhone 16</a>
    </div>
    <section id="categories">
    <div class="container">
        <div class="product-image">
            <img src="\iphonediy/ip/screen.png" alt="screen">
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
        <div class="product-image"><img src="\iphonediy/ip/screen/1.jpg" alt="steps"></div>
        <div class="product-info">
            <h1> Step 1 </h1>
            <p class="section__text__p2 ">Before you begin</p>
            <p>Unplug any cables from your phone. Hold the power and either volume buttons and slide to power off your phone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/2.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 2</h1>
            <p class="section__text__p2 ">Tape over any cracks</p>
            <p>If your screen or back glass is badly cracked, lay overlapping strips of packing tape over the glass to protect yourself and make disassembly easier.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/3.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 3</h1>
            <p class="section__text__p2 ">Remove the pentalobe screws</p>
            <p>Use a P2 pentalobe driver to remove the two 7.7 mm-long screws on either side of the charging port.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/4.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 4</h1>
            <p class="section__text__p2 ">Mark your opening picks</p>
            <p>Measure 3 mm from the tip and mark the opening pick with a permanent marker.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/5.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 5</h1>
            <p class="section__text__p2 ">Heat the bottom edge</p>
            <p>Use a hair dryer or heat gun to heat the bottom edge of the screen until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/6.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 6</h1>
            <p class="section__text__p2 ">Insert an opening pick</p>
            <p>Apply a suction handle to the bottom edge of the screen.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/7.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 7</h1>
            <p class="section__text__p2 ">Screen information</p>
            <p>As you slice the adhesive securing the screen in the following steps, don't insert your pick deeper than 3 mm to avoid damaging the following areas:</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/8.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 8</h1>
            <p class="section__text__p2 ">Heat the right edge</p>
            <p>Use a hair dryer or heat gun to heat the right edge of the screen until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/9.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 9</h1>
            <p class="section__text__p2 ">Separate the right adhesive</p>
            <p>Don't insert your pick deeper than 3 mm to avoid damaging the spring contacts.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/10.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 10</h1>
            <p class="section__text__p2 ">Heat the top edge</p>
            <p>Use a hair dryer or heat gun to heat the top edge of the screen until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/11.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 11</h1>
            <p class="section__text__p2 ">Separate the top adhesive</p>
            <p>Continue sliding your pick around the top right corner and across the top edge to separate the adhesive and release the two metal clips.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/12.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 12</h1>
            <p class="section__text__p2 ">Heat the left edge</p>
            <p>Use a hair dryer or heat gun to heat the left edge of the screen until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/13.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 13</h1>
            <p class="section__text__p2 ">Separate the left adhesive</p>
            <p>Slide the opening pick down the left edge of the screen to separate the remaining adhesive and release the last two metal clips.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/14.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 14</h1>
            <p class="section__text__p2 ">Prop up the screen</p>
            <p>
            Swing open the screen over the left edge of the phone and support it with a clean, sturdy object.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/15.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 15</h1>
            <p class="section__text__p2 ">Remove the connector covers</p>
            <p>
            Use a tri-point Y000 driver to remove the two 0.9 mm‑long screws securing the front sensor and screen connector covers.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/16.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 16</h1>
            <p class="section__text__p2 "></p>
            <p>Use tweezers, or your fingers, to lift the front sensor cover to a 90-degree angle and unhook it from its slot in the logic board.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/17.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 17</h1>
            <p class="section__text__p2 "></p>
            <p>Use tweezers, or your fingers, to lift the screen connector cover at a slight angle to unhook it from its slot in the logic board.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/18.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 18</h1>
            <p class="section__text__p2 ">Disconnect the screen</p>
            <p>Use the tip of a spudger to pry up and disconnect the screen press connector.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/19.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 19</h1>
            <p class="section__text__p2 ">Remove the screen</p>
            <p>Lift the screen off the frame and remove it.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/20.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 20</h1>
            <p class="section__text__p2 ">Remove the ambient light sensor bracket</p>
            <p>Use a pair of tweezers or your fingers to lift and remove the ambient light sensor bracket.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/21.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 21</h1>
            <p class="section__text__p2 ">Pry up the ambient light sensor</p>
            <p>Use a hair dryer, heat gun, or heated iOpener to soften the adhesive under the ambient light sensor and ambient light sensor cable.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/22.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 22</h1>
            <p class="section__text__p2 ">Reposition the ambient light sensor cable</p>
            <p>Use your finger to push the ambient light sensor away from its recess.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/23.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 23</h1>
            <p class="section__text__p2 ">Peel up the ambient light sensor cable</p>
            <p>Gently slide an opening pick under the ambient light sensor cable, starting near the sensor and moving towards to the opposite corner.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/24.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 24</h1>
            <p class="section__text__p2 ">Remove the ambient light sensor</p>
            <p>Continue slowly sliding the opening pick under the ambient light sensor cable until the cable is free from the screen.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/25.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 25</h1>
            <p class="section__text__p2 ">End of disassembly</p>
            <p>Congratulations on completing disassembly! The remaining steps will show you how to reassemble your device.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/26.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 26</h1>
            <p class="section__text__p2 ">Place the ambient light sensor</p>
            <p>Without letting the ambient light sensor adhesive touch the screen, use a pair of tweezers to hold the sensor above the back of the new screen.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/27.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 27</h1>
            <p class="section__text__p2 ">Press the ambient light sensor</p>
            <p>Use your finger to press down the ambient light sensor cable.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/28.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 28</h1>
            <p class="section__text__p2 ">Install the ambient light sensor bracket</p>
            <p>Use tweezers or your fingers to place the ambient light sensor bracket over the back of the sensor.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/29.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 29</h1>
            <p class="section__text__p2 ">Remove the screen adhesive</p>
            <p>Use a pair of tweezers to remove the adhesive around the entire perimeter of the iPhone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/30.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 30</h1>
            <p class="section__text__p2 "></p>
            <p>Wrap a microfiber or lint-free cloth around the pointed end of a spudger and apply a few drops of high-concentration (greater than 90%) isopropyl alcohol to the cloth.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/31.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 31</h1>
            <p class="section__text__p2 ">Orient the adhesive</p>
            <p>Lay the adhesive next to the phone and use features like cutouts for spring contacts and the front‑facing camera to make sure the adhesive is oriented correctly.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/32.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 32</h1>
            <p class="section__text__p2 ">Expose the bottom edge of the adhesive</p>
            <p>Use the pull tab to begin peeling the back liner off of the adhesive starting from the bottom, but do not remove the liner all the way.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/33.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 33</h1>
            <p class="section__text__p2 ">Apply the adhesive</p>
            <p>While holding the back liner out of the way, carefully align the exposed edge of the adhesive to the bottom edge of the iPhone's frame.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/34.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 34</h1>
            <p class="section__text__p2 "></p>
            <p>Continue peeling the back liner off of the adhesive while pressing the adhesive into place along the edges of the iPhone's frame.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/35.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 35</h1>
            <p class="section__text__p2 ">Press the adhesive into place</p>
            <p>Use the flat end of a spudger to press the adhesive firmly into place all around the iPhone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/36.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 36</h1>
            <p class="section__text__p2 ">Remove the top liner</p>
            <p>Use the point of a spudger to lift the pull tab in the top‑right corner of the frame until you can grab it with your fingers.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/37.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 37</h1>
            <p class="section__text__p2 "></p>
            <p>Once the top liner is removed, there should be three narrow liners on top of the adhesive with pull tabs near the bottom edge.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/38.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 38</h1>
            <p class="section__text__p2 ">Prop up the screen</p>
            <p>
            Prop the screen up along the left edge of the iPhone frame, using a box or similar sturdy object to support the screen.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/39.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 39</h1>
            <p class="section__text__p2 ">Connect the screen and front sensor</p>
            <p>Use the flat end of a spudger or your finger to connect the screen and front sensor press connectors.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/40.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 40</h1>
            <p class="section__text__p2 ">Cover the connectors</p>
            <p>Use a pair of tweezers or your fingers to place the screen connector cover over the screen connector by inserting it at a slight downward angle to engage the hook, then laying the cover flat over the connector.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/41.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 41</h1>
            <p class="section__text__p2 "></p>
            <p>Use a pair of tweezers or your fingers to place the front sensor connector cover over the front sensor connector by inserting it at a 90‑degree angle to engage the hook, then laying the cover flat over the connector.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/42.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 42</h1>
            <p class="section__text__p2 ">Install the cover screws</p>
            <p>
            Use a tri-point Y000 driver to install the two 0.9 mm‑long screws securing the front sensor connector and screen connector covers.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/43.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 43</h1>
            <p class="section__text__p2 ">Remove the final adhesive liners</p>
            <p>Use a pair of tweezers or your fingers to remove the two narrow liners covering the adhesive along the right, top, and bottom edges of the iPhone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/44.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 44</h1>
            <p class="section__text__p2 "></p>
            <p>Without letting the screen touch the adhesive, hold the screen over the phone so you can access the final liner along the left edge of the phone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/45.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 45</h1>
            <p class="section__text__p2 ">Place the screen</p>
            <p>Align the screen over the frame, then lower it into place.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/46.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 46</h1>
            <p class="section__text__p2 "></p>
            <p>
            Firmly press the top edge of the screen into the adhesive, then the bottom edge, until the screen is fully seated in the frame.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/47.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 47</h1>
            <p class="section__text__p2 ">Heat the screen</p>
            <p>To help the adhesive bond, apply heat to the edges of the screen using an iOpener, hair dryer, or heat gun until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/48.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 48</h1>
            <p class="section__text__p2 ">Press the back glass</p>
            <p>If you have the box your iPhone came in, take the lid and place it on a flat surface.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/49.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 49</h1>
            <p class="section__text__p2 "></p>
            <p>Place the iPhone screen-side-down on a soft, flat surface.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/50.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 50</h1>
            <p class="section__text__p2 "></p>
            <p>Place two layers of coins or similarly thick objects on the tape along the edges of the back glass.</p>
        </div>
    </div>
  </section>
  <footer><p>Copyright &#169; 2025 iPhone DIY. All Rights Reserved.</p></footer>
</body>
</html>