<?php
include 'connectDatabase.php';
//session start after log in 
session_start();
$messageFail="";
$messageSuccess="";
//if the session is ended it will redirect to the index
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
  //declare $_Session username for storin to the database
  $useruserName = $_SESSION['username'];
  if(isset($_POST['valorantPilotService'])){
    $valorantPSFROM = mysqli_real_escape_string($conn,$_POST['valorantpilotserviceFROM']);
    $valorantPSTO = mysqli_real_escape_string($conn,$_POST['valorantpilotserviceTO']);
    $valorantPSPrice = mysqli_real_escape_string($conn,$_POST['valorantpilotservicePrice']);
       
    /* Checking if the pilot service is invalid or not
    */
    //BRONZE
    if($valorantPSFROM == "RADIANT" && $valorantPSTO == "BRONZE"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "BRONZE"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "DIAMOND" && $valorantPSTO == "BRONZE"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "PLATINUM" && $valorantPSTO == "BRONZE"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "GOLD" && $valorantPSTO == "BRONZE"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "SILVER" && $valorantPSTO == "BRONZE"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
      //SILVER
    }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "SILVER"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "SILVER"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "DIAMOND" && $valorantPSTO == "SILVER"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "PLATINUM" && $valorantPSTO == "SILVER"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "GOLD" && $valorantPSTO == "SILVER"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
      //GOLD
    }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "GOLD"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "GOLD"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "DIAMOND" && $valorantPSTO == "GOLD"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "PLATINUM" && $valorantPSTO == "GOLD"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
      //PLATINUM  
    }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "PLATINUM"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "PLATINUM"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
      //IMMORTAL  
    }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "IMMORTAL"){
      //if true
      $messageFail = "Invalid Valorant Pilot Service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else{//if false it will store to the database
      $sql = "INSERT INTO valorantpilotservice (USER_ID,VALORANT_PILOTSERVICEFROM,
      VALORANT_PILOTSERVICETO,VALORANT_PILOTSERVICEPRICE) VALUES ((SELECT USER_ID FROM users WHERE USER_USERNAME
      = '$useruserName'),'$valorantPSFROM','$valorantPSTO','$valorantPSPrice')";
      $result = mysqli_query($conn,$sql);
      if($result){
        $messageSuccess = "Successfully Valorant pilot service ";
        echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
      }else{
        $messageFail = "Unsuccessful Valorant pilot service please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Valorant Pilot Service</title>
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel="stylesheet" href="css/homepagedropdownav.css">
    <!--BOOTSTRAP 4 EXTENSION-->
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy Valorant Pilot Services</h2>
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
          <!--WHERE USER CAN SELL VALORANT PILOT-->
          <form method="post" enctype="multipart/form-data">  
            <!--START MODAL CODE-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--START MODAL DIALOG-->
              <div class="modal-dialog" role="document">
                <!--START MODAL CONTENT-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src = "image/valorantlogo.png" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Valorant Pilot Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">              
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label"><b>Provide Pilot Service</b></label>
                      <div class = "row">
                        <div class = "col-sm">
                          <p><b>FROM:</b></p>
                          <select class="form-select" name="valorantpilotserviceFROM" aria-label="Default select example">
                            <!--OPTION LIST VALORANT PILOT SERVICES-->
                            <option value="IRON">IRON</option>
                            <option value="BRONZE">BRONZE</option>
                            <option value="SILVER">SILVER</option>
                            <option value="GOLD">GOLD</option>
                            <option value="PLATINUM">PLATINUM</option>
                            <option value="DIAMOND">DIAMOND</option>
                            <option value="IMMORTAL">IMMORTAL</option>
                            <option value="RADIANT">RADIANT</option>
                          </select>                               
                        </div>
                        <br> <br>
                        <div class = "col-sm">
                          <p><b>TO:</b></p>
                          <select class="form-select" name="valorantpilotserviceTO" aria-label="Default select example">
                            <!--OPTION LIST VALORANT PILOT SERVICES-->
                            <option value="IRON">IRON</option>
                            <option value="BRONZE">BRONZE</option>
                            <option value="SILVER">SILVER</option>
                            <option value="GOLD">GOLD</option>
                            <option value="PLATINUM">PLATINUM</option>
                            <option value="DIAMOND">DIAMOND</option>
                            <option value="IMMORTAL">IMMORTAL</option>
                            <option value="RADIANT">RADIANT</option>
                          </select>
                        </div>
                      </div>   
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Price:</b></label>
                      <input type="text" name="valorantpilotservicePrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="PILOT SERVICE" name="valorantPilotService">
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
    <div class = "container" style="float: left;width: 340px;height: 1350px;overflow-y: auto;padding-top: 20px;top: 56px;"> 
      <div class="btn-group-vertical">
        <!--PILOT SERVICES-->
        <h5 style = "font-size: medium">Pilot Service List</h5>
        <!-- START VALORANT PILOT SERVICES LIST-->
        <div class = "row">
          <div class = "col-sm">
            <select class="form-select" aria-label="Default select example">
              <!--OPTION LIST VALORANT PILOT SERVICES-->
              <option value="IRON">IRON</option>
              <option value="BRONZE">BRONZE</option>
              <option value="SILVER">SILVER</option>
              <option value="GOLD">GOLD</option>
              <option value="PLATINUM">PLATINUM</option>
              <option value="DIAMOND">DIAMOND</option>
              <option value="IMMORTAL">IMMORTAL</option>
              <option value="RADIANT">RADIANT</option>
            </select>            
          </div>
          <br><br>
          <p>TO</p>
          <div class = "col-sm">
            <select class="form-select" aria-label="Default select example">
              <!--OPTION LIST VALORANT SERVICES-->
              <option value="IRON">IRON</option>
              <option value="BRONZE">BRONZE</option>
              <option value="SILVER">SILVER</option>
              <option value="GOLD">GOLD</option>
              <option value="PLATINUM">PLATINUM</option>
              <option value="DIAMOND">DIAMOND</option>
              <option value="IMMORTAL">IMMORTAL</option>
              <option value="RADIANT">RADIANT</option>
            </select>
          </div>
        </div>          
        <!--END VALORANT PILOT SERVICES LIST CODE-->
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
    </div>
    <!--DISPLAYING DATA FROM DATABASE-->
    <div class ="container">
      <?php
        $sql = "SELECT
        b.VALORANT_PILOTSERVICEID,
        concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
        b.VALORANT_PILOTSERVICEFROM,
        b.VALORANT_PILOTSERVICETO,
        b.VALORANT_PILOTSERVICEPRICE
        FROM
        valorantpilotservice b, 
        users u
        WHERE b.USER_ID = u.USER_ID";
        $result = mysqli_query($conn,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $valorantpilotServiceID = $row['VALORANT_PILOTSERVICEID'];
            $userID = $row['Name'];
            $valorantPSFROM = $row['VALORANT_PILOTSERVICEFROM'];
            $valorantPSTO = $row['VALORANT_PILOTSERVICETO'];
            $valorantPSPrice = $row['VALORANT_PILOTSERVICEPRICE'];
            //IRON 
            if($valorantPSFROM == "IRON" && $valorantPSTO == "IRON"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                      
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IRON" && $valorantPSTO == "BRONZE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IRON" && $valorantPSTO == "SILVER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IRON" && $valorantPSTO == "GOLD"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IRON" && $valorantPSTO == "PLATINUM"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IRON" && $valorantPSTO == "DIAMOND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IRON" && $valorantPSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IRON" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "BRONZE" && $valorantPSTO == "BRONZE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "BRONZE" && $valorantPSTO == "SILVER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "BRONZE" && $valorantPSTO == "GOLD"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "BRONZE" && $valorantPSTO == "PLATINUM"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "BRONZE" && $valorantPSTO == "DIAMOND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "BRONZE" && $valorantPSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "BRONZE" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "SILVER" && $valorantPSTO == "SILVER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "SILVER" && $valorantPSTO == "GOLD"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "SILVER" && $valorantPSTO == "PLATINUM"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "SILVER" && $valorantPSTO == "DIAMOND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "SILVER" && $valorantPSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "SILVER" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "GOLD" && $valorantPSTO == "GOLD"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "GOLD" && $valorantPSTO == "PLATINUM"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "GOLD" && $valorantPSTO == "DIAMOND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "GOLD" && $valorantPSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "GOLD" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "PLATINUM" && $valorantPSTO == "PLATINUM"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "PLATINUM" && $valorantPSTO == "DIAMOND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "PLATINUM" && $valorantPSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "PLATINUM" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "DIAMOND" && $valorantPSTO == "DIAMOND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "DIAMOND" && $valorantPSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "DIAMOND" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:23.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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
            }else if ($valorantPSFROM == "RADIANT" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
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
                          <b>??????</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportValorantPilotService.php? reportValorantPilotServiceID='.$valorantpilotServiceID.'">
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

