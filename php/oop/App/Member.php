<?php
namespace App;

// include "./User.php";
abstract class User {
    protected $name;
    protected $borrowedBooks = [];

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function borrowBook($book);
    abstract public function returnBook($book);
}
class Member extends User {
    public function borrowBook($book) {
        if ($book->getStatus() == "available") {
            $book->setStatus("borrowed");
            $this->borrowedBooks[] = $book;
            echo $this->name . " borrowed: " . $book->displayBookInfo() . "\n";
        } else {
            echo "The book is not available.\n";
        }
    }


    public function returnBook($book) {
        if (in_array($book, $this->borrowedBooks)) {
            $book->setStatus("available");
            unset($this->borrowedBooks[array_search($book, $this->borrowedBooks)]);
            echo $this->name . " returned: " . $book->displayBookInfo() . "\n";
        } else {
            echo "You have not borrowed this book.\n";
        }
    }
}