<?php
session_start();
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>iPhone 11</title>
      <link rel="shortcut icon" href="\iphonediy/assets/iphone-x.png" type="image/x-icon">
      <link rel="stylesheet" href="\iphonediy/css/style.css">
      <link rel="stylesheet" href="\iphonediy/css/mediaqueries.css">
      <link rel="stylesheet" href="\iphonediy/css/iphone-style.css">
      <link rel="stylesheet" href="\iphonediy/css/user-guide.css">
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
        <a href="\iphonediy/ip11.php" style="color:#777;">iPhone 11></a>
        <a href="#" style="color:black;"><b>iPhone 11 Battery</b></a>
      </div>

      <section id="categories">          
          <!-- <a href="\iphonediy/ipiphone11\iphonediy/ipip11.php" style="color:#333;">&larr; Back to iPhone 11</a>     -->
      <div class="container">
          <div class="product-image">
              <img src="\iphonediy/ip/battery.png" alt="battery">
          </div>
          <!-- <h1>iPhone 11 Battery Replacement</h1>
          <p class="date">Last updated on April 23, 2025</p> -->
          <div class="product-info">
              <h1>iPhone 11 Battery Replacement</h1><br>
              <div class="admin-image">
                  <img src="\iphonediy/assets/jl.jpg" alt="ADMIN FLAMINIA">
                  <div class="admin-details">
                      <p class="date"><b>JL Flaminia</b><br> Last updated on April 23, 2025</p>
                  </div>
              </div>              
              <hr>
              <p> <b>Introduction</b></p>
              <p>The guide to replace the battery in your iPhone 11.</p>
              <p>iPhone batteries are rated to 80% of their capacity for up to 500 charge cycles, or roughly 18-24 months. If your battery is draining quickly, it may be time to replace it.</p>
            </div>
          
            
      </section>
          <!-- <section class="parts">
              <h2>Parts</h2>
              <ul>
                  <li>
                      <span class="part-name">iPhone 11 Battery</span>
                      <span class="part-price">$29.99</span>
                  </li>
                  <li>
                      <span class="part-name">iPhone 11 Battery Adhesive</span>
                      <span class="part-price">$4.99</span>
                  </li>
              </ul>
          </section> -->
  <div class="tools-scrollbox">
      <h2>Tools You Need</h2>
      <div class="tools-list-scroll">
          <ul>
              <li>Voltaic iPhone Battery Power Station</li>
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
          <div class="product-image">
              <img src="\iphonediy/ip/battery/1.jpg" alt="steps">
          </div>
          <div class="product-info">
              <h1> Step 1 </h1>
              <p class="section__text__p2 ">Before you begin</p>
              <p>Unplug any cables from your phone. Hold the power and either volume buttons and slide to power off your phone.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image">
              <img src="\iphonediy/ip/battery/3.jpg" alt="steps">
          </div>
          <div class="product-info">
              <h1>Step 2</h1>
              <p class="section__text__p2 ">Tape over any cracks</p>
              <p>If your screen or back glass is badly cracked, lay overlapping strips of packing tape over the glass to protect yourself and make disassembly easier.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/4.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 3</h1>
              <p class="section__text__p2 ">Remove the pentalobe screws</p>
              <p>Use a P2 pentalobe driver to remove the two 7.7 mm-long screws on either side of the charging port.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/5.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 4</h1>
              <p class="section__text__p2 ">Mark your opening picks</p>
              <p>If inserted too far, an opening pick can damage your device. 
                Follow this step to mark your pick and prevent damage.
                Measure 3 mm from the tip and mark the opening pick with a permanent marker.
                You can also mark the other corners of the pick with different measurements.
                Alternatively, tape a coin to a pick 3 mm from the tip.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/6.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 5</h1>
              <p class="section__text__p2">Secure the screen</p>
              <p>The next four steps demonstrate the Anti-Clamp, a tool we designed to make the opening procedure easier. 
                If you aren't using the Anti-Clamp, skip down four steps for an alternate method. 
                The Anti-Clamp applies suction to both the screen and the back glass. <br/>
                To open only the back glass, you need to secure the screen with tape. 
                You can also check out the full instructions on how to use this tape.
                Cut two strips of tape, apply them along the long edges of the phone, 
                and fold them over the screen to secure it.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/7.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 6</h1>
              <p class="section__text__p2">Secure an Anti-Clamp</p>
              <p>Pull the Anti-Clamp's blue handle backward to unlock the arms.

  With the back glass facing up, slide the arms over the right edge of your phone, 
  with one suction cup on the back glass and the other on the screen. 
  Center the suction cups near the bottom edge.
  Support your phone so it rests level while between the Anti-Clamp's arms a small box works well.
  Squeeze the cups together to create suction.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/8.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 7</h1>
              <p class="section__text__p2">Create a gap under the back glass</p>
              <p>Pull the blue handle forward to lock the arms.
  Turn the handle one full turn (360 degrees) or until the cups start to stretch.
  As the cups stretch, make sure they stay vertically aligned with each other. 
  If they keep slipping, remove the Anti-Clamp and apply tape for the cups to stick to.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/9.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 8</h1>
              <p class="section__text__p2">Insert an opening pick</p>
              <p>Use a hair dryer or heat gun to heat the bottom edge of the back glass until it's hot to the touch. 
              Wait up to a minute for the adhesive to separate and a gap to form between the back glass and the frame. 
              Insert an opening pick into the gap.
  Remove the Anti-Clamp using the pull tabs on the suction cups.
              </p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/10.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 9</h1>
              <p class="section__text__p2">Heat the bottom edge</p>
              <p>Use a hair dryer or heat gun to heat the bottom edge of the back glass until it's hot to the touch.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/11.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 10</h1>
              <p class="section__text__p2">Insert an opening pick</p>
              <p>
  Apply a suction handle to the bottom edge of the back glass.
  While supporting the frame with one hand, pull up on the handle with a strong, 
  steady force to create a gap between the back glass and the frame.
  Insert the tip of an opening pick into the gap.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/13.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 11</h1>
              <p class="section__text__p2">Back glass information</p>
              <p>A delicate cable connecting the back glass to the phone, right next to the volume down button. 
                Don't insert your pick here to avoid slicing the cable.
  Multiple spring contacts around the perimeter of the phone.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/12s.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 12</h1>
              <p class="section__text__p2">Separate the top right adhesive</p>
              <p>Slide your second opening pick around the top left corner and along the top edge to separate the adhesive and release the metal clips.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/14.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 13</h1>
              <p class="section__text__p2">Reposition the back glass</p>
              <p>Swing open the back glass to the right of the phone to separate the remaining adhesive.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/15.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 14</h1>
              <p class="section__text__p2">Remove the middle connector cover screws</p>
              <p>Use a tri-point Y000 driver to remove the two 1 mm‑long screws securing the middle connector cover.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/16.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 15</h1>
              <p class="section__text__p2">Remove the middle connector cover</p>
              <p>Insert the point of a spudger in either cutout on the middle connector cover.</p>
              <p>Slide the cover towards the left edge of the phone and release its hook from its slot on the logic board.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/17.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 16</h1>
              <p class="section__text__p2">Disconnect the battery</p>
              <p>Use the point of a spudger to pry up and disconnect the battery press connector.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/18.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 17</h1>
              <p class="section__text__p2">Disconnect the battery</p>
              <p>Unplug it</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/19.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 18</h1>
              <p class="section__text__p2">Disconnect the wireless charging coil</p>
              <p>Use the point of a spudger to pry up and disconnect the wireless charging coil press connector.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/20.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 19</h1>
              <p class="section__text__p2">Remove the back glass</p>
              <p>Lift the back glass off the frame and remove it.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/21.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 20</h1>
              <p class="section__text__p2">Separate the silver tab</p>
              <p>Use an opening pick, or a clean fingernail, to peel up the silver tab at the bottom edge of the battery.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/22.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 21</h1>
              <p class="section__text__p2">Assemble the VoltClip</p>
              <p>Plug the VoltClip's barrel connector into the USB-C elbow.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/22.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 22</h1>
              <p class="section__text__p2">Assemble the VoltClip</p>
              <p>Don't connect the VoltClip to a power source just yet. The loose alligator clips may accidentally touch each other and cause an electrical short.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/23.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 23</h1>
              <p class="section__text__p2">Attach the alligator clips</p>
              <p>Attach the red alligator clip to the silver tab.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/24.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 24</h1>
              <p class="section__text__p2">Attach the alligator clips</p>
              <p>Attach the black alligator clip to the grounding screw.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/25.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 25</h1>
              <p class="section__text__p2">Connect power to the VoltClip</p>
              <p>Make sure the red alligator clip isn't touching any stray metallic surfaces.</p>
              <p>Connect a powered USB-C cable to the USB-C elbow and wait 90 seconds for the adhesive to loosen.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/26.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 26</h1>
              <p class="section__text__p2">Disconnect the VoltClip</p>
              <p>Disconnect the USB-C cable from the elbow, then disconnect the alligator clips.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/27.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 27</h1>
              <p class="section__text__p2">Remove the battery</p>
              <p>Your adhesive should be fully loosened at this point. If your battery doesn't budge during the step, reconnect the alligator clips for an additional minute and try again.</p>
              <p>Grip the silver tab and lift the battery out of the frame.</p>
            </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/28.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 28</h1>
              <p class="section__text__p2">End of disassembly</p>
              <p>Congratulations on completing disassembly! The remaining steps will show you how to reassemble your device.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/29.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 29</h1>
              <p class="section__text__p2">Remove residual battery adhesive</p>
              <p>Use a pair of tweezers to peel up any large pieces of residual battery adhesive from the iPhone frame.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/30.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 30</h1>
              <p class="section__text__p2">Remove the top battery‑side liner</p>
              <p>Lay the old battery with the adhesive facing up next to the new battery. Lay the new adhesive on the new battery to see how it needs to be applied.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/31.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 31</h1>
              <p class="section__text__p2">Apply the top of the adhesive</p>
              <p>With the old battery nearby so you can align the new adhesive correctly, use your finger to lightly press the new adhesive to the new battery.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/32.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 32</h1>
              <p class="section__text__p2">Remove the bottom battery‑side liner</p>
              <p>If the battery‑side of your adhesive still has a bottom liner on it, remove it now.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/33.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 33</h1>
              <p class="section__text__p2">Press the adhesive</p>
              <p>Lay the adhesive onto the battery and press it into place.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/34.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 34</h1>
              <p class="section__text__p2">Fold the conductive tab</p>
              <p>Use your finger to fold the conductive tab around to the front of the battery and press it into place.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/35.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 35</h1>
              <p class="section__text__p2">Remove the iPhone‑side liner</p>
              <p>Peel the iPhone‑side liner off of the battery adhesive.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/36.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 36</h1>
              <p class="section__text__p2">Connect the battery</p>
              <p>Hold the battery over its place in the iPhone, but don't lower it into place yet.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/37.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 37</h1>
              <p class="section__text__p2">Connect the battery</p>
              <p>To ensure the battery is properly placed, use a spudger or your finger to connect the battery press connector.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/38.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 38</h1>
              <p class="section__text__p2">Remove the back glass adhesive</p>
              <p>Use the pointed end of a spudger to press and roll the adhesive until you can grip it with a pair of tweezers.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/39.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 39</h1>
              <p class="section__text__p2">Clean the frame</p>
              <p>Wrap a microfiber or lint-free cloth over the point of a spudger and apply a few drops of high-concentration isopropyl alcohol (over 90%) to the cloth.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/40.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 40</h1>
              <p class="section__text__p2">Clean the black glass</p>
              <p>Apply a few drops of high-concentration isopropyl alcohol (over 90%) to a microfiber or lint-free cloth and wipe around the perimeter of the back glass to prepare the surface for new adhesive.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/41.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 41</h1>
              <p class="section__text__p2">Orient the adhesive</p>
              <p>Orient your replacement adhesive over the frame with the larger blue liner on the underside and its pull tab in the bottom-right corner.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/42.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 42</h1>
              <p class="section__text__p2">Press the adhesive into place</p>
              <p>Use the flat end of a spudger to press the adhesive into place around the perimeter of the frame.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/43.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 43</h1>
              <p class="section__text__p2"></p>
              <p>If you don't see these pull tabs, you may have accidentally removed the thin liners in the previous step. If the adhesive is clean and properly aligned, you may proceed, just be careful not to touch anything to the exposed adhesive until you are ready to install the back glass.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/44.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 44</h1>
              <p class="section__text__p2">Connect the charging coil</p>
              <p>Prop up the back glass along the right edge of your iPhone, using a box or similar sturdy object to support the screen.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/45.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 45</h1>
              <p class="section__text__p2">Connect the battery</p>
              <p>Use the flat end of a spudger or your finger to connect the battery.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/46.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 46</h1>
              <p class="section__text__p2">Install the cover</p>
              <p>Lay the connector cover on the phone so the hooks are slightly to the left of their slots in the logic board.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/47.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 47</h1>
              <p class="section__text__p2">Remove the final adhesive liners</p>
              <p>Use the blue tabs to remove the liners from the bottom, left, and top edges of your iPhone. Wait to remove the liner along the right edge.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/48.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 48</h1>
              <p class="section__text__p2"></p>
              <p>Without letting the back glass touch the adhesive, hold the back glass over the phone so you can access the final liner along the right edge of the phone.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy/ip/battery/49.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 49</h1>
              <p class="section__text__p2">Place the back glass</p>
              <p>Hold the back glass above the phone and align it with the frame.</p>
              <p>Lay the glass straight down onto the frame and press until the clips engage.</p>
          </div>
      </div>
    </section>
    <br><br><br>
    <footer><p>Copyright &#119; 2025 iPhone DIY. All Rights Reserved.</p></footer>
  </body>
  </html>