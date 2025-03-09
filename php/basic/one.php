<?php

session_start();

$name = "Shahin";

$array = [
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K"
];

$data = json_encode($array);


// var_dump($data);
$_SESSION['name'] = $name;
$_SESSION['data'] = $data;

// echo $name;


// echo date("Y");

try{
    throw new Exception("Division by zero");
}catch(Exception $e){
    echo "Error: ".$e->getMessage();
}
catch(Exception $e){

}finally{
    echo "This will always execute.";
}

// setcookie("cookieName","AR Shahin",time() + 100);