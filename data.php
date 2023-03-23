<?php 
@ob_start();
session_start();
require("connection.php");

$success =  $_SESSION['success'];
echo "<script>alert('$success');</script>";
$eno = $_SESSION['eno'] ;

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

padding: 3%;
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
       
    </header>
    <!-- Hero Area Start>
    
    < Hero Area End -->
    <!--================Blog Area =================-->
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <p></p>
                 <h2>Welcome To</h2>
                 <h4>Student Registration</h4>

             </div>
             <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <h3 class="register-heading">Data Upload</h3>
                        <form method="POST"  enctype="multipart/form-data" name="form1">
                            <div class="row register-form">
                                <div class="col-md-6">
                                <div class="form-group">
                                Upload  Photo
						            <input type="file" name="f1" id="uploadfile" accept="image/png, image/gif, image/jpeg, image/jpg" required>
                                    </div>
                                    <div class="form-group">
                                Upload  sign
						            <input type="file" name="f2" id="uploadsign" accept="image/png, image/gif, image/jpeg, image/jpg" required >
                                    </div>
                                    <div class="form-group">
                                Upload Resume
						            <input type="file" name="f3" id="uploadresume" accept="application/pdf" required>
                                    </div>
                                    
                                    <div class="form-group">
                                Upload Sem1 Result:
                                <input name="upload" type="file" multiple="multiple" accept="application/pdf" required />
                                    </div>
                                    <div class="form-group">
                                Upload Sem2 Result:
                                <input name="upload1" type="file" multiple="multiple" accept="application/pdf" required />
                                    </div>

                                </div>
                                <div class="col-md-6">
                           
                                    <div class="form-group">
                                Upload Sem3 Result:
                                <input name="upload2" type="file" multiple="multiple" accept="application/pdf" required />
                                    </div>
                                    <div class="form-group">
                                Upload Sem4 Result:
                                <input name="upload3" type="file" multiple="multiple"accept="application/pdf" required />
                                    </div>
                                    <div class="form-group">
                                Upload Sem5 Result:
                                <input name="upload4" type="file" multiple="multiple" accept="application/pdf" required/>
                                    </div>
                                    <div class="form-group">
                                Upload Sem6 Result:
                                <input name="upload5" type="file" multiple="multiple" accept="application/pdf" required />
                                    </div>
                                

                   
                                    <div class="col-md-12" >
                                           
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" checked />
                                        <label for="check"><span class="icon"></span>Keep me Signed in</label>
                                    </div>
                                    <div class="form-group">
                                    <u><a href="academic.php" class="btn btn-primary" id="submit" name="psubmit">Previous</a></u>
                                        
                                        
                                         <button type="submit" class="btn btn-primary" id="nsubmit" name="nsubmit">Submit</button>
                                       
      
                                    </div>
                                </div>
                                </div>
                             
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            </div>

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

<!-- This jquery is to check whether imgae in selected or not -->


        <?php

        if(isset($_POST['nsubmit'])){

            if($_FILES['f1']['name']){
                move_uploaded_file($_FILES['f1']['tmp_name'], "photo/".$_FILES['f1']['name']);
                $photo="photo/".$_FILES['f1']['name'];
             }
             
             if($_FILES['f2']['name']){
                move_uploaded_file($_FILES['f2']['tmp_name'], "photo/".$_FILES['f2']['name']);
                $sign="photo/".$_FILES['f2']['name'];
             }
             
             if($_FILES['f3']['name']){
                move_uploaded_file($_FILES['f3']['tmp_name'], "resume/".$_FILES['f3']['name']);
                $resume="resume/".$_FILES['f3']['name'];
             } 
             if($_FILES['upload']['name']){
                move_uploaded_file($_FILES['upload']['tmp_name'], "result/".$_FILES['upload']['name']);
                $result="result/".$_FILES['upload']['name'];
             } 
             if($_FILES['upload1']['name']){
                move_uploaded_file($_FILES['upload1']['tmp_name'], "result/".$_FILES['upload1']['name']);
                $result1="result/".$_FILES['upload1']['name'];
             } 
             if($_FILES['upload2']['name']){
                move_uploaded_file($_FILES['upload2']['tmp_name'], "result/".$_FILES['upload2']['name']);
                $result2="result/".$_FILES['upload2']['name'];
             } 
             if($_FILES['upload3']['name']){
                move_uploaded_file($_FILES['upload3']['tmp_name'], "result/".$_FILES['upload3']['name']);
                $result3="result/".$_FILES['upload3']['name'];
             } 
             if($_FILES['upload4']['name']){
                move_uploaded_file($_FILES['upload4']['tmp_name'], "result/".$_FILES['upload4']['name']);
                $result4="result/".$_FILES['upload4']['name'];
             } 
             if($_FILES['upload5']['name']){
                move_uploaded_file($_FILES['upload5']['tmp_name'], "result/".$_FILES['upload5']['name']);
                $result5="result/".$_FILES['upload5']['name'];
             }  

    

   $store= "INSERT INTO `sdata`(`enroll`, `photo`, `sign`, `result`, `result1`,`result2`,`result3`,`result4`,`result5`,`resume`) VALUES ('$eno','$photo','$sign','$result','$result1','$result2','$result3','$result4','$result5','$resume')"  ; 
  
  $result = mysqli_query($conn, $store);
    
     echo "<script>alert('data submited successfully');</script>";
    
  
}

        ?>

</body>
</html>