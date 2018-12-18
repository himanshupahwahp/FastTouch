<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">FastLane</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li id="Home" class="nav-item active">
        <a class="nav-link" href="home.php" onclick="setId('Home')">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav my-2 my-lg-0">
      <li id="corporateSignUp" class="nav-item">
        <a class="nav-link" href="corporateSignUp.php" onclick="setId('corporateSignUp')">Company Signup</a>
      </li>
      <li id="customerSignUp" class="nav-item">
        <a class="nav-link" href="customerSignUp.php" onclick="setId('customerSignUp')">Customer SignUp</a>
      </li>
      <li id="login" class="nav-item">
        <a class="nav-link" href="login.php" onclick="setId('login')">Login</a>
      </li>
    </ul>
  </div>
</nav>

<script>
var id = sessionStorage.getItem("headerId");
if(id)
{
    document.getElementById(id).classList.add("active");
}

if(id != "Home")
{
    document.getElementById("Home").classList.remove('active');
}
if(id != "Postad")
{
    document.getElementById("Postad").classList.remove('active');
}
if(id != "MyPosts")
{
    document.getElementById("MyPosts").classList.remove('active');
}
if(id != "Search")
{
    document.getElementById("Search").classList.remove('active');
}
function setId(id)
{
  sessionStorage.setItem("headerId", id);
  document.getElementById(id).classList.add("active");
}

</script>
