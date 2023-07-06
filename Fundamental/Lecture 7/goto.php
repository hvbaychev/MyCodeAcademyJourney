<?php

/*------------------------------------------------------------------------------
Използвайте goto за да изпишете различен поздрав според това дали е сутрин, обед
или вечер. Как бихте го написали с if, else, switch?
------------------------------------------------------------------------------*/

$partOfTheDay = readline();

if ($partOfTheDay === 'morning'){
    goto morning;
}elseif ($partOfTheDay === 'lunch') {
    goto lunch;
}elseif ($partOfTheDay === 'diner'){
    goto diner;
}



if ($partOfTheDay === 'dasdasdsadsadsa'){   // no meter what is the bool true/false ... goto goes directly to code for execute 
    morning:
    echo 'Good Morning!';
}

lunch:
   echo 'Good Day!';
diner:
   echo "Good evening!";