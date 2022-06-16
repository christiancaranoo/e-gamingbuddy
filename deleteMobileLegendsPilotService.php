<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteMobileLegendsPilotServiceID'])){

        $deleteMobileLegendPSID = $_GET['deleteMobileLegendsPilotServiceID'];
        $sql = "DELETE FROM mlpilotservice where ML_PILOTSERVICEID=$deleteMobileLegendPSID";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete Mobile Legends Pilot Service";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>