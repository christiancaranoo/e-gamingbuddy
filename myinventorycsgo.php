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
    <title>CSGO Inventory</title>
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

    <!---START OF LINE CSGO SELL ITEM CODE---->
    <div class="container" style = "margin-left:9%;">
      <p><b>CSGO Sell Item List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT 
        b.CSGO_SELLITEMID, 
        p.USER_USERNAME,
        b.CSGO_SELLITEMNAME,
        b.CSGO_SELLITEMCOLLECTIONLIST,
        b.CSGO_SELLITEMWEAPONTYPE,
        b.CSGO_SELLITEMIMG,
        b.CSGO_SELLITEMPRICE
        FROM
        csgosellitem b, 
        users p
        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "' 
        ";
        $result = mysqli_query($conn,$sql);

        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $csgosellitemID = $row['CSGO_SELLITEMID'];
            $userID = $row['USER_USERNAME'];
            $csgosellitemName = $row['CSGO_SELLITEMNAME'];
            $csgosellitemCollectionList = $row['CSGO_SELLITEMCOLLECTIONLIST'];
            $csgosellitemWeaponType = $row['CSGO_SELLITEMWEAPONTYPE'];
            $csgoItemIMG = $row['CSGO_SELLITEMIMG'];
            $csgosellitemPrice = $row['CSGO_SELLITEMPRICE'];
            //display data
               
            echo'
              <div class="container" style="float:middle">
                <div class= "row">
                  <div class = "col">
                    <div class="card border-primary mb-5" style="max-width: 853px;">
                      <div class="row g-5">
                        
                        <div class="col-md-5">
                            <img src="data:image/jpeg/png/jpg;base64,'.base64_encode($csgoItemIMG).'" class="img-fluid rounded-start" alt="Image" height="350" width="350">
                        </div>

                        <div class="col-md-7">                
                                   
                          <p><b>Item Name:</b> '.$csgosellitemName.'</p>
                          <p><b>Collection List:</b> '.$csgosellitemCollectionList.'</p>
                          <p><b>Weapon Type:</b> '.$csgosellitemWeaponType.'</p>
                          <p><b>Price:</b> '.$csgosellitemPrice.'</p>

                          <p><b>Action:</b></p>
                          <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellItem.php? updateCSGOSellItemID='.$csgosellitemID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellItem.php? deleteCSGOSellItemID='.$csgosellitemID.'" class = "text-light">
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
    <!--END OF CSGO SELL ITEM LINE CODE--->

    <!---START OF CSGO SELL ACCOUNT LINE CODE---->
    <div class="container" style = "margin-left:9%;">
      <p><b>CSGO Sell Account List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT
        b.CSGO_SELLACCOUNTID,
        p.USER_ID,
        b.CSGO_STEAMID,
        b.CSGO_SELLACCOUNTMEDAL,
        b.CSGO_SELLACCOUNTRANK,
        b.CSGO_PRIMESTATUS,
        b.CSGO_STEAMADDRESS,
        b.CSGO_STEAMIDIMG,
        b.CSGO_SELLACCOUNTRANKPRIMESTATUSIMG,
        b.CSGO_SELLACCOUNTPRICE
        FROM 
        `csgosellaccount` b,
        `users` p
        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "' 
        ";
        $result = mysqli_query($conn,$sql);

        //display list of data from database
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dbcsgosellAccountID = $row['CSGO_SELLACCOUNTID'];
            $dbcsgouserID = $row['USER_ID'];
            $dbcsgosteamAddress = $row['CSGO_STEAMID'];
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
                      
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
                            </div>
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
                        
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Steam ID:</b> '.$dbcsgosteamAddress.' </p>
                            </div>
                            <div class = "col">
                              <p><b>Medal:</b> '.$dbcsgoMedal.'</p>
                            </div>
                          </div>
                        </div>
                        <p><b>Prime Status:</b> '.$dbcsgoPrimeStatus.'</p>
                        <p class="card-text">
                          <b>Dota 2 Inventory Link Address:</b>
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
                        <p><b>Action:</b></p>
                        <div class = "row">
                            <div class = "col">
                              <button type="button" class = "btn btn-primary">
                                <a href = "updateCSGOSellAccount.php? updateCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Update
                                </a>
                              </button>
                              <button type="button" class = "btn btn-danger">
                                <a href = "deleteCSGOSellAccount.php? deleteCSGOSellAccountID='.$dbcsgosellAccountID.'" class = "text-light">
                                  Delete
                                </a>
                              </button>
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
    <!----END IF CSGO SELL ACCOUNT CODE---->

    <!--START OF CSGO PILOT SERVICE CODE-->
    <div class="container" style = "margin-left:9%;">
      <p><b>CSGO Pilot Service List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT 
        b.CSGO_PILOTSERVICEID, 
        p.USER_USERNAME,
        b.CSGO_PILOTSERVICEFROM,
        b.CSGO_PILOTSERVICETO,
        b.CSGO_PILOTSERVICEPRICE
        FROM
        csgopilotservice b, 
        users p
        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "' 
        ";
        $result = mysqli_query($conn,$sql);

        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $csgoPSID = $row['CSGO_PILOTSERVICEID'];
            $userID = $row['USER_USERNAME'];
            $csgoPSFROM = $row['CSGO_PILOTSERVICEFROM'];
            $csgoPSTO = $row['CSGO_PILOTSERVICETO'];
            $csgoPSPrice = $row['CSGO_PILOTSERVICEPRICE'];

            if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div>   
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div>  
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER 4"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div>    
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div>    
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SILVER ELITE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div>    
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>
                            
                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GOLD NOVA MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "MASTER GUARDIAN 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "MASTER GUARDIAN 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguish Master Guardian" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "LEGENDARY EAGLE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 1" && $csgoPSTO == "GLOBAL ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver1Image.png" alt="Silver 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER 4"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SILVER ELITE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GOLD NOVA MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "MASTER GUARDIAN 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "MASTER GUARDIAN 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "LEGENDARY EAGLE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 2" && $csgoPSTO == "GLOBAL ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver2Image.png" alt="Silver 2" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER 4"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SILVER ELITE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GOLD NOVA MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "MASTER GUARDIAN 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "MASTER GUARDIAN 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "LEGENDARY EAGLE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 3" && $csgoPSTO == "GLOBAL ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver3Image.png" alt="Silver 3" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                        </div>
                       </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SILVER 4"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SILVER ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:23.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>

                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SILVER ELITE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
              
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GOLD NOVA MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "MASTER GUARDIAN 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "MASTER GUARDIAN 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "LEGENDARY EAGLE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER 4" && $csgoPSTO == "GLOBAL ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilver4Image.png" alt="Silver 4" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "SILVER ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "SILVER ELITE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GOLD NOVA MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "MASTER GUARDIAN 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "MASTER GUARDIAN 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                        <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "LEGENDARY EAGLE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>TO:</b> '.$csgoPSTO.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE" && $csgoPSTO == "GLOBAL ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteImage.png" alt="Silver Elite" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "SILVER ELITE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GOLD NOVA MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "MASTER GUARDIAN 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "MASTER GUARDIAN 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distingguished Master Guardian" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "LEGENDARY EAGLE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "SILVER ELITE MASTER" && $csgoPSTO == "GLOBAL ELITE"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOSilverEliteMasterImage.png" alt="Silver Elite Master" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA 2"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA 3"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GOLD NOVA MASTER"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p> 
                          <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                </div> 
              ';
            }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "MASTER GUARDIAN 1"){
              echo '
                <!--DISPLAYING DATA FROM DATABASE--> 
                <div classs = "container">
                  <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                    <div class="card-body">
            
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                          <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                          <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>

                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>  
                        </div>
                      </div>

                    </div>
                  </div>
                 </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>   
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                          <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>

                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 1" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova1Image.png" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GOLD NOVA 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 2" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova2Image.jpg" alt="Gold Nova 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "GOLD NOVA 3"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 3" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNova3Image.png" alt="Gold Nova 3" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "GOLD NOVA MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                '; 
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA 4" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GOLD NOVA MASTER" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGoldNovaMasterImage.jpg" alt="Gold Nova 4" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "MASTER GUARDIAN 1"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 1" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian1Image.png" alt="Master Guardian 1" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "MASTER GUARDIAN 2"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:23.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                          
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN 2" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardian2Image.png" alt="Master Guardian 2" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "MASTER GUARDIAN ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "MASTER GUARDIAN ELITE" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOMasterGuardianEliteImage.jpg" alt="Master Guardian Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "DISTINGUISHED MASTER GUARDIAN"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "DISTINGUISHED MASTER GUARDIAN" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGODistinguishedMasterGuardianImage.png" alt="Distinguished Master Guardian" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "LEGENDARY EAGLE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleImage.png" alt="Legendary Eagle" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE MASTER" && $csgoPSTO == "LEGENDARY EAGLE MASTER"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE MASTER" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "LEGENDARY EAGLE MASTER" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOLegendaryEagleMasterImage.jpg" alt="Legendary Eagle Master" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SUPREME MASTER FIRSTCLASS" && $csgoPSTO == "SUPREME MASTER FIRSTCLASS"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master First Class" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master Firstclass" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "SUPREME MASTER FIRSTCLASS" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOSupremeMasterFirstClassImage.jpg" alt="Supreme Master First Class" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
              }else if($csgoPSFROM == "GLOBAL ELITE" && $csgoPSTO == "GLOBAL ELITE"){
                echo '
                  <!--DISPLAYING DATA FROM DATABASE--> 
                  <div classs = "container">
                    <div class="card border-primary mb-5" style="width: 40rem;height:24.5rem">
                      <div class="card-body">
            
                        <p class="card-text"><b>Pilot Service Information:</b></p>
                        <div class ="row">
                          <div class = "col">
                            <p><b>FROM:</b> '.$csgoPSFROM.'</p>
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                          <div class = "col">
                            <p><b>TO:</b> '.$csgoPSTO.'</p>  
                            <img src = "RankImage/CSGOGlobalEliteImage.jpg" alt="Global Elite" height="135" width="255">
                          </div>
                        </div>
                        <br>
                        <p><b>Price:</b> '.$csgoPSPrice.'</p>
                            
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateCSGOPilotService.php? updateCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Update
                              </a>
                            </button>

                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteCSGOPilotService.php? deleteCSGOPilotServiceID='.$csgoPSID.'" class = "text-light">
                                Delete
                              </a>
                            </button>  
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 
                ';
            }else{
              echo '
                <div class = "container">
                  <div class="alert alert-danger" style="float:left;height:90px;width: 69.5%;margin-left:100px;" role="alert">
                    <p style="text-align: center;">
                      <b>Attention !</b> According to new rules of Steam, non-Prime CS:GO accounts will not be able to play ranked games.
                      New accounts must buy CS:GO from Steam market to be Prime in CS:GO.<br> Please <a href = "https://store.steampowered.com/news/app/730/view/3059613232566173082" target="_blank" rel="noopener noreferrer">click here</a> to read detailed explanation.</b>
                    </p>
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

