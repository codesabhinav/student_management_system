<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $course_name = $_POST['course_name'];
	 $course_code = $_POST['course_code'];
	 $course_duration = $_POST['course_duration'];
	 $course_description = $_POST['course_description'];
	 $sql = "INSERT INTO wecourse_details(course_name,course_code,course_duration,course_description)
	 VALUES ('$course_name','$course_code','$course_duration','$course_description')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:webcourse_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>