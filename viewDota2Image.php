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


$viewDota2SellAccount = $_GET['viewDota2AccountID'];
$sql = "SELECT * FROM dota2sellaccount WHERE DOTA2_SELLACCOUNTID = $viewDota2SellAccount";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbdota2SteamIDIMG = $row['DOTA2_STEAMIDIMG'];
$dbdota2IDANDIGNIMG = $row['DOTA2_IMGIDANDIGN'];
$dbdota2IMGMMR = $row['DOTA2_IMGMMR'];

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dota 2 Additional Sell Account Information</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
  </head>

  <body>

    <div class="wrapper">

      <div class="title">
        <img src = "image/dota-2.png" width="50" height="50" alt = "Dota 2" >
        Additional Information Image
        <?php echo $message; ?>
      </div>

      <div class = "form">
                
        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Steam ID</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbdota2SteamIDIMG).'" width="460" height="430"/>'?>
        </div>

        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Dota 2 ID with IGN</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbdota2IDANDIGNIMG).'" width="460" height="430"/>'?>
        </div>

        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Dota 2 MMR</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbdota2IMGMMR).'" width="460" height="430"/>'?>
        </div> 

    </div>	

  </body>
</html>
