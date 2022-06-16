<?php
include 'connectDatabase.php';
if(isset($_POST['sendemail'])){
  
  $emailAddress = mysqli_real_escape_string($conn,$_POST['emailAddress']);
  $checkEmail = "SELECT * FROM users WHERE USER_EMAILADDRESS='$emailAddress'";
  $checkEmailResult = mysqli_query($conn,$checkEmail);
  $countEmail = mysqli_num_rows($checkEmailResult);

  if($countEmail){
    $fetchEmail = mysqli_fetch_assoc($checkEmailResult);
    $userPassword = $fetchEmail['USER_PASSWORD'];
    
    $toEmail = $fetchEmail['USER_EMAILADDRESS'];
    $subject = "Your Recovered Password";
    $message = "Please use this password to login " . $userPassword;
    $headers = "From : caranoochristian@gmail.com";
    
    if(mail($toEmail, $subject, $message, $headers)){
      $messageSuccess = "Successfully sent to your email";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
    }else{
      $messageFail = "Unsuccessfully sent to your email";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }
  }else{
    $messageError = "Email does not exist in database";
    echo "<script type='text/javascript'>alert('$messageError');</script>";
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css1/forgotpassword.css">
  </head>

  <body>
    <!----PHP FOR EMAIL NOTIFICATION---->
    <div class="wrapper">
      <img src="image/logo.jpg" class = "images"/>
      <div class="title">
        Forgot Password?
      </div>

      <div class="form">
        <center><h5 style = "color: #97a19a;">Enter your email address and we will try to 
          recover your account.</h5>
        </center>

        <br>
        <form method="POST" enctype="multipart/form-data">
          <div class="inputfield">
            <input type="text" name="emailAddress" placeholder = "Email Address" class="input">
          </div>  

          <div class="inputfield">
            <input type="submit" value="Send Request" name="sendemail" class="btn">
          </div>
        </form>

        <br>
        <h5 style = "color: #97a19a;" align = "center">Or</h5>
        <br>
        <center>
          <a href = "createaccount.php">
            Create Account
          </a>
          <br><br><br>
        </center>

        <div class="inputfield">
          <form action = "index.php">
            <input type="submit" value="Back to Login" class="btn">
          </form>
        </div>
      </div>
    </div>	
  </body>
</html>