<?php
session_start();
$con=mysqli_connect("localhost","root","","auto");
if($con->connect_error){
    die("connection failed".$con->connect_error());

}
echo "connected succesfully";
?>