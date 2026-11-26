<?php
//using for loop
$a=0;
$b=1;

echo "Fibonacci using for loop:<br>";
for($i=1;$i<=10;$i++){
    echo $a." ";
    $c=$a+$b;
    $a=$b;
    $b=$c;
}

echo "<br><br>";

//using while loop
$a=0;
$b=1;
$i=1;

echo "Fibonacci using while loop:<br>";
while($i<=10){
    echo $a." ";
    $c=$a+$b;
    $a=$b;
    $b=$c;
    $i++;
}

echo "<br><br>";

//using do-while loop
$a=0;
$b=1;
$i=1;

echo "Fibonacci using do-while loop:<br>";
do{
    echo $a." ";
    $c=$a+$b;
    $a=$b;
    $b=$c;
    $i++;
}while($i<=10);

?>
