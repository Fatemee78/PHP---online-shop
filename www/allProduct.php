<?php
  session_start();
  session_regenerate_id();

  if(!isset($_SESSION["login_Authinticate"])){

      header("location:login.php");
  }

    include("../lib/crud.php");

    $db = new CRUD();

    if(isset($_GET['deleteID'])){
      
      $id = $_GET['deleteID'];
      $url = $_GET['url'];

      $file_name = 'user_pic/'.$url;
      if(unlink($file_name)){}

      $db->delete('product'," id = '$id' ");

      header("location: allProduct.php");
    }
    
    $all_products="";

    //array for filtring

    // $fields = array('owner','category');

    // $conditions =array();

    // if(isset($_POST["submit"])){

    //     foreach($fields as $field){

    //         if(isset($_POST[$field]) && $_POST[$field] != ''){

    //             $conditions[]= $field;
    //         }

    //     }

    //     $sql= "select * from product where ";

    //     if(count($conditions)>  0 ){

    //         $sql .=implode("and", $conditions);

    //         echo $sql;
    //         die;

    //         $rows = $db->select($sql);

    //     }
    // }

 
    $rows = $db->select("product","*","");

    foreach($rows as $re){
        $id = $re["id"];
        $title = $re["title"];
        $description = $re["description"];
        $price = $re["price"];
        $category = $re["category"];
        $photo = $re["image"];
        $owner = $re["owner"];



        $all_products .= "<li>
                    <div class='row'>
                        <div class='col-md-2 col-sm-4'>
                        <div class='adimg'><img src='user_pic/$photo' alt='Ad Name'></div>
                        </div>
                        <div class='col-md-10 col-sm-8'>
                        <div class='jobinfo'>
                            <div class='row'>
                            <div class='col-md-8 col-sm-7'>
                                <h3><a href='#.'>$title </a></h3>
                                <div class='cateName'> <a href='#.'>$title</a> <i class='fa fa-angle-double-right' aria-hidden='true'></i> <a href='#.'>$category</a> </div>
                                <div class='location'><i class='fa fa-user' aria-hidden='true'></i> <span>$owner</span></div>
                                <div class='clearfix'></div>
                                <p>$description</p>
                                <div class='listbtn'><a href='#.'>View Details</a></div>
                                <div class='adverify'><a href=' allProduct.php?deleteID=$id&url=$photo'><i class='fa fa-trash' aria-hidden='true'></i> Delete</a></div>
                                <div class='adverify'><a href='editPost.php?productId=$id'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Edit</div>

                            </div>
                            <div class='col-md-4 col-sm-5 text-right'>
                                <div class='adprice'>$$price</div>
                                <div class='adverify'><i class='fa fa-check-square-o' aria-hidden='true'></i> Verified Seller</div>
                                
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </li>";

       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
    $title = "All_Product";
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
    <div class="searchbar searchblack">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12">
        <input type="text" class="form-control" placeholder="What are you looking for" />
      </div>
      <div class="col-md-3 col-sm-5">
        <select class="form-control">
          <option>Select Categories</option>
          <option>Books</option>
          <option>Cars</option>
          <option>Bobiles</option>

        </select>
      </div>
      <div class="col-md-2 col-sm-4">
        <select class="form-control">
          <option>Select owner</option>
          <option>Fatemeh Rezwani</option>
          <option>Zahra Sobhani</option>
        </select>
      </div>
      <div class="col-md-2 col-sm-3">
        <input type="submit" class="btn" value="Search Ad">
      </div>
    </div>
  </div>
</div>
    <div class="container">       
          <div class="relatedJobs">
            <h3>Related Ads</h3>
            <h4>All products available: </h4>
            <ul class="searchList">
              <!-- ad start -->
              <?php                
                  //test select function
                  echo $all_products;
              ?>
              <!-- ad end -->
            </ul>
            
          </div>
          
    </div>

    <!-- footer start -->
    <?php 
    include("footer.php");
    ?>
    <!-- footer end --> 

</body>
</html>