<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
</head>
<body>
  <?php include 'PHP/header.php';?>
  <div class="container-login100">
  <div class="container margin-top-3" >
  <div class="row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-6 login-form">

<form name="adForm" action="" method="POST">
  <div class="row form-tittle center boxTittle">
    <div class="col-sm-12">
      FastLane</div>
    </div>
  <div class="col-sm-12">
  Username:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="userId" id="userId" class="form-control"><br>
</div>

<div class="col-sm-12">Password:<br></div>
<div class="col-sm-12 padding-10">
<input type="password" name="password" id="password" class="form-control"><br>
</div>

<div class="col-sm-12 padding-10">
  <input type="submit" value="Login" name="SubmitButton" class="btn btn-cyan btn-primary width">
</div>

<div class="col-sm-12 center">
<h4>Don't have an account yet?</h4>
</div>
<div class="col-sm-12 padding-10">
  <input type="button" value="Corporate SignUp" name="Corporate SignUp" onclick="corporateSignUp()" class="btn btn-primary width">
</div>

<div class="col-sm-12 padding-10">
  <input type="button" value="Customer SignUp" name="Customer SignUp" onclick="customerSignUp()" class="btn btn-primary width">
</div>
</form>
<div class="col-sm-3">
</div>
</div>
</div>
</div>
</div>
<script src="js/signup.js"></script>
<?php include 'PHP/validate_login.php';?>
</body>
</html>
