<?php

// To fetch data from multiple Airtable tables using PHP, you can group your table names into an array and loop through them to make separate cURL requests. – Google AI


// 1. Configuration
$token = 'pat8v9tpjPEK9Kruj.01aa47bfccf4b6a2c7c8ff837085a93ad77ca98649ea4ec09c8894203cee3d3c';
$baseId = 'appEbLXtEtdPOdDlZ';

// Define all the tables you want to fetch from
$tables = [
    'Users',
    'Orders',
    'Inventory'
];

$headers = [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json'
];

// Array to hold all combined data
$allTableData = [];

// 2. Loop through each table
foreach ($tables as $tableName) {
    // Encode table name to safely pass it into the API endpoint URL
    $url = "https://airtable.com" . $baseId . "/" . rawurlencode($tableName);

    // Initialize and execute the cURL request for the current table
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    // Error Handling
    if (curl_errno($ch)) {
        echo "Error fetching table '$tableName': " . curl_error($ch) . "<br>";
        curl_close($ch);
        continue; // Skip to next table on error
    }

    curl_close($ch);

    // Decode JSON string to associative array
    $data = json_decode($response, true);

    // Store records under their specific table key
    if (isset($data['records'])) {
        $allTableData[$tableName] = $data['records'];
    } else {
        $allTableData[$tableName] = []; // Empty array if no records or error
    }
}

// 3. Display the structured data
foreach ($allTableData as $tableName => $records) {
    echo "<h2>Table: " . htmlspecialchars($tableName) . "</h2>";
    
    if (empty($records)) {
        echo "<p>No records found.</p>";
        continue;
    }

    foreach ($records as $record) {
        $id = $record['id'];
        $fields = $record['fields'];
        
        echo "<strong>Record ID:</strong> " . $id . "<br>";
        echo "<pre>" . print_r($fields, true) . "</pre>";
        echo "<hr>";
    }
}
?>
