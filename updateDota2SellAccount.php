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

$updateDota2SellAccount = $_GET['updateDota2AccountID'];
$sql = "SELECT * FROM dota2sellaccount WHERE DOTA2_SELLACCOUNTID = $updateDota2SellAccount";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbsteamID = $row['DOTA2_STEAMID'];
$dbdota2IDNumber = $row['DOTA2_IDNUMBER'];
$dbdota2Rank = $row['DOTA2_RANK'];
$dbdota2MMR = $row['DOTA2_MMR'];
$dbdota2SteamAddressInventory = $row['DOTA2_STEAMADDRESSINVENTORY'];
$dbdota2SteamIDIMG = $row['DOTA2_STEAMIDIMG'];
$dbdota2IDANDIGNIMG = $row['DOTA2_IMGIDANDIGN'];
$dbdota2IMGMMR = $row['DOTA2_IMGMMR'];
$dbdota2Price = $row['DOTA2_PRICE'];

if(isset($_POST['submit'])){
  $steamID = mysqli_real_escape_string($conn,$_POST['steamID']);
  $dota2ID = mysqli_real_escape_string($conn,$_POST['dota2ID']);
  $dota2Rank = mysqli_real_escape_string($conn,$_POST['dota2Rank']);
  $dota2MMR = mysqli_real_escape_string($conn,$_POST['dota2MMR']);
  $steamaddressDota2Inventory = mysqli_real_escape_string($conn,$_POST['steamaddressDota2Inventory']);
  $dota2Price = mysqli_real_escape_string($conn,$_POST['dota2Price']);

  //checking if the steam address is valid
  if (filter_var($steamaddressDota2Inventory, FILTER_VALIDATE_URL) === FALSE) {//if steam address is not valid
    $messageNotValidURL = "Invalid Steam Address please try again";
    echo "<script type='text/javascript'>alert('$messageNotValidURL');</script>";
    //check if the input file of steam ID is empty
  }else{

    if(($_FILES['steamIDIMG']['name'] == "" && $_FILES['dota2RankIDANDIGN']['name'] == "" && $_FILES['dota2MMRIMG']['name'] == "")){
      
      $sql = "UPDATE dota2sellaccount SET
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
      //checking if the stead id and dota 2 mmr image is empty
    }else if($_FILES['dota2RankIDANDIGN']['name'] == "" && $_FILES['dota2MMRIMG']['name'] == ""){

      //storing image steam id
      $steamidimageName = $_FILES['steamIDIMG']['name'];
      $steamidimageType = $_FILES['steamIDIMG']['type'];
      $steamidimageTempLoc = $_FILES['steamIDIMG']['tmp_name'];
      $steamidimageSize = $_FILES['steamIDIMG']['size'];
      //file path
      //to store images to the folder
      $steamidIMG = addslashes(file_get_contents($_FILES['steamIDIMG']['tmp_name']));
      $steamidimg_ex = pathinfo($steamidimageName, PATHINFO_EXTENSION);
      $steamidimg_ex_lc = strtolower($steamidimg_ex);
      $steamidnew_img_name = uniqid("IMG-",true).'.'.$steamidimg_ex_lc; 
      $steamidimg_upload_path = 'dota2IMGDb/'.$steamidnew_img_name;
      move_uploaded_file($steamidimageTempLoc,$steamidimg_upload_path);

      $sql = "UPDATE dota2sellaccount SET
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_STEAMIDIMG = '$steamidIMG',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
    }else if($_FILES['steamIDIMG']['name'] == "" && $_FILES['dota2MMRIMG']['name'] == ""){
      
      //storing image dota 2 rank id and ign
      $dota2idandignimageName = $_FILES['dota2RankIDANDIGN']['name'];
      $dota2idandignimageType = $_FILES['dota2RankIDANDIGN']['type'];
      $dota2idandignimageTempLoc = $_FILES['dota2RankIDANDIGN']['tmp_name'];
      $dota2idandignimageSize = $_FILES['dota2RankIDANDIGN']['size'];
      //file path
      //to store images to the folder
      $dota2idandignIMG = addslashes(file_get_contents($_FILES['dota2RankIDANDIGN']['tmp_name']));
      $dota2idandignimg_ex = pathinfo($dota2idandignimageName, PATHINFO_EXTENSION);
      $dota2idandignimg_ex_lc = strtolower($dota2idandignimg_ex);
      $dota2idandignnew_img_name = uniqid("IMG-",true).'.'.$dota2idandignimg_ex_lc; 
      $dota2idandignimg_upload_path = 'dota2IMGDb/'.$dota2idandignnew_img_name;
      move_uploaded_file($dota2idandignimageTempLoc,$dota2idandignimg_upload_path);

      $sql = "UPDATE dota2sellaccount SET
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_IMGIDANDIGN = '$dota2idandignIMG',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
    
    }else if($_FILES['steamIDIMG']['name'] == "" && $_FILES['dota2RankIDANDIGN']['name'] == ""){

      //stroing dota 2 mmr
      $dota2MMRimageName = $_FILES['dota2MMRIMG']['name'];
      $dota2MMRimageType = $_FILES['dota2MMRIMG']['type'];
      $dota2MMRimageTempLoc = $_FILES['dota2MMRIMG']['tmp_name'];
      $dota2MMRimageSize = $_FILES['dota2MMRIMG']['size'];
      //file path
      //to store images to the folder
      $dota2MMRIMG = addslashes(file_get_contents($_FILES['dota2MMRIMG']['tmp_name']));
      $dota2MMRimg_ex = pathinfo($dota2MMRimageName, PATHINFO_EXTENSION);
      $dota2MMRimg_ex_lc = strtolower($dota2MMRimg_ex);
      $dota2MMRnew_img_name = uniqid("IMG-",true).'.'.$dota2MMRimg_ex_lc; 
      $dota2MMRimg_upload_path = 'dota2IMGDb/'.$dota2MMRnew_img_name;
      move_uploaded_file($dota2MMRimageTempLoc,$dota2MMRimg_upload_path);
  
      $sql = "UPDATE dota2sellaccount SET
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_IMGMMR = '$dota2MMRIMG',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }

    }else if($_FILES['steamIDIMG']['name'] == ""){//if true

      //storing image dota 2 rank id and ign
      $dota2idandignimageName = $_FILES['dota2RankIDANDIGN']['name'];
      $dota2idandignimageType = $_FILES['dota2RankIDANDIGN']['type'];
      $dota2idandignimageTempLoc = $_FILES['dota2RankIDANDIGN']['tmp_name'];
      $dota2idandignimageSize = $_FILES['dota2RankIDANDIGN']['size'];
      //file path
      //to store images to the folder
      $dota2idandignIMG = addslashes(file_get_contents($_FILES['dota2RankIDANDIGN']['tmp_name']));
      $dota2idandignimg_ex = pathinfo($dota2idandignimageName, PATHINFO_EXTENSION);
      $dota2idandignimg_ex_lc = strtolower($dota2idandignimg_ex);
      $dota2idandignnew_img_name = uniqid("IMG-",true).'.'.$dota2idandignimg_ex_lc; 
      $dota2idandignimg_upload_path = 'dota2IMGDb/'.$dota2idandignnew_img_name;
      move_uploaded_file($dota2idandignimageTempLoc,$dota2idandignimg_upload_path);
  
      //stroing dota 2 mmr
      $dota2MMRimageName = $_FILES['dota2MMRIMG']['name'];
      $dota2MMRimageType = $_FILES['dota2MMRIMG']['type'];
      $dota2MMRimageTempLoc = $_FILES['dota2MMRIMG']['tmp_name'];
      $dota2MMRimageSize = $_FILES['dota2MMRIMG']['size'];
      //file path
      //to store images to the folder
      $dota2MMRIMG = addslashes(file_get_contents($_FILES['dota2MMRIMG']['tmp_name']));
      $dota2MMRimg_ex = pathinfo($dota2MMRimageName, PATHINFO_EXTENSION);
      $dota2MMRimg_ex_lc = strtolower($dota2MMRimg_ex);
      $dota2MMRnew_img_name = uniqid("IMG-",true).'.'.$dota2MMRimg_ex_lc; 
      $dota2MMRimg_upload_path = 'dota2IMGDb/'.$dota2MMRnew_img_name;
      move_uploaded_file($dota2MMRimageTempLoc,$dota2MMRimg_upload_path);
  
      $sql = "UPDATE dota2sellaccount SET
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_IMGIDANDIGN = '$dota2idandignIMG',
      DOTA2_IMGMMR = '$dota2MMRIMG',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
  
      //check if the dota 2 rank id and ign image is empty
    }else if($_FILES['dota2RankIDANDIGN']['name'] == ""){//if true
  
      //storing image steam id
      $steamidimageName = $_FILES['steamIDIMG']['name'];
      $steamidimageType = $_FILES['steamIDIMG']['type'];
      $steamidimageTempLoc = $_FILES['steamIDIMG']['tmp_name'];
      $steamidimageSize = $_FILES['steamIDIMG']['size'];
      //file path
      //to store images to the folder
      $steamidIMG = addslashes(file_get_contents($_FILES['steamIDIMG']['tmp_name']));
      $steamidimg_ex = pathinfo($steamidimageName, PATHINFO_EXTENSION);
      $steamidimg_ex_lc = strtolower($steamidimg_ex);
      $steamidnew_img_name = uniqid("IMG-",true).'.'.$steamidimg_ex_lc; 
      $steamidimg_upload_path = 'dota2IMGDb/'.$steamidnew_img_name;
      move_uploaded_file($steamidimageTempLoc,$steamidimg_upload_path);
  
      //stroing dota 2 mmr
      $dota2MMRimageName = $_FILES['dota2MMRIMG']['name'];
      $dota2MMRimageType = $_FILES['dota2MMRIMG']['type'];
      $dota2MMRimageTempLoc = $_FILES['dota2MMRIMG']['tmp_name'];
      $dota2MMRimageSize = $_FILES['dota2MMRIMG']['size'];
      //file path
      //to store images to the folder
      $dota2MMRIMG = addslashes(file_get_contents($_FILES['dota2MMRIMG']['tmp_name']));
      $dota2MMRimg_ex = pathinfo($dota2MMRimageName, PATHINFO_EXTENSION);
      $dota2MMRimg_ex_lc = strtolower($dota2MMRimg_ex);
      $dota2MMRnew_img_name = uniqid("IMG-",true).'.'.$dota2MMRimg_ex_lc; 
      $dota2MMRimg_upload_path = 'dota2IMGDb/'.$dota2MMRnew_img_name;
      move_uploaded_file($dota2MMRimageTempLoc,$dota2MMRimg_upload_path);
  
      $sql = "UPDATE dota2sellaccount SET
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_STEAMIDIMG = '$steamidIMG',
      DOTA2_IMGMMR = '$dota2MMRIMG',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
  
      //check if the dota 2 mmr image is empty
    }else if($_FILES['dota2MMRIMG']['name'] == ""){
  
      //storing image steam id
      $steamidimageName = $_FILES['steamIDIMG']['name'];
      $steamidimageType = $_FILES['steamIDIMG']['type'];
      $steamidimageTempLoc = $_FILES['steamIDIMG']['tmp_name'];
      $steamidimageSize = $_FILES['steamIDIMG']['size'];
      //file path
      //to store images to the folder
      $steamidIMG = addslashes(file_get_contents($_FILES['steamIDIMG']['tmp_name']));
      $steamidimg_ex = pathinfo($steamidimageName, PATHINFO_EXTENSION);
      $steamidimg_ex_lc = strtolower($steamidimg_ex);
      $steamidnew_img_name = uniqid("IMG-",true).'.'.$steamidimg_ex_lc; 
      $steamidimg_upload_path = 'dota2IMGDb/'.$steamidnew_img_name;
      move_uploaded_file($steamidimageTempLoc,$steamidimg_upload_path);
  
      //storing image dota 2 rank id and ign
      $dota2idandignimageName = $_FILES['dota2RankIDANDIGN']['name'];
      $dota2idandignimageType = $_FILES['dota2RankIDANDIGN']['type'];
      $dota2idandignimageTempLoc = $_FILES['dota2RankIDANDIGN']['tmp_name'];
      $dota2idandignimageSize = $_FILES['dota2RankIDANDIGN']['size'];
      //file path
      //to store images to the folder
      $dota2idandignIMG = addslashes(file_get_contents($_FILES['dota2RankIDANDIGN']['tmp_name']));
      $dota2idandignimg_ex = pathinfo($dota2idandignimageName, PATHINFO_EXTENSION);
      $dota2idandignimg_ex_lc = strtolower($dota2idandignimg_ex);
      $dota2idandignnew_img_name = uniqid("IMG-",true).'.'.$dota2idandignimg_ex_lc; 
      $dota2idandignimg_upload_path = 'dota2IMGDb/'.$dota2idandignnew_img_name;
      move_uploaded_file($dota2idandignimageTempLoc,$dota2idandignimg_upload_path);
  
      $sql = "UPDATE dota2sellaccount SET 
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_STEAMIDIMG = '$steamidIMG',
      DOTA2_IMGIDANDIGN = '$dota2idandignIMG',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
  
    }else{
      //storing image steam id
      $steamidimageName = $_FILES['steamIDIMG']['name'];
      $steamidimageType = $_FILES['steamIDIMG']['type'];
      $steamidimageTempLoc = $_FILES['steamIDIMG']['tmp_name'];
      $steamidimageSize = $_FILES['steamIDIMG']['size'];
      //file path
      //to store images to the folder
      $steamidIMG = addslashes(file_get_contents($_FILES['steamIDIMG']['tmp_name']));
      $steamidimg_ex = pathinfo($steamidimageName, PATHINFO_EXTENSION);
      $steamidimg_ex_lc = strtolower($steamidimg_ex);
      $steamidnew_img_name = uniqid("IMG-",true).'.'.$steamidimg_ex_lc; 
      $steamidimg_upload_path = 'dota2IMGDb/'.$steamidnew_img_name;
      move_uploaded_file($steamidimageTempLoc,$steamidimg_upload_path);
          
      //storing image dota 2 rank id and ign
      $dota2idandignimageName = $_FILES['dota2RankIDANDIGN']['name'];
      $dota2idandignimageType = $_FILES['dota2RankIDANDIGN']['type'];
      $dota2idandignimageTempLoc = $_FILES['dota2RankIDANDIGN']['tmp_name'];
      $dota2idandignimageSize = $_FILES['dota2RankIDANDIGN']['size'];
      //file path
      //to store images to the folder
      $dota2idandignIMG = addslashes(file_get_contents($_FILES['dota2RankIDANDIGN']['tmp_name']));
      $dota2idandignimg_ex = pathinfo($dota2idandignimageName, PATHINFO_EXTENSION);
      $dota2idandignimg_ex_lc = strtolower($dota2idandignimg_ex);
      $dota2idandignnew_img_name = uniqid("IMG-",true).'.'.$dota2idandignimg_ex_lc; 
      $dota2idandignimg_upload_path = 'dota2IMGDb/'.$dota2idandignnew_img_name;
      move_uploaded_file($dota2idandignimageTempLoc,$dota2idandignimg_upload_path);
          
      //stroing dota 2 mmr
      $dota2MMRimageName = $_FILES['dota2MMRIMG']['name'];
      $dota2MMRimageType = $_FILES['dota2MMRIMG']['type'];
      $dota2MMRimageTempLoc = $_FILES['dota2MMRIMG']['tmp_name'];
      $dota2MMRimageSize = $_FILES['dota2MMRIMG']['size'];
      //file path
      //to store images to the folder
      $dota2MMRIMG = addslashes(file_get_contents($_FILES['dota2MMRIMG']['tmp_name']));
      $dota2MMRimg_ex = pathinfo($dota2MMRimageName, PATHINFO_EXTENSION);
      $dota2MMRimg_ex_lc = strtolower($dota2MMRimg_ex);
      $dota2MMRnew_img_name = uniqid("IMG-",true).'.'.$dota2MMRimg_ex_lc; 
      $dota2MMRimg_upload_path = 'dota2IMGDb/'.$dota2MMRnew_img_name;
      move_uploaded_file($dota2MMRimageTempLoc,$dota2MMRimg_upload_path);
  
      $sql = "UPDATE dota2sellaccount SET
      DOTA2_STEAMID = '$steamID',
      DOTA2_IDNUMBER = '$dota2ID',
      DOTA2_RANK = '$dota2Rank',
      DOTA2_MMR = '$dota2MMR',
      DOTA2_STEAMADDRESSINVENTORY = '$steamaddressDota2Inventory',
      DOTA2_STEAMIDIMG = '$steamidIMG',
      DOTA2_IMGIDANDIGN = '$dota2idandignIMG',
      DOTA2_IMGMMR = '$dota2MMRIMG',
      DOTA2_PRICE = '$dota2Price'    
      WHERE DOTA2_SELLACCOUNTID =  $updateDota2SellAccount";
      $results=mysqli_query($conn,$sql);
  
      if($results){
        $messages = "Successfully updated Dota 2 Sell Account";
        echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
      }else{
        $messageFail = "Unsuccessful update Dota 2 Sell Account please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
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
    <title>Update Dota 2 Sell Account</title>
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
        Update Dota 2 Sell Account
        <?php echo $message; ?>
      </div>

      <div class = "form">
        <form method = "post" enctype="multipart/form-data">
                
          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Steam ID</b></label>
            <input type="text" class="form-control" value="<?php echo $dbsteamID;?>" id="formGroupExampleInput" name="steamID" placeholder="Input Steam ID here" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Dota 2 ID</b></label>
            <input type="text" class="form-control"  value="<?php echo $dbdota2IDNumber;?>" id="formGroupExampleInput" name="dota2ID" placeholder="Input Dota 2 ID here" autocomplete="off" required>
          </div>

          <div class="form-group">
            <div class = "row">
              <div class = "col-sm">
                <label for="recipient-name" class="col-form-label"><b>Rank</b><small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> Your Dota 2 Rank (e.g Archon, Legend, Ancient)</small></label>         
                <select class="form-select" name="dota2Rank" aria-label="Default select example" style="width:225px;">
                  <!--OPTION LIST DOTA 2 HERO-->
                  <option value="GUARDIAN" <?= $dbdota2Rank == 'GUARDIAN' ? 'selected="selected"':'';?>>GUARDIAN</option>
                  <option value="HERALD" <?= $dbdota2Rank == 'HERALD' ? 'selected="selected"':'';?>>HERALD</option>
                  <option value="CRUSADER" <?= $dbdota2Rank == 'CRUSADER' ? 'selected="selected"':'';?>>CRUSADER</option>
                  <option value="ARCHON" <?= $dbdota2Rank == 'ARCHON' ? 'selected="selected"':'';?>>ARCHON</option>
                  <option value="LEGEND" <?= $dbdota2Rank == 'LEGEND' ? 'selected="selected"':'';?>>LEGEND</option>
                  <option value="ANCIENT" <?= $dbdota2Rank == 'ANCIENT' ? 'selected="selected"':'';?>>ANCIENT</option>
                  <option value="DIVINE" <?= $dbdota2Rank == 'DIVINE' ? 'selected="selected"':'';?>>DIVINE</option>
                  <option value="IMMORTAL" <?= $dbdota2Rank == 'IMMORTAL' ? 'selected="selected"':'';?>>IMMORTAL</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Dota 2 MMR</b></label>
            <input type="text" class="form-control" value="<?php echo $dbdota2MMR;?>" id="formGroupExampleInput" name="dota2MMR" placeholder="Input Dota 2 MMR here" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Stean Address URL - Dota 2 Inventory</b></label>
            <input type="text" class="form-control" value="<?php echo $dbdota2SteamAddressInventory;?>" id="formGroupExampleInput" name="steamaddressDota2Inventory" placeholder="Input Steam Address Dota 2 Inventory here" autocomplete="off" required>
          </div>

          <br>
          <label><b>Image</b></label>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Steam ID</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbdota2SteamIDIMG).'" width="440" height="240"/>'?>
            <div class="mb-3">
              <input class="form-control" type="file"  name="steamIDIMG"  accept="image/*">
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Dota 2 ID with IGN</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbdota2IDANDIGNIMG).'" width="440" height="240"/>'?>
            <div class="mb-3">
              <input class="form-control" type="file"  name="dota2RankIDANDIGN"  accept="image/*">
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Dota 2 MMR</b></label>
            <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbdota2IMGMMR).'" width="440" height="240"/>'?>
            <div class="mb-3">
              <input class="form-control" type="file"  name="dota2MMRIMG"  accept="image/*">
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>Price</b></label>
            <input type="text" class="form-control" value="<?php echo $dbdota2Price;?>" id="formGroupExampleInput" placeholder="Input Price here" name="dota2Price" autocomplete="off" required>
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
        </form>   
      </div>   
    </div>	
  </body>
</html>
