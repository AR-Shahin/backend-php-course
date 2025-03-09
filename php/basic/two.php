<?php

session_start();


// echo $_SESSION["name"];

$arr = json_decode($_SESSION['data']);

var_dump($arr);
echo $_SESSION["data"];

echo "<br>";

echo $_COOKIE['cookieName'];