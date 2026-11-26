<?php
if(isset($_REQUEST["submit"])){
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];

    if(empty($username)){
        echo "Username is required<br>";
    }

    if(empty($password)){
        echo "Password is required<br>";
    }

    if(!empty($username) && !empty($password)){
        echo "Login successful";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
</form>
