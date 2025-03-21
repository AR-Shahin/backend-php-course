<?php
include "./App/Book.php";
include "./App/Library.php";
include "./App/Member.php";
include "./App/User.php";


use App\Book;
use App\Library;
use App\Member;


$book1 = new Book("Book 1","Shahin");
$book2 = new Book("Book 2","Ars");
$book3 = new Book("Book 3","Test");

$library = new Library();


$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// $library->listAvailableBooks();

$member = new Member("Alice");

$library->listAvailableBooks();
$member->borrowBook($book1);
echo " <br> ---------------- <br>";
$library->listAvailableBooks();
$member->returnBook($book1);
echo " <br> ---------------- <br>";
$library->listAvailableBooks();


