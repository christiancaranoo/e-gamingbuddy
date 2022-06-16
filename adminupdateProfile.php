<!--CONNECT TO THE DATABASE-->
<?php 
include 'connectDatabase.php';
session_start();

$message = "";
$messageIcon = "";
$messageemailAddress = "";

$useruserProfile = $_GET['updateProfile'];
$sql = "SELECT * FROM users WHERE USER_ID=$useruserProfile";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$firstName = $row['USER_FIRSTNAME'];
$middleName = $row['USER_MIDDLENAME'];
$lastName = $row['USER_LASTNAME'];
$gender = $row['USER_GENDER'];
$dateofBirth = $row['USER_DOB'];
$emailAddress = $row['USER_EMAILADDRESS'];
$phoneNumber = $row['USER_PHONENUMBER'];
$address = $row['USER_ADDRESS'];
$username = $row['USER_USERNAME'];
$password = $row['USER_PASSWORD'];
$userType = $row['USER_USERTYPE'];

if(isset($_POST['submit'])){
  //it will update the data
  $firstName= mysqli_real_escape_string($conn,$_POST["firstName"]);
  $middleName= mysqli_real_escape_string($conn,$_POST["middleName"]);
  $lastName= mysqli_real_escape_string($conn,$_POST["lastName"]);
  $gender= mysqli_real_escape_string($conn,$_POST["gender"]);
  $dateofBirth= mysqli_real_escape_string($conn,$_POST["dateofBirth"]);
  $emailAddress= mysqli_real_escape_string($conn,$_POST["emailAddress"]);
  $phoneNumber= mysqli_real_escape_string($conn,$_POST["phoneNumber"]);
  $address= mysqli_real_escape_string($conn,$_POST["address"]);

  if(empty($firstName) || empty($middleName) || empty($lastName) || empty($dateofBirth) || empty($emailAddress) || empty($phoneNumber) || empty($address)){ 
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
      </div>
      </div>
    ";
    $messageIcon = "<p style = 'color:red'>*</p>";
  }else{
    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
      $messageemailAddress = "<p class='text-danger'>Enter a valid email.</p>";
    }else{          
      //insert in to the database
      $sql="UPDATE users set USER_FIRSTNAME='$firstName',USER_MIDDLENAME='$middleName',USER_LASTNAME='$lastName',USER_GENDER='$gender',
      USER_DOB='$dateofBirth',USER_EMAILADDRESS='$emailAddress',USER_PHONENUMBER='$phoneNumber',
      USER_ADDRESS='$address' WHERE USER_ID = $useruserProfile";
      $results=mysqli_query($conn,$sql);

      if($results){
        $messages = "Successfully Updated Admin account";
        echo "<script type='text/javascript'>alert('$messages');</script>";             
      }else{
        $messageFail = "Unsuccessful Update Admin account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
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
    <title>Update Account</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="wrapper">

      <div class="title">
        Update Account
        <?php echo $message; ?>
      </div>

      <form method = "post" action="" >         
        <div class="form">

          <div class="inputfield">
            <label><b>First Name:</b></label>
            <input type="text" class="input" placeholder="Enter user first name" name="firstName" autocomplete="off" value="<?php echo $firstName;?>">
            <?php echo $messageIcon; ?>
          </div>  

          <div class="inputfield">
            <label><b>Middle Name:</b></label>
            <input type="text" class="input" placeholder="Enter user middle name" name="middleName" autocomplete="off" value="<?php echo $middleName;?>">
            <?php echo $messageIcon; ?>
          </div>  
                 

          <div class="inputfield">
            <label><b>Last Name:</b></label>
            <input type="text" class="input" placeholder="Enter user last name" name="lastName" autocomplete="off" value="<?php echo $lastName;?>">
            <?php echo $messageIcon; ?>
          </div> 
                
          <div class="inputfield">
            <label><b>Gender:</b></label>
            <input type="text" class="input" name="gender" value="<?php echo $gender;?>">
          </div> 

          <div class="inputfield">
            <label><b>Date of Birth:</b></label>
            <input type="date" class="input" name="dateofBirth" value="<?php echo $dateofBirth;?>">
            <?php echo $messageIcon; ?>
          </div> 

          <div class="inputfield">
            <label><b>Email Address:</b></label>
            <input type="text" class="input" placeholder="Enter user email address" name="emailAddress" autocomplete="off" value="<?php echo $emailAddress;?>">
            <?php echo $messageIcon; ?>
          </div> 
          <?php echo $messageemailAddress; ?>

          <div class="inputfield">
            <label><b>Phone Number:</b></label>
            <input type="text" class="input" placeholder="Enter user phone number" name="phoneNumber" autocomplete="off" value="<?php echo $phoneNumber;?>">
            <?php echo $messageIcon; ?>
          </div> 

          <div class="inputfield">
            <label><b>Address:</b></label>
            <input type="textarea" class="input" placeholder="Enter user address" name="address" autocomplete="off" value="<?php echo $address;?>">
            <?php echo $messageIcon; ?>
          </div> 
          <div class="inputfield">
            <input type="submit" value="Update" name="submit" class="btn">
          </div>

          <div class="inputfield">
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
              location.href = 'myadminaccount.php'">Back
            </button>
          </div>

        </div>
      </form>    
    </div>	
    
  </body>
</html>

