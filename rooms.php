<?php
$roomname=$_GET['roomname'];

include 'db.php';

$sql="SELECT * FROM `rooms` WHERE roomname='$roomname'";
$result=mysqli_query($conn,$sql);

if($result){
    if(mysqli_num_rows($result)==0){
        $message="this room is not exist";
        echo '<script type="text/javascript">alert("'.$message.'");
        window.location="http://localhost/chatroom";
        </script>';
   
    }
}
else{
    echo"Eror:". mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="room.css">
</head>
<body>

<h2>Chat Messages-<?php echo"$roomname" ?></h2>

<div class="container">
  <div class="scrolldiv">
   <div class="msgbox">
  <!-- <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;"> -->
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
   </div>
</div>
</div>
 
<!-- <div class="container darker">
 <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
<p>Hey! I'm fine. Thanks for asking!</p>
<span class="time-left">11:01</span>
</div>
<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div> -->

<!-- <div class="chatpage"> -->
<input id="usermsg" name="usermsg" type="text" placeholder="Add messsages">
<button id="submitmsg" name="submitmsg">Send Message</button>
<!-- </div> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  setInterval(runfunction,1000);
  function runfunction()
  {
    $.post("htcont.php",{room:'<?php echo $roomname ?>'},
    function(data,status){
      document.getElementsByClassName('scrolldiv')[0].innerHTML=data;
    })
  };
  // Get the input field
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});


   $("#submitmsg").click(function(){
    var clientmsg=$("#usermsg").val();
    $.post("postmsg.php",{text:clientmsg,room:'<?php echo $roomname ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
    function(data, status){
    document.getElementsByClassName('scrolldiv')[0].innerHTML=data;});
    $("#usermsg").val("");
    return false;
  });

</script>
</body>
</html>
