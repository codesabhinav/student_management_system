<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<?php
include 'dbmanagment.php';
$result = mysqli_query($conn,"SELECT * FROM module_details");
?>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 10:40:54 GMT -->
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
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
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
                                    <h3 class="m-0">Module Table</h3>
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
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="height: 13%;" >Add New</button>
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active3 ">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Module Name</th>
                                                <th scope="col">Core Project Course</th>
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
    <td><?php echo $row["module_name"]; ?></td>
    <td><?php echo $row["core_project_course"]; ?></td>
    


    <td><a href="#" class="status_btn">Active</a></td>
    


        <td><a href="ps_module_update.php?id=<?php echo $row["id"]; ?>"><input type="submit" value="Update" class="btn-info" style="border-radius: 5px;padding-left: 10px;padding-right: 10px;"></a>

    <a href="ps_module_delete.php?id=<?php echo $row["id"]; ?>"><input type="submit" class=" btn-danger" value="Delete" style="border-radius: 5px;padding-left: 10px;padding-right: 10px;"></a></td>
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

        <form action="ps_module_insert.php" method="post">
    
                        
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Module Form</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputModuleName">Module Name</label>
                                            <input type="text" class="form-control" id="inputModuleName" placeholder="Module Name" name="module_name">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">

                                            <label for="inputCoreProjectCourse">Core Project Course</label>
                                            <select id="inputCoreProjectCourse" class="form-control" name="core_project_course">
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

                                    <div class="mb-1"></div>
                                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                                </form>

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

<!-- Mirrored from demo.dashboardpack.com/user-management-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 10:40:54 GMT -->
</html>

