
<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$host = 'localhost';
$db = 'masterdiy';
$user = 'root';
$pass = '';
$submitted = false;
$created_by = $_SESSION['username'];
$display_username = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $guideType = htmlspecialchars($_POST['guide-type']);
    $device = "iPhone 13"; // Device is fixed
    $part = htmlspecialchars($_POST['part']);
    $title = htmlspecialchars($_POST['title']);
    $introduction = htmlspecialchars($_POST['introduction']);
    $difficultyEstimate = htmlspecialchars($_POST['difficulty-estimate']);
    $tools = htmlspecialchars($_POST['tools']);
    $conclusion = htmlspecialchars($_POST['conclusion']);

    // Handle steps, step-type, wisdom as arrays and encode as JSON
    $steps = isset($_POST['steps']) ? $_POST['steps'] : [];
    $stepType = isset($_POST['step-type']) ? $_POST['step-type'] : [];
    $wisdom = isset($_POST['wisdom']) ? $_POST['wisdom'] : [];

    // Handle step images
    $stepImages = [];
    if (isset($_FILES['step-image'])) {
        $files = $_FILES['step-image'];
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        for ($i = 0; $i < count($files['name']); $i++) {
            if ($files['error'][$i] === UPLOAD_ERR_OK && $files['name'][$i] != '') {
                $tmpName = $files['tmp_name'][$i];
                $fileName = uniqid('stepimg_') . '_' . basename($files['name'][$i]);
                $targetFile = $uploadDir . $fileName;
                if (move_uploaded_file($tmpName, $targetFile)) {
                    $stepImages[] = $targetFile;
                } else {
                    $stepImages[] = null; // Or handle error
                }
            } else {
                $stepImages[] = null;
            }
        }
    }

    // Encode arrays as JSON
    $stepsJson = json_encode($steps);
    $stepTypeJson = json_encode($stepType);
    $wisdomJson = json_encode($wisdom);
    $stepImagesJson = json_encode($stepImages);

    // Prepare an SQL statement (add created_by column)
    $stmt = $conn->prepare("INSERT INTO guides (guide_type, device, part, title, introduction, difficulty_estimate, tools, conclusion, steps, step_type, wisdom, step_images, created_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $guideType, $device, $part, $title, $introduction, $difficultyEstimate, $tools, $conclusion, $stepsJson, $stepTypeJson, $wisdomJson, $stepImagesJson, $created_by);

    // Execute the statement
    if ($stmt->execute()) {
        $last_id = $conn->insert_id;
        $submitted = true;
        $display_username = $created_by;
        // Optionally, redirect to a guide view page:
        // header("Location: ip13.php?guide_id=" . $last_id);
        // exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Guide</title>
    <link rel="shortcut icon" href="assets/iphone-x.png" type="image/x-icon">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/guide.css">
</head>

<body>        
    
<div class="guide-container">  
<?php if ($submitted): ?>
    <div class="success-message" style="text-align: center;">
        <h2 style="color: #222; font-size: 1.6rem; margin-bottom: 10px;">Guide Submitted for Review</h2>
        <p style="color: #444; font-size: 1rem; margin-bottom: 18px;">
            Thank you, <strong><?php echo htmlspecialchars($display_username); ?></strong>.<br>
            Your guide has been received and is now pending admin approval.<br>
            You will see your guide listed once it has been reviewed and approved.
        </p>
        <a href="ip13.php" style="color: #333;">Back to Guides</a>
    </div>
<?php else: ?>
</div>
    <div class="guide-container">
        <h1 class="title">Create a Guide</h1>
        <form method="POST" enctype="multipart/form-data">
        <section class="section">
            <h2 class="section__text__p1">Introduction</h2>
            <label for="guide-type">What type of guide is this?</label>
            <input type="text" id="guide-type" name="guide-type" placeholder="Replacement" required>

            <label for="device">Device</label>
            <div style="margin-bottom:10px;font-weight:600;">iPhone 13</div>
            <input type="hidden" id="device" name="device" value="iPhone 13">

            <label for="part">What part are you replacing?</label>
            <input type="text" id="part" name="part" placeholder="battery" required>

            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="iPhone 13 battery Replacement" required>

            <label for="introduction">Introduction</label>
            <textarea id="introduction" name="introduction" placeholder="Insert introduction here..." required></textarea>

            <h2>Details</h2>
            <label for="difficulty-estimate">Difficulty estimate</label>
            <select id="difficulty-estimate" name="difficulty-estimate" class="options">
                <option>No estimate</option>
                <option>Easy</option>
                <option>Moderate</option>
                <option>Difficult</option>
            </select>

            <label for="tools">Tools</label>
            <input type="text" id="tools" name="tools" placeholder="Add tools">

            <label for="conclusion">Conclusion</label>
            <textarea id="conclusion" name="conclusion" placeholder="To reassemble your device, follow these instructions in reverse order."></textarea>
            
            <h2>Guide Steps</h2>
            <div id="steps-section">
                <div class="step-block">

                    <label>Step Title</label>
                    <input type="text" name="steps[]" placeholder="Step 1">

                    <label>Add Image</label>
                    <div class="step-image-placeholder" onclick="triggerImageUpload(this)">
                        <input type="file" accept="image/*" name="step-image[]" style="display:none" onchange="previewStepImage(this)">
                        <div class="image-preview">
                            <span class="plus-icon">+</span>
                            <span class="image-text">Add Image</span>
                        </div>
                    </div>

                    <label>Description:</label>
                    <textarea name="wisdom[]" placeholder="Insert description here..."></textarea>
                </div>
            </div>
            <button type="button" class="add-step" onclick="addStep()">Add Step</button>
        </section>

        <div>
            <button type="submit" class="save-button">Save Guide</button>
        </div>
        </form>
        <?php endif; ?>
    </div>

<script>
let stepCount = 1;
function addStep() {
    stepCount++;
    const stepsSection = document.getElementById('steps-section');
    const stepBlock = document.createElement('div');
    stepBlock.className = 'step-block';
    stepBlock.innerHTML = `

        <label>Step Title</label>
        <input type="text" name="steps[]" placeholder="Step ${stepCount}">

        <label>Add Image</label>
        <div class="step-image-placeholder" onclick="triggerImageUpload(this)">
            <input type="file" accept="image/*" name="step-image[]" style="display:none" onchange="previewStepImage(this)">
            <div class="image-preview">
                <span class="plus-icon">+</span>
                <span class="image-text">Add Image</span>
            </div>
        </div>

        <label>Description:</label>
        <textarea name="wisdom[]" placeholder="Insert description here..."></textarea>
    `;
    stepsSection.appendChild(stepBlock);
}

// Trigger file input when placeholder is clicked
function triggerImageUpload(placeholderDiv) {
    const fileInput = placeholderDiv.querySelector('input[type="file"]');
    fileInput.click();
}

// Preview the uploaded image
function previewStepImage(input) {
    const placeholderDiv = input.closest('.step-image-placeholder');
    const previewDiv = placeholderDiv.querySelector('.image-preview');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewDiv.innerHTML = `
                <img src="${e.target.result}" alt="Step Image">
                <button type="button" class="remove-image-btn" onclick="removeStepImage(this)">×</button>
            `;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Remove the image and reset the placeholder
function removeStepImage(btn) {
    const previewDiv = btn.parentElement;
    const placeholderDiv = previewDiv.closest('.step-image-placeholder');
    const fileInput = placeholderDiv.querySelector('input[type="file"]');
    fileInput.value = '';
    previewDiv.innerHTML = `
        <span class="plus-icon">+</span>
        <span class="image-text">Add Image</span>
    `;
}
</script>

</body>
</html>
