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
    $title = "Shopping";
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
  <style>
      table,td,th{
        width:1000px;
        margin:auto;
        border: 2px solid black;
        background: white;
      }
      td,th{
        text-align: center;
      }
      form{
        width: 500px;
        margin: auto;
      }
      img{
        width: 50px 50px;
      }
      label{
        color: white;
        font-weight: bold;
      }
  </style>

</head>
<body>
<!-- Header start -->
<?php 
  include("header.php");
?>
<!-- Header end --> 

<!-- Revolution slider start -->

<!-- Revolution slider end --> 

<!--Search Bar start-->
<div class="form-group-inner">
  <div class="login-btn-inner">
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-9">
              <div class="login-horizental cancel-wp pull-left form-bc-ele">
                <input type="text" name="Search_text" id="Search_text" >
              </div>
          </div>
      </div>
      <div id="result"></div>
</div>
<!-- Search End --> 

<!-- Categories start -->
<div class="section catewrap">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Browse <span>Categories</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius, orci id facilisis egestas, neque purus sagittis arcu, nec maximus quam odio nec elit Pellentesque eget ipsum mattis</p>
    </div>
    <ul class="categoryList row">
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/01.png" alt="Cate Img" /> <span>Vehicles <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/02.png" alt="Cate Img" /> <span>Mobiles <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/03.png" alt="Cate Img" /> <span>Electronics <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/04.png" alt="Cate Img" /> <span>Furniture <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/05.png" alt="Cate Img" /> <span>Jobs <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/06.png" alt="Cate Img" /> <span>Real Estate <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/07.png" alt="Cate Img" /> <span>Services <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/08.png" alt="Cate Img" /> <span>Education <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/09.png" alt="Cate Img" /> <span>Pets <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/10.png" alt="Cate Img" /> <span>Fashion <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/11.png" alt="Cate Img" /> <span>Baby Products <i>(598)</i></span></a></li>
      <li class="col-md-2 col-sm-3 col-xs-6"><a href="listing.html"><img src="images/category/12.png" alt="Cate Img" /> <span>Sports <i>(598)</i></span></a></li>
    </ul>
  </div>
</div>
<!-- Categories ends --> 

<!-- Featured Ads start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Featured <span>Ads</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius, orci id facilisis egestas, neque purus sagittis arcu, nec maximus quam odio nec elit Pellentesque eget ipsum mattis</p>
    </div>
    <!-- title end -->
    
    <ul class="gridlist itemgrid">
      <li class="item">
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
      <li class="item">
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
      <li class="item">
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
      <li class="item">
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
      <li class="item">
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
      <li class="item">
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
      <li class="item">
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
      <li class="item">
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


<!-- Testimonials start -->

<!-- Testimonials End --> 

<!-- App Start -->

<!-- App End --> 

<!-- Ads By Cities start -->

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
<script>
      jQuery(document).ready(function() {
          $('#Search_text').keyup(function(){
            var txt = $(this) .val();
            if (txt !='') {
              console.log('#Search_text')
              $.ajax({
                url:"fetch.php",
                method:"post",
                data: {search:txt},
                dataType:"text",
                success:function(data) {
                  $('#result').html(data);
                }
              }); 
            }
            else {
              $('#result').html('');
              $.ajax({
                url:"fetch.php",
                method:"post",
                data: {search:txt},
                dataType:"text",
                success:function(data) {
                  $('#result').html(data);
                }
              }); 
            }
          });
        });
        
    



  </script>	
</body>

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/index3.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:25:05 GMT -->
</html>