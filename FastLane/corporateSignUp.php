<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <?php include 'PHP/header.php';?>
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
<form name="adForm" action="" method="POST">
  <div class="row form-tittle center boxTittle">
    <div class="col-sm-12">
    Corporate Signup</div>
  </div>
  <div class="col-sm-12">
  Name:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="name" id="name" class="form-control"><br>
</div>

<div class="col-sm-12">
Address:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="address" id="address" class="form-control"><br>
</div>

<div class="col-sm-12">
Contact Number:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="phone" id="phone" class="form-control"><br>
</div>

<div class="col-sm-12">
Type of Company: eg -Logistics, Real Estate etc.<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="type" id="type" class="form-control"><br>
</div>

<div class="col-sm-12">
Email Id:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="email" id="email" class="form-control"><br>
</div>

<div class="col-sm-12">
UserName:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="userId" id="userId" class="form-control"><br>
</div>

<div class="col-sm-12">Password:<br></div>
<div class="col-sm-12 padding-10">
<input type="password" name="password" id="password" class="form-control"><br>
</div>

<div class="col-sm-12">Confirm Password:<br></div>
<div class="col-sm-12 padding-10">
<input type="password" name="confirmPassword" id="confirmPassword" class="form-control"><br>
</div>

<div class="col-sm-12">
Description about Company:<br>
</div>
<div class="col-sm-12 padding-10">
<input type="text" name="about" id="about" class="form-control"><br>
</div>

<div class="col-sm-12 padding-10">
  <input type="submit" value="SignUp" name="SubmitButton" onclick="login()" class="btn btn-primary width">
</div>
</form>
<div class="col-sm-3">
</div>
</div>
</div>
</div>
</div>
<script src="js/signup.js"></script>
<?php include 'PHP/set_company_signUp_info.php';?>
</body>
</html>
