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
    <title>Mobile Legends Inventory</title>
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
        
    <!--DISPLAY INVENTORY MOBILE LEGEND SELL ACCOUNT LIST-->
    <br>
    <div class = "container" style="margin-left:9%;">
      <p><b>Mobile Legends Sell Account List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT 
        b.MLBB_SELLACCOUNTID,
        p.USER_USERNAME,
        b.MLBB_SELLACCOUNTMLID,
        b.MLBB_SELLACCOUNTIGN,
        b.MLBB_SELLACCOUNTWINRATE,
        b.MLBB_SELLACCOUNTHIGHESTRANK,
        b.MLBB_SELLACCOUNTITEMLIST,
        b.MLBB_SELLACCOUNTIDIGNIMG,
        b.MLBB_SELLACCOUNTWINRATEIMG,
        b.MLBB_SELLACCOUNTEMBLEMLVLIMG,
        b.MLBB_SELLACCOUNTPRICE
        FROM
        mlbbsellaccount b,
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
            $dbmlbbSellAccountID = $row['MLBB_SELLACCOUNTID'];
            $dbmlbbuserID = $row['USER_USERNAME'];
            $dbmlbbMLID = $row['MLBB_SELLACCOUNTMLID'];
            $dbmlbbIGN = $row['MLBB_SELLACCOUNTIGN'];
            $dbmlbbWinrate = $row['MLBB_SELLACCOUNTWINRATE'];
            $dbmlbbHighestRank = $row['MLBB_SELLACCOUNTHIGHESTRANK'];
            $dbmlbbItemList = $row['MLBB_SELLACCOUNTITEMLIST'];
            $dbmlbbIDIGNIMG = $row['MLBB_SELLACCOUNTIDIGNIMG'];
            $dbmlbbWinrateIMG = $row['MLBB_SELLACCOUNTWINRATEIMG'];
            $dbmlbbEmblemLVLIMG = $row['MLBB_SELLACCOUNTEMBLEMLVLIMG'];
            $dbmlbbPrice = $row['MLBB_SELLACCOUNTPRICE'];
                    
            //DISPLAYING SELL ACCOUNT DATA FROM DATABASE 
            //DISPLAYING SELL ACCOUNT DATA FROM DATABASE 
            if($dbmlbbHighestRank == "WARRIOR 5" || $dbmlbbHighestRank == "WARRIOR 4"  || $dbmlbbHighestRank == "WARRIOR 3" || $dbmlbbHighestRank == "WARRIOR 2" || $dbmlbbHighestRank == "WARRIOR 1"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src = "RankImage/mobilelegendsWarriorIMG.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                            </div>
                            <div class = "col">
                              <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                            </div>
                          </div>
                          <div class = "col">
                            <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                          </div>
                        </div>
                        <div class = "row justify-content-start">
                          <p><b>Additional Information with Images:
                            <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                          </b></p>
                        </div>  
                        <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                                Update
                              </a>
                            </button>
                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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

            }else if($dbmlbbHighestRank == "ELITE 5" || $dbmlbbHighestRank == "ELITE 4" || $dbmlbbHighestRank == "ELITE 3" || $dbmlbbHighestRank == "ELITE 2" || $dbmlbbHighestRank == "ELITE 1"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src = "RankImage/mobilelegendsEliteIMG.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                            </div>
                            <div class = "col">
                              <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                            </div>
                          </div>
                          <div class = "col">
                            <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                          </div>
                        </div>
                        <div class = "row justify-content-start">
                          <p><b>Additional Information with Images:
                            <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                          </b></p>
                        </div>  
                        <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                                Update
                              </a>
                            </button>
                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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

            }else if($dbmlbbHighestRank == "MASTER 5" || $dbmlbbHighestRank == "MASTER 4" || $dbmlbbHighestRank == "MASTER 3" || $dbmlbbHighestRank == "MASTER 2" || $dbmlbbHighestRank == "MASTER 1" ){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src = "RankImage/mobilelegendsMasterIMG.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                            </div>
                            <div class = "col">
                              <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                            </div>
                          </div>
                          <div class = "col">
                            <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                          </div>
                        </div>
                        <div class = "row justify-content-start">
                          <p><b>Additional Information with Images:
                            <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                          </b></p>
                        </div>  
                        <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                                Update
                              </a>
                            </button>
                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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

            }else if($dbmlbbHighestRank == "GRANDMASTER 5" || $dbmlbbHighestRank == "GRANDMASTER 4" || $dbmlbbHighestRank == "GRANDMASTER 3" || $dbmlbbHighestRank == "GRANDMASTER 2" || $dbmlbbHighestRank == "GRANDMASTER 1"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src = "RankImage/mobilelegendsGrandmasterIMG.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                            </div>
                            <div class = "col">
                              <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                            </div>
                          </div>
                          <div class = "col">
                            <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                          </div>
                        </div>
                        <div class = "row justify-content-start">
                          <p><b>Additional Information with Images:
                            <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                          </b></p>
                        </div>  
                        <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                                Update
                              </a>
                            </button>
                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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

            }else if($dbmlbbHighestRank == "EPIC 5" || $dbmlbbHighestRank == "EPIC 4" || $dbmlbbHighestRank == "EPIC 3" || $dbmlbbHighestRank == "EPIC 2" || $dbmlbbHighestRank == "EPIC 1"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src = "RankImage/mobilelegendsEpicIMG.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                            </div>
                            <div class = "col">
                              <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                            </div>
                          </div>
                          <div class = "col">
                            <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                          </div>
                        </div>
                        <div class = "row justify-content-start">
                          <p><b>Additional Information with Images:
                            <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                          </b></p>
                        </div>  
                        <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                                Update
                              </a>
                            </button>
                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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

            }else if($dbmlbbHighestRank == "LEGEND 5" || $dbmlbbHighestRank == "LEGEND 4" || $dbmlbbHighestRank == "LEGEND 3" || $dbmlbbHighestRank == "LEGEND 2" || $dbmlbbHighestRank == "LEGEND 1"){
              
              echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsLegendIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <div class = "row">
                        <div class = "row">
                          <div class = "col">
                            <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                          </div>
                          <div class = "col">
                            <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                          </div>
                        </div>
                        <div class = "col">
                          <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                        </div>
                      </div>
                      <div class = "row justify-content-start">
                        <p><b>Additional Information with Images:
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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

            }else if($dbmlbbHighestRank == "MYTHIC 5" || $dbmlbbHighestRank == "MYTHIC 4" || $dbmlbbHighestRank == "MYTHIC 3" || $dbmlbbHighestRank == "MYTHIC 2" || $dbmlbbHighestRank == "MYTHIC 1"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src = "RankImage/mobilelegendsMythicIMG.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                            </div>
                            <div class = "col">
                              <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                            </div>
                          </div>
                          <div class = "col">
                            <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                          </div>
                        </div>
                        <div class = "row justify-content-start">
                          <p><b>Additional Information with Images:
                            <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                          </b></p>
                        </div>  
                        <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                                Update
                              </a>
                            </button>
                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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

            }else if($dbmlbbHighestRank == "MYTHICAL GLORY"){
              
              echo '
                <div class="card mb-3" style="width: 58rem;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" width="250" height="250" class="border border-primary rounded">
                      <br><br>
                      <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank .'</b></p>      
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class = "row">
                          <div class = "row">
                            <div class = "col">
                              <p><b>Mobile Legends ID:</b> '.$dbmlbbMLID.'</p>
                            </div>
                            <div class = "col">
                              <p><b>Mobile Legends IGN:</b> '.$dbmlbbIGN.'</p>
                            </div>
                          </div>
                          <div class = "col">
                            <p><b>Overall Winrate:</b> '.$dbmlbbWinrate.'</p>
                          </div>
                        </div>
                        <div class = "row justify-content-start">
                          <p><b>Additional Information with Images:
                            <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                          </b></p>
                        </div>  
                        <p><b>Price:</b> '.$dbmlbbPrice.'</p>
                        <p><b>Action:</b></p>
                        <div class = "row">
                          <div class = "col">
                            <button type="button" class = "btn btn-primary">
                              <a href = "updateMobileLegendsSellAccount.php? updateMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
                                Update
                              </a>
                            </button>
                            <button type="button" class = "btn btn-danger">
                              <a href = "deleteMobileLegendsSellAccount.php? deleteMobileLegendsSellAccountID='.$dbmlbbSellAccountID.'" class = "text-light">
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
    <!--END OF LINE MOBILE LEGENDS SELL ACCOUNT CODE -->

    <!--START OF LINE MOBILE LEGENDS PILOT SERVICE CODE -->
    <div class = "container" style="margin-left:9%;">
      <p><b>Mobile Legends Pilot Service List:</b></p>
      <?php
        include 'connectDatabase.php';
        $useruserName = $_SESSION['username'];
        $sql = "SELECT
        b.ML_PILOTSERVICEID,
        p.USER_USERNAME,
        b.ML_PILOTSERVICEFROM,
        b.ML_PILOTSERVICETO,
        b.ML_PILOTSERVICEPRICE

        FROM 
        mlpilotservice b,
        users p 

        WHERE b.USER_ID = p.USER_ID
        AND p.USER_USERNAME = '" . $_SESSION[ "username" ] . "'  
        ";

        $result = mysqli_query($conn,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $mlPSID = $row['ML_PILOTSERVICEID'];
            $userID = $row['USER_USERNAME'];
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
                      <p class="card-text"><b>Pilot Service Information:</b></p>
                      <div class ="row">
                        <div class = "col">
                          <p><b>FROM: </b>'.$mlPSFROM.'</p>
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                        <div class = "col">
                          <p><b>TO:</b> '.$mlPSTO.'</p>  
                          <img src = "RankImage/mobilelegendsWarriorIMG.png" alt="Warrior" height="135" width="135">
                        </div>
                      </div>
                      <br>
                      <p><b>Price:</b> '.$mlPSPrice.'</p>

                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                             
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                       
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                        
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                       
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                           
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                         
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                         
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                          
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                             
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                          
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                           
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                          
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                       
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                         
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                        
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
                
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                       
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                             
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                      
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                            
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                        
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                       
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                          
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                              
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Delete
                            </a>
                          </button>
                        </div>
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
                  <div class="card border-primary mb-5" style="width: 40rem;height:25.5rem">
                    <div class="card-body">
              
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
                           
                      <p><b>Action:</b></p>
                      <div class = "row">
                        <div class = "col">
                          <button type="button" class = "btn btn-primary">
                            <a href = "updateMobileLegendsPilotService.php? updateMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
                              Update
                            </a>
                          </button>
                          <button type="button" class = "btn btn-danger">
                            <a href = "deleteMobileLegendsPilotService.php? deleteMobileLegendsPilotServiceID='.$mlPSID.'" class = "text-light">
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
    <!--END OF LINE MOBILE LEGENDS PILOT SERVICE CODE -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>

  </body>
</html>

