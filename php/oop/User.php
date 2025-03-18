<?php
namespace VirtualDirectory;
class User {
    // use AnotherTrait, PrintHelper; 
    private $name;
    private $email;


    public function setName($name) : static{
        $this->name = $name;
        return $this;
    }
    public function setEmail($email) : static{
        $this->email = $email;
        return $this;
    }

    public function display() : void{
        echo "Name $this->name" . "<br>";
        echo "Email $this->email";
    }
    function print() {
        echo "Print again" . "<br>";
    }
    function test()  {
        echo "test";
    }
}
