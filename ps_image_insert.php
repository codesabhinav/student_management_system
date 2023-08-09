<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 
	 $image = $_POST['image'];
	 
	 $sql = "INSERT INTO images(image)
	 VALUES ('$image')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:image_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>