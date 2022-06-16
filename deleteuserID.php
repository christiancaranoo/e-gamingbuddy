<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}else{
    if(isset($_GET['deleteuserID'])){

        $useruserID = $_GET['deleteuserID'];
        $sql = "DELETE FROM users where USER_ID=$useruserID";
        $result = mysqli_query($conn,$sql);
    
        if($result){
            $message = "Successfully delete user";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('adminhomepage.php');</script>";
        }else{
            $message = "Something went wrong please try again later.";
            echo "<script type='text/javascript'>alert('$message');window.location.replace('adminhomepage.php');</script>";
        }
        
    }
}
?>