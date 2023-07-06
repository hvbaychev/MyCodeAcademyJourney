<?php

function convertXMLToJson($xmlFile) {
    $xml = simplexml_load_file($xmlFile);
    $json = json_encode($xml, JSON_PRETTY_PRINT);

    return $json;
}

function convertXMLToCsv($xmlFile, $csvFile) {
    $xml = simplexml_load_file($xmlFile);

    $csv = fopen($csvFile, 'w');
    $headers = [];
    $data = [];

    foreach ($xml->children() as $child) {
        $row = [];
        foreach ($child->children() as $key => $value) {
            if (!in_array($key, $headers)) {
                $headers[] = $key;
            }
            $row[$key] = (string) $value;
        }
        $data[] = $row;
    }

    fputcsv($csv, $headers);
    foreach ($data as $row) {
        fputcsv($csv, $row);
    }

    fclose($csv);
}

$xmlFile = 'example.xml';
$jsonData = convertXMLToJson($xmlFile);

file_put_contents('example.json', $jsonData);
echo 'XML converted to JSON successfully.';

$xmlFile = 'example.xml';
$csvFile = 'example.csv';
convertXMLToCsv($xmlFile, $csvFile);
echo 'XML converted to CSV successfully.';
