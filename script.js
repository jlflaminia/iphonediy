function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

// Device mapping: keys are normalized search terms, values are page URLs
const deviceMap = {
  "16": "ip16.php",
  "iphone 16": "ip16.php",
  "ip16": "ip16.php",
  "15": "ip15.php",
  "iphone 15": "ip15.php",
  "ip15": "ip15.php",
  "14": "ip14.php",
  "iphone 14": "ip14.php",
  "ip14": "ip14.php",
  "13": "ip13.php",
  "iphone 13": "ip13.php",
  "ip13": "ip13.php",
  "12": "ip12.php",
  "iphone 12": "ip12.php",
  "ip12": "ip12.php",
  "11": "ip11.php",
  "iphone 11": "ip11.php",
  "ip11": "ip11.php",
  "xs": "ipxs.php",
  "iphone xs": "ipxs.php",
  "ipxs": "ipxs.php",
  "x": "ipx.php",
  "iphone x": "ipx.php",
  "ipx": "ipx.php"
};

function findDevice() {
  const input = document.getElementById('device-search-input');
  let query = input.value.trim().toLowerCase();

  // Normalize input: remove "iphone" and extra spaces
  query = query.replace(/iphone\s*/g, '').replace(/\s+/g, ' ').trim();

  // Try direct match
  if (deviceMap[query]) {
    window.location.href = deviceMap[query];
    return;
  }

  // Try with "iphone " prefix
  if (deviceMap["iphone " + query]) {
    window.location.href = deviceMap["iphone " + query];
    return;
  }

  // Try with "ip" prefix
  if (deviceMap["ip" + query]) {
    window.location.href = deviceMap["ip" + query];
    return;
  }

  // Not found: show alert or handle gracefully
  alert("Device not found. Please enter a valid iPhone model (e.g., 'iPhone 16', 'XS', 'X').");
}