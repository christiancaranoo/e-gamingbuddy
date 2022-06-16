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

$updateDota2PilotService = $_GET['updateDota2PilotServiceID'];
$sql = "SELECT * FROM dota2pilotservice WHERE DOTA2_PSID  = $updateDota2PilotService";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbDota2PilotServiceFROM = $row['DOTA2_PSFROM'];
$dbDota2PilotServiceTO = $row['DOTA2_PSTO'];
$dbDota2PilotServicePrice = $row['DOTA2_PSPRICE'];

if(isset($_POST['submit'])){

  $dota2PSFROM = mysqli_real_escape_string($conn,$_POST['dota2PSFROM']);
  $dota2PSTO = mysqli_real_escape_string($conn,$_POST['dota2PSTO']);
  $dota2PSPrice = mysqli_real_escape_string($conn,$_POST['dota2PSPrice']);

  //checking if dota 2 pilot service is invalid or not
  //checking the pilot service GUARDIAN RANK
  //if invalid
  //HERALD
  if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "HERALD"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "HERALD"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "HERALD"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "HERALD"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "HERALD"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "HERALD"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "GUARDIAN" && $dota2PSTO == "HERALD"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "CRUSADER" && $dota2PSTO == "GUARDIAN"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "CRUSADER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "CRUSADER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "CRUSADER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "CRUSADER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ARCHON" && $dota2PSTO == "CRUSADER"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "ARCHON"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "ARCHON"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "ARCHON"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "LEGEND" && $dota2PSTO == "ARCHON"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "LEGEND"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "LEGEND"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "ANCIENT" && $dota2PSTO == "LEGEND"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "ANCIENT"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "DIVINE" && $dota2PSTO == "ANCIENT"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else if($dota2PSFROM == "IMMORTAL" && $dota2PSTO == "DIVINE"){
    $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Dota 2 Pilot Service please try again.</div>";
  }else{  
    $sql = "UPDATE dota2pilotservice SET DOTA2_PSFROM = '$dota2PSFROM',
    DOTA2_PSTO = '$dota2PSTO', DOTA2_PSPRICE = '$dota2PSPrice' WHERE DOTA2_PSID=$updateDota2PilotService";
    $result = mysqli_query($conn,$sql);
        
    if($result){
      $messages = "Successfully updated Dota 2 Pilot Service";
      echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
    }else{
      $messageFail = "Unsuccessful update Dota 2 pilot service please try again";
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
    <title>Update Dota 2 Pilot Service</title>
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
        Update Dota 2 Pilot Service
        <?php echo $message; ?>
      </div>

      <?php echo $messageInvalid;?>
      
      <p><b>CURRENT PILOT SERVICE</b></p>
      <div class = "form">
        <div class = "row">
          <div class = "col-sm">
            <p><b>FROM:</b></p>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbDota2PilotServiceFROM;?>" disabled>
          </div>
          <div class = "col-sm">
            <p><b>TO:</b></p>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbDota2PilotServiceTO;?>" disabled>  
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Price:</b></label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dbDota2PilotServicePrice;?>" disabled>
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
              <select class="form-select" name="dota2PSFROM" aria-label="Default select example">
                <!--OPTION LIST DOTA 2 PILOT SERVICES-->
                <option value="HERALD">HERALD</option>
                <option value="GUARDIAN">GUARDIAN</option>
                <option value="CRUSADER">CRUSADER</option>
                <option value="ARCHON">ARCHON</option>
                <option value="LEGEND">LEGEND</option>
                <option value="ANCIENT">ANCIENT</option>
                <option value="DIVINE">DIVINE</option>
                <option value="IMMORTAL">IMMORTAL</option>
              </select>          
            </div>
            <br> <br>
            <div class = "col-sm">
              <p><b>TO:</b></p>
              <select class="form-select" name="dota2PSTO" aria-label="Default select example">
                <!--OPTION LIST DOTA 2 PILOT SERVICES-->
                <option value="HERALD">HERALD</option>
                <option value="GUARDIAN">GUARDIAN</option>
                <option value="CRUSADER">CRUSADER</option>
                <option value="ARCHON">ARCHON</option>
                <option value="LEGEND">LEGEND</option>
                <option value="ANCIENT">ANCIENT</option>
                <option value="DIVINE">DIVINE</option>
                <option value="IMMORTAL">IMMORTAL</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label"><b>Price:</b></label>
              <input type="text" name="dota2PSPrice" class="form-control" id="formGroupExampleInput" placeholder="Input new price here" autocomplete="off" required>
            </div>
          </div>

          <br>
          <div class="inputfield">
            <input type="submit" value="Update" name="submit" class="btn">
          </div>

          <div class="inputfield">
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
              location.href = 'myinventorydota2.php'">Back
            </button>
          </div>

        </div>
      </form> 

    </div>	
  </body>
</html>
