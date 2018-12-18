var success= sessionStorage.getItem("success");

if(success){
    document.getElementById('success_msg').style.display = success;
    sessionStorage.removeItem("success");
}
