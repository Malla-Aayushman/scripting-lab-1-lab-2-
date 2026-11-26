<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $education = $_POST["education"];

    if (empty($name) || empty($email) || empty($gender) || empty($education)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } else {

        $sql = "INSERT INTO registration
                (name, email, gender, education)
                VALUES ('$name', '$email', '$gender', '$education')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST" action="">

    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="text" name="email">
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Education/Faculty:
    <select name="education">
        <option value="">Select</option>
        <option value="BCA">BCA</option>
        <option value="BIT">BIT</option>
        <option value="BBS">BBS</option>
        <option value="BIM">BIM</option>
    </select>
    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>

<?php
mysqli_close($conn);
?>
