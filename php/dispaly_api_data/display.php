<?php
// Define the API endpoint and authentication key
$apiUrl = "http://localhost:3000/api/customer/read.php?api_key=your-api-key"; // Replace with your API endpoint
$apiKey = "your-api-key"; // Replace with your API authentication key

// Create a stream context with the authentication key
$context = stream_context_create([
    'http' => [
        //'header' => "api_key:  $apiKey"
    ]
]);

// Fetch data from the API
$response = file_get_contents($apiUrl, false, $context);

if ($response) {
    $data = json_decode($response);

    if ($data && isset($data->data)) {
        foreach ($data->data as $item) {
            echo '<tr>';
            echo '<td>' . $item->name . '</td>';
            echo '<td>' . $item->username . '</td>';
            echo '<td>' . $item->password . '</td>';
            echo '<td>' . $item->u_id . '</td>';
            echo '</tr>';
        }
    }
} else {
    echo '<tr><td colspan="4">Error fetching data from API</td></tr>';
}
?>
