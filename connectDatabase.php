<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "e-gamingbuddy";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
//checking my connection is connected to the database
if(!$conn){
    die('Connection Failed : ' .mysqli_connect_error());
}
?>