<?php
if(isset($_GET['searched'])){
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
$searchItem = $_GET['search'];
echo '
<script>
  document.getElementById("search").value = '.$searchItem.';
  </script>';
if($result->num_rows > 0)
{
  $row = $result->fetch_assoc();
  $company_id = $row["company_id"];
  $search = '%'.$searchItem.'%';

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
            <a href='search.php?category=" .$row['category']. "&search=".$searchItem."&searched='''>". $row["category"]."</a></h4>
          </span>
        </label>";
      }
      else{
        echo "
        <label class='form-check'>
          <span class='form-check-label'>
            <a class='font-color' href='search.php?category=" .$row['category']. "&search=".$searchItem."&searched='''>". $row["category"]."</a></h4>
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
<div class="col-sm-12 form-tittle center adsTittle">Searched Results</div>';



function displayAd($image, $post_no, $title, $desciprtion) {
  echo "<table class='table table-bordered table-hover summary-table table-margin' >

    <tr>
      <td>";
      echo '<img src="data:image/jpeg;base64,'.base64_encode($image ).'" height="200" width="200" class="img-thumnail" />';
       echo "</td>
      <td class='col-sm-10'><h4><a href='post_details.php?id=" .$post_no. "'>". $title."</a></h4>
        <p>" . $desciprtion. "</p>
      </td>
  </tr>
 </table>";
}

  if(isset($_GET["category"]) && !empty($_GET["category"]))
  {
    $category = $_GET["category"];
    $sql = "SELECT post_no, title, category, desciprtion, image FROM post_details where title LIKE '$search' AND company_id = '$company_id' and category = '$category'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            displayAd($row['image'], $row['post_no'], $row["title"],  $row["desciprtion"]);
        }
    }
  }
  else{

        $sql = "SELECT post_no, title, category, desciprtion, image FROM post_details where title LIKE '$search' AND company_id = '$company_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row


            while($row = $result->fetch_assoc()) {

              displayAd($row['image'], $row['post_no'], $row["title"],  $row["desciprtion"]);
            }
        }

  }
    echo '</div>';

  }







$conn->close();
}
?>
