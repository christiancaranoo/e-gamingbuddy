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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--BOOTSTRAP 4 EXTENSION-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        <a class="nav-link" aria-current="page" href="#" style="color: white;"><i class = "fa fa-fw fa-home"></i>Home</a>
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
            <img src = "image/clashofclan.jpg" width="30" height="30" alt = "Clash of Clan">
            Clash of Clan
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
            <img src = "image/valorantlogo.png" width="30" height="30" alt = "Valorant">
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
    <!--END 2ND NAVIGATION BAR DROPDOWN CODE-->

    <!--CAROUSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="image/valorant1.jpg" height="530" width="20" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/clashofclanwallpaper1.jpg" height="530" width="20" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/dota2wallpaper.jpg" height="530" width="20" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/csgowallpaper.jpg" height="530" width="20" alt="Fourth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--END CAROUSEL CODE-->        
    <!--START CARDS CODE-->
    <!--FIRST CONTAINER AND ROW FOR CARD-->
             
    <div class="container">
      <br><br>
      <div class="row">

        <div class="col-sm">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <i class="fa fa-user-o" aria-hidden="true" style = "color: white;font-size: 1.3em;"> Account</i>
            </div>
            <div class="card-body ">
              <p class="card-text">Accounts for games such as Dota 2, CSGO, and others can be sold.</p>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <i class="fa fa-gamepad" aria-hidden="true" style= "color: white;font-size: 1.3em;"> Pilot Service</i>
            </div>
            <div class="card-body">
              <p class="card-text">You may offer other users pilot services.</p>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <i class="fa fa-lock" aria-hidden="true" style= "color: white;font-size: 1.3em;"> Secure</i>
            </div>
            <div class="card-body">
              <p class="card-text">To avoid scams, every transaction will be handled by a middleman.</p>
            </div>
          </div>
        </div>

      </div>             
    </div>
    <!--ENDS 1ST ROW CARD-->
    <br><br>
    <!--START CARDS CODE-->
    <!--SECOND CONTAINER AND ROW FOR CARD-->
    <div class="container">
      <div class="row">

        <div class="col-sm">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <i class="fa fa-product-hunt" aria-hidden="true"  style= "color: white;font-size: 1.3em;"> Item</i>
            </div>
            <div class="card-body">
              <p class="card-text">Users can buy and sell from/to other users.</p>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <i class="fa fa-gavel" aria-hidden="true"  style= "color: white;font-size: 1.3em;"> Bidding</i>
            </div>
            <div class="card-body">
              <p class="card-text">You may make your own bid items and join in other bids.</p>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <i class="fa fa-money" aria-hidden="true" style= "color: white;font-size: 1.3em;"> Income</i>
            </div>
            <div class="card-body">
              <p class="card-text">You can make money by selling items, accounts, or pilot services.</p>
            </div>
          </div>
        </div>

      </div>     
    </div>

    <!--ABOUT US CODE -->
    <br><br>
    <div class="container-fluid p-3 mb-2 bg-primary text-white">
      <h2 id = "about">About Us <i class="fa fa-question" aria-hidden="true"></i></h2>
      <hr style="background-color: white;">
      <p style="text-indent:30px;text-align: justify;font-size: 20px;font-family: 'Poppins, sanserif';">E-Gaming Buddy is an E-commerce for Online Gamers. It's a marketplace where you can buy and sell items, accounts,
        and provide pilot services on computer or mobile games in which you can earn income. E-Gaming Buddy ensures secure transaction made by buyer
        and seller. Adittionally, in every transaction made it will be handle by Middleman to secure the transaction between
        the buyer and seller. 
      </p>
      
      <h3 style="text-align: center;"> Our Team</h3>

      <div class = "container">
        <br>
        <div class = "row">               
          <div class = "col">
            <div class="card" style="width: 15rem;">
              <img class="card-img-top" src="image/clashofclan.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="color: black;">Andrei John Nellas</h5>
                <p class="card-text" style="color: black;text-align: center;">Project Manager</p>
                <center><a href="#" class="btn btn-primary">Contact</a></center>
              </div>
            </div>
          </div>

          <div class = "col">
            <div class="card" style="width: 15rem;">
              <img class="card-img-top" src="image/clashofclan.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="color: black;font-size: 19px;">Johnrick Amechachura</h5>
                <p class="card-text" style="color: black;text-align: center;">Hipster</p>
                <center><a href="#" class="btn btn-primary">Contact</a></center>
              </div>
            </div>
          </div>

                     
          <div class = "col">
            <div class="card" style="width: 15rem;">
              <img class="card-img-top" src="image/clashofclan.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="color: black;">Fritz Vincent Cana</h5>
                <p class="card-text" style="color: black;text-align: center;">Hacker</p>
                <center><a href="#" class="btn btn-primary">Contact</a></center>
              </div>
            </div>
          </div>
            
          <div class = "col">
            <div class="card" style="width: 15rem;">
              <img class="card-img-top" src="image/clashofclan.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="color: black;">Christian Caranoo</h5>
                <p class="card-text" style="color: black;text-align: center;">Hacker</p>
                <center><a href="#" class="btn btn-primary">Contact</a></center>
              </div>
            </div>
          </div>

        </div>

        <br><br>
        <div class = "container">
          <div class = "row">
            <h2 style="text-align: center;">More About Us</h2>
            <br><br><br>
            <div class = "col" style="margin-left:25%;">
              <img src="image/TransparentLogo.png" alt="E-Gaming Buddy" width="150" height="150" class="d-inline-block align-text-top">
              <h3 class="card-title" style="margin-left:-5%;">E-Gaming Buddy</h3>
              <a href="#about" style="color:white;text-align:center;margin-left:15%;">About</a>
              <br>
              <a href="faqform.php" style="color:white;text-align:center;margin-left:16.5%;">FAQ</a>
              <br>
              <a href="customerFeedback.php" style="color:white;text-align:center;margin-left:3%;">Customer Feedback</a>
            </div>
            <div class = "col">
              <img style="margin-right:5%;" src = "image/membership.png" width="150" height="150" alt = "Membership">
              <h2 class="card-title" style="margin-right:96%;">Membership</h2>
              <a href="e-gamingbuddyTermsAndCondition.php" target="_blank" style="color:white;margin-left:3%;">Terms and Conditions</a>
              <br>
              <a href= "e-gamingbuddyPrivacyPolicy.php" target="_blank" style="color:white;margin-left:6%;">Privacy Policy</a>
              <br>
              <a href="e-gamingbuddySalesAgreement.php" target="_blank" style="color:white;margin-left:6%;">Sales Agreement</a>
            </div>
          </div>
        </div>
      
      </div>
      <br><br><br> 

    </div>

    <!--SPACE SPACE SPACE SPACE SPACE-->
    <br><br><br><br><br><br><br><br><br>
    <!--SPACE SPACE SPACE SPACE SPACE-->
    <!--ENDS 2ND ROW CARD-->
    <!--FOOTER STARTING CODE-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h5><i class="fa fa-road"></i> E-GAMING BUDDY</h5>
            <div class="row">
              <div class="col-6">
                <ul class="list-unstyled">
                  <li><a href="myaccount.php">My Account</a></li>
                  <li><a href="newsandevent.php">News/Event</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="list-unstyled">
                  <li><a href="#about">About</a></li>
                  <li><a href="faqform.php">FAQ</a></li>
                  <li><a href="customerFeedback.php">Customer Feedback</a></li>
                </ul>
              </div>
            </div>
            <ul class="nav">
              <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
            </ul>
            <br>
          </div>
                        
          <div class="col-md-2"> 
            <h6 class="text-md-right">Feedback Us</h6>
            <hr>
          </div>

          <div class="col-md-5">
            <form method="post" enctype="multipart/form-data">
              <fieldset class="form-group">
                <textarea class="form-control" name="feedbackmessage" id="exampleMessage" placeholder="Message" autocomplete="off" required></textarea>
              </fieldset>
              <fieldset class="form-group text-xs-right">
                <input type="submit" data-toggle="modal" data-target="#exampleModal" name="userfeedback" value="Submit" class="btn btn-primary btn-sm">
              </fieldset>
            </form>
          </div>

        </div>
      </div>
    </footer>
    <!--ENDS FOOTER CODE-->

    <!--storing user's feedback to the database-->    
    <?php  
      $message = "";
      $useruserName = $_SESSION["username"];
        if(isset($_POST["userfeedback"])){
          $userfeedbackMessage = $_POST['feedbackmessage'];
          $sql = "INSERT INTO `userfeedback` (USER_ID,USER_FEEDBACK) VALUES
          ((SELECT USER_ID FROM users WHERE USER_USERNAME = '$useruserName'),'$userfeedbackMessage')";
          $result = mysqli_query($conn,$sql);
          if($result){
            $messageSuccess = "Thank you so much for your prompt and detailed feedback of our E-Gaming Buddy.";
            echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
          }
        }
    ?> 
    <!--end of line code for storing user's feedback-->
       
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

