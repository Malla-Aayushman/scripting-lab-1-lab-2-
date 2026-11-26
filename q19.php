<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/* A. Total number of students */

$sql = "SELECT COUNT(*) AS total_students FROM students";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "<h2>Student Statistics</h2>";
echo "Total Number of Students: " . $row["total_students"] . "<br><br>";


/* B. Average fees */

$sql = "SELECT AVG(fees) AS average_fees FROM students";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "Average Fees: " . number_format($row["average_fees"], 2) . "<br><br>";


/* C. Students grouped by course */

$sql = "SELECT course, COUNT(*) AS total_students
        FROM students
        GROUP BY course
        ORDER BY course";

$result = mysqli_query($conn, $sql);

echo "<h3>Students Grouped by Course</h3>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>";
echo "<th>Course</th>";
echo "<th>Number of Students</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["course"] . "</td>";
    echo "<td>" . $row["total_students"] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
