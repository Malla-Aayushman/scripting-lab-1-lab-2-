<?php
//welcome.php
session_start();

if(isset($_SESSION["username"])){
    echo "Welcome ".$_SESSION["username"]."!<br><br>";
    echo "<a href='cookie.php'>Click here to check Cookie</a>";
}else{
    echo "No user is logged in.<br><br>";
    echo "<a href='login.php'>Go to Login Page</a>";
}
?>
