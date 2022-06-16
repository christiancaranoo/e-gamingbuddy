<?php 
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteMobileLegendsSellAccountID'])){

        $deleteMobileLegendSellAccountID = $_GET['deleteMobileLegendsSellAccountID'];
        $sql =  "DELETE FROM mlbbsellaccount WHERE MLBB_SELLACCOUNTID =  $deleteMobileLegendSellAccountID";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
    }
}
?>