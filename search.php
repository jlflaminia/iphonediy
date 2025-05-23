
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Search Results</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
</head>
<body>
    <nav id="desktop-nav">
      <div class="logo">iPhone DIY</div>
      <div>
        <ul class="nav-links">
          <li><a href="index.php#categories">Categories</a></li>
          <li><a href="index.php#about">About Us</a></li>
          <?php if (isset($_SESSION['username'])): ?>
            <li><a href="index.php#profile">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
          <?php else: ?>
            <li><a href="login.php">Login</a></li>
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])): ?>
             <li><a href="logout.php">Logout</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
    <main style="padding: 2rem;">
        <h1 class="title">Search Results</h1>
        <?php
        if (isset($_GET['device_query']) && trim($_GET['device_query']) !== '') {
            $query = htmlspecialchars(trim($_GET['device_query']));
            echo "<p class='section__text__p1'>You searched for: <strong>" . $query . "</strong></p>";

            // TODO: Replace this with your actual search logic (e.g., database query)
            // Example: $results = searchDevices($query);

            // Placeholder logic for demonstration:
            $devices = [
                "iPhone 16", "iPhone 15", "iPhone 14", "iPhone 13", "iPhone 12", "iPhone 11", "iPhone XS", "iPhone X"
            ];
            $matches = [];
            foreach ($devices as $device) {
                if (stripos($device, $query) !== false) {
                    $matches[] = $device;
                }
            }

            if (count($matches) > 0) {
                echo "<ul class='section__text__p1'>";
                foreach ($matches as $match) {
                    // Link to the corresponding device page if it exists
                    $slug = strtolower(str_replace([' ', 'iphone'], ['', 'ip'], $match));
                    echo "<li><a href='{$slug}.php'>" . htmlspecialchars($match) . "</a></li>";
                }
                echo "</ul>";
            } else {
                echo "<p class='section__text__p1'>No devices found matching your search.</p>";
            }
        } else {
            echo "<p class='section__text__p1'>Please enter a device name to search.</p>";
        }
        ?>
        <br>
        <a href="index.php#profile" >Back to Home</a>
    </main>
</body>
</html>
