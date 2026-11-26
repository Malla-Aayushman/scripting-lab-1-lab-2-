<?php

$num1 = 10;
$num2 = 254;
$operator = "+";
$result = null ;

switch ($operator) {
    case "+":
        $result = $num1 + $num2;
        break;

    case "-":
        $result = $num1 - $num2;
        break;

    default:
        echo (" invalid input");
}
echo ("result = $result ");

