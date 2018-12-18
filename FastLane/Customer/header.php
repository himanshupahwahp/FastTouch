<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">FastLane</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li id="Home" class="nav-item">
        <a class="nav-link" href="home.php" onclick="setId('Home')">Home</a>
      </li>
      <li id="Search" class="nav-item">
        <a class="nav-link" href="search.php" onclick="setId('Search')">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="my_account.php">My Account</a>
      </li>
    </ul>
<!--
    <form class="form-inline  my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

    <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="./../login.php" id="logOut" onclick="logout()">Log out</a>
      </li>
    </ul>
  </div>
  <script src="./../js/header.js"></script>
  <script>

  jQuery(document).ready(function() {
  jQuery("#logOut").click(destroy());
 });
function destroy() {
   jQuery.ajax({
      "url":"./../PHP/destroy_session.php",
      "success":function() {
      }
   });
}
  </script>
</nav>
