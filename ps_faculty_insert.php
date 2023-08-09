<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $designation = $_POST['designation'];
	 $email_id = $_POST['email_id'];
	 $phone_no = $_POST['phone_no'];
	 $sql = "INSERT INTO faculty_details(name,designation,email_id,phone_no)
	 VALUES ('$name','$designation','$email_id','$phone_no')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:faculty_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>