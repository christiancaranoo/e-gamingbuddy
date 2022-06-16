<?php
include 'connectDatabase.php';
//session start after log in 
session_start();
$messageFail="";
$messageSuccess="";
$messageNotValidURL = "";
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
  //assigned $session of the user
  $useruserName = $_SESSION['username'];
  if(isset($_POST['dota2sellAccount'])){
    $steamID = mysqli_real_escape_string($conn,$_POST['steamID']);
    $dota2ID = mysqli_real_escape_string($conn,$_POST['dota2ID']);
    $dota2Rank = mysqli_real_escape_string($conn,$_POST['dota2Rank']);
    $dota2MMR = mysqli_real_escape_string($conn,$_POST['dota2MMR']);
    $steamaddressDota2Inventory = mysqli_real_escape_string($conn,$_POST['steamaddressDota2Inventory']);
    $dota2Price = mysqli_real_escape_string($conn,$_POST['dota2Price']);

    //checking if the steam address is valid
    if (filter_var($steamaddressDota2Inventory, FILTER_VALIDATE_URL) === FALSE) {//if steam address is not valid
      $messageNotValidURL = "Invalid Steam Address please try again";
      echo "<script type='text/javascript'>alert('$messageNotValidURL');</script>";
    }else{//if valid
      //storing image steam id
      $steamidimageName = $_FILES['steamIDIMG']['name'];
      $steamidimageType = $_FILES['steamIDIMG']['type'];
      $steamidimageTempLoc = $_FILES['steamIDIMG']['tmp_name'];
      $steamidimageSize = $_FILES['steamIDIMG']['size'];
      //file path
      //to store images to the folder
      $steamidIMG = addslashes(file_get_contents($_FILES['steamIDIMG']['tmp_name']));
      $steamidimg_ex = pathinfo($steamidimageName, PATHINFO_EXTENSION);
      $steamidimg_ex_lc = strtolower($steamidimg_ex);
      $steamidnew_img_name = uniqid("IMG-",true).'.'.$steamidimg_ex_lc; 
      $steamidimg_upload_path = 'dota2IMGDb/'.$steamidnew_img_name;
      move_uploaded_file($steamidimageTempLoc,$steamidimg_upload_path);
      

      //storing image dota 2 rank id and ign
      $dota2idandignimageName = $_FILES['dota2RankIDANDIGN']['name'];
      $dota2idandignimageType = $_FILES['dota2RankIDANDIGN']['type'];
      $dota2idandignimageTempLoc = $_FILES['dota2RankIDANDIGN']['tmp_name'];
      $dota2idandignimageSize = $_FILES['dota2RankIDANDIGN']['size'];
      //file path
      //to store images to the folder
      $dota2idandignIMG = addslashes(file_get_contents($_FILES['dota2RankIDANDIGN']['tmp_name']));
      $dota2idandignimg_ex = pathinfo($dota2idandignimageName, PATHINFO_EXTENSION);
      $dota2idandignimg_ex_lc = strtolower($dota2idandignimg_ex);
      $dota2idandignnew_img_name = uniqid("IMG-",true).'.'.$dota2idandignimg_ex_lc; 
      $dota2idandignimg_upload_path = 'dota2IMGDb/'.$dota2idandignnew_img_name;
      move_uploaded_file($dota2idandignimageTempLoc,$dota2idandignimg_upload_path);
      
      //stroing dota 2 mmr
      $dota2MMRimageName = $_FILES['dota2MMRIMG']['name'];
      $dota2MMRimageType = $_FILES['dota2MMRIMG']['type'];
      $dota2MMRimageTempLoc = $_FILES['dota2MMRIMG']['tmp_name'];
      $dota2MMRimageSize = $_FILES['dota2MMRIMG']['size'];
      //file path
      //to store images to the folder
      $dota2MMRIMG = addslashes(file_get_contents($_FILES['dota2MMRIMG']['tmp_name']));
      $dota2MMRimg_ex = pathinfo($dota2MMRimageName, PATHINFO_EXTENSION);
      $dota2MMRimg_ex_lc = strtolower($dota2MMRimg_ex);
      $dota2MMRnew_img_name = uniqid("IMG-",true).'.'.$dota2MMRimg_ex_lc; 
      $dota2MMRimg_upload_path = 'dota2IMGDb/'.$dota2MMRnew_img_name;
      move_uploaded_file($dota2MMRimageTempLoc,$dota2MMRimg_upload_path);

      $sql = "INSERT INTO dota2sellaccount(USER_ID,DOTA2_STEAMID,DOTA2_IDNUMBER,DOTA2_RANK,
      DOTA2_MMR,DOTA2_STEAMADDRESSINVENTORY,DOTA2_STEAMIDIMG,DOTA2_IMGIDANDIGN,DOTA2_IMGMMR,DOTA2_PRICE) 
      VALUES((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
      '$steamID','$dota2ID','$dota2Rank','$dota2MMR','$steamaddressDota2Inventory','$steamidIMG','$dota2idandignIMG',
      '$dota2MMRIMG','$dota2Price')";
      $result = mysqli_query($conn,$sql);
        
      if($result){
        $messageSuccess = "Successfully Dota 2 sell account";
        echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
      }else{
        $messageFail = "Unsuccessfully Dota 2 sell account please try again";
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
    <title>Dota 2 Account for Sale</title>
    <link rel="stylesheet" href="css1/homepagedropdownav.css">
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy Dota 2 Account</h2>
        </div>
        <!--END 1ST FLEX CODE-->
        <!--START 2ND FLEX CODE-->
        <div class="p-2">
          <p style="color: #6e706f;font-family: 'Poppins',sans-serif;color: #6e706f;font-size: 16px;">You want to sell account?</p>
        </div>
        <!--END 2ND FLEX CODE-->
        <form method = "post" enctype="multipart/form-data">
          <!--START 3RD FLEX CODE-->
          <div class="p-2">
            <a href = "" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Click Here</a>
            <!--WHERE USER CAN SELL DOTA 2 ITEMS-->
            <!--START MODAL CODE-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--START MODAL DIALOG-->
              <div class="modal-dialog" role="document">
                <!--START MODAL CONTENT-->
                <div class="modal-content">

                  <div class="modal-header">
                    <img src = "image/dota-2.png" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Dota 2 Sell Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Steam ID:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="steamID" placeholder="Input Steam ID here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Dota 2 ID:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="dota2ID" placeholder="Input Dota 2 ID here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <div class = "row">
                        <div class = "col-sm">
                          <label for="recipient-name" class="col-form-label"><b>Rank:</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Your Dota 2 Rank (e.g Archon, Legend, Ancient)</small></label>         
                          <select class="form-select" name="dota2Rank" aria-label="Default select example" style="width:225px;">
                            <!--OPTION LIST DOTA 2 HERO-->
                            <option value="GUARDIAN" selected="selected">GUARDIAN</option>
                            <option value="HERALD" selected="selected">HERALD</option>
                            <option value="CRUSADER" selected="selected">CRUSADER</option>
                            <option value="ARCHON" selected="selected">ARCHON</option>
                            <option value="LEGEND" selected="selected">LEGEND</option>
                            <option value="ANCIENT" selected="selected">ANCIENT</option>
                            <option value="DIVINE" selected="selected">DIVINE</option>
                            <option value="IMMORTAL" selected="selected">IMMORTAL</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Dota 2 MMR:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="dota2MMR" placeholder="Input Dota 2 MMR here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Steam Address URL - Dota 2 Inventory:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="steamaddressDota2Inventory" placeholder="Input Steam Address Dota 2 Inventory here" autocomplete="off" required>
                    </div>
                    <label><b>Upload Photo</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Upload photo of your account.</small></label>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload Photo of your Steam ID (Required)</b></label>
                      <div class="mb-3">
                        <input class="form-control" type="file"  name="steamIDIMG"  accept="image/*" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload Photo of your Dota 2 ID with IGN (Required)</b></label>
                      <div class="mb-3">
                        <input class="form-control" type="file"  name="dota2RankIDANDIGN"  accept="image/*" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload Photo of Dota 2 MMR (Required)</b></label>
                      <div class="mb-3">
                        <input class="form-control" type="file"  name="dota2MMRIMG"  accept="image/*" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Price:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" name="dota2Price" autocomplete="off" required>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="SELL ACCOUNT"  aria-hidden="true" name="dota2sellAccount">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                  </div>

                </div>
                <!--END MODAL CONTENT-->
              </div>
              <!--END MODAL DIALOG-->
            </div>
            <!--END MODAL CODE-->
          </div>
          <!--END 3RD FLEX CODE-->
        </form>
      </div>
      <!--END WHOLE FLEX CODE-->
    </div>
    <!--END 3RD CONTAINER CODE-->
            
    <!--START CODE FOR CONTAINER FOR THE SEARCH FILTER-->
    <div class = "container" style="float: left;width: 322px;height: 1400vh;overflow-y: auto;padding-top: 20px;top: 56px;">  
      <div class="btn-group-vertical">
        <!--END RARITY DOTA 2 ACCOUNT CODE-->
        <div class = "row">
          <div class = "col-sm">
            <h5 style = "font-size: medium">Price</h5>
            <select class="form-select" aria-label="Default select example" style="width:205px;">
              <!--OPTION LIST PRICE CLASH OF CLAN-->
              <option value="LOWESTPRICE">LOWEST PRICE</option>
              <option value="HIGHESTPRICE">HIGHEST PRICE</option>
            </select>  
            <br>
            <button type="submit" class="btn btn-primary btn-sm" style="width:205px;"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
            <!--END PRICE DOTA2 CODE-->
          </div>
        </div>
      </div> 
    </div>  


    <!--DISPLAY ALL DATA FROM DATABASE-->
    <?php
      $sql = "SELECT
      b.DOTA2_SELLACCOUNTID,
      concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
      b.DOTA2_STEAMID,
      b.DOTA2_IDNUMBER,
      b.DOTA2_RANK,
      b.DOTA2_MMR,
      b.DOTA2_STEAMADDRESSINVENTORY,
      b.DOTA2_STEAMIDIMG,
      b.DOTA2_IMGIDANDIGN,
      b.DOTA2_IMGMMR,
      b.DOTA2_PRICE
      FROM
      dota2sellaccount b, 
      users u
      WHERE b.USER_ID = u.USER_ID";
      $result = mysqli_query($conn,$sql);
      
      //display list of data from database
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $dbdota2SellAccountID = $row['DOTA2_SELLACCOUNTID'];
          $userID = $row['Name'];
          $dbsteamID = $row['DOTA2_STEAMID'];
          $dbdota2IDNumber = $row['DOTA2_IDNUMBER'];
          $dbdota2Rank = $row['DOTA2_RANK'];
          $dbdota2MMR = $row['DOTA2_MMR'];
          $dbdota2SteamAddressInventory = $row['DOTA2_STEAMADDRESSINVENTORY'];
          $dbdota2SteamIDIMG = $row['DOTA2_STEAMIDIMG'];
          $dbdota2ItemList = $row['DOTA2_STEAMIDIMG'];
          $dbdota2IDANDIGNIMG = $row['DOTA2_IMGIDANDIGN'];
          $dbdota2IMGMMR = $row['DOTA2_IMGMMR'];
          $dbdota2Price = $row['DOTA2_PRICE'];

          //DISPLAYING SELL ACCOUNT DATA FROM DATABASE
          if($dbdota2Rank == "GUARDIAN"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/Dota2GuardianImage.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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
            
          }else if($dbdota2Rank == "HERALD"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/Dota2HeraldImage.png" id="myImg" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>
                      
                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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

          }else if($dbdota2Rank == "CRUSADER"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/Dota2CrusaderImage.jpg" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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

          }else if($dbdota2Rank == "ARCHON"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/Dota2ArchonImage.jpg" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>

                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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

          }else if($dbdota2Rank == "LEGEND"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/Dota2LegendImage.jpg" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>
                      
                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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

          }else if($dbdota2Rank == "ANCIENT"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/Dota2AncientImage.jpg" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>
                      
                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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

          }else if($dbdota2Rank == "DIVINE"){

            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/Dota2DivineImage.jpg"  width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>
                      
                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>

                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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
                    <img src = "RankImage/Dota2ImmortalImage.jpg" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;'.$dbdota2Rank.'</b></p>      
                  </div>
                  
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Steam ID:</b> '.$dbsteamID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Dota 2 ID:</b> '.$dbdota2IDNumber.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Dota 2 MMR:</b> '.$dbdota2MMR.'</p>
                        </div>
                      </div>
                      <p class="card-text">
                        <b>Dota 2 Inventory Link Address:</b>
                        <a href = '.$dbdota2SteamAddressInventory.' target="_blank" rel="noopener noreferrer">
                          '.$dbdota2SteamAddressInventory.'
                        </a>
                      </p>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information Images:
                          <a href= "viewDota2Image.php? viewDota2AccountID='.$dbdota2SellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbdota2Price.'</p>
                      
                      <div class = "row">
                        <div class = "col">
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Saved buttons use the "secure click" command -->
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <!-- Saved buttons are identified by their button IDs -->
                            <input type="hidden" name="hosted_button_id" value="221">
                            <!-- Saved buttons display an appropriate button image. -->
                            <input type="image" name="submit"
                            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                            <img alt="" width="1" height="1"
                            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                          </form>
                        </div>
                        <div class = "col" style="margin-right:55%;">
                          <button type="button" class="btn btn-primary btn-sm">
                            <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                          </button>
                        </div>
                      </div>
                      
                      <div class="btn-group" style="position:absolute;left: 570px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportDota2SellAccount.php? reportDota2SellAccountID='.$dbdota2SellAccountID.'">
                                  <b>Report User</b>
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  
  </body>
</html>

