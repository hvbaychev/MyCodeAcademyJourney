<?php
/*
В предната лекция ви помолихме да създадете PHP
библиотека, която да представлява обектно-ориентиран
интерфейс за достъп и задаване на стойности на супер
глобални променливи $_POST, $_GET, $_SESSION.
Разширете я като използвате магически методи.
Прецените кои е удачно да използвате и кои не. 
*/


class Globals implements ArrayAccess {
    private static $get;
    private static $post;
    private static $ses;

    public function __get($name) {
        if (isset(self::$post[$name])) {
            return self::$post[$name];
        } elseif (isset(self::$get[$name])) {
            return self::$get[$name];
        } elseif (isset(self::$ses[$name])) {
            return self::$ses[$name];
        } else {
            throw new Exception("Property $name not found");
        }
    }

    public function __set($name, $value) {
        if (isset(self::$post[$name])) {
            self::$post[$name] = $value;
        } elseif (isset(self::$get[$name])) {
            self::$get[$name] = $value;
        } elseif (isset(self::$ses[$name])) {
            self::$ses[$name] = $value;
        } else {
            throw new Exception("Property $name not found");
        }
    }

    public function __isset($name) {
        return isset(self::$post[$name]) || isset(self::$get[$name]) || isset(self::$ses[$name]);
    }

    public function __unset($name) {
        unset(self::$post[$name]);
        unset(self::$get[$name]);
        unset(self::$ses[$name]);
    }
}
