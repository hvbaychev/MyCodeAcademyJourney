<?php

$re = '/<\w+(?:\s+\w+(?:\s*=\s*(?:"[^"]*"|\'[^\']*\'|\w+))?)*\s*\/?>/i';

$text = '<div class="wrapper"><h1>Hello World</h1></div>';
preg_match_all($re, $text, $matches);
print_r($matches);
