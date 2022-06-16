<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteDota2SellItemID'])){
        
        $deleteDota2SellItemID = $_GET['deleteDota2SellItemID'];
        $sql = "DELETE FROM dota2sellitem where DOTA2_SELLITEMID= $deleteDota2SellItemID";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete Dota 2 Sell Item";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorydota2.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
    }
}
?>