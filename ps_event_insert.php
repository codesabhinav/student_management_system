<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $event_date = $_POST['event_date'];
	 $event_name = $_POST['event_name'];
	 $description = $_POST['description'];
	 $category = $_POST['category'];

	 $sql = "INSERT INTO event_details(event_date,event_name,description,category)
	 VALUES ('$event_date','$event_name','$description','$category')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:event_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>