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
      <link rel="stylesheet" href="\iphonediy\css/style.css">
      <link rel="stylesheet" href="\iphonediy\css/mediaqueries.css">
      <link rel="stylesheet" href="\iphonediy\css/iphone-style.css">
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
          <!-- <a href="\iphone16\ip16.php" style="color:#333;">&larr; Back to iPhone 16</a>     -->
      <div class="container">
          <div class="product-image">
              <img src="\iphonediy\ip/battery.png" alt="battery">
          </div>
          <!-- <h1>iPhone 16 Battery Replacement</h1>
          <p class="date">Last updated on April 23, 2025</p> -->
          <div class="product-info">
              <h1>iPhone 16 Battery Replacement</h1>
              <p> <b>Introduction</b></p>
              <p>The guide to replace the battery in your iPhone 16.</p>
              <p>iPhone batteries are rated to 80% of their capacity for up to 500 charge cycles, or roughly 18-24 months. If your battery is draining quickly, it may be time to replace it.</p>
              <p>This iPhone and the iPhone 16 Plus use a battery adhesive that requires an electrical charge to loosen it. Apple's repair manual recommends using a heated iOpener or a heat gun to loosen the adhesive.</p>
              <p>The guide uses the Voltaic iPhone Battery Power Station to release the adhesive safely and effectively.</p>
              <p>After completing this repair, you may receive warnings about your replacement part and its battery health data, but your new battery will otherwise work normally. Our Repair Assistant is here to help.</p>
            </div>
          
            
      </section>
          <!-- <section class="parts">
              <h2>Parts</h2>
              <ul>
                  <li>
                      <span class="part-name">iPhone 16 Battery</span>
                      <span class="part-price">$29.99</span>
                  </li>
                  <li>
                      <span class="part-name">iPhone 16 Battery Adhesive</span>
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
              <img src="\iphonediy\ip/battery/1.jpg" alt="steps">
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
              <img src="\iphonediy\ip/battery/3.jpg" alt="steps">
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
          <div class="product-image"><img src="\iphonediy\ip/battery/4.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 3</h1>
              <p class="section__text__p2 ">Remove the pentalobe screws</p>
              <p>Use a P2 pentalobe driver to remove the two 7.7 mm-long screws on either side of the charging port.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy\ip/battery/5.jpg" alt="steps"></div>
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
          <div class="product-image"><img src="\iphonediy\ip/battery/6.jpg" alt="steps"></div>
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
          <div class="product-image"><img src="\iphonediy\ip/battery/7.jpg" alt="steps"></div>
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
          <div class="product-image"><img src="\iphonediy\ip/battery/8.jpg" alt="steps"></div>
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
          <div class="product-image"><img src="\iphonediy\ip/battery/9.jpg" alt="steps"></div>
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
          <div class="product-image"><img src="\iphonediy\ip/battery/10.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 9</h1>
              <p class="section__text__p2">Heat the bottom edge</p>
              <p>Use a hair dryer or heat gun to heat the bottom edge of the back glass until it's hot to the touch.</p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="\iphonediy\ip/battery/11.jpg" alt="steps"></div>
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
          <div class="product-image"><img src="./ip/battery/12.jpg" alt="steps"></div>
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
          <div class="product-image"><img src="./ip/battery/13.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 12</h1>
              <p class="section__text__p2"></p>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/14.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 13</h1>
              <p class="section__text__p2"></p>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/15.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 14</h1>
              <p class="section__text__p2"></p>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/16.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 15</h1>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/17.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 16</h1>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/18.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 17</h1>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/19.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 18</h1>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/20.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 19</h1>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/21.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 20</h1>
              <p></p>
          </div>
      </div>
    </section>
    <section id="categories">
      <div class="container">
          <div class="product-image"><img src="./ip/battery/22.jpg" alt="steps"></div>
          <div class="product-info">
              <h1>Step 21</h1>
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