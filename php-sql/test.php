<?php

interface VehicleInterface{
    function run();
}
class Engine implements VehicleInterface{
    function run(){

    }
}


class Vehicle implements VehicleInterface{
    function run(){

    }
}


class Car{
    public $vehicle;

    function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle ;
    }
}

class Human extends Car{

}

new Car(new Vehicle);
new Car(new Engine);

interface PaymentInterface{
    function pay();
}

class Bksh implements PaymentInterface{
    function pay() {
        
    }
}
class Nagad implements PaymentInterface{
    function pay() {
        
    }
}

class Paypal implements PaymentInterface{
    function pay() {
        
    }
}

$type = "circle";

function payment($type)  {
    
    if($type == "bksh"){

    }

    if($type == "rocket"){
        
    }

    if($type == "nagad"){
        
    }
    if($type == "paypal"){
        
    }

    if($type == "other"){
        
    }
}

function payment2(PaymentInterface $payment)  {
    return $payment->pay();
}



payment2(new Bksh);
payment2(new Nagad);
payment2(new Paypal);



interface Can3D{
    function print3D();
}
interface Can2D{
    function print2D();
}
interface PrinterInterface{
    function print3D();
    function print2D();
}

class SamsunngPrinter implements Can2D,Can3D{
    function print3D()  {
        
    }

    function print2D()  {
        
    }
}

class SonyPrinter implements Can3D{
    function print3D()  {
        
    }
}
