<?php
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

    $sql = "SELECT * FROM post_details ORDER BY RAND() LIMIT 20";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $i=0;
        while($row = $result->fetch_assoc()) {

          if($i==0)
          {
            echo '
            <div class="carousel-item col-md-4 active">
              <div class="card">
                <img class="card-img-top img-fluids" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  alt="Image">
                <div class="card-body">
                  <h4 class="card-title"><a href="Company/post_details.php?id=' .$row["post_no"]. '">'. $row['title'].'</a></h4>
                  <p class="card-text">'. $row["desciprtion"].'</p>

                </div>
              </div>
            </div>
            ';
          }
          else{
            echo '
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluids" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  alt="Image">
                <div class="card-body">
                  <h4 class="card-title"><a href="Company/post_details.php?id=' .$row["post_no"]. '">'. $row['title'].'</a></h4>
                  <p class="card-text">'. $row["desciprtion"].'</p>

                </div>
              </div>
            </div>
            ';
          }



          $i++;
        }
    } else {
    }



$conn->close();
?>
