<?php
session_start();
session_regenerate_id();

if(!isset($_SESSION["login_Authinticate"])){

    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/about-us.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:25:05 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
      $title = "about_us";
      include("title.php");
  ?>
    <!-- Fav Icon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Owl carousel -->
  <link href="css/owl.carousel.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">

  <!-- Custom Style -->
  <link href="css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<!-- Header start -->
<?php 
  include_once("header.php");
?>
<!-- Header end --> 

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">About Us</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>About Us</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="about-wraper"> 
  <!-- About -->
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col-md-7">
          <h2>Our Perfect Platform</h2>
          <p>Doctus omnesque duo ne, cu vel offendit erroribus. Laudem hendrerit pro ex, cum postea delectus ad. Te pro feugiat perpetua tractatos. Nam movet omnes id, usu te meis corpora. Augue doming quaestio vix at. Sumo duis ea sed, ut vix euismod lobortis prodesset, everti necessitatibus mei cu.<br>
            <br>
            Nam ea eripuit assueverit, invenire delicatissimi ad pro, an dicam principes duo. Paulo prodesset duo ad. Duo eu summo verear. Natum gubergren definitionem id usu, graeco cetero ius ut.<br>
            <br>
            Unum postea sit an, iudico invenire expetenda ei sea, atqui fierent sed ut. Ex pri numquam indoctum suavitate, sed id movet mentitum consequat, cum et amet ipsum dolor. Unum postea sit an, iudico invenire expetenda ei sea, atqui fierent sed ut.</p>
        </div>
        <div class="col-md-5">
          <div class="postimg"><img src="images/about-us-img1.jpg" alt="your alt text" /></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Process -->
  <div class="section whitebg howitwrap">
    <div class="container">
      <ul class="howlist row">
        <!--step 1-->
        <li class="col-md-4 col-sm-4">
          <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i></div>
          <h4>Create a Free Account</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
        </li>
        <!--step 1 end--> 
        
        <!--step 2-->
        <li class="col-md-4 col-sm-4">
          <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
          <h4>Post your Free Ad</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
        </li>
        <!--step 2 end--> 
        
        <!--step 3-->
        <li class="col-md-4 col-sm-4">
          <div class="iconcircle"><i class="fa fa-file-text" aria-hidden="true"></i></div>
          <h4>Sold or Buy</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
        </li>
        <!--step 3 end-->
      </ul>
    </div>
  </div>
  
  <!-- Text -->
  <div class="textrow section">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="postimg"><img src="images/about-us-img2.jpg" alt="your alt text" /></div>
        </div>
        <div class="col-md-7">
          <h2>Our Expertise</h2>
          <p>Doctus omnesque duo ne, cu vel offendit erroribus. Laudem hendrerit pro ex, cum postea delectus ad. Te pro feugiat perpetua tractatos. Nam movet omnes id, usu te meis corpora. Augue doming quaestio vix at. Sumo duis ea sed, ut vix euismod lobortis prodesset, everti necessitatibus mei cu.<br>
            <br>
            Nam ea eripuit assueverit, invenire delicatissimi ad pro, an dicam principes duo. Paulo prodesset duo ad. Duo eu summo verear. Natum gubergren definitionem id usu, graeco cetero ius ut.</p>
          <ul class="orderlist">
            <li>Mauris convallis felis</li>
            <li>Praesent vulputate diam</li>
            <li>Vestibulum nec dui</li>
            <li>Curabitur facilisis</li>
            <li>Donec euismod urna</li>
            <li>Mauris convallis felis</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<?php 
  include_once("footer.php");
?>
<!--Footer end--> 

<!--Copyright-->
<div class="copyright">
  <div class="container">
    <div class="bttxt">Copyright &copy; 2017 Your Company Name. All Rights Reserved. Design by: <a href="http://graphicriver.net/user/ecreativesol" target="_blank">eCreativeSolutions</a></div>
  </div>
</div>

<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/about-us.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:26:00 GMT -->
</html>