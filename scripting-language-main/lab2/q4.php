<?php
$num1=34;
$num2=33;
$operator="+";

switch($operator){
    case "+":
        echo "Addition=".$num1+$num2;
        break;

    case "-":
        echo "Subtraction=".$num1-$num2;
        break;

    case "*":
        echo "Multiplication=".$num1*$num2;
        break;

    case "/":
        if($num2!=0){
            echo "Division=".$num1/$num2;
        }else{
            echo "Cannot divide by zero";
        }
        break;

    default:
        echo "Invalid operator";
}

?>
