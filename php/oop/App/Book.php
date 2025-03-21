<?php
namespace App;


class Book{
    public $title;
    public $author;
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