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

$updateClasofClanAccount = $_GET['updateClashofClanAccountID'];
$sql = "SELECT * FROM clashofclansellaccount WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbclashofclanLVL = $row['CLASHOFCLAN_LEVEL'];
$dbclashofclanGem = $row['CLASHOFCLAN_GEM'];
$dbclashofclanTownHallLVL = $row['CLASHOFCLAN_TOWNHALLLVL'];
$dbclashofclanBarbarianKingLVL = $row['CLASHOFCLAN_BARBARIANKINGLVL'];
$dbclashofclanQueenArcherLVL = $row['CLASHOFCLAN_ARCHERQUEENLVL'];
$dbclashofclanGrandWardenLVL = $row['CLASHOFCLAN_GRANDWARDENLVL'];
$dbclashofclanRoyalChampionLVL = $row['CLASHOFCLAN_ROYALCHAMPIONLVL'];
$dbclashofclanBattleMachineLVL = $row['CLASHOFCLAN_BATTLEMACHINELVL'];
$dbclashofclanHomeVillageInformationIMG = $row['CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG'];
$dbclashofclanBuilderBaseInformationIMG = $row['CLASHOFCLAN_BUILDERBASEINFORMATIONIMG'];
$dbclashofclanTownHallbaseIMG = $row['CLASHOFCLAN_TOWNHALLBASEIMG'];
$dbclashofclanuserBuilderHallIMG = $row['CLASHOFCLAN_BUILDERBASEIMG'];
$dbclashofclanuserPrice = $row['CLASHOFCLAN_PRICE'];

