<?php

$token = "525d5a88fb611915d9faa6e7656be7df";

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.wifi.rip/v1/attacks/stop",
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_POSTFIELDS => array(
token => $token,
attack_id => 123
)
));

$response = curl_exec($curl);
curl_close($curl);

echo $response;

{
"success": true,
"message": "Attack has been stopped"
}

{
"success": false,
"message": "What the fuck?"
}
