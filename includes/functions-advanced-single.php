<?php

// To fetch data from Airtable using PHP, you can send a standard HTTP GET request via cURL to the official Airtable Web API. Fetching Records with cURL > This vanilla PHP script initializes a cURL session, authenticates using your Personal Access Token, and fetches records. - Google AI


// Define configuration variables
$token = 'YOUR_PERSONAL_ACCESS_TOKEN';
$baseId = 'appXXXXXXXXXXXXXX';
$tableName = 'Your Table Name';

// Encode table name to safely pass it into the API endpoint URL
$url = "https://api.airtable.com/v0/" . $baseId . "/" . rawurlencode($tableName);

// Set authorization and content-type headers
$headers = [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json'
];

// Initialize and execute the cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

// Error Handling
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
    exit;
}

curl_close($ch);

// Decode JSON string to associative array
$data = json_decode($response, true);

// Loop through and print out records
if (isset($data['records'])) {
    foreach ($data['records'] as $record) {
        $id = $record['id'];
        $fields = $record['fields'];
        
        echo "Record ID: " . $id . "<br>";
        print_r($fields);
        echo "<hr>";
    }
} else {
    echo "No records found or error occurred.";
    print_r($data);
}
?>
