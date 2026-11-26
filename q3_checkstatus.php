<?php
// only used for terminal input
//$a = readline(" enter a number ");

//$a = isset($_GET['num']) ? $_GET['num'] : 0;

$a = 5;
echo (" value is $a");

$o = " this is odd ";
$e = " this is even ";
$p = " this is positive ";
$n = " this is negative ";
$z = " it is zero ";


if ($a % 2 != 0) {
    echo ($o);
} else {
    echo ($e);
}

echo (" also");

if ($a == 0) {
    echo ($z);
} else if ($a > 0) {
    echo ($p);
} else {
    echo ($n);
}
