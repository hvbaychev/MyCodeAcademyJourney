<?php

$greeting = readline();
$firstName = readline();
$lastName = readline();

if ($greeting === 'Mr'){
    echo "Welcome $greeting. $firstName $lastName";
}
elseif ($greeting === 'Ms') {
    echo "Welcome $greeting. $firstName $lastName";
}
elseif ($greeting === 'Junior') {
    echo "Hello $greeting. $firstName $lastName";
}else{
    echo 'Invalid Input! Please enter a valid greeting :)';
}