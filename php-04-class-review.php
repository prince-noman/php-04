<?php


//PHP - 04 Class Review

//Ternary Operator (condition ? "true statement": "false statement)
echo isset($fav_color) ? 'Hello from isset' : 'Hello from empty';

echo "<br>";

//Null Coalescing Operator ($var = "value" ?? "default value")
echo $fav_color = $fav_color ?? 'Not declared';

echo "<br>";


//>> File System

//include >> it is not mandatory file adding method
//include './main.php'; >> can add multiple times
//include_once './main.php'; >> add only once and checks if the same file was added earlier

//require >> it is mandatory file adding method
//require './main.php';
//include_once './main.php';


//>> Form Control

//isset() >> checks if variable is empty or have value and to check it has to be declared.
//empty() >> checks if variable is declared or empty.
//die(); >> stops all statements after this declared.

$color = 7;
if (isset($color)) {
    echo 'Hello World from isset';
}
echo "<br>";

if (empty($color)) {
    echo 'Hello World empty';
}
echo "<br>";

//Switch Case

$amount = 100;
$currency = "Euro";

switch ($currency) {
    case "Dollar" :
        $rate = 84;
        break;
    case "Rupee" :
        $rate = 1.25;
        break;
    case "Euro" :
        $rate = 125;
        break;
    default:
        $rate = 0;
        break;
}

$total_amount = $amount * $rate;
echo "$amount $currency  = $total_amount BDT";
echo "<br>";

// Loop
// For Loop
/*
for (initializer; condition; incremental) {
  statements;
}
*/


for ($i = 1; $i <= 10; $i++) {
    echo 'I love PHP <br>';
}