<?php

session_start();

if (isset($_SESSION["username"])) {

    echo "Welcome " . $_SESSION["username"];

} else {

    echo "No user is logged in.";

}

?>

<?php

if (isset($_COOKIE["last_visit"])) {

    echo "Your last visit was: " . $_COOKIE["last_visit"] . "<br>";

} else {

    echo "This is your first visit.<br>";

}

setcookie(
    "last_visit",
    date("Y-m-d H:i:s"),
    time() + 86400
);

echo "Cookie has been updated.";

?>