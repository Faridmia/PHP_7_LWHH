<?php
require_once "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser;
$word = 'science';

$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";

echo "<h1>Meaning of the {$word} </h1>";

$ch = curl_init($endpoint);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

$result = curl_exec($ch);

$test = HtmlDomParser::str_get_html($result);

$short = $test->getElementByTagName("p.short");

echo "<strong>short meaning</strong>: {$short}<br/>";


$long = $test->getElementByTagName("p.long");


$alldd = $test->find("dd a");

echo $allddd[2]->plaintext;
echo "<strong>Long meaning</strong>: {$long}<br/>";