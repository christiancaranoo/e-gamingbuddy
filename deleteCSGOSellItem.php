<?php 
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteCSGOSellItemID'])){
        
        $csgodeleteSellItem = $_GET['deleteCSGOSellItemID'];
        $sql = "DELETE FROM csgosellitem WHERE CSGO_SELLITEMID = $csgodeleteSellItem";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete CSGO sell item";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorycsgo.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>