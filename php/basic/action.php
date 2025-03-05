<?php


// $_GET, $_POST, $_SERVER and $_REQUEST
// echo $_SERVER['PHP_SELF'] . "<br>";
// echo $_SERVER['SERVER_NAME'] . "<br>";
// echo $_SERVER['HTTP_HOST'] . "<br>";
// echo $_SERVER['HTTP_REFERER'] . "<br>";
// echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
// echo $_SERVER['SCRIPT_NAME'] . "<br>";

function validateLength($val) {
    return strlen($val) < 5 ? false : true;
}

function validateEmail($val) {
    return filter_var($val, FILTER_VALIDATE_EMAIL);
}

function containS($val)  {
    return str_contains("s",$val);
}


$db = ["ars","shahin"];

$errros = [];
if(isset($_REQUEST['lgnbtn'])){
   // var_dump("submitted");

    $email = $_REQUEST['email'];

    
    // if(!validateLength($email)){
    //     $errros[] = "Email must be at least 5 characters long.";
    // }
    // if(!validateEmail($email)){
    //     $errros[] = "Not a valid email.";
    // }
    // if(!containS($email)){
    //     $errros[] = "Doesnt contain S.";
    // }
    // if(strlen($email) < 5){
    //     echo "Email must be at least 5 characters long.";
    // }else{
    //     echo "Email is valid.";
    // }

    // foreach($errros as $err){
    //     echo $err. "<br>";
    // }

    if(in_array($email,$db)){
        header("Location: ./index.php");
    }else{
        echo "User not found!";
    }

}


if(isset($_REQUEST['regBTn'])){

}