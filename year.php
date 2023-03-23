<?php 
@ob_start();
session_start();
require("connection.php");
$year =  $_SESSION['year'];
$fullame = $_SESSION['fname'];
$eno = $_SESSION['eno'];

//echo "<script>alert('$success');</script>";
//echo $success;


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
}
.mydivouter:hover .mybuttonoverlap{ 
	display:block;
}
.btn{
    border-radius:10px;
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
                          <div>
                         <marquee  direction="right" loop="" bgcolor="gray"><h2>Welcome User: <?php  echo $fullame; ?></h2></marquee>
                         </div>
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
    <!-- Hero Area Start>
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Single Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!--================Blog Area =================-->
    <div class="container register">
        <?php
        if($year == "FY"){?>

                       <form method="POST"  enctype="multipart/form-data" >
                            <div class="row register-form">
                                <div class="col-md-8">
                                    <h3>Enter The Marks Data</h3>
                                  <div class="form-group">
                                    <label for="sscmark">Enter SSC Marks:</label>
                                    <input type="text" class="form-control" id="sscmark" name="sscmark" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="Hmark">Enter HSC Marks:</label>
                                    <input type="text" class="form-control" id="Hmark" name="Hmark" required>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                                      
      
                                    </div>
                                </div>
                           </div>
        </form>
       <?php
        }
       
        elseif($year == "SY"){?>

<form method="POST"  enctype="multipart/form-data" >
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <h3>Enter the form data</h3>
                                  <div class="form-group">
                                    <label for="fmark">Enter First Sem Marks:</label>
                                    <input type="text" class="form-control" id="fmark" name="fmark" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="smark">Enter Second Sem Marks:</label>
                                    <input type="text" class="form-control" id="smark" name="smark" required>
                                  </div>
                                  <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit2">Submit</button>
                                      
      
                                    </div>
                                </div>
                           </div>
        </div>
       <?php
        }
       
         else{
            ?>
             <form method="POST"  enctype="multipart/form-data" >
            <div class="row register-form">
                                <div class="col-md-8">
                                    <h3>Enter the form data</h3>
                                  <div class="form-group">
                                    <label for="fmark">Enter First Sem Marks:</label>
                                    <input type="text" class="form-control" id="fmark" name="fmark" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="smark">Enter Second Sem Marks:</label>
                                    <input type="text" class="form-control" id="smark" name="smark" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tmark">Enter Third Sem Marks:</label>
                                    <input type="text" class="form-control" id="tmark" name="tmark" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="fomark">Enter Fourth Sem Marks:</label>
                                    <input type="text" class="form-control" id="fomark" name="fomark" required>
                                  </div>
                                  <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit3">Submit</button>
                                      
      
                                    </div>
                                </div>
                           </div>
         </div>
           <?php
         }         
         ?>
         </form>

       
        <!-- <div class="row">
            <div class="col-md-3 register-left">
                <p></p>
                 <h2>Welcome To</h2>
                 <h4>Student Registration</h4>

             </div>
             <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <h3 class="register-heading">Register</h3>
                        <form method="POST"  enctype="multipart/form-data">
                            <div class="row register-form">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Name as per aadhar" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="eno" name="eno" placeholder="Enter Enrollement No" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="bdate" name="bdate" placeholder="Enter Birth Date" required>
                                    </div>
                                    <div class="form-group">
                                     <h6>Select Gender</h6>
                                      <input type="radio" name="gender" value="male"> Male
                                      <input type="radio" name="gender" value="female"> Female
                                      <input type="radio" name="gender" value="other"> Other
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                    Upload Profile Photo
						            <input type="file" name="f1">
                                    </div>
                                    

                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="add" name="add" placeholder="Enter Address" required>
                                    </div>
                                
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="phno" name="phno" placeholder="Enter Phone No" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter age" required>
                                    </div>
                                    <div class="form-group">
                                     <h6>Select Year</h6>
                                      <input type="radio" name="year" value="FY"> FY
                                      <input type="radio" name="year" value="SY"> SY
                                      <input type="radio" name="year" value="TY"> TY
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                                    </div>
                                    
                                 
                                    <div class="col-md-12" >
                                           
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" checked />
                                        <label for="check"><span class="icon"></span>Keep me Signed in</label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                                        
                                        <u><a href="student_login.php" name="forgot_password" style="font-size:18px;color:blue">Log in</a></u>
      
                                    </div>
                                </div>
                                </div>
                             
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            </div> -->

    </div>
    
    <!--================Blog Area =================-->
    <footer>
        <!-- Footer Start>
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :Your address goes
                                        here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                                </div>
                                <!-- Form >
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  >
                <div class="row footer-wejed justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <!-- logo >
                            <div class="footer-logo mb-20">
                            <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>5000+</span>
                            <p>Talented Hunter</p>
                        </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="footer-tittle-bottom">
                                <span>451</span>
                                <p>Talented Hunter</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <!-- Footer Bottom Tittle >
                            <div class="footer-tittle-bottom">
                                <span>568</span>
                                <p>Talented Hunter</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
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
       
 if(isset($_POST['submit1'])){
  
    $query = "INSERT INTO `StuYear`(`eno`,`sscmark`,`Hmark`) VALUES('$eno','$_POST[sscmark]','$_POST[Hmark]')";

    $result = mysqli_query($conn, $query);
       echo "<script>alert('Data Added successfully');</script>";
 }
 
      

       
       if(isset($_POST['submit2'])){
        
          $query = "INSERT INTO `StuYear`(`eno`,`fmark`,`smark`) VALUES('$eno','$_POST[fmark]','$_POST[smark]')";
      
          $result = mysqli_query($conn, $query);
             echo "<script>alert('Data Added successfully');</script>";
       }
            
      
       
       if(isset($_POST['submit3'])){
        
          $query = "INSERT INTO `StuYear`(`eno`,`fmark`,`smark`,`tmark`,`fomark`) VALUES('$eno','$_POST[fmark]','$_POST[smark]','$_POST[tmark]','$_POST[fomark]')";
      
          $result = mysqli_query($conn, $query);
             echo "<script>alert('Data Added successfully');</script>";
       }
            
          ?>
        
</body>
</html>