<?php
include 'connectDatabase.php';
//session start from log in form
session_start();
$messageInvalid="";
$messageSuccess = "";
$messageFailed = "";
//check if the session is still running
if(!isset($_SESSION['username'])){
  //back to the login form
  header("Location:index.php");
}else{
  //assigning session user as a variable
  $useruserName = $_SESSION['username'];
  if(isset($_POST['mobilelegendsPilotService'])){
    $mlpilotserviceFROM = $_POST['mobilelegendsPilotServiceFROM'];
    $mlpilotserviceTO = $_POST['mobilelegendsPilotServiceTO'];
    $mlpilotservicePRICE = $_POST['mobilelegendsPilotServicePrice'];
    //checking if the mobile legends pilot is service
    //if true
    //WARRIOR
    if($mlpilotserviceFROM == "ELITE" && $mlpilotserviceTO == "WARRIOR"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MASTER" && $mlpilotserviceTO == "WARRIOR"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "GRANDMASTER" && $mlpilotserviceTO == "WARRIOR"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if ($mlpilotserviceFROM == "EPIC" && $mlpilotserviceTO == "WARRIOR"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "WARRIOR"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "WARRIOR"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "WARRIOR"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MASTER" && $mlpilotserviceTO == "ELITE"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if ($mlpilotserviceFROM == "GRANDMASTER" && $mlpilotserviceTO == "ELITE"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "ELITE"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "ELITE"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "ELITE"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "GRANDMASTER" && $mlpilotserviceTO == "MASTER"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "MASTER"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "MASTER"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "MASTER"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "GRANDMASTER"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "GRANDMASTER"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "GRANDMASTER"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "LEGEND"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "LEGEND"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "MYTHIC"){
      $messageInvalid=  "Invalid Mobile Legends pilot service try again.";
      echo"<script type='text/javascript'>alert('$messageInvalid');</script>";
    }else{
      //storing to the database
      $sql = "INSERT INTO mlpilotservice (USER_ID,ML_PILOTSERVICEFROM,ML_PILOTSERVICETO,ML_PILOTSERVICEPRICE)
      VALUES ((SELECT USER_ID FROM users WHERE USER_USERNAME = '$useruserName'),'$mlpilotserviceFROM','$mlpilotserviceTO','$mlpilotservicePRICE')";
      $result = mysqli_query($conn,$sql);
      //checking if successfully insert
      if($result){//if true
        $messageSuccess = "Successfully Mobile Legends pilot service";
        echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
      }else{//false
        $messageFailed = "Unsuccessful Mobile Legends pilot service please try again";
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
    <title>Mobile Legends Pilot Service</title>
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--BOOTSTRAP 4 EXTENSION-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy Mobile Legends Pilot Services</h2>
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
          <!--WHERE USER CAN SELL DOTA 2 ITEMS-->
          <form method="post" enctype="multipart/form-data">
            <!--START MODAL CODE-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--START MODAL DIALOG-->
              <div class="modal-dialog" role="document">
                <!--START MODAL CONTENT-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src = "image/mobilelegends.jpg" width="35">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Mobile Legends Pilot Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body"> 
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">PROVIDE PILOT SERVICE</label>
                      <div class = "row">
                        <div class = "col-sm">
                          <p><b>FROM:</b></p>
                          <select class="form-select" name="mobilelegendsPilotServiceFROM" aria-label="Default select example">
                            <!--OPTION LIST MOBILE LEGENDS PILOT SERVICES-->
                            <option value="WARRIOR">WARRIOR</option>
                            <option value="ELITE">ELITE</option>
                            <option value="MASTER">MASTER</option>
                            <option value="GRANDMASTER">GRANDMASTER</option>
                            <option value="EPIC">EPIC</option>
                            <option value="LEGEND">LEGEND</option>
                            <option value="MYTHIC">MYTHIC</option>
                            <option value="MYTHICAL GLORY">MYTHICAL GLORY</option>
                          </select>     
                        </div>
                        <br> <br>
                        <div class = "col-sm">
                          <p><b>TO:</b></p>
                          <select class="form-select" name="mobilelegendsPilotServiceTO" aria-label="Default select example">
                            <!--OPTION LIST MOBILE LEGENDS PILOT SERVICES-->
                            <option value="WARRIOR">WARRIOR</option>
                            <option value="ELITE">ELITE</option>
                            <option value="MASTER">MASTER</option>
                            <option value="GRANDMASTER">GRANDMASTER</option>
                            <option value="EPIC">EPIC</option>
                            <option value="LEGEND">LEGEND</option>
                            <option value="MYTHIC">MYTHIC</option>
                            <option value="MYTHICAL GLORY">MYTHICAL GLORY</option>
                          </select>
                        </div>
                      </div>   
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Price:</b></label>
                      <input type="text" name="mobilelegendsPilotServicePrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="modal-footer"> 
                    <input type="submit" name="mobilelegendsPilotService" class="btn btn-primary" value="PILOT SERVICE">
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
    <div class = "container" style="float: left;width: 340px;height: 1350vh;overflow-y: auto;padding-top: 20px;top: 56px;">   
      
      <div class="btn-group-vertical">
        <!--LIST OF HERO-->
        <h5 style = "font-size: medium">Pilot Service List</h5>
        <!-- START DOTA 2 PILOT SERVICES LIST-->
        <div class = "row">
          <div class = "col-sm">
            <select class="form-select" aria-label="Default select example">
              <!--OPTION LIST DOTA 2 PILOT SERVICES-->
              <option value="WARRIOR">WARRIOR</option>
              <option value="ELITE">ELITE</option>
              <option value="MASTER">MASTER</option>
              <option value="GRANDMASTER">GRANDMASTER</option>
              <option value="EPIC">EPIC</option>
              <option value="LEGEND">LEGEND</option>
              <option value="MYTHIC">MYTHIC</option>
              <option value="MYTHICALGLORY">MYTHICAL GLORY</option>
            </select> 
          </div>
          <br> <br>
          <p>TO</p>
          <div class = "col-sm">
            <select class="form-select" aria-label="Default select example">
              <!--OPTION LIST DOTA 2 PILOT SERVICES-->
              <option value="WARRIOR">WARRIOR</option>
              <option value="ELITE">ELITE</option>
              <option value="MASTER">MASTER</option>
              <option value="GRANDMASTER">GRANDMASTER</option>
              <option value="EPIC">EPIC</option>
              <option value="LEGEND">LEGEND</option>
              <option value="MYTHIC">MYTHIC</option>
              <option value="MYTHICALGLORY">MYTHICAL GLORY</option>
            </select>
          </div>
        </div>          
        <!--END DOTA 2 PILOT SERVICES LIST CODE-->
      </div>

      <div class = "row">
        <div class = "col-sm">
          <br>
          <h5 style = "font-size: medium">Price</h5>
          <select class="form-select" aria-label="Default select example" style="width:312px;">
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
        //select mlpilotservice table from database
        $sql = "SELECT
        b.ML_PILOTSERVICEID,
        concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
        b.ML_PILOTSERVICEFROM,
        b.ML_PILOTSERVICETO,
        b.ML_PILOTSERVICEPRICE
        FROM
        mlpilotservice b, 
        users u
        WHERE b.USER_ID = u.USER_ID";
        $result = mysqli_query($conn,$sql);
                
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $mlID = $row['ML_PILOTSERVICEID'];
            $userID = $row['Name'];
            $mlPSFROM = $row['ML_PILOTSERVICEFROM'];
            $mlPSTO = $row['ML_PILOTSERVICETO'];
            $mlPSPrice = $row['ML_PILOTSERVICEPRICE'];
            //if warrior to warrior
            //warrior
            if($mlPSFROM == "WARRIOR" && $mlPSTO == "WARRIOR"){//if true 
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "WARRIOR" && $mlPSTO == "ELITE"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "WARRIOR" && $mlPSTO == "MASTER"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMasterEliteIMG.png" alt="Master" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "WARRIOR" && $mlPSTO == "GRANDMASTER"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grand Master" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "WARRIOR" && $mlPSTO == "EPIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "WARRIOR" && $mlPSTO == "LEGEND"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "WARRIOR" && $mlPSTO == "MYTHIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "WARRIOR" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "ELITE" && $mlPSTO == "ELITE"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "ELITE" && $mlPSTO == "MASTER"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "ELITE" && $mlPSTO == "GRANDMASTER"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "ELITE" && $mlPSTO == "EPIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "ELITE" && $mlPSTO == "LEGEND"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "ELITE" && $mlPSTO == "MYTHIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "ELITE" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEliteIMG.png" alt="Elite" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MASTER" && $mlPSTO == "MASTER"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MASTER" && $mlPSTO == "GRANDMASTER"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MASTER" && $mlPSTO == "EPIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MASTER" && $mlPSTO == "LEGEND"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MASTER" && $mlPSTO == "MYTHIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MASTER" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMasterIMG.png" alt="Master" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "GRANDMASTER" && $mlPSTO == "GRANDMASTER"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "GRANDMASTER" && $mlPSTO == "EPIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "GRANDMASTER" && $mlPSTO == "LEGEND"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "GRANDMASTER" && $mlPSTO == "MYTHIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "GRANDMASTER" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsGrandmasterIMG.png" alt="Grandmaster" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "EPIC" && $mlPSTO == "EPIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "EPIC" && $mlPSTO == "LEGEND"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "EPIC" && $mlPSTO == "MYTHIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "EPIC" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsEpicIMG.png" alt="Epic" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "LEGEND" && $mlPSTO == "LEGEND"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "LEGEND" && $mlPSTO == "MYTHIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "LEGEND" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsLegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MYTHIC" && $mlPSTO == "MYTHIC"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MYTHIC" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMythicIMG.png" alt="Mythic" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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
            }else if($mlPSFROM == "MYTHICAL GLORY" && $mlPSTO == "MYTHICAL GLORY"){
              //display
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p><b>Pilot Servicer Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" alt="Mythical Glory" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>
                            
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
                                <a href = "reportMLBBPilotService.php? reportMLBBPilotServiceID='.$mlID.'">
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

