<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
  if(isset($_GET['deleteValorantSellItemID'])){
    
    $deleteValorantSellItemID = $_GET['deleteValorantSellItemID'];
    $sql = "DELETE FROM valorantsellitem where VALORANT_SELLITEMID= $deleteValorantSellItemID";
    $result = mysqli_query($conn,$sql);

    if($result){
      $message = "Successfully delete Valorant Sell Item";
      echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventoryvalorant.php');</script>";
    }else{
      $message = "Something went wrong please try again later.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

  }
}
?>