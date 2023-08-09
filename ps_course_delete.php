<?php
include 'dbmanagment.php';
$sql = "DELETE FROM course_details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location:course_view.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>