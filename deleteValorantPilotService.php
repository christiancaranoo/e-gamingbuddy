<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteValorantPilotServiceID'])){

        $deletevalorantPilotService = $_GET['deleteValorantPilotServiceID'];
        $sql = "DELETE FROM valorantpilotservice WHERE VALORANT_PILOTSERVICEID = $deletevalorantPilotService";
        $result = mysqli_query($conn,$sql);
        
        if($result){
            $message = "Successfully delete Valorant Pilot Service";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventoryvalorant.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>