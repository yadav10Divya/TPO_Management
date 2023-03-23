<?php 
require("connection.php");
@ob_start();
session_start();

$Stuid = $_SESSION['enroll'];
$query4 = "select * from `sturegister` where `enroll` = '$Stuid'";
$data = mysqli_query($conn,$query4);
$result4 = mysqli_fetch_assoc($data);

$sname = $result4['name'];
$today = date("Y-m-d");

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <title> Student Dashboard</title>
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
table, th, td,th 
{
 border: 2px solid;
}

th{
    background-color:#ff8084;
    height:70px;
    width:100px;
    text-align: center;
}
/* tr:hover {
    background-color: #A9A9A9;
    opacity: 0.7;
    font-weight:50px;
    
    
} */
tr{
    height:80px;
}
table{
 margin-left:20%;
 margin-top:4%;
}

th,td{
 padding:10px;
 text-align: center;
              
    }
.heading{
    
    height: 50px;
    width:100%;
    background-color:#ddd;
    border:2px solid ;
    margin-bottom:12px;
    border-top-right-radius: 40px;
    border-bottom-left-radius: 40px;
    }

@media screen and (max-width:600px) {
    .heading{
    width:100%;
    border-top-right-radius: 10px;

    border-bottom-left-radius: 10px;
    }
    table{
    margin-left:0px;

    }
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
                                 <li><a href="Stu_profile.php"><i class="fa fa-circle"></i>Student Profile</a></li>
                               <li><a href="Aptitude.php"><i class="fa fa-circle"></i>Aptitude Data</a></li> 
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
                                    <h3>Aptitude Link Data
                                        <small>Student Panel</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <div class="container-fluid border border-white">
                    <div class="heading">
                        <h3 style="margin:5px;"><marquee behavior="" direction="right">Welcome User <?php echo $sname;?></marquee></h3>
                    </div>
                    <form class="needs-validation"  method="POST">
                    <div style="overflow-x: auto;">
                    <table >
                    <tr>
                        <th>Enrollement Number</th>
                        <th>Company Id</th>
                        <th>Approved Date</th>
                        <th>Approved</th>
                        <th>Link</th>
                    
                    </tr>   
               <?php
                $sql = "SELECT * FROM `link` where  eno = '$Stuid'";
                
             $query=mysqli_query($conn,$sql); 
            $row=mysqli_num_rows($query);
            if($row)
            {
                while($res=mysqli_fetch_array($query)){
                    $_SESSION['eno'] = $res['eno'];
                    $_SESSION['companyid'] = $res['companyid'];
                    $_SESSION['AppDate'] = $res['AppDate'];
                    $_SESSION['status'] = $res['status'];
                    $_SESSION['link'] = $res['link'];
                    $_SESSION['deadline'] = $res['date'];
                  
                    if($_SESSION['deadline'] >= $today && $_SESSION['status'] =="yes"){
                        ?>
                            <tr>

                            <td><?php echo $res['eno']?></td>
                            <td><?php echo $res['companyid']?></td>
                            <td><?php echo $res['AppDate']?></td>
                            <td><?php echo $res['status']?></td>
                            <td><a href="<?php echo $res['link']; ?>">Link</a></td>

                            </tr>        
                                <?php 

                            }
                    else{
                            ?>
                            <tr>

                            <td><?php echo $res['eno']?></td>
                            <td><?php echo $res['companyid']?></td>
                            <td><?php echo $res['AppDate']?></td>
                            <td><?php echo $res['status']?></td>
                            <td><a href="#">Link is not clickable to you</a></td>

                            </tr>    
                            <?php    
                            }
                            ?>
            
                    <?php
                }
            }

            else
            {
                echo "<tr><td colspan='6'>You are not applicable</td></tr>";
            }

               ?>

               </div>
        </table>
            </form>
            </div>
        </div>
            <!-- footer start-->
         
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


    <?php
        
        if(isset($_POST['link']))
        {
        
            if($_SESSION['deadline'] >= $today && $_SESSION['status'] =="yes")
            {
                ?>
                <td><a href="<?php echo $res['link']; ?>">Link</a></td>
                <?php 

            }
            else
            {
                echo "<script>alert('Sorry!..You are not able to apply');</script>";
            }
        }
       
        ?>

</body>

</html>