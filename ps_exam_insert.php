<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 

	 $core_project_course = $_POST['core_project_course'];
	 $exam_marks = $_POST['exam_marks'];
	 $no_of_questions = $_POST['no_of_questions'];
	 $marks_per_questions = $_POST['marks_per_questions'];


	 $sql = "INSERT INTO exam_details(core_project_course,exam_marks,no_of_questions,marks_per_questions)
	 VALUES ('$core_project_course','$exam_marks','$no_of_questions',
	 	'$marks_per_questions')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:exam_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>