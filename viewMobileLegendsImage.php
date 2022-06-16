<?php 
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}

$useruserName = $_SESSION['username'];
$message = "";
$messageIcon = "";
$messageemailAddress = "";


$viewMobileLegendSellAccount = $_GET['viewMobileLegendsSellAccountID'];
$sql = "SELECT * FROM mlbbsellaccount WHERE MLBB_SELLACCOUNTID = $viewMobileLegendSellAccount";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbmlbbitemList = $row['MLBB_SELLACCOUNTITEMLIST'];
$dbmlbbIDIGNIMG = $row['MLBB_SELLACCOUNTIDIGNIMG'];
$dbmlbbwinrateIMG = $row['MLBB_SELLACCOUNTWINRATEIMG'];
$dbmlbbemblemLevel = $row['MLBB_SELLACCOUNTEMBLEMLVLIMG'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legends Additional Sell Account Information</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
  </head>

  <body>

    <div class="wrapper">

      <div class="title">
        <img src = "image/mobilelegends.jpg" width="50" height="50" alt = "Dota 2" >
        Additional Information Image
        <?php echo $message; ?>
      </div>

      <div class = "form">
                
        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Item List</b></label>
            <div class ="row">
                <div class ="col-sm"><textarea style="font-weight: 500;height: 150px;width:455px" disabled><?php echo $dbmlbbitemList;?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Mobile Legends ID with IGN</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbmlbbIDIGNIMG).'" width="460" height="430"/>'?>
        </div>

        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Mobile Legends Overall Winrate Image</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbmlbbwinrateIMG).'" width="460" height="430"/>'?>
        </div>

        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Mobile Legends Emblem Level Image</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbmlbbemblemLevel).'" width="460" height="430"/>'?>
        </div> 

    </div>	

  </body>
</html>
