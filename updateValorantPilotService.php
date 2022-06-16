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
$messageInvalid= "";

$updateValorantPilotService = $_GET['updateValorantPilotServiceID'];
$valorantPSDB = "SELECT * FROM valorantpilotservice WHERE VALORANT_PILOTSERVICEID = $updateValorantPilotService";
$result = mysqli_query($conn,$valorantPSDB);
$row = mysqli_fetch_assoc($result);

$dbvalorantPilotServiceFROM = $row['VALORANT_PILOTSERVICEFROM'];
$dbvalorantPilotServiceTO = $row['VALORANT_PILOTSERVICETO'];
$dbvalorantPilotServicePRICE = $row['VALORANT_PILOTSERVICEPRICE'];

if(isset($_POST['submit'])){

  $valorantPSFROM = mysqli_real_escape_string($conn,$_POST['valorantpilotserviceFROM']);
  $valorantPSTO = mysqli_real_escape_string($conn,$_POST['valorantpilotserviceTO']);
  $valorantPSPrice = mysqli_real_escape_string($conn,$_POST['valorantpilotservicePrice']);

  /* Checking if the pilot service is invalid or not
  */
  //BRONZE
  if($valorantPSFROM == "RADIANT" && $valorantPSTO == "BRONZE"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "BRONZE"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "DIAMOND" && $valorantPSTO == "BRONZE"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "PLATINUM" && $valorantPSTO == "BRONZE"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "GOLD" && $valorantPSTO == "BRONZE"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "SILVER" && $valorantPSTO == "BRONZE"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
    //SILVER
  }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "SILVER"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "SILVER"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "DIAMOND" && $valorantPSTO == "SILVER"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "PLATINUM" && $valorantPSTO == "SILVER"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "GOLD" && $valorantPSTO == "SILVER"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
    //GOLD
  }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "GOLD"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "GOLD"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "DIAMOND" && $valorantPSTO == "GOLD"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "PLATINUM" && $valorantPSTO == "GOLD"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
    //PLATINUM  
  }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "PLATINUM"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else if($valorantPSFROM == "IMMORTAL" && $valorantPSTO == "PLATINUM"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
    //IMMORTAL  
  }else if($valorantPSFROM == "RADIANT" && $valorantPSTO == "IMMORTAL"){
    //if true
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Valorant Pilot Service please try again.</div>";
  }else{//if false it will store to the database

    $sql = "UPDATE valorantpilotservice SET VALORANT_PILOTSERVICEFROM = '$valorantPSFROM', VALORANT_PILOTSERVICETO = '$valorantPSTO',
    VALORANT_PILOTSERVICEPRICE = '$valorantPSPrice' 
    WHERE VALORANT_PILOTSERVICEID =  $updateValorantPilotService";
    $result = mysqli_query($conn,$sql);
    if($result){
      $messageSuccess = "Successfully updated Valorant pilot service ";
      echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventoryvalorant.php');</script>";
    }else{
      $messageFail = "Unsuccessful update Valorant pilot service please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }
  }  
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Valorant Pilot Service</title>
    <link rel="stylesheet" href="css1/createaccountstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
  </head>

  <body>

    <div class="wrapper">

      <div class="title">
        <img src="image/valorantlogo.png" height = "50" width = "50">
        Update Valorant Pilot Service
        <?php echo $message; ?>
      </div>
      
      <?php echo $messageInvalid;?>
      
      <p><b>CURRENT PILOT SERVICE</b></p>
      <div class = "form">
        <div class = "row">
          <div class = "col-sm">
            <p><b>FROM:</b></p>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbvalorantPilotServiceFROM;?>" disabled>
          </div>
          <div class = "col-sm">
            <p><b>TO:</b></p>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbvalorantPilotServiceTO;?>" disabled>  
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Price:</b></label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbvalorantPilotServicePRICE;?>" disabled>
          </div>
        </div>
      </div>
      <br>
      
      <p><b>NEW PILOT SERVICE</b></p>
      <form method = "post" enctype="multipart/form-data">
        <div class = "form">

          <div class = "row">
            <div class = "col-sm">
              <p><b>FROM:</b></p>
              <select class="form-select" name="valorantpilotserviceFROM" aria-label="Default select example">
                <!--OPTION LIST VALORANT PILOT SERVICES-->
                <option value="BRONZE">BRONZE</option>
                <option value="SILVER">SILVER</option>
                <option value="GOLD">GOLD</option>
                <option value="PLATINUM">PLATINUM</option>
                <option value="DIAMOND">DIAMOND</option>
                <option value="IMMORTAL">IMMORTAL</option>
                <option value="RADIANT">RADIANT</option>
              </select>                               
            </div>
            <br> <br>
            <div class = "col-sm">
              <p><b>TO:</b></p>
              <select class="form-select" name="valorantpilotserviceTO" aria-label="Default select example">
                <!--OPTION LIST VALORANT PILOT SERVICES-->
                <option value="BRONZE">BRONZE</option>
                <option value="SILVER">SILVER</option>
                <option value="GOLD">GOLD</option>
                <option value="PLATINUM">PLATINUM</option>
                <option value="DIAMOND">DIAMOND</option>
                <option value="IMMORTAL">IMMORTAL</option>
                <option value="RADIANT">RADIANT</option>
              </select>
            </div>
          </div>   

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Price:</b></label>
            <input type="text" name="valorantpilotservicePrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
          </div>

          <br>
          <div class="inputfield">
            <input type="submit" value="Update" name="submit" class="btn">
          </div>

          <div class="inputfield">
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
              location.href = 'myinventoryvalorant.php'">Back
            </button>
          </div>

        </div>            
      </form>  
        
    </div>	
  </body>
</html>
