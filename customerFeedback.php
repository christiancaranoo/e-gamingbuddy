<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>E-Gaming Buddy</title>
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
    <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
    <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!--BOOTSTRAP 4 EXTENSION-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
    

  <body>
    <?php echo $_SESSION["username"]; ?>  
    <!--1ST NAVIGATION BAR-->
    <div class="container-fullwidth">
      <nav class="navbar navbar-light bg-primary">
        <a class="navbar-brand" href="#" style="color: white;">
          <img src="image/logo.jpg" alt="E-Gaming Buddy" width="30" height="30" class="d-inline-block align-text-top">
          E-Gaming Buddy
        </a>
        <a class="nav-link" aria-current="page" href="homepage.php" style="color: white;"><i class = "fa fa-fw fa-home"></i>Home</a>
        <a class="nav-link" href="myaccount.php" style="color: white;"><i class="fa fa-fw fa-user"></i>My Account</a>
        <a class="nav-link" href="newsandevent.php" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> News / Events</a>
        <a class="nav-link" href="#" style="color: white;"><i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
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
              CS:GO Pilot Services
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
              <img src="image/clashofclan.jpg" height = "30" width = "30">
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

    <br><br>
    <div class = "container" style="background-color:#fff">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#"><b>Customer Feedbacks</b></a>
      </nav>

      <?php  
        $sql = "SELECT
        b.USER_FEEDBACKID,
        concat(u.`USER_FIRSTNAME`,' ',u.`USER_MIDDLENAME`,' ',u.`USER_LASTNAME`) as Name,
        b.`USER_FEEDBACK` as Message,
        b.`USER_FEEDBACKDATETIME` as Date
        FROM 
        userfeedback as b left join users as u on b.USER_ID = u.USER_ID
        ";
        $result = mysqli_query($conn,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $dbuserID = $row['Name'];
            $dbuserfeedbackMessage = $row['Message'];
            $dbuserfeedbackDatetime = $row['Date'];
            $dateFormat = date("M d, Y  h:i:s A", strtotime($dbuserfeedbackDatetime));

            echo '
              <br>
              <div class="card" style="width: 69.5rem;">
                <div class="card-body">
                  <h5 class="card-title">'.$dbuserID.'</h5>
                  <h6 class="card-subtitle mb-2 text-muted">'.$dateFormat.'</h6>
                  <p class="card-text">'.$dbuserfeedbackMessage.'</p>
                </div>
              </div>
            ';
          }
        }
      ?> 
    </div>
  </body>
</html>

