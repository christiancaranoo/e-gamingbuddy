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
      <title>Valorant Inventory</title>
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
    <!--- END OF LINE CODE MY PROFILE DISPLAY --->  
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
        
    <!--DISPLAY INVENTORY VALORANT ITEM LIST-->
    <br>
    <div class = "container" style="margin-left:9%;">
      <p><b>Valorant Sell Item List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT 
        b.VALORANT_SELLITEMID,
        p.USER_USERNAME,
        b.VALORANT_SELLITEMNAME,
        b.VALORANT_SELLITEMCOLLECTIONLIST,
        b.VALORANT_SELLITEMWEAPONTYPE,
        b.VALORANT_SELLITEMIMG,
        b.VALORANT_SELLITEMPRICE 

        FROM
        valorantsellitem b,
        users p
        WHERE 
        b.USER_ID = p.USER_ID 
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "'
        ";

        $result = mysqli_query($conn,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            /** FETCH DATA FROM DATABASE
            * FROM TABLE MOBILE LEGENDS SELL ACCOUNT
            * AND DISPLAY DATA
            */
            $valorantsellitemID = $row['VALORANT_SELLITEMID'];
            $userID = $row['USER_USERNAME'];
            $valorantsellitemName = $row['VALORANT_SELLITEMNAME'];
            $valorantsellitemCollectionList = $row['VALORANT_SELLITEMCOLLECTIONLIST'];
            $valorantsellitemWeaponType = $row['VALORANT_SELLITEMWEAPONTYPE'];
            $valorantItemIMG = $row['VALORANT_SELLITEMIMG'];
            $valorantsellitemPrice = $row['VALORANT_SELLITEMPRICE'];
            //display data
                  
            echo'
              <div class="container" style="float:left">
                <div class= "row">
                  <div class = "col">
                    <div class="card border-primary mb-5" style="max-width: 85%;height:90%;">
                      <div class="row g-5">
                                 
                        <div class="col-md-5">
                          <img src="data:image/jpeg/png/jpg;base64,'.base64_encode($valorantItemIMG).'" class="img-fluid rounded-start" alt="Image" height="350" width="350">
                        </div>

                        <div class="col-md-7">
                                      
                          <p><b>Item Name:</b> '.$valorantsellitemName.'</p>
                          <p><b>Collection List:</b> '.$valorantsellitemCollectionList.'</p>
                          <p><b>Weapon Type:</b> '.$valorantsellitemWeaponType.'</p>
                          <p><b>Price:</b> '.$valorantsellitemPrice.'</p>
                          
                          <p><b>Action:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateValorantSellItem.php? updateValorantSellItemID='.$valorantsellitemID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteValorantSellItem.php? deleteValorantSellItemID='.$valorantsellitemID.'" class = "text-light">
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
              </div> 
            ';    
          }
        }
      ?>
    </div>  
    <!--END OF LINE VALORANT SELL ITEM CODE -->

    <!--START OF LINE VALORANT PILOT SERVICE CODE -->
    <div class = "container" style="margin-left:9%;">
      <p><b>Valorant Pilot Service List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT
        b.VALORANT_PILOTSERVICEID,
        p.USER_USERNAME,
        b.VALORANT_PILOTSERVICEFROM,
        b.VALORANT_PILOTSERVICETO,
        b.VALORANT_PILOTSERVICEPRICE

        FROM 
        valorantpilotservice b,
        users p 

        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "'  
        ";

        $result = mysqli_query($conn,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $valorantPSID = $row['VALORANT_PILOTSERVICEID'];
            $userID = $row['USER_USERNAME'];
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantIronRankIMG.png" alt="Iron Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantBronzeRankIMG.png" alt="Bronze Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantSilverRankIMG.png" alt="Silver Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantGoldRankIMG.png" alt="Gold Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantPlatinumRankIMG.png" alt="Platinum Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              ';
            }else if ($valorantPSFROM == "DIAMOND" && $valorantPSTO == "RADIANT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantDiamondRankIMG.png" alt="Diamond Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantImmortalRankIMG.png" alt="Immortal Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$valorantPSFROM.'</p>
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$valorantPSTO.'</p>  
                          <img src = "RankImage/valorantRadiantRankIMG.png" alt="Radiant Rank" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$valorantPSPrice.'</p>
                                
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateValorantPilotService.php? updateValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteValorantPilotService.php? deleteValorantPilotServiceID='.$valorantPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
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

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      

  </body>
</html>

