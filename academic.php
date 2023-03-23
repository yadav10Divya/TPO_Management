<?php 
@ob_start();
session_start();
require("connection.php");
$success =  $_SESSION['success'];
echo "<script>alert('$success');</script>";
$eno = $_SESSION['eno'] ;
//echo $eno;

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
                        
                        <h3 class="register-heading">Academic Information</h3>
                        <form method="POST"  enctype="multipart/form-data" name="form1">
                            <div class="row register-form">
                                <div class="col-md-6">
                               select branch:<br>
                                <input type="radio"  name="branch"  value="CO" required/> CO
                                <input type="radio"  name="branch"  value="EJ"/> EJ
                             <input type="radio"  name="branch"  value="ME"/>  ME 
                             <input type="radio"  name="branch"  value="EE"/>   EE 
                               <input type="radio"  name="branch" value="CE"/> CE
                              <input type="radio"  name="branch"  value="ENTC"/> ENTC 



                                    <div class="form-group">
                                    <input type="text" class="form-control"  id="code" name="code" placeholder="Enter code" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="year" name="year" placeholder="Enter year" required>
                                    </div>
                                    <div class="form-group">
                                    Select shift<br>
                                    <select name="shift" id="shift">
                                     <option value="" >Select shift</option>
                                      <option value="1">Regular</option>
                                      <option value="2">shift</option>
                                      
                                    </select>
                                    <br><br>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="avg" name="tenth" placeholder="Enter 10th Percentage" required>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="cyear" name="FY" placeholder="Enter FY Percentage" style="margin-bottom:15px;" required>
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="addyear" name="SY" placeholder="Enter SY Percentage" required>
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="ayear" name="ayear" placeholder="Enter Academic Year" required>
                                    </div>
                                
                                   

                                    
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="backlogs" name="backlogs" placeholder="Number of backlogs" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="liveBack" name="liveBack" placeholder="Live backlogs" required>
                                    </div>

                                    <div class="form-group">
                                    Select Current Semester<br>  
                                    <select name="sem" id="sem">
                                     <option value="" >Select sem</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      
                                    </select>
                                    </div>
                                      

                                </div>
                                <div class="col-md-6">
                               
                                  
                                  

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="pyear" name="pyear" placeholder="Enter Year of Passing" required>
                                    </div>
                                    Select Type of Admission :<br>

<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" required/>Regular

<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" />DSY
<br>


         <label for="sem1" id="a">Enter Sem1 Marks:</label>
          <input type="text" class="form-control ifYes" id="sem1" name="sem1" >
        
          <label for="sem2" id="b">Enter Sem2 Marks:</label>
          <input type="text" class="form-control ifYes" id="sem2" name="sem2" >
       
          <label for="sem3">Enter Sem3 Marks:</label>
          <input type="text" class="form-control " id="sem3" name="sem3" required>
   
          <label for="sem4">Enter Sem4 Marks:</label>
          <input type="text" class="form-control " id="sem4" name="sem4" required>
   
          <label for="sem5">Enter Sem5 Marks:</label>
          <input type="text" class="form-control " id="sem5" name="sem5" required>
       
          <label for="sem6">Enter Sem6 Marks:</label>
          <input type="text" class="form-control" id="sem6" name="sem6" required>



                   
                                    <div class="col-md-12" >
                                           
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" checked />
                                        <label for="check"><span class="icon"></span>Keep me Signed in</label>
                                    </div>
                                    <div class="form-group">
                                      
                                        <u><a href="Stu_Register.php" class="btn btn-primary" id="submit" name="psubmit">Previous</a></u>
                                        
                                        <button type="submit" class="btn btn-primary" id="nsubmit" name="nsubmit">Next</button>
                                        <!-- <u><a hre class="btn btn-primary" id="submit" name="nsubmit">Next</a></u> -->
      
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

<!-- This jquery is to check whether imgae in selected or not -->
<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('noCheck').checked) {
        document.getElementById('sem1').style.display = 'none';
        document.getElementById('sem2').style.display = 'none';
        document.getElementById('b').style.display = 'none';
        document.getElementById('a').style.display = 'none';
        
    } 
}


</script>
<?php

    
        if(isset($_POST['nsubmit'])){
             $query = "INSERT INTO `academic`(`enroll`, `branch`, `code`, `year`, `shift`, `tenth`, `FY`, `sem`, `ayear`, `SY`, `backlogs`, `liveBack`, `pyear`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`) VALUES ('$eno','$_POST[branch]','$_POST[code]','$_POST[year]','$_POST[shift]','$_POST[tenth]','$_POST[FY]','$_POST[sem]','$_POST[ayear]','$_POST[SY]','$_POST[backlogs]','$_POST[liveBack]','$_POST[pyear]','$_POST[sem1]','$_POST[sem2]','$_POST[sem3]','$_POST[sem4]','$_POST[sem5]','$_POST[sem6]')"  ;
            $result = mysqli_query($conn, $query);  
            // echo "<script>alert('data successfully');</script>";
            header("location: data.php");
        }

        ?>

</body>
</html>