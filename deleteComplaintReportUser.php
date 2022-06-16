<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
    if(isset($_GET['deleteComplaintReportUserID'])){

        $deleteComplaintReportUserID = $_GET['deleteComplaintReportUserID'];
        $sql = "DELETE FROM reportuser WHERE REPORT_USERID = $deleteComplaintReportUserID";
        $result = mysqli_query($conn,$sql);

        if($result){
            $message = "Successfully delete report";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('adminReport.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>