<?php
session_start();


// echo session_id()."<br>";
// echo session_name()."<br>";
// echo session_status()."<br>";
if(isset($_POST["submit"])){
  // echo $_COOKIE["email"];
  $uname = $_POST["email"];
  $password = $_POST["password"];

  if($uname == "azadeh@gmail.com" && $password == "123"){
      if(isset($_POST["remember"])){
  
        setcookie("email",$uname,time()+3600);
        setcookie("password",$password,time()+3600);
      
        $handle = fopen('counter.txt', 'r+') or die("cannot open file.....!");
        flock($handle, LOCK_EX) or die("cannnot exclusive..................!");
        $str=fgets($handle, 4000);
        $str = rtrim($str , '/n');
        $counter = $str+1;
        rewind($handle);
        fputs($handle, $counter);
        fclose($handle);

        $_SESSION['login_Authinticate'] = "successfully authinticated...!";
      }

      else{

        setcookie("email",$uname,time()-3600);
        setcookie("password",$password,time()-3600);
      
      }

      header("location: index.php");

  }

  if($uname != "azadeh@gmail.com" && $password != "123"){
    
    header("location: index.php");
  }else{
    echo "<h1 style='color: red'>username or password is not set...!</h1>";
    die;
  }

}
    

if(isset($_GET["logOut"])){
  $_SESSION = array();
  session_unset();
  session_destroy();
  // $_SESSION = [];
  }
  
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:28:02 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
      $title = "log_in";
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
        <h1 class="page-heading">Login</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Login</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="userccount">
          <h5>User Login</h5>
          <!-- login form -->
          <div class="formpanel">
            <form action="login.php" method="post">
              <div class="formrow">
                <input type="text" class="form-control" name="email" placeholder="email">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="checkbox login-checkbox">
                  <label>
                    <input type="checkbox" <?php if(isset($_COOKIE["email"])){ echo "checked='checked'"; }?> class="i-checks" name="remember"> Remember me </label>
                  <p class="help-block small">(if this is a private computer)</p>
              </div>
              <input type="submit" class="btn" name="submit" value="Login">
            </form>
          </div>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="#.">Register Here</a></div>
          <!-- sign up form end-->
          
          <div class="socialLogin">
            <h5>Login Or Register with Social</h5>
            <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
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



<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:28:02 GMT -->
</html>