<?php
session_start();
session_regenerate_id();

if(!isset($_SESSION["login_Authinticate"])){
  if(!isset( $_SESSION['login_Authinticate'])){
    header("location:login.php");
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/ad-post.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:28:08 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
      $title = "add_post";
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
  <?php 

    //include crude
    include("../lib/crud.php");

    $db = new CRUD();



  //variables
    $title = $price = $description  = $category = $owner = "";
    
    $titleErr = $priceErr = $descriptionErr = $categoryErr  = $fileErr = $ownerErr="";

    if(isset($_POST['submit'])){

      if(empty($_POST['title'])){
        $titleErr = "title can not be empty...........!";
      }else{
          $title = cleanData($_POST['title']);
      } 
      if(empty($_POST['owner'])){
        $ownerErr = "";
      }else{
          $owner = cleanData($_POST['owner']);
      }
      if(empty($_POST['category'])){
        $categoryErr = "category can not be empty...........!";
      } else {
          $category = cleanData($_POST['category']);
      } 

      if(empty($_POST['description'])){
        $descriptionErr = "description can not be empty...........!";
     } else {
       $description = cleanData($_POST['description']);
     }

      if(empty($_POST['price'])){
         $priceErr = "price can not be empty...........!";
      } else {
        $price = cleanData($_POST['price']);
      }


    // var_dump($_FILES);
    
    //photo name
    $photoName = $_FILES["photo"] ["name"];

    //path of picture to save
    $file_path = "user_pic/";

    //source
    $source = $_FILES["photo"] ["tmp_name"];

    //type of picture
	  $photoType = $_FILES["photo"]["type"];

	  $allowed_extension = 					
                          array(
                            "png",
                            "jpg",
                            "JPG",
                            "PNG",
                            "jpeg"
                          );
	
		$extension = strtolower(PATHINFO($photoName ,PATHINFO_EXTENSION));
		
		
		if(!in_array($extension, $allowed_extension)){
		
			$fileErr = "Unfortunatly the type file is not allowed!";
			
		}
		else{
			
			$fulldate = date("Y_m_d h_i_s");
			$photoName = "pic _ ".$fulldate.".".$extension;
			
      move_uploaded_file($source, $file_path.$photoName);
	
    }
    
    if(empty($titleErr) && empty($priceErr) && empty($descriptionErr) && empty($categoryErr) && empty($fileErr)){
      // test function insert
     $insert = $db->insert("product", "`title`, `description`, `price`, `image`, `category`, `owner`",
     " '$title', '$description', '$price', '$photoName', '$category', '$owner'");

     header("location:allProduct.php?save=1");
 

    }else{

      echo "unfortunatly faild...........!";   

    }

     
}

function cleanData($data){

  $data = trim($data);
  $data = htmlSpecialChars($data);
  $data = stripslashes($data);
 
  return $data;
}
  ?>

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
          <h1 class="page-heading">Post Product</h1>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="breadCrumb"><a href="index.php">Home</a> / <span>Post Product</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->

  <div class="listpgWraper">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="userccount">
            <div class="formpanel"> 
               <?php
                  if(isset($_GET['save1'])){
                  
                  echo "<h1 class='' style='color:green;font-size:20px;'> Successfully Saved Data To Database;</h1>";
                  
                  }if(isset($_GET['save'])){
                  
                  echo "<h1 class='' style='color:green;font-size:20px;'> Successfully File uploaded</h1>";
                  
                  }
                  
                ?>
                  
              
              <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                <!-- Ad Information -->
                <h5>Ad Information</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="formrow">
                      <input type="text" name="title" id="title" class="form-control" value="<?php echo $title;?>" placeholder="Ad Title">
                      <label class="login2 pull-right pull-right-pro" style="color:red;"><?php echo $titleErr?></label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="formrow">
                      <input type="text" name="price" id="price" class="form-control" value="<?php echo $price; ?>" placeholder="Ad Price">
                      <label class="login2 pull-right pull-right-pro" style="color:red;"><?php echo $priceErr?></label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="formrow">
                      <input type="text" name="owner" id="owner" class="form-control" value="<?php echo $owner; ?>" placeholder="owner">
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="formrow">
                      <select class="form-control" name="itemType" id="itemType">
                        <option  value="<?php echo $itemType ?>">Owner</option>
                        <option>New</option>
                        <option>Used</option>
                      </select>

                    </div>
                  </div> -->
                  <!-- <div class="col-md-6">
                    <div class="formrow">
                      <select class="form-control" name="propertyType" id="propertyType">
                        <option  value="<?php echo $propertyType ?>">Property type</option>
                        <option>For Rent</option>
                        <option>For Sale</option>
                        <option>For Buy</option>
                      </select>

                    </div>
                  </div> -->
                  <div class="col-md-6">
                    <div class="formrow">
                      <select class="form-control" name="category" id="category">
                        <option >Select Main Catgory</option>
                        <option value="books">Books</option>
                        <option value="electronic_device">Electronic Device</option>
                        <option value="dress">Dress</option>
                      </select>
                      <label class="login2 pull-right pull-right-pro" style="color:red;"><?php echo $categoryErr?></label>

                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="formrow">
                      <div class="uploadphotobx"> <i class="fa fa-upload" aria-hidden="true"></i>
                        <h4>Upload your photo</h4>
                        <p>It must be a head-shot photo</p>
                        <label class="uploadBox">Click here to Upload
                          <input type="file" name="photo" id="photo">
                        </label>
                      </div>
                   
                    </div>
                  </div>
                 
                  <div class="col-md-12">
                    <div class="formrow">
                      <textarea class="form-control" name="description" id="description" placeholder="Ad Details"><?php echo $description;?></textarea>
                      <label class="login2 pull-right pull-right-pro" style="color:red;"><?php echo $descriptionErr?></label>
                    </div>
                  </div>
                </div>
                <br>
                <input type="submit" name="submit" class="btn" value="Post An Ad">
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
 

  <!-- Bootstrap's JavaScript --> 
  <script src="js/jquery-2.1.4.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 

  <!-- Owl carousel --> 
  <script src="js/owl.carousel.js"></script> 

  <!-- Custom js --> 
  <script src="js/script.js"></script>
</body>

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/ad-post.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:28:08 GMT -->
</html>