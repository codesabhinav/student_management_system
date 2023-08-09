<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $batch_time = $_POST['batch_time'];
	 $faculty = $_POST['faculty'];
	 $module_name = $_POST['module_name'];
	 $sql = "INSERT INTO batch_details(name,batch_time,faculty,module_name)
	 VALUES ('$name','$batch_time','$faculty','$module_name')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:batch_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>