<?php

namespace App;

class Library {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function listAvailableBooks() {
        foreach ($this->books as $book) {
            if ($book->getStatus() == "available") {
                echo $book->displayBookInfo() . "\n";
            }
        }
    }

    public function searchBook($title) {
        foreach ($this->books as $book) {
            if (strpos(strtolower($book->displayBookInfo()), strtolower($title)) !== false) {
                echo $book->displayBookInfo() . "\n";
            }
        }
    }
}
