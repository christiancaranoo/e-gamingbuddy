<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}else{
    if(isset($_GET['deletebidItemID'])){

        $bidItemID = $_GET['deletebidItemID'];
        $sql = "DELETE FROM biditem WHERE BID_ITEMID=$bidItemID";
        $result = mysqli_query($conn,$sql);
    
        if($result){
            $message = "Successfully delete bid item";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorybid.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
    }
}
?>