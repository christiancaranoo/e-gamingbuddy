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

$updateCSGOSellAccount = $_GET['updateCSGOSellAccountID'];
$sql = "SELECT * FROM csgosellaccount WHERE CSGO_SELLACCOUNTID  = $updateCSGOSellAccount";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbcsgosteamAddress = $row['CSGO_STEAMID'];
$dbcsgoMedal = $row['CSGO_SELLACCOUNTMEDAL'];
$dbcsgoRank = $row['CSGO_SELLACCOUNTRANK'];
$dbcsgoPrimeStatus = $row['CSGO_PRIMESTATUS'];
$dbcsgosteamAddressInventory = $row['CSGO_STEAMADDRESS'];
$dbcsgosteamIDIMG = $row['CSGO_STEAMIDIMG'];
$dbcsgoRANKPRIMESTATUSIMG = $row['CSGO_SELLACCOUNTRANKPRIMESTATUSIMG'];
$dbcsgoPrice = $row['CSGO_SELLACCOUNTPRICE'];

if(isset($_POST['submit'])){
    $csgoSteamID = mysqli_real_escape_string($conn,$_POST['csgosellaccountSteamID']);
    $csgoMedal = mysqli_real_escape_string($conn,$_POST['csgosellaccountMedal']);
    $csgoRank = mysqli_real_escape_string($conn,$_POST['csgosellaccountRank']);
    $csgoPrimeStatus = mysqli_real_escape_string($conn,$_POST['csgosellaccountPrimeStatus']);
    $csgoSteamAddressInventory = mysqli_real_escape_string($conn,$_POST['csgosellaccountSteamAddressCSGOInventory']);
    $csgoPrice = mysqli_real_escape_string($conn,$_POST['csgosellaccountPrice']);

    //checking if the steam address is valid
    if(filter_var($csgoSteamAddressInventory, FILTER_VALIDATE_URL) === FALSE){//if steam address is not valid
        $messageNotValidURL = "Invalid Steam URL please try again";
        echo "<script type='text/javascript'>alert('$messageNotValidURL');</script>";
    }else{

        //if the STEAM ID and PRIME STATUS IMAGE IS EMPTY
        //AND IF TRUE ONLY TEXT WILL BE UPDATED
        if($_FILES['csgosellaccountSteamIDIMG']['name'] == "" && $_FILES['csgosellaccountRankPrimeStatusIMG']['name'] == ""){

            $sql = "UPDATE `csgosellaccount` SET
            CSGO_STEAMID = '$csgoSteamID',
            CSGO_SELLACCOUNTMEDAL = '$csgoMedal',
            CSGO_SELLACCOUNTRANK = '$csgoRank',
            CSGO_PRIMESTATUS = '$csgoPrimeStatus',
            CSGO_STEAMADDRESS = '$csgoSteamAddressInventory',
            CSGO_SELLACCOUNTPRICE = '$csgoPrice'        
            WHERE CSGO_SELLACCOUNTID = $updateCSGOSellAccount";
            $result = mysqli_query($conn,$sql);

            if($result){
                $messageSuccess = "Successfully Update CSGO sell account";
                echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventorycsgo.php');</script>";  
            }else{
                $messageFailed = "Unsuccessful Update CSGO sell account please try again";
                echo "<script type='text/javascript'>alert('$messageFailed');</script>";
            }

        }else if($_FILES['csgosellaccountSteamIDIMG']['name'] == ""){
            //IF STEAM ID IMAGE IS EMPTY THEN THE PRIME STATUS WILL BE UPDATE AND OTHER TEXT FIELD

            //storing image CSGO RANK PRIME STATUS
            $csgorankprimestatusImageName = $_FILES['csgosellaccountRankPrimeStatusIMG']['name'];
            $csgorankprimestatusImageType = $_FILES['csgosellaccountRankPrimeStatusIMG']['type'];
            $csgorankprimestatusImageTempLoc = $_FILES['csgosellaccountRankPrimeStatusIMG']['tmp_name'];
            $csgorankprimestatusImageSize = $_FILES['csgosellaccountRankPrimeStatusIMG']['size'];
            //file path
            //to store images to the folder
            $csgoRankPrimeStatusIMG = addslashes(file_get_contents($_FILES['csgosellaccountRankPrimeStatusIMG']['tmp_name']));
            $csgoRankPrimeStatusimg_ex = pathinfo($csgorankprimestatusImageName, PATHINFO_EXTENSION);
            $csgoRankPrimeStatusimg_ex_lc = strtolower($csgoRankPrimeStatusimg_ex);
            $csgoRankPrimeStatusnew_img_name = uniqid("IMG-",true).'.'.$csgoRankPrimeStatusimg_ex_lc; 
            $csgoRankPrimeStatusimg_upload_path = 'csgoIMGDb/'.$csgoRankPrimeStatusnew_img_name;
            move_uploaded_file($csgorankprimestatusImageTempLoc,$csgoRankPrimeStatusimg_upload_path);

            $sql="UPDATE csgosellaccount SET CSGO_STEAMID = '$csgoSteamID',
            CSGO_SELLACCOUNTMEDAL = '$csgoMedal', CSGO_SELLACCOUNTRANK = '$csgoRank',
            CSGO_PRIMESTATUS = '$csgoPrimeStatus', CSGO_STEAMADDRESS = '$csgoSteamAddressInventory',
            CSGO_SELLACCOUNTRANKPRIMESTATUSIMG = '$csgoRankPrimeStatusIMG', CSGO_SELLACCOUNTPRICE = '$csgoPrice'        
            WHERE CSGO_SELLACCOUNTID  = $updateCSGOSellAccount";

            $result = mysqli_query($conn,$sql);
            if($result){
                $messageSuccess = "Successfully Update CSGO sell account";
                echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventorycsgo.php');</script>";  
            }else{
                $messageFailed = "Unsuccessful Update CSGO sell account please try again";
                echo "<script type='text/javascript'>alert('$messageFailed');</script>";
            }

        }else if($_FILES['csgosellaccountRankPrimeStatusIMG']['name'] == ""){
            //IF PRIMESTATUS IMAGE IS EMPTY THEN THE STEAM ID AND OTHER TEXT FIELD WILL BE UPDATE

            //storing image Steam ID 
            $csgosteamIDImageName = $_FILES['csgosellaccountSteamIDIMG']['name'];
            $csgosteamIDImageType = $_FILES['csgosellaccountSteamIDIMG']['type'];
            $csgosteamIDImageTempLoc = $_FILES['csgosellaccountSteamIDIMG']['tmp_name'];
            $csgosteamIDImageSize = $_FILES['csgosellaccountSteamIDIMG']['size'];

            //file path
            //to store images to the folder
            $csgosteamIDIMG = addslashes(file_get_contents($_FILES['csgosellaccountSteamIDIMG']['tmp_name']));
            $csgosteamIDimg_ex = pathinfo($csgosteamIDImageName, PATHINFO_EXTENSION);
            $csgosteamIDimg_ex_lc = strtolower($csgosteamIDimg_ex);
            $csgosteamIDnew_img_name = uniqid("IMG-",true).'.'.$csgosteamIDimg_ex_lc; 
            $csgosteamIDimg_upload_path = 'csgoIMGDb/'.$csgosteamIDnew_img_name;
            move_uploaded_file($csgosteamIDImageTempLoc,$csgosteamIDimg_upload_path);

            $sql="UPDATE csgosellaccount SET CSGO_STEAMID = '$csgoSteamID',
            CSGO_SELLACCOUNTMEDAL = '$csgoMedal', CSGO_SELLACCOUNTRANK = '$csgoRank',
            CSGO_PRIMESTATUS = '$csgoPrimeStatus', CSGO_STEAMADDRESS = '$csgoSteamAddressInventory', CSGO_STEAMIDIMG = '$csgosteamIDIMG',
            CSGO_SELLACCOUNTPRICE = '$csgoPrice'        
            WHERE CSGO_SELLACCOUNTID  = $updateCSGOSellAccount";

            $result = mysqli_query($conn,$sql);
            if($result){
            $messageSuccess = "Successfully Update CSGO sell account";
            echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventorycsgo.php');</script>";  
            }else{
            $messageFailed = "Unsuccessful Update CSGO sell account please try again";
            echo "<script type='text/javascript'>alert('$messageFailed');</script>";
            }

        }else{
            //IF THE STEAMID AND PRIMESTATUS IMAGE IS NOT EMPTY THEN IT WILL BOTH UPDATE INCLUDING OTHER TEXT FIELD OTHER TEXT FIELD
            //storing image Steam ID 
            $csgosteamIDImageName = $_FILES['csgosellaccountSteamIDIMG']['name'];
            $csgosteamIDImageType = $_FILES['csgosellaccountSteamIDIMG']['type'];
            $csgosteamIDImageTempLoc = $_FILES['csgosellaccountSteamIDIMG']['tmp_name'];
            $csgosteamIDImageSize = $_FILES['csgosellaccountSteamIDIMG']['size'];

            //file path
            //to store images to the folder
            $csgosteamIDIMG = addslashes(file_get_contents($_FILES['csgosellaccountSteamIDIMG']['tmp_name']));
            $csgosteamIDimg_ex = pathinfo($csgosteamIDImageName, PATHINFO_EXTENSION);
            $csgosteamIDimg_ex_lc = strtolower($csgosteamIDimg_ex);
            $csgosteamIDnew_img_name = uniqid("IMG-",true).'.'.$csgosteamIDimg_ex_lc; 
            $csgosteamIDimg_upload_path = 'csgoIMGDb/'.$csgosteamIDnew_img_name;
            move_uploaded_file($csgosteamIDImageTempLoc,$csgosteamIDimg_upload_path);

            //storing image CSGO RANK PRIME STATUS
            $csgorankprimestatusImageName = $_FILES['csgosellaccountRankPrimeStatusIMG']['name'];
            $csgorankprimestatusImageType = $_FILES['csgosellaccountRankPrimeStatusIMG']['type'];
            $csgorankprimestatusImageTempLoc = $_FILES['csgosellaccountRankPrimeStatusIMG']['tmp_name'];
            $csgorankprimestatusImageSize = $_FILES['csgosellaccountRankPrimeStatusIMG']['size'];
            //file path
            //to store images to the folder
            $csgoRankPrimeStatusIMG = addslashes(file_get_contents($_FILES['csgosellaccountRankPrimeStatusIMG']['tmp_name']));
            $csgoRankPrimeStatusimg_ex = pathinfo($csgorankprimestatusImageName, PATHINFO_EXTENSION);
            $csgoRankPrimeStatusimg_ex_lc = strtolower($csgoRankPrimeStatusimg_ex);
            $csgoRankPrimeStatusnew_img_name = uniqid("IMG-",true).'.'.$csgoRankPrimeStatusimg_ex_lc; 
            $csgoRankPrimeStatusimg_upload_path = 'csgoIMGDb/'.$csgoRankPrimeStatusnew_img_name;
            move_uploaded_file($csgorankprimestatusImageTempLoc,$csgoRankPrimeStatusimg_upload_path);

            $sql="UPDATE csgosellaccount SET CSGO_STEAMID = '$csgoSteamID',
            CSGO_SELLACCOUNTMEDAL = '$csgoMedal', CSGO_SELLACCOUNTRANK = '$csgoRank',
            CSGO_PRIMESTATUS = '$csgoPrimeStatus', CSGO_STEAMADDRESS = '$csgoSteamAddressInventory', CSGO_STEAMIDIMG = '$csgosteamIDIMG',
            CSGO_SELLACCOUNTRANKPRIMESTATUSIMG = '$csgoRankPrimeStatusIMG', CSGO_SELLACCOUNTPRICE = '$csgoPrice'        
            WHERE CSGO_SELLACCOUNTID  = $updateCSGOSellAccount";

            $result = mysqli_query($conn,$sql);
            if($result){
                $messageSuccess = "Successfully Update CSGO sell account";
                echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventorycsgo.php');</script>";  
            }else{
                $messageFailed = "Unsuccessful Update CSGO sell account please try again";
                echo "<script type='text/javascript'>alert('$messageFailed');</script>";
            }
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update CSGO Sell Account</title>
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
    </head>

    <body>

        <div class="wrapper">

            <div class="title">
                <img src="image/csgoicon.jpg" height = "50" width = "50">
                Update CSGO Sell Account
                <?php echo $message; ?>
            </div>

            <div class = "form">
                <form method = "post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Steam ID</b></label>
                        <input type="text" name="csgosellaccountSteamID" value="<?php echo $dbcsgosteamAddress;?>" class="form-control" id="formGroupExampleInput" placeholder="Input Steam ID here" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Medal</b></label>
                        <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Input medals all you have.</small>
                        <input type="text" name="csgosellaccountMedal" value="<?php echo $dbcsgoMedal;?>" class="form-control" id="formGroupExampleInput" placeholder="Input # of Medals here" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"><b>Rank</b></label>
                        <div class = "row">
                            <div class = "col-sm">
                                <select class="form-select" name="csgosellaccountRank" aria-label="Default select example">
                                    <!--OPTION LIST CSGO PILOT SERVICES-->
                                    <option value="SILVER 1" <?= $dbcsgoRank == 'SILVER 1' ? 'selected="selected"':'';?>>SILVER 1</option>
                                    <option value="SILVER 2" <?= $dbcsgoRank == 'SILVER 2' ? 'selected="selected"':'';?>>SILVER 2</option>
                                    <option value="SILVER 3" <?= $dbcsgoRank == 'SILVER 3' ? 'selected="selected"':'';?>>SILVER 3</option>
                                    <option value="SILVER 4" <?= $dbcsgoRank == 'SILVER 4' ? 'selected="selected"':'';?>>SILVER 4</option>
                                    <option value="SILVER ELITE" <?= $dbcsgoRank == 'SILVER ELITE' ? 'selected="selected"':'';?>>SILVER ELITE</option>
                                    <option value="SILVER ELITE MASTER" <?= $dbcsgoRank == 'SILVER ELITE MASTER' ? 'selected="selected"':'';?>>SILVER ELITE MASTER</option>
                                    <option value="GOLD NOVA 1" <?= $dbcsgoRank == 'GOLD NOVA 1' ? 'selected="selected"':'';?>>GOLD NOVA 1</option>
                                    <option value="GOLD NOVA 2" <?= $dbcsgoRank == 'GOLD NOVA 2' ? 'selected="selected"':'';?>>GOLD NOVA 2</option>
                                    <option value="GOLD NOVA 3" <?= $dbcsgoRank == 'GOLD NOVA 3' ? 'selected="selected"':'';?>>GOLD NOVA 3</option>
                                    <option value="GOLD NOVA 4" <?= $dbcsgoRank == 'GOLD NOVA 4' ? 'selected="selected"':'';?>>GOLD NOVA 4</option>
                                    <option value="MASTER GUARDIAN 1" <?= $dbcsgoRank == 'MASTER GUARDIAN 1' ? 'selected="selected"':'';?>>MASTER GUARDIAN 1</option>
                                    <option value="MASTER GUARDIAN 2" <?= $dbcsgoRank == 'MASTER GUARDIAN 2' ? 'selected="selected"':'';?>>MASTER GUARDIAN 2</option>
                                    <option value="MASTER GUARDIAN ELITE" <?= $dbcsgoRank == 'SMASTER GUARDIAN ELITE' ? 'selected="selected"':'';?>>MASTER GUARDIAN ELITE</option>
                                    <option value="DISTINGUISHED MASTER GUARDIAN" <?= $dbcsgoRank == 'DISTINGUISHED MASTER GUARDIAN' ? 'selected="selected"':'';?>>DISTINGUISHED MASTER GUARDIAN</option>
                                    <option value="LEGENDARY EAGLE" <?= $dbcsgoRank == 'LEGENDARY EAGLE' ? 'selected="selected"':'';?>>LEGENDARY EAGLE</option>
                                    <option value="LEGENDARY EAGLE MASTER" <?= $dbcsgoRank == 'LEGENDARY EAGLE MASTER' ? 'selected="selected"':'';?>>LEGENDARY EAGLE MASTER</option>
                                    <option value="SUPREME MASTER FIRSTCLASS" <?= $dbcsgoRank == 'SUPREME MASTER FIRSTCLASS' ? 'selected="selected"':'';?>>SUPREME MASTER FIRSTCLASS</option>
                                    <option value="GLOBAL ELITE" <?= $dbcsgoRank == 'GLOBAL ELITE' ? 'selected="selected"':'';?>>GLOBAL ELITE</option>
                                </select>
                            </div>
                            <br> <br>
                            <label for="recipient-name" class="col-form-label"><b>Prime Status</b></label>
                                        
                            <div class = "col-sm">
                                <select class="form-select" name="csgosellaccountPrimeStatus" aria-label="Default select example">
                                    <!--OPTION LIST CSGO PILOT SERVICES-->
                                    <option value="PRIME" <?= $dbcsgoPrimeStatus == 'PRIME' ? 'selected="selected"':'';?>>PRIME</option>
                                    <option value="NOT PRIME" <?= $dbcsgoPrimeStatus== 'NOT PRIME' ? 'selected="selected"':'';?>>NOT PRIME</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label"><b>Steam URL - CSGO Inventory</b></label>
                                <input type="text" value="<?php echo $dbcsgosteamAddressInventory;?>" class="form-control" id="formGroupExampleInput" name="csgosellaccountSteamAddressCSGOInventory" placeholder="Input Steam Address CSGO Inventory here" autocomplete="off" required>
                            </div>

                        </div>   
                    </div>

                    <br>
                    <label><b>Image</b></label>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Steam ID</b></label>
                        <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbcsgosteamIDIMG).'" width="440" height="240"/>'?>
                        <div class="mb-3">
                            <input class="form-control"  name="csgosellaccountSteamIDIMG" type="file" id="formFile" accept="image/*" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Prime Status</b></label>
                        <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbcsgoRANKPRIMESTATUSIMG).'" width="440" height="240"/>'?>
                        <div class="mb-3">
                            <input class="form-control" name="csgosellaccountRankPrimeStatusIMG" type="file" id="formFile" accept="image/*" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price</b></label>
                        <input type="text" value="<?php echo $dbcsgoPrice;?>" name="csgosellaccountPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                    </div>

                    <br>
                    <div class="inputfield">
                        <input type="submit" value="Update" name="submit" class="btn">
                    </div>

                    <div class="inputfield">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
                            location.href = 'myinventorycsgo.php'">Back
                        </button>
                    </div>
                </form>   
             
            </div>
        </div>	
    </body>
</html>
