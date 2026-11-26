<?php

function factorial($n = 5)
{
    $fact = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }

    return $fact;
}


function isPrime($n = 7)
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= $n / 2; $i++) {

        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}


$num = 5;

echo "Factorial of $num = " . factorial($num) . "<br>";

if (isPrime($num)) {
    echo "$num is a prime number";
} else {
    echo "$num is not a prime number";
}

?>