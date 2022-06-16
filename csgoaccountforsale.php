<?php
//connect to the database
include 'connectDatabase.php';
//session start from the database
session_start();
$messageFailed="";
$messageSuccess="";
$messageNotValidURL="";
//checking if the session start if ended
if(!isset($_SESSION['username'])){
  //if true redirect to the log in
  header("Location:index.php");
}else{//if false
  //assigning session username as variable
  $useruserName = $_SESSION['username'];
  if(isset($_POST['csgosellaccount'])){
    //collecting data from the seller
    $csgoSteamID = mysqli_real_escape_string($conn,$_POST['csgosellaccountSteamID']);
    $csgoMedal = mysqli_real_escape_string($conn,$_POST['csgosellaccountMedal']);
    $csgoRank = mysqli_real_escape_string($conn,$_POST['csgosellaccountRank']);
    $csgoPrimeStatus = mysqli_real_escape_string($conn,$_POST['csgosellaccountPrimeStatus']);
    $csgoSteamAddressInventory = mysqli_real_escape_string($conn,$_POST['csgosellaccountSteamAddressCSGOInventory']);
    $csgoPrice = mysqli_real_escape_string($conn,$_POST['csgosellaccountPrice']);

    //checking if the steam address is valid
    if (filter_var($csgoSteamAddressInventory, FILTER_VALIDATE_URL) === FALSE) {//if steam address is not valid
      $messageNotValidURL = "Invalid Steam URL please try again";
      echo "<script type='text/javascript'>alert('$messageNotValidURL');</script>";
    }else{//if valid

      //storing image Steam ID 
      $csgosteamIDImageName = $_FILES['csgosellaccountSteamIDIMG']['name'];
      $csgosteamIDImageType = $_FILES['csgosellaccountSteamIDIMG']['type'];
      $csgosteamIDImageTempLoc = $_FILES['csgosellaccountSteamIDIMG']['tmp_name'];
      $csgosteamIDImageSize = $_FILES['csgosellaccountSteamIDIMG']['size'];

      //file path
      //to store images to the folder
      $csgosteamIDIMG = addslashes(file_get_contents($_FILES['csgosellaccountSteamIDIMG']['tmp_name']));
      $csgosteamIDimg_ex = pathinfo($csgosteamIDImageName, PATHINFO_EXTENSION);
      $csgosteamIDimg_ex_lc = strtolower($csgosteamIDimg_ex);
      $csgosteamIDnew_img_name = uniqid("IMG-",true).'.'.$csgosteamIDimg_ex_lc; 
      $csgosteamIDimg_upload_path = 'csgoIMGDb/'.$csgosteamIDnew_img_name;
      move_uploaded_file($csgosteamIDImageTempLoc,$csgosteamIDimg_upload_path);

      //storing image CSGO RANK PRIME STATUS
      $csgorankprimestatusImageName = $_FILES['csgosellaccountRankPrimeStatusIMG']['name'];
      $csgorankprimestatusImageType = $_FILES['csgosellaccountRankPrimeStatusIMG']['type'];
      $csgorankprimestatusImageTempLoc = $_FILES['csgosellaccountRankPrimeStatusIMG']['tmp_name'];
      $csgorankprimestatusImageSize = $_FILES['csgosellaccountRankPrimeStatusIMG']['size'];
      //file path
      //to store images to the folder
      $csgoRankPrimeStatusIMG = addslashes(file_get_contents($_FILES['csgosellaccountRankPrimeStatusIMG']['tmp_name']));
      $csgoRankPrimeStatusimg_ex = pathinfo($csgorankprimestatusImageName, PATHINFO_EXTENSION);
      $csgoRankPrimeStatusimg_ex_lc = strtolower($csgoRankPrimeStatusimg_ex);
      $csgoRankPrimeStatusnew_img_name = uniqid("IMG-",true).'.'.$csgoRankPrimeStatusimg_ex_lc; 
      $csgoRankPrimeStatusimg_upload_path = 'csgoIMGDb/'.$csgoRankPrimeStatusnew_img_name;
      move_uploaded_file($csgorankprimestatusImageTempLoc,$csgoRankPrimeStatusimg_upload_path);

      $sql = "INSERT INTO csgosellaccount (USER_ID,CSGO_STEAMID,CSGO_SELLACCOUNTMEDAL,
      CSGO_SELLACCOUNTRANK,CSGO_PRIMESTATUS,CSGO_STEAMADDRESS,CSGO_STEAMIDIMG,
      CSGO_SELLACCOUNTRANKPRIMESTATUSIMG,CSGO_SELLACCOUNTPRICE)
      VALUES ((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),'$csgoSteamID',
      '$csgoMedal','$csgoRank','$csgoPrimeStatus','$csgoSteamAddressInventory','$csgosteamIDIMG',
      '$csgoRankPrimeStatusIMG','$csgoPrice')";
      $result = mysqli_query($conn,$sql);
      if($result){
        $messageSuccess = "Successfully CSGO sell account";
        echo "<script type='text/javascript'>alert('$messageSuccess');</script>";  
      }else{
        $messageFailed = "Unsuccessful CSGO sell account please try again";
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
    <title>CSGO Account for Sale</title>
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy CSGO Account</h2>
        </div>
        <!--END 1ST FLEX CODE-->
        <!--START 2ND FLEX CODE-->
        <div class="p-2">
          <p style="color: #6e706f;font-family: 'Poppins',sans-serif;color: #6e706f;font-size: 16px;">You want to sell account?</p>
        </div>
        <!--END 2ND FLEX CODE-->
        <!--START 3RD FLEX CODE-->
        <div class="p-2">
          <a href = "" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Click Here</a>
          <!--WHERE USER CAN SELL CSGO ITEMS-->
          <!--START MODAL CODE-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="POST" enctype="multipart/form-data">  
              <!--START MODAL DIALOG-->
              <div class="modal-dialog" role="document">
                <!--START MODAL CONTENT-->
                <div class="modal-content">

                  <div class="modal-header">
                    <img src = "image/csgoicon.jpg" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; CSGO Sell Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  
                  <div class="modal-body">    
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Steam ID:</b></label>
                      <input type="text" name="csgosellaccountSteamID" class="form-control" id="formGroupExampleInput" placeholder="Input Steam ID here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Medal:</b></label>
                      <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Input medals all you have.</small>
                      <input type="text" name="csgosellaccountMedal" class="form-control" id="formGroupExampleInput" placeholder="Input # of Medals here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label"><b>Rank:</b></label>
                      <div class = "row">
                        <div class = "col-sm">
                          <select class="form-select" name="csgosellaccountRank" aria-label="Default select example">
                            <!--OPTION LIST CSGO PILOT SERVICES-->
                            <option value="SILVER 1" selected="selected">SILVER 1</option>
                            <option value="SILVER 2" selected="selected">SILVER 2</option>
                            <option value="SILVER 3" selected="selected">SILVER 3</option>
                            <option value="SILVER 4" selected="selected">SILVER 4</option>
                            <option value="SILVER ELITE" selected="selected">SILVER ELITE</option>
                            <option value="SILVER ELITE MASTER" selected="selected">SILVER ELITE MASTER</option>
                            <option value="GOLD NOVA 1" selected="selected">GOLD NOVA 1</option>
                            <option value="GOLD NOVA 2" selected="selected">GOLD NOVA 2</option>
                            <option value="GOLD NOVA 3" selected="selected">GOLD NOVA 3</option>
                            <option value="GOLD NOVA MASTER" selected="selected">GOLD NOVA MASTER</option>
                            <option value="MASTER GUARDIAN 1" selected="selected">MASTER GUARDIAN 1</option>
                            <option value="MASTER GUARDIAN 2" selected="selected">MASTER GUARDIAN 2</option>
                            <option value="MASTER GUARDIAN ELITE" selected="selected">MASTER GUARDIAN ELITE</option>
                            <option value="DISTINGUISHED MASTER GUARDIAN" selected="selected">DISTINGUISHED MASTER GUARDIAN</option>
                            <option value="LEGENDARY EAGLE" selected="selected">LEGENDARY EAGLE</option>
                            <option value="LEGENDARY EAGLE MASTER" selected="selected">LEGENDARY EAGLE MASTER</option>
                            <option value="SUPREME MASTER FIRSTCLASS" selected="selected">SUPREME MASTER FIRSTCLASS</option>
                            <option value="GLOBAL ELITE" selected="selected">GLOBAL ELITE</option>
                          </select>
                        </div>
                        <br><br>
                        <label for="recipient-name" class="col-form-label"><b>Prime Status:</b></label>
                        <div class = "col-sm">
                          <select class="form-select" name="csgosellaccountPrimeStatus" aria-label="Default select example">
                            <!--OPTION LIST CSGO PILOT SERVICES-->
                            <option value="PRIME" selected="selected">PRIME</option>
                            <option value="NOT PRIME" selected="selected">NOT PRIME</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <br>
                          <label for="message-text" class="col-form-label"><b>Steam URL - CSGO Inventory:</b></label>
                          <input type="text" class="form-control" id="formGroupExampleInput" name="csgosellaccountSteamAddressCSGOInventory" placeholder="Input Steam Address CSGO Inventory here" autocomplete="off" required>
                        </div>
                      </div>   
                    </div>
                    <label><b>Upload Photo</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Upload photo of your account.</small></label>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload Photo of your Steam ID (Required)</b></label>
                      <div class="mb-3">
                        <input class="form-control" name="csgosellaccountSteamIDIMG" type="file" id="formFile" accept="image/*" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload Photo of your CSGO Rank with Prime Status (Required)</b></label>
                      <div class="mb-3">
                        <input class="form-control" name="csgosellaccountRankPrimeStatusIMG" type="file" id="formFile" accept="image/*" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Price:</b></label>
                      <input type="text" name="csgosellaccountPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                    </div>
                  </div>

                  <div class="modal-footer">         
                    <input type="submit" class="btn btn-primary" name="csgosellaccount" value="SELL ACCOUNT">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                  </div>

                </div>
                <!--END MODAL CONTENT-->
              </div>
              <!--END MODAL DIALOG-->
            </form>
          </div>
          <!--END MODAL CODE-->
        </div>
        <!--END 3RD FLEX CODE-->
      </div>
      <!--END WHOLE FLEX CODE-->
    </div>
    <!--END 3RD CONTAINER CODE-->
       
    <!--START CODE FOR CONTAINER FOR THE SEARCH FILTER-->
    <div class = "container" style="float: left;width: 320px;height: 1350vh;overflow-y: auto;padding-top: 20px;top: 56px;">
      <div class="btn-group-vertical">
        <div class = "row">
          <div class = "col-sm">
            <h5 style = "font-size: medium">Price</h5>
            <select class="form-select" aria-label="Default select example" style="width:250px;">
              <!--OPTION LIST PRICE CSGO-->
              <option value="LOWESTPRICE">LOWEST PRICE</option>
              <option value="HIGHESTPRICE">HIGHEST PRICE</option>
            </select>  
            <br>
            &nbsp;
            <button type="submit" class="btn btn-primary btn-sm" style="width:225px;"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
          </div>             
        </div>
      </div> 
    </div>
    <!--END SEARCH FILTER CODE-->

    <div class = "container">
      <div class="alert alert-danger" style="float:left;height:90px;width: 69.5%;margin-left:100px;" role="alert">
        <p style="text-align: center;">
          <b>Attention !</b> According to new rules of Steam, non-Prime CS:GO accounts will not be able to play ranked games.
          New accounts must buy CS:GO from Steam market to be Prime in CS:GO.<br> Please <a href = "https://store.steampowered.com/news/app/730/view/3059613232566173082" target="_blank" rel="noopener noreferrer">click here</a> to read detailed explanation.</b>
        </p>
      </div>
    </div>     
    <br><br>   
    <!--DISPLAY ALL DATA FROM DATABASE-->          
    <?php
      $sql = "SELECT
      b.CSGO_SELLACCOUNTID,
      concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
      b.CSGO_STEAMID,
      b.CSGO_SELLACCOUNTMEDAL,
      b.CSGO_SELLACCOUNTRANK,
      b.CSGO_PRIMESTATUS,
      b.CSGO_STEAMADDRESS,
      b.CSGO_STEAMIDIMG,
      b.CSGO_SELLACCOUNTRANKPRIMESTATUSIMG,
      b.CSGO_SELLACCOUNTPRICE
      FROM
      csgosellaccount b, 
      users u
      WHERE b.USER_ID = u.USER_ID";
      $result = mysqli_query($conn,$sql);
      //display list of data from database
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $dbcsgosellAccountID = $row['CSGO_SELLACCOUNTID'];
          $userID = $row['Name'];
          $dbcsgosteamID = $row['CSGO_STEAMID'];
          $dbcsgoMedal = $row['CSGO_SELLACCOUNTMEDAL'];
          $dbcsgoRank = $row['CSGO_SELLACCOUNTRANK'];
          $dbcsgoPrimeStatus = $row['CSGO_PRIMESTATUS'];
          $dbcsgosteamAddressInventory = $row['CSGO_STEAMADDRESS'];
          $dbcsgosteamIDIMG = $row['CSGO_STEAMIDIMG'];
          $dbcsgoRANKPRIMESTATUSIMG = $row['CSGO_SELLACCOUNTRANKPRIMESTATUSIMG'];
          $dbcsgoPrice = $row['CSGO_SELLACCOUNTPRICE'];

          if($dbcsgoRank == "SILVER 1"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOSilver1Image.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "SILVER 2"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOSilver2Image.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "SILVER 3"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOSilver3Image.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "SILVER 4"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOSilver4Image.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "SILVER ELITE"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOSilverEliteImage.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "SILVER ELITE MASTER"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOSilverEliteMasterImage.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "GOLD NOVA 1"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOGoldNova1Image.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "GOLD NOVA 2"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOGoldNova2Image.jpg" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "GOLD NOVA 3"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOGoldNova3Image.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "GOLD NOVA MASTER"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "MASTER GUARDIAN 1"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOMasterGuardian1Image.jpg" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "MASTER GUARDIAN 2"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOMasterGuardian2Image.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "MASTER GUARDIAN ELITE"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "DISTINGUISHED MASTER GUARDIAN"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "LEGENDARY EAGLE"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOLegendaryEagleImage.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "LEGENDARY EAGLE MASTER"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOLegendaryEagleMasterImage.png" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else if($dbcsgoRank == "SUPREME MASTER FIRSTCLASS"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" width="290" height="150" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';

          }else{ 
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/CSGOGlobalEliteImage.jpg" width="300" height="170" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$dbcsgoRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbcsgosteamID.' </p>
                          </div>
                          <div class = "col">
                            <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                          </div>
                        </div>
                      </div>
                      <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                      <p class="card-text">
                        <b>CSGO Inventory Link Address:</b>
                        <a href = '.$dbcsgosteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbcsgosteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewCSGOImage.php? viewCSGOImageID='.$dbcsgosellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbcsgoPrice.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:57%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 575px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportCSGOSellAccount.php? reportCSGOSellAccountID='.$dbcsgosellAccountID.'">
                                  <b>Report User</b>
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
            ';
          }
         
        }
      }
    ?>
    <!--END DISPLAY OF DATA FROM DATABASE -->   
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

