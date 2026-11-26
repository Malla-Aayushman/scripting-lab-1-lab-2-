<?php
function factorial($num){
    $fact=1;

    for($i=1;$i<=$num;$i++){
        $fact=$fact*$i;
    }

    return $fact;
}

function isPrime($num){
    if($num<2){
        return false;
    }

    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            return false;
        }
    }

    return true;
}

$num=5;

echo "Factorial of ".$num." = ".factorial($num)."<br>";

if(isPrime($num)){
    echo $num." is a prime number";
}else{
    echo $num." is not a prime number";
}

?>
