<?php






$name = "Shahin" ;
// $name = 100;

//echo gettype($name);
// var_dump($name);

// if (0)
// {
//     echo "Inside if";
// }elseif(0){
//     echo "Inside elseif";
// }
// else{
//     echo "Inside else";
// }

// switch("case"){
//     case 1:
//         echo "Case 1";
//         break;
//     default:
//     echo "Default";
// }


function add(int $num1, int $num2) : int{
    return $num1 + $num2;
}

$sub = fn ($a,$b) => $a - $b;


$newAdd = $sub;
// echo "Summation is  " . add(10,20);

// function sayHi($name)  {
//     echo "HI " . $name;
// }

$sayHi = fn ($name) => "Hi " . $name;
function doTask($name, $task){
    echo $task($name);
}

// doTask("Shahin",$sayHi);

// doTask("Test",function($name ){
//     echo "New thing... " . $name;
// });

function test(...$vars)  {
    var_dump($vars);
}


function abc($num1,$name)  {
    echo "Num " . $num1  . "<br>";
    echo "name " . $name  . "<br>";
}

//abc(10,"shahin");
abc(name:"name",num1:30);
//test("a","b");
// test(1,2,3,4,5);
//echo "subscration is " . $newAdd(10,5);

// print_r($name);

exit();


echo "<h1>hello {$name}!</h1>";

print("Hello, world!");
