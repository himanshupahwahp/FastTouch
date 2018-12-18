<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style="background-color: Black">
  <?php session_start(); ?>
  <?php include 'header.php';?>
  <div class="container-login100">
  <div class="container-fluid margin-top-3" >
      <div class="row">
    <div class="col-sm-12 center">
    				<span  id="welcomeUser" class="tittle">

    				</span>
    </div>
  </div>

  <div class="col-sm-12 ">

<form name="adForm" action="" method="GET">
  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8 padding-10">
    <div id="custom-search-input" class="col-sm-12 padding-10">
               <div class="input-group col-md-12">
                   <input type="text" name="search" id="search" class="form-control input-lg" placeholder="Search Ad" value="<?php
                   if(isset($searchItem) && !empty($searchItem)){
                      echo $searchItem;
                    }
                    ?>"/>
                   <span class="input-group-btn">
                       <button class="btn btn-info btn-lg" name="searched" type="submit">
                            <i class="fa fa-search"></i>
                       </button>
                   </span>
               </div>
           </div>
</div>
</div>

<div class="padding-10">
  <div class="row">
<?php include './../PHP/search_post.php';?>
</div>
</div>
</form>
</div>
</div>

</div>

</body>
</html>
