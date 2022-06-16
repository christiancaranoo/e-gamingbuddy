<?php
include 'connectDatabase.php';
session_start();

if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
$useruserName = $_SESSION['username'];
$viewsellProfile = $_GET['viewsellProfile'];

$sql = "SELECT * FROM users WHERE concat(USER_FIRSTNAME,' ',USER_MIDDLENAME,' ',USER_LASTNAME)  = '$viewsellProfile'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$userID = $row['USER_ID'];
$firstName = $row['USER_FIRSTNAME'];
$middleName = $row['USER_MIDDLENAME'];
$lastName = $row['USER_LASTNAME'];
$gender = $row['USER_GENDER'];
$dateofBirth = $row['USER_DOB'];
$emailAddress = $row['USER_EMAILADDRESS'];
$phoneNumber = $row['USER_PHONENUMBER'];
$address = $row['USER_ADDRESS'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>View Seller Profile</title>
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

        <br><br>
        <div class ="container" style="float: center;margin-left:31.5%;">
            <div class="card border-primary mb-3" style="max-width: 35rem;height:37.5rem;">
                <div class="card-header" style="float: center;"><center><b>SELLER PROFILE</b></center></div>
                    <br>
                    <div class="text-center">
                        <img src="image/user.png" class="rounded" alt="Default Profile" height="150" width="150">
                    </div>
                    <div class="card-body text-dark">
                        <p><b>Seller ID:</b> <?php echo $userID;?></p>
                        <p><b>Name:</b> <?php echo $firstName;?> <?php echo $middleName;?> <?php echo $lastName;?></p>
                        <p><b>Gender:</b> <?php echo $gender;?></p>
                        <p><b>Date of Birth:</b> <?php echo $dateofBirth;?></p>
                        <p><b>Email Address:</b> <?php echo $emailAddress;?></p>
                        <p><b>Phonenumber:</b> <?php echo $phoneNumber;?></p>
                        <p><b>Address:</b> <?php echo $address;?></p>
                    </div>    
                </div>
            </div>
            
        </div>

    </body>
</html>
