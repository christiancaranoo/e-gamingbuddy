<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteDota2PilotServiceID'])){
        
        $deleteDota2PilotService = $_GET['deleteDota2PilotServiceID'];
        $sql = "DELETE FROM dota2pilotservice WHERE DOTA2_PSID=$deleteDota2PilotService";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete Dota 2 Pilot Service";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorydota2.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>