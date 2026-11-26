<?php

$students = [
    "Alex" => [
        "Operating System" => 80,
        "Scripting" => 75,
        "Numerical Method" => 70,
        "DBMS" => 85,
        "Software Engineering" => 80
    ],

    "Ani" => [
        "Operating System" => 75,
        "Scripting" => 80,
        "Numerical Method" => 85,
        "DBMS" => 70,
        "Software Engineering" => 75
    ],

    "Rohit" => [
        "Operating System" => 90,
        "Scripting" => 85,
        "Numerical Method" => 80,
        "DBMS" => 90,
        "Software Engineering" => 85
    ]
];

echo "<h2>Average Marks of Students</h2>";

foreach ($students as $name => $marks) {
    $total = 0;

    foreach ($marks as $mark) {
        $total += $mark;
    }

    $average = $total / 5;

    echo "Student: $name <br>";
    echo "Average Marks: $average <br><br>";
}

?>
