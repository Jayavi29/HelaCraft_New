<?php

session_start();
require '../app/core/init.php';

// Set error reporting based on DEBUG flag
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

$app = new App();
$app->loadController(); // Load the requested controller & method
