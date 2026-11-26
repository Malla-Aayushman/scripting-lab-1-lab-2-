<?php
$filename="data.txt";

//create and write data
$file=fopen($filename,"w");
fwrite($file,"Hello World\n");
fwrite($file,"File Handling program by rohit shah.");
fclose($file);

//read and display data
$file=fopen($filename,"r");
$size=filesize($filename);
$content=fread($file,$size);
fclose($file);

echo "File Content:<br>";
echo "<br>".$content;

?>
