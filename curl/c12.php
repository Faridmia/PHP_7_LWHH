<?php 

$ch = curl_init("https://unsplash.com/photos/47bVgRJ3bFI");

//curl_setopt($ch,CURLOPT_VERBOSE,1);// bistarito dakhar jonno..

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_exec($ch);

//$info = curl_getinfo($ch,CURLINFO_HTTP_CODE);
$info = curl_getinfo($ch);

//echo $info;
echo '<pre>';
print_r($info);
echo "</pre>";
echo "header area output under the below: <br/>";

$headers = get_headers("https://unsplash.com/photos/47bVgRJ3bFI");

echo '<pre>';
print_r($headers);
echo "</pre>";