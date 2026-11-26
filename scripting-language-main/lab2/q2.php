

<?php
$a=10;
$b=20;

echo "Before swapping: a=$a,b=$b<br>";
//swap using third variable
$temp=$a;
$a=$b;
$b=$temp;

echo "After swapping using third variable: a=$a,b=$b<br>";


//swap without using third variable
$a=10;
$b=20;

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "After swapping wihout using third variable: a=$a,b=$b"



?>