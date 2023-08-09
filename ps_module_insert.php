<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $module_name = $_POST['module_name'];
	 $core_project_course = $_POST['core_project_course'];
	 
	 $sql = "INSERT INTO module_details(module_name,core_project_course)
	 VALUES ('$module_name','$core_project_course')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:module_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>