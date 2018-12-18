<?php
if(isset($_POST['SubmitButton'])){
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

  $title = $_POST['title'];
  $category = $_POST['category'];
  $description = $_POST['description'];
  $userId = $_POST['userName'];
  $sql = "SELECT company_id FROM company_details WHERE userId='$userId'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      $row = $result->fetch_assoc();
      $company_id = $row["company_id"];      
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

      $sql = "INSERT INTO post_details (title, category, desciprtion, company_id, image) VALUES ('$title','$category','$description','$company_id', '$file')";
      if ($conn->query($sql) === TRUE){

        echo "<script>
          sessionStorage.setItem('success', 'block');
          location.href='my_posts.php';
        </script>";

      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }





$conn->close();
}
?>
