<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteCSGOSellAccountID'])){

        $deleteCSGOSellAccount = $_GET['deleteCSGOSellAccountID'];
        $sql = "DELETE FROM csgosellaccount WHERE CSGO_SELLACCOUNTID = $deleteCSGOSellAccount";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete CSGO sell account";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorycsgo.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
    }
}
?>