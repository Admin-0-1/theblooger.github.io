<?php
$url = "http://localhost/api/api/save.php?name=john&age=76";
//$url = "http://localhost/blooger/search.php?find=nice";

$ch = curl_init() ;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name=mary&age=96');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));



$data = curl_exec($ch);
echo "<pre>";
echo $data;