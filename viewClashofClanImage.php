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


$viewClashofClanSellAccount = $_GET['viewClashofClanSellAccountID'];
$sql = "SELECT * FROM clashofclansellaccount WHERE CLASHOFCLAN_ID = $viewClashofClanSellAccount";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbclashofclanHomeVillageInformationIMG = $row['CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG'];
$dbclashofclanBuilderBaseInformationIMG = $row['CLASHOFCLAN_BUILDERBASEINFORMATIONIMG'];
$dbclashofclanTownHallbaseIMG = $row['CLASHOFCLAN_TOWNHALLBASEIMG'];
$dbclashofclanuserBuilderHallIMG = $row['CLASHOFCLAN_BUILDERBASEIMG'];

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clash of Clan Additional Sell Account Information</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
  </head>

  <body>

    <div class="wrapper">

      <div class="title">
        <img src = "image/clashofclan.jpg" width="50" height="50" alt = "Dota 2" >
        Additional Information Image
        <?php echo $message; ?>
      </div>

      <div class = "form">
                
        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Home Village Information</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanHomeVillageInformationIMG).'" width="460" height="430"/>'?>
        </div>

        <br>
        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Builder Base Information</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanBuilderBaseInformationIMG).'" width="460" height="430"/>'?>
        </div>

        <br>
        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Townhall Base</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanTownHallbaseIMG).'" width="460" height="430"/>'?>
        </div> 

        <br>
        <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Builderhall Base</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanuserBuilderHallIMG).'" width="460" height="430"/>'?>
        </div> 

    </div>	

  </body>
</html>
