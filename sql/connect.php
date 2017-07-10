<?php
$hostname = "127.0.0.1";
$username = "";
$password = "";
//$dbname = "school";
$conn = mysqli_connect('127.0.0.1','root','','school');

if(!$conn){
    die("connection failed : " . mysqli_connect_error());
}
?>