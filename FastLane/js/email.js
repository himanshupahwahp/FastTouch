$('#msg').click(function() {


  var email = <?php echo "".$_SESSION["email"].""; ?>
  var message = document.getElementById("message").value;
  Email.send("himanshupahwa.hp@gmail.com",
 email,
"Reply to your Ad",
'<table><tr><th>Message</th></tr><tr><td>'+message+'</td></tr></table>',
"smtp25.elasticemail.com",
"himanshupahwa.hp@gmail.com",
"9c1c6633-46fe-44f1-83a5-72a2e3abbf7f");

alert("Receipt Sent to email");
$.ajax({
       type: "POST",
       url: "./../PHP/updateContract.php",
       data: { },
       success: function() {
              swal("Message sent", "success");
        }
});

});
