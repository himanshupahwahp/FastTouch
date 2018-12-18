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

$sql = "SELECT company_id FROM company_details WHERE userId='" .$_SESSION['userName']. "'";
$result = $conn->query($sql);
// output data of each row
$row = $result->fetch_assoc();
$company_id = $row["company_id"];

if($result)
{

  echo '<aside class="col-sm-2">
 <div class="card">
 	<article class="card-group-item">
 		<header class="card-header category-padding">
 			<h6 class="title">Categories</h6>
 		</header>
 		<div class="filter-content">
 			<div class="card-body">
 			<form>';
  $sqlCategory = "SELECT DISTINCT(category) from post_details where company_id = '$company_id'";
  $resultCategory = $conn->query($sqlCategory);
  if($resultCategory->num_rows > 0)
  {
    while($row = $resultCategory->fetch_assoc()) {
      if(isset($_GET["category"]) && $_GET["category"] == $row["category"])
      {
        echo "
        <label class='form-check'>
          <span class='form-check-label'>
            <a href='my_posts.php?category=" .$row['category']. "'>". $row["category"]."</a></h4>
          </span>
        </label>";
      }
      else{
        echo "
        <label class='form-check'>
          <span class='form-check-label'>
            <a class='font-color' href='my_posts.php?category=" .$row['category']. "'>". $row["category"]."</a></h4>
          </span>
        </label>";
      }
    }

  }

  echo '
  </form>
  </div> <!-- card-body.// -->
</div>
</article> <!-- card-group-item.// -->
</div> <!-- card.// -->
</aside>
<div class="col-sm-8">
<div class="col-sm-12 form-tittle center adsTittle">My Ads</div>';




  $index = 0;
  if(isset($_GET["category"]) && !empty($_GET["category"]))
  {

    $category = $_GET["category"];
    $sql = "SELECT post_no, title, category, desciprtion, image, open_contracts FROM post_details where company_id = '$company_id' and category = '$category'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            displayAds($row['image'], $row['post_no'], $row["title"],  $row["desciprtion"], $row["open_contracts"], $index);
            $index++;
        }
    }
  }
  else{

        $sql = "SELECT post_no, title, category, desciprtion, image, open_contracts FROM post_details where company_id = '$company_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row


            while($row = $result->fetch_assoc()) {

              displayAds($row['image'], $row['post_no'], $row["title"],  $row["desciprtion"], $row["open_contracts"], $index);
              $index++;
            }
        }

  }
    echo '</div>';

}


function displayAds($image, $post_no, $title, $desciprtion, $contracts, $index) {
  echo "<table class='table table-bordered table-hover summary-table table-margin' >";
  if($index == 0)
  {
      echo "<tr><th>Image</th><th>Tittle</th><th> Open Contracts</th>
        <tr>";
  }

      echo "<tr><td>";
      echo '<img src="data:image/jpeg;base64,'.base64_encode($image ).'" height="200" width="200" class="img-thumnail" />';
       echo "</td>
      <td style='width:60%!important;'><h4><a href='post_details.php?id=" .$post_no. "'>". $title."</a></h4>
        <p>" . $desciprtion. "</p>
      </td>
      <td style='width:15.5%!important;'>
      ".$contracts."
      </td>
  </tr>
 </table>";

}


$conn->close();
?>
