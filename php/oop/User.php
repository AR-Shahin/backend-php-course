<?php
include "./Vehicle.php";

class User extends Vehicle{
    public $name;
    public $email;
    public $data = [];
    public const PI = 3.1416;
    public static $university = 20;

    public function printPI(){
        return self::PI;
    }
    function changeUni($var)  {
        self::$university = $var;
    }
    function printUni() {
        echo self::$university . "\n";
    }

    public static function test(){
        echo "Static method";
    }
    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }
    // function __call($name, $arguments)
    // {
    //     $name = $arguments;
    // }

    // public function __get($value){
    //     if (array_key_exists($value, $this->data)) {
    //         echo $this->data[$value];
    //     }else{
    //         echo "Not Exists";
    //     }
    // }
 
    // public function __set($value ,$data){
    //     $this->data[$value] = $data;
    // }

 
    // public function __destruct()
    // {
    //     echo "Work has done! <br>";
    // }

    public function display(){
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    // public function test(){
    //     echo "test done! <br>";
    // }
}