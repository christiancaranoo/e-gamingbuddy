<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteDota2AccountID'])){

        $dota2deleteSellAccount = $_GET['deleteDota2AccountID'];
        $sql = "DELETE FROM dota2sellaccount WHERE DOTA2_SELLACCOUNTID = $dota2deleteSellAccount";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete Dota 2 sell account";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorydota2.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
    }
}
?>