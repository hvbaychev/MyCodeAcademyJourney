<?php

class Book {
    private $title;
    private $author;
    private $pages;

    public function __construct($title, $author, $pages) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPages($pages);
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    public function getPages() {
        return $this->pages;
    }
}

$myBook = new Book("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", 224);

echo "Title: " . $myBook->getTitle() . PHP_EOL;
echo "Author: " . $myBook->getAuthor() . PHP_EOL;
echo "Pages: " . $myBook->getPages() . PHP_EOL;

$myBook->setTitle("The Restaurant at the End of the Universe");
$myBook->setPages(256);

echo "Title: " . $myBook->getTitle() . PHP_EOL;
echo "Pages: " . $myBook->getPages() . PHP_EOL;
