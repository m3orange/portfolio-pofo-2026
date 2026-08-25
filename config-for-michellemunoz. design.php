<?php

// Detect environment
$isLocal = in_array($_SERVER['HTTP_HOST'], [
    'localhost',
    '127.0.0.1',
    'localhost:8000',
]);

if ($isLocal) {
    // Local development
    define('BASE_URL', 'http://localhost:8000/');
    define('ROOT_PATH', __DIR__ . '/');
} else {
    // Production server    
    // define('BASE_URL', 'https://darkred-albatross-326006.hostingersite.com/');
    define('BASE_URL', 'https://www.michellemunoz.design/');
    define('ROOT_PATH', __DIR__ . '/');
}

?>

