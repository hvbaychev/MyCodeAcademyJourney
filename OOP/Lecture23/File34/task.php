<?php

class Book {
    public string $title;
    public string $author;
    public int $publicationYear;
    public string $isbn;

    public function __construct(string $title, string $author, int $publicationYear, string $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->isbn = $isbn;
    }

    public function __clone() {
        $this->isbn = uniqid();
    }
}

class Library {
    public array $books;

    public function __construct() {
        $this->books = [];
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBook(string $isbn) {
        foreach ($this->books as $key => $book) {
            if ($book->isbn === $isbn) {
                unset($this->books[$key]);
                break;
            }
        }
    }

    public function findBook(string $isbn) {
        foreach ($this->books as $book) {
            if ($book->isbn === $isbn) {
                return $book;
            }
        }
        return null;
    }

    public function cloneBook(string $isbn) {
        foreach ($this->books as $book) {
            if ($book->isbn === $isbn) {
                $clonedBook = clone $book;
                $this->books[] = $clonedBook;
                return $clonedBook;
            }
        }
        return null; 
}
}

$library = new Library();


$book1 = new Book('Title 1', 'Author 1', 2000, 'ISBN-001');
$library->addBook($book1);

$book2 = new Book('Title 2', 'Author 2', 2010, 'ISBN-002');
$library->addBook($book2);

$book3 = new Book('Title 3', 'Author 3', 2020, 'ISBN-003');
$library->addBook($book3);

foreach ($library->books as $book) {
    echo "Title: {$book->title}, Author: {$book->author}, ISBN: {$book->isbn}\n";
}


$library->removeBook('ISBN-002');


$foundBook = $library->findBook('ISBN-001');
if ($foundBook !== null) {
    echo "Found book: {$foundBook->title}\n";
} else {
    echo "Book not found.\n";
}


