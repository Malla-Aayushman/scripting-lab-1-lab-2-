<?php
$numbers = [6, 7 , 6.5];

$largest = $numbers[0];
$smallest = $numbers[0];

foreach ($numbers as $number) {

    if ($number > $largest) {
        $largest = $number;
    }

    if ($number < $smallest) {
        $smallest = $number;
    }
}
echo "Smallest number = " . $smallest  . "<br>";
echo "Largest number = " . $largest  ;


?>