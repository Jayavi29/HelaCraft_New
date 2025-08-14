<?php

// Debug helper: nicely print arrays or objects
function show($stuff) {
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

// Escape HTML special characters for safe output
function esc($str) {
    return htmlspecialchars($str);
}
