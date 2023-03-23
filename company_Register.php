<?php 
@ob_start();
session_start();
require("connection.php");
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
background: -webkit-linear-gradient(left, #f13070, #ae7185);
margin-bottom: 10%;
margin-top: 5%;
padding: 3%;
}
.register-left{
text-align: center;
color: #fff;
margin-top: 4%;
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
margin-top: 8%;
margin-bottom: -15%;
color: #495057;
}
.container {
    max-width: 895px;
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
        <!-- Header Start >
       
        <Header End -->
    </header>
    <!-- Hero Area Start>
    
    <Hero Area End -->
    <!--================Blog Area =================-->
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <p></p>
                 <h2>Welcome To</h2>
                 <h4>Company Registration</h4>

             </div>
             <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <h3 class="register-heading">Register</h3>
                        <form method="POST">
                        <div class="row register-form">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="username" placeholder="Enter Username" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                                    <button type="button" onclick="myFunction()" style="border:none;float:right;margin-top:-30px;"> <img src="show.png" alt="" height="13px" width="18px"> </button>
                                </div>
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" checked />
                                        <label for="check"><span class="icon"></span>Keep me Signed in</label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                                        
                                 <u><a href="TPO_Login.php" name="forgot_password" style="font-size:18px;color:blue">Log in</a></u>
      
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            
                        </form>

                    </div>
                </div>

            </div>
            </div>

    </div>
    <!--section class="blog_area section-padding">
       
    </section-->
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
        <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

        <?php
        if(isset($_POST['submit'])){
        $query = "INSERT INTO `CompanyRegister`(`name`, `username`,`password`) VALUES('$_POST[name]','$_POST[username]','$_POST[password]')";

        $result = mysqli_query($conn, $query);
        // header("location: cother.php");
        echo "<script>alert('Registration successfully');</script>";

        }

        ?>

</body>
</html>