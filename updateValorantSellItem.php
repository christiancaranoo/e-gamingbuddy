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

$updateValorantSellItem = $_GET['updateValorantSellItemID'];
$sql = "SELECT * FROM valorantsellitem WHERE VALORANT_SELLITEMID = $updateValorantSellItem";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbvalorantsellitemName = $row['VALORANT_SELLITEMNAME'];
$dbvalorantsellitemCollectionList = $row['VALORANT_SELLITEMCOLLECTIONLIST'];
$dbvalorantsellitemWeaponType = $row['VALORANT_SELLITEMWEAPONTYPE'];
$dbvalorantItemIMG = $row['VALORANT_SELLITEMIMG'];
$dbvalorantsellitemPrice = $row['VALORANT_SELLITEMPRICE'];

if(isset($_POST['submit'])){

    //COLLECTING DATA
    $valorantItemName = mysqli_real_escape_string($conn,$_POST['valorantsellitemName']);
    $valorantCollectionList = mysqli_real_escape_string($conn,$_POST['valorantsellitemCollectionList']); 
    $valorantWeaponType = mysqli_real_escape_string($conn,$_POST['valorantsellitemWeaponType']);              
    $valorantitemPrice = mysqli_real_escape_string($conn,$_POST['valorantsellitemPrice']);
    
    //if the text is only to be updated not the image
    //and if true
    if($_FILES['valorantsellitemIMG']['name'] == ""){
        $sql = "UPDATE valorantsellitem SET VALORANT_SELLITEMNAME = '$valorantItemName' ,
        VALORANT_SELLITEMCOLLECTIONLIST = '$valorantCollectionList' ,
        VALORANT_SELLITEMWEAPONTYPE  = '$valorantWeaponType',
        VALORANT_SELLITEMPRICE = '$valorantitemPrice' WHERE VALORANT_SELLITEMID = $updateValorantSellItem";

        $results=mysqli_query($conn,$sql);

        if($results){
            $messages = "Successfully updated Valorant Sell Item";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryvalorant.php');</script>";
        }
        else{
            $messageFail = "Unsuccessful update Valorant Sell Item please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    }else{
        //storing image to the database 
        $imageName = $_FILES['valorantsellitemIMG']['name'];
        $imageType = $_FILES['valorantsellitemIMG']['type'];
        $imageTempLoc = $_FILES['valorantsellitemIMG']['tmp_name'];
        $imageSize = $_FILES['valorantsellitemIMG']['size'];
        //adding image directory
        $image = addslashes(file_get_contents($imageTempLoc));
        $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
        $img_upload_path = 'valorantIMGDb/'.$new_img_name;
        move_uploaded_file($imageTempLoc,$img_upload_path);
        //storing data to the database

        $sql = "UPDATE valorantsellitem SET VALORANT_SELLITEMNAME = '$valorantItemName' ,
        VALORANT_SELLITEMCOLLECTIONLIST = '$valorantCollectionList' ,
        VALORANT_SELLITEMWEAPONTYPE  = '$valorantWeaponType',
        VALORANT_SELLITEMIMG = '$image',
        VALORANT_SELLITEMPRICE = '$valorantitemPrice' WHERE VALORANT_SELLITEMID = $updateValorantSellItem";

        $results=mysqli_query($conn,$sql);

        if($results){
            $messages = "Successfully updated Valorant Sell Item";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryvalorant.php');</script>";
        }
        else{
            $messageFail = "Unsuccessful update Valorant Sell Item please try again";
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
        <title>Update Valorant Sell Item</title>
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
                Update Valorant Sell Item
                <?php echo $message; ?>
            </div>

            <form method = "post" enctype="multipart/form-data">
                <div class = "form">
                         
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Item Name</b></label>
                        <input type="text" value="<?php echo $dbvalorantsellitemName;?>" name="valorantsellitemName" class="form-control" id="formGroupExampleInput" placeholder="Input Item Name here" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"><b>Collection List</b></label>
                        <select class="form-select" name="valorantsellitemCollectionList" aria-label="Default select example">
                            <!--OPTION LIST DOTA 2 HERO-->
                            <option value="ION COLLECTION" <?= $dbvalorantsellitemCollectionList == 'ION COLLECTION' ? 'selected="selected"':'';?>>ION COLLECTION</option>
                            <option value="ONI COLLECTION" <?= $dbvalorantsellitemCollectionList == 'ONI COLLECTION' ? 'selected="selected"':'';?>>ONI COLLECTION</option>
                            <option value="PRIME COLLECTION" <?= $dbvalorantsellitemCollectionList == 'PRIME COLLECTION' ? 'selected="selected"':'';?>>PRIME COLLECTION</option>
                            <option value="EGO COLLECTION" <?= $dbvalorantsellitemCollectionList == 'EGO COLLECTION' ? 'selected="selected"':'';?>>EGO COLLECTION</option>
                            <option value="ELDERFLAME COLLECTION" <?= $dbvalorantsellitemCollectionList == 'ELDERFLAME COLLECTION' ? 'selected="selected"':'';?>>ELDERFLAME COLLECTION</option>
                            <option value="KINGDOM COLLECTION" <?= $dbvalorantsellitemCollectionList == 'KINGDOM COLLECTION' ? 'selected="selected"':'';?>>KINGDOM COLLECTION</option>
                            <option value="PRISM COLLECTION" <?= $dbvalorantsellitemCollectionList == 'PRISM COLLECTION' ? 'selected="selected"':'';?>>PRISM COLLECTION</option>
                            <option value="GLITCHPOP COLLECTION" <?= $dbvalorantsellitemCollectionList == 'GLITCHPOP COLLECTION' ? 'selected="selected"':'';?>>GLITCHPOP COLLECTION</option>
                            <option value="HIVEMIND COLLECTION" <?= $dbvalorantsellitemCollectionList == 'HIVEMIND COLLECTION' ? 'selected="selected"':'';?>>HIVEMIND COLLECTION</option>
                            <option value="SPLINE COLLECTION" <?= $dbvalorantsellitemCollectionList == 'SPLINE COLLECTION' ? 'selected="selected"':'';?>>SPLINE COLLECTION</option>
                            <option value="LUXE MELEE" <?= $dbvalorantsellitemCollectionList == 'LUXE MELEE' ? 'selected="selected"':'';?>>LUXE MELEE</option>
                            <option value="SMITE COLLECTION" <?= $dbvalorantsellitemCollectionList == 'SMITE COLLECTION' ? 'selected="selected"':'';?>>SMITE COLLECTION</option>
                            <option value="G.U.N COLLECTION" <?= $dbvalorantsellitemCollectionList == 'G.U.N COLLECTION' ? 'selected="selected"':'';?>>G.U.N COLLECTION</option>
                            <option value="SINGULARITY COLLECTION" <?= $dbvalorantsellitemCollectionList == 'SINGULARITY COLLECTION' ? 'selected="selected"':'';?>>SINGULARITY COLLECTION</option>
                            <option value="RUIN COLLECTION" <?= $dbvalorantsellitemCollectionList == 'RUIN COLLECTION' ? 'selected="selected"':'';?>>RUIN COLLECTION</option>
                            <option value="REAVER COLLECTION" <?= $dbvalorantsellitemCollectionList == 'REAVER COLLECTION' ? 'selected="selected"':'';?>>REAVER COLLECTION</option>
                            <option value="SOVEREIGN COLLECTION" <?= $dbvalorantsellitemCollectionList == 'SOVEREIGN COLLECTION' ? 'selected="selected"':'';?>>SOVEREIGN COLLECTION</option>
                            <option value="BLASTX COLLECTION" <?= $dbvalorantsellitemCollectionList == 'BLASTX COLLECTION' ? 'selected="selected"':'';?>>BLASTX COLLECTION</option>
                            <option value="WINTERWUNDERLAND COLLECTION" <?= $dbvalorantsellitemCollectionList == 'WINTERWUNDERLAND COLLECTION' ? 'selected="selected"':'';?>>WINTERWUNDERLAND COLLECTION</option>
                            <option value="OUTPOST COLLECTION" <?= $dbvalorantsellitemCollectionList == 'OUTPOST COLLECTION' ? 'selected="selected"':'';?>>OUTPOST COLLECTION</option>
                            <option value="GLITCHPOP COLLECTION" <?= $dbvalorantsellitemCollectionList == 'GLITCHPOP COLLECTION' ? 'selected="selected"':'';?>>GLITCHPOP COLLECTION</option>
                            <option value="CELESTIAL COLLECTION" <?= $dbvalorantsellitemCollectionList == 'CELESTIAL COLLECTION' ? 'selected="selected"':'';?>>CELESTIAL COLLECTION</option>
                            <option value="PRIME 2.0 COLLECTION" <?= $dbvalorantsellitemCollectionList == 'PRISM 2.0 COLLECTION' ? 'selected="selected"':'';?>>PRIME 2.0 COLLECTION</option>
                            <option value="PRISM III COLLECTION" <?= $dbvalorantsellitemCollectionList == 'PRISM III COLLECTION' ? 'selected="selected"':'';?>>PRISM III COLLECTION</option>
                            <option value="VALORANT GO! KNIFE" <?= $dbvalorantsellitemCollectionList == 'VALORANT GO! KNIFE' ? 'selected="selected"':'';?>>VALORANT GO! KNIFE</option>
                            <option value="MAGEPUNK COLLECTION" <?= $dbvalorantsellitemCollectionList == 'MAGEPUNK COLLECTION' ? 'selected="selected"':'';?>>MAGEPUNK COLLECTION</option>
                            <option value="FORSAKEN COLLECTION" <?= $dbvalorantsellitemCollectionList == 'FORSAKEN COLLECTION' ? 'selected="selected"':'';?>>FORSAKEN COLLECTION</option>
                            <option value="SONGSTEEL COLLECTION" <?= $dbvalorantsellitemCollectionList == 'SONGSTEEL COLLECTION' ? 'selected="selected"':'';?>>SONGSTEEL COLLECTION</option>
                            <option value="TETHERED REALMS COLLECTION" <?= $dbvalorantsellitemCollectionList == 'TETHERED REALMS COLLECTION' ? 'selected="selected"':'';?>>TETHERED REALMS COLLECTION</option>
                            <option value="ORIGIN COLLECTION" <?= $dbvalorantsellitemCollectionList == 'ORIGIN COLLECTION' ? 'selected="selected"':'';?>>ORIGIN COLLECTION</option>
                            <option value="K-TAC COLLECTION" <?= $dbvalorantsellitemCollectionList == 'K-TAC COLLECTION' ? 'selected="selected"':'';?>>K-TAC COLLECTION</option>
                            <option value="RUINATION COLLECTION" <?= $dbvalorantsellitemCollectionList == 'RUINATION COLLECTION' ? 'selected="selected"':'';?>>RUINATION COLLECTION</option>
                            <option value="SENTINELS OF LIGHT COLLECTION" <?= $dbvalorantsellitemCollectionList == 'SENTINELS OF LIGHT COLLECTION' ? 'selected="selected"':'';?>>SENTINELS OF LIGHT COLLECTION</option>
                            <option value="RECON COLLECTION" <?= $dbvalorantsellitemCollectionList == 'RECON COLLECTION' ? 'selected="selected"':'';?>>RECON COLLECTION</option>
                            <option value="SPECTRUM COLLECTION" <?= $dbvalorantsellitemCollectionList == 'SPECTRUM COLLECTION' ? 'selected="selected"':'';?>>SPECTRUM COLLECTION</option>
                            <option value="ARTISAN COLLECTION" <?= $dbvalorantsellitemCollectionList == 'ARTISAN COLLECTION' ? 'selected="selected"':'';?>>ARTISAN COLLECTION</option>
                            <option value="GO! VOL.2 COLLECTION" <?= $dbvalorantsellitemCollectionList == 'GO! VOL. 2 COLLECTION' ? 'selected="selected"':'';?>>GO! VOL. 2 COLLECTION</option>
                            <option value="RGX 11Z PRO COLLECTION" <?= $dbvalorantsellitemCollectionList == 'RGX 11Z PRO COLLECTION' ? 'selected="selected"':'';?>>RGX 11Z PRO COLLECTION</option>
                            <option value="NUNCA OLVIDADOS COLLECTION" <?= $dbvalorantsellitemCollectionList == 'NUNCHA OLVIDADOS COLLECTION' ? 'selected="selected"':'';?>>NUNCA OLVIDADOS COLLECTION</option>
                            <option value="GENESIS COLLECTION" <?= $dbvalorantsellitemCollectionList == 'GENESIS COLLECTION' ? 'selected="selected"':'';?>>GENESIS COLLECTION</option>
                            <option value="RADIANT CRISIS 001 COLLECTION" <?= $dbvalorantsellitemCollectionList == 'RADIANT CRISIS 001 COLLECTION' ? 'selected="selected"':'';?>> RADIANT CRISIS 001 COLLECTION</option>
                            <option value="AERO COLLECTION" <?= $dbvalorantsellitemCollectionList == 'AERO COLLECTION' ? 'selected="selected"':'';?>>AERO COLLECTION</option>
                            <option value="GOLDWING COLLECTION" <?= $dbvalorantsellitemCollectionList == 'GOLDWING COLLECTION' ? 'selected="selected"':'';?>>GOLDWING COLLECTION</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Weapon Type</b></label>
                        <select class="form-select" name="valorantsellitemWeaponType" aria-label="Default select example">
                            <!--OPTION LIST DOTA 2 HERO-->
                            <option value="MELEE" <?= $dbvalorantsellitemWeaponType == 'MELEE' ? 'selected="selected"':'';?>>MELEE</option>
                            <option value="SIDEARM" <?= $dbvalorantsellitemWeaponType == 'SIDEARM' ? 'selected="selected"':'';?>>SIDEARM</option>
                            <option value="SMG" <?= $dbvalorantsellitemWeaponType == 'SMG' ? 'selected="selected"':'';?>>SMG</option>
                            <option value="SHOTGUN" <?= $dbvalorantsellitemWeaponType == 'SHOTGUN' ? 'selected="selected"':'';?>>SHOTGUN</option>
                            <option value="RIFLE" <?= $dbvalorantsellitemWeaponType == 'RIFLE' ? 'selected="selected"':'';?>>RIFLE</option>
                            <option value="SNIPER" <?= $dbvalorantsellitemWeaponType == 'SNIPER' ? 'selected="selected"':'';?>>SNIPER</option>
                            <option value="HEAVY" <?= $dbvalorantsellitemWeaponType == 'HEAVY' ? 'selected="selected"':'';?>>HEAVY</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Image</b></label>
                        <div class="mb-3">
                            <div class = "row">
                                <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbvalorantItemIMG).'" width="440" height="240"/>'?>
                            </div>
                            <input class="form-control" name="valorantsellitemIMG" type="file" id="formFile" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price</b></label>
                        <input type="text" value="<?php echo $dbvalorantsellitemPrice;?>" name="valorantsellitemPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
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
