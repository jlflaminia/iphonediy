<?php
// Example data structure for iPhone models and their guides.
// In a real application, this would come from a database.
$devices = [
    [
        'name' => 'iPhone 16',
        'image' => './categories/ip16.png',
        'page'  => 'ip16.php',
        'guides' => [
            ['title' => 'Screen Replacement', 'url' => 'ip16.php#screen'],
            ['title' => 'Battery Replacement', 'url' => 'ip16.php#battery'],
        ]
    ],
    [
        'name' => 'iPhone 15',
        'image' => './categories/ip15.png',
        'page'  => 'ip15.php',
        'guides' => [
            ['title' => 'Camera Repair', 'url' => 'ip15.php#camera'],
            ['title' => 'Speaker Fix', 'url' => 'ip15.php#speaker'],
        ]
    ],
    [
        'name' => 'iPhone XS',
        'image' => './categories/ipxs.png',
        'page'  => 'ipxs.php',
        'guides' => [
            ['title' => 'Charging Port Repair', 'url' => 'ipxs.php#charging'],
        ]
    ],
    [
        'name' => 'iPhone X',
        'image' => './categories/ipx.png',
        'page'  => 'ipx.php',
        'guides' => [
            ['title' => 'Screen Replacement', 'url' => 'ipx.php#screen'],
        ]
    ],
    // Add more devices as needed...
];

// Get the search query
$query = isset($_GET['q']) ? strtolower(trim($_GET['q'])) : '';

$results = [];
if ($query !== '') {
    foreach ($devices as $device) {
        // Match device name or any guide title
        if (stripos($device['name'], $query) !== false) {
            $results[] = $device;
            continue;
        }
        // Check guides
        $matching_guides = [];
        foreach ($device['guides'] as $guide) {
            if (stripos($guide['title'], $query) !== false) {
                $matching_guides[] = $guide;
            }
        }
        if (!empty($matching_guides)) {
            $device_copy = $device;
            $device_copy['guides'] = $matching_guides;
            $results[] = $device_copy;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results - iPhone DIY</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mediaqueries.css" />
    <style>
        .search-results-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        }
        .device-result {
            display: flex;
            align-items: flex-start;
            gap: 24px;
            margin-bottom: 32px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .device-result:last-child {
            border-bottom: none;
        }
        .device-img {
            width: 90px;
            height: 90px;
            object-fit: contain;
            border-radius: 8px;
            background: #f7f7f7;
        }
        .device-info {
            flex: 1;
        }
        .device-title {
            font-size: 1.3em;
            margin-bottom: 8px;
        }
        .guide-list {
            margin: 0;
            padding-left: 18px;
        }
        .guide-list li {
            margin-bottom: 6px;
        }
        .no-results {
            text-align: center;
            color: #888;
            margin: 40px 0;
        }
        .search-bar {
            display: flex;
            gap: 8px;
            margin-bottom: 32px;
            justify-content: center;
        }
        .search-bar input[type="text"] {
            flex: 1;
            min-width: 0;
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        .search-bar button {
            padding: 8px 18px;
            border-radius: 6px;
            border: none;
            background: #555;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .search-bar button:hover {
            background: #333;
        }
        @media (max-width: 600px) {
            .device-result {
                flex-direction: column;
                align-items: center;
                gap: 12px;
            }
            .device-img {
                width: 70px;
                height: 70px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo"><a href="index.php" style="text-decoration:none;color:inherit;">iPhone DIY</a></div>
    </nav>
    <div class="search-results-container">
        <form class="search-bar" method="get" action="search.php">
            <input type="text" name="q" placeholder="Search for iPhone or guide..." value="<?php echo htmlspecialchars($query); ?>" autofocus>
            <button type="submit">Search</button>
        </form>
        <?php if ($query === ''): ?>
            <div class="no-results">Please enter a search term above.</div>
        <?php elseif (empty($results)): ?>
            <div class="no-results">No results found for "<strong><?php echo htmlspecialchars($query); ?></strong>".</div>
        <?php else: ?>
            <?php foreach ($results as $device): ?>
                <div class="device-result">
                    <a href="<?php echo htmlspecialchars($device['page']); ?>">
                        <img src="<?php echo htmlspecialchars($device['image']); ?>" alt="<?php echo htmlspecialchars($device['name']); ?>" class="device-img">
                    </a>
                    <div class="device-info">
                        <div class="device-title">
                            <a href="<?php echo htmlspecialchars($device['page']); ?>"><?php echo htmlspecialchars($device['name']); ?></a>
                        </div>
                        <?php if (!empty($device['guides'])): ?>
                            <ul class="guide-list">
                                <?php foreach ($device['guides'] as $guide): ?>
                                    <li>
                                        <a href="<?php echo htmlspecialchars($guide['url']); ?>">
                                            <?php echo htmlspecialchars($guide['title']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>