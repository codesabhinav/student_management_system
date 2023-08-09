<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $short_term_course = $_POST['short_term_course'];
	 $core_project_course = $_POST['core_project_course'];
	 $sql = "INSERT INTO course_details(name,short_term_course,core_project_course)
	 VALUES ('$name','$short_term_course','$core_project_course')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:course_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>