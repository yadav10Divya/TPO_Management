<?php 
@ob_start();
session_start();
require("connection.php");

$fullame = $_SESSION['name'];
$eno = $_SESSION['eno'];
$bdate= $_SESSION['bdate'];
$email=  $_SESSION['email'];
$phone=  $_SESSION['phone'];
$age= $_SESSION['age'];
$gender=  $_SESSION['gender'];
$year=  $_SESSION['year'];
$address=  $_SESSION['address'];
$image= $_SESSION['image'] ;
$password= $_SESSION['password'] ;

$query = "select * from `academic` where `enroll` = '$eno'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>TPO Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
    
  .register{
background: -webkit-linear-gradient(left, #f1307082, #ae7185);
margin-bottom: 10%;
padding-left:20%;
padding-top:30px;

}
.register-left{
text-align: center;
color: #fff;
margin-top: 12%;
}
.register-left input{
border: none;
border-radius: 1.5rem;
padding: 2%;
width: 80%;
background: #f8f9fa;
font-weight: bold;
color: #383d41;
margin-top: 15%;
margin-bottom: 3%;
cursor: pointer;
}
.register-right{
background: #f8f9fa;
border-top-left-radius: 10% 50%;
border-bottom-left-radius: 10% 50%;
}
.register-left img{
margin-top: 15%;
margin-bottom: 5%;
width: 25%;
-webkit-animation: mover 2s infinite  alternate;
animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
0% { transform: translateY(0); }
100% { transform: translateY(-20px); }
}
@keyframes mover {
0% { transform: translateY(0); }
100% { transform: translateY(-20px); }
}
.register-left p{
font-weight: lighter;
padding: 12%;
margin-top: -9%;
}
.register .register-form{
padding: 10%;
margin-top: 7%;
}
.btnRegister{

margin-top: 10%;
border: none;
border-radius: 1.5rem;
padding: 2%;
background: #0062cc;
color: #fff;
font-weight: 600;
width: 50%;
cursor: pointer;
margin-left:50px;
}
.register .nav-tabs{
margin-top: 3%;
border: none;
background: #0062cc;
border-radius: 1.5rem;
width: 28%;
float: right;
}
.register .nav-tabs .nav-link{
padding: 2%;
height: 34px;
font-weight: 600;
color: #fff;
border-top-right-radius: 1.5rem;
border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
border: none;
}
.register .nav-tabs .nav-link.active{
width: 100px;
color: #0062cc;
border: 2px solid #0062cc;
border-top-left-radius: 1.5rem;
border-bottom-left-radius: 1.5rem;
}
.register-heading{
text-align: center;
margin-top: 5%;
margin-bottom: -15%;
color: #495057;
}
.container {
    max-width: 1300px;
}
.mydivouter{
	position:relative;
	background: white;
    width: 150px;
    height: 120px;
    margin: 0 auto;
    left: 720px;	
}
.mydivoverlap{
    position: relative;
    z-index: 1;
}
.mybutton{
	margin-top:10px;
}   left: 39px;	

.mydivouter:hover .mybuttonoverlap{ 
	display:block;
}
.btn{
    border-radius:10px;
}
/* #img{
   
  margin:20px;
  margin-left:90px;
} */
label{
    font-size:20px;
    margin-right:10px;
}

form{
    
    text-indent:3px;
    margin-right:20%;
    /* text-shadow:1px 1px 1px white ; */
   
}

td{
    border:1px solid  #ae7185;
}

        @media screen and (max-width:1500px){
    .mybutton{
        margin-top:60px;
        margin-left:-700px;
    }
    
} 

    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="final_logo-min.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
    <div class="mydivouter">	
    <button type="button" class=" mybutton btn btn-info" name="logout" onclick="window.open('index.html','_self');">Logout</button>
    </div>
    
      
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                       
                       </div>
                   </div>
              </div>
         </div>
   </div>
                            <!-- Logo >
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu >
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="job_listing.html">Find a Jobs </a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="job_details.html">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn >
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="#" class="btn head-btn1">Register</a>
                                    <a href="#" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu >
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
 
    <!--================Blog Area =================-->
    <div class="container register">
         <div style="background-color: #e91e6385;margin-right:33%;box-shadow:7px 7px 7px 2px white;margin-bottom:-8%;">
                          
                         <span style="font-size:30px;text-shadow:1px 1px 3px white ;margin-left:20%;">Update Student Data</span>
                         
                          
        </div> 
       
                           <form method="POST"  enctype="multipart/form-data" id="form1"  >
                           <div class="row register-form">
                                <div class="col-md-8">
                                    <!-- <div class="form-group">
                                    <img src="<?php echo $image; ?>" alt="photo" id="img">
                                  
						           <span> <input type="file" name="f1" id="uploadfile"></span>
                                     </div> -->
                                <div class="form-group">
                                    <label for="fname">Name:</label>
                                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fullame;?>">
                                </div>  
                                
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                                </div>  
                                <div class="form-group">
                                    <label for="add">Address:</label>
                                    <input type="text" class="form-control" id="add" name="add" value="<?php echo $address;?>">
                                </div>  
                                <div class="form-group">
                                    <label for="phno">Phone Number:</label>
                                    <input type="text" class="form-control" id="phno" name="phno" value="<?php echo $phone;?>">
                                </div>  
                                <div class="form-group">
                                    <label for="age">Age:</label>
                                    <input type="text" class="form-control" id="age" name="age" value="<?php echo $age;?>">
                                </div> 
                                <div class="form-group">
                                    <label for="year">Year :</label>
                                    <input type="text" class="form-control" id="year" name="year" value="<?php echo $year;?>">
                                </div> 
                                <div class="form-group">
                                    <label for="year">Semester :</label>
                                    <input type="text" class="form-control" id="sem" name="sem" value="<?php echo $result['sem'];?>">
                                </div> 
                                <div class="form-group">
                                    <label for="year">Live Backlogs:</label>
                                    <input type="text" class="form-control" id="liveBack" name="liveBack" value="<?php echo $result['liveBack'];?>">
                                </div> 
                                <div class="form-group">
                                    <label for="year">10th Percentage:</label>
                                    <input type="text" class="form-control" id="tenth" name="tenth" value="<?php echo $result['tenth'];?>">
                                </div> 
                                <div class="form-group">
                                    <label for="year">FY Percentage:</label>
                                    <input type="text" class="form-control" id="FY" name="FY" value="<?php echo $result['FY'];?>">
                                </div> 
                                <div class="form-group">
                                    <label for="year">SY Percentage:</label>
                                    <input type="text" class="form-control" id="SY" name="SY" value="<?php echo $result['SY'];?>">
                                </div> 
                                <div class="form-group">
                                    <label for="year">Academic Year:</label>
                                    <input type="text" class="form-control" id="ayear" name="ayear" value="<?php echo $result['ayear'];?>">
                                </div> 
                                <button type="submit" class="btn btn-primary" id="update" name="update"  style="margin-left:18%;font-size:20px;">update</button>
                                <!-- <input type="button" class="btn btn primary" name="update" value="update" style="margin-left:18%;font-size:20px;"> -->
    </div>
</div>
                            </form>
       

    </div>
    
    <!--================Blog Area =================-->
    <footer>
   
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-10 col-lg-10 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div class="footer-social f-right">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

        <?php
        

if(isset($_POST['update'])){
    $f = $_POST['fname'];

    $e=  $_POST['email'];
    $p=  $_POST['phno'];
    $a=  $_POST['age'];
    $y=  $_POST['year'];
    $ad=  $_POST['add'];
    $sem = $_POST['sem'];
    $liveBack = $_POST['liveBack'];
    $tenth = $_POST['tenth'];
    $FY = $_POST['FY'];
    $SY = $_POST['SY'];
    $ayear = $_POST['ayear'];
   
    // if($_FILES['f1']['name']){
    //     move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    //     $img1="image/".$_FILES['f1']['name'];
    // }
    
 $query = "UPDATE `sturegister` set name='".$f."' , email ='".$e."',address = '".$ad."',phone= '".$p."',age='".$a."',year='".$y."' where enroll = '".$eno."'";

$result = mysqli_query($conn, $query);

$query1 = "UPDATE `academic` set sem='".$sem."' , liveBack ='".$liveBack."',tenth = '".$tenth."',FY= '".$FY."',SY='".$SY."',ayear='".$ayear."' where enroll = '".$eno."'";

$result1 = mysqli_query($conn, $query1);
echo "<script>alert('Update Successfully');</script>";


}

?>
        
</body>
</html>