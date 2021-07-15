<?php
//while loops
    //while loop
echo "WHILE LOOP";
echo "<br>";

$x = 0;
while ($x <= 5){
    echo $x;
    $x++;
    echo "<br>";
}
echo "<br>";

    //do while loop
echo "DO WHILE LOOP";
echo "<br>";


$y =10;
do{
    echo $y;
    $y ++;
    echo "<br>";
}while($y <= 15);
echo "<br>";
//==========================================================//
//for loops
    //for loop
echo "FOR LOOP";
echo "<br>";

for($w = 20; $w <=25; $w++){
    echo $w;
    echo "<br>";
}
echo "<br>";

    //for each loop
echo "FOR EACH LOOP";
echo "<br>";

$names =array("King","Jeff","Betty","Wayne","Becky");
foreach ($names as $jina){
    echo $jina;
    echo "<br>";
}
echo "<br>";
