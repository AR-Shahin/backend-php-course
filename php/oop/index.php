<?php
include "./User.php";
include "./App/Helper/Driver.php";

use App\Helper\Driver;

(new Driver())->drive();
class User{

}

// trait AnotherTrait{
//     function test1() {
//         echo "test1 anything";
//     }
// }
// trait PrintHelper{
//     function print() {
//         echo "Print anything";
//     }
// }

// class User {
//     // use AnotherTrait, PrintHelper; 
//     private $name;
//     private $email;


//     public function setName($name) : static{
//         $this->name = $name;
//         return $this;
//     }
//     public function setEmail($email) : static{
//         $this->email = $email;
//         return $this;
//     }

//     public function display() : void{
//         echo "Name $this->name" . "<br>";
//         echo "Email $this->email";
//     }
//     function print() {
//         echo "Print again" . "<br>";
//     }
//     function test()  {
//         echo "test";
//     }
// }


// $user1 = new User();

// $user1->setName("Shahin");
// $user1->setEmail("Shahin@Mail.ocm");

// $user1->display();


// (new VirtualDirectory\User)
//     ->setName("Shahin")
//     ->setEmail("s@Mail.com")
//     ->display();