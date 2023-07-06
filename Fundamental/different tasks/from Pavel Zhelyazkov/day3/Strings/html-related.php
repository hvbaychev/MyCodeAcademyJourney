<?php

// strip_tags, nl2br, url_encode/url_decode htmlentities/html_entity_decode, parse_str

$html = <<<HTML_DOC
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
This is a plain text!
</body>
</html>
HTML_DOC;

var_dump(trim(strip_tags($html))); // prints: 'This is a plain text!'

$multi_line = "Hello\nWorld!";
var_dump(nl2br($multi_line)); // prints "Hello<br />\nWorld!";

$plain_text = '100% plain text';
var_dump(urlencode($plain_text)); // prints: "100%25+plain+text"

$url = 'alphabet=%D0%BA%D0%B8%D1%80%D0%B8%D0%BB%D0%B8%D1%86%D0%B0&page=1';
$decoded_url = urldecode($url); // prints: "alphabet=кирилица&page=1"
var_dump($decoded_url);
parse_str($decoded_url, $url_variables);
var_dump($url_variables);

$html_entities = 'Non&nbsp;breakable&nbsp;space!';
var_dump(html_entity_decode($html_entities));
var_dump(htmlentities('€£¢')); // prints: '&euro;&pound;&cent;'

?>