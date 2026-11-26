<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form method="POST">

    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course">
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="BIT">BIT</option>
    </select>

    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<?php

if (isset($_POST["submit"])) {

    echo "Name: " . $_POST["name"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Password: " . $_POST["password"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    echo "Course: " . $_POST["course"];

}

?>

</body>
</html>