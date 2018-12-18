<?php
if(isset($_POST['SubmitButton'])){
  function customerLogin($username, $password){
      require 'dbconnect.php';
      $sql = "SELECT * FROM customer_details WHERE userId = '$username' AND password = '$password'";
      $result = $conn->query($sql);
      if($result){
      if ($result->num_rows > 0) {

           return true;
        }else{
            return false;
        }
      }
      else{
        return false;
      }

  }

  function companyLogin($username, $password)
  {
    require 'dbconnect.php';
    $sql = "SELECT * FROM company_details WHERE userId = '$username' AND password = '$password'";
    $result = $conn->query($sql);



    if($result)
    {
      if ($result->num_rows > 0) {
         return true;
      }else{
          return false;
      }
    }
    else{
      return false;
    }

    }


  $username = $_POST['userId'];
  $password = $_POST['password'];

  if(customerLogin($username, $password)) {
    session_start();
    $_SESSION["userName"] = $username;

    $_SESSION["type"] = "customer";
    echo "<script>
    sessionStorage.setItem('userId', '$username');
    sessionStorage.setItem('id', 'Home');
    location.href = 'Customer/home.php';
    </script>";
  }
  else if(companyLogin($username, $password))
  {
    session_start();
    $_SESSION["userName"] = $username;
    $_SESSION["type"] = "company";
    echo "<script>
    sessionStorage.setItem('userId', '$username');
    sessionStorage.setItem('id', 'Home');
    location.href = 'Company/addPost.php';
    </script>";
  }
  else{
    echo '<script>swal("Error", "Wrong Username and Password", "error");</script>';
  }
}

 ?>
