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
    <title>My Account</title>
    <!--BOOTSTRAP 4 EXTENSION-->
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--BOOTSTRAP 4 EXTENSION-->
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
                  <button type="button" class="btn btn-primary">History</button>  
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
      <br>
    </div>
           
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

  </body>
</html>

