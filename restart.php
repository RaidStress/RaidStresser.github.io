<?php

$token = "525d5a88fb611915d9faa6e7656be7df";

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.wifi.rip/v1/attacks?token=".$token,
CURLOPT_RETURNTRANSFER => 1
));

$response = curl_exec($curl);
curl_close($curl);

echo $response;

[
{
"id": 123,
"target": "1.2.3.4",
"port": "80",
"duration": "3600",
"time_remaining": 0,
"method": "LDAP",
"pps": 500000,
"ongoing": false
},
{
"id": 124,
"target": "1.2.3.4",
"port": "80",
"duration": "3600",
"time_remaining": 100,
"method": "LDAP",
"pps": 500000,
"ongoing": true
}
]