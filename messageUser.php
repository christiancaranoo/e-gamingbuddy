<?php 
include 'connectDatabase.php';
session_start();
$messageFailed="";
$messageSuccess="";
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
//username 
$useruserName = $_SESSION['username'];
$getsqlSession = "SELECT concat(USER_FIRSTNAME,' ',USER_MIDDLENAME,' ',USER_LASTNAME) as Name FROM users WHERE USER_USERNAME='$useruserName'";
$sessionResult = mysqli_query($conn,$getsqlSession);
$sessionRow = mysqli_fetch_assoc($sessionResult);
$sessionFullName = $sessionRow['Name'];
//end code 

//start code
$getsqlSessionID = "SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'";
$sessionResultID = mysqli_query($conn,$getsqlSessionID);
$sessionRowID = mysqli_fetch_assoc($sessionResultID);
$sessionID = $sessionRowID['USER_ID'];
//end of line code for session

//get the seller id
$getmessageUserID = $_GET['messageUserID'];
$sql = "SELECT * FROM users WHERE concat(USER_FIRSTNAME,' ',USER_MIDDLENAME,' ',USER_LASTNAME)  = '$getmessageUserID'";
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

if(isset($_POST['sendMessage'])){
    $fromUser = mysqli_real_escape_string($conn,$_POST['fromUser']);
    $toUser = mysqli_real_escape_string($conn,$_POST['toUser']);
    $sendMessage = mysqli_real_escape_string($conn,$_POST['sendMessage']);
    $sqlMessage = "INSERT INTO `message` (SENDER,RECEIVER,MESSAGE)
    VALUES((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
    '$userID',
    '$sendMessage')";

    $result = mysqli_query($conn,$sqlMessage);
    if($result){
        echo"
            <script>
                if( window. history. replaceState ){
                    window. history. replaceState( null, null, window. location. href );
                }
            </script>
        ";
    }else{
        echo"
            <script>
                if( window. history. replaceState ){
                    window. history. replaceState( null, null, window. location. href );
                }
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Message - <?php echo $getmessageUserID;?></title>
        <link rel="stylesheet" href="css1/homepagedropdownav.css">
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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

        <div class = "container">
            <div class = "wrapper">
                
                <form method="post" enctype="multipart/form-data">
                    <div class = "form">
                        <p style="margin-right:54px;"><b><?php echo $getmessageUserID;?></b></p>

                        <div class="form-group" style="text-align:right;">
                            <?php
                                $sql = "SELECT *
                                FROM
                                message 
                                ";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        if($row['SENDER'] == $sessionID){
                                            echo'
                                                <p><b>'.$sessionFullName.'</b></p>
                                                <div class="p-2 mb-1 bg-primary text-light">'.$row['MESSAGE'].'</div>
                                            ';
                                        }else{
                                            echo'
                                                <p><b>'.$getmessageUserID.'</b></p>
                                                <div class="p-2 mb-1 bg-light text-dark">'.$row['MESSAGE'].'</div>
                                            '; 
                                        }
                                    }
                                }else{
                                    echo'<br>No Message';
                                }
                            ?>
                            
                        </div>
                        
                        <div class = "container">
                            <div class="input-group">
                                <input name="fromUser" value="<?php echo $useruserName?>" type="text" class="form-control" hidden>
                                <input name="toUser" value="<?php echo $userID?>" type="text" class="form-control" hidden>
                                <input name="sendMessage" type="text" class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <br><br>
                        <div class="inputfield">
                            <button type="button" class="btn btn-primary btn-lg btn-block" 
                                onclick="location.href = 'dota2itemforsale.php'">
                                Back
                            </button>
                        </div>
                        
                    </div>
                </form> 

            </div>
        </div>
   
    </body>
</html>