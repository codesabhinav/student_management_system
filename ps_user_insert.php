<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $user_name = $_POST['user_name'];
	 $full_name = $_POST['full_name'];
	 $user_type = $_POST['user_type'];
	 


	 $sql = "INSERT INTO user_details(user_name,full_name,user_type)
	 VALUES ('$user_name','$full_name','$user_type')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:user_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>