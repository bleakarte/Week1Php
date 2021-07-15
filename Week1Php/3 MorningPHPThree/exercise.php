<?php
//using a while loop, for loop and do while loop respectively
// print all the numbers between 0 - 101 in a descending order

//===========================//
//WHILE LOOP
echo "WHILE LOOP";
echo "<br>";
$x = 100;
while ($x > 0){
    echo "$x ";
    $x--;
}
echo "<br>";
echo "<br>";
//===========================//
//FOR LOOP
echo "FOR LOOP";
echo "<br>";
for ($y = 100; $y > 0; $y--){
    echo "$y ";
}
echo "<br>";
echo "<br>";
//===========================//
//DO WHILE
echo "DO WHILE LOOP";
echo "<br>";
$z = 100;
do{
    echo "$z ";
    $z--;
}while($z > 0);
//===========================//