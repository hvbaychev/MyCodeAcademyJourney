<?php

function validateXML($xmlFile, $xsdFile) {
    $xml = new DOMDocument();
    $xml->load($xmlFile);

    $xsd = new DOMDocument();
    $xsd->load($xsdFile);

    $validator = new DOMDocument();
    $validator->loadXML($xml->saveXML());

    return $validator->schemaValidate($xsd->saveXML());
}

$xmlFile = 'example.xml';
$xsdFile = 'example.xsd';

if (validateXML($xmlFile, $xsdFile)) {
    echo 'XML is valid according to the XSD schema.';
} else {
    echo 'XML is not valid according to the XSD schema.';
}
