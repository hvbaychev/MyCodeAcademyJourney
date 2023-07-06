<?php

namespace Structure;

use ArrayAccess;

class Globals implements ArrayAccess
{
    private static $get;
    private static $post;
    private static $ses;
    
    public function __set($name, $value)
    {
        if ($name === 'post') {
            self::$post = $value;
        } elseif (isset(self::$post[$name])) {
            self::$post[$name] = $value;
        } elseif (isset(self::$get[$name])) {
            self::$get[$name] = $value;
        } elseif (isset(self::$ses[$name])) {
            self::$ses[$name] = $value;
        }
    }
    
    public function __get($name)
    {
        if ($name === 'get' && isset(self::$get)) {
            return self::$get;
        } elseif ($name === 'post' && isset(self::$post)) {
            return self::$post;
        } elseif (isset(self::$ses[$name])) {
            return self::$ses[$name];
        }
    }
    
    public function __isset($name)
    {
        return isset(self::$post[$name]) || isset(self::$get[$name]) || isset(self::$ses[$name]);
    }

    public function __unset($name)
    {
        unset(self::$post[$name]);
        unset(self::$get[$name]);
        unset(self::$ses[$name]);
    }

    public function offsetExists($offset)
    {
        return isset(self::$post[$offset]) || isset(self::$get[$offset]) || isset(self::$ses[$offset]);
    }

    public function offsetGet($offset)
    {
        if (isset(self::$post[$offset])) {
            return self::$post[$offset];
        } elseif (isset(self::$get[$offset])) {
            return self::$get[$offset];
        } elseif (isset(self::$ses[$offset])) {
            return self::$ses[$offset];
        }
    }

    public function offsetSet($offset, $value)
    {
        if (isset(self::$post[$offset])) {
            self::$post[$offset] = $value;
        } elseif (isset(self::$get[$offset])) {
            self::$get[$offset] = $value;
        } elseif (isset(self::$ses[$offset])) {
            self::$ses[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset(self::$post[$offset]);
        unset(self::$get[$offset]);
        unset(self::$ses[$offset]);
    }
}
