
<?php
$isLocal = in_array($_SERVER['HTTP_HOST'], [
    'localhost',
    '127.0.0.1',
    'localhost:8000',
]);

if ($isLocal) {
    define('DB_HOST', 'srv1532.hstgr.io'); // remote Hostinger DB
    define('DB_NAME', 'u956852898_portfolio_db');
    define('DB_USER', 'u956852898_portfolio_2026');
    define('DB_PASS', 'Tibor*812');
} else {
    define('DB_HOST', 'localhost'); // on Hostinger's server, local is faster
    define('DB_NAME', 'u956852898_portfolio_db');
    define('DB_USER', 'u956852898_portfolio_2026');
    define('DB_PASS', 'Tibor*812');
}