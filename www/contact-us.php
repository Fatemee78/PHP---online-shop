<?php
session_start();
session_regenerate_id();

if(!isset($_SESSION["login_Authinticate"])){

    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:28:31 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
      $title = "contact_us";
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
        <h1 class="page-heading">Contact Us</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Contact Us</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- Contact us -->
<div class="inner-page">
  <div class="container">
    <div class="contact-wrap">
      <div class="title"> <span>We Are Here For Your Help</span>
        <h2>GET IN TOUCH FAST</h2>
        <p>Vestibulum at magna tellus. Vivamus sagittis nunc aliquet. Vivamin orci aliquam<br>
          eros vel saphicula. Donec eget ultricies ipsmconsequat.</p>
      </div>
      <div class="row"> 
        <!-- Contact Info -->
        
        <div class="contact-now">
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-home"></i></span>
              <div class="information"> <strong>Address:</strong>
                <p>8500 lorem, New Ispum, Dolor amet sit 12301</p>
              </div>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
              <div class="information"> <strong>Email Address:</strong>
                <p>investigate@your-site.com</p>
                <p>investigate@your-site.com</p>
              </div>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-phone"></i></span>
              <div class="information"> <strong>Phone No:</strong>
                <p>+12 345 67 09</p>
                <p>+12 345 67 09</p>
              </div>
            </div>
          </div>
          <!-- Contact Info --> 
        </div>
        <div class="col-md-4 column"> 
          <!-- Google Map -->
          <div class="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d193572.19492844533!2d-74.11808565615137!3d40.70556503857166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1481975053066" allowfullscreen></iframe>
          </div>
        </div>
        
        <!-- Contact form -->
        <div class="col-md-8 column">
          <div class="contact-form">
            <div id="message"></div>
            <form method="post" action="#" name="contactform" id="contactform">
              <div class="row">
                <div class="col-md-6">
                  <input name="name" type="text" id="name" placeholder="Full Name">
                </div>
                <div class="col-md-6">
                  <input type="text" name="phone" placeholder="Phone Number">
                </div>
                <div class="col-md-12">
                  <input name="email" type="text" id="email" placeholder="Email">
                </div>
                <div class="col-md-12">
                  <textarea rows="4" name="comments" id="comments" placeholder="Details"></textarea>
                </div>
                <div class="col-md-12">
                  <button title="" class="button" type="submit" id="submit">Submit Now</button>
                </div>
              </div>
            </form>
          </div>
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

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:28:31 GMT -->
</html>