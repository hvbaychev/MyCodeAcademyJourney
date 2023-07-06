<?php

/*------------------------------------------------------------------------------
Използвайте goto за да изпишете различен поздрав според това дали е сутрин, обед
или вечер. Как бихте го написали с if, else, switch?
------------------------------------------------------------------------------*/

$partOfTheDay = readline();


switch ($partOfTheDay) {
    case 'morning':
        echo 'Good Morning!';
        break;
    case 'lunch':
        echo 'Good Day!';
        break;
    case "Good evening!":
        echo "Good evening!";
        break;
    default:
        echo 'Invalid input!'
        break;
}

