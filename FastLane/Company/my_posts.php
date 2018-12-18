<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
  <div class="container-fluid margin-top-3" >

  <div class="alert alert-success alert-dismissible" style="display: none;" id="success_msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Your ad posted successfully.
 </div>

 <div class="row">



<?php include './../PHP/retrieve_post.php';?>
</div>
</div>
</div>
<script src="./../js/my_posts.js"></script>
</body>
</html>
