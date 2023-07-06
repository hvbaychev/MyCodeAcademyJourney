<?php

function generateJSON($xmlFile) {
    $xml = simplexml_load_file($xmlFile);
    $json = json_encode($xml, JSON_PRETTY_PRINT);

    return $json;
}

$xmlFile = 'example.xml';
$jsonData = generateJSON($xmlFile);

file_put_contents('example.json', $jsonData);
echo 'JSON file generated successfully.';
