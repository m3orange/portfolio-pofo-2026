<?php
require_once '../db-config.php';

header('Content-Type: application/json');

try {
    $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER,
        DB_PASS
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT * FROM work_experience ORDER BY sort_order ASC');
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Parse bullets from JSON string to array
    foreach ($jobs as &$job) {
        $job['bullets'] = $job['bullets'] ? json_decode($job['bullets']) : [];
    }

    echo json_encode($jobs);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database connection failed']);
}