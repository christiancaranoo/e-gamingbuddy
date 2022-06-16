<?php

include 'connectDatabase.php';

session_start();
$message = "";


if($_SERVER["REQUEST_METHOD"]=="POST"){

  $username= mysqli_real_escape_string($conn,$_POST["username"]);
  $password= mysqli_real_escape_string($conn,$_POST["password"]);
  $sql = "SELECT * FROM `users` WHERE USER_USERNAME = '$username' AND USER_PASSWORD = '$password' ";
  $result=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  if(!$row){
    $message = "<div class='alert alert-danger' role='alert'>Username and Password are does not match.</div>"; 
  }else{
    if($row['USER_USERTYPE']=='Users'){
      $_SESSION['username']=$username;
      header('Location:homepage.php');
    }else if($row['USER_USERTYPE']=='Admin'){
      $_SESSION['username']=$username;
      header('Location:adminhomepage.php');
    }else{
      $message = "<div class='alert alert-danger' role='alert'>Username and Password are does not match.</div>";
    }
  } 

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css1/indexstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <div class="container">
      <form method = "POST">
        <input type="checkbox" id="flip">
        <div class="cover">
          <div class="front">
            <img src="image/gamingbackground.jpg" />
            <div class="text">
              <span class="text-1">E-Gaming Buddy: <br> Buy, Sell, & Pilot Services</span>
              <span class="text-2">Marketplace</span>
            </div>
          </div>
        </div>

        <img src="image/logo.jpg" class = "images"/>
        <div class="forms">
          <div class="form-content">
            <div class="login-form">
              <div class="title">Login</div>
                <br>
                <?php echo $message; ?>
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Enter your username" name="username" required>
                  </div>

                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Enter your password" name="password" required>
                  </div>
      
                  <div class="text">
                    <a href="forgotpassword.php" style = "color: #2f63f5;">Forgot password?</a>
                  </div>
     
                  <div class="button input-box">
                    <input type="submit" value="Login" name="login" class="btn">
                  </div>
        
                  <div class="text sign-up-text">Don't have an account? 
                    <a href = "createaccount.php" style = "color: #2f63f5;">Create Account</a>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
        
      </form>
    </div>
  </body>
</html>
