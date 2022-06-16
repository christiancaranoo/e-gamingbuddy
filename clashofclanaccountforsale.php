<?php
//connect to the database
include 'connectDatabase.php';
//session start from the database
session_start();
$messageFailed="";
$messageSuccess="";
$messageNotValidURL="";
//checking if session start is ended
if(!isset($_SESSION['username'])){//if truee
  header("Location:index.php");
}else{//if false
  //assigning session username as variable
  $useruserName = $_SESSION['username'];
  if(isset($_POST['clashofclansellaccount'])){
    $clashofclanLVL = mysqli_real_escape_string($conn,$_POST['clashofclanLVL']);
    $clashofclanGem = mysqli_real_escape_string($conn,$_POST['clashofclanGem']);
    $clashofclanTownHallLVL = mysqli_real_escape_string($conn,$_POST['clashofclanTownHallLVL']);
    $clashofclanbarbariankingLVL = mysqli_real_escape_string($conn,$_POST['clashofclanbarbariankingLVL']);
    $clashofclanqueenarcherLVL = mysqli_real_escape_string($conn,$_POST['clashofclanqueenarcherLVL']);
    $clashofclangrandwardenLVL = mysqli_real_escape_string($conn,$_POST['clashofclangrandwardenLVL']);
    $clashofclanroyalchampionLVL = mysqli_real_escape_string($conn,$_POST['clashofclanroyalchampionLVL']);
    $clashofclanbattlemachineLVL = mysqli_real_escape_string($conn,$_POST['clashofclanbattlemachineLVL']);
    $clashofclanPrice = mysqli_real_escape_string($conn,$_POST['clashofclanPrice']);


    //storing image 
    //storing image clashofclan HomeVillage Information
    $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
    $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
    $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
    $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
    //file path
    //to store images to the folder
    $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
    $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
    $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
    $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
    $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
    move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

    //storing image
    //storing image clashofclan BuilderHall Information
    $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
    $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
    $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
    $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
    //file path
    //to store images to the folder
    $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
    $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
    $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
    $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
    $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
    move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

    //storing image
    //storing image clashofclan TownHall Base
    $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
    $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
    $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
    $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
    //file path
    //to store images to the folder
    $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
    $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
    $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
    $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
    $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
    move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);

    //storing image
    //storing image clash of clan Builder Hall Base
    $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
    $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
    $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
    $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
    //file path
    //to store images to the folder
    $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
    $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
    $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
    $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
    $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
    move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);

    $sql = "INSERT INTO `clashofclansellaccount` (USER_ID,CLASHOFCLAN_LEVEL,
    CLASHOFCLAN_GEM,	CLASHOFCLAN_TOWNHALLLVL, CLASHOFCLAN_BARBARIANKINGLVL,
    CLASHOFCLAN_ARCHERQUEENLVL,	CLASHOFCLAN_GRANDWARDENLVL,
    CLASHOFCLAN_ROYALCHAMPIONLVL,	CLASHOFCLAN_BATTLEMACHINELVL, CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG,
    CLASHOFCLAN_BUILDERBASEINFORMATIONIMG, CLASHOFCLAN_TOWNHALLBASEIMG,
    CLASHOFCLAN_BUILDERBASEIMG,	CLASHOFCLAN_PRICE) VALUES 
    ((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
    '$clashofclanLVL', '$clashofclanGem', '$clashofclanTownHallLVL',
    '$clashofclanbarbariankingLVL','$clashofclanqueenarcherLVL',
    '$clashofclangrandwardenLVL', '$clashofclanroyalchampionLVL',
    '$clashofclanbattlemachineLVL','$clashofclanHomeVillageInformationIMG',
    '$clashofclanBuilderBaseInformationIMG','$clashofclanTownHallbaseIMG',
    '$clashofclanBuilderHallBaseIMG', '$clashofclanPrice')";
       
    $result = mysqli_query($conn,$sql);
    if($result){
      $messageSuccess = "Successfully Clash of Clan sell account";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>"; 
    }else{
      $messageFailed = "Unsuccessful Clash of Clan sell account please try again";
      echo "<script type='text/javascript'>alert('$messageFailed');</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Clash of Clan Account for Sale</title>
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel="stylesheet" href="css/homepagedropdownav.css">
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <!--BOOTSTRAP 4 EXTENSION-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--BOOTSTRAP 4 AND 5 EXTENSION-->
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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
        <a class="nav-link" href="logout.php" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy Clash of Clan Account</h2>
        </div>
        <!--END 1ST FLEX CODE-->
        <!--START 2ND FLEX CODE-->
        <div class="p-2">
          <p style="color: #6e706f;font-family: 'Poppins',sans-serif;color: #6e706f;font-size: 16px;">You want to sell account?</p>
        </div>
        <!--END 2ND FLEX CODE-->
        <!--START 3RD FLEX CODE-->
        <div class="p-2">
          <a href = "#" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Click Here</a>
          <!--WHERE USER CAN SELL DOTA 2 ITEMS-->
          <form method="post" enctype="multipart/form-data">  
            <!--START MODAL CODE-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--START MODAL DIALOG-->
              <div class="modal-dialog" role="document">
                <!--START MODAL CONTENT-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src = "image/clashofclan.jpg" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Clash of Clan Sell Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Account Level:</b></label>
                      <input type="text" name="clashofclanLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Level here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Gem:</b></label>
                      <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> If you don't have the gem type '0'.</small>
                      <input type="text" name="clashofclanGem" class="form-control" id="formGroupExampleInput" placeholder="Input Gem here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Townhall Level</b></label>
                      <select class="form-select" name="clashofclanTownHallLVL" aria-label="Default select example">
                        <!--OPTION LIST CLASH OF CLAN-->
                        <option value="TOWNHALL 1" selected="selected">TOWNHALL 1</option>
                        <option value="TOWNHALL 2" selected="selected">TOWNHALL 2</option>
                        <option value="TOWNHALL 3" selected="selected">TOWNHALL 3</option>
                        <option value="TOWNHALL 4" selected="selected">TOWNHALL 4</option>
                        <option value="TOWNHALL 5" selected="selected">TOWNHALL 5</option>
                        <option value="TOWNHALL 6" selected="selected">TOWNHALL 6</option>
                        <option value="TOWNHALL 7" selected="selected">TOWNHALL 7</option>
                        <option value="TOWNHALL 8" selected="selected">TOWNHALL 8</option>
                        <option value="TOWNHALL 9" selected="selected">TOWNHALL 9</option>
                        <option value="TOWNHALL 10" selected="selected">TOWNHALL 10</option>
                        <option value="TOWNHALL 11" selected="selected">TOWNHALL 11</option>
                        <option value="TOWNHALL 12" selected="selected">TOWNHALL 12</option>
                        <option value="TOWNHALL 13" selected="selected">TOWNHALL 13</option>
                        <option value="TOWNHALL 14" selected="selected">TOWNHALL 14</option>
                      </select> 
                    </div>
                    <div class="form-group">
                      <div class = "row">
                        <div class = "col-sm">
                          <label for="message-text" class="col-form-label"><b>Hero Level:</b></label>
                          <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Input level of each hero.</small>
                          <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> If you don't have the hero type '0' on their level.</small>
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <div class = "row">
                          <div class = "col-sm">
                            <img src = "image/barbariankingclashofclan.png" width="45" height="45">
                            <label for="message-text" class="col-form-label"  style="font-weight: 500;"><b>Barbarian King</b></label>
                            <br>
                            <input type="text" name="clashofclanbarbariankingLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Barbarian King Level here" autocomplete="off" required>
                          </div>      
                          <div class = "col-sm">
                            <img src = "image/queenarcherclashofclan.jpg" width="45" height="45">
                            <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Queen Archer</b></label>
                            <input type="text" name="clashofclanqueenarcherLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Queen Archer Level here" autocomplete="off" required>
                          </div>
                        </div>   
                        <br>
                        <div class = "row">
                          <div class = "col-sm">
                            <img src = "image/grandwardenclashofclan.png" width="45" height="45">
                            <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Grand Warden</b></label>
                            <input type="text" name="clashofclangrandwardenLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Grand Warden Level here" autocomplete="off" required>
                          </div>      
                          <div class = "col-sm">
                            <img src = "image/royalchampionclashofclan.jpg" width="45" height="45">
                            <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Royal Champion</b></label>
                            <input type="text" name="clashofclanroyalchampionLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Royal Champion Level here" autocomplete="off" required>
                          </div>
                        </div>  
                        <br>
                        <div class = "row">
                          <div class = "col-sm">
                            <img src = "image/battlemachineclashofclan.png" width="45" height="45">
                            <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Battle Machine</b></label>
                            <input type="text" name="clashofclanbattlemachineLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Battle Machine Level here" autocomplete="off" required>
                          </div>
                          <div class = "col-sm">
                          </div>
                        </div>         
                      </div>
                      <label><b>Upload Photo</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> You can upload multiple photo the more photo much better.</small></label>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Upload Photo of Home Village Information</b></label>
                        <div class="mb-3">
                          <input class="form-control" name="clashofclanHomeVillageInformationIMG" type="file" id="formFile" accept="image/*" required autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Upload Photo of Builder Base Information</b></label>
                        <div class="mb-3">
                          <input class="form-control" name="clashofclanBuilderBaseInformationIMG" type="file" id="formFile" accept="image/*" required autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Upload Photo of Townhall Base</b></label>
                        <div class="mb-3">
                          <input class="form-control" name="clashofclanTownHallbaseIMG" type="file" id="formFile" accept="image/*" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Upload Photo of Builderhall Base</b></label>
                        <div class="mb-3">
                          <input class="form-control" name="clashofclanBuilderHallBaseIMG" type="file" id="formFile" accept="image/*" required autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price:</b></label>
                        <input type="text" name="clashofclanPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" name="clashofclansellaccount" class="btn btn-primary" value="SELL ACCOUNT">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                    </div>
                  </div>
                  <!--END MODAL CONTENT-->
                </div>
                <!--END MODAL DIALOG-->
              </div>
              <!--END MODAL CODE-->
            </form>
          </div>
          <!--END 3RD FLEX CODE-->
        </div>
        <!--END WHOLE FLEX CODE-->
      </div>
      <!--END 3RD CONTAINER CODE-->
            
      <!--START CODE FOR CONTAINER FOR THE SEARCH FILTER-->
      <div class = "container" style="float: left;width: 322px;height: 1350vh;overflow-y: auto;padding-top: 20px;top: 56px;">
        <div class="btn-group-vertical">
          <h5 style = "font-size: medium">Price</h5>
          <div class = "row">
            <div class = "col-sm">
              <select class="form-select" aria-label="Default select example" style="width:189px;">
                <!--OPTION LIST PRICE CLASH OF CLAN-->
                <option value="LOWEST PRICE">LOWEST PRICE</option>
                <option value="HIGHEST PRICE">HIGHEST PRICE</option>
              </select>  
              <br>
              <button type="submit" class="btn btn-primary btn-sm" style="width:189px;"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
            </div>
          </div>
        </div>
      </div>  
      <!--END CLASH OF CLAN OPTION LIST CODE--> 

      <?php 
        $sql = "SELECT
        b.CLASHOFCLAN_ID,
        concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
        b.CLASHOFCLAN_LEVEL,
        b.CLASHOFCLAN_GEM,
        b.CLASHOFCLAN_TOWNHALLLVL,
        b.CLASHOFCLAN_BARBARIANKINGLVL,
        b.CLASHOFCLAN_ARCHERQUEENLVL,
        b.CLASHOFCLAN_GRANDWARDENLVL,
        b.CLASHOFCLAN_ROYALCHAMPIONLVL,
        b.CLASHOFCLAN_BATTLEMACHINELVL,
        b.CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG,
        b.CLASHOFCLAN_BUILDERBASEINFORMATIONIMG,
        b.CLASHOFCLAN_TOWNHALLBASEIMG,
        b.CLASHOFCLAN_BUILDERBASEIMG,
        b.CLASHOFCLAN_PRICE
        FROM
        clashofclansellaccount b, 
        users u
        WHERE b.USER_ID = u.USER_ID";
        $result = mysqli_query($conn,$sql);

        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dbclashofclansellaccountID = $row['CLASHOFCLAN_ID'];
            $userID = $row['Name'];
            $dbclashofclanLVL = $row['CLASHOFCLAN_LEVEL'];
            $dbclashofclanGem = $row['CLASHOFCLAN_GEM'];
            $dbclashofclanTownHallLVL = $row['CLASHOFCLAN_TOWNHALLLVL'];
            $dbclashofclanBarbarianKingLVL = $row['CLASHOFCLAN_BARBARIANKINGLVL'];
            $dbclashofclanQueenArcherLVL = $row['CLASHOFCLAN_ARCHERQUEENLVL'];
            $dbclashofclanGrandWardenLVL = $row['CLASHOFCLAN_GRANDWARDENLVL'];
            $dbclashofclanRoyalChampionLVL = $row['CLASHOFCLAN_ROYALCHAMPIONLVL'];
            $dbclashofclanBattleMachineLVL = $row['CLASHOFCLAN_BATTLEMACHINELVL'];
            $dbclashofclanHomeVillageInformationIMG = $row['CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG'];
            $dbclashofclanBuilderBaseInformationIMG = $row['CLASHOFCLAN_BUILDERBASEINFORMATIONIMG'];
            $dbclashofclanTownHallbaseIMG = $row['CLASHOFCLAN_TOWNHALLBASEIMG'];
            $dbclashofclanuserBuilderHallIMG = $row['CLASHOFCLAN_BUILDERBASEIMG'];
            $dbclashofclanuserPrice = $row['CLASHOFCLAN_PRICE'];

            if($dbclashofclanTownHallLVL == "TOWNHALL 1"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL1.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 2"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL2.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>
                          
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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 3"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL3.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 4"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL4.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 5"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL5.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 6"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL5.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 7"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL7.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 8"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL8.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 9"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL9.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>
                          
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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 10"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL10.jpg" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 11"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL11.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>
                          
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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 12"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL12.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 13"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL13.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else if($dbclashofclanTownHallLVL == "TOWNHALL 14"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">

                    <div class="col-md-4">
                      <br><br>
                      &emsp;&emsp;
                      <img src = "TOWNHALLIMG/TOWNHALL14.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b><center>'.$dbclashofclanTownHallLVL.'</center></b></p>      
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">

                        <div class ="container">
                          <div class = "row">
                            <div class = "col">
                              <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                              <p><b>Gem:</b> '.$dbclashofclanGem.' <img src = "TOWNHALLIMG/CLASHOFCLANGEM.png" height="30" width="30"></p>
                            </div>
                            <div class = "col">
                              <p><b>Account Level:</b> '.$dbclashofclanLVL.'</p>   
                            </div>
                          </div>
                          <p><b>Hero Level</b></p>
                          <div class = "row">
                            <div class = "col">
                              <p> <img src = "image/barbariankingclashofclan.png" height="30" width="30"> <b>Barbarian King:</b> '.$dbclashofclanBarbarianKingLVL.'</p>
                              <p> <img src = "image/queenarcherclashofclan.jpg" height="30" width="30"> <b>Queen Archer:</b> '.$dbclashofclanQueenArcherLVL.'</p>    
                              <p> <img src = "image/battlemachineclashofclan.png" height="30" width="30"> <b>Battle Machine:</b> '.$dbclashofclanBattleMachineLVL.'</p>
                            </div>
                            <div class = "col">
                              <p> <img src = "image/grandwardenclashofclan.png" height="30" width="30"> <b>Grand Warden:</b> '.$dbclashofclanGrandWardenLVL.'</p>
                              <p> <img src = "image/royalchampionclashofclan.jpg" height="30" width="30"> <b>Royal Champion:</b> '.$dbclashofclanRoyalChampionLVL.'</p>
                            </div> 
                          </div>  
                        </div>
                        
                        <div class = "container">
                          <div class = "row justify-content-start">
                            <p><b>Additional Information with Images:
                              <a href= "viewClashofClanImage.php? viewClashofClanSellAccountID='.$dbclashofclansellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                            </b></p>
                          </div>  
                          <p><b>Price:</b>  '.$dbclashofclanuserPrice.'</p>

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

                          <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>···</b>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <div class = "col">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                    <a href = "reportCOCSellAccount.php? reportCOCSellAccountID='.$dbclashofclansellaccountID.'">
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
                      
                  </div>
                </div>
              ';

            }else{
              echo 'No Clash of Clan Sell Account';
            }
          }
        } 
      ?>

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


