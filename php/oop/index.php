<?php
// include "./App/Book.php";
// include "./App/Library.php";
// include "./App/Member.php";
// include "./App/User.php";

function test(&$x)  {
    $x = 100;
    echo "inside function $x <br>";
}

$var = 10;

test($var);

echo "outside function $var <br>";

die();
include "./vendor/autoload.php";

use App\Book;
use App\Library;
use App\Member;
use App\School;
use NumberToWords\NumberToWords;
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
// $library->listAvailableBooks();



// create the number to words "manager" class
$numberToWords = new NumberToWords();

// build a new number transformer using the RFC 3066 language identifier
$numberTransformer = $numberToWords->getNumberTransformer('en');

echo $numberTransformer->toWords(100);