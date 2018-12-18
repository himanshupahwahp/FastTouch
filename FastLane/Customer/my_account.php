<!DOCTYPE html>
<html>
<head>
  <title>Account Details</title>
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
  <div class="container margin-top-3" >
      <div class="row">
    <div class="col-sm-12 center">
    				<span  id="welcomeUser" class="tittle">

    				</span>
    </div>
  </div>

<div class="col-sm-12 login-form">

<form name="adForm" action="" method="GET">
<div class="padding-10">
<div class="row">
  <?php include './../PHP/account_details.php';?>
</div>
</div>
</form>

</div>
</div>
<script src="./../js/load_header.js"></script>
</div>

</body>
</html>
