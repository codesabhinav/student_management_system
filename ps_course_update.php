<?php
include_once 'dbmanagment.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE course_details set 
	id='" . $_POST['id'] . "',
	name='" . $_POST['name'] . "',
	short_term_course='" . $_POST['short_term_course'] . "',
	core_project_course='" . $_POST['core_project_course'] . "' 
	WHERE id='" . $_POST['id'] . "'");
header('Location:course_view.php');
}
$result = mysqli_query($conn,"SELECT * FROM course_details WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<!-- Mirrored from demo.dashboardpack.com/user-management-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 10:40:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>

    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <!-- date picker -->
     <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />



    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">

</head>
<body class="crm_body_bg">
    


<!-- main content part here -->

 
 <!-- sidebar  -->
<?php include 'sidebar.php'?>
 <!--/ sidebar  -->



<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
        <?php include 'navbar.php'?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>



<div class="container">

	<form name="frmUser" method="post" action="">




		<div class="row">

			<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"> 

		<div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Course Form</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputName">Name</label><br>
                                            <select id ="inputName"  class="form-control" name="name" required>
                    <option selected>Select...</option>

                    <?php
                    $records=mysqli_query($conn, "SELECT name FROM pureskill_table");
                    while($data = mysqli_fetch_array($records))
                    {
                        echo "<option>" .$data['name'] ."</option>";
                    }

                    ?>

                </select>
                                        </div>
                                       </div>
                                       
                                       <div class="form-row">
                                        <div class="form-group col-md-6">

                                            <label for="inputCoreProjectCourse">Core Project Course</label>
                                            <select id="inputCoreProjectCourse" class="form-control" name="core_project_course" value="<?php echo $row['core_project_course']; ?>">
                                                <option selected>Select...</option>
                    <option value="Advance Diploma Engineering In Cyber Security Standard">Advance Diploma Engineering In Cyber Security Standard</option>
                    <option value="Advance Diploma Engineering In Cloud Computing Standard">Advance Diploma Engineering In Cloud Computing Standard</option>
                    <option value="Advance Diploma Engineering In Web & Mobile Application Development">Advance Diploma Engineering In Web & Mobile Application Development</option>
                    <option value="Advance Diploma Engineering In Computer Teacher Training">Advance Diploma Engineering In Computer Teacher Training</option>
                    <option value="Diploma Track- Computer Hardware, Networking, Server, Ethical Hacking">Diploma Track- Computer Hardware, Networking, Server, Ethical Hacking</option>
                    <option value="Diploma Track- Cloud Computing">Diploma Track- Cloud Computing</option>
                    <option value="Diploma Track- Web Designing, PHP, Asp.Net, VB.Net">Diploma Track- Web Designing, PHP, Asp.Net, VB.Net</option>
                    <option value="Diploma Track- Java, Advanced Java, Andorid">Diploma Track- Java, Advanced Java, Andorid</option>

                                            </select>
                                        </div>

                                       </div>

                                       <div class="form-row">
                                        <div class="form-group col-md-6">

                                            <label for="inputSoftSkillCourse">Soft Skill Course</label>
                                            <select id="inputSoftSkillCourse" class="form-control" name="short_term_course" value="<?php echo $row['short_term_course']; ?>">
                                                <option selected>Select...</option>
                    <option value="MS Office/CCC">MS Office/CCC</option>
                    <option value="CorelDraw">CorelDraw</option>
                    <option value="Photoshop">Photoshop</option>
                    <option value="Tally GST">Tally GST</option>

                                            </select>
                                        </div>
                                    </div>	
</div>
<div class="mb-3"></div>
<div class="row"> 
	
<div class="col-6">

  <button type="submit" class="btn-primary" name="save" style="padding-left: 15px;padding-right: 15px;border-radius: 5px;">Submit</button>
</div>
</div>

</form>







</div>


</body>
</html>