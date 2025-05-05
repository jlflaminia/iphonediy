<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Guide</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="shortcut icon" href="assets/ip-logo.png" type="image/x-icon">
     <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: auto;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

h1 {
    text-align: center;
}

.section {
    margin-bottom: 20px;
}

h2 {
    margin-bottom: 10px;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input[type="text"],
textarea,
input[type="range"],
select {
    width: 97%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    height: 100px;
    resize: none;
}

.step-image-placeholder {
    width: 100%;
    height: 150px;
    border: 2px dashed #ccc;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    border-radius: 4px;
}

.save-button {
    background-color: grey;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    cursor: pointer;
}

.save-button:hover {
    background-color: black;
}
     </style>
</head>
<body>
    <div class="container">
        <h1>Create a Guide</h1>

        <section class="section">
            <h2>Introduction</h2>
            <label for="guide-type">What type of guide is this?</label>
            <input type="text" id="guide-type" placeholder="Replacement">

            <label for="device">Device</label>
            <input type="text" id="device" placeholder="Example: iPhone 16">

            <label for="part">What part are you replacing?</label>
            <input type="text" id="part" placeholder="battery">

            <label for="title">Title</label>
            <input type="text" id="title" placeholder="iPhone 16 battery Replacement">

            <label for="introduction">Introduction</label>
            <textarea id="introduction" placeholder="Insert introduction here..."></textarea>
        </section>

        <section class="section">
            <h2>Details</h2>
            <label for="difficulty-estimate">Difficulty estimate</label>
            <select id="difficulty-estimate">
                <option>No estimate</option>
                <option>Easy</option>
                <option>Moderate</option>
                <option>Difficult</option>
            </select>

            <label for="tools">Tools</label>
            <input type="text" id="tools" placeholder="Add a tool">

            <label for="parts">Parts</label>
            <input type="text" id="parts" placeholder="Add a part">

            <label for="conclusion">Conclusion</label>
            <textarea id="conclusion" placeholder="To reassemble your device, follow these instructions in reverse order."></textarea>
        </section>

        <section class="section">
            <h2>Guide Steps</h2>
            <h3>Editing Step 1 — Add a title</h3>
            <label for="step-type">Step Type</label>
            <select id="step-type">
                <option>Image</option>
                <option>Media</option>
            </select>

            <div class="step-image-placeholder">
                <p>+ Image</p>
            </div>

            <label for="wisdom">Insert wisdom here:</label>
            <textarea id="wisdom" placeholder="Insert wisdom here..."></textarea>
            <button class="save-button">Save</button>
        </section>
    </div>
</body>
</html>