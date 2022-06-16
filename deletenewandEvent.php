<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteNewandEventID'])){
        $deletegetnewandEvent = $_GET['deleteNewandEventID'];  
        $sql = "DELETE FROM newandevent WHERE NEWANDEVENT_ID= $deletegetnewandEvent";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete News and Events";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('adminnewsEvent.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
    }
}
?>