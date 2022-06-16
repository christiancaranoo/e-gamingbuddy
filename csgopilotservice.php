<?php
//declare database
include 'connectDatabase.php';
//session start from log in form
session_start();
$messageSuccess = "";
$messageFailed = "";
//check if the session is still running
if(!isset($_SESSION['username'])){
  //back to the login form
  header("Location:index.php");
}else{
  $useruserName = $_SESSION['username'];
  if(isset($_POST['csgoPilotService'])){
    $csgopilotserviceFROM = mysqli_real_escape_string($conn,$_POST['csgopilotserviceFROM']);
    $csgopilotserviceTO= mysqli_real_escape_string($conn,$_POST['csgopilotserviceTO']);
    $csgopilotservicePrice = mysqli_real_escape_string($conn,$_POST['csgopilotservicePrice']);

    //Checking if the pilot service is valid or not
    //if not invalid
    //SILVER 1
    if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER 4" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER 3" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER 2" && $csgopilotserviceTO == "SILVER 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 2"){
      //SILVER 2 CHECKING IF THE PILOT SERVICE IS VALID OR NOT
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }
    else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER 4" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER 3" && $csgopilotserviceTO == "SILVER 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 3"){
      //SILVER 3 CHECKING IF THE PILOT SERVICE IS VALID OR NOT
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER 4" && $csgopilotserviceTO == "SILVER 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
       echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 4"){
      //SILVER 4 CHECKING IF THE PILOT SERVICE VALID OR NOT
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 4"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER ELITE"){
      //SILVER ELITE CHECKING IF THE PILOT SERVICE IS VALID OR NOT
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      //SILVER ELITE MASTER - CHECKING IF THE PILOT SERVICE IS VALID OR NOT
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA 1"){
      //GOLD NOVA 1 - CHECKING IF THE PILOT SERVICE IS VALID OR NOT      
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "GOLD NOVA 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA 2"){
      //GOLD NOVA 2 - CHECKING IF THE PILOT SERVICE IS VALID OR NOT        
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "GOLD NOVA 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA 3"){
      //GOLD NOVA 3 - CHECKING IF THE PILOT SERVICE IS VALID OR NOT        
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "GOLD NOVA 3"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      //GOLD NOVA 4 - CHECKING IF THE PILOT SERVICE IS VALID OR NOT        
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "LEGENDARY EAGLE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "LEGENDARY EAGLE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "LEGENDARY EAGLE"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "LEGENDARY EAGLE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "LEGENDARY EAGLE MASTER"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SUPREME MASTER FIRST CLASS"){
      $messageInvalid=  "Invalid CSGO pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }
    //if valid
    else{
      $sql = "INSERT INTO csgopilotservice(USER_ID,CSGO_PILOTSERVICEFROM,CSGO_PILOTSERVICETO, CSGO_PILOTSERVICEPRICE )
      VALUES ((SELECT USER_ID FROM users WHERE USER_USERNAME = '$useruserName'),'$csgopilotserviceFROM',
      '$csgopilotserviceTO','$csgopilotservicePrice')";
      $result = mysqli_query($conn, $sql);
      if($result){
        $messageSuccess = "Successfully CSGO pilot service";
        echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
      }else{
        $messageFailed = "Unsuccessful CSGO pilot service please try again";
        echo "<script type='text/javascript'>alert('$messageFailed');</script>";
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>CSGO Pilot Service</title>
    <link rel="stylesheet" href="css/homepagedropdownav.css">
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
    

  <body>
    <?php echo $_SESSION['username']; ?> 
    <!--1ST NAVIGATION BAR-->
    <div class="container-fullwidth">
      <nav class="navbar navbar-light bg-primary">
           
        <a class="navbar-brand" href="#" style="color: white;">
          <img src="image/logo.jpg" alt="E-Gaming Buddy" width="30" height="30" class="d-inline-block align-text-top">
          E-Gaming Buddy
        </a>
        <a class="nav-link" aria-current="page" href="homepage.php" style="color: white;"><i class = "fa fa-fw fa-home"></i>Home</a>
        <a class="nav-link" href="biditem.php" style="color: white;"><i class = "fa fa-gavel"></i>Bid</a>
        <a class="nav-link" href="myaccount.php" style="color: white;"><i class="fa fa-fw fa-user"></i>My Account</a>
        <a class="nav-link" href="newsandevent.php" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> News / Events</a>
        
        <div class="btn-group">
          <a style="color:white" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell" aria-hidden="true"></i>Notification
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        
        <a class="nav-link" href="faqform.php" style="color: white;"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>
        <a class="nav-link" href="index.php" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            
      </nav>
    </div>
    <!--1ST END NAVIGATION BAR CODE-->

    <!--2ND NAVIGATION BAR DROPDOWN HOVER-->
    <div class = "container-fullwidth">
      <div class="navbar1">
        <!-- DROPDOWN FOR MOBILE LEGENDSLEGENDS-->
        <div class="dropdown1">
          <button class="dropbtn1">
            <!--IMAGE OF MOBILE LEGENDS-->
            <img src = "image/mobilelegends.jpg" width="30" height="30" alt = "Mobile Legends" >
            Mobile Legends
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content1">
            <a href="mlbbaccountforsale.php">
              <img src = "image/mobilelegends.jpg" width="30" height="30" alt = "Mobile Legends" > 
              Mobile Legends Account for Sale
            </a>
            <a href="mlbbpilotservice.php">
              <img src = "image/mobilelegends.jpg" width="30" height="30" alt = "Mobile Legends" >
              Mobile Legends Pilot Services
            </a>
          </div>
        </div> 

        <div class="dropdown1">
          <button class="dropbtn1">
            <!--IMAGE OF STEAM-->
            <img src = "image/steamicon.png" width="30" height="30" alt = "Steam" >
            Steam
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content1">
            <a href="dota2itemforsale.php">
              <img src = "image/dota-2.png" height = "30" width = "30">  
              Dota 2 Item for Sale
            </a>
            <a href="dota2accountforsale.php">
              <img src = "image/dota-2.png" height = "30" width = "30"> 
              Dota 2 Account for Sale
            </a>
            <a href="dota2pilotservice.php">
              <img src = "image/dota-2.png" height = "30" width = "30"> 
              Dota 2 Pilot Service
            </a>
            <hr>
            <a href="csgoitemforsale.php">
              <img src="image/csgoicon.jpg" height = "30" width = "30">
              CS:GO Item for Sale
            </a>
            <a href="csgoaccountforsale.php">
              <img src="image/csgoicon.jpg" height = "30" width = "30">
              CS:GO Account for Sale
            </a>
            <a href="csgopilotservice.php">
              <img src="image/csgoicon.jpg" height = "30" width = "30">
              CS:GO Pilot Service
            </a>
          </div>
        </div>
                
        <div class="dropdown1">
          <button class="dropbtn1">
            <!--IMAGE OF CLASH OF CLAN-->
            <img src = "image/clashofclan.jpg" width="30" height="30" alt = "Clash of Clan" >
            Clash of Clan
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content1">
            <a href="clashofclanaccountforsale.php">
              <img src = "image/clashofclan.jpg" width="30" height="30" alt = "Clash of Clan" > 
              Clash of Clan Account for Sale
            </a>
          </div>
        </div> 

        <div class="dropdown1">
          <button class="dropbtn1">
            <!--IMAGE OF VALORANT-->
            <img src = "image/valorantlogo.png" width="30" height="30" alt = "Valorant" >
            Valorant
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content1">
            <a href="valorantitemforsale.php">
              <img src="image/valorantlogo.png" height = "30" width = "30">
              Valorant Item for Sale
            </a>
            <a href="valorantpilotservice.php">
              <img src="image/valorantlogo.png" height = "30" width = "30">
              Valorant Pilot Service
            </a>
          </div>
        </div> 
      </div>
    </div>
          
    <br>
    <!--END 2ND NAVIGATION BAR DROPDOWN CODE-->
    <!--START 3RD CONTAINER CODE-->
    <div class = "container-fluid">
      <!--START WHOLE FLEX CODE-->
      <div class="d-flex">
        <!--START 1ST FLEX CODE-->
        <div class="mr-auto p-2">
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy CSGO Pilot Services</h2>
        </div>
        <!--END 1ST FLEX CODE-->

        <!--START 2ND FLEX CODE-->
        <div class="p-2">
          <p style="color: #6e706f;font-family: 'Poppins',sans-serif;color: #6e706f;font-size: 16px;">You want to pilot service?</p>
        </div>
        <!--END 2ND FLEX CODE-->
        <!--START 3RD FLEX CODE-->
        <div class="p-2">
          <a href = "" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Click Here</a>
          <!--WHERE USER CAN SELL CSGO ITEMS-->
          <!--START MODAL CODE-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--START MODAL DIALOG-->
              <div class="modal-dialog" role="document">
                <!--START MODAL CONTENT-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src = "image/csgoicon.jpg" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; CSGO Pilot Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label"><b>Provide Pilot Service</b></label>
                        <div class = "row">
                          <div class = "col-sm">
                            <p><b>FROM:</b></p>
                            <select class="form-select" name="csgopilotserviceFROM" aria-label="Default select example">
                              <!--OPTION LIST CSGO PILOT SERVICES-->
                              <option value="SILVER 1">SILVER 1</option>
                              <option value="SILVER 2">SILVER 2</option>
                              <option value="SILVER 3">SILVER 3</option>
                              <option value="SILVER 4">SILVER 4</option>
                              <option value="SILVERE ELITE">SILVER ELITE</option>
                              <option value="SILVER ELITE MASTER">SILVER ELITE MASTER</option>
                              <option value="GOLD NOVA 1">GOLD NOVA 1</option>
                              <option value="GOLD NOVA 2">GOLD NOVA 2</option>
                              <option value="GOLD NOVA 3">GOLD NOVA 3</option>
                              <option value="GOLD NOVA MASTER">GOLD NOVA MASTER</option>
                              <option value="MASTER GUARDIAN 1">MASTER GUARDIAN 1</option>
                              <option value="MASTER GUARDIAN 2">MASTER GUARDIAN 2</option>
                              <option value="MASTER GUARDIAN ELITE">MASTER GUARDIAN ELITE</option>
                              <option value="DISTINGUISHED MASTER GUARDIAN">DISTINGUISHED MASTER GUARDIAN</option>
                              <option value="LEGENDARY EAGLE">LEGENDARY EAGLE</option>
                              <option value="LEGENDARY EAGLE MASTER">LEGENDARY EAGLE MASTER</option>
                              <option value="SUPREMEMASTER FIRSTCLASS">SUPREME MASTER FIRST CLASS</option>
                              <option value="GLOBAL ELITE">GLOBAL ELITE</option>
                            </select>
                                 
                          </div>
                          <br> <br>
                          <div class = "col-sm">
                            <p><b>TO:</b></p>
                            <select class="form-select" name="csgopilotserviceTO" aria-label="Default select example">
                              <!--OPTION LIST CSGO PILOT SERVICES-->
                              <option value="SILVER 1">SILVER 1</option>
                              <option value="SILVER 2">SILVER 2</option>
                              <option value="SILVER 3">SILVER 3</option>
                              <option value="SILVER 4">SILVER 4</option>
                              <option value="SILVER ELITE">SILVER ELITE</option>
                              <option value="SILVER ELITE MASTER">SILVER ELITE MASTER</option>
                              <option value="GOLD NOVA 1">GOLD NOVA 1</option>
                              <option value="GOLD NOVA 2">GOLD NOVA 2</option>
                              <option value="GOLD NOVA 3">GOLD NOVA 3</option>
                              <option value="GOLD NOVA MASTER">GOLD NOVA MASTER</option>
                              <option value="MASTER GUARDIAN 1">MASTER GUARDIAN 1</option>
                              <option value="MASTER GUARDIAN 2">MASTER GUARDIAN 2</option>
                              <option value="MASTER GUARDIAN ELITE">MASTER GUARDIAN ELITE</option>
                              <option value="DISTINGUISHED MASTER GUARDIAN">DISTINGUISHED MASTER GUARDIAN</option>
                              <option value="LEGENDARY EAGLE">LEGENDARY EAGLE</option>
                              <option value="LEGENDARY EAGLE MASTER">LEGENDARY EAGLE MASTER</option>
                              <option value="SUPREME MASTER FIRSTCLASS">SUPREME MASTER FIRST CLASS</option>
                              <option value="GLOBAL ELITE">GLOBAL ELITE</option>
                            </select>
                          </div>
                        </div>   
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price:</b></label>
                        <input type="text" name="csgopilotservicePrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                      </div>
                      <div class="modal-footer">
                        <input type="submit" name="csgoPilotService" value="PILOT SERVICE" class="btn btn-primary">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                      </div>
                    </form>  
                  </div>
                <!--END MODAL CONTENT-->
                </div>
              <!--END MODAL DIALOG-->
              </div>
            <!--END MODAL CODE-->
            </div>
          <!--END 3RD FLEX CODE-->
          </div>
        <!--END WHOLE FLEX CODE-->
        </div>
        <!--END 3RD CONTAINER CODE-->
      </div>
            
       
      <!--START CODE FOR CONTAINER FOR THE SEARCH FILTER-->
      <div class = "container" style="float: left;width: 340px;height: 1350px;overflow-y: auto;padding-top: 20px;top: 56px;">
        <div class="btn-group-vertical">
          <!--LIST OF HERO-->
          <h5 style = "font-size: medium">Pilot Service List</h5>
          <!-- START DOTA 2 PILOT SERVICES LIST-->
          <div class = "row">
            <div class = "col-sm">
              <select class="form-select" aria-label="Default select example">
                <!--OPTION LIST DOTA 2 PILOT SERVICES-->
                <option value="SILVER 1">SILVER 1</option>
                <option value="SILVER 2">SILVER 2</option>
                <option value="SILVER 3">SILVER 3</option>
                <option value="SILVER 4">SILVER 4</option>
                <option value="SILVER ELITE">SILVER ELITE</option>
                <option value="SILVER ELITE MASTER">SILVER ELITE MASTER</option>
                <option value="GOLD NOVA 1">GOLD NOVA 1</option>
                <option value="GOLD NOVA 2">GOLD NOVA 2</option>
                <option value="GOLD NOVA 3">GOLD NOVA 3</option>
                <option value="GOLD NOVA MASTER">GOLD NOVA MASTER</option>
                <option value="MASTER GUARDIAN 1">MASTER GUARDIAN 1</option>
                <option value="MASTER GUARDIAN 2">MASTER GUARDIAN 2</option>
                <option value="MASTER GUARDIAN ELITE">MASTER GUARDIAN ELITE</option>
                <option value="DISTINGUISHED MASTER GUARDIAN">DISTINGUISHED MASTER GUARDIAN</option>
                <option value="LEGENDARY EAGLE">LEGENDARY EAGLE</option>
                <option value="LEGENDARY EAGLE MASTER">LEGENDARY EAGLE MASTER</option>
                <option value="SUPREME MASTER FIRSTCLASS">SUPREME MASTER FIRST CLASS</option>
                <option value="GLOBALELITE">GLOBAL ELITE</option>
              </select>
                       
            </div>
            <br> <br>
            <p>TO</p>
            <div class = "col-sm">
              <select class="form-select" aria-label="Default select example">
                <!--OPTION LIST DOTA 2 PILOT SERVICES-->
                <option value="SILVER1">SILVER 1</option>
                <option value="SILVER2">SILVER 2</option>
                <option value="SILVER3">SILVER 3</option>
                <option value="SILVER4">SILVER 4</option>
                <option value="SILVERELITE">SILVER ELITE</option>
                <option value="SILVERELITEMASTER">SILVER ELITE MASTER</option>
                <option value="GOLDNOVA1">GOLD NOVA 1</option>
                <option value="GOLDNOVA2">GOLD NOVA 2</option>
                <option value="GOLDNOVA3">GOLD NOVA 3</option>
                <option value="GOLDNOVAMASTER">GOLD NOVA MASTER</option>
                <option value="MASTERGUARDIAN1">MASTER GUARDIAN 1</option>
                <option value="MASTERGUARDIAN2">MASTER GUARDIAN 2</option>
                <option value="MASTERGUARDIANELITE">MASTER GUARDIAN ELITE</option>
                <option value="DISTINGUISHEDMASTERGUARDIAN">DISTINGUISHED MASTER GUARDIAN</option>
                <option value="LEGENDARYEAGLE">LEGENDARY EAGLE</option>
                <option value="LEGENDARYEAGLEMASTER">LEGENDARY EAGLE MASTER</option>
                <option value="SUPREMEMASTERFIRSTCLASS">SUPREME MASTER FIRST CLASS</option>
                <option value="GLOBAL ELITE">GLOBAL ELITE</option>
              </select>
            </div>
          </div>          
          <!--END DOTA 2 PILOT SERVICES LIST CODE-->
        </div>
        <div class = "row">
          <div class = "col-sm">
            <br>
            <h5 style = "font-size: medium">Price</h5>
            <select class="form-select" aria-label="Default select example" style="width:315px;">
              <!--OPTION LIST PRICE CLASH OF CLAN-->
              <option value="LOWESTPRICE">LOWEST PRICE</option>
              <option value="HIGHESTPRICE">HIGHEST PRICE</option>
            </select>  
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary btn-sm" style="width:225px;"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
            <!--END PRICE VALORANT ITEMS CODE-->
          </div>
        </div> 
      </div>
            
      <div class = "container">
        <?php
          $sql = "SELECT
          b.CSGO_PILOTSERVICEID,
          concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
          b.CSGO_PILOTSERVICEFROM,
          b.CSGO_PILOTSERVICETO,
          b.CSGO_PILOTSERVICEPRICE
          FROM
          csgopilotservice b, 
          users u
          WHERE b.USER_ID = u.USER_ID";
          $result = mysqli_query($conn,$sql);

          if($result){
            while($row=mysqli_fetch_assoc($result)){
              $csgoPilotServiceID = $row['CSGO_PILOTSERVICEID'];
              $userID = $row['Name'];
              $csgoPSFROM = $row['CSGO_PILOTSERVICEFROM'];
              $csgoPSTO = $row['CSGO_PILOTSERVICETO'];
              $csgoPSPrice = $row['CSGO_PILOTSERVICEPRICE'];

              if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 1"){
                
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>   
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row"> 
                          <div class = "col">
                            <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$dota2PSTO.'</p>  
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$dota2PSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>    
                    </div>
                  </div>  
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$dota2PSTO.'</p>  
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$dota2PSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 4"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$dota2PSTO.'</p>  
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$dota2PSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>    
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:23.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>    
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER ELITE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>    
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguish Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER 4"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                    <div classs = "container">
                      <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                        <div class="card-body">
                
                          <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                          <p class="card-text"><b>Pilot Service Information:</b></p>
                          <div class ="row">
                            <div class = "col">
                              <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                              <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                            </div>
                            <div class = "col">
                              <p><b>TO:</b> '.$csgoPSTO.'</p>  
                              <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                            </div>
                          </div>
                          <br>
                          <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                          <div class = "row">
                            <div class = "col">
                              <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <!-- Saved buttons use the "secure click" command -->
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <!-- Saved buttons are identified by their button IDs -->
                                <input type="hidden" name="hosted_button_id" value="221">
                                <!-- Saved buttons display an appropriate button image. -->
                                <input type="image" name="submit"
                                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                                alt="PayPal - The safer, easier way to pay online">
                                <img alt="" width="1" height="1"
                                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                              </form>
                            </div>
                            <div class = "col" style="margin-right:57%;">
                              <button type="button" class="btn btn-primary btn-sm">
                                <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                              </button>
                            </div>
                          </div>

                          <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                      <b>Report User</b>
                                    </a>
                                  </i>
                                </div>
                              </li>
                            </ul>
                          </div>

                        </div>
                      </div>
                    </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>
                        
                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER ELITE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"></b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER 4"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER ELITE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>
                        
                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SILVER 4"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SILVER ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SILVER ELITE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text">Pilot Service</p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p<b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "SILVER ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "SILVER ELITE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "SILVER ELITE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distingguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>
                      
                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>
                      
                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:<b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>
                      
                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>
                      
                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM</b>: '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>
                      
                      </div>
                    </div>
                  </div> 
                '; 
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';        
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                              <p><b>TO:</b> '.$csgoPSTO.'</p>  
                              <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>
                              
                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE MASTER" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE MASTER" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE MASTER" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SUPREME MASTER FIRSTCLASS" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master First Class" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SUPREME MASTER FIRSTCLASS" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master First Class" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GLOBAL ELITE" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
                
                        <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                                
                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:57%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>

                        <div class="btn-group" style="position:absolute;left: 595px;top: 18px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportCSGOPilotService.php? reportCSGOPilotServiceID='.$csgoPilotServiceID.'">
                                    <b>Report User</b>
                                  </a>
                                </i>
                              </div>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else{
                echo '
                  <div class = "container">
                    <div class="alert alert-danger" style="float:left;height:90px;width: 69.5%;margin-left:100px;" role="alert">
                      <p style="text-align: center;">
                      <b>Attention !</b> According to new rules of Steam, non-Prime CS:GO accounts will not be able to play ranked games.
                      New accounts must buy CS:GO from Steam market to be Prime in CS:GO.<br> Please <a href = "https://store.steampowered.com/news/app/730/view/3059613232566173082" target="_blank" rel="noopener noreferrer">click here</a> to read detailed explanation.</b>
                      </p>
                    </div>
                  </div>    
                ';
              } 
            }
          } 
        ?>
      </div>
    </div>    
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>

