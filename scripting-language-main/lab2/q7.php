<?php
$numbers=array(25,10,45,5,67,30);

$largest=$numbers[0];
$smallest=$numbers[0];

foreach($numbers as $number){
    if($number>$largest){
        $largest=$number;
    }

    if($number<$smallest){
        $smallest=$number;
    }
}

echo "Largest number = ".$largest."<br>";
echo "Smallest number = ".$smallest;

?>
