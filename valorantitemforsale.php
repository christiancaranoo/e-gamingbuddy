<?php 
include 'connectDatabase.php';
//session start after log in 
session_start();
$messageFail="";
$messageSuccess="";

if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
  //assigning $_SESSION['username']
  $useruserName = $_SESSION['username'];
  if(isset($_POST['valorantsellitem'])){
    //COLLECTING DATA
    $valorantItemName = mysqli_real_escape_string($conn,$_POST['valorantsellitemName']);
    $valorantCollectionList = mysqli_real_escape_string($conn,$_POST['valorantsellitemCollectionList']); 
    $valorantWeaponType = mysqli_real_escape_string($conn,$_POST['valorantsellitemWeaponType']);              
    $valorantitemPrice = mysqli_real_escape_string($conn,$_POST['valorantsellitemPrice']);       
      
    //storing image to the database 
    $imageName = $_FILES['valorantsellitemIMG']['name'];
    $imageType = $_FILES['valorantsellitemIMG']['type'];
    $imageTempLoc = $_FILES['valorantsellitemIMG']['tmp_name'];
    $imageSize = $_FILES['valorantsellitemIMG']['size'];
    //adding image directory
    $image = addslashes(file_get_contents($imageTempLoc));
    $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
    $img_upload_path = 'valorantIMGDb/'.$new_img_name;
    move_uploaded_file($imageTempLoc,$img_upload_path);
    //storing data to the database
    $sql = "INSERT INTO valorantsellitem (USER_ID,VALORANT_SELLITEMNAME,VALORANT_SELLITEMCOLLECTIONLIST,
    VALORANT_SELLITEMWEAPONTYPE,VALORANT_SELLITEMIMG,VALORANT_SELLITEMPRICE)
    VALUES ((SELECT USER_ID FROM `users` WHERE USER_USERNAME='$useruserName'),'$valorantItemName','$valorantCollectionList',
    '$valorantWeaponType','$image','$valorantitemPrice')";

    $result = mysqli_query($conn,$sql);

    //if successfully insert to the database
    if($result){
      $messageSuccess = "Successfully Valorant Sell Item";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
    }else{
      $messageFail = "Unsuccessfully Valorant Sell Item please try again";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
    }                    
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Valorant Item for Sale</title>
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
            <img src = "image/steamicon.png" width="30" height="30" alt = "Mobile Legends" >
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy Valorant Items</h2>
        </div>
        <!--END 1ST FLEX CODE-->
        <!--START 2ND FLEX CODE-->
        <div class="p-2">
          <p style="color: #6e706f;font-family: 'Poppins',sans-serif;color: #6e706f;font-size: 16px;">You want to sell item?</p>
        </div>
        <!--END 2ND FLEX CODE-->
        <!--START 3RD FLEX CODE-->
        <div class="p-2">
          <a href = "" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Click Here</a>
          <!--WHERE USER CAN SELL DOTA 2 ITEMS-->
          <!--START MODAL CODE-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!--START MODAL DIALOG-->
            <div class="modal-dialog" role="document">
              <form method="POST" enctype="multipart/form-data">  
                <!--START MODAL CONTENT-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src = "image/valorantlogo.png" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Valorant Sell Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Item Name:</b></label>
                      <input type="text" name="valorantsellitemName" class="form-control" id="formGroupExampleInput" placeholder="Input Item Name here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label"><b>Collection List:</b></label>
                      <select class="form-select" name="valorantsellitemCollectionList" aria-label="Default select example">
                        <!--OPTION LIST DOTA 2 HERO-->
                        <option value="ION COLLECTION" selected="selected">ION COLLECTION</option>
                        <option value="ONI COLLECTION" selected="selected">ONI COLLECTION</option>
                        <option value="PRIME COLLECTION" selected="selected">PRIME COLLECTION</option>
                        <option value="EGO COLLECTION" selected="selected">EGO COLLECTION</option>
                        <option value="ELDERFLAME COLLECTION" selected="selected">ELDERFLAME COLLECTION</option>
                        <option value="KINGDOM COLLECTION" selected="selected">KINGDOM COLLECTION</option>
                        <option value="PRISM COLLECTION" selected="selected">PRISM COLLECTION</option>
                        <option value="GLITCHPOP COLLECTION" selected="selected">GLITCHPOP COLLECTION</option>
                        <option value="HIVEMIND COLLECTION" selected="selected">HIVEMIND COLLECTION</option>
                        <option value="SPLINE COLLECTION" selected="selected">SPLINE COLLECTION</option>
                        <option value="LUXE MELEE" selected="selected">LUXE MELEE</option>
                        <option value="SMITE COLLECTION" selected="selected">SMITE COLLECTION</option>
                        <option value="G.U.N COLLECTION" selected="selected">G.U.N COLLECTION</option>
                        <option value="SINGULARITY COLLECTION" selected="selected">SINGULARITY COLLECTION</option>
                        <option value="RUIN COLLECTION" selected="selected">RUIN COLLECTION</option>
                        <option value="REAVER COLLECTION" selected="selected">REAVER COLLECTION</option>
                        <option value="SOVEREIGN COLLECTION" selected="selected">SOVEREIGN COLLECTION</option>
                        <option value="BLASTX COLLECTION" selected="selected">BLASTX COLLECTION</option>
                        <option value="WINTERWUNDERLAND COLLECTION" selected="selected">WINTERWUNDERLAND COLLECTION</option>
                        <option value="OUTPOST COLLECTION" selected="selected">OUTPOST COLLECTION</option>
                        <option value="GLITCHPOP COLLECTION" selected="selected">GLITCHPOP COLLECTION</option>
                        <option value="CELESTIAL COLLECTION" selected="selected">CELESTIAL COLLECTION</option>
                        <option value="PRIME 2.0 COLLECTION" selected="selected">PRIME 2.0 COLLECTION</option>
                        <option value="PRISM III COLLECTION" selected="selected">PRISM III COLLECTION</option>
                        <option value="VALORANT GO! KNIFE" selected="selected">VALORANT GO! KNIFE</option>
                        <option value="MAGEPUNK COLLECTION" selected="selected">MAGEPUNK COLLECTION</option>
                        <option value="FORSAKEN COLLECTION" selected="selected">FORSAKEN COLLECTION</option>
                        <option value="SONGSTEEL COLLECTION" selected="selected">SONGSTEEL COLLECTION</option>
                        <option value="TETHERED REALMS COLLECTION" selected="selected">TETHERED REALMS COLLECTION</option>
                        <option value="ORIGIN COLLECTION" selected="selected">ORIGIN COLLECTION</option>
                        <option value="K-TAC COLLECTION" selected="selected">K-TAC COLLECTION</option>
                        <option value="RUINATION COLLECTION" selected="selected">RUINATION COLLECTION</option>
                        <option value="SENTINELS OF LIGHT COLLECTION" selected="selected">SENTINELS OF LIGHT COLLECTION</option>
                        <option value="RECON COLLECTION" selected="selected">RECON COLLECTION</option>
                        <option value="SPECTRUM COLLECTION" selected="selected">SPECTRUM COLLECTION</option>
                        <option value="ARTISAN COLLECTION" selected="selected">ARTISAN COLLECTION</option>
                        <option value="GO! VOL.2 COLLECTION" selected="selected">GO! VOL. 2 COLLECTION</option>
                        <option value="RGX 11Z PRO COLLECTION" selected="selected">RGX 11Z PRO COLLECTION</option>
                        <option value="NUNCA OLVIDADOS COLLECTION" selected="selected">NUNCA OLVIDADOS COLLECTION</option>
                        <option value="GENESIS COLLECTION" selected="selected">GENESIS COLLECTION</option>
                        <option value="RADIANT CRISIS 001 COLLECTION" selected="selected"> RADIANT CRISIS 001 COLLECTION</option>
                        <option value="AERO COLLECTION" selected="selected">AERO COLLECTION</option>
                        <option value="GOLDWING COLLECTION" selected="selected">GOLDWING COLLECTION</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Weapon Type:</b></label>
                      <select class="form-select" name="valorantsellitemWeaponType" aria-label="Default select example">
                        <!--OPTION LIST DOTA 2 HERO-->
                        <option value="MELEE" selected="selected">MELEE</option>
                        <option value="SIDEARM" selected="selected">SIDEARM</option>
                        <option value="SMG" selected="selected">SMG</option>
                        <option value="SHOTGUN" selected="selected">SHOTGUN</option>
                        <option value="RIFLE" selected="selected">RIFLE</option>
                        <option value="SNIPER" selected="selected">SNIPER</option>
                        <option value="HEAVY" selected="selected">HEAVY</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload Photo of the Item (Required)</b></label>
                      <div class="mb-3">
                        <input class="form-control" name="valorantsellitemIMG" type="file" id="formFile" accept="image/png, image/jpeg, image/jpg" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Price:</b></label>
                      <input type="text" name="valorantsellitemPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                    </div>
                          
                  </div>
                           
                  <div class="modal-footer">
                    <input type="submit" name="valorantsellitem" class="btn btn-primary" value="SELL ITEM">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                  </div>
                        
                </div>
                <!--END MODAL CONTENT-->
              </form>
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
            
    <!--START CODE FOR CONTAINER FOR THE SEARCH FILTER-->
    <div class = "container" style="float: left;width: 322px;height: 1350vh;overflow-y: auto;padding-top: 20px;top: 56px;">  
      <div class="btn-group-vertical">
        <!--LIST OF ITEM-->
        <h5 style = "font-size: medium">Collect List</h5>
        <!-- START VALORANT OPTION LIST-->
        <select class="form-select" aria-label="Default select example">
          <!--OPTION LIST VALORANT ITEM-->
          <option value="ION COLLECTION">ION COLLECTION</option>
          <option value="ONI COLLECTION">ONI COLLECTION</option>
          <option value="PRIME COLLECTION">PRIME COLLECTION</option>
          <option value="EGO COLLECTION">EGO COLLECTION</option>
          <option value="ELDERFLAME COLLECTION">ELDERFLAME COLLECTION</option>
          <option value="KINGDOM COLLECTION">KINGDOM COLLECTION</option>
          <option value="PRISM COLLECTION">PRISM COLLECTION</option>
          <option value="GLITCHPOP COLLECTION">GLITCHPOP COLLECTION</option>
          <option value="HIVEMIND COLLECTION">HIVEMIND COLLECTION</option>
          <option value="SPLINE COLLECTION">SPLINE COLLECTION</option>
          <option value="LUXE MELEE">LUXE MELEE</option>
          <option value="SMITE COLLECTION">SMITE COLLECTION</option>
          <option value="G.U.N COLLECTION">G.U.N COLLECTION</option>
          <option value="SINGULARITY COLLECTION">SINGULARITY COLLECTION</option>
          <option value="RUIN COLLECTION">RUIN COLLECTION</option>
          <option value="REAVER COLLECTION">REAVER COLLECTION</option>
          <option value="SOVEREIGN COLLECTION">SOVEREIGN COLLECTION</option>
          <option value="BLASTX COLLECTION">BLASTX COLLECTION</option>
          <option value="WINTERWUNDERLAND COLLECTION">WINTERWUNDERLAND COLLECTION</option>
          <option value="OUTPOST COLLECTION">OUTPOST COLLECTION</option>
          <option value="GLITCHPOP COLLECTION">GLITCHPOP COLLECTION</option>
          <option value="CELESTIAL COLLECTION">CELESTIAL COLLECTION</option>
          <option value="PRIME 2.0 COLLECTION">PRIME 2.0 COLLECTION</option>
          <option value="PRISM III COLLECTION">PRISM III COLLECTION</option>
          <option value="VALORANT GO! KNIFE"> VALORANT GO! KNIFE</option>
          <option value=" MAGEPUNK COLLECTION">   MAGEPUNK COLLECTION</option>
          <option value="FORSAKEN COLLECTION">FORSAKEN COLLECTION</option>
          <option value="SONGSTEEL COLLECTION">SONGSTEEL COLLECTION</option>
          <option value="TETHERED REALMS COLLECTION">TETHERED REALMS COLLECTION</option>
          <option value="ORIGIN COLLECTION">ORIGIN COLLECTION</option>
          <option value=" K-TAC COLLECTION">K-TAC COLLECTION</option>
          <option value="RUINATION COLLECTION">RUINATION COLLECTION</option>
          <option value="SENTINELS OF LIGHT COLLECTION">SENTINELS OF LIGHT COLLECTION</option>
          <option value="RECON COLLECTION">RECON COLLECTION</option>
          <option value=" SPECTRUM COLLECTION">SPECTRUM COLLECTION</option>
          <option value="ARTISAN COLLECTION">ARTISAN COLLECTION</option>
          <option value=" GO! VOL. 2 COLLECTION"> GO! VOL. 2 COLLECTION</option>
          <option value="RGX 11Z PRO COLLECTION">RGX 11Z PRO COLLECTION</option>
          <option value=" NUNCA OLVIDADOS COLLECTION">NUNCA OLVIDADOS COLLECTION</option>
          <option value=" GENESIS COLLECTION">    GENESIS COLLECTION</option>
          <option value=" RADIANT CRISIS 001 COLLECTION"> RADIANT CRISIS 001 COLLECTION</option>
          <option value=" Aero COLLECTION">   Aero COLLECTION</option>
          <option value=" Goldwing COLLECTION">   Goldwing COLLECTION</option>
        </select>
        <!--END DOTA 2 HERO OPTION LIST CODE-->
      </div>

      <br>
      <br>
      <!--START RARITY DOTA 2 ITEMS CODE-->
      <h5 style = "font-size: medium">Weapon Type</h5>
      <!--ROW 1 FOR THE RARITY DOTA 2 ITEMS-->
      <div class = "row">
        <div class = "col-sm">
          <select class="form-select" aria-label="Default select example">
            <!--OPTION LIST DOTA 2 HERO-->
            <option value="MELEE">Melee</option>
            <option value="SIDEARM">Sidearm</option>
            <option value="SMG">Smg</option>
            <option value="SHOTGUN">Shotgun</option>
            <option value="RIFLE">Rifle</option>
            <option value="SNIPER">Sniper</option>
            <option value="HEAVY">Heavy</option>
          </select>             
        </div>
      </div>

      <!--END RARITY VALORANT ITEMS CODE-->
      <div class = "row">
        <div class = "col-sm">
          <br>
          <h5 style = "font-size: medium">Price</h5>
          <select class="form-select" aria-label="Default select example" style="width:295px;">
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
    <!--DISPLAY DATA FROM THE DATABASE-->
    <?php
      $sql = "SELECT
      b.VALORANT_SELLITEMID,
      concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
      b.VALORANT_SELLITEMNAME,
      b.VALORANT_SELLITEMCOLLECTIONLIST,
      b.VALORANT_SELLITEMWEAPONTYPE,
      b.VALORANT_SELLITEMIMG,
      b.VALORANT_SELLITEMPRICE
      FROM
      valorantsellitem b, 
      users u
      WHERE b.USER_ID = u.USER_ID";
      $result = mysqli_query($conn,$sql);

      if($result){
        while($row=mysqli_fetch_assoc($result)){ 
          $valorantsellitemID = $row['VALORANT_SELLITEMID'];
          $userID = $row['Name'];
          $valorantsellitemName = $row['VALORANT_SELLITEMNAME'];
          $valorantsellitemCollectionList = $row['VALORANT_SELLITEMCOLLECTIONLIST'];
          $valorantsellitemWeaponType = $row['VALORANT_SELLITEMWEAPONTYPE'];
          $valorantItemIMG = $row['VALORANT_SELLITEMIMG'];
          $valorantsellitemPrice = $row['VALORANT_SELLITEMPRICE'];
          //display data
                  
          echo'
            <div class="container" style="float:center">
              <div class= "row">
                <div class = "col">
                  <div class="card border-primary mb-5" style="max-width: 100%;">
                    <div class="row g-5">
                                  
                      <div class="col-md-5">
                        <img src="data:image/jpeg/png/jpg;base64,'.base64_encode($valorantItemIMG).'" class="img-fluid rounded-start" alt="Image" height="350" width="350">
                      </div>

                      <div class="col-md-7">
                        <br>
                        <div class = "row">
                          <div class = "col-sm">
                          <p><b>Seller Name:</b>  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                          </div>
                        </div>  
                                        
                        <p><b>Item Name:</b> '.$valorantsellitemName.'</p>
                        <p><b>Collection List:</b> '.$valorantsellitemCollectionList.'</p>
                        <p><b>Weapon Type:</b> '.$valorantsellitemWeaponType.'</p>
                        <p><b>Price:</b> '.$valorantsellitemPrice.'</p>

                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:50%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>
                        
                        <div class="btn-group" style="position:absolute;left: 480px;top: 1px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportValorantSellItem.php? reportValorantSellItemID='.$valorantsellitemID.'">
                                    <b>Report User</b>
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
            </div> 
          ';  
        }
      }
    ?>       

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



