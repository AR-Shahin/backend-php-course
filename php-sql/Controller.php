<?php

include "./User.php";

$usr = new User();

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];


    if(!empty($name) || !empty(!$email)){
        $usr->create($name,$email);

        header("Location: index.php");
    }

}

if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];


    if(!empty($id)){
        $usr->delete($id);

        header("Location: index.php");
    }

}


if(isset($_REQUEST['update'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $id = $_REQUEST['id'];


    if(!empty($name) || !empty(!$email)){
        $usr->update($id,$name,$email);

        header("Location: index.php");
    }

}