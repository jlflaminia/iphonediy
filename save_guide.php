<?php
// Display all saved guides
if (file_exists('guides.txt')) {
    $lines = file('guides.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo '<div class="guides-section">';
    echo '<h2>Submitted Guides</h2>';
    foreach ($lines as $line) {
        $guide = json_decode($line, true);
        if ($guide) {
            echo '<div class="guide">';
            echo '<h3>' . htmlspecialchars($guide['title']) . '</h3>';
            echo '<p><strong>Type:</strong> ' . htmlspecialchars($guide['guide_type']) . '</p>';
            echo '<p><strong>Device:</strong> ' . htmlspecialchars($guide['device']) . '</p>';
            echo '<p><strong>Part:</strong> ' . htmlspecialchars($guide['part']) . '</p>';
            echo '<p><strong>Difficulty:</strong> ' . htmlspecialchars($guide['difficulty_estimate']) . '</p>';
            echo '<p><strong>Tools:</strong> ' . htmlspecialchars($guide['tools']) . '</p>';
            echo '<p><strong>Parts:</strong> ' . htmlspecialchars($guide['parts']) . '</p>';
            echo '<p><strong>Introduction:</strong> ' . nl2br($guide['introduction']) . '</p>';
            echo '<p><strong>Conclusion:</strong> ' . nl2br($guide['conclusion']) . '</p>';
            echo '<p><strong>Step Type:</strong> ' . htmlspecialchars($guide['step_type']) . '</p>';
            echo '<p><strong>Wisdom:</strong> ' . nl2br($guide['wisdom']) . '</p>';
            echo '<p style="color: #888; font-size: 0.9em;"><em>Submitted: ' . htmlspecialchars($guide['created_at']) . '</em></p>';
            echo '</div><hr>';
        }
    }
    echo '</div>';
} else {
    echo '<p>No guides submitted yet.</p>';
}
?>