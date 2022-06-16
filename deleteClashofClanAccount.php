<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteClashofClanAccountID'])){

        $deleteClashofClanID = $_GET['deleteClashofClanAccountID'];
        $sql = "DELETE FROM clashofclansellaccount WHERE CLASHOFCLAN_ID = $deleteClashofClanID";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>