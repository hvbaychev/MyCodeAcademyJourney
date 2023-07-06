<?php

$dayOfWeek = readline();

if ($dayOfWeek === 'Monday' || $dayOfWeek === 'Tuesday' || $dayOfWeek === 'Wednesday' || $dayOfWeek === 'Thursday' || $dayOfWeek ==='Friday'){
    echo "Nice job!";
}elseif ($dayOfWeek == 'Sunday' || $dayOfWeek === 'Saturday'){ 
    echo "Cheerful weekend!";
}else {
    echo 'Invalid input!';
}
