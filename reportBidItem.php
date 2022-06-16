<?php
include 'connectDatabase.php';
session_start();

if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
$useruserName = $_SESSION['username'];
$getreportBidItemID = $_GET['reportBidItemID'];

$sql = "SELECT 
b.BID_ITEMID, 
concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name
FROM
biditem b, 
users u
WHERE b.USER_ID = u.USER_ID
AND b.BID_ITEMID = $getreportBidItemID 
";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$biditemID = ['BID_ITEMID'];
$userID = $row['Name'];

if(isset($_POST['report'])){
    $reportbiditemCategory = mysqli_real_escape_string($conn,$_POST['reportbiditemCategory']);
    $reportbiditemDetails = mysqli_real_escape_string($conn,$_POST['reportbiditemDetails']);
    $sql = "INSERT INTO `reportuser` (USER_ID,BID_ITEMID,
    REPORT_CATEGORY,REPORT_DETAIL)
    VALUES((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
    (SELECT BID_ITEMID FROM biditem WHERE BID_ITEMID='$getreportBidItemID'),
    '$reportbiditemCategory','$reportbiditemDetails')";
    $result=mysqli_query($conn,$sql);
    if($result){
      $messageSuccess = "Successfully Report User";
      echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
    }else{
      $messageFail = "Unsuccessful Report User please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }
}
?>

<?php
include 'connectDatabase.php';
$useruserName = $_SESSION['username'];
$getreportBidItemID = $_GET['reportBidItemID'];

$sql = "SELECT 
b.BID_ITEMID, 
u.USER_ID
FROM
biditem b, 
users u
WHERE b.USER_ID = u.USER_ID
AND b.BID_ITEMID = $getreportBidItemID 
";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$biditemID = ['BID_ITEMID'];
$userID2 = $row['USER_ID'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Report User</title>
        <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
        <link rel="stylesheet" href="css1/homepagedropdownav.css">
        <!--BOOTSTRAP 4 EXTENSION-->
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
                        <div class="title">
                            <img src="image/auction.png" height = "50" width = "50">
                            <b>Report User</b>
                        </div>
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label"><b>User ID:</b> <?php echo $userID2;?>
                                &emsp;<b>Name:</b> <?php echo $userID;?>
                            </label>
                            <br>
                            <label for="recipient-name" class="col-form-label"><b>Category:</b></label>
                            <select class="form-select" aria-label="Default select example" name="reportbiditemCategory">
                                <option value="Fake Seller" selected="selected">Fake Seller</option>
                                <option value="Fake Buyer" selected="selected">Fake Buyer</option>
                                <option value="Fake Pilot Service" selected="selected">Fake Pilot Service</option>
                                <option value="Fake Bid Item" selected="selected">Fake Bid Item</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"><b>Details:</b></label>      
                            <div class="form-floating">
                                <textarea class="form-control" name="reportbiditemDetails" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" autocomplete="off" required></textarea>
                                <label for="floatingTextarea2" style="font-size: small;">Write full details list of items</label>
                            </div>
                        </div>
                        <br>        
                        <div class="inputfield">
                            <input type="submit" value="Report User" name="report" class="btn">
                        </div>

                        <div class="inputfield">
                            <button type="button" class="btn btn-primary btn-lg btn-block" 
                                onclick="location.href = 'biditem.php'">
                                Back
                            </button>
                        </div>
                        
                    </div>
                </form> 

            </div>
        </div>
   
    </body>
</html>
