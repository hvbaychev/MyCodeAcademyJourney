<?php

class Book implements ArrayAccess, Countable, Serializable{
    private $container = [];

    public function __construct($container){
        $this->container = $container;   // 2. book - going to container
    }
    public function __get($name){
        return $this->container[$name]; // 9. get name
    }
    public function __set($name, $value){
        $this->container[$name] = $value;
    }
    public function offsetExists($offset){
        return isset($this->container[$offset]);
    }
    public function offsetGet($offset){
        return $this->container[$offset];
    }
    public function offsetSet($offset, $value){
        $this->container[$offset] = $value;
    }
    public function offsetUnset($offset){
        unset($this->container[$offset]);
    }
    public function count(){
        return count($this->container);
    }
    public function serialize(){
        return serialize($this->container); // 14. serialize book
    }
    public function unserialize($serialized){
        $this->container = unserialize($serialized); //17. des
    }
    public function __clone(){
        foreach ($this->container as $key => $value){
            if (is_object($value)){
                $this->container[$key] = clone $value;
            }
        }
    }
}

class Library implements ArrayAccess, Countable, Serializable{
    private $books = [];

    public function __construct($books = []){
        foreach ($books as $book){     // 4. book call func add
            $this->add($book);
        }
    }
    public function add(Book $book){  // 6. add book
        $this->books[]= $book; // add book in books[]
    }
    public function offsetExists($offset){
        return isset($this->books[$offset]);
    }
    public function offsetGet($offset){
        return $this->books[$offset]; // 8. take name
    }
    public function offsetSet($offset, $value){
        $this->books[$offset] = $value;
    }
    public function offsetUnset($offset){
        unset($this->books[$offset]);
    }
    public function count(){
        return count($this->books); // 11. count books
    }
    public function serialize(){
        return serialize($this->books); // 13. ser book
    }
    public function unserialize($serialized){
        $this->books = unserialize($serialized); // 16. des
    }
    public function __clone(){ // 20. magic methood clone library
        foreach ($this->books as $key => $book){
            $this->books[$key] = clone $book;
        }
    }
    public function __toString() {  // 18. conv to string --- couse : Object of class Library could not be converted to string in 
        $str = "";
        foreach ($this->books as $book) {
            $str .= $book->name . " by " . $book->author . " (" . $book->year . ")\n";  // get name , get author get year
        }
        return $str;
    }
}

$book1 = new Book([  // 1. add new book
    'name' => 'ALF',
    'author' => 'no idea',
    'year' => 1980,
]);

$library = new Library();   // 3. add new library
$library->add($book1); // 5. add book


echo $library[0]->name . PHP_EOL; // 7. call name
echo count($library).PHP_EOL; // 10.call count .. how many book

$serialized = serialize($library); // 12. serl book
$deSer = unserialize($serialized); // 15. des
echo $serialized.PHP_EOL;
echo $deSer.PHP_EOL;  // Object of class Library could not be converted to string in 

$libraryCopy = clone $library; // 19. call clone 
var_dump($libraryCopy);