<?php
//if(isset($_GET['customer'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fastlane";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM company_details WHERE userId='" .$_SESSION['userName']. "'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
  $row = $result->fetch_assoc();

  echo '<div class="col-sm-12" style="text-align:center;"><h3>Account Details </h3></div>
  <table class="table table-bordered">
      <tr>
        <th>Name:</th>
        <td>'.$row['name'].'</td>
        <th>Address: </th>
        <td>'.$row['address'].'</td>
      </tr>
      <tr>
        <th>Email:</th>
        <td>'.$row['email'].'</td>
        <th>Phone:</th>
        <td>'.$row['phone'].'</td>
      </tr>
      <tr>
        <th>UserID:</th>
        <td>'.$row['userId'].'</td>
        <th>Password:</th>
        <td>**********</td>
      </tr>
      <tr>
        <th>Company Type:</th>
        <td>'.$row['type'].'</td>
        <th>About:</th>
        <td>'.$row['about'].'</td>
      </tr>
  </table>';
}
//}
