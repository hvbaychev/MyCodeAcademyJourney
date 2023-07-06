<?php

/*------------------------------------------------------------------------------
Използвайте goto за да изпишете различен поздрав според това дали е сутрин, обед
или вечер. Как бихте го написали с if, else, switch?
------------------------------------------------------------------------------*/

$partOfTheDay = readline();

if ($partOfTheDay === 'morning'){
    echo 'Good Morning!';
}elseif ($partOfTheDay === 'lunch') {
    echo 'Good Day!';
}elseif ($partOfTheDay === 'diner'){
    echo "Good evening!";
}else{
    echo 'Invalid input!'
}