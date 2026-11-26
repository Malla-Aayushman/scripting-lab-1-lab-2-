<?php
//cookie.php
if(isset($_COOKIE["last_visit"])){
    echo "Your last visit was: ".$_COOKIE["last_visit"]."<br><br>";
}else{
    echo "This is your first visit.<br><br>";
}

setcookie("last_visit",date("Y-m-d H:i:s"),time()+86400*30);

echo "Current visit: ".date("Y-m-d H:i:s")."<br><br>";

echo "<a href='login.php'>Go to Login Page</a>";
?>
