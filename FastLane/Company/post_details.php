<!DOCTYPE html>
<html>
<head>
  <title>Post Details</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgray">
  <?php session_start(); ?>
  <?php include 'header.php';?>
  <div class="container-login100">
  <div class="container margin-top-3 login-form" >

<div class="row form-tittle boxTittle">
  <div class="col-sm-12 center">
    Ad Details
  </div>
</div>
<div class="row">
</div>



<?php include './../PHP/fetch_post_details.php';?>
</div>
</div>
<script src="./../js/load_header.js"></script>
</body>
</html>
