<?php
if(isset($_POST['SubmitButton'])){

      function userRegistration($name, $address, $userId, $email, $phone, $type, $about, $password) {
      require 'dbconnect.php';
      $sql = "INSERT INTO company_details (name, address, userId, email, phone, type, about, password)
                     VALUES ('$name', '$address', '$userId', '$email', '$phone', '$type', '$about', '$password')";

       if ($conn->query($sql) === TRUE) {
           return true;
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }
  }
  $name = $_POST['name'];
  $address = $_POST['address'];
  $userId = $_POST['userId'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $type = $_POST['type'];
  $about = $_POST['about'];
  $password = $_POST['password'];


  if(userRegistration($name, $address, $userId, $email, $phone, $type, $about, $password)) {
    echo '<script language="javascript">';
    echo "location.href = 'login.php'";
    echo '</script>';
  }
}
?>
