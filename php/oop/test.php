<?php
// Book class
class Book {
    private $title;
    private $author;
    private $status;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->status = "available";
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function displayBookInfo() {
        return "Title: $this->title, Author: $this->author, Status: $this->status <br>";
    }
}

// User class (abstract)
abstract class User {
    protected $name;
    protected $borrowedBooks = [];

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function borrowBook($book);
    abstract public function returnBook($book);
}

// Member class (extends User)
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

// Library class
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

// Usage
$library = new Library();
$book1 = new Book("The Catcher in the Rye", "J.D. Salinger");
$book2 = new Book("1984", "George Orwell");
$library->addBook($book1);
$library->addBook($book2);

$member = new Member("Alice");
$library->listAvailableBooks();
$member->borrowBook($book1);
$library->listAvailableBooks();
$member->returnBook($book1);
$library->listAvailableBooks();
?>

