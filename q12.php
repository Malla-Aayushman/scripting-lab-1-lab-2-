<?php

$file = "student.txt";

// Open file for writing
$handle = fopen($file, "w");

// Write data
$data = "Name: Aayushman\n";
$data .= "Course: BCA\n";
$data .= "College: KMC\n";

fwrite($handle, $data);

// Close file
fclose($handle);


// Open file for reading
$handle = fopen($file, "r");

// Read file
$content = fread($handle, filesize($file));

// Close file
fclose($handle);

echo nl2br($content);

?>
