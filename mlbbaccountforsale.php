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
  $useruserName = $_SESSION['username'];
  if(isset($_POST['mlbbsellaccount'])){
    $mlbbsellaccountID = $_POST['mlbbsellaccountID'];
    $mlbbsellaccountIGN = $_POST['mlbbsellaccountIGN'];
    $mlbbsellaccountWinrate = $_POST['mlbbsellaccountWinrate'];
    $mlbbsellaccountHighestRank = $_POST['mlbbsellaccountHighestRank'];
    $mlbbsellaccountItemList = $_POST['mlbbsellaccountItemList'];
    $mlbbsellaccountPrice = $_POST['mlbbsellaccountPrice'];

    //storing image mobile legend sell account id ign
    $mlbbsellaccountIDIGNIMGImageName = $_FILES['mlbbsellaccountIDIGNIMG']['name'];
    $mlbbsellaccountIDIGNIMGImageType = $_FILES['mlbbsellaccountIDIGNIMG']['type'];
    $mlbbsellaccountIDIGNIMGImageTempLoc = $_FILES['mlbbsellaccountIDIGNIMG']['tmp_name'];
    $mlbbsellaccountIDIGNIMGImageImageSize = $_FILES['mlbbsellaccountIDIGNIMG']['size'];
    //file path
    //to store images to the folder
    $mlbbsellaccountIDIGNIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountIDIGNIMG']['tmp_name']));
    $mlbbsellaccountIDIGNIMGimg_ex = pathinfo($mlbbsellaccountIDIGNIMGImageName, PATHINFO_EXTENSION);
    $mlbbsellaccountIDIGNIMGimg_ex_lc = strtolower($mlbbsellaccountIDIGNIMGimg_ex);
    $mlbbsellaccountIDIGNIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountIDIGNIMGimg_ex_lc; 
    $mlbbsellaccountIDIGNIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountIDIGNIMGnew_img_name;
    move_uploaded_file($mlbbsellaccountIDIGNIMGImageTempLoc,$mlbbsellaccountIDIGNIMGimg_upload_path);

    //storing image mobile legend sell account emblem level
    $mlbbsellaccountEmblemLVLIMGImageName = $_FILES['mlbbsellaccountEmblemLVLIMG']['name'];
    $mlbbsellaccountEmblemLVLIMGImageType = $_FILES['mlbbsellaccountEmblemLVLIMG']['type'];
    $mlbbsellaccountEmblemLVLIMGImageTempLoc = $_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name'];
    $mlbbsellaccountEmblemLVLIMGImageSize = $_FILES['mlbbsellaccountEmblemLVLIMG']['size'];
    //file path
    //to store images to the folder
    $mlbbsellaccountEmblemLVLIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name']));
    $mlbbsellaccountEmblemLVLIMGimg_ex = pathinfo($mlbbsellaccountEmblemLVLIMGImageName, PATHINFO_EXTENSION);
    $mlbbsellaccountEmblemLVLIMGimg_ex_lc = strtolower($mlbbsellaccountEmblemLVLIMGimg_ex);
    $mlbbsellaccountEmblemLVLIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountEmblemLVLIMGimg_ex_lc; 
    $mlbbsellaccountEmblemLVLIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountEmblemLVLIMGnew_img_name;
    move_uploaded_file($mlbbsellaccountEmblemLVLIMGImageTempLoc,$mlbbsellaccountEmblemLVLIMGimg_upload_path);

    //storing image mobile sell account winrate image
    $mlbbsellaccountWinrateIMGImageName = $_FILES['mlbbsellaccountWinrateIMG']['name'];
    $mlbbsellaccountWinrateIMGImageType = $_FILES['mlbbsellaccountWinrateIMG']['type'];
    $mlbbsellaccountWinrateIMGImageTempLoc = $_FILES['mlbbsellaccountWinrateIMG']['tmp_name'];
    $mlbbsellaccountWinrateIMGImageSize = $_FILES['mlbbsellaccountWinrateIMG']['size'];
    //file path
    //to store images to the folder
    $mlbbsellaccountWinrateIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountWinrateIMG']['tmp_name']));
    $mlbbsellaccountWinrateIMGimg_ex = pathinfo($mlbbsellaccountWinrateIMGImageName, PATHINFO_EXTENSION);
    $mlbbsellaccountWinrateIMGimg_ex_lc = strtolower($mlbbsellaccountWinrateIMGimg_ex);
    $mlbbsellaccountWinrateIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountWinrateIMGimg_ex_lc; 
    $mlbbsellaccountWinrateIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountWinrateIMGnew_img_name;
    move_uploaded_file($mlbbsellaccountWinrateIMGImageTempLoc,$mlbbsellaccountWinrateIMGimg_upload_path);
    
    //insert to the database
    $sql = "INSERT INTO mlbbsellaccount (USER_ID,MLBB_SELLACCOUNTMLID,MLBB_SELLACCOUNTIGN,MLBB_SELLACCOUNTWINRATE,	
    MLBB_SELLACCOUNTHIGHESTRANK,MLBB_SELLACCOUNTITEMLIST,MLBB_SELLACCOUNTIDIGNIMG,MLBB_SELLACCOUNTWINRATEIMG,
    MLBB_SELLACCOUNTEMBLEMLVLIMG,MLBB_SELLACCOUNTPRICE) VALUES ((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
    '$mlbbsellaccountID','$mlbbsellaccountIGN','$mlbbsellaccountWinrate','$mlbbsellaccountHighestRank',
    '$mlbbsellaccountItemList','$mlbbsellaccountIDIGNIMG','$mlbbsellaccountWinrateIMG','$mlbbsellaccountEmblemLVLIMG','$mlbbsellaccountPrice')";
    $result = mysqli_query($conn,$sql);
    if($result){//checking if the data is successfully inserted .. if true 
      $messageSuccess = "Successfully Mobile Legends sell account";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
    }else{//if false
      $messageFailed = "Unsuccessful Mobile Legends sell account please try again";
      echo "<script type='text/javascript'>alert('$messageFailed');</script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Mobile Legends Account for Sale</title>
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">Buy Mobile Legends Account</h2>
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
          <!--WHERE USER CAN SELL DOTA 2 ITEMS-->      
          <form method = "post" enctype="multipart/form-data">  
            <!--START MODAL CODE-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!--START MODAL DIALOG-->
              <div class="modal-dialog" role="document">
                <!--START MODAL CONTENT-->
                <div class="modal-content">
                  <div class="modal-header">
                    <img src = "image/mobilelegends.jpg" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Mobile Legends Sell Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Mobile Legends ID:</b></label>
                      <input type="text" class="form-control" name="mlbbsellaccountID" id="formGroupExampleInput" placeholder="Input ML ID here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Mobile Legends IGN:</b></label>
                      <input type="text" class="form-control" name="mlbbsellaccountIGN" id="formGroupExampleInput" placeholder="Input ML IGN here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Overall Winrate:</b></label>
                      <input type="text" class="form-control" name="mlbbsellaccountWinrate" id="formGroupExampleInput" placeholder="Input ML Winrate here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <div class = "row">
                        <div class = "col-sm">
                          <label for="recipient-name" class="col-form-label"><b>Highest Rank:</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Specific your Mobile Legends Rank (e.g Epic 1, Legend 5, Mythic 2)</small></label>         
                          <select class="form-select" name="mlbbsellaccountHighestRank" aria-label="Default select example">
                            <!--OPTION LIST MOBILE LEGENDS RANKS-->
                            <option value="WARRIOR 5" selected="selected">WARRIOR 5</option>
                            <option value="WARRIOR 4" selected="selected">WARRIOR 4</option>
                            <option value="WARRIOR 3" selected="selected">WARRIOR 3</option>
                            <option value="WARRIOR 2" selected="selected">WARRIOR 2</option>
                            <option value="WARRIOR 1" selected="selected">WARRIOR 1</option>
                            <option value="ELITE 5" selected="selected">ELITE 5</option>
                            <option value="ELITE 4" selected="selected">ELITE 4</option>
                            <option value="ELITE 3" selected="selected">ELITE 3</option>
                            <option value="ELITE 2" selected="selected">ELITE 2</option>
                            <option value="ELITE 1" selected="selected">ELITE 1</option>
                            <option value="MASTER 5" selected="selected">MASTER 5</option>
                            <option value="MASTER 4" selected="selected">MASTER 4</option>
                            <option value="MASTER 3" selected="selected">MASTER 3</option>
                            <option value="MASTER 2" selected="selected">MASTER 2</option>
                            <option value="MASTER 1" selected="selected">MASTER 1</option>
                            <option value="GRANDMASTER 5" selected="selected">GRANDMASTER 5</option>
                            <option value="GRANDMASTER 4" selected="selected">GRANDMASTER 4</option>
                            <option value="GRANDMASTER 3" selected="selected">GRANDMASTER 3</option>
                            <option value="GRANDMASTER 2" selected="selected">GRANDMASTER 2</option>
                            <option value="GRANDMASTER 1" selected="selected">GRANDMASTER 1</option>
                            <option value="EPIC 5" selected="selected">EPIC 5</option>
                            <option value="EPIC 4" selected="selected">EPIC 4</option>
                            <option value="EPIC 3" selected="selected">EPIC 3</option>
                            <option value="EPIC 2" selected="selected">EPIC 2</option>
                            <option value="EPIC 1" selected="selected">EPIC 1</option>
                            <option value="LEGEND 5" selected="selected">LEGEND 5</option>
                            <option value="LEGEND 4" selected="selected">LEGEND 4</option>
                            <option value="LEGEND 3" selected="selected">LEGEND 3</option>
                            <option value="LEGEND 2" selected="selected">LEGEND 2</option>
                            <option value="LEGEND 1" selected="selected">LEGEND 1</option>
                            <option value="MYTHIC 5" selected="selected">MYTHIC 5</option>
                            <option value="MYTHIC 4" selected="selected">MYTHIC 4</option>
                            <option value="MYTHIC 3" selected="selected">MYTHIC 3</option>
                            <option value="MYTHIC 2" selected="selected">MYTHIC 2</option>
                            <option value="MYTHIC 1" selected="selected">MYTHIC 1</option>
                            <option value="MYTHICAL GLORY" selected="selected">MYTHICAL GLORY</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class = "row">
                        <div class = "col-sm">
                          <label for="message-text" class="col-form-label"><b>Items:</b></label>
                          <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Input how many items do you have based on item rarity.</small>
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <div class="form-floating">
                          <textarea class="form-control" name="mlbbsellaccountItemList" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" autocomplete="off" required></textarea>
                          <label for="floatingTextarea2" style="font-size: small;">Write full details list of items</label>
                        </div>
                      </div>
                      <label><b>Upload Photo</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Upload photo as proof of sell account.</small></label>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Upload Photo of your Mobile Legends ID with IGN</b></label>
                        <div class="mb-3">
                          <input class="form-control" name="mlbbsellaccountIDIGNIMG" type="file" id="formFile" accept="image/*" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Upload Photo of Overall Winrate</b></label>
                        <div class="mb-3">
                          <input class="form-control" name="mlbbsellaccountWinrateIMG" type="file" id="formFile" accept="image/*" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Upload Photo of All Emblem Levels</b></label>
                        <div class="mb-3">
                          <input class="form-control" name="mlbbsellaccountEmblemLVLIMG" type="file" id="formFile" accept="image/*" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price:</b></label>
                        <input type="text" name="mlbbsellaccountPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-primary" name="mlbbsellaccount" value="SELL ACCOUNT">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                    </div>
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
    <div class = "container" style="float: left;width: 320px;height: 1550vh;overflow-y: auto;padding-top: 20px;top: 56px;">  
        <div class="btn-group-vertical">             
          <!--START PRICE MLBB ACCOUNT CODE-->
          <div class = "row">
            <div class = "col-sm">
              <h5 style = "font-size: medium">Price</h5>
              <select class="form-select" aria-label="Default select example" style="width:200px;">
                <!--OPTION LIST PRICE CLASH OF CLAN-->
                <option value="LOWESTPRICE">LOWEST PRICE</option>
                <option value="HIGHESTPRICE">HIGHEST PRICE</option>
              </select>  
              <br>
              <button type="submit" class="btn btn-primary btn-sm" style="width:205px;"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
              <!--END PRICE VALORANT ITEMS CODE-->
            </div>
          </div> 
      </div>  
    </div>

    <!--DISPLAY ALL DATA FROM DATABASE-->     
    <?php
      $sql = "SELECT
      b.MLBB_SELLACCOUNTID,
      concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
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
      users u
      WHERE b.USER_ID = u.USER_ID";
      $result = mysqli_query($conn,$sql);
      //display list of data from database
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $dbmlbbsellaccountID = $row['MLBB_SELLACCOUNTID'];
          $userID = $row['Name'];
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
          if($dbmlbbHighestRank == "WARRIOR 5" || $dbmlbbHighestRank == "WARRIOR 4"  || $dbmlbbHighestRank == "WARRIOR 3"|| $dbmlbbHighestRank == "WARRIOR 2" || $dbmlbbHighestRank == "WARRIOR 1"){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsWarriorIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

          }else if($dbmlbbHighestRank == "ELITE 5" || $dbmlbbHighestRank == "ELITE 4" || $dbmlbbHighestRank == "ELITE 3" || $dbmlbbHighestRank == "ELITE 2" || $dbmlbbHighestRank == "ELITE 1"){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsEliteIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

          }else if($dbmlbbHighestRank == "MASTER 5" || $dbmlbbHighestRank == "MASTER 4" || $dbmlbbHighestRank == "MASTER 3" || $dbmlbbHighestRank == "MASTER 2" || $dbmlbbHighestRank == "MASTER 1" ){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsMasterIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

          }else if($dbmlbbHighestRank == "GRANDMASTER 5" || $dbmlbbHighestRank == "GRANDMASTER 4" || $dbmlbbHighestRank == "GRANDMASTER 3" || $dbmlbbHighestRank == "GRANDMASTER 2" || $dbmlbbHighestRank == "GRANDMASTER 1"){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsGrandmasterIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

          }else if($dbmlbbHighestRank == "EPIC 5" || $dbmlbbHighestRank == "EPIC 4" || $dbmlbbHighestRank == "EPIC 3" || $dbmlbbHighestRank == "EPIC 2" || $dbmlbbHighestRank == "EPIC 1"){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsEpicIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

          }else if($dbmlbbHighestRank == "LEGEND 5" || $dbmlbbHighestRank == "LEGEND 4" || $dbmlbbHighestRank == "LEGEND 3" || $dbmlbbHighestRank == "LEGEND 2" || $dbmlbbHighestRank == "LEGEND 1"){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsLegendIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

          }else if($dbmlbbHighestRank == "MYTHIC 5" || $dbmlbbHighestRank == "MYTHIC 4" || $dbmlbbHighestRank == "MYTHIC 3" || $dbmlbbHighestRank == "MYTHIC 2" || $dbmlbbHighestRank == "MYTHIC 1"){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsMythicIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> &emsp;&emsp;HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

          }else if($dbmlbbHighestRank == "MYTHICAL GLORY"){
            
            echo '
              <div class="card mb-3" style="width: 58rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src = "RankImage/mobilelegendsMythicalGloryIMG.png" width="250" height="250" class="border border-primary rounded">
                    <br><br>
                    <p><b> HIGHEST RANK: '.$dbmlbbHighestRank.'</b></p>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-title"><b>Seller Name:</b>  '.$userID.'</b> <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></p>
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
                          <a href= "viewMobileLegendsImage.php? viewMobileLegendsSellAccountID='.$dbmlbbsellaccountID.'" role="button" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click Here</a>
                        </b></p>
                      </div>  
                      <p><b>Price:</b> '.$dbmlbbPrice.'</p>

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

                      <div class="btn-group" style="position:absolute;left: 570px;top: 18px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportMLBBSellAccount.php? reportMLBBSellAccountID='.$dbmlbbsellaccountID.'">
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

