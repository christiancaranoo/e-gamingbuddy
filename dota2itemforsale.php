<?php
include 'connectDatabase.php';
//session start after log in 
session_start();
$messageFailed="";
$messageSuccess="";
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}else{
  //username 
  $useruserName = $_SESSION['username'];
  if(isset($_POST["dota2sellItem"])){
    $dota2sellitemName = mysqli_real_escape_string($conn,$_POST['dota2sellitemName']);
    $dota2sellitemHero = mysqli_real_escape_string($conn,$_POST['dota2sellitemHero']);
    $dota2sellitemRarity = mysqli_real_escape_string($conn,$_POST['dota2sellitemRarity']);
    $dota2sellitemPrice = mysqli_real_escape_string($conn,$_POST['dota2sellitemPrice']);
    //storing image to the database
    $imageName = $_FILES['dota2sellitemIMG']['name'];
    $imageType = $_FILES['dota2sellitemIMG']['type'];
    $imageTempLoc = $_FILES['dota2sellitemIMG']['tmp_name'];
    $imageSize = $_FILES['dota2sellitemIMG']['size'];

    //file path
    //to store images to the folder
    $fileIMG = addslashes(file_get_contents($_FILES['dota2sellitemIMG']['tmp_name']));
    $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
    $img_upload_path = 'dota2IMGDb/'.$new_img_name;
    move_uploaded_file($imageTempLoc,$img_upload_path);

    $sql = "INSERT INTO `dota2sellitem` (USER_ID,DOTA2_SELLITEMNAME,
    DOTA2_SELLITEMHERO,DOTA2_SELLITEMRARITY,DOTA2_SELLITEMIMG,DOTA2_SELLITEMPRICE)
    VALUES((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
    '$dota2sellitemName','$dota2sellitemHero',
    '$dota2sellitemRarity','$fileIMG','$dota2sellitemPrice')";
   
    $result = mysqli_query($conn, $sql);
    if($result){
      $messageSuccess = "Successfully Dota 2 sell item ";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
    }else{
      $messageFail = "Unsuccessful Dota 2 sell item please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }
        
  }   
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Dota 2 Item for Sale</title>
    <link rel="stylesheet" href="css1/homepagedropdownav.css">
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
    

  <body>
    <!-- DISPLAY USERNAME FROM SESSION START-->  
    <?php echo $_SESSION['username']; ?> 
    <!--1ST NAVIGATION BAR-->
    <div class="container-fullwidth">
      <nav class="navbar navbar-light bg-primary">

        <a class="navbar-brand" href="#" style="color: white;">
          <img src="image/logo.jpg" alt="E-Gaming Buddy" width="30" height="30" class="d-inline-block align-text-top">
          E-Gaming Buddy
        </a>
        <a class="nav-link" aria-current="page" href="homepage.php" style="color: white;">
          <i class = "fa fa-fw fa-home"></i>Home
        </a>
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
    
    <div class = "container-fullwidth">
      <div class="navbar1">
        <div class="dropdown1">

          <button class="dropbtn1">
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
            <img src = "image/clashofclan.jpg" width="30" height="30" alt = "Mobile Legends" >
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
            <img src = "image/valorantlogo.png" width="30" height="30" alt = "Mobile Legends" >
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy Dota 2 Items</h2>
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
              <!--START MODAL CONTENT-->
              <div class="modal-content">
                <!--FORM METHOD FETCH DATA -->
                <form method="post" enctype="multipart/form-data">

                  <div class="modal-header">
                    <img src = "image/dota-2.png" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Dota 2 Sell Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Item Name:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Item Name here" name="dota2sellitemName" autocomplete="off" value="<?php if (isset($_POST['dota2sellItem'])) { echo $dota2sellitemName; } ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label"><b>Hero:</b></label>
                      <select class="form-select" aria-label="Default select example" name="dota2sellitemHero">
                        <!--OPTION LIST DOTA 2 HERO-->
                        <option value="ABADDON" selected="selected">ABADDON</option>
                        <option value="ALCHEMIST" selected="selected">ALCHEMIST</option>
                        <option value="ANCIENT APPARITION" selected="selected">ANCIENT APPARITION</option>
                        <option value="ANTI-MAGE" selected="selected">ANTI-MAGE</option>
                        <option value="ARC WARDEN" selected="selected">ARC WARDEN</option>
                        <option value="AXE" selected="selected">AXE</option>
                        <option value="BANE" selected="selected" >BANE</option>
                        <option value="BATRIDER" selected="selected">BATRIDER</option>
                        <option value="BEAST" selected="selected">BEAST</option>
                        <option value="BLOODSEEKER" selected="selected">BLOODSEEKER</option>
                        <option value="BOUNTY HUNTER" selected="selected">BOUNTY HUNTER</option>
                        <option value="BREWMASTER" selected="selected">BREWMASTER</option>
                        <option value="BRISTLEBACK" selected="selected">BRISTLEBACK</option>
                        <option value="BROODMOTHER" selected="selected">BROODMOTHER</option>
                        <option value="CENTAUR WARRUNNER" selected="selected">CENTAUR WARRUNNER</option>
                        <option value="CHAOS KNIGHT" selected="selected">CHAOS KNIGHT</option>
                        <option value="CHEN" selected="selected">CHEN</option>
                        <option value="CLINKZ" selected="selected">CLINKZ</option>
                        <option value="CLOCKWERK" selected="selected">CLOCKWERK</option>
                        <option value="CRYSTAL MAIDEN" selected="selected">CRYSTAL MAIDEN</option>
                        <option value="DARKSEER" selected="selected">DARK SEER</option>
                        <option value="DARK WILLOW" selected="selected">DARK WILLOW</option>
                        <option value="DAWNBREAKER" selected="selected">DAWNBREAKER</option>
                        <option value="DAZZLE" selected="selected">DAZZLE</option>
                        <option value="DEATH PROPHET" selected="selected">DEATH PROPHET</option>
                        <option value="DISRUPTOR" selected="selected">DISRUPTOR</option>
                        <option value="DOOM" selected="selected">DOOM</option>
                        <option value="DRAGON KNIGHT" selected="selected">DRAGON KNIGHT</option>
                        <option value="DROW RANGER" selected="selected">DROW RANGER</option>
                        <option value="EARTH SPIRIT" selected="selected">EARTH SPIRIT</option>
                        <option value="EARTHSHAKER" selected="selected">EARTHSHAKER</option>
                        <option value="ELDER TITAN" selected="selected">ELDER TITAN</option>
                        <option value="EMBER SPIRIT" selected="selected">EMBER SPIRIT</option>
                        <option value="ENCHANTRESS" selected="selected">ENCHANTRESS</option>
                        <option value="ENIGMA" selected="selected">ENIGMA</option>
                        <option value="FACELESS VOID" selected="selected">FACELESS VOID</option>
                        <option value="GRIMSTROKE" selected="selected">GRIMSTROKE</option>
                        <option value="GYROCOPTER" selected="selected">GYROPCOPTER</option>
                        <option value="HOODWINK" selected="selected">HOODWINK</option>
                        <option value="HUSKAR" selected="selected">HUSKAR</option>
                        <option value="INVOKER" selected="selected">INVOKER</option>
                        <option value="IO" selected="selected">IO</option>
                        <option value="JAKIRO" selected="selected">JAKIRO</option>
                        <option value="JUGGERNAUT" selected="selected">JUGGERNAUT</option>
                        <option value="KEEPER OF THE LIGHT" selected="selected">KEEPER OF THE LIGHT</option>
                        <option value="KUNKKA" selected="selected">KUNKKA</option>
                        <option value="LEGION COMMANDER" selected="selected">LEGION COMMANDER</option>
                        <option value="LESHRAC" selected="selected">LESHRAC</option>
                        <option value="LICH" selected="selected">LICH</option>
                        <option value="LIFESTEALER" selected="selected">LIFESTEALER</option>
                        <option value="LINA" selected="selected">LINA</option>
                        <option value="LION" selected="selected">LION</option>
                        <option value="LONE DRUID" selected="selected">LONE DRUID</option>
                        <option value="LUNA" selected="selected">LUNA</option>
                        <option value="LYCAN" selected="selected">LYCAN</option>
                        <option value="MAGNUS" selected="selected">MAGNUS</option>
                        <option value="MARCI" selected="selected">MARCI</option>
                        <option value="MARS" selected="selected">MARS</option>
                        <option value="MEDUSA" selected="selected">MEDUSA</option>
                        <option value="MEEPO" selected="selected">MEEPO</option>
                        <option value="MIRANA" selected="selected">MIRANA</option>
                        <option value="MONKEY KING" selected="selected">MONKEY KING</option>
                        <option value="MORPHLING" selected="selected">MORPHLING</option>
                        <option value="NAGA SIREN" selected="selected">NAGA SIREN</option>
                        <option value="NATURES PROPHET" selected="selected">NATURE'S PROPHET</option>
                        <option value="NECROPHOS" selected="selected">NECROPHOS</option>
                        <option value="NIGHT STALKER" selected="selected">NIGHT STALKER</option>
                        <option value="NYX ASSASSIN" selected="selected">NYX ASSASSIN</option>
                        <option value="OGRE MAGI" selected="selected">OGRE MAGI</option>
                        <option value="OMNIKNIGHT" selected="selected">OMNIKNIGHT</option>
                        <option value="ORACLE" selected="selected">ORACLE</option>
                        <option value="OUTWORLD DESTROYER" selected="selected">OUTWORLD DESTROYER</option>
                        <option value="PANGOLIER" selected="selected">PANGOLIER</option>
                        <option value="PHANTOM ASSASSIN" selected="selected">PHATOM ASSASSIN</option>
                        <option value="PHANTOM LANCER" selected="selected">PHANTOM LANCER</option>
                        <option value="PHOENIX" selected="selected">PHOENIX</option>
                        <option value="PRIMAL BEAST" selected="selected">PRIMAL BEAST</option>
                        <option value="PUCK" selected="selected">PUCK</option>
                        <option value="PUDGE" selected="selected">PUDGE</option>
                        <option value="PUGNA" selected="selected">PUGNA</option>
                        <option value="QUEEN OF PAIN" selected="selected">QUEEN OF PAIN</option>
                        <option value="RAZOR" selected="selected">RAZOR</option>
                        <option value="RIKI" selected="selected">RIKI</option>
                        <option value="RUBICK" selected="selected">RUBICK</option>
                        <option value="SAND KING" selected="selected">SAND KING</option>
                        <option value="SHADOW DEMON" selected="selected">SHADOW DEMON</option>
                        <option value="SHADOW FIEND" selected="selected">SHADOW FIEND</option>
                        <option value="SHADOW SHAMAN" selected="selected">SHADOW SHAMAN</option>
                        <option value="SILENCER" selected="selected">SILENCER</option>
                        <option value="SKYWRATH MAGE" selected="selected">SKYWRATH MAGE</option>
                        <option value="SLARDAR" selected="selected">SLARDAR</option>
                        <option value="SLARK" selected="selected">SLARK</option>
                        <option value="SNAPFIRE" selected="selected">SNAPFIRE</option>
                        <option value="SNIPER" selected="selected">SNIPER</option>
                        <option value="SPECTRE" selected="selected">SPECTRE</option>
                        <option value="SPIRIT BREAKER" selected="selected">SPIRIT BREAKER</option>
                        <option value="STORM SPIRIT" selected="selected">STORM SPIRIT</option>
                        <option value="SVEN" selected="selected">SVEN</option>
                        <option value="TECHIES" selected="selected">TECHIES</option>
                        <option value="TEMPLAR ASSASSIN" selected="selected">TEMPLAR ASSASSIN</option>
                        <option value="TERRORBLADE" selected="selected">TERRORBLADE</option>
                        <option value="TIDEHUNTER" selected="selected">TIDEHUNTER</option>
                        <option value="TIMBERSAW" selected="selected">TIMBERSAW</option>
                        <option value="TINKER" selected="selected">TINKER</option>
                        <option value="TINY" selected="selected">TINY</option>
                        <option value="TREANT PROTECTOR" selected="selected">TREANT PROTECTOR</option>
                        <option value="TROLL WARLORD" selected="selected">TROLL WARLORD</option>
                        <option value="TUSK" selected="selected">TUSK</option>
                        <option value="UNDERLORD" selected="selected">UNDERLORD</option>
                        <option value="UNDYING" selected="selected">UNDYING</option>
                        <option value="URSA" selected="selected">URSA</option>
                        <option value="VENGEFUL SPIRIT" selected="selected">VENGEFUL SPIRIT</option>
                        <option value="VENOMANCER" selected="selected">VENOMANCER</option>
                        <option value="VIPER" selected="selected">VIPER</option>
                        <option value="VISAGE" selected="selected">VISAGE</option>
                        <option value="VOID SPIRIT" selected="selected">VOID SPIRIT</option>
                        <option value="WARLOCK" selected="selected">WARLOCK</option>
                        <option value="WEAVER" selected="selected">WEAVER</option>
                        <option value="WINDRANGER" selected="selected">WINDRANGER</option>
                        <option value="WINTER WYVERN" selected="selected">WINTER WYVERN</option>
                        <option value="WITCH DOCTOR" selected="selected">WITCH DOCTOR</option>
                        <option value="WRAITH KING" selected="selected">WRAITH KING</option>
                        <option value="ZEUS" selected="selected">ZEUS</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Rarity:</b></label>
                      <select class="form-select" aria-label="Default select example" name="dota2sellitemRarity">
                        <!--OPTION LIST DOTA 2 HERO-->
                        <option value="COMMON" selected="selected">COMMON</option>
                        <option value="UNCOMMON" selected="selected">UNCOMMON</option>
                        <option value="RARE" selected="selected">RARE</option>
                        <option value="MYTHICAL" selected="selected">MYTHICAL</option>
                        <option value="LEGENDARY" selected="selected">LEGENDARY</option>
                        <option value="IMMORTAL" selected="selected">IMMORTAL</option>
                        <option value="ARCANA" selected="selected">ARCANA</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload Photo of the Item (Required)</b></label>
                      <div class="mb-3">
                        <input class="form-control" type="file" accept="image/*" name="dota2sellitemIMG" id="dota2sellitemIMG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Price:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" name="dota2sellitemPrice" autocomplete="off" required>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="dota2sellItem" value="SELL ITEM">
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
  
    <!--START CODE FOR CONTAINER FOR THE SEARCH FILTER-->
    <div class = "container" style="float: left;width: 322px;height: 1700vh;overflow-y: 100%;padding-top: 20px;top: 56px;">  
      <div class="btn-group-vertical">
        <!--LIST OF HERO-->
        <h5 style = "font-size: medium">Hero</h5>
        <select class="form-select" aria-label="Default select example" style="width:225px;">
          <!--OPTION LIST DOTA 2 HERO-->
          <option selected>ALL HERO</option>
          <option value="ABADDON">ABADDON</option>
          <option value="ALCHEMIST">ALCHEMIST</option>
          <option value="ANCIENTAPPARITION">ANCIENT APPARITION</option>
          <option value="ANTIMAGE">ANTI-MAGE</option>
          <option value="ARCWARDEN">ARC WARDEN</option>
          <option value="AXE">AXE</option>
          <option value="BANE">BANE</option>
          <option value="BATRIDER">BATRIDER</option>
          <option value="BEAST">BEAST</option>
          <option value="BLOODSEEKER">BLOODSEEKER</option>
          <option value="BOUNTYHUNTER">BOUNTY HUNTER</option>
          <option value="BREWMASTER">BREWMASTER</option>
          <option value="BRISTLEBACK">BRISTLEBACK</option>
          <option value="BROODMOTHER">BROODMOTHER</option>
          <option value="CENTAURWARRUNNER">CENTAUR WARRUNNER</option>
          <option value="CHAOSKNIGHT">CHAOS KNIGHT</option>
          <option value="CHEN">CHEN</option>
          <option value="CLINKZ">CLINKZ</option>
          <option value="CLOCKWERK">CLOCKWERK</option>
          <option value="CRYSTALMAIDEN">CRYSTAL MAIDEN</option>
          <option value="DARKSEER">DARK SEER</option>
          <option value="DARKWILLOW">DARK WILLOW</option>
          <option value="DAWNBREAKER">DAWNBREAKER</option>
          <option value="DAZZLE">DAZZLE</option>
          <option value="DEATHPROPHET">DEATH PROPHET</option>
          <option value="DISRUPTOR">DISRUPTOR</option>
          <option value="DOOM">DOOM</option>
          <option value="DRAGONKNIGHT">DRAGON KNIGHT</option>
          <option value="DROWRANGER">DROW RANGER</option>
          <option value="EARTHSPIRIT">EARTH SPIRIT</option>
          <option value="EARTHSHAKER">EARTHSHAKER</option>
          <option value="ELDERTITAN">ELDER TITAN</option>
          <option value="EMBERSPIRIT">EMBER SPIRIT</option>
          <option value="ENCHANTRESS">ENCHANTRESS</option>
          <option value="ENIGMA">ENIGMA</option>
          <option value="FACELESSVOID">FACELESS VOID</option>
          <option value="GRIMSTROKE">GRIMSTROKE</option>
          <option value="GYROCOPTER">GYROPCOPTER</option>
          <option value="HOODWINK">HOODWINK</option>
          <option value="HUSKAR">HUSKAR</option>
          <option value="INVOKER">INVOKER</option>
          <option value="IO">IO</option>
          <option value="JAKIRO">JAKIRO</option>
          <option value="JUGGERNAUT">JUGGERNAUT</option>
          <option value="KEEPEROFTHELIGHT">KEEPER OF THE LIGHT</option>
          <option value="KUNKKA">KUNKKA</option>
          <option value="LEGIONCOMMANDER">LEGION COMMANDER</option>
          <option value="LESHRAC">LESHRAC</option>
          <option value="LICH">LICH</option>
          <option value="LIFESTEALER">LIFESTEALER</option>
          <option value="LINA">LINA</option>
          <option value="LION">LION</option>
          <option value="LONEDRUID">LONE DRUID</option>
          <option value="LUNA">LUNA</option>
          <option value="LYCAN">LYCAN</option>
          <option value="MAGNUS">MAGNUS</option>
          <option value="MARCI">MARCI</option>
          <option value="MARS">MARS</option>
          <option value="MEDUSA">MEDUSA</option>
          <option value="MEEPO">MEEPO</option>
          <option value="MIRANA">MIRANA</option>
          <option value="MONKEYKING">MONKEY KING</option>
          <option value="MORPHLING">MORPHLING</option>
          <option value="NAGASIREN">NAGA SIREN</option>
          <option value="NATURE'SPROPHET">NATURE'S PROPHET</option>
          <option value="NECROPHOS">NECROPHOS</option>
          <option value="NIGHTSTALKER">NIGHT STALKER</option>
          <option value="NYXASSASSIN">NYX ASSASSIN</option>
          <option value="OGREMAGI">OGRE MAGI</option>
          <option value="OMNIKNIGHT">OMNIKNIGHT</option>
          <option value="ORACLE">ORACLE</option>
          <option value="OUTWORLDDESTROYER">OUTWORLD DESTROYER</option>
          <option value="PANGOLIER">PANGOLIER</option>
          <option value="PHANTOMASSASSIN">PHATOM ASSASSIN</option>
          <option value="PHANTOMLANCER">PHANTOM LANCER</option>
          <option value="PHOENIX">PHOENIX</option>
          <option value="PUCK">PUCK</option>
          <option value="PUDGE">PUDGE</option>
          <option value="PUGNA">PUGNA</option>
          <option value="QUEENOFPAIN">QUEEN OF PAIN</option>
          <option value="RAZOR">RAZOR</option>
          <option value="RIKI">RIKI</option>
          <option value="RUBICK">RUBICK</option>
          <option value="SANDKING">SAND KING</option>
          <option value="SHADOWDEMON">SHADOW DEMON</option>
          <option value="SHADOWFIEND">SHADOW FIEND</option>
          <option value="SHADOWSHAMAN">SHADOW SHAMAN</option>
          <option value="SILENCER">SILENCER</option>
          <option value="SKYWRATHMAGE">SKYWRATH MAGE</option>
          <option value="SLARDAR">SLARDAR</option>
          <option value="SLARK">SLARK</option>
          <option value="SNAPFIRE">SNAPFIRE</option>
          <option value="SNIPER">SNIPER</option>
          <option value="SPECTRE">SPECTRE</option>
          <option value="SPIRITBREAKER">SPIRIT BREAKER</option>
          <option value="STORMSPIRIT">STORM SPIRIT</option>
          <option value="SVEN">SVEN</option>
          <option value="TECHIES">TECHIES</option>
          <option value="TEMPLARASSASSIN">TEMPLAR ASSASSIN</option>
          <option value="TERRORBLADE">TERRORBLADE</option>
          <option value="TIDEHUNTER">TIDEHUNTER</option>
          <option value="TIMBERSAW">TIMBERSAW</option>
          <option value="TINKER">TINKER</option>
          <option value="TINY">TINY</option>
          <option value="TREANTPROTECTOR">TREANT PROTECTOR</option>
          <option value="TROLLWARLORD">TROLL WARLORD</option>
          <option value="TUSK">TUSK</option>
          <option value="UNDERLORD">UNDERLORD</option>
          <option value="UNDYING">UNDYING</option>
          <option value="URSA">URSA</option>
          <option value="VENGEFULSPIRIT">VENGEFUL SPIRIT</option>
          <option value="VENOMANCER">VENOMANCER</option>
          <option value="VIPER">VIPER</option>
          <option value="VISAGE">VISAGE</option>
          <option value="VOIDSPIRIT">VOID SPIRIT</option>
          <option value="WARLOCK">WARLOCK</option>
          <option value="WEAVER">WEAVER</option>
          <option value="WINDRANGER">WINDRANGER</option>
          <option value="WINTERWYVERN">WINTER WYVERN</option>
          <option value="WITCHDOCTOR">WITCH DOCTOR</option>
          <option value="WRAITHKING">WRAITH KING</option>
          <option value="ZEUS">ZEUS</option>           
        </select>
      </div>
               
      <div class = "row">
        <div class = "col-sm">
          <br>
          <h5 style = "font-size: medium">Item Rarity</h5>
          <select class="form-select" aria-label="Default select example" style="width:225px;">
            <!--OPTION LIST DOTA 2 HERO-->
            <option value="COMMON">COMMON</option>
            <option value="UNCOMMON">UNCOMMON</option>
            <option value="RARE">RARE</option>
            <option value="MYTHICAL">MYTHICAL</option>
            <option value="LEGENDARY">LEGENDARY</option>
            <option value="IMMORTAL">IMMORTAL</option>
            <option value="ARCANA">ARCANA</option>
          </select>
        </div>
      </div> 

      <!--END RARITY DOTA 2 ITEMS CODE-->
      <div class = "row">
        <div class = "col-sm">
          <br>
          <h5 style = "font-size: medium">Price</h5>
          <select class="form-select" aria-label="Default select example" style="width:225px;">
            <!--OPTION LIST PRICE CLASH OF CLAN-->
            <option value="LOWESTPRICE">
              LOWEST PRICE
            </option>
            <option value="HIGHESTPRICE">
              HIGHEST PRICE
            </option>
          </select>  
          <br>
          &nbsp;
          <button type="submit" name="search" class="btn btn-primary btn-sm" style="width:205px;"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
          <!--END PRICE VALORANT ITEMS CODE-->
        </div>
      </div> 

    </div>  

    <br><br>
    <!--DISPLAY SELL ITEM CODE FROM DATABASE-->
    <?php
      $sql = "SELECT
      b.DOTA2_SELLITEMID,
      concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
      b.DOTA2_SELLITEMNAME,
      b.DOTA2_SELLITEMHERO,
      b.DOTA2_SELLITEMRARITY,
      b.DOTA2_SELLITEMIMG,
      b.DOTA2_SELLITEMPRICE
      FROM
      dota2sellitem b, 
      users u
      WHERE b.USER_ID = u.USER_ID";
      $result = mysqli_query($conn,$sql);

      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $dbdota2sellItemID = $row['DOTA2_SELLITEMID'];
          $userID = $row['Name'];
          $dota2sellitemName = $row['DOTA2_SELLITEMNAME'];
          $dota2sellitemHero = $row['DOTA2_SELLITEMHERO'];
          $dota2sellitemRarity = $row['DOTA2_SELLITEMRARITY'];
          $dota2sellitemIMG = $row['DOTA2_SELLITEMIMG'];
          $dota2sellitemPrice = $row['DOTA2_SELLITEMPRICE'];
 
          echo'    
            <div class="container" style="float:center">
              <div class= "row">
                <div class = "col">
                  <div class="card border-primary mb-5" style="max-width: 863px;height:80.5%;">
                    <div class="row g-5">
                                    
                      <div class="col-md-5">
                        <img src="data:image/jpeg/png/jpg;base64,'.base64_encode($dota2sellitemIMG).'" class="img-fluid rounded-start" alt="Image" height="350" width="350">
                      </div>

                      <div class="col-md-7">
                        <p><b>Seller Name:</b> '.$userID.'
                          <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">
                            View Profile
                          </a> 
                        </p>
                        <p><b>Item Name:</b> '.$dota2sellitemName.'</p>
                        <p><b>Hero:</b> '.$dota2sellitemHero.'</p>
                        <p><b>Rarity:</b> '.$dota2sellitemRarity.'</p>
                        <p><b>Price:</b> '.$dota2sellitemPrice.'</p>

                        <div class = "row">
                          <div class = "col">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                              <!-- Saved buttons use the "secure click" command -->
                              <input type="hidden" name="cmd" value="_s-xclick">
                              <!-- Saved buttons are identified by their button IDs -->
                              <input type="hidden" name="hosted_button_id" value="221">
                              <!-- Saved buttons display an appropriate button image. -->
                              <input type="image" name="submit"
                              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                              alt="PayPal - The safer, easier way to pay online">
                              <img alt="" width="1" height="1"
                              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                            </form>
                          </div>
                          <div class = "col" style="margin-right:51%;">
                            <button type="button" class="btn btn-primary btn-sm">
                              <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                            </button>
                          </div>
                        </div>  
                        
                        <div class="btn-group" style="position:absolute;left: 457px;top: 1px;">
                          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>···</b>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <div class = "col">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                  <a href = "reportDota2SellItem.php? reportDota2SellItemID='.$dbdota2sellItemID.'">
                                    <b>Report User</b>
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
    <!--END DISPLAY SELL ITEM CODE-->
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

