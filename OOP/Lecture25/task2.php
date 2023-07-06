<?php

function generateHTMLTable($xmlFile) {
    $xml = simplexml_load_file($xmlFile);

    $html = '<table>';
    $html .= '<tr><th>Tag</th><th>Attributes</th><th>Value</th></tr>';

    foreach ($xml->children() as $child) {
        $tagName = $child->getName();
        $attributes = '';
        $value = '';

        foreach ($child->attributes() as $attrName => $attrValue) {
            $attributes .= $attrName . '="' . $attrValue . '" ';
        }

        if ($child->count() == 0) {
            $value = htmlspecialchars($child);
        }

        $html .= '<tr>';
        $html .= '<td>' . $tagName . '</td>';
        $html .= '<td>' . trim($attributes) . '</td>';
        $html .= '<td>' . $value . '</td>';
        $html .= '</tr>';
    }

    $html .= '</table>';

    return $html;
}

$xmlFile = 'example.xml';
$htmlTable = generateHTMLTable($xmlFile);

echo $htmlTable;
