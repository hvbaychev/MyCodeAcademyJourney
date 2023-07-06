<?php


function isPalindrome($input) {
    $lenOfStr = strlen($input);
    if ($lenOfStr < 2) { 
        return true;
    }
    if ($input[0] == $input[$lenOfStr-1]) {
        return isPalindrome(substr($input, 1, $lenOfStr-2));
    } else {
        return false;
    }
}


isPalindrome('oko');