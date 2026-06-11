<?php
    function fetchAirtable($table) {
        $token = 'pat8v9tpjPEK9Kruj.01aa47bfccf4b6a2c7c8ff837085a93ad77ca98649ea4ec09c8894203cee3d3c';
        $baseId = 'appEbLXtEtdPOdDlZ';
        // $url = "https://api.airtable.com/v0/{$baseId}/{$table}";
        $url = "https://api.airtable.com/v0/appEbLXtEtdPOdDlZ/JobListings";

        $ctx = stream_context_create([
            'http' => [
                'header' => "Authorization: Bearer {$token}\r\n"
            ]
        ]);

        $result = file_get_contents($url, false, $ctx);
        $data   = json_decode($result, true); // true = returns array instead of object
        return $data['records'];
    }

    $jobListings = fetchAirtable('JobListings');
    $education = fetchAirtable('Education');
    $skills = fetchAirtable('Skills');
?>