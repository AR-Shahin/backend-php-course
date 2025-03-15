<?php

include "./Car.php";

// $c = new Car("Audi",20);

// echo $c->move();

interface PaymentInterface{
    public function pay($amount);
}

class Bkash implements PaymentInterface{
    public function pay($amount){
        echo "Bikash payment successful for $amount";
    }
}

class Nagad implements PaymentInterface{
    public function pay($amount){
        echo "Nagad payment successful for $amount";
    }
}


class Rocket implements PaymentInterface{
    public function pay($amount){
        echo "Rocket payment successful for $amount";
    }
}




// function payment($amnt,$method)  {
    
//     if($method == "bksh"){
//         $payObj = new Bkash();
//         $payObj->pay($amnt);
//     }
//     else if($method == "rocket"){{ 
//         (new Rocket())->pay($amnt);
//     }}
    
// }


function payment(PaymentInterface $paymentGateway,$amount) {
    $paymentGateway->pay($amount);
}


payment(new Bkash(), 1000);
payment(new Rocket(), 1000);
payment(new Nagad(), 1000);