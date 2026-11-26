<?php

session_start();

$_SESSION["username"] = "Aayushman";

echo "Username stored in session.<br>";

echo "<a href='welcome.php'>Go to Welcome Page</a>";

?>