<?php
include 'connectDatabase.php';
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
    <title>Dota 2 Inventory</title>
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
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
      
    <!----START OF LINE DOTA 2 SELL ITEM CODE--->

    <div class="container" style = "margin-left:9%;">
      <p><b>Dota 2 Sell Item List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT 
        b.DOTA2_SELLITEMID, 
        p.USER_USERNAME,
        b.DOTA2_SELLITEMNAME,
        b.DOTA2_SELLITEMHERO,
        b.DOTA2_SELLITEMRARITY,
        b.DOTA2_SELLITEMIMG,
        b.DOTA2_SELLITEMPRICE
        FROM
        dota2sellitem b, 
        users p
        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "' 
        ";
        $result = mysqli_query($conn,$sql);

        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dbdota2sellItemID = $row['DOTA2_SELLITEMID'];
            $userID = $row['USER_USERNAME'];
            $dota2sellitemName = $row['DOTA2_SELLITEMNAME'];
            $dota2sellitemHero = $row['DOTA2_SELLITEMHERO'];
            $dota2sellitemRarity = $row['DOTA2_SELLITEMRARITY'];
            $dota2sellitemIMG = $row['DOTA2_SELLITEMIMG'];
            $dota2sellitemPrice = $row['DOTA2_SELLITEMPRICE']; 
            //display data
           echo'
              <div class="container" style="float:center">
                <div class= "row">
                  <div class = "col">
                    <div class="card border-primary mb-5" style="max-width: 85.5%;height:88.5%;">
                      <div class="row g-5">
                                    
                        <div class="col-md-5">
                          <img src="data:image/jpeg/png/jpg;base64,'.base64_encode($dota2sellitemIMG).'" class="img-fluid rounded-start" alt="Image" height="350" width="350">
                        </div>

                        <div class="col-md-7">

                          <p><b>Item Name:</b> '.$dota2sellitemName.'</p>
                          <p><b>Hero:</b> '.$dota2sellitemHero.'</p>
                          <p><b>Rarity:</b> '.$dota2sellitemRarity.'</p>
                          <p><b>Price:</b> '.$dota2sellitemPrice.'</p>
                          
                          <p><b>Action:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateDota2SellItem.php? updateDota2SellItemID='.$dbdota2sellItemID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteDota2SellItem.php? deleteDota2SellItemID='.$dbdota2sellItemID.'" class = "text-light">
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
    <!--- END OF CODE LINE DOTA 2 SELL ITEM-->

    <!---START OF CODE LINE DOTA 2 SELL ACCOUNT---->
    <div class="container" style = "margin-left:9%;">
      <p><b>Dota 2 Sell Account List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT
        b.DOTA2_SELLACCOUNTID,
        p.USER_ID,
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
        `dota2sellaccount` b,
        `users` p 
        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . " ' 
        ";
        $result = mysqli_query($conn,$sql);

        //display list of data from database
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dbdota2SellAccountID = $row['DOTA2_SELLACCOUNTID'];
            $dbdota2userID = $row['USER_ID'];
            $dbsteamID = $row['DOTA2_STEAMID'];
            $dbdota2IDNumber = $row['DOTA2_IDNUMBER'];
            $dbdota2Rank = $row['DOTA2_RANK'];
            $dbdota2MMR = $row['DOTA2_MMR'];
            $dbdota2SteamAddressInventory = $row['DOTA2_STEAMADDRESSINVENTORY'];
            $dbdota2SteamIDIMG = $row['DOTA2_STEAMIDIMG'];
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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>

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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>

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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>

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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>

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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>

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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>

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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>

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
                        <p><b>Action:</b></p>
                        <button type="button" class="btn btn-primary btn-md">
                          <a href = "updateDota2SellAccount.php? updateDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Update
                          </a>
                        </button>
                        <button type="button" class="btn btn-danger btn-md">
                          <a href = "deleteDota2SellAccount.php? deleteDota2AccountID='.$dbdota2SellAccountID.'" class = "text-light">
                            Delete
                          </a>
                        </button>
                        
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
    <!---END OF LINE DOTA 2 SELL ACCOUNT CODE---->

    <!--START OF LINE DOTA 2 PILOT SERVICE CODE--->
    <div class="container" style = "margin-left:9%;">
      <p><b>Dota 2 Pilot Service List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT 
        b.DOTA2_PSID, 
        p.USER_USERNAME,
        b.DOTA2_PSFROM,
        b.DOTA2_PSTO,
        b.DOTA2_PSPRICE
        FROM
        dota2pilotservice b, 
        users p
        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "' 
        ";
        $result = mysqli_query($conn,$sql);

        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dota2PSID = $row['DOTA2_PSID'];
            $userID = $row['USER_USERNAME'];
            $dota2PSFROM = $row['DOTA2_PSFROM'];
            $dota2PSTO = $row['DOTA2_PSTO'];
            $dota2PSPrice = $row['DOTA2_PSPRICE'];

            //if herald to herald
            if($dota2PSFROM == "HERALD" && $dota2PSTO == "HERALD"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
              //if herald to guardian
            }else if($dota2PSFROM == "HERALD" && $dota2PSTO == "GUARDIAN" ){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div> 
              ';
            }else if($dota2PSFROM == "HERALD" && $dota2PSTO == "CRUSADER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "HERALD" && $dota2PSTO == "ARCHON"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "HERALD" && $dota2PSTO == "LEGEND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>   
              ';
            }else if($dota2PSFROM == "HERALD" && $dota2PSTO == "ANCIENT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "HERALD" && $dota2PSTO == "DIVINE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "HERALD" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2HeraldImage.png" alt="Guardian" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "GUARDIAN"){
              echo ' 
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "CRUSADER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "ARCHON"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "LEGEND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "ANCIENT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "DIVINE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>                
              ';
            }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2GuardianImage.png" alt="Herald" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "CRUSADER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }
            else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "ARCHON"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "LEGEND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/dota2CrusaderIMG.png" alt="Crusader" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/dota2LegendIMG.png" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "ANCIENT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';  
            }else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "DIVINE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2CrusaderImage.jpg" alt="Crusader" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "ARCHON"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>
              ';
            }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "LEGEND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>  
              ';
            }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "ANCIENT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>   
              ';
            }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "DIVINE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>   
              ';
            }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2ArchonImage.jpg" alt="Archon" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>    
              ';
            }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "LEGEND"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>   
              ';
            }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "ANCIENT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>  
              ';
            }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "DIVINE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>     
              ';
            }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2LegendImage.jpg" alt="Legend" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>     
              ';
            }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "ANCIENT"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>   
              ';
            }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "DIVINE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>   
              ';                   
            }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2AncientImage.jpg" alt="Ancient" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>     
              ';
            }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "DIVINE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>  
              ';
            }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
      
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2DivineImage.jpg" alt="Divine" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div>  
              ';
            }else if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "IMMORTAL"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:27.5rem">
                    <div class="card-body">
        
                      <p><b>Pilot Servicer ID:</b> '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$dota2PSFROM.'</p>
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$dota2PSTO.'</p>  
                          <img src = "RankImage/Dota2ImmortalImage.jpg" alt="Immortal" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$dota2PSPrice.'</p>
                        
                      <p><b>Action:</b></p>

                      <button type="button" class="btn btn-primary btn-md">
                        <a href = "updateDota2PilotService.php? updateDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Update
                        </a>
                      </button>
                      <button type="button" class="btn btn-danger btn-md">
                        <a href = "deleteDota2PilotService.php? deleteDota2PilotServiceID='.$dota2PSID.'" class = "text-light">
                          Delete
                        </a>
                      </button>

                    </div>
                  </div>
                </div> 
              ';
            }
            
          }
        }
      ?>
    </div>
    <!--END OF LINE DOTA 2 PILOT SERVICE CODE--->
    
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

