<?php

include "./Vehicle.php";
// Inheritance: Car class inherits from Vehicle
class Truck extends Vehicle {
    public function move() {  // Polymorphism: Overriding abstract method
        return "The car of brand {$this->brand} is moving at {$this->getSpeed()} km/h.";
    }
}
