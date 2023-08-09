<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $father_name = $_POST['father_name'];
	 $mobile_no = $_POST['mobile_no'];
	 $gender = $_POST['gender'];
	 $date_ = $_POST['date_'];
	 $email_id = $_POST['email_id'];
	 $birth_date = $_POST['birth_date'];
	 $address = $_POST['address'];
	 $pincode = $_POST['pincode'];
	 $telephone = $_POST['telephone'];
	 $alternate_number = $_POST['alternate_number'];
	 $qualification = $_POST['qualification'];
	 $stream = $_POST['stream'];
	 $university = $_POST['university'];
	 $occupation = $_POST['occupation'];
	 $company_name = $_POST['company_name'];
	 $sql = "INSERT INTO pureskill_table(name,father_name,mobile_no,gender,date_,email_id,birth_date,address,pincode,telephone,alternate_number,qualification,stream,university,occupation,company_name)
	 VALUES ('$name','$father_name','$mobile_no','$gender','$date_','$email_id','$birth_date','$address','$pincode','$telephone','$alternate_number','$qualification','$stream','$university','$occupation','$company_name')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:student_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>