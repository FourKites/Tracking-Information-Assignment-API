<?php

// Credentials
$credentials = [
    'username'      => '',
    'password'      => ''
];

// Information to be assigned
$content = [
    'shipper'       => '',  // An internal code to identify the shipper
    'billOfLading'  => '',  // Load/shipment Number
    'tractorNumber' => '',  // Truck plate
    'trailerNumber' => '',  // Trailer plate
];

// Generating the Payload
$payload = json_encode($content);

// Send the request
$curl = curl_init('https://tracking-api.fourkites.com/api/v1/tracking/truck_assignment');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curl, CURLOPT_USERPWD, $credentials['username'] . ':' . $credentials['password']);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($curl);
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

// Do whatever you need at this point
$response = json_decode($response);
if($status_code != 200) {
    // Unsuccessful Response
    print_r($response);
} else {
    // Successful Response
    echo('Information successfuly sent!');
}