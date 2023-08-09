<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $fees_to_pay = $_POST['fees_to_pay'];
	 $total_paid = $_POST['total_paid'];
	 $payment_date = $_POST['payment_date'];
	 $payment_mode = $_POST['payment_mode'];


	 $sql = "INSERT INTO fees_details(name,fees_to_pay,total_paid,payment_date,payment_mode)
	 VALUES ('$name','$fees_to_pay','$total_paid','$payment_date','$payment_mode')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:fees_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>