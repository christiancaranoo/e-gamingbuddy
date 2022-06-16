<?php
include 'connectDatabase.php';
//session start after log in 
session_start();
$messageFailed="";
$messageSuccess="";
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
$useruserName = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Clash of Clan Inventory</title>
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <!--BOOTSTRAP 4 EXTENSION-->
    <link rel="stylesheet" href="css1/homepagedropdownav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <a class="nav-link" aria-current="homepage.php" href="homepage.php" style="color: white;"><i class = "fa fa-fw fa-home"></i>Home</a>
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
            
      </nav>
    </div>
    <br>
    <!--- MY PROFILE DISPLAY --->  
    <div class = "container" style="background-color:#fff">

      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#"><b>My Profile</b></a>
      </nav>

      <?php
        $sql= "SELECT * FROM users WHERE USER_USERNAME= '" . $_SESSION[ "username" ] . "' ";
        $result = mysqli_query($conn,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dbuserID = $row['USER_ID'];
            $dbuserFirstname = $row['USER_FIRSTNAME'];
            $dbuserMiddlename = $row['USER_MIDDLENAME'];
            $dbuserLastname = $row['USER_LASTNAME'];
            $dbuserGender = $row['USER_GENDER'];
            $dbuserDateofBirth = $row['USER_DOB'];
            $dbuserEmailAddress = $row['USER_EMAILADDRESS'];
            $dbuserPhonenumber = $row['USER_PHONENUMBER'];
            $dbuserAddress = $row['USER_ADDRESS'];
            $dbuserPassword = $row['USER_PASSWORD'];

            echo'
              <br>
              <div class = "row">
                <div class = "col">
                  <p class="fs-5 fw-bold">Profile ID: '.$dbuserID.'</p>
                </div>
              </div>
              <br>
              <div class = "row">
                <div class = "col-6">
                  <p class="fs-5 fw-bold">Name: '.$dbuserFirstname.' '.$dbuserMiddlename.' '.$dbuserLastname.'</p>
                </div>
                <div class = "col">
                  <p class="fs-5 fw-bold">Gender: '.$dbuserGender.'</p>
                </div>
                <div class = "col">
                  <p class="fs-5 fw-bold">Date of Birth: '.$dbuserDateofBirth.'</p>
                </div>
              </div>
              <br>
              <div class = "row">
                <div class = "col">
                  <p class="fs-5 fw-bold">Email Address: '.$dbuserEmailAddress.'</p>
                </div>
                <div class = "col">
                  <p class="fs-5 fw-bold">Email Address: '.$dbuserPhonenumber.'</p>
                </div>
              </div>
              <br>
              <div class = "row">
                <div class = "col"> 
                  <p class="fs-5 fw-bold">Address: '.$dbuserAddress.'</p>
                </div>
              </div>
              <br>
              <div class = "row">
                <div class = "col">
                  <button type="button" class="btn btn-primary"><a href = "updateProfile.php? updateProfile='.$dbuserID.'" class="text-light">Update Profile</a></button>
                  <button type="button" class="btn btn-primary"><a href = "changePassword.php? changePassword='.$dbuserID.'" class="text-light">Change Password</a></button>
                </div>
              </div>
            ';
          }
        }
      ?>
    </div>  
    <!--- MY PROFILE DISPLAY --->  
    
    <br>
    <div class = "container" style="background-color:#fff">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#"><b>My Inventory</b></a>
      </nav>
    </div>  

    <div class = "container" style="margin-left:8.5%;">
      <br>
      <button type="button" class="btn btn-dark">
        <img src = "image/mobilelegends.jpg" width="50" height="50" alt = "Mobile Legends">
        <a href = "myinventorymobilelegend.php" class="text-light">
          Mobile Legends
        </a>
      </button>
      <button type="button" class="btn btn-dark">
        <img src = "image/dota-2.png" height = "50" width = "50">
        <a href = "myinventorydota2.php" class="text-light">
          Dota 2
        </a>
      </button>
      <button type="button" class="btn btn-dark">
        <img src="image/csgoicon.jpg" height = "50" width = "50">
        <a href = "myinventorycsgo.php" class="text-light">
          CSGO
        </a>
      </button>
      <button type="button" class="btn btn-dark">
        <img src = "image/clashofclan.jpg" width="50" height="50" alt = "Clash of Clan" >
        <a href = "myinventoryclashofclan.php" class="text-light">
          Clash of Clan
        </a>
      </button>
      <button type="button" class="btn btn-dark">
        <img src = "image/valorantlogo.png" width="50" height="50" alt = "Valorant" >
        <a href = "myinventoryvalorant.php" class="text-light">
          Valorant
        </a>
      </button>
      <button type="button" class="btn btn-dark">
        <img src = "image/auction.png" width="50" height="50"/>
        <a href="myinventorybid.php" class="text-light">
          Bid
        </a>
      </button>
    </div>

    <br>
    <div class = "container" style="margin-left:9%;">
      <p><b>Clash Of Clan Account List:</b></p>
      <?php 
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT 
        b.CLASHOFCLAN_ID,
        p.USER_USERNAME,
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
        users p
        WHERE
        b.USER_ID = p.USER_ID 
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "'
        ";

        $result = mysqli_query($conn,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dbclashofclansellaccountID = $row['CLASHOFCLAN_ID'];
            $userID = $row['USER_USERNAME'];
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                          <p><b>Actions:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateClashofClanAccount.php? updateClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteClashofClanAccount.php? deleteClashofClanAccountID='.$dbclashofclansellaccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
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
        }     
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    
  </body>
</html>