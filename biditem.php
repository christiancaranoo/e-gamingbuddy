<?php
include 'connectDatabase.php';
//session start after log in 
session_start();

$messageFailed="";
$messageSuccess="";
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
else{
  //username 
  $useruserName = $_SESSION['username'];
  if(isset($_POST['bidItem'])){
    $biditemName = mysqli_real_escape_string($conn,$_POST['biditemName']);
    $biditemDescription = mysqli_real_escape_string($conn,$_POST['biditemDescription']);
    $biditemGames = mysqli_real_escape_string($conn,$_POST['biditemGames']);
    $biditemSetDateTo = mysqli_real_escape_string($conn,$_POST['biditemSetDateTo']);
    $biditemPrice = mysqli_real_escape_string($conn,$_POST['biditemPrice']);
    //storing image to the database
    $imageName = $_FILES['biditemIMG']['name'];
    $imageType = $_FILES['biditemIMG']['type'];
    $imageTempLoc = $_FILES['biditemIMG']['tmp_name'];
    $imageSize = $_FILES['biditemIMG']['size'];

    //file path
    //to store images to the folder
    $fileIMG = addslashes(file_get_contents($_FILES['biditemIMG']['tmp_name']));
    $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
    $img_upload_path = 'bidIMGDb/'.$new_img_name;
    move_uploaded_file($imageTempLoc,$img_upload_path);

    $sql = "INSERT INTO `biditem` (USER_ID,BID_ITEMNAME,BID_ITEMDESCRIPTION,BID_ITEMGAMES,
    BID_ITEMIMG,BID_ITEMSETDATETO,BID_ITEMPRICE)
    VALUES((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
    '$biditemName','$biditemDescription','$biditemGames','$fileIMG','$biditemSetDateTo','$biditemPrice')";

    $result = mysqli_query($conn, $sql);
    if($result){
      $messageSuccess = "Successfully Bid item ";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
    }
    else{
      $messageFail = "Unsuccessful Bid item please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }     
  }   
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Bid Item</title>
    <!--BOOTSTRAP 4 AND 5 EXTENSION-->
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <a class="nav-link" href="#" style="color: white;"><i class = "fa fa-gavel"></i>Bid</a>
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
            <img src = "image/mobilelegends.jpg" width="30" height="30" alt = "Mobile Legends">
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
          <h2 style="font-family: 'Poppins',sans-serif;color: #6e706f;font-size: x-large;">List Bid Items</h2>
        </div>
        <!--END 1ST FLEX CODE-->
        <!--START 2ND FLEX CODE-->
        <div class="p-2">
          <p style="color: #6e706f;font-family: 'Poppins',sans-serif;color: #6e706f;font-size: 16px;">You want to bid item?</p>
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
                    <img src = "image/auction.png" width="30">
                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Bid Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Item Name:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Item Name here" name="biditemName" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Item Description:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Item description here" name="biditemDescription" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label"><b>Games:</b></label>
                      <select class="form-select" aria-label="Default select example" name="biditemGames">
                        <!--OPTION LIST DOTA 2 HERO-->
                        <option value="DOTA 2" selected="selected">DOTA 2</option>
                        <option value="CSGO" selected="selected">CSGO</option>
                        <option value="VALORANT" selected="selected">VALORANT</option>
                        <option value="MOBILE LEGENDS" selected="selected">MOBILE LEGENDS</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Upload photo of the item</b></label>
                      <div class="mb-3">
                        <input class="form-control" type="file" accept="image/*" name="biditemIMG" id="biditemIMG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Set Date and Time to:</b></label>
                      <input type="datetime-local" class="form-control" id="formGroupExampleInput"  name="biditemSetDateTo" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Starting Price:</b></label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" name="biditemPrice" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="modal-footer"> 
                    <input type="submit" class="btn btn-primary" name="bidItem" value="BID ITEM">
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
        <!--END RARITY DOTA 2 ITEMS CODE-->
        <div class = "row">
          <div class = "col-sm">
            <h5 style = "font-size: medium">Games</h5>

            <select class="form-select" aria-label="Default select example" style="width:225px;">
              <!--OPTION LIST PRICE CLASH OF CLAN-->
              <option value="DOTA 2">
                DOTA 2
              </option>

              <option value="CSGO">
                CSGO
              </option>
            </select>  
            <br>
            &nbsp;
            <button type="submit" name="search" class="btn btn-primary btn-sm" style="width:205px;"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
            <!--END PRICE VALORANT ITEMS CODE-->
          </div>
        </div> 
      </div>  
    </div>    
    <!--END CODE FOR CONTAINER FOR THE SEARCH FILTER-->
          
    <br><br>
    <!--CODE FOR COUNTDOWN SET BY USER-->
    <!--CODE FOR COUNTDOWN SET BY USER-->
    <!--DISPLAY SELL ITEM CODE FROM DATABASE-->
         
    <?php
      $sql = "SELECT
      b.BID_ITEMID,
      concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
      b.BID_ITEMNAME,
      b.BID_ITEMDESCRIPTION,
      b.BID_ITEMGAMES,
      b.BID_ITEMIMG,
      b.BID_ITEMSETDATETO,
      b.BID_ITEMPRICE
      FROM
      biditem b, 
      users u
      WHERE b.USER_ID = u.USER_ID";
      $result = mysqli_query($conn,$sql);
      
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $dbbiditemID = $row['BID_ITEMID'];
          $userID = $row['Name'];
          $dbbiditemName = $row['BID_ITEMNAME'];
          $dbbiditemDescription = $row['BID_ITEMDESCRIPTION'];
          $dbbidGames = $row['BID_ITEMGAMES'];
          $dbbidItemIMG = $row['BID_ITEMIMG'];
          $dbsetDateTo = $row['BID_ITEMSETDATETO'];
          $dbbidPrice = $row['BID_ITEMPRICE']; 
          
          //display data
          $currentDate = date("M d, Y h:i:s A",  time());
          $dateFormatTo =  date("M d, Y  h:i:s A", strtotime($dbsetDateTo));

          echo'
            <br> 
            <div class="container">
              <div class= "row">
                <div class = "col">
                  <div class="card border-primary mb-5" style="max-width: 848px;">
                    
                    <div class="row g-5">
                                 
                      <div class="col-md-5">
                        <img src="data:image/jpeg/png/jpg;base64,'.base64_encode($dbbidItemIMG).'" class="img-fluid rounded-start" alt="Image" height="350" width="350">
                      </div>
                      
                      <div class="col-md-7">
                        <div class = "row">
                          <div class = "col-sm">
                            <br>
                            <p><b>Seller ID:  '.$userID.' <a href = "viewsellerProfile.php? viewsellProfile='.$userID.'" style="color:blue" target="_blank">View Profile</a></b></p>
                        </div>
                      </div>  
                      <p><b>Item Name:</b> '.$dbbiditemName.'</p>
                      <p><b>Description:</b> '.$dbbiditemDescription.'</p>
                      <p><b>Games:</b> '. $dbbidGames.'</p>
                      <p><b>Bid Expiration Date:</b> '.$dateFormatTo.'</p>
                      <p><b>Starting Price:</b> '.$dbbidPrice.'</p>
                      <button type="button" class="btn btn-primary btn-sm"><a href ="bid.php? bidItem='.$dbbiditemID.' " class="text-light">Make a bid</a></button>
                      <button type="button" class="btn btn-primary btn-sm">
                        <a href="messageUser.php? messageUserID='.$userID.'" class="text-light" target="_blank">Message</a>
                      </button>
                      <br><br>    
                      <div class="btn-group" style="position:absolute;left: 460px;top: 5px;">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>···</b>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <div class = "col">
                              <i class="fa fa-exclamation-triangle" aria-hidden="true"> 
                                <a href = "reportBidItem.php? reportBidItemID='.$dbbiditemID.'">
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
          ';
          
        }
      }
    ?>
    <!--<img src="data:image/jpeg/png/jpg;base64,'.base64_encode($dota2sellitemIMG).'" class="img-fluid rounded-start" alt="Image" height="250" width="250">-->       
    <!--END DISPLAY SELL ITEM CODE-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>

