<?php
session_start();
session_regenerate_id();

if(!isset($_SESSION["login_Authinticate"])){

    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/index3.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:24:31 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
    $title = "Home";
    include("title.php");
  ?>
  <!-- Fav Icon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Slider -->
  <link href="js/revolution-slider/css/settings.css" rel="stylesheet">

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
  include("header.php");
?>
<!-- Header end --> 

<!-- Revolution slider start -->
<div class="tp-banner-container">
  <div class="tp-banner" >
    <ul>
      <!--Slide-->
      <li data-slotamount="7" data-transition="3dcurtain-vertical" data-masterspeed="1000" data-saveperformance="on"> <img alt="Your alt text" src="images/slider/dummy.png" data-lazyload="images/slider/banner.jpg">
        <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="100" data-speed="600" data-start="1600">World's Largest</div>
        <div class="caption lfl large-title tp-resizeme slidertext2" data-x="left" data-y="140" data-speed="600" data-start="2200">Classifieds Site</div>
        <div class="caption lfb large-title tp-resizeme sliderpara" data-x="left" data-y="220" data-speed="600" data-start="2800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />
          Lorem Ipsum has been the industry's standard dummy text ever since.</div>
        <div class="caption lfl large-title tp-resizeme slidertext5" data-x="left" data-y="280" data-speed="600" data-start="3500"><a href="#.">Contact Us</a></div>
      </li>
      <!--Slide end--> 
      <!--Slide-->
      <li data-slotamount="7" data-transition="3dcurtain-vertical" data-masterspeed="1000" data-saveperformance="on"> <img alt="Your alt text" src="images/slider/dummy.png" data-lazyload="images/slider/banner2.jpg">
        <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="100" data-speed="600" data-start="1600">Start Your Own</div>
        <div class="caption lfl large-title tp-resizeme slidertext2" data-x="left" data-y="140" data-speed="600" data-start="2200">Classifieds Business</div>
        <div class="caption lfb large-title tp-resizeme sliderpara" data-x="left" data-y="220" data-speed="600" data-start="2800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />
          Lorem Ipsum has been the industry's standard dummy text ever since.</div>
        <div class="caption lfl large-title tp-resizeme slidertext5" data-x="left" data-y="280" data-speed="600" data-start="3500"><a href="#.">Buy Now</a></div>
      </li>
      <!--Slide end-->
      
    </ul>
  </div>
</div>
<!-- Revolution slider end --> 

<!--Search Bar start-->
<div class="searchbar searchblack">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12">
        <input type="text" class="form-control" placeholder="What are you looking for" />
      </div>
      <div class="col-md-3 col-sm-5">
        <select class="form-control">
          <option>Select Categories</option>
          <option>Marketing</option>
          <option>Teaching & Education </option>
        </select>
      </div>
      <div class="col-md-2 col-sm-4">
        <select class="form-control">
          <option>Select City</option>
          <option>New York</option>
          <option>San Joes</option>
        </select>
      </div>
      <div class="col-md-2 col-sm-3">
        <input type="submit" class="btn" value="Search Ad">
      </div>
    </div>
  </div>
</div>
<!-- Search End --> 

<!-- Categories start -->

<!-- Categories ends --> 

<!-- Featured Ads start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    
    <!-- title end -->
    
   
  </div>
</div>
<!-- Featured Ads end --> 

<!-- How it Works start -->
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
<!-- How it Works Ends --> 

<!-- Latest Ads start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Latest <span>Ads</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius, orci id facilisis egestas, neque purus sagittis arcu, nec maximus quam odio nec elit Pellentesque eget ipsum mattis</p>
    </div>
    <!-- title end -->
    
    <ul class="row gridlist">
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/01.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Canon SX Powershot A Great D-SLR</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/02.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Smasung Glaxy Phone</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/03.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">BMW F20 1 Series Hatchback 5-door</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/04.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Labrador male for stud/matting</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/01.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Canon SX Powershot A Great D-SLR</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/02.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Smasung Glaxy Phone</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/03.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">BMW F20 1 Series Hatchback 5-door</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/04.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Labrador male for stud/matting</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/01.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Canon SX Powershot A Great D-SLR</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/02.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Smasung Glaxy Phone</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/03.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">BMW F20 1 Series Hatchback 5-door</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="adimg"><a href="detail.html"><img src="images/ads/04.jpg" alt=""></a></div>
        <div class="innerad">
          <h3><a href="detail.html">Labrador male for stud/matting</a></h3>
          <div class="row location">
            <div class="col-md-6"><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</div>
            <div class="col-md-6"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:49 pm</div>
          </div>
          <div class="price">$206.90</div>
        </div>
      </li>
    </ul>
    <div class="viewallbtn"><a href="listing.html">View All Latest Ads</a></div>
    <div class="wideBanner margintop40"><img src="images/google-ad-wide.jpg" alt=""></div>
  </div>
</div>
<!-- Latest Ads end -->

<div class="hometagline">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius, orci id facilisis egestas, neque purus sagittis arcu.</h5>
      </div>
      <div class="col-md-4"><a href="#.">Post your Ad Now</a></div>
    </div>
  </div>
</div>

<!-- Testimonials start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Happy <span>Customers</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius, orci id facilisis egestas, neque purus sagittis arcu, nec maximus quam odio nec elit Pellentesque eget ipsum mattis.</p>
    </div>
    <!-- title end -->
    
    <ul class="testimonialsList">
      <li>
        <div class="testinner">
          <div class="testimg"><img src="images/coment-avatar-1.jpg" alt=""></div>
          <div class="clientname">Garry Miller Jr (Tutor)</div>
          <div class="clientinfo">London, United Kingdom</div>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        </div>
      </li>
      <li>
        <div class="testinner">
          <div class="testimg"><img src="images/coment-avatar-2.jpg" alt=""></div>
          <div class="clientname">David Jackson (Student)</div>
          <div class="clientinfo">London, United Kingdom</div>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- Testimonials End --> 

<!-- App Start -->
<div class="appwraper">
  <div class="container"> 
    
    <!--app info Start-->
    <div class="titleTop">
      <h3>Download Our App</h3>
    </div>
    <div class="subtitle2">A world market in your hand</div>
    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
    <div class="appbtn"> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Download From Play Store"><i class="fa fa-android" aria-hidden="true"></i> Download</a> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Download From App Store"><i class="fa fa-apple" aria-hidden="true"></i> Download</a> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Download From Windows Store"><i class="fa fa-windows" aria-hidden="true"></i> Download</a> </div>
    <!--app info end--> 
    
  </div>
</div>
<!-- App End --> 

<!-- Ads By Cities start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Ads By <span>Cities</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius, orci id facilisis egestas, neque purus sagittis arcu, nec maximus quam odio nec elit Pellentesque eget ipsum mattis</p>
    </div>
    <!-- title end -->
    <div class="topsearchwrap">
      <ul class="row catelist">
        <li class="col-md-3 col-sm-6"><a href="#">London <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">New York <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Atlanta <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Andalusia <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Anchorage <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Fairbanks <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Haines <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Flagstaff <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Prescott <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Arkadelphia <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Batesville <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Camden <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Forrest City <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Hot Springs <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Little Rock <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Alameda <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Arcadia <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Barstow <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Daly City <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Downey <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Huntington Beach <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Laguna Beach <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Modesto <span>(96 Teeutors)</span></a></li>
        <li class="col-md-3 col-sm-6"><a href="#">Rancho Cucamonga <span>(96 Teeutors)</span></a></li>
      </ul>
    </div>
    <div class="wideBanner margintop40"><img src="images/google-ad-wide.jpg" alt=""></div>
  </div>
</div>
<!-- Ads By Cities ends --> 

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

<!-- Revolution Slider --> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- map with geo locations --> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/index3.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:25:05 GMT -->
</html>