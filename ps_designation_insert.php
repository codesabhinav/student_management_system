<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 
	 $designation = $_POST['designation'];
	 
	 $sql = "INSERT INTO designation_details(designation)
	 VALUES ('$designation')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:designation_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>