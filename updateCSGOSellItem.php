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

$updateCSGOSellItem = $_GET['updateCSGOSellItemID'];
$sql = "SELECT * FROM csgosellitem WHERE CSGO_SELLITEMID = $updateCSGOSellItem";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbcsgosellitemName = $row['CSGO_SELLITEMNAME'];
$dbcsgosellitemCollectionList = $row['CSGO_SELLITEMCOLLECTIONLIST'];
$dbcsgosellitemWeaponType = $row['CSGO_SELLITEMWEAPONTYPE'];
$dbcsgoItemIMG = $row['CSGO_SELLITEMIMG'];
$dbcsgosellitemPrice = $row['CSGO_SELLITEMPRICE'];

if(isset($_POST['submit'])){

    $csgoitemName = mysqli_real_escape_string($conn,$_POST['csgosellItemName']);
    $csgocollectionList = mysqli_real_escape_string($conn,$_POST['csgoCollectionList']);
    $csgoweaponType = mysqli_real_escape_string($conn,$_POST['csgoWeaponType']);
    $csgoitemPrice = mysqli_real_escape_string($conn,$_POST['csgoItemPrice']);

    //if the user update the text only not inlcude the image 
    if($_FILES['csgoIMG']['name'] == ""){

        $sql = "UPDATE csgosellitem SET CSGO_SELLITEMNAME =  '$csgoitemName',
        CSGO_SELLITEMCOLLECTIONLIST = '$csgocollectionList',
        CSGO_SELLITEMWEAPONTYPE = '$csgoweaponType',
        CSGO_SELLITEMPRICE =  ' $csgoitemPrice' WHERE CSGO_SELLITEMID = $updateCSGOSellItem";
        $result = mysqli_query($conn,$sql);
        if($result){
            $messageSuccess = "Successfully Update CSGO sell item ";
            echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventorycsgo.php');</script>";
        }else{
            $messageFailed = "Unsuccessfully Update CSGO sell item please try again";
            echo "<script type='text/javascript'>alert('$messageFailed');</script>";
        }
    }else{
        //storing image to the database 
        $imageName = $_FILES['csgoIMG']['name'];
        $imageType = $_FILES['csgoIMG']['type'];
        $imageTempLoc = $_FILES['csgoIMG']['tmp_name'];
        $imageSize = $_FILES['csgoIMG']['size'];
        //adding image directory
        $image = addslashes(file_get_contents($imageTempLoc));
        $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
        $img_upload_path = 'csgoIMGDb/'.$new_img_name;
        move_uploaded_file($imageTempLoc,$img_upload_path);

        $sql = "UPDATE csgosellitem SET CSGO_SELLITEMNAME =  '$csgoitemName',
        CSGO_SELLITEMCOLLECTIONLIST = '$csgocollectionList',
        CSGO_SELLITEMWEAPONTYPE = '$csgoweaponType',   
        CSGO_SELLITEMIMG = '$image',
        CSGO_SELLITEMPRICE =  ' $csgoitemPrice' WHERE CSGO_SELLITEMID = $updateCSGOSellItem";
        $result = mysqli_query($conn,$sql);
        if($result){
            $messageSuccess = "Successfully Update CSGO sell item ";
            echo "<script type='text/javascript'>alert('$messageSuccess');window.location.replace('myinventorycsgo.php');</script>";
        }else{
            $messageFailed = "Unsuccessfully Update CSGO sell item please try again";
            echo "<script type='text/javascript'>alert('$messageFailed');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update CSGO Sell Item</title>
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <div class="wrapper">

            <div class="title">
                <img src="image/csgoicon.jpg" height = "50" width = "50">
                <b>Update CSGO Sell Item</b>
                <?php echo $message; ?>
            </div>

            <form method = "post" enctype="multipart/form-data">
                <div class = "form">

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Item Name</b></label>
                        <input type="text" class="form-control" value="<?php echo $dbcsgosellitemName;?>" id="formGroupExampleInput" name= "csgosellItemName" placeholder="Input Item Name here" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"><b>Collection List</b></label>
                        <select class="form-select" name="csgoCollectionList" aria-label="Default select example">
                            <!--OPTION LIST CSGO ITEM RARITY-->
                            <option value="CONSUMER GRADE" <?= $dbcsgosellitemCollectionList == 'CONSUMER GRADE' ? 'selected="selected"':'';?>>CONSUMER GRADE</option>
                            <option value="INDUSTRIAL GRADE" <?= $dbcsgosellitemCollectionList == 'INDUSTRIAL GRADE' ? 'selected="selected"':'';?>>INDUSTRIAL GRADE</option>
                            <option value="MIL-SPEC" <?= $dbcsgosellitemCollectionList == 'MIL-SPEC' ? 'selected="selected"':'';?>>MIL-SPEC</option>
                            <option value="RESTRICTED" <?= $dbcsgosellitemCollectionList == 'RESTRICTED' ? 'selected="selected"':'';?>>RESTRICTED</option>
                            <option value="CLASSIFIED" <?= $dbcsgosellitemCollectionList == 'CLASSIFIED' ? 'selected="selected"':'';?>>CLASSIFIED</option>
                            <option value="COVERT" <?= $dbcsgosellitemCollectionList == 'COVERT' ? 'selected="selected"':'';?>>COVERT</option>
                            <option value="EXCEEDINGLY RARE" <?= $dbcsgosellitemCollectionList == 'EXCEEDINGLY RARE' ? 'selected="selected"':'';?>>EXCEEDINGLY RARE</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Weapon Type</b></label>
                        <select class="form-select" name="csgoWeaponType" aria-label="Default select example">
                            <!--OPTION LIST CSGO WEAPON TYPE HERO-->
                            <option value="MELEE" <?= $dbcsgosellitemWeaponType == 'MELEE' ? 'selected="selected"':'';?>>MELEE</option>
                            <option value="PISTOL" <?= $dbcsgosellitemWeaponType == 'PISTOL' ? 'selected="selected"':'';?>>PISTOL</option>
                            <option value="SMG" <?= $dbcsgosellitemWeaponType == 'SMG' ? 'selected="selected"':'';?>>SMG</option>
                            <option value="SHOTGUN" <?= $dbcsgosellitemWeaponType == 'SHOTGUN' ? 'selected="selected"':'';?>>SHOTGUN</option>
                            <option value="RIFLE" <?= $dbcsgosellitemWeaponType == 'RIFLE' ? 'selected="selected"':'';?>>RIFLE</option>
                            <option value="SNIPER" <?= $dbcsgosellitemWeaponType == 'SNIPER' ? 'selected="selected"':'';?>>SNIPER</option>
                            <option value="HEAVY" <?= $dbcsgosellitemWeaponType == 'HEAVY' ? 'selected="selected"':'';?>>HEAVY</option>
                            <option value="GLOVES" <?= $dbcsgosellitemWeaponType == 'GLOVES' ? 'selected="selected"':'';?>>GLOVES</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Image</b></label>
                        <div class="mb-3">
                            <div class = "row">
                                <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbcsgoItemIMG).'" width="440" height="240"/>'?> 
                            </div>
                            <input class="form-control" type="file" name="csgoIMG" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price</b></label>
                        <input type="text"  value="<?php echo $dbcsgosellitemPrice;?>" class="form-control" id="formGroupExampleInput" name="csgoItemPrice" placeholder="Input Price here" autocomplete="off" required>
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

                </div>
            </form>  

        </div>	
    </body>
</html>