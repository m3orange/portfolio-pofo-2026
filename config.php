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
    // define('BASE_URL', 'https://www.michellemunoz.info/');
    define('BASE_URL', 'https://lightpink-hedgehog-479399.hostingersite.com/');
    define('ROOT_PATH', __DIR__ . '/');
}

?>

