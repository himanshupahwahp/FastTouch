
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
  $post_no = $_GET['id'];
  $_SESSION["post_no"] = $post_no;
  $type = $_SESSION["type"];
  $companyId = "";
  $sql = "SELECT post_no, title, category, desciprtion,company_id, image FROM post_details where post_no = '$post_no'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $companyId = $row['company_id'];
        $_SESSION["company_id"] = $row['company_id'];
        echo "
        <div class='row adImageMargin'>
        <div class='col-sm-4'>
        <img src='data:image/jpeg;base64,".base64_encode($row['image'] )."' height='300' width='280' class='img-thumnail' />';
        </div>
        <div class='col-sm-3'>
        </div>
        <div class='col-sm-4'>";


            if($type == "customer")
            { echo "<label class='ad-font'>Message</label>
              <div class='form-group'>
              <textarea class='form-control' id='message' rows='5'></textarea>
              <div class='margin-top-4'>
                <input type='button' value='Send' id='msg' name='msg' class='btn btn-primary'>
                    </div>
                </div>";
            }

        echo "</div>
        </div>
        <div class='form-tittle row adImageMargin'>
          ". $row["title"]."
        </div>

        <div class='ad-font row adDescriptionMargin'>
          <div class='col-sm-2'> Company Type: </div>
          <div class='col-sm-9'> ". $row["category"]." </div>
        </div>
        <div class='row adDescriptionMargin'>
          <div class='col-sm-12 ad-font'> Description: </div>
          <div class='col-sm-6 ad-desciprtion-font'>  ". $row["desciprtion"]." </div>
        </div>
        <div class='padding-10'>
        </div>";
      }
      $sql = "SELECT email FROM company_details where company_id = '$companyId'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $_SESSION["email"] = $row['email'];
          }
      }
  }
  $conn->close();
  ?>
