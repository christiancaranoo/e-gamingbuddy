<!--CONNEC TO THE DATABASE-->
<?php 
include 'connectDatabase.php';

$message = "";
$messageIcon = "";
$messageemailAddress = "";
$messagecountemailAddress = "";
$messagecountphoneNumber = "";
$messagecountUsername = "";
$messagecountfirstmiddlelastName = "";

if(isset($_POST['submit'])){
  //collecting data
  $firstName= mysqli_real_escape_string($conn,$_POST["firstName"]);
  $middleName= mysqli_real_escape_string($conn,$_POST["middleName"]);
  $lastName= mysqli_real_escape_string($conn,$_POST["lastName"]);
  $gender= mysqli_real_escape_string($conn,$_POST["gender"]);
  $dateofBirth= mysqli_real_escape_string($conn,$_POST["dateofBirth"]);
  $emailAddress= mysqli_real_escape_string($conn,$_POST["emailAddress"]);
  $phoneNumber= mysqli_real_escape_string($conn,$_POST["phoneNumber"]);
  $address= mysqli_real_escape_string($conn,$_POST["address"]);
  $username= mysqli_real_escape_string($conn,$_POST["username"]);
  $password= mysqli_real_escape_string($conn,$_POST["password"]);
  $confirmPassword= mysqli_real_escape_string($conn,$_POST["confirmPassword"]);

  //check if the email address is already exists
  $checkemailAddress = "SELECT * FROM users WHERE USER_EMAILADDRESS = '$emailAddress' ";
  $checkcheckemailAddress = mysqli_query($conn,$checkemailAddress);
  $countemailAddress = mysqli_num_rows($checkcheckemailAddress);

  //check if the phone number is already exists
  $checkphoneNumber = "SELECT * FROM users WHERE USER_PHONENUMBER = '$phoneNumber' ";
  $checkcheckphoneNumber = mysqli_query($conn,$checkphoneNumber);
  $countphoneNumber = mysqli_num_rows($checkcheckphoneNumber);

  //check if the username is already exists
  $checkUsername = "SELECT * FROM users WHERE USER_USERNAME = '$username' ";
  $checkcheckUsername = mysqli_query($conn,$checkUsername);
  $countUsername = mysqli_num_rows($checkcheckUsername);

  //check if the firstname, middlename, lastname is already exists
  $checkfirstmiddlelastName = "SELECT * FROM users WHERE USER_FIRSTNAME = '$firstName' AND USER_MIDDLENAME = '$middleName' AND USER_LASTNAME = '$lastName' ";
  $checkcheckfirstmiddlelastName = mysqli_query($conn,$checkfirstmiddlelastName);
  $countfirstmiddlelastName = mysqli_num_rows($checkcheckfirstmiddlelastName);

  if (empty($firstName) || empty($middleName) || empty($lastName) || empty($dateofBirth) || empty($emailAddress) || empty($phoneNumber) || 
  empty($address) || empty($username)){
           
    $message = "
      <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
        <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
          <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
        </symbol>
        <symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>
          <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
        </symbol>
        <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 -1 15 16'>
          <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
        </symbol>
      </svg>
             
      <div class='alert alert-danger d-flex align-items-center' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='35' height='35' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/>&nbsp;&nbsp;</svg>
      <div>
      <p style='font-size:18px'>&nbsp;&nbsp;&nbsp;&nbsp;<br> Kindly fill up the remaining fields</p>
    ";
    
    $messageIcon = "<p style = 'color:red'>*</p>";
  }

  else{
    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
      $messageemailAddress = "<p class='text-danger'>Enter a valid email.</p>";
    }
    else{
      if($countfirstmiddlelastName>0){
        $messagecountfirstmiddlelastName = "<p class='text-danger'>Full name is already existed.</p>";  
      }
      //if the email address is already exist
      else if($countemailAddress>0){
        $messagecountemailAddress = "<p class='text-danger'>Email Address is already existed.</p>"; 
      }
      //if the phone number is already exists
      else if($countphoneNumber>0){
        $messagecountphoneNumber = "<p class='text-danger'>Phone number is already existed.</p>"; 
      }   
      //if the username is already exists
      else if($countUsername>0){
        $messagecountUsername = "<p class='text-danger'>Username is already existed.</p>"; 
      }
      else{
                
        //insert in to the database
        $sql="INSERT INTO `users` (USER_FIRSTNAME,USER_MIDDLENAME,USER_LASTNAME,USER_GENDER,USER_DOB,USER_EMAILADDRESS,
        USER_PHONENUMBER,USER_ADDRESS,USER_USERNAME,USER_PASSWORD)
        VALUES('$firstName','$middleName','$lastName','$gender','$dateofBirth','$emailAddress','$phoneNumber',
        '$address','$username','$password')";

        $results=mysqli_query($conn,$sql);

        if($results){
          $messages = "Successfully created account";
          echo "<script type='text/javascript'>alert('$messages');</script>";
          //clear text
          $firstName = "";
          $middleName = "";
          $lastName = "";
          $dateofBirth = "";
          $emailAddress = "";
          $phoneNumber= "";
          $address= "";
          $username = "";
          $password = "";
          $confirmPassword= "";
        }
        else{
          $messageFailed = "Unsuccessful create account please try again";
          echo "<script type='text/javascript'>alert('$messageFailed');</script>";
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="wrapper">

      <div class="title">
        Create Account
        <?php echo $message; ?>
      </div>

      <form method = "post" action="" >     
        <div class="form">

          <div class="inputfield">
            <label>First Name</label>
            <input type="text" class="input" placeholder="Enter your first name" name="firstName" autocomplete="off" value="<?php if (isset($_POST['submit'])) { echo $firstName; } ?>">
            <?php echo $messageIcon; ?>
          </div>  
          <?php echo $messagecountfirstmiddlelastName; ?>

          <div class="inputfield">
            <label>Middle Name</label>
            <input type="text" class="input" placeholder="Enter your middle name" name="middleName" autocomplete="off" value="<?php if (isset($_POST['submit'])) { echo $middleName; } ?>">
            <?php echo $messageIcon; ?>
          </div>  
          <?php echo $messagecountfirstmiddlelastName; ?>  

          <div class="inputfield">
            <label>Last Name</label>
            <input type="text" class="input" placeholder="Enter your last name" name="lastName" autocomplete="off" value="<?php if (isset($_POST['submit'])) { echo $lastName; } ?>">
            <?php echo $messageIcon; ?>
          </div>
          <?php echo $messagecountfirstmiddlelastName; ?>  
                
          <div class="inputfield">
            <label>Gender</label>
            <div class="custom_select">
              <select name="gender">
                <option value="Male" selected="selected">Male</option>
                <option value="Female" selected="selected">Female</option>
              </select>
            </div>
          </div> 

          <div class="inputfield">
            <label>Date of Birth</label>
            <input type="date" class="input" name="dateofBirth" value="<?php if (isset($_POST['submit'])) { echo $dateofBirth; } ?>">
            <?php echo $messageIcon; ?>
          </div> 

          <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input" placeholder="Enter your email address" name="emailAddress" autocomplete="off" value="<?php if (isset($_POST['submit'])) { echo $emailAddress; } ?>">
            <?php echo $messageIcon; ?>
          </div> 
          <?php echo $messageemailAddress; ?>
          <?php echo $messagecountemailAddress; ?>

          <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" class="input" placeholder="Enter your phone number" name="phoneNumber" autocomplete="off" value="<?php if (isset($_POST['submit'])) { echo $phoneNumber; } ?>">
            <?php echo $messageIcon; ?>
          </div> 
            <?php echo $messagecountphoneNumber; ?>

          <div class="inputfield">
            <label>Address</label>
            <input type="textarea" class="input" placeholder="Enter user address" name="address" autocomplete="off" value="<?php if (isset($_POST['submit'])) { echo $address; } ?>">
            <?php echo $messageIcon; ?>
          </div> 

          <div class="inputfield">
            <label>Username</label>
            <input type="text" class="input" placeholder="Enter your username" name="username" autocomplete="off" value="<?php if (isset($_POST['submit'])) { echo $username; } ?>">
            <?php echo $messageIcon; ?>
          </div> 
            <?php echo $messagecountUsername; ?>

          <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input" id="password" placeholder="Enter your password" name="password" autocomplete="off" required value="<?php if (isset($_POST['submit'])) { echo $password; } ?>">
          </div>

          <div class="inputfield">
            <label>Confirm Password</label>
            <input type="password" class="input" id="confirm_password" placeholder="Enter confirm password" name="confirmPassword" autocomplete="off" required value="<?php if (isset($_POST['submit'])) { echo $confirmPassword; } ?>">
          </div> 

          <div class="inputfield">
            <label>Type</label>
            <div class="custom_select">
              <select name="gender">
                <option value="Male" selected="selected">Buyer</option>
                <option value="Female" selected="selected">Seller</option>
              </select>
            </div>
          </div>

          <div class="inputfield terms">
            <label class="check">
              <input type="checkbox" required>
              <span class="checkmark"></span>
            </label>
            <p style="margin-top:3%"><a href= "e-gamingbuddyTermsAndCondition.php" target="_blank">Agreed to terms and conditions</a></p>
          </div>

          <div class="inputfield terms">
            <label class="check">
              <input type="checkbox" required>
              <span class="checkmark"></span>
            </label>
            <p style="margin-top:3%"><a href= "e-gamingbuddyPrivacyPolicy.php" target="_blank">Privacy Policy</a></p>
          </div>

          <div class="inputfield terms">
            <label class="check">
              <input type="checkbox" required>
              <span class="checkmark"></span>
            </label>
            <p style="margin-top:3%"><a href= "e-gamingbuddySalesAgreement.php" target="_blank">Sales Agreement</a></p>
          </div>
  
          <div class="inputfield">
            <input type="submit" value="Create Account" name="submit" class="btn">
          </div>
                
          <div class="inputfield">
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
              location.href = 'index.php'">Back to Login
            </button>
          </div>

        </div>
      </form>    
    </div>	
    <script src="js/confirmpassword.js"></script>
  </body>
  
</html>

