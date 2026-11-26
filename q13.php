<?php
if(isset($_POST["submit"])){
    $filename=$_FILES["file"]["name"];
    $filetype=$_FILES["file"]["type"];
    $filesize=$_FILES["file"]["size"];
    $tmpname=$_FILES["file"]["tmp_name"];

    $folder="uploads/";

    if(!is_dir($folder)){
        mkdir($folder);
    }

    move_uploaded_file($tmpname,$folder.$filename);

    echo "File uploaded successfully<br>";
    echo "File Name = ".$filename."<br>";
    echo "File Type = ".$filetype."<br>";
    echo "File Size = ".$filesize." bytes";
}
?>

<form method="POST" enctype="multipart/form-data">
    Select File: <input type="file" name="file"><br><br>
    <input type="submit" name="submit" value="Upload">
</form>
 