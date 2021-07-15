<?php
echo "Welcome to our class today";
echo "<br>";
//operators
//arithmetic operator
//addition
$x = 1;
$y = 3;
$z = $x + $y;
echo $z;
echo "<br>";
//subtraction
$x = 4;
$y = 1;
$z = $x - $y;
echo $z;
echo "<br>";
//division
$x = 5;
$y = 2;
$z = $x / $y;
echo $z;
echo "<br>";
//multiplication
$x = 1;
$y = 2;
$z = $x * $y;
echo $z;
echo "<br>";
//modulus
$x = 5;
$y = 2;
$z = $x % $y;
echo $z;
echo "<br>";
//exponential
$x = 3;
$y = 2;
$z = $x ** $y;
echo $z;
echo "<br>";


//logical operators
$age = 20;
if ($age < 18){
    echo "True";
}else{
    echo "False";
}
echo "<br>";

//and
$age = 10;
$experience = 5;

if ($age < 18 && $experience > 5){
    echo "True";
}else{
    echo "False";
}
echo "<br>";

//or
$age = 10;
$experience = 5;

if ($age < 18 || $experience > 5){
    echo "True";
}else{
    echo "False";
}
echo "<br>";

//equal
$p = 10;
$q = 10.0;

if ($p == $q){
    echo "True";
} else{
    echo ("False");
}
echo "<br>";

//identical
$p = 10;
$q = 10.0;

if ($p === $q){
    echo "True";
} else{
    echo ("False");
}
echo "<br>";

//not_equal
$p = 10;
$q = 10.0;

if ($p != $q){
    echo "True";
} else{
    echo ("False");
}
echo "<br>";

//not_identical
$p = 10;
$q = 10.0;

if ($p !== $q){
    echo "True";
} else{
    echo ("False");
}
echo "<br>";

//less_greater
$p = 10;
$q = 10.0;

if ($p <> $q){
    echo "True";
} else{
    echo ("False");
}
echo "<br>";

//space_ship_operators
$p = 11;
$q = 10;

echo $p <=> $q;
echo "<br>";

//less_equal
$p = 9;
$q = 10;

if ($p <= $q){
    echo "True";
} else{
    echo ("False");
}
echo "<br>";

//greater_equal
$p = 9;
$q = 10;

if ($p >= $q){
    echo "True";
} else{
    echo ("False");
}
echo "<br>";

//grading_system
$marks = 70;

if($marks < 30){
    echo "E";
}elseif ($marks < 40){
    echo "D";
}elseif ($marks < 50){
    echo "C";
}elseif ($marks < 60){
    echo "B";
}else{
    echo "A";
}
echo "<br>";

//switch_case_statement
$number = 4;

switch ($number){
    case 1:
        echo "Number one was found";
        break;
    case 2:
        echo "Number two was found";
        break;
    case 3:
        echo "Number three was found";
        break;
    default:
        echo "Sorry, we don't recognize that number";
}
echo "<br>";