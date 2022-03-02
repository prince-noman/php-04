<?php
// Marriage checker

$age = 25;
$gender = "male";

if ($age >= 21 && $gender == 'male') {
    echo "Your gender is $gender and you are allowed to marry";
} else if ($age >= 18 && $gender == 'female') {
    echo "Your gender is $gender and you are allowed to marry";
} else {
    echo "You are not allowed to marry";
}