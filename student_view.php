<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">
<?php include 'dbmanagment.php';
$result = mysqli_query($conn,"SELECT * FROM pureskill_table");
?>


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
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
    <!-- text editor css -->

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body class="crm_body_bg">
    


 <!-- sidebar  -->
 <?php include 'sidebar.php'?>
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
   <?php include 'navbar.php'?>
    <!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Student Table</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                   
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add New</button>
                            
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active3 ">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Mobile No</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Qualification</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>

<tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["mobile_no"]; ?></td>
    <td><?php echo $row["email_id"]; ?></td>
    <td><?php echo $row["qualification"]; ?></td>
    <td><?php echo $row["date_"]; ?></td>
    <td><a href="#" class="status_btn">Active</a></td>
    <td><a href="ps_form_delete.php?id=<?php echo $row["id"]; ?>"><input type="submit" class="btn-danger" value="Delete" style="border-radius: 5px;padding-left: 15px;padding-right: 15px;"></a></td>

    </tr>
    <?php
    $i++;
    }
    ?>

                                            
                                    </table>
                                </div>
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




<!--/### CHAT_MESSAGE_BOX  ### -->
<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
  </div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-4">
       <form action="ps_insert.php" method="post">
    
                        
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Student Form</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputName">Name</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email_id">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputDate">Date</label>
                                            <input type="date" class="form-control" id="inputDate" placeholder="date" name="date_">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputBirthDate">Birth Date</label>
                                            <input type="date" class="form-control" id="inputBirthDate" placeholder="Birth Date" name="birth_date">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputGender">Gender</label>
                                            <select id="inputGender" class="form-control" name="gender">
                                                <option selected="">Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputMobileNo">Mobile No</label>
                                            <input type="number" class="form-control" id="inputMobileNo" name="mobile_no">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputAlternateNo">Alternate No</label>
                                            <input type="number" class="form-control" id="inputAlternateNo" name="alternate_number">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputTelephoneNo">Telephone No</label>
                                            <input type="number" class="form-control" id="inputTelephoneNo" name="telephone">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" name="address">
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="inputFatherName">Father Name</label>
                                            <input type="text" class="form-control" id="inputFatherName" placeholder="Father Name" name="father_name">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="inputCompanyName">Company Name</label>
                                            <input type="text" class="form-control" id="inputCompanyName" placeholder="Company Name" name="company_name">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip" name="pincode">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputStream">Stream</label>
                                            <select id="inputStream" class="form-control" name="stream">
                                                <option selected="">Choose...</option>
                                                <option>Science</option>
                                                <option>Commerce</option>
                                                <option>Arts</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputUniversity">University</label>
                                            <input type="text" class="form-control" id="inputUniversity" name="university">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputQualification">Qualification</label>
                                            <input type="text" class="form-control" id="inputQualification" name="qualification">
                                        </div>
                                    </div>

                                    
                                
                                    <div class="mb-1"></div>

                                    <div class="form-group">

                                        <div class="form-row">
    <div class="form group col-md-12" >
        Occupation:&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="occupation" >
        <label>Student</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="occupation">
        <label>Service</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="occupation">
        <label>Bussiness</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="occupation">
        <label>Professional</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="occupation">
        <label>Others</label>
    </div>
</div>
                                   <div class="mb-1"></div>
                                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                                </form>
    </div>
  </div>
</div>


<!-- footer  -->
<!-- footer  -->
<!-- jquery slim -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstarp js -->
<script src="js/bootstrap.min.js"></script>
<!-- sidebar menu  -->
<script src="js/metisMenu.js"></script>

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

<!-- scrollabe  -->
<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<!-- custom js -->
<script src="js/custom.js"></script>



</body>

</html>