<!-- GPA Conditional -->

<?php

$mark = 23;

if ($mark >= 0 && $mark <= 32) {
    echo "<h1 style='color: red'>You have GPA 0</h1>";
} elseif ($mark >= 33 && $mark <= 39) {
    echo "<h1 style='color: orangered'>You have GPA 1</h1>";
} elseif ($mark >= 40 && $mark <= 49) {
    echo "<h1 style='color: darkorange'>You have GPA 2</h1>";
} elseif ($mark >= 50 && $mark <= 59) {
    echo "<h1 style='color: orange'>You have GPA 3</h1>";
} elseif ($mark >= 60 && $mark <= 69) {
    echo "<h1 style='color: yellow'>You have GPA 3.5</h1>";
} elseif ($mark >= 70 && $mark <= 79) {
    echo "<h1 style='color: greenyellow'>You have GPA 4</h1>";
} elseif ($mark >= 80) {
    echo "<h1 style='color: green'>You have Got GPA 5</h1>";
} else {
    echo "<h1 style='color: red'>Invalid Result</h1>";
}

?>


