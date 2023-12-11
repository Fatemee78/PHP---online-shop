<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-1.11.1.js"></script>
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
	<br>
	<br>
	<br>
	<br>
	<br>
<div class="form-group-inner">
  <div class="login-btn-inner">
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-9">
              <div class="login-horizental cancel-wp pull-left form-bc-ele">
                <input type="text" name="Search_text" id="Search_text">
              </div>
          </div>
      </div>
      <div id="result"></div>
</div>
</div>

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
</html>