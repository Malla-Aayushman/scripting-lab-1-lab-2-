<?php

$file = fopen("students.csv", "w");

fputcsv($file, ["Name", "Age", "Course"]);
fputcsv($file, ["Aayushman", 20, "BCA"]);
fputcsv($file, ["Akarr", 21, "BIT"]);

fclose($file);

echo "<h2>Student Records from CSV File</h2>";

$file = fopen("students.csv", "r");

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Age</th><th>Course</th></tr>";

while (($row = fgetcsv($file)) !== false) {
    if ($row[0] == "Name") {
        continue;
    }

    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "</tr>";
}

echo "</table>";

fclose($file);

?>
