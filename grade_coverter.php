<!-- Grade Conditional -->

<?php

$mark = 86;

if ($mark >= 0 && $mark <= 32) {
    echo "<h1 style='color: red'>You are Failed</h1>";
} elseif ($mark >= 33 && $mark <= 39) {
    echo "<h1 style='color: orangered'>You have Got D</h1>";
} elseif ($mark >= 40 && $mark <= 49) {
    echo "<h1 style='color: darkorange'>You have Got C</h1>";
} elseif ($mark >= 50 && $mark <= 59) {
    echo "<h1 style='color: orange'>You have Got B</h1>";
} elseif ($mark >= 60 && $mark <= 69) {
    echo "<h1 style='color: yellow'>You have Got A-</h1>";
} elseif ($mark >= 70 && $mark <= 79) {
    echo "<h1 style='color: greenyellow'>You have Got A</h1>";
} elseif ($mark >= 80) {
    echo "<h1 style='color: green'>You have Got A+</h1>";
} else {
    echo "<h1 style='color: red'>Invalid Result</h1>";
}

?>


