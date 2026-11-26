<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* UPDATE student record */

$update_sql = "UPDATE students
               SET age=21, course='BCA', fees=70000
               WHERE id=1";

if (mysqli_query($conn, $update_sql)) {
    echo "Student record updated successfully.<br><br>";
} else {
    echo "Error updating record: " . mysqli_error($conn) . "<br><br>";
}


/* DELETE student record */

$delete_sql = "DELETE FROM students
               WHERE id=2";

if (mysqli_query($conn, $delete_sql)) {
    echo "Student record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
