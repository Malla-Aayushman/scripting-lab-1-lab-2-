<?php

// Indexed Array
$subjects = ["aayushman" , " dundulines"];

echo "Indexed Array:<br>";

foreach ($subjects as $subject) {
    echo $subject . "<br>";
}


// Associative Array
$student = [
    "name" => "Aayushman",
    "roll" => 101,
    "marks" => 85
];

echo "<br>Associative Array:<br>";

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}


// Multidimensional Array
$students = [
    [
        "name" => "Dandulines thakur",
        "roll" => 3,
        "marks" => 90
    ]
];

echo "<br>Multidimensional Array:<br>";

foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Roll No: " . $student["roll"] . "<br>";
    echo "Marks: " . $student["marks"] . "<br><br>";
}

?>