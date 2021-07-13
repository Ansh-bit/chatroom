<?php
$servername="localhost";
$username="root";
$password="";
$database="chatdb";

$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("failed to cinnect".mysqli_connect_error());
}
$message="hey bro";
?>
