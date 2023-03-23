<?php 
require("connection.php");
@ob_start();
session_start();

$cid = $_GET['id'];
$query = "select * from `company_info` where `id`='$cid'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

$branch = $result['branch'];

$branch1 = explode(",",$branch);
 $udate = date("Y-m-d");

 $query2 = "select `ucount` from `company_info` where `id` = '$cid'";
 $data2 = mysqli_query($conn,$query2);
 $res = mysqli_fetch_assoc($data2);
 
$counter = $res['ucount'];
if($counter == ""){
    $counter = 1;
}
else{
    $counter+=1;
}

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <title>Tpo Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets1/css/fontawesome.css" />

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets1/css/flag-icon.css" />
    <link href="../Styles/SampleStyleSheet.css" rel="stylesheet" />
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="assets1/css/jsgrid.css" />

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap.css" />

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets1/css/admin.css" />
    <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

    <script type="text/javascript"
        src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

        <style>
            .para{
                margin-left:50px;
            }
            .b1{
                margin-left:60%;
              
            }
            table, th, td,th {
  border: 2px solid;
}

th{
    background-color:#ff8084;
    height:70px;
    width:100px;
    text-align: center;
}
tr:hover {
    background-color: #A9A9A9;
    opacity: 0.7;
    font-weight:50px;
    
    
}
tr{
    height:80px;
}
            table{
                margin-left:10%;
            }

            th,td{
                padding:10px;
                text-align: center;
              
            }

        
        </style>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none">
                    <div class="logo-wrapper">
                        <a href="Index.html">
                            <img src="" alt=""></a>
                    </div>
                </div>
                <div class="mobile-sidebar">
                    <div class="media-body text-right switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                        
                        <li class="onhover-dropdown">
                            <div class="media align-items-center">
                                
                               
                            </div>
                            <ul class="">
                                <li><a href="index.html"  class=" mybutton btn btn-info" onclick="preventBack()">Logout</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>

        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="blur-up lazyloaded" alt=""></a>
                    </div>
                </div>

                <div class="sidebar custom-scrollbar">
                    <ul class="sidebar-menu">
                        <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Master</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="TPO_dashboard.php"><i class="fa fa-circle"></i>Company Data</a></li>
                                <li><a href="companyList.php"><i class="fa fa-circle"></i>Update Data</a></li>
                            </ul>
                        </li>
                      
                    </ul>
                </div>
                
            </div>
            <!-- Page Sidebar Ends-->

           
            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Company Data
                                        <small>TPO Panel</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
                <div class="container-fluid border border-white">
                    <form class="needs-validation"  method="POST">
                  
                        <div class="row">
                        <div style="width:100%"><hr /></div>
                        
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <h5 class="para">Enter Name of company</h5>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Enter Name of company" value="<?php echo $result['company'] ;?>" required>
                            </div>
                            <div class="form-group">
                            <h5 class="para">Enter CTC</h5>
                             <input type="text" class="form-control" id="ctc" name="ctc" placeholder="Enter CTC" value="<?php echo $result['ctc'] ;?>" required>
                            </div>
                            <div class="form-group">
                                    <h5 class="para">Applicable Branches</h5>
                                    
                                    <input type="checkbox"  name="branch[]" value="CO" 
                                   <?php 
                                    if(in_array("CO",$branch1)){
                                        echo "checked";
                                    }

                                    ?>
                                    ><label for="branch1" >CO</label><br>
                                    
                                    <input type="checkbox" id="branch2" name="branch[]" value="EJ"
                                    <?php 
                                    if(in_array("EJ",$branch1)){
                                        echo "checked";
                                    }

                                    ?>
                                    ><label for="branch2">EJ</label><br>
                                   
                                    
                                    <input type="checkbox" id="branch3" name="branch[]" value="ME"
                                    <?php 
                                    if(in_array("ME",$branch1)){
                                        echo "checked";
                                    }

                                    ?>
                                    ><label for="branch3">ME</label><br>
                                  
                                    
                                    <input type="checkbox" id="branch4" name="branch[]" value="EE"
                                    <?php 
                                    if(in_array("EE",$branch1)){
                                        echo "checked";
                                    }

                                    ?>
                                    
                                    ><label for="branch4">EE</label><br>
                                    
                                    
                                    <input type="checkbox" id="branch5" name="branch[]" value="CE"
                                    <?php 
                                    if(in_array("CE",$branch1)){
                                        echo "checked";
                                    }

                                    ?>
                                    
                                    ><label for="branch5">CE</label></br>

                                    <input type="checkbox" id="branch5" name="branch[]" value="ENTC"
                                    <?php 
                                    if(in_array("ENTC",$branch1)){
                                        echo "checked";
                                    }

                                    ?>
                                    
                                    ><label for="branch5">CE</label></br>
                                    
                                     </div>
                            
                            <div class="form-group">
                            <h5 class="para">Enter Bond Duration</h5>
                            <input type="text" class="form-control" id="bond" name="bond" value="<?php echo $result['bond'] ;?>" placeholder="Enter bond duration" required>
                            </div>
                            <div class="form-group">
                            <h5 class="para">Enter Role</h5>
                            <input type="text" class="form-control" id="role" name="role" value="<?php echo $result['role'] ;?>" placeholder="Enter Role" required>
                            </div>
                       
                       
                        </div>
                        <div class="col-md-2"></div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <h5 class="para">Enter Start Date</h5>
                            <input type="date" class="form-control" id="sdate" name="sdate"  value="<?php echo $result['sdate'] ;?>" required>
                            </div>
                            
                            <div class="form-group">
                            <h5 class="para">Enter End Date</h5>
                            <input type="date" class="form-control" id="edate" name="edate" value="<?php echo $result['edate'] ;?>"  required>
                            </div>
                        <div class="form-group">
                        <h5 class="para">Enter Date Of Test</h5>
                                <input type="date" class="form-control" id="tdate" name="tdate"  value="<?php echo $result['tdate'] ;?>" required>
                            </div>
                            <div class="form-group">
                          <h5 class="para"> Enter Date Of Interview</h5>
                                <input type="date" class="form-control" id="idate" name="idate" value="<?php echo $result['idate'] ;?>" required>
                            </div>
                           <br>
                           
                        </div>
                    </div>
                    
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-6">
								<button class="btn btn-primary b1"  id="submit" type="submit" name="update">Update</button>
						</div>
						<div class="col-md-4"></div>
					</div>
                    
                </div>
               
            </form>
            </div>
          
    
        </div>
            <!-- footer start-->
            <!-- <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 footer-copyright">
                            <p class="mb-0">Copyright &copy 2023 </p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <p class="pull-right mb-0">Goverment Polytechnic Karad . All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer> -->
            <!-- footer end-->
        </div>
    </div>

    <!-- latest jquery-->
    <script src="assets1/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets1/js/popper.min.js"></script>
    <script src="assets1/js/bootstrap.js"></script>

    <!-- feather icon js-->
    <script src="assets1/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets1/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets1/js/sidebar-menu.js"></script>

    <!--Customizer admin-->
    <script src="assets1/js/admin-customizer.js"></script>

    <!-- Jsgrid js-->
    <script src="assets1/js/jsgrid/jsgrid.min.js"></script>
    <script src="assets1/js/jsgrid/griddata-manage-product.js"></script>
    <script src="assets1/js/jsgrid/jsgrid-manage-product.js"></script>

    <!--right sidebar js-->
    <script src="assets1/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets1/js/admin-script.js"></script>


    <!--checkbox-->
    <script>
