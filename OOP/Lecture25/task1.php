<?php

function extractUniqueTags($xmlFile) {
    $xml = simplexml_load_file($xmlFile);
    $tags = [];

    foreach ($xml->children() as $child) {
        $tagName = $child->getName();
        $tags[$tagName] = true;
    }

    $uniqueTags = array_keys($tags);
    sort($uniqueTags);

    return $uniqueTags;
}

$xmlFile = 'example.xml';
$uniqueTags = extractUniqueTags($xmlFile);

echo "Unique Tags:\n";
foreach ($uniqueTags as $tag) {
    echo $tag . "\n";
}
