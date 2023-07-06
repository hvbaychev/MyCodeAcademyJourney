<?php

/*
Създайте PHP библиотека, която да представлява
обектно-ориентиран интерфейс за достъп и задаване
на стойности на супер глобални променливи $_POST,
$_GET, $_SESSION.
Използвайте общ интерефейс, имплементирайте
ArrayAccess interface и използвайте статични методи
и променливи, където е подходящо.

Решението е взаимствано от:
https://www.php.net/manual/en/class.arrayaccess.php
*/

class Globals implements ArrayAccess {
    private static $get;
    private static $post;
    private static $ses;

    public static function offSetSet($index, $value){  // set value in array $get by $index and $value 
        self::$get[$index] = $value;                   
    }
    public static function offSetPost($index, $value){  // same
        self::$post[$index] = $value;
    }
    public static function offSetSes($index, $value){  // same
        self::$ses[$index] = $value;
    }

    public static function offSetGet($index){   // return value of $get[$index]
        return self::$get[$index];                 
    }
    public static function offSetGetPost($index){ // same
        return self::$post[$index];
    }
    public static function offSetGetSes($index){ // same
        return self::$ses[$index];
    }

    public static function offSetUnset($index){     // unset the value in array $get[$index]
        unset(self::$get[$index]);                   
    }
    public static function offSetUnsetPost($index){ // same
        unset(self::$post[$index]);
    }
    public static function offSetUnsetSes($index){ // same
        unset(self::$ses[$index]);
    }

    public function offsetExists($offset){  // check if isset $get or $post  or $ses
        return isset(self::$get[$offset]) || isset(self::$post[$offset]) || isset(self::$ses[$offset]);
    }
    
    public function offsetUnset($offset) {  // take out elements from array
        unset(self::$post[$offset]);
        unset(self::$get[$offset]);
        unset(self::$ses[$offset]);
    }
    
    public function offsetGet($offset) {  // if we don`t know from witch array is coming input we can check by thus offsetget()
        if (isset(self::$post[$offset])) {
            return self::$post[$offset];
        } elseif (isset(self::$get[$offset])) {
            return self::$get[$offset];
        } elseif (isset(self::$ses[$offset])) {
            return self::$ses[$offset];
        } else {
            return null;
        }
    }
}

