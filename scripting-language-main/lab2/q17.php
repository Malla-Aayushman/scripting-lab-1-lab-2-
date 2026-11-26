<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

echo "<h2>Student Records</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Course</th>";
echo "<th>Fees</th>";
echo "<th>Admission Date</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["age"] . "</td>";
    echo "<td>" . $row["course"] . "</td>";
    echo "<td>" . $row["fees"] . "</td>";
    echo "<td>" . $row["admission_date"] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
