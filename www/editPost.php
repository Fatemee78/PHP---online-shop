<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sharjeelanjum.com/html/post-and-buy/ad-post.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 11:28:08 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
      $title = "Edit_post";
      include_once("title.php");

      if(!isset($_GET["productId"])){
        header("location:allProduct.php?Err_redirect=1");
        die;
      }

      include("../lib/crud.php");

    $db = new CRUD();

    $title = $price = $description  = $category = $owner = "";
    $titleErr = $priceErr = $descriptionErr = $categoryErr  = $fileErr = $ownerErr="";

    
      $id = (int) $_GET['productId'];

      $result = $db->select_one("product","id='$id'");


    //   if($result){

    //     echo "done";
    //     die;
    //   }
     $title = $result["title"];
     $description = $result["description"];
     $price = $result["price"];
     $category = $result["category"];
    $owner = $result["owner"];

      

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

</head>
<body>
<?php
    
    if(isset($_POST['submit'])){
        // $title = $_POST['title'];
    
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
    
        if(!empty($title) && !empty($description) &&  !empty($owner) &&  !empty($price) &&  !empty($category) ){
          

            //function update 
            
            $data = sprintf("title='%s',description='%s', price='%s',category='%s',owner='%s' ",
            mysqli_real_escape_string($GLOBALS["DB"],$title),
            mysqli_real_escape_string($GLOBALS["DB"],$description),
            mysqli_real_escape_String($GLOBALS["DB"],$price),
            mysqli_real_escape_string($GLOBALS["DB"],$category),
            mysqli_real_escape_string($GLOBALS["DB"],$owner)
          );

        
            $update = $db->update("product",$data,"id='$id'");
            
            if($update){
            
                header("location:allProduct.php?save=1");
            }else{
            
                echo "Failed update";
                
            }
        }else{
        
        echo "Failed";
        
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
              
              <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                <!-- Ad Information -->
                <h5>Ad Information</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="formrow">
                      <input type="text" name="title" id="title" class="form-control" value="<?php echo $title;?>" placeholder="Ad Title">
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="formrow">
                      <input type="text" name="price" id="price" class="form-control" value="<?php echo $price; ?>" placeholder="Ad Price">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="formrow">
                      <input type="text" name="owner" id="owner" class="form-control" value="<?php echo $owner; ?>" placeholder="owner">
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="formrow">
                      <select class="form-control" name="category" id="category">
                        <option value="">Select Main Catgory</option>
                        <option value="books" <?php if($category == 'books'){ echo "selected";}?> >Books</option>
                        <option value="electronic_device" <?php if($category == 'electronic_device'){ echo "selected";}?>>Electronic Device</option>
                        <option value="dress" <?php if($category == 'dress'){ echo "selected";}?>>Dress</option>
                      </select>

                    </div>
                  </div>
                 
                
                  <div class="col-md-12">
                    <div class="formrow">
                      <textarea class="form-control" name="description" id="description" placeholder="Ad Details"><?php echo $description;?></textarea>
                    </div>
                  </div>
                </div>
                <br>
                <input type="submit" name="submit" class="btn" value="Edit">
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