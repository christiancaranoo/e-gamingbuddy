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

$updateMobileLegendsSellAccountID = $_GET['updateMobileLegendsSellAccountID'];
$sql = "SELECT * FROM mlbbsellaccount WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbmlbbMLID = $row['MLBB_SELLACCOUNTMLID'];
$dbmlbbIGN = $row['MLBB_SELLACCOUNTIGN'];
$dbmlbbWinrate = $row['MLBB_SELLACCOUNTWINRATE'];
$dbmlbbHighestRank = $row['MLBB_SELLACCOUNTHIGHESTRANK'];
$dbmlbbItemList = $row['MLBB_SELLACCOUNTITEMLIST'];
$dbmlbbIDIGNIMG = $row['MLBB_SELLACCOUNTIDIGNIMG'];
$dbmlbbWinrateIMG = $row['MLBB_SELLACCOUNTWINRATEIMG'];
$dbmlbbEmblemLVLIMG = $row['MLBB_SELLACCOUNTEMBLEMLVLIMG'];
$dbmlbbPrice = $row['MLBB_SELLACCOUNTPRICE'];

if(isset($_POST['submit'])){
    $mlbbsellaccountID = mysqli_real_escape_string($conn,$_POST['mlbbsellaccountID']);
    $mlbbsellaccountIGN = mysqli_real_escape_string($conn,$_POST['mlbbsellaccountIGN']);
    $mlbbsellaccountWinrate = mysqli_real_escape_string($conn,$_POST['mlbbsellaccountWinrate']);
    $mlbbsellaccountHighestRank = mysqli_real_escape_string($conn,$_POST['mlbbsellaccountHighestRank']);
    $mlbbsellaccountItemList = mysqli_real_escape_string($conn,$_POST['mlbbsellaccountItemList']);
    $mlbbsellaccountPrice = mysqli_real_escape_string($conn,$_POST['mlbbsellaccountPrice']);

    //check if Mobile Legends ID and IGN, Winrate and Emblem Levels are empty 
    if($_FILES['mlbbsellaccountIDIGNIMG']['name'] == "" && $_FILES['mlbbsellaccountWinrateIMG']['name'] == "" && $_FILES['mlbbsellaccountEmblemLVLIMG']['name'] == ""){

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate', MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank',
        MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList', MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice'
        WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
        
        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    }

    //check if the Image of Mobile Legends Winrate and Emblem Levels are the only empty
    else if($_FILES['mlbbsellaccountWinrateIMG']['name'] == "" && $_FILES['mlbbsellaccountEmblemLVLIMG']['name'] == ""){

        $mlbbsellaccountIDIGNIMGImageName = $_FILES['mlbbsellaccountIDIGNIMG']['name'];
        $mlbbsellaccountIDIGNIMGImageType = $_FILES['mlbbsellaccountIDIGNIMG']['type'];
        $mlbbsellaccountIDIGNIMGImageTempLoc = $_FILES['mlbbsellaccountIDIGNIMG']['tmp_name'];
        $mlbbsellaccountIDIGNIMGImageImageSize = $_FILES['mlbbsellaccountIDIGNIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountIDIGNIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountIDIGNIMG']['tmp_name']));
        $mlbbsellaccountIDIGNIMGimg_ex = pathinfo($mlbbsellaccountIDIGNIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountIDIGNIMGimg_ex_lc = strtolower($mlbbsellaccountIDIGNIMGimg_ex);
        $mlbbsellaccountIDIGNIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountIDIGNIMGimg_ex_lc; 
        $mlbbsellaccountIDIGNIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountIDIGNIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountIDIGNIMGImageTempLoc,$mlbbsellaccountIDIGNIMGimg_upload_path);

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate', MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank', MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList',
        MLBB_SELLACCOUNTIDIGNIMG = '$mlbbsellaccountIDIGNIMG', MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice' 
        WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
        
        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }

    //check if the Image of Mobile Legends ID with IGN and Emblem Levels are the only empty
    else if($_FILES['mlbbsellaccountIDIGNIMG']['name'] == "" && $_FILES['mlbbsellaccountEmblemLVLIMG']['name'] == ""){
        
        //storing image mobile sell account winrate image
        $mlbbsellaccountWinrateIMGImageName = $_FILES['mlbbsellaccountWinrateIMG']['name'];
        $mlbbsellaccountWinrateIMGImageType = $_FILES['mlbbsellaccountWinrateIMG']['type'];
        $mlbbsellaccountWinrateIMGImageTempLoc = $_FILES['mlbbsellaccountWinrateIMG']['tmp_name'];
        $mlbbsellaccountWinrateIMGImageSize = $_FILES['mlbbsellaccountWinrateIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountWinrateIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountWinrateIMG']['tmp_name']));
        $mlbbsellaccountWinrateIMGimg_ex = pathinfo($mlbbsellaccountWinrateIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountWinrateIMGimg_ex_lc = strtolower($mlbbsellaccountWinrateIMGimg_ex);
        $mlbbsellaccountWinrateIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountWinrateIMGimg_ex_lc; 
        $mlbbsellaccountWinrateIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountWinrateIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountWinrateIMGImageTempLoc,$mlbbsellaccountWinrateIMGimg_upload_path);

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate' ,MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank', MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList',
        MLBB_SELLACCOUNTWINRATEIMG = '$mlbbsellaccountWinrateIMG', MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice'
        WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
        
        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
    }

    //checki if the Image of Mobile Legends ID with IGN and Winrate are the only empty
    else if($_FILES['mlbbsellaccountIDIGNIMG']['name'] == "" && $_FILES['mlbbsellaccountWinrateIMG']['name'] == ""){
        
        //storing image mobile legend sell account emblem level
        $mlbbsellaccountEmblemLVLIMGImageName = $_FILES['mlbbsellaccountEmblemLVLIMG']['name'];
        $mlbbsellaccountEmblemLVLIMGImageType = $_FILES['mlbbsellaccountEmblemLVLIMG']['type'];
        $mlbbsellaccountEmblemLVLIMGImageTempLoc = $_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name'];
        $mlbbsellaccountEmblemLVLIMGImageSize = $_FILES['mlbbsellaccountEmblemLVLIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountEmblemLVLIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name']));
        $mlbbsellaccountEmblemLVLIMGimg_ex = pathinfo($mlbbsellaccountEmblemLVLIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountEmblemLVLIMGimg_ex_lc = strtolower($mlbbsellaccountEmblemLVLIMGimg_ex);
        $mlbbsellaccountEmblemLVLIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountEmblemLVLIMGimg_ex_lc; 
        $mlbbsellaccountEmblemLVLIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountEmblemLVLIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountEmblemLVLIMGImageTempLoc,$mlbbsellaccountEmblemLVLIMGimg_upload_path);

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate', MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank',
        MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList', MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice'
        WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
        
        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }

    //check if Image of Mobile Legends ID with IGN is the only empty
    else if($_FILES['mlbbsellaccountIDIGNIMG']['name'] == ""){

        //storing image mobile sell account winrate image
        $mlbbsellaccountWinrateIMGImageName = $_FILES['mlbbsellaccountWinrateIMG']['name'];
        $mlbbsellaccountWinrateIMGImageType = $_FILES['mlbbsellaccountWinrateIMG']['type'];
        $mlbbsellaccountWinrateIMGImageTempLoc = $_FILES['mlbbsellaccountWinrateIMG']['tmp_name'];
        $mlbbsellaccountWinrateIMGImageSize = $_FILES['mlbbsellaccountWinrateIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountWinrateIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountWinrateIMG']['tmp_name']));
        $mlbbsellaccountWinrateIMGimg_ex = pathinfo($mlbbsellaccountWinrateIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountWinrateIMGimg_ex_lc = strtolower($mlbbsellaccountWinrateIMGimg_ex);
        $mlbbsellaccountWinrateIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountWinrateIMGimg_ex_lc; 
        $mlbbsellaccountWinrateIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountWinrateIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountWinrateIMGImageTempLoc,$mlbbsellaccountWinrateIMGimg_upload_path);

        //storing image mobile legend sell account emblem level
        $mlbbsellaccountEmblemLVLIMGImageName = $_FILES['mlbbsellaccountEmblemLVLIMG']['name'];
        $mlbbsellaccountEmblemLVLIMGImageType = $_FILES['mlbbsellaccountEmblemLVLIMG']['type'];
        $mlbbsellaccountEmblemLVLIMGImageTempLoc = $_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name'];
        $mlbbsellaccountEmblemLVLIMGImageSize = $_FILES['mlbbsellaccountEmblemLVLIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountEmblemLVLIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name']));
        $mlbbsellaccountEmblemLVLIMGimg_ex = pathinfo($mlbbsellaccountEmblemLVLIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountEmblemLVLIMGimg_ex_lc = strtolower($mlbbsellaccountEmblemLVLIMGimg_ex);
        $mlbbsellaccountEmblemLVLIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountEmblemLVLIMGimg_ex_lc; 
        $mlbbsellaccountEmblemLVLIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountEmblemLVLIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountEmblemLVLIMGImageTempLoc,$mlbbsellaccountEmblemLVLIMGimg_upload_path);

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate', MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank',
        MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList', MLBB_SELLACCOUNTWINRATEIMG = '$mlbbsellaccountWinrateIMG',
        MLBB_SELLACCOUNTEMBLEMLVLIMG = '$mlbbsellaccountEmblemLVLIMG', MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice'
        WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
        
        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }

    //check if Image of Mobile Legends Winrate is the only empty
    else if($_FILES['mlbbsellaccountWinrateIMG']['name'] == ""){
        
        $mlbbsellaccountIDIGNIMGImageName = $_FILES['mlbbsellaccountIDIGNIMG']['name'];
        $mlbbsellaccountIDIGNIMGImageType = $_FILES['mlbbsellaccountIDIGNIMG']['type'];
        $mlbbsellaccountIDIGNIMGImageTempLoc = $_FILES['mlbbsellaccountIDIGNIMG']['tmp_name'];
        $mlbbsellaccountIDIGNIMGImageImageSize = $_FILES['mlbbsellaccountIDIGNIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountIDIGNIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountIDIGNIMG']['tmp_name']));
        $mlbbsellaccountIDIGNIMGimg_ex = pathinfo($mlbbsellaccountIDIGNIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountIDIGNIMGimg_ex_lc = strtolower($mlbbsellaccountIDIGNIMGimg_ex);
        $mlbbsellaccountIDIGNIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountIDIGNIMGimg_ex_lc; 
        $mlbbsellaccountIDIGNIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountIDIGNIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountIDIGNIMGImageTempLoc,$mlbbsellaccountIDIGNIMGimg_upload_path);

        //storing image mobile legend sell account emblem level
        $mlbbsellaccountEmblemLVLIMGImageName = $_FILES['mlbbsellaccountEmblemLVLIMG']['name'];
        $mlbbsellaccountEmblemLVLIMGImageType = $_FILES['mlbbsellaccountEmblemLVLIMG']['type'];
        $mlbbsellaccountEmblemLVLIMGImageTempLoc = $_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name'];
        $mlbbsellaccountEmblemLVLIMGImageSize = $_FILES['mlbbsellaccountEmblemLVLIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountEmblemLVLIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name']));
        $mlbbsellaccountEmblemLVLIMGimg_ex = pathinfo($mlbbsellaccountEmblemLVLIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountEmblemLVLIMGimg_ex_lc = strtolower($mlbbsellaccountEmblemLVLIMGimg_ex);
        $mlbbsellaccountEmblemLVLIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountEmblemLVLIMGimg_ex_lc; 
        $mlbbsellaccountEmblemLVLIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountEmblemLVLIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountEmblemLVLIMGImageTempLoc,$mlbbsellaccountEmblemLVLIMGimg_upload_path);

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate', MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank',
        MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList', MLBB_SELLACCOUNTIDIGNIMG = '$mlbbsellaccountIDIGNIMG',
        MLBB_SELLACCOUNTEMBLEMLVLIMG = '$mlbbsellaccountEmblemLVLIMG', MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice' 
        WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
        
        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }

    //check if Image of Mobile Legends Emblem Levels is the only empty
    else if($_FILES['mlbbsellaccountEmblemLVLIMG']['name'] == ""){

        $mlbbsellaccountIDIGNIMGImageName = $_FILES['mlbbsellaccountIDIGNIMG']['name'];
        $mlbbsellaccountIDIGNIMGImageType = $_FILES['mlbbsellaccountIDIGNIMG']['type'];
        $mlbbsellaccountIDIGNIMGImageTempLoc = $_FILES['mlbbsellaccountIDIGNIMG']['tmp_name'];
        $mlbbsellaccountIDIGNIMGImageImageSize = $_FILES['mlbbsellaccountIDIGNIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountIDIGNIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountIDIGNIMG']['tmp_name']));
        $mlbbsellaccountIDIGNIMGimg_ex = pathinfo($mlbbsellaccountIDIGNIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountIDIGNIMGimg_ex_lc = strtolower($mlbbsellaccountIDIGNIMGimg_ex);
        $mlbbsellaccountIDIGNIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountIDIGNIMGimg_ex_lc; 
        $mlbbsellaccountIDIGNIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountIDIGNIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountIDIGNIMGImageTempLoc,$mlbbsellaccountIDIGNIMGimg_upload_path);
    
        //storing image mobile sell account winrate image
        $mlbbsellaccountWinrateIMGImageName = $_FILES['mlbbsellaccountWinrateIMG']['name'];
        $mlbbsellaccountWinrateIMGImageType = $_FILES['mlbbsellaccountWinrateIMG']['type'];
        $mlbbsellaccountWinrateIMGImageTempLoc = $_FILES['mlbbsellaccountWinrateIMG']['tmp_name'];
        $mlbbsellaccountWinrateIMGImageSize = $_FILES['mlbbsellaccountWinrateIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountWinrateIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountWinrateIMG']['tmp_name']));
        $mlbbsellaccountWinrateIMGimg_ex = pathinfo($mlbbsellaccountWinrateIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountWinrateIMGimg_ex_lc = strtolower($mlbbsellaccountWinrateIMGimg_ex);
        $mlbbsellaccountWinrateIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountWinrateIMGimg_ex_lc; 
        $mlbbsellaccountWinrateIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountWinrateIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountWinrateIMGImageTempLoc,$mlbbsellaccountWinrateIMGimg_upload_path);

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate', MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank', MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList',
        MLBB_SELLACCOUNTIDIGNIMG = '$mlbbsellaccountIDIGNIMG', MLBB_SELLACCOUNTWINRATEIMG = '$mlbbsellaccountWinrateIMG',
        MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice' WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }

    }

    //check if the Image of Mobile Legends ID with IGN, Winrate and Emblem Levels are empty then
    //update only the text 
    else{

        $mlbbsellaccountIDIGNIMGImageName = $_FILES['mlbbsellaccountIDIGNIMG']['name'];
        $mlbbsellaccountIDIGNIMGImageType = $_FILES['mlbbsellaccountIDIGNIMG']['type'];
        $mlbbsellaccountIDIGNIMGImageTempLoc = $_FILES['mlbbsellaccountIDIGNIMG']['tmp_name'];
        $mlbbsellaccountIDIGNIMGImageImageSize = $_FILES['mlbbsellaccountIDIGNIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountIDIGNIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountIDIGNIMG']['tmp_name']));
        $mlbbsellaccountIDIGNIMGimg_ex = pathinfo($mlbbsellaccountIDIGNIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountIDIGNIMGimg_ex_lc = strtolower($mlbbsellaccountIDIGNIMGimg_ex);
        $mlbbsellaccountIDIGNIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountIDIGNIMGimg_ex_lc; 
        $mlbbsellaccountIDIGNIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountIDIGNIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountIDIGNIMGImageTempLoc,$mlbbsellaccountIDIGNIMGimg_upload_path);

        //storing image mobile sell account winrate image
        $mlbbsellaccountWinrateIMGImageName = $_FILES['mlbbsellaccountWinrateIMG']['name'];
        $mlbbsellaccountWinrateIMGImageType = $_FILES['mlbbsellaccountWinrateIMG']['type'];
        $mlbbsellaccountWinrateIMGImageTempLoc = $_FILES['mlbbsellaccountWinrateIMG']['tmp_name'];
        $mlbbsellaccountWinrateIMGImageSize = $_FILES['mlbbsellaccountWinrateIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountWinrateIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountWinrateIMG']['tmp_name']));
        $mlbbsellaccountWinrateIMGimg_ex = pathinfo($mlbbsellaccountWinrateIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountWinrateIMGimg_ex_lc = strtolower($mlbbsellaccountWinrateIMGimg_ex);
        $mlbbsellaccountWinrateIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountWinrateIMGimg_ex_lc; 
        $mlbbsellaccountWinrateIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountWinrateIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountWinrateIMGImageTempLoc,$mlbbsellaccountWinrateIMGimg_upload_path);

        //storing image mobile legend sell account emblem level
        $mlbbsellaccountEmblemLVLIMGImageName = $_FILES['mlbbsellaccountEmblemLVLIMG']['name'];
        $mlbbsellaccountEmblemLVLIMGImageType = $_FILES['mlbbsellaccountEmblemLVLIMG']['type'];
        $mlbbsellaccountEmblemLVLIMGImageTempLoc = $_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name'];
        $mlbbsellaccountEmblemLVLIMGImageSize = $_FILES['mlbbsellaccountEmblemLVLIMG']['size'];
        //file path
        //to store images to the folder
        $mlbbsellaccountEmblemLVLIMG = addslashes(file_get_contents($_FILES['mlbbsellaccountEmblemLVLIMG']['tmp_name']));
        $mlbbsellaccountEmblemLVLIMGimg_ex = pathinfo($mlbbsellaccountEmblemLVLIMGImageName, PATHINFO_EXTENSION);
        $mlbbsellaccountEmblemLVLIMGimg_ex_lc = strtolower($mlbbsellaccountEmblemLVLIMGimg_ex);
        $mlbbsellaccountEmblemLVLIMGnew_img_name = uniqid("IMG-",true).'.'.$mlbbsellaccountEmblemLVLIMGimg_ex_lc; 
        $mlbbsellaccountEmblemLVLIMGimg_upload_path = 'mlbbIMGDb/'.$mlbbsellaccountEmblemLVLIMGnew_img_name;
        move_uploaded_file($mlbbsellaccountEmblemLVLIMGImageTempLoc,$mlbbsellaccountEmblemLVLIMGimg_upload_path);

        $sql = "UPDATE mlbbsellaccount SET MLBB_SELLACCOUNTMLID = '$mlbbsellaccountID', MLBB_SELLACCOUNTIGN = '$mlbbsellaccountIGN',
        MLBB_SELLACCOUNTWINRATE = '$mlbbsellaccountWinrate', MLBB_SELLACCOUNTHIGHESTRANK = '$mlbbsellaccountHighestRank', MLBB_SELLACCOUNTITEMLIST = '$mlbbsellaccountItemList',
        MLBB_SELLACCOUNTIDIGNIMG = '$mlbbsellaccountIDIGNIMG',MLBB_SELLACCOUNTWINRATEIMG = '$mlbbsellaccountWinrateIMG',
        MLBB_SELLACCOUNTEMBLEMLVLIMG = '$mlbbsellaccountEmblemLVLIMG',
        MLBB_SELLACCOUNTPRICE = '$mlbbsellaccountPrice' WHERE MLBB_SELLACCOUNTID = $updateMobileLegendsSellAccountID";
        
        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Mobile Legends Sell Account";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorymobilelegend.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Mobile Legends Sell Account please try again";
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
        <title>Update Mobile Legends Sell Account</title>
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
                Update Mobile Legends Sell Account
                <?php echo $message; ?>
            </div>

            <div class = "form">
                <form method = "post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Mobile Legends ID</b></label>
                        <input type="text" class="form-control" name="mlbbsellaccountID" id="formGroupExampleInput" placeholder="Input ML ID here" autocomplete="off" value="<?php echo $dbmlbbMLID;?>" required>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Mobile Legends IGN</b></label>
                        <input type="text" class="form-control" name="mlbbsellaccountIGN" id="formGroupExampleInput" placeholder="Input ML IGN here" autocomplete="off" value="<?php echo $dbmlbbIGN;?>" required>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Winrate</b></label>
                        <input type="text" class="form-control" name="mlbbsellaccountWinrate" id="formGroupExampleInput" placeholder="Input ML Winrate here" autocomplete="off" value="<?php echo $dbmlbbWinrate;?>" required>
                    </div>

                    <div class="form-group">
                        <div class = "row">
                            <div class = "col-sm">

                                <label for="recipient-name" class="col-form-label"><b>Highest Rank</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Specific your Mobile Legends Rank (e.g Epic 1, Legend 5, Mythic 2)</small></label>
                                <div class = "row">
                                    <div class = "col">
                                        <select class="form-select" name="mlbbsellaccountHighestRank" aria-label="Default select example">
                                            <!--OPTION LIST MOBILE LEGENDS RANKS-->
                                            <option value="WARRIOR 5" <?= $dbmlbbHighestRank == 'WARRIOR 5' ? 'selected="selected"':'';?>>WARRIOR 5</option>
                                            <option value="WARRIOR 4" <?= $dbmlbbHighestRank == 'WARRIOR 4' ? 'selected="selected"':'';?>>WARRIOR 4</option>
                                            <option value="WARRIOR 3" <?= $dbmlbbHighestRank == 'WARRIOR 3' ? 'selected="selected"':'';?>>WARRIOR 3</option>
                                            <option value="WARRIOR 2" <?= $dbmlbbHighestRank == 'WARRIOR 2' ? 'selected="selected"':'';?>>WARRIOR 2</option>
                                            <option value="WARRIOR 1" <?= $dbmlbbHighestRank == 'WARRIOR 1' ? 'selected="selected"':'';?>>WARRIOR 1</option>
                                            <option value="ELITE 5" <?= $dbmlbbHighestRank == 'ELITE 5' ? 'selected="selected"':'';?>>ELITE 5</option>
                                            <option value="ELITE 4" <?= $dbmlbbHighestRank == 'ELITE 4' ? 'selected="selected"':'';?>>ELITE 4</option>
                                            <option value="ELITE 3" <?= $dbmlbbHighestRank == 'ELITE 3' ? 'selected="selected"':'';?>>ELITE 3</option>
                                            <option value="ELITE 2" <?= $dbmlbbHighestRank == 'ELITE 2' ? 'selected="selected"':'';?>>ELITE 2</option>
                                            <option value="ELITE 1" <?= $dbmlbbHighestRank == 'ELITE 1' ? 'selected="selected"':'';?>>ELITE 1</option>
                                            <option value="MASTER 5" <?= $dbmlbbHighestRank == 'MASTER 5' ? 'selected="selected"':'';?>>MASTER 5</option>
                                            <option value="MASTER 4" <?= $dbmlbbHighestRank == 'MASTER 4' ? 'selected="selected"':'';?>>MASTER 4</option>
                                            <option value="MASTER 3" <?= $dbmlbbHighestRank == 'MASTER 4' ? 'selected="selected"':'';?>>MASTER 3</option>
                                            <option value="MASTER 2" <?= $dbmlbbHighestRank == 'MASTER 2' ? 'selected="selected"':'';?>>MASTER 2</option>
                                            <option value="MASTER 1" <?= $dbmlbbHighestRank == 'MASTER 1' ? 'selected="selected"':'';?>>MASTER 1</option>
                                            <option value="GRANDMASTER 5" <?= $dbmlbbHighestRank == 'GRANDMASTER 5' ? 'selected="selected"':'';?>>GRANDMASTER 5</option>
                                            <option value="GRANDMASTER 4" <?= $dbmlbbHighestRank == 'GRANDMASTER 4' ? 'selected="selected"':'';?>>GRANDMASTER 4</option>
                                            <option value="GRANDMASTER 3" <?= $dbmlbbHighestRank == 'GRANDMASTER 3' ? 'selected="selected"':'';?>>GRANDMASTER 3</option>
                                            <option value="GRANDMASTER 2" <?= $dbmlbbHighestRank == 'GRANDMASTER 2' ? 'selected="selected"':'';?>>GRANDMASTER 2</option>
                                            <option value="GRANDMASTER 1" <?= $dbmlbbHighestRank == 'GRANDMASTER 1' ? 'selected="selected"':'';?>>GRANDMASTER 1</option>
                                            <option value="EPIC 5" <?= $dbmlbbHighestRank == 'EPIC 5' ? 'selected="selected"':'';?>>EPIC 5</option>
                                            <option value="EPIC 4" <?= $dbmlbbHighestRank == 'EPIC 4' ? 'selected="selected"':'';?>>EPIC 4</option>
                                            <option value="EPIC 3" <?= $dbmlbbHighestRank == 'EPIC 3' ? 'selected="selected"':'';?>>EPIC 3</option>
                                            <option value="EPIC 2" <?= $dbmlbbHighestRank == 'EPIC 2' ? 'selected="selected"':'';?>>EPIC 2</option>
                                            <option value="EPIC 1" <?= $dbmlbbHighestRank == 'EPIC 1' ? 'selected="selected"':'';?>>EPIC 1</option>
                                            <option value="LEGEND 5" <?= $dbmlbbHighestRank == 'LEGEND 5' ? 'selected="selected"':'';?>>LEGEND 5</option>
                                            <option value="LEGEND 4" <?= $dbmlbbHighestRank == 'LEGEND 4' ? 'selected="selected"':'';?>>LEGEND 4</option>
                                            <option value="LEGEND 3" <?= $dbmlbbHighestRank == 'LEGEND 3' ? 'selected="selected"':'';?>>LEGEND 3</option>
                                            <option value="LEGEND 2" <?= $dbmlbbHighestRank == 'LEGEND 2' ? 'selected="selected"':'';?>>LEGEND 2</option>
                                            <option value="LEGEND 1" <?= $dbmlbbHighestRank == 'LEGEND 1' ? 'selected="selected"':'';?>>LEGEND 1</option>
                                            <option value="MYTHIC 5" <?= $dbmlbbHighestRank == 'MYTHIC 5' ? 'selected="selected"':'';?>>MYTHIC 5</option>
                                            <option value="MYTHIC 4" <?= $dbmlbbHighestRank == 'MYTHIC 4' ? 'selected="selected"':'';?>>MYTHIC 4</option>
                                            <option value="MYTHIC 3" <?= $dbmlbbHighestRank == 'MYTHIC 3' ? 'selected="selected"':'';?>>MYTHIC 3</option>
                                            <option value="MYTHIC 2" <?= $dbmlbbHighestRank == 'MYTHIC 2' ? 'selected="selected"':'';?>>MYTHIC 2</option>
                                            <option value="MYTHIC 1" <?= $dbmlbbHighestRank == 'MYTHIC 1' ? 'selected="selected"':'';?>>MYTHIC 1</option>
                                            <option value="MYTHICAL GLORY" <?= $dbmlbbHighestRank == 'MYTHIC GLORY' ? 'selected="selected"':'';?>>MYTHICAL GLORY</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    
                        <br>
                        <div class="form-group">
                            <div class = "row">
                                <div class = "col-sm">
                                    <label for="message-text" class="col-form-label"><b>Items</b></label>
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Input how many items do you have based on item rarity.</small>
                                </div>
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <div class="form-floating">
                                    <textarea class="form-control" name="mlbbsellaccountItemList" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" autocomplete="off" required><?php echo $dbmlbbItemList ;?></textarea>
                                    <label for="floatingTextarea2" style="font-size: small;">Write list of items you have</label>
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label><b>Image</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Image proof of sell account.</small></label>
                                <label for="message-text" class="col-form-label"><b>Image of your Mobile Legends ID with IGN</b></label>
                                <div class="mb-3">
                                    <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbmlbbIDIGNIMG).'" width="440" height="240"/>'?>
                                    <input class="form-control" name="mlbbsellaccountIDIGNIMG" type="file" id="formFile" accept="image/*" autocomplete="off" value="<?php echo base64_encode($dbmlbbIDIGNIMG);?>">
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label"><b>Image of your Winrate</b></label>     
                                <div class="mb-3">
                                    <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbmlbbWinrateIMG).'" width="440" height="240"/>'?>
                                    <input class="form-control" name="mlbbsellaccountWinrateIMG" type="file" id="formFile" accept="image/*" autocomplete="off" value="<?php echo base64_encode($dbmlbbWinrateIMG);?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label"><b>Image of your Emblem Levels</b></label>                            
                                <div class="mb-3">
                                    <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbmlbbEmblemLVLIMG).'" width="440" height="240"/>'?>
                                    <input class="form-control" name="mlbbsellaccountEmblemLVLIMG" type="file" id="formFile" accept="image/*" autocomplete="off" value="<?php echo base64_encode($dbmlbbEmblemLVLIMG);?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label"><b>Price</b></label>
                                <input type="text" name="mlbbsellaccountPrice" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" autocomplete="off" value="<?php echo $dbmlbbPrice;?>" required>
                            </div>

                            
                            <div class = "row">
                                <div class = "col">
                                    <br>
                                    <div class="inputfield">
                                        <input type="submit" value="Update" name="submit" class = "btn btn-primary">
                                    </div>
                                    <div class="inputfield">
                                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
                                            location.href = 'myinventorymobilelegend.php'">Back
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </form>
            </div> 
               
        </div>	
    </body>
</html>
