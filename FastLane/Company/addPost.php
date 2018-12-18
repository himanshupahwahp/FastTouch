<!DOCTYPE html>
<html>
<head>
  <title>Post Ad</title>
	<meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <?php include 'header.php';?>
  <div class="container-login100">
  <div class="container margin-top-3" >
      <div class="row">
    <div class="col-sm-12 center">
    				<span  id="welcomeUser" class="tittle">

    				</span>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-6 login-form">

<form name="adForm" action="" method="POST" enctype="multipart/form-data">

  <div class="row form-tittle boxTittle">
    <div class="col-sm-12 center">
    Post your Ad
  </div>
  </div>
  <div class="col-sm-12">
  Title:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="title" id="title" class="form-control"><br>
</div>


<div class="col-sm-12 padding-10" style="display: none;">
<input type="text" name="userName" id="userName" class="form-control"><br>
</div>

  <div class="col-sm-12">Category:<br></div>
  <div class="col-sm-12 padding-10">
  <select class="form-control" name="category">
    <option value="Real Estate">RealEstate</option>
    <option value="Jobs">Jobs</option>
    <option value="Electronics">Electronics</option>
    <option value="Services">Services</option>
    <option value="Computer and Accessories">Computer and Accessories</option>
    <option value="Others">Others</option>
  </select><br>
</div>

<div class="col-sm-12">Description:<br></div>
<div class="col-sm-12">
       <textarea class="form-control " rows="5" name="description"></textarea>
</div>
<div class="col-sm-12 padding-10">
      <input type="file" name="image" id="image" />
      <br />
</div>
<div class="row">
<div class="col-sm-4"></div>

<div class="col-sm-4 padding-10">
  <input type="submit" value="Post Ad" name="SubmitButton" id="SubmitButton" style="width:100%;" class="btn btn-primary">
</div>


<div class="col-sm-4">
</div>
</div>
</form>
<div class="col-sm-3">
</div>
</div>
</div>
</div>
</div>
<script>
document.getElementById("userName").value=sessionStorage.getItem("userId");
</script>


<?php include './../PHP/insert_post.php';?>
</body>
</html>
<script>
$(document).ready(function(){
     $('#SubmitButton').click(function(){
          var image_name = $('#image').val();
          if(image_name == '')
          {
               alert("Please Select Image");
               return false;
          }
          else
          {
               var extension = $('#image').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
               {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
               }
          }
     });
});
</script>
