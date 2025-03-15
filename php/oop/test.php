<?php
// Abstraction: Abstract class
abstract class Vehicle {
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

    abstract public function move();  // Abstract method (must be implemented by subclasses)
}

// Inheritance: Car class inherits from Vehicle
class Car extends Vehicle {
    public function move() {  // Polymorphism: Overriding abstract method
        return "The car of brand {$this->brand} is moving at {$this->getSpeed()} km/h.";
    }
}

// Inheritance: Bike class inherits from Vehicle
class Bike extends Vehicle {
    public function move() {  // Polymorphism: Overriding abstract method
        return "The bike of brand {$this->brand} is moving at {$this->getSpeed()} km/h.";
    }
}

// Creating objects
$car = new Car("Toyota", 120);
echo $car->move();  // Output: The car of brand Toyota is moving at 120 km/h.

echo "<br>";

$bike = new Bike("Yamaha", 80);
echo $bike->move();  // Output: The bike of brand Yamaha is moving at 80 km/h.
?>
