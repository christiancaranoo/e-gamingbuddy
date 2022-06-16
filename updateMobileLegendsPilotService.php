<!--CONNECT TO THE DATABASE-->
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
$messageInvalid = "";

$updateMobileLegendsPilotService = $_GET['updateMobileLegendsPilotServiceID'];
$sql = "SELECT * FROM mlpilotservice WHERE ML_PILOTSERVICEID=$updateMobileLegendsPilotService";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$mlPSFROM = $row['ML_PILOTSERVICEFROM'];
$mlPSTO = $row['ML_PILOTSERVICETO'];
$mlPSPrice = $row['ML_PILOTSERVICEPRICE'];

if(isset($_POST['submit'])){
    $mlpilotserviceFROM = mysqli_real_escape_string($conn,$_POST['mobilelegendsPilotServiceFROM']);
    $mlpilotserviceTO = mysqli_real_escape_string($conn,$_POST['mobilelegendsPilotServiceTO']);
    $mlpilotservicePrice = mysqli_real_escape_string($conn,$_POST['mobilelegendsPilotServicePrice']);

    //checking if the mobile legends pilot is service
    //if true
    //WARRIOR
    if($mlpilotserviceFROM == "ELITE" && $mlpilotserviceTO == "WARRIOR"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MASTER" && $mlpilotserviceTO == "WARRIOR"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "GRANDMASTER" && $mlpilotserviceTO == "WARRIOR"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if ($mlpilotserviceFROM == "EPIC" && $mlpilotserviceTO == "WARRIOR"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "WARRIOR"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "WARRIOR"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "WARRIOR"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MASTER" && $mlpilotserviceTO == "ELITE"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if ($mlpilotserviceFROM == "GRANDMASTER" && $mlpilotserviceTO == "ELITE"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "ELITE"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "ELITE"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "ELITE"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "GRANDMASTER" && $mlpilotserviceTO == "MASTER"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "MASTER"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "MASTER"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "MASTER"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "LEGEND" && $mlpilotserviceTO == "GRANDMASTER"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "GRANDMASTER"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "GRANDMASTER"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHIC" && $mlpilotserviceTO == "LEGEND"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "LEGEND"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else if($mlpilotserviceFROM == "MYTHICAL GLORY" && $mlpilotserviceTO == "MYTHIC"){
        $messageInvalid=  "<div class='alert alert-danger' role='alert'>Invalid Mobile Legends Pilot Service please try again.</div>";
    }else{
        $sql = "UPDATE mlpilotservice SET ML_PILOTSERVICEFROM  = '$mlpilotserviceFROM' ,
        ML_PILOTSERVICETO =  '$mlpilotserviceTO',ML_PILOTSERVICEPRICE = '$mlpilotservicePrice'
        WHERE ML_PILOTSERVICEID = $updateMobileLegendsPilotService";
        $results=mysqli_query($conn,$sql);
        
        if($results){  
            $messages = "Successfully updated Mobile Legends Pilot Service";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Pilot Service please try again";
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
        <title>Update Mobile Legends Pilot Service</title>
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
    </head>

    <body>
        <div class="wrapper">

            <div class="title">
                <img src = "image/mobilelegends.jpg" width="50" height="50" alt = "Mobile Legends" >
                <b>Update Mobile Legends Pilot Service</b>
                <?php echo $message; ?>
            </div>

            <?php echo $messageInvalid;?>

            <p><b>CURRENT PILOT SERVICE</b></p>
            <div class = "form">
                <div class = "row">
                    <div class = "col-sm">
                        <p><b>FROM:</b></p>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $mlPSFROM;?>" disabled>
                    </div>
                    <div class = "col-sm">
                        <p><b>TO:</b></p>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $mlPSTO;?>" disabled>  
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price</b></label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $mlPSPrice;?>" disabled>
                    </div>
                </div>
            </div>
            <br>
            
            <p><b>NEW PILOT SERVICE</b></p>
            <form method = "post" enctype="multipart/form-data"> 
                <div class="form">
                    <div class = "row">
                        <div class = "col-sm">
                            <p><b>FROM:</b></p>
                            <select class="form-select" name="mobilelegendsPilotServiceFROM" aria-label="Default select example">
                                <!--OPTION LIST MOBILE LEGENDS PILOT SERVICES-->
                                <option value="WARRIOR">WARRIOR</option>
                                <option value="ELITE">ELITE</option>
                                <option value="MASTER">MASTER</option>
                                <option value="GRANDMASTER">GRANDMASTER</option>
                                <option value="EPIC">EPIC</option>
                                <option value="LEGEND">LEGEND</option>
                                <option value="MYTHIC">MYTHIC</option>
                                <option value="MYTHICAL GLORY">MYTHICAL GLORY</option>
                            </select>     
                        </div>
                        <br> <br>
                        <div class = "col-sm">
                            <p><b>TO:</b></p>
                            <select class="form-select" name="mobilelegendsPilotServiceTO" aria-label="Default select example">
                                <!--OPTION LIST MOBILE LEGENDS PILOT SERVICES-->
                                <option value="WARRIOR">WARRIOR</option>
                                <option value="ELITE">ELITE</option>
                                <option value="MASTER">MASTER</option>
                                <option value="GRANDMASTER">GRANDMASTER</option>
                                <option value="EPIC">EPIC</option>
                                <option value="LEGEND">LEGEND</option>
                                <option value="MYTHIC">MYTHIC</option>
                                <option value="MYTHICAL GLORY">MYTHICAL GLORY</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label"><b>Price</b></label>
                            <input type="text" name="mobilelegendsPilotServicePrice" class="form-control" id="formGroupExampleInput" placeholder="Input new price here" autocomplete="off" required>
                        </div>
                    </div>   

                    <br>
                    <div class="inputfield">
                        <input type="submit" value="Update" name="submit" class="btn">
                    </div>

                    <div class="inputfield">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
                            location.href = 'myinventorymobilelegend.php'">Back
                        </button>
                    </div>

                </div>
            </form>  

        </div>	
    </body>
</html>

