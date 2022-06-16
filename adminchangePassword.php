<!--CONNECT TO THE DATABASE-->
<?php 
include 'connectDatabase.php';
session_start();

$message = "";
$messageIcon = "";
$messageemailAddress = "";

$userchangePassword = $_GET['changePassword'];

if(isset($_POST['changePassword'])){
  //it will update the data
  $newPassword= mysqli_real_escape_string($conn,$_POST['newPassword']);
  
  //change password in to the database
  $sql="UPDATE users set USER_PASSWORD='$newPassword' WHERE USER_ID = $userchangePassword";
  $results=mysqli_query($conn,$sql);

  if($results){
    $messages = "Successfully Admin changed password";
    echo "<script type='text/javascript'>alert('$messages');</script>";
  }
  else{
    $messageFail = "Unsuccessful Admin change password please try again";
    echo "<script type='text/javascript'>alert('$messageFail');</script>";
  }        
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link rel="stylesheet" href="css1/forgotpassword.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>

  <body style="background-color:#ededed">
    <div class="wrapper" style="background-color:#fff;max-width:45%;">

      <div class="title">
        Change Password
        <?php echo $message; ?>
      </div>

      <form method = "post" action="" >
        <div class="form" style="color: blue;">
              
          <div class="inputfield">
            <label><b>New Password:</b></label>
            <input type="password" class="input" id="password" placeholder="Enter your password" name="newPassword" autocomplete="off" required>
          </div> 

          <div class="inputfield">
            <label><b>Confirm Password:</b></label>
            <input type="password" class="input" id="confirm_password" placeholder="Enter confirm password" name="confirmPassword" autocomplete="off" required">
          </div> 

          <div class="inputfield">
            <input type="submit" value="Update" name="changePassword" class="btn">
          </div>

          <div class="inputfield">
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
              location.href = 'myadminaccount.php'">Back
            </button>
          </div>

        </div>
      </form>    
      <script src="js/confirmpassword.js"></script>
      
    </div>	
  </body>
</html>

