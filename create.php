<?php
$room=$_POST['room'];

if(strlen($room)>20 or strlen($room)<2){
    $message="Please enter a name between 2 to 20 characters";
   
    echo '<script>alert(" '.$message.'");
    window.location="http://localhost/chatroom";
   </script>';
   
    // echo'<script language="javascript">';
    // echo'alert("'.$message.'")';
    // echo'window.location="http://localhost/chatroom";';
    // echo'</script>';
}
elseif (!ctype_alnum($room)) {
    $message="Please choose an alphanumeric name";
    echo '<script type="text/javascript">alert("'.$message.'");
    window.location="http://localhost/chatroom";
    </script>';

    // echo'<script language="javascript">';
    // echo'alert("'.$message.'")';
    // echo'window.location=
    // "http://localhost/web/wb.html";';
    // echo'</script>'; 
}
else{
    include 'db.php';
  
}

$sql="SELECT * FROM `rooms` WHERE roomname='$room'";

$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        $message="Please choose a different roomname this is alredy exist";
        echo '<script type="text/javascript">alert("'.$message.'");
        window.location="http://localhost/chatroom";
        </script>';
        
   
        // echo'<script language="javascript">';
    // echo'alert("'.$message.'")';
    // echo'window.location=
    // "http://localhost/web/wb.html";';
    // echo'</script>'; 
    }
    else{
    
        $sql="INSERT INTO `rooms` ( `roomname`, `stime`) VALUES ('$room', current_timestamp()); ";
      if(mysqli_query($conn,$sql)){
        $message="Your room is now ready for chatting";
    
       
        echo '<script type="text/javascript">alert("'.$message.'");
        window.location="http://localhost/chatroom/rooms.php?roomname='.$room.'";
        </script>';
        
        // echo'<script language="javascript">';
    // echo'alert("'.$message.'")';
    // echo'window.location=
    // "http://localhost/web/wb.html/rooms.php?roomname=" '.$room. '";';
    // echo'</script>'; 
        } 
    
    }
  }

else{
    echo "Error:". mysqli_error($conn);
}
?>