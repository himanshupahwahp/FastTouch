document.getElementById("userId").innerhtml = "jhkjhjjk";
var id = sessionStorage.getItem("id");
document.getElementById(id).classList.add("active");
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
  sessionStorage.setItem("id", id);
  document.getElementById(id).classList.add("active");
}

function myFunction()
{
  document.getElementById("userId").innerhtml = "assfsdf";
}
