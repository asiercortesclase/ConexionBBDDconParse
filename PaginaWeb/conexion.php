<?php

$className = "Task";

$url = 'https://api.parse.com/1/classes/' . $className;

$appId = 'WwkSZyH6YbBLWI0K8WkoNK7wLBaRDeFyvU1Qk1u1';
$restKey = 'jLarnaCPQ8oj3ef9hfzXr6IPiTtELs9Iwt29xFGY';

$objectData = '{"description":"Hola Asier"}';

$rest = curl_init();
curl_setopt($rest,CURLOPT_URL,$url);
curl_setopt($rest,CURLOPT_PORT,443);
curl_setopt($rest,CURLOPT_POST,1);
curl_setopt($rest,CURLOPT_POSTFIELDS,$objectData);
curl_setopt($rest,CURLOPT_HTTPHEADER, 
    array("X-Parse-Application-Id: " . $appId,
        "X-Parse-REST-API-Key: " . $restKey,
        "Content-Type: application/json"));

$response = curl_exec($rest);
echo $response;

?>