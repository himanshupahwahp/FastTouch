<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  <div class="col-sm-3">
  </div>
  <div class="col-sm-6 login-form">

<div class="col-sm-3">
</div>
</div>
</div>
</div>


<script>
  sessionStorage.getItem("payment");
  if(sessionStorage.getItem("payment")) {
    swal("Payment Successfull", "", "success");
    sessionStorage.setItem("payment", "");
  }

</script>

</body>
</html>
