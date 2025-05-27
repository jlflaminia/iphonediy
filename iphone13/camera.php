<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 13 - Camera</title>
      <link rel="shortcut icon" href="\iphonediy/assets/iphone-x.png" type="image/x-icon">
      <link rel="stylesheet" href="\iphonediy/css/style.css">
      <link rel="stylesheet" href="\iphonediy/css/mediaqueries.css">
      <link rel="stylesheet" href="\iphonediy/css/iphone-style.css">
      <link rel="stylesheet" href="\iphonediy/css/admin-img.css">
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
        <a href="\iphonediy/index.php" style="color:#777;margin-left:10rem">Home ></a>
        <a href="\iphonediy/index.php#categories" style="color:#777;">iPhone ></a>
        <a href="\iphonediy/ip13.php" style="color:#777;">iPhone 13></a>
        <a href="#" style="color:black;"><b>iPhone 13 Camera</b></a>
      </div>
    <section id="categories">
    <div class="container">
        <div class="product-image">
            <img src="\iphonediy/ip/camera.png" alt="screen">
        </div>
        <!-- <h1>iPhone 13 screen Replacement</h1>
        <p class="date">Last updated on April 23, 2025</p> -->

        <div class="product-info">
            <h1>iPhone 13 Screen Replacement</h1>
            <div class="admin-image">
                <img src="\iphonediy/assets/meon.jpg" alt="ADMIN SIMEON">
                <div class="admin-details">
                    <p class="date"><b>Simeon Kulalo</b><br> Last updated on April 27, 2025</p>
                </div>
            </div>          
            <hr>  
            <p> <b>Introduction</b></p>
            <p>Use this guide to replace a broken, cracked, or non‑responsive screen in your iPhone 13.</p>
            <p>Note: Since you can't disconnect the screen during this repair, be especially careful not to use metal prying tools or touch exposed contacts in your iPhone.</p>
        </div>          
    </section>
        <!-- <section class="parts">
            <h2>Parts</h2>
            <ul>
                <li>
                    <span class="part-name">iPhone 13 screen</span>
                    <span class="part-price">$29.99</span>
                </li>
                <li>
                    <span class="part-name">iPhone 13 screen Adhesive</span>
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
            <p>Unplug any cables from your phone.</p>
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
            <p>Use a hair dryer or heat gun to heat the bottom edge of the back glass until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/6.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 6</h1>
            <p class="section__text__p2 ">Insert an opening pick</p>
            <p>Apply a suction handle to the bottom edge of the back glass.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/7.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 7</h1>
            <p class="section__text__p2 ">Back glass information</p>
            <p>A delicate cable connecting the back glass to the phone, right next to the volume down button. Don't insert your pick here to avoid slicing the cable.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/8.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 8</h1>
            <p class="section__text__p2 ">Heat the right edge</p>
            <p>Use a hair dryer or heat gun to heat the right edge of the back glass until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/9.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 9</h1>
            <p class="section__text__p2 ">Separate the bottom right adhesive</p>
            <p>Slide your pick around the bottom right corner and to the volume down button to separate the adhesive and release the metal clip.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/10.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 10</h1>
            <p class="section__text__p2 ">Heat the left edge</p>
            <p>Use a hair dryer or heat gun to heat the left edge of the back glass until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/11.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 11</h1>
            <p class="section__text__p2 ">Separate the left adhesive</p>
            <p>Insert a second opening pick at the bottom edge.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/12.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 12</h1>
            <p class="section__text__p2 ">Heat the top edge</p>
            <p>Use a hair dryer or heat gun to heat the top edge of the back glass until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/13.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 13</h1>
            <p class="section__text__p2 ">Separate the top right adhesive</p>
            <p>Slide your second opening pick around the top left corner and along the top edge to separate the adhesive and release the metal clips.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/14.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 14</h1>
            <p class="section__text__p2 ">Reposition the back glass</p>
            <p>Swing open the back glass to the right of the phone to separate the remaining adhesive.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/15.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 15</h1>
            <p class="section__text__p2 ">Remove the middle connector cover screws</p>
            <p>Use a tri-point Y000 driver to remove the two 1 mm‑long screws securing the middle connector cover.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/16.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 16</h1>
            <p class="section__text__p2 ">Remove the middle connector cover</p>
            <p>Insert the point of a spudger in either cutout on the middle connector cover.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/17.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 17</h1>
            <p class="section__text__p2 ">Disconnect the battery</p>
            <p>Use the point of a spudger to pry up and disconnect the battery press connector.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/18.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 18</h1>
            <p class="section__text__p2 ">Disconnect the wireless charging coil</p>
            <p>Use the point of a spudger to pry up and disconnect the wireless charging coil press connector.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/19.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 19</h1>
            <p class="section__text__p2 ">Remove the back glass</p>
            <p>Lift the back glass off the frame and remove it.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/20.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 20</h1>
            <p class="section__text__p2 ">Remove the top bracket screws</p>
            <p>Use a screwdriver to remove the four screws securing the top bracket:</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/21.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 21</h1>
            <p class="section__text__p2 ">Remove the top bracket</p>
            <p>Use tweezers, or your fingers, to remove the top bracket.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/22.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 22</h1>
            <p class="section__text__p2 ">Disconnect the rear camera assembly</p>
            <p>Use the point of a spudger to pry up and disconnect the rear camera assembly press connector.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/23.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 23</h1>
            <p class="section__text__p2 ">Remove the rear camera assembly screws</p>
            <p>Use a Phillips screwdriver to remove the three screws securing the rear camera assembly.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/24.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 24</h1>
            <p class="section__text__p2 ">Remove the rear camera assembly</p>
            <p>Insert the tip of a spudger into the top screw hole in the rear camera assembly.</p>
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
            <p class="section__text__p2 ">Place the rear camera assembly</p>
            <p>Place the rear camera assembly into its recess in the frame.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/27.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 27</h1>
            <p class="section__text__p2 ">Install the rear camera assembly screws</p>
            <p>Use a Phillips screwdriver to install the three screws securing the rear camera assembly.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/28.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 28</h1>
            <p class="section__text__p2 ">Connect the rear camera assembly</p>
            <p>Use the flat end of a spudger to connect the rear camera assembly press connector.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/29.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 29</h1>
            <p class="section__text__p2 ">Reinstall the top bracket</p>
            <p>Use tweezers, or your fingers, to reinstall the top bracket.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/30.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 30</h1>
            <p class="section__text__p2 ">Install the top bracket screws</p>
            <p>Use a screwdriver to install the four screws securing the top bracket.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/31.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 31</h1>
            <p class="section__text__p2 ">Remove the back glass adhesive</p>
            <p>Use the pointed end of a spudger to press and roll the adhesive until you can grip it with a pair of tweezers.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/32.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 32</h1>
            <p class="section__text__p2 "></p>
            <p>Use the tweezers to pull the adhesive off of the phone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/33.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 33</h1>
            <p class="section__text__p2 ">Clean the frame</p>
            <p>Wrap a microfiber or lint-free cloth over the point of a spudger and apply a few drops of high-concentration isopropyl alcohol (over 90%) to the cloth.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/34.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 34</h1>
            <p class="section__text__p2 ">Clean the black glass</p>
            <p>Apply a few drops of high-concentration isopropyl alcohol (over 90%) to a microfiber or lint-free cloth and wipe around the perimeter of the back glass to prepare the surface for new adhesive.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/35.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 35</h1>
            <p class="section__text__p2 ">Orient the adhesive</p>
            <p>Orient your replacement adhesive over the frame with the larger blue liner on the underside and its pull tab in the bottom-right corner.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/36.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 36</h1>
            <p class="section__text__p2 ">Expose the bottom edge of the adhesive</p>
            <p>Use the pull tab to begin peeling the back liner off of the adhesive starting from the bottom, but do not remove the liner all the way.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/37.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 37</h1>
            <p class="section__text__p2 ">Apply the adhesive</p>
            <p>Hold the blue liner out of the way and align the adhesive with the bottom edge of the iPhone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/38.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 38</h1>
            <p class="section__text__p2 "></p>
            <p>Continue peeling the back liner off of the adhesive while pressing the adhesive into place along the edges of the iPhone's frame.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/39.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 39</h1>
            <p class="section__text__p2 ">Press the adhesive into place</p>
            <p>Use the flat end of a spudger to press the adhesive into place around the perimeter of the frame.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/40.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 40</h1>
            <p class="section__text__p2 ">Remove the pink liner</p>
            <p>Use the small pull tab in the top-right corner to remove the pink adhesive liner.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/41.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 41</h1>
            <p class="section__text__p2 "></p>
            <p>If you don't see these pull tabs, you may have accidentally removed the thin liners in the previous step. If the adhesive is clean and properly aligned, you may proceed, just be careful not to touch anything to the exposed adhesive until you are ready to install the back glass</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/42.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 42</h1>
            <p class="section__text__p2 ">Connect the charging coil</p>
            <p>Prop up the back glass along the right edge of your iPhone, using a box or similar sturdy object to support the screen.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/43.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 43</h1>
            <p class="section__text__p2 ">Connect the battery</p>
            <p>Use the flat end of a spudger or your finger to connect the battery.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/44.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 44</h1>
            <p class="section__text__p2 ">Install the cover</p>
            <p>Lay the connector cover on the phone so the hooks are slightly to the left of their slots in the logic board..</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/45.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 45</h1>
            <p class="section__text__p2 ">Install the cover screws</p>
            <p>Use a tri-point Y000 driver to install the two 1 mm‑long screws securing the middle connector cover.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/46.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 46</h1>
            <p class="section__text__p2 ">Remove the final adhesive liners</p>
            <p>Use the blue tabs to remove the liners from the bottom, left, and top edges of your iPhone. Wait to remove the liner along the right edge.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/47.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 47</h1>
            <p class="section__text__p2 "></p>
            <p>
            Without letting the back glass touch the adhesive, hold the back glass over the phone so you can access the final liner along the right edge of the phone.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/48.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 48</h1>
            <p class="section__text__p2 ">Place the back glass</p>
            <p>Hold the back glass above the phone and align it with the frame.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/49.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 49</h1>
            <p class="section__text__p2 ">Heat the back glass</p>
            <p>To help the adhesive bond, apply heat to the edges of the back glass using an iOpener, hair dryer, or heat gun until it's hot to the touch.</p>
        </div>
    </div>
  </section>
  <section id="categories">
    <div class="container">
        <div class="product-image"><img src="\iphonediy/ip/screen/50.jpg" alt="steps"></div>
        <div class="product-info">
            <h1>Step 50</h1>
            <p class="section__text__p2 ">Press the back glass</p>
            <p>If you have the box your iPhone came in, take the lid and place it on a flat surface.</p>
        </div>
    </div>
  </section>
  <footer><p>Copyright &#139; 2025 iPhone DIY. All Rights Reserved.</p></footer>
</body>
</html>