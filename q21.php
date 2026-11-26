<!DOCTYPE html>
<html>
<head>
    <title>GET and POST</title>
</head>
<body>

<h2>GET Method</h2>

<form method="GET" action="">
    Name:
    <input type="text" name="get_name">
    <input type="submit" value="Submit using GET">
</form>

<?php
if (isset($_GET["get_name"])) {
    echo "Name received using GET: " . $_GET["get_name"];
}
?>

<hr>

<h2>POST Method</h2>

<form method="POST" action="">
    Name:
    <input type="text" name="post_name">
    <input type="submit" value="Submit using POST">
</form>

<?php
if (isset($_POST["post_name"])) {
    echo "Name received using POST: " . $_POST["post_name"];
}
?>

</body>
</html>