if(isset($_POST['submit'])){

    $clashofclanLVL = mysqli_real_escape_string($conn,$_POST['clashofclanLVL']);
    $clashofclanGem = mysqli_real_escape_string($conn,$_POST['clashofclanGem']);
    $clashofclanTownHallLVL = mysqli_real_escape_string($conn,$_POST['clashofclanTownHallLVL']);
    $clashofclanbarbariankingLVL = mysqli_real_escape_string($conn,$_POST['clashofclanbarbariankingLVL']);
    $clashofclanqueenarcherLVL = mysqli_real_escape_string($conn,$_POST['clashofclanqueenarcherLVL']);
    $clashofclangrandwardenLVL = mysqli_real_escape_string($conn,$_POST['clashofclangrandwardenLVL']);
    $clashofclanroyalchampionLVL = mysqli_real_escape_string($conn,$_POST['clashofclanroyalchampionLVL']);
    $clashofclanbattlemachineLVL = mysqli_real_escape_string($conn,$_POST['clashofclanbattlemachineLVL']);
    $clashofclanPrice = mysqli_real_escape_string($conn,$_POST['clashofclanPrice']);

    //check if the only text are updated
    //if true
    if($_FILES['clashofclanHomeVillageInformationIMG']['name'] == "" && $_FILES['clashofclanBuilderBaseInformationIMG']['name'] == ""
        && $_FILES['clashofclanTownHallbaseIMG']['name'] == "" && $_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){
        
        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL', CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
 
    }//check if the home village information is the only updated 
    //and if true  
    else if($_FILES['clashofclanBuilderBaseInformationIMG']['name'] == "" && $_FILES['clashofclanTownHallbaseIMG']['name'] == "" && $_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){

        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }// check if the home village information and builder base information are the only updated
    //and if true
    else if($_FILES['clashofclanTownHallbaseIMG']['name'] == "" && $_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){
        
        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_BUILDERBASEINFORMATIONIMG = '$clashofclanBuilderBaseInformationIMG', CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }//check if the home village information and townhall base are the only updated
    //and if true
    else if($_FILES['clashofclanBuilderBaseInformationIMG']['name'] == "" && $_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){

        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG', CLASHOFCLAN_PRICE = '$clashofclanPrice'
        WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }//check if the home village information and builder base are the only updated
    //and if true
    else if($_FILES['clashofclanBuilderBaseInformationIMG']['name'] == "" && $_FILES['clashofclanTownHallbaseIMG']['name'] == ""){

        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);
        
        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);
    
        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG', CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    
    
    
    }//check if the builder base information is the only updated
    //and if true
    else if($_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  "" && $_FILES['clashofclanTownHallbaseIMG']['name'] == "" && $_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){

        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);
    
        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_BUILDERBASEINFORMATIONIMG = '$clashofclanBuilderBaseInformationIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    
    }//check if the builder base information and townhall base are the only update
    //and if true 
    else if($_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  "" && $_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){

        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);
    
        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_BUILDERBASEINFORMATIONIMG = '$clashofclanBuilderBaseInformationIMG',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG', CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    }//check if the builder base information and builder base are the only update
    //and if true
    else if($_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  "" && $_FILES['clashofclanTownHallbaseIMG']['name'] == ""){
        
        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_BUILDERBASEINFORMATIONIMG = '$clashofclanBuilderBaseInformationIMG',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG', CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    }//check if the townhall base is the only updated
    //and if true
    else if($_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  "" && $_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  "" && $_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
        
    }//check if the townhall base and builder base are the only updated
    //and if true
    else if($_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  "" && $_FILES['clashofclanBuilderBaseInformationIMG']['name'] == ""){

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);

        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }//check if the builderbase in the only updated
    //and if true
    else if($_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  "" && $_FILES['clashofclanBuilderBaseInformationIMG']['name'] == "" && $_FILES['clashofclanTownHallbaseIMG']['name'] == ""){

        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }//check if the home village information is the only empty
    //and if true
    else if($_FILES['clashofclanHomeVillageInformationIMG']['name'] ==  ""){

        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);

        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_BUILDERBASEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }//check if the builder base information is the only empty
    //and if true
    else if($_FILES['clashofclanBuilderBaseInformationIMG']['name'] == ""){

        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);

        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    }//check if the townhall base is the only empty
    //and if true
    else if($_FILES['clashofclanTownHallbaseIMG']['name'] == ""){

        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);

        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_BUILDERBASEINFORMATIONIMG = '$clashofclanBuilderBaseInformationIMG',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }//check if the builder base is the only empty
    //and if true
    else if($_FILES['clashofclanBuilderHallBaseIMG']['name'] == ""){

        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);
    
        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_BUILDERBASEINFORMATIONIMG = '$clashofclanBuilderBaseInformationIMG',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
      
    }//check if all the images and text are updated 
    //and if true
    else{

        //storing image 
        //storing image clashofclan HomeVillage Information
        $clashofclanHomeVillageInformationIMGImageName = $_FILES['clashofclanHomeVillageInformationIMG']['name'];
        $clashofclanHomeVillageInformationIMGImageType = $_FILES['clashofclanHomeVillageInformationIMG']['type'];
        $clashofclanHomeVillageInformationIMGImageTempLoc = $_FILES['clashofclanHomeVillageInformationIMG']['tmp_name'];
        $clashofclanHomeVillageInformationIMGImageSize = $_FILES['clashofclanHomeVillageInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanHomeVillageInformationIMG = addslashes(file_get_contents($_FILES['clashofclanHomeVillageInformationIMG']['tmp_name']));
        $clashofclanHomeVillageInformationIMGimg_ex = pathinfo($clashofclanHomeVillageInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanHomeVillageInformationIMGimg_ex_lc = strtolower($clashofclanHomeVillageInformationIMGimg_ex);
        $clashofclanHomeVillageInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanHomeVillageInformationIMGimg_ex_lc; 
        $clashofclanHomeVillageInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanHomeVillageInformationIMGnew_img_name;
        move_uploaded_file($clashofclanHomeVillageInformationIMGImageTempLoc,$clashofclanHomeVillageInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan BuilderHall Information
        $clashofclanBuilderBaseInformationIMGImageName = $_FILES['clashofclanBuilderBaseInformationIMG']['name'];
        $clashofclanBuilderBaseInformationIMGImageType = $_FILES['clashofclanBuilderBaseInformationIMG']['type'];
        $clashofclanBuilderBaseInformationIMGImageTempLoc = $_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name'];
        $clashofclanBuilderBaseInformationIMGImageSize = $_FILES['clashofclanBuilderBaseInformationIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderBaseInformationIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderBaseInformationIMG']['tmp_name']));
        $clashofclanBuilderBaseInformationIMGimg_ex = pathinfo($clashofclanBuilderBaseInformationIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderBaseInformationIMGimg_ex_lc = strtolower($clashofclanBuilderBaseInformationIMGimg_ex);
        $clashofclanBuilderBaseInformationIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderBaseInformationIMGimg_ex_lc; 
        $clashofclanBuilderBaseInformationIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderBaseInformationIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderBaseInformationIMGImageTempLoc,$clashofclanBuilderBaseInformationIMGimg_upload_path);

        //storing image
        //storing image clashofclan TownHall Base
        $clashofclanTownHallbaseIMGImageName = $_FILES['clashofclanTownHallbaseIMG']['name'];
        $clashofclanTownHallbaseIMGIMGImageType = $_FILES['clashofclanTownHallbaseIMG']['type'];
        $clashofclanTownHallbaseIMGImageTempLoc = $_FILES['clashofclanTownHallbaseIMG']['tmp_name'];
        $clashofclanTownHallbaseIMGImageSize = $_FILES['clashofclanTownHallbaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanTownHallbaseIMG = addslashes(file_get_contents($_FILES['clashofclanTownHallbaseIMG']['tmp_name']));
        $clashofclanTownHallbaseIMGimg_ex = pathinfo($clashofclanTownHallbaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanTownHallbaseIMGimg_ex_lc = strtolower($clashofclanTownHallbaseIMGimg_ex);
        $clashofclanTownHallbaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanTownHallbaseIMGimg_ex_lc; 
        $clashofclanTownHallbaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanTownHallbaseIMGnew_img_name;
        move_uploaded_file($clashofclanTownHallbaseIMGImageTempLoc,$clashofclanTownHallbaseIMGimg_upload_path);

        //storing image
        //storing image clash of clan Builder Hall Base
        $clashofclanBuilderHallBaseIMGImageName = $_FILES['clashofclanBuilderHallBaseIMG']['name'];
        $clashofclanBuilderHallBaseIMGImageType = $_FILES['clashofclanBuilderHallBaseIMG']['type'];
        $clashofclanBuilderHallBaseIMGImageTempLoc = $_FILES['clashofclanBuilderHallBaseIMG']['tmp_name'];
        $clashofclanBuilderHallBaseIMGImageSize = $_FILES['clashofclanBuilderHallBaseIMG']['size'];
        //file path
        //to store images to the folder
        $clashofclanBuilderHallBaseIMG = addslashes(file_get_contents($_FILES['clashofclanBuilderHallBaseIMG']['tmp_name']));
        $clashofclanBuilderHallBaseIMGimg_ex = pathinfo($clashofclanBuilderHallBaseIMGImageName, PATHINFO_EXTENSION);
        $clashofclanBuilderHallBaseIMGimg_ex_lc = strtolower($clashofclanBuilderHallBaseIMGimg_ex);
        $clashofclanBuilderHallBaseIMGnew_img_name = uniqid("IMG-",true).'.'.$clashofclanBuilderHallBaseIMGimg_ex_lc; 
        $clashofclanBuilderHallBaseIMGimg_upload_path = 'clashofclanIMGDb/'.$clashofclanBuilderHallBaseIMGnew_img_name;
        move_uploaded_file($clashofclanBuilderHallBaseIMGImageTempLoc,$clashofclanBuilderHallBaseIMGimg_upload_path);
        
        $sql = "UPDATE clashofclansellaccount SET CLASHOFCLAN_LEVEL = '$clashofclanLVL',
        CLASHOFCLAN_GEM = '$clashofclanGem', CLASHOFCLAN_TOWNHALLLVL = '$clashofclanTownHallLVL',
        CLASHOFCLAN_BARBARIANKINGLVL = '$clashofclanbarbariankingLVL', CLASHOFCLAN_ARCHERQUEENLVL = '$clashofclanqueenarcherLVL',
        CLASHOFCLAN_GRANDWARDENLVL = '$clashofclangrandwardenLVL', CLASHOFCLAN_ROYALCHAMPIONLVL = '$clashofclanroyalchampionLVL',
        CLASHOFCLAN_BATTLEMACHINELVL = '$clashofclanbattlemachineLVL',
        CLASHOFCLAN_HOMEVILLAGEINFORMATIONIMG = '$clashofclanHomeVillageInformationIMG',
        CLASHOFCLAN_BUILDERBASEINFORMATION = '$clashofclanBuilderBaseInformationIMG',
        CLASHOFCLAN_TOWNHALLBASEIMG = '$clashofclanTownHallbaseIMG',
        CLASHOFCLAN_BUILDERBASEIMG = '$clashofclanBuilderHallBaseIMG',
        CLASHOFCLAN_PRICE = '$clashofclanPrice' WHERE CLASHOFCLAN_ID = $updateClasofClanAccount";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Clash of Clan Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventoryclashofclan.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Clash of Clan Sell Account please try again";
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
        <title>Update Clash of Clan Sell Account</title>
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
    </head>

    <body>
        
        <div class="wrapper">

            <div class="title">
                <img src = "image/clashofclan.jpg" width="50" height="50" alt = "Clash of Clan" >
                Update Clash of Clan Sell Account
                <?php echo $message; ?>
            </div>
            
            <div class = "form">
                <form method = "post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Account Level</b></label>
                        <input type="text" value="<?php echo $dbclashofclanLVL;?>" name="clashofclanLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Level here" autocomplete="off" required>
                    </div>
        
                    <div class="form-group">
                        <br>
                        <label for="message-text" class="col-form-label"><b>Gem</b></label>
                        <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> If you don't have the gem type '0'.</small>
                        <input type="text" value="<?php echo $dbclashofclanGem;?>" name="clashofclanGem" class="form-control" id="formGroupExampleInput" placeholder="Input Gem here" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <br>
                        <label for="message-text" class="col-form-label"><b>Townhall Level</b></label>
                        <select class="form-select" name="clashofclanTownHallLVL" aria-label="Default select example">
                            <!--OPTION LIST CLASH OF CLAN-->
                            <option value="TOWNHALL 1" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 1' ? 'selected="selected"':'';?>>TOWNHALL 1</option>
                            <option value="TOWNHALL 2" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 2' ? 'selected="selected"':'';?>>TOWNHALL 2</option>
                            <option value="TOWNHALL 3" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 3' ? 'selected="selected"':'';?>>TOWNHALL 3</option>
                            <option value="TOWNHALL 4" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 4' ? 'selected="selected"':'';?>>TOWNHALL 4</option>
                            <option value="TOWNHALL 5" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 5' ? 'selected="selected"':'';?>>TOWNHALL 5</option>
                            <option value="TOWNHALL 6" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 6' ? 'selected="selected"':'';?>>TOWNHALL 6</option>
                            <option value="TOWNHALL 7" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 7' ? 'selected="selected"':'';?>>TOWNHALL 7</option>
                            <option value="TOWNHALL 8" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 8' ? 'selected="selected"':'';?>>TOWNHALL 8</option>
                            <option value="TOWNHALL 9" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 9' ? 'selected="selected"':'';?>>TOWNHALL 9</option>
                            <option value="TOWNHALL 10" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 10' ? 'selected="selected"':'';?>>TOWNHALL 10</option>
                            <option value="TOWNHALL 11" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 11' ? 'selected="selected"':'';?>>TOWNHALL 11</option>
                            <option value="TOWNHALL 12" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 12' ? 'selected="selected"':'';?>>TOWNHALL 12</option>
                            <option value="TOWNHALL 13" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 13' ? 'selected="selected"':'';?>>TOWNHALL 13</option>
                            <option value="TOWNHALL 14" <?= $dbclashofclanTownHallLVL == 'TOWNHALL 14' ? 'selected="selected"':'';?>>TOWNHALL 14</option>
                        </select> 
                    </div>
                
                    <div class="form-group">
                        <div class = "row">
                            <div class = "col-sm">
                                <br>
                                <label for="message-text" class="col-form-label"><b>Hero Level</b></label>
                                <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> If you don't have the hero type '0' on their level.</small>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class = "row">
                                <div class = "col-sm">
                                    <img src = "image/barbariankingclashofclan.png" width="45" height="45">
                                    <label for="message-text" class="col-form-label"  style="font-weight: 500;"><b>Barbarian King</b></label>
                                    <br>
                                    <input type="text" value="<?php echo $dbclashofclanBarbarianKingLVL;?>" name="clashofclanbarbariankingLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Barbarian King Level here" autocomplete="off" required>
                                </div>      
                                <div class = "col-sm">
                                    <img src = "image/queenarcherclashofclan.jpg" width="45" height="45">
                                    <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Queen Archer</b></label>
                                    <input type="text" value="<?php echo $dbclashofclanQueenArcherLVL;?>" name="clashofclanqueenarcherLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Queen Archer Level here" autocomplete="off" required>
                                </div>
                            </div>   
                            <br>
                            <div class = "row">
                                <div class = "col-sm">
                                    <img src = "image/grandwardenclashofclan.png" width="45" height="45">
                                    <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Grand Warden</b></label>
                                    <input type="text" value="<?php echo $dbclashofclanGrandWardenLVL;?>" name="clashofclangrandwardenLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Grand Warden Level here" autocomplete="off" required>
                                </div>      
                                <div class = "col-sm">
                                    <img src = "image/royalchampionclashofclan.jpg" width="45" height="45">
                                    <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Royal Champion</b></label>
                                    <input type="text" value="<?php echo $dbclashofclanRoyalChampionLVL;?>" name="clashofclanroyalchampionLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Royal Champion Level here" autocomplete="off" required>
                                </div>
                            </div>  
                            <br>
                            <div class = "row">
                                <div class = "col-sm">
                                    <img src = "image/battlemachineclashofclan.png" width="45" height="45">
                                    <label for="message-text" class="col-form-label" style="font-weight: 500;"><b>Battle Machine</b></label>
                                    <input type="text" value="<?php echo $dbclashofclanBattleMachineLVL;?>" name="clashofclanbattlemachineLVL" class="form-control" id="formGroupExampleInput" placeholder="Input Battle Machine Level here" autocomplete="off" required>
                                </div>
                                <div class = "col-sm">
                                </div>
                            </div>         
                        </div>
                    </div>

                    <br>
                    <label><b>Image Details</b><br></label>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Home Village Information</b></label>
                        <div class="mb-3">
                            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanHomeVillageInformationIMG).'" width="440" height="240"/>'?>
                            <input class="form-control" name="clashofclanHomeVillageInformationIMG" type="file" id="formFile" accept="image/*" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b><b>Builder Hall Information</b></b></label>
                        <div class="mb-3">
                            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanBuilderBaseInformationIMG).'" width="440" height="240"/>'?>
                            <input class="form-control" name="clashofclanBuilderBaseInformationIMG" type="file" id="formFile" accept="image/*" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Townhall Base</b></label>
                        <div class="mb-3">
                            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanTownHallbaseIMG).'" width="440" height="240"/>'?>
                            <input class="form-control" name="clashofclanTownHallbaseIMG" type="file" id="formFile" accept="image/*" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Builderhall Base</b></label>
                        <div class="mb-3">
                            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbclashofclanuserBuilderHallIMG).'" width="440" height="240"/>'?>
                            <input class="form-control" name="clashofclanBuilderHallBaseIMG" type="file" id="formFile" accept="image/*" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price</b></label>
                        <input type="text" value="<?php echo $dbclashofclanuserPrice;?>" name="clashofclanPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" required>
                    </div>

                    <br>
                    <div class="inputfield">
                        <input type="submit" value="Update" name="submit" class="btn">
                    </div>

                    <div class="inputfield">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
                            location.href = 'myinventoryclashofclan.php'">Back
                        </button>
                    </div>
                </form>  
            </div>

        </div>	
    </body>
</html>