<?php

$a = 5;
$b = 15;

echo (" before swapping a = $a  and b = $b <br>");
$c = $b;
$b = $a;
$a = $c;
echo (" after swapping a = $a  and b = $b");
echo (" now swapping without using third variable <br>");
echo ("after swapping ");

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo (" after swappinng a = $a and b = $b");
