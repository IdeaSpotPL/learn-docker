<?php
// get payload from 'php://input'
$payload = file_get_contents('php://input');
$payload = json_decode($payload, true);

// get data
$data = $payload['data'];

// change all output to uppercase
$output = [];
foreach ($data as $item) {
    $output[] = strtoupper($item);
}

// prepare response with keys success and data
$response = [
    'success' => true,
    'data' => $output,
];


// return json-encoded response with JSON_PRETTY_PRINT and Content-type application/json
header("Content-type: application/json");
echo json_encode($response, JSON_PRETTY_PRINT);
