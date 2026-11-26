<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $course = $_POST["course"];
    $fees = $_POST["fees"];

    $sql = "INSERT INTO students (name, age, course, fees)
            VALUES ('$name', '$age', '$course', '$fees')";

    if (mysqli_query($conn, $sql)) {
        echo "<p style='color:green;'>Student record inserted successfully.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
<p style='color:green;'>Student record inserted successfully.</p>
<h2>Student Registration Form</h2>

<form method="POST" action="">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Age:
    <input type="number" name="age" required>
    <br><br>

    Course:
    <input type="text" name="course" required>
    <br><br>

    Fees:
    <input type="number" name="fees" step="0.01" required>
    <br><br>

    <input type="submit" value="Insert Student">

</form>

</body>
</html>

<?php
mysqli_close($conn);
?>
