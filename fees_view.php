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
$result = mysqli_query($conn,"SELECT * FROM fees_details");
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
                                    <h3 class="m-0">Fees Table</h3>
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
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Fees To Pay</th>
                                                <th scope="col">Total Paid</th>
                                                <th scope="col">Payment Date</th>
                                                <th scope="col">Payment Mode</th>
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
    <td><?php echo $row["fees_to_pay"]; ?></td>
    <td><?php echo $row["total_paid"]; ?></td>
    <td><?php echo $row["payment_date"]; ?></td>
    <td><?php echo $row["payment_mode"]; ?></td>



        <td><a href="#" class="status_btn">Active</a></td>
    


        <td><a href="ps_fees_delete.php?id=<?php echo $row["id"]; ?>"><input type="submit" class="btn-danger" value="Delete" style="border-radius: 5px;padding-left: 10px;padding-right: 10px;"></a></td>
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
        <form action="ps_fees_insert.php" method="post">
    
                        
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Fees Form</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputName">Student Name</label><br>
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
                                            <label for="inputFeesToPay">Fees To Pay</label>
                                            <input type="number" class="form-control" id="inputFeesToPay" name="fees_to_pay">

                                        </div>
                                    

                                    
                                        <div class="form-group col-md-6">
                                            <label for="inputTotalPaid">Total Paid</label>
                                            <input type="number" class="form-control" id="inputTotalPaid" name="total_paid">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPaymentDate">Payment Date</label>
                                            <input type="date" class="form-control" id="inputPaymentDate" name="payment_date">

                                        </div>
                                    

                                    
                                        <div class="form-group col-md-6">

                                            <label for="inputPaymentMode">Payment Mode</label>
                                            <select id="inputPaymentMode" class="form-control" name="payment_mode">

                                                <option selected>Select...</option>
                    <option value="Cash">Cash</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Bank">Bank</option>
                    <option value="Others">Others</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputRemarks">Remarks</label>
                                            <textarea class="form-control"   rows="5"></textarea name="remarks" id="inputRemarks">

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

