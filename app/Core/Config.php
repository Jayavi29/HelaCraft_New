<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // Local development DB settings
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'helacraft');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    define('ROOT', 'http://localhost/HelaCraft/');
} else {
    // Production DB settings (update as needed)
    define('DB_HOST', 'production_host');
    define('DB_NAME', 'production_db');
    define('DB_USER', 'production_user');
    define('DB_PASS', 'production_pass');
}

// General app settings
define('APP_NAME', 'HelaCraft');
define('APP_VERSION', '1.0.0');
define('APP_URL', 'http://localhost/HelaCraft/'); // Update for production if needed

define('DEBUG', true); // Set to false in production
