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
    <title>User's Feedback</title>
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel="stylesheet" href="css1/homepagedropdownav.css">
    <!--BOOTSTRAP 4 EXTENSION-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
        <a class="nav-link" aria-current="page" href="adminhomepage.php" style="color: white;"><i class = "fa fa-fw fa-home"></i>Home</a>
        <a class="nav-link" href="#" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> User Feedbacks</a>
        <a class="nav-link" href="adminnewsEvent.php" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> News / Events</a>
        <a class="nav-link" href="adminOrderList.php" style="color: white;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Order List</a>
        <a class="nav-link" href="adminReport.php" style="color: white;"><i class="fa fa-question-circle" aria-hidden="true"></i> Report</a> 
        
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

        <a class="nav-link" href="logout.php" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>  
       
      </nav>
    </div>
      <br>
      <!--- MY PROFILE DISPLAY --->  
    <div class = "container" style="background-color:#fff">
      
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#"><b>User's Feedback</b></a>
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
          While($row=mysqli_fetch_assoc($result)){
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

