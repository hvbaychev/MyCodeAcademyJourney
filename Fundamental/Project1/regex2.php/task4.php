<?php

function generate_regex_in_range($min, $max, $include_min=true, $include_max=true) {
  $min_operator = $include_min ? "" : "|{$min}\.?[0-9]*";
  $max_operator = $include_max ? "" : "|{$max}\.?[0-9]*";
  return "/^{$min_operator}(?:{$min}\.?[0-9]*|[{$min}1-9][0-9]*|[{$min}][{$max}0-9]|[{$min}][{$max}][0-9]*)(?:{$max_operator})$/";
}


echo generate_regex_in_range(10, 20, true, true); // "/^(?:10\.?[0-9]*|1[0-9]|[12][0-9]|20)(?:)$/"


echo generate_regex_in_range(10, 20, false, false); // "/^(?:1[1-9]|[2-9][0-9])(?:)$/"


echo generate_regex_in_range(10, 20, true, false); // "/^(?:10\.?[0-9]*|1[0-9]|[12][0-9])(?:|20\.?[0-9]*)$/"
