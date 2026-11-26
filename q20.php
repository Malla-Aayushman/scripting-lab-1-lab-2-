<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/* Create courses table */

$sql = "CREATE TABLE IF NOT EXISTS courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
    die("Error creating courses table: " . mysqli_error($conn));
}


/* Create student_courses table */

$sql = "CREATE TABLE IF NOT EXISTS student_courses (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    course_id INT,
    FOREIGN KEY (course_id) REFERENCES courses(course_id)
)";

if (!mysqli_query($conn, $sql)) {
    die("Error creating student_courses table: " . mysqli_error($conn));
}


/* Insert courses */

mysqli_query($conn,
    "INSERT INTO courses (course_id, course_name)
     VALUES
     (1, 'BCA'),
     (2, 'BIT'),
     (3, 'BBS')
     ON DUPLICATE KEY UPDATE course_name=VALUES(course_name)"
);


/* Insert students */

mysqli_query($conn,
    "INSERT INTO student_courses (student_name, course_id)
     VALUES
     ('Aayushman', 1),
     ('karunha', 2)"
);


/* INNER JOIN */

$sql = "SELECT student_courses.student_name, courses.course_name
        FROM student_courses
        INNER JOIN courses
        ON student_courses.course_id = courses.course_id
        ORDER BY student_courses.student_name";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing JOIN query: " . mysqli_error($conn));
}


echo "<h2>Student Course Report</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th>Student Name</th>";
echo "<th>Course Name</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["student_name"] . "</td>";
    echo "<td>" . $row["course_name"] . "</td>";
    echo "</tr>";
}

echo "</table>";


mysqli_close($conn);
?>
