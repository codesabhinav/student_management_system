<?php
include_once 'dbmanagment.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE wecourse_details set 
	id='" . $_POST['id'] . "',
	course_name='" . $_POST['course_name'] . "',
	course_code='" . $_POST['course_code'] . "',
	course_duration='" . $_POST['course_duration'] . "',
    course_description='" . $_POST['course_description'] . "' 

	WHERE id='" . $_POST['id'] . "'");
header('Location:webcourse_view.php');
}
$result = mysqli_query($conn,"SELECT * FROM wecourse_details WHERE id='" . $_GET['id'] . "'");
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
                                    <h3 class="m-0">WebCourse Form</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">

                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCourseName">Course Name</label>
                                            <input type="text" class="form-control" id="inputCourseName"  name="course_name" value="<?php echo $row['course_name']; ?>">
                                        </div>
                                    </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputName">Course Code</label>
                                            <input type="text" class="form-control" id="inputCourseCode"  name="course_code" value="<?php echo $row['course_code']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCourseDuration">Course Duration</label>
                                            <input type="number" class="form-control" id="inputCourseDuration"  name="course_duration" placeholder="Enter Month" value="<?php echo $row['course_duration']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="inputCourseDescription">Course Description</label>
                                            <textarea class="form-control"   rows="5" name="course_description" id="inputCourseDescription" value="<?php echo $row['course_description']; ?>"></textarea>

                                        </div>
                                    </div>
                                    <div class="mb-1"></div>
                                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
<?php include 'footer.php'?> 
</section>
<!-- main content part end -->





  
  <!-- footer  -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstarp js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- sidebar menu  -->
  <script src="js/metisMenu.js"></script>
  <!-- waypoints js -->
  <script src="vendors/count_up/jquery.waypoints.min.js"></script>
  <!-- waypoints js -->
  <script src="vendors/chartlist/Chart.min.js"></script>
  <!-- counterup js -->
  <script src="vendors/count_up/jquery.counterup.min.js"></script>
  
  <!-- nice select -->
  <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>
  <!-- owl carousel -->
  <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>
  
  <!-- responsive table -->
  <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
  <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatable/js/buttons.flash.min.js"></script>
  <script src="vendors/datatable/js/jszip.min.js"></script>
  <script src="vendors/datatable/js/pdfmake.min.js"></script>
  <script src="vendors/datatable/js/vfs_fonts.js"></script>
  <script src="vendors/datatable/js/buttons.html5.min.js"></script>
  <script src="vendors/datatable/js/buttons.print.min.js"></script>
  
  
  <script src="js/chart.min.js"></script>
  <!-- progressbar js -->
  <script src="vendors/progressbar/jquery.barfiller.js"></script>
  <!-- tag input -->
  <script src="vendors/tagsinput/tagsinput.js"></script>
  <!-- text editor js -->
  <script src="vendors/text_editor/summernote-bs4.js"></script>
  <script src="vendors/am_chart/amcharts.js"></script>
  
  <!-- scrollabe  -->
  <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
  <script src="vendors/scroll/scrollable-custom.js"></script>
  
  
  <script src="vendors/chart_am/core.js"></script>
  <script src="vendors/chart_am/charts.js"></script>
  <script src="vendors/chart_am/animated.js"></script>
  <script src="vendors/chart_am/kelly.js"></script>
  <script src="vendors/chart_am/chart-custom.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  </body>
  
<!-- Mirrored from demo.dashboardpack.com/user-management-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 10:40:37 GMT -->
</html>