<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteCSGOPilotServiceID'])){

        $deleteCSGOPilotService = $_GET['deleteCSGOPilotServiceID'];
        $sql = "DELETE FROM csgopilotservice WHERE CSGO_PILOTSERVICEID = $deleteCSGOPilotService";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete CSGO pilot service";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('myinventorycsgo.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>