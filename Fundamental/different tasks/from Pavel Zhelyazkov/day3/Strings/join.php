<?php

$ip = '127.0.0.1';
$ip_chunks = explode('.', $ip); // and in PHPsplit is an alias of explode

print_r(implode('-', $ip_chunks));

?>