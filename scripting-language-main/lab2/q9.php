<?php
//GET form
if(isset($_GET["submit"])){
    $name=$_GET["name"];
    $email=$_GET["email"];

    echo "GET Method:<br>";
    echo "Name = ".$name."<br>";
    echo "Email = ".$email."<br>";
}
?>

<form method="GET">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" name="submit" value="Submit GET">
</form>

<br>

<?php
//POST form
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];

    echo "POST Method:<br>";
    echo "Name = ".$name."<br>";
    echo "Email = ".$email;
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" name="submit" value="Submit POST">
</form>
