<?php

include "./VehicleInterface.php";
abstract class Vehicle implements VehicleInterface {
    protected $brand;  // Protected attribute (Encapsulation)
    private $speed;    // Private attribute (Encapsulation)

    public function __construct($brand, $speed) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    public function getSpeed() {  // Getter method for speed
        return $this->speed;
    }

    public function setSpeed($speed) {  // Setter method for speed
        $this->speed = $speed;
    }
    public function canRide(){
        return true;  // Assume all vehicles can ride at least once
    }
    public function canMove(){
        return true;  // Assume all vehicles can move at least once
    }
    abstract public function move();  // Abstract method (must be implemented by subclasses)
}