<?php
$conn = mysqli_connect("localhost", "root", "9845766311", "college_db", 3307);

if ($_POST) {
    $sql = "INSERT INTO students(name,age,course,fees)
            VALUES('$_POST[name]','$_POST[age]','$_POST[course]','$_POST[fees]')";

    echo mysqli_query($conn, $sql) ? "Inserted!" : "Error!";
}
?>

<h2>Student Registration</h2>

<form method="post">
    form submitted sucessfully <br>
Name: <input name="name"><br><br>
Age: <input name="age" type="number"><br><br>
Course: <input name="course"><br><br>
Fees: <input name="fees" type="number"><br><br>
<input type="submit" value="Insert">
</form>