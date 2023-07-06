<?php

class Book {
    public $title;
    public $author;
    public $pages;

    function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    function getTitle() {
        return $this->title;
    }

    function getAuthor() {
        return $this->author;
    }

    function getPages() {
        return $this->pages;
    }
}

$myBook = new Book("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", 224);

echo "Title: " . $myBook->getTitle() . PHP_EOL;
echo "Author: " . $myBook->getAuthor() . PHP_EOL;
echo "Pages: " . $myBook->getPages() . PHP_EOL;