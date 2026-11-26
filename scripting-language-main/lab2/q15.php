<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$sql="CREATE DATABASE IF NOT EXISTS college_db";

if(mysqli_query($conn,$sql)){
    echo "Database created successfully<br>";
}else{
    echo "Error creating database: ".mysqli_error($conn);
}

mysqli_select_db($conn,"college_db");

$sql="CREATE TABLE IF NOT EXISTS students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    course VARCHAR(100),
    fees DECIMAL(10,2),
    admission_date DATE
)";

if(mysqli_query($conn,$sql)){
    echo "Students table created successfully";
}else{
    echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);
?>
