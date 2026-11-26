<?php

$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (strlen($name) > 40) {
        echo "Full name must not exceed 40 characters.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    }
    elseif (!preg_match("/^[A-Za-z]+[0-9]+$/", $username)) {
        echo "Username must start with letters followed by numbers.";
    }
    elseif (strlen($password) <= 8) {
        echo "Password must be more than 8 characters.";
    }
    else {

        $sql = "INSERT INTO users (full_name, email, username, password)
                VALUES ('$name', '$email', '$username', '$password')";

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

<form method="POST">

    Full Name:
    <input type="text" name="full_name">
    <br><br>

    Email:
    <input type="text" name="email">
    <br><br>

    Username:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>

<?php
mysqli_close($conn);
?>
