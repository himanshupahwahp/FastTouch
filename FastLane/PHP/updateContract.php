<?php
session_start();
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

  $post_no = $_SESSION["post_no"];
  $company_id = $_SESSION["company_id"];
  $sql = "UPDATE post_details SET open_contracts = open_contracts+1 WHERE post_no = '$post_no' AND company_id = '$company_id'";
  $result = $conn->query($sql);
  $conn->close();
  ?>
