<?php
//indexed array
$students=array("Alex","Anirudda","Rohit");

echo "Indexed Array:<br>";
foreach($students as $student){
    echo $student.", ";
}

//associative array
$student=array("name"=>"Alex","rollno"=>5,"marks"=>85);

echo "<br><br>Associative Array:<br>";
foreach($student as $key=>$value){
    echo $key." = ".$value."<br>";
}

//multidimensional array
$students=array(
    array("name"=>"Alex","rollno"=>5,"marks"=>85),
    array("name"=>"Anirudda","rollno"=>7,"marks"=>78),
    array("name"=>"Rohit","rollno"=>25,"marks"=>90)
);

echo "<br>Multidimensional Array:<br>";
foreach($students as $student){
    foreach($student as $key=>$value){
        echo $key." = ".$value." ";
    }
    echo "<br>";
}

?>
