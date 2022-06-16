<?php
include 'connectDatabase.php';
session_start();
$message="";
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}else{
    if(isset($_GET['deleteBidID'])){
        
        $deleteBidID = $_GET['deleteBidID'];
        $sql = "DELETE FROM bid where BID_ID=$deleteBidID";
        $result = mysqli_query($conn,$sql);
    
        if($result){
            $message = "Successfully delete bid";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('biditem.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>