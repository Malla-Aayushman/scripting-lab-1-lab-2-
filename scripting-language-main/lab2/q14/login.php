
<?php
//login.php
session_start();

$_SESSION["username"]="Rohit";

echo "Login successful.<br>";
echo "<a href='welcome.php'>Go to Welcome Page</a>";
?>