$(document).ready(function () {
    $('#submit').click(function() {
      checked = $("input[type=checkbox]:checked").length;
 
      if(!checked) {
        alert("Please select at least one checkbox to submit.");
        return false;
      }
        
    });
});
</script>
    
    <?php
        

        if(isset($_POST['update'])){

          $cname = $_POST['company']; 
          $ctc = $_POST['ctc'];

          $ubranch = $_POST['branch'] ;
          $ubranch1 = implode(",",$ubranch);


          $sdate= $_POST['sdate']; 
          $edate= $_POST['edate']; 
          $tdate= $_POST['tdate']; 
          $idate= $_POST['idate']; 
          $bond= $_POST['bond']; 
          $role = $_POST['role'];
         $query1 = "UPDATE `company_info` SET `company`='".$cname."',`ctc`='".$ctc."',`branch`='".$ubranch1."',`sdate`='".$sdate."',`edate`='".$edate."',`tdate`='".$tdate."',`idate`='".$idate."',`bond`='".$bond."',`role`='".$role."',`ucount`='".$counter."',`udate`='".$udate."'where `id`='".$cid."' ";
        
        $result1 = mysqli_query($conn, $query1);
        echo "<script>alert('Update Successfully');</script>";
        
        
        }
        
        ?>
              

</body>

</html>