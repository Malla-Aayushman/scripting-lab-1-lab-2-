<?php

// ---------------- FOR LOOP ----------------

$a = 0;
$b = 1;

echo "Using for loop: ";

for ($i = 0; $i < 10; $i++) {

    echo $a . " ";

    $next = $a + $b;
    $a = $b;
    $b = $next;
}


// ---------------- WHILE LOOP ----------------

$a = 0;
$b = 1;
$i = 0;

echo "<br>Using while loop: ";

while ($i < 10) {

    echo $a . " ";

    $next = $a + $b;
    $a = $b;
    $b = $next;

    $i++;
}


// ---------------- DO-WHILE LOOP ----------------

$a = 0;
$b = 1;
$i = 0;

echo "<br>Using do-while loop: ";

do {

    echo $a . " ";

    $next = $a + $b;
    $a = $b;
    $b = $next;

    $i++;

} while ($i < 10);

?>