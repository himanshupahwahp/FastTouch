<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="./../js/sweetalert.min.js"></script>
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
<script src="https://smtpjs.com/v2/smtp.js"></script>
<script>
$('#msg').click(function() {


  var email = "<?php echo "".$_SESSION["email"].""; ?>";
  var message = document.getElementById("message").value;
  Email.send("himanshupahwa.hp@gmail.com",
 email,
"Reply to your Ad",
'<table><tr><th>Message</th></tr><tr><td>'+message+'</td></tr></table>',
"smtp25.elasticemail.com",
"himanshupahwa.hp@gmail.com",
"9c1c6633-46fe-44f1-83a5-72a2e3abbf7f");

$.ajax({
       type: "POST",
       url: "./../PHP/updateContract.php",
       data: { },
       success: function() {
              swal("Message sent", "", "success");
        }
});

});
</script>
</body>
</html>
