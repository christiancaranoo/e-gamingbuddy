<?php
include 'connectDatabase.php';
session_start();

if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
$useruserName = $_SESSION['username'];
$getviewFullDetailsBidItemID = $_GET['viewFullDetailsBidItemID'];

$sql = "SELECT
b.BID_ITEMID,
concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
b.BID_ITEMNAME,
b.BID_ITEMDESCRIPTION,
b.BID_ITEMGAMES,
b.BID_ITEMIMG,
b.BID_ITEMSETDATETO,
b.BID_ITEMPRICE
FROM
biditem b, 
users u
WHERE b.USER_ID = u.USER_ID
AND b.BID_ITEMID = $getviewFullDetailsBidItemID";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbbiditemID = $row['BID_ITEMID'];
$userID = $row['Name'];
$dbbiditemName = $row['BID_ITEMNAME'];
$dbbiditemDescription = $row['BID_ITEMDESCRIPTION'];
$dbbidGames = $row['BID_ITEMGAMES'];
$dbbidItemIMG = $row['BID_ITEMIMG'];
$dbsetDateTo = $row['BID_ITEMSETDATETO'];
$dbbidPrice = $row['BID_ITEMPRICE'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Complaint Bid Item</title>
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
                            <img src="image/dota-2.png" height = "50" width = "50">
                            <b>Complaint Bid Item</b>
                        </div>
                        
                        <label for="recipient-name" class="col-form-label"><b>Seller Name:</b> <?php echo $userID;?></label>
                        <br>
                        <label for="recipient-name" class="col-form-label"><b>Bid Item ID:</b> <?php echo $dbbiditemID;?></label>
                        <p class = "title"><b>Bid Item Details</b></p>
                        <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbbidItemIMG).'" width="440" height="240"/>'?>
                        <div class="form-group">
                            <br>
                            <label for="recipient-name" class="col-form-label"><b>Item Name:</b> <?php echo $dbbiditemName;?></label>
                            <label for="recipient-name" class="col-form-label"><b>Description:</b> <?php echo $dbbiditemDescription;?></label>
                            <br>
                            <label for="recipient-name" class="col-form-label"><b>Games:</b> <?php echo $dbbidGames;?></label>
                            <br>
                            <label for="recipient-name" class="col-form-label"><b>Date Expiration:</b> <?php echo $dbsetDateTo;?></label>
                            <br>
                            <label for="recipient-name" class="col-form-label"><b>Price:</b> <?php echo $dbbidPrice;?></label>
                        </div>
                        
                    </div>
                </form> 

            </div>
        </div>
   
    </body>
</html>
