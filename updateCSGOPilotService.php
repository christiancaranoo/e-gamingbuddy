<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
$useruserName = $_SESSION['username'];

$message = "";
$messageIcon = "";
$messageemailAddress = "";
$messageInvalid = "";

$updateCSGOPilotService = $_GET['updateCSGOPilotServiceID'];
$sql = "SELECT * FROM csgopilotservice WHERE CSGO_PILOTSERVICEID = $updateCSGOPilotService";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbcsgoPSFROM = $row['CSGO_PILOTSERVICEFROM'];
$dbcsgoPSTO = $row['CSGO_PILOTSERVICETO'];
$dbcsgoPSPrice = $row['CSGO_PILOTSERVICEPRICE'];

if(isset($_POST['submit'])){
  $csgopilotserviceFROM = mysqli_real_escape_string($conn,$_POST['csgopilotserviceFROM']);
  $csgopilotserviceTO= mysqli_real_escape_string($conn,$_POST['csgopilotserviceTO']);
  $csgopilotservicePrice = mysqli_real_escape_string($conn,$_POST['csgopilotservicePrice']);

  //Checking if the pilot service is valid or not
  //if not invalid 
  //SILVER 1
  if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER 4" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER 3" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER 2" && $csgopilotserviceTO == "SILVER 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER 4" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER 3" && $csgopilotserviceTO == "SILVER 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER 4" && $csgopilotserviceTO == "SILVER 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE" && $csgopilotserviceTO == "SILVER 4"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SILVER ELITE MASTER" && $csgopilotserviceTO == "SILVER ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 1" && $csgopilotserviceTO == "SILVER ELITE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 2" && $csgopilotserviceTO == "GOLD NOVA 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA 3" && $csgopilotserviceTO == "GOLD NOVA 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GOLD NOVA MASTER" && $csgopilotserviceTO == "GOLD NOVA 3"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 1" && $csgopilotserviceTO == "GOLD NOVA MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN 2" && $csgopilotserviceTO == "MASTER GUARDIAN 1"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "MASTER GUARDIAN ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN 2"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgopilotserviceTO == "MASTER GUARDIAN ELITE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE" && $csgopilotserviceTO == "DISTINGUISHED MASTER GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "LEGENDARY EAGLE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "LEGENDARY EAGLE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "LEGENDARY EAGLE MASTER" && $csgopilotserviceTO == "LEGENDARY EAGLE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "LEGENDARY EAGLE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "SUPREME MASTER FIRST CLASS" && $csgopilotserviceTO == "LEGENDARY EAGLE MASTER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else if($csgopilotserviceFROM == "GLOBAL ELITE" && $csgopilotserviceTO == "SUPREME MASTER FIRST CLASS"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid CSGO Pilot Service please try again.</div>";
  }else{
    $sql = "UPDATE csgopilotservice SET CSGO_PILOTSERVICEFROM = '$csgopilotserviceFROM',
    CSGO_PILOTSERVICETO = '$csgopilotserviceTO',
    CSGO_PILOTSERVICEPRICE = '$csgopilotservicePrice' 
    WHERE CSGO_PILOTSERVICEID = $updateCSGOPilotService";
    $result = mysqli_query($conn,$sql);
    if($result){
      $messageSuccess = "Successfully update CSGO pilot service";
      echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventorycsgo.php');</script>";
    }else{
      $messageFailed = "Unsuccessful update CSGO pilot service please try again";
      echo "<script type='text/javascript'>alert('$messageFailed');</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update CSGO Pilot Service</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
  </head>

  <body>

    <div class="wrapper">

      <div class="title">
        <img src="image/csgoicon.jpg" height = "50" width = "50">
        <b>Update CSGO Pilot Service</b>
        <?php echo $message; ?>
      </div>

      <?php echo $messageInvalid;?>

      <p><b>CURRENT PILOT SERVICE</b></p>
      <div class = "form">
        <div class = "row">
          <div class = "col-sm">
            <p><b>FROM:</b></p>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbcsgoPSFROM;?>" disabled>
          </div>
          <div class = "col-sm">
            <p><b>TO:</b></p>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbcsgoPSTO;;?>" disabled>  
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Price:</b></label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbcsgoPSPrice;?>" disabled>
          </div>
        </div>
      </div>
      <br>
      
      <p><b>NEW PILOT SERVICE</b></p>
      <form method = "post" enctype="multipart/form-data">
        <div class = "form">

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

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Price:</b></label>
            <input type="text" name="csgopilotservicePrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
          </div>
                  
          <br>
          <div class="inputfield">
            <input type="submit" value="Update" name="submit" class="btn">
          </div>

          <div class="inputfield">
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
              location.href = 'myinventorycsgo.php'">Back
            </button>
          </div>

        </div>
      </form> 

    </div>	
  </body>
</html>