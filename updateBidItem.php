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

$updateBidItemID = $_GET['updatebidItemID'];
$sql = "SELECT * FROM biditem WHERE BID_ITEMID = $updateBidItemID";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dbbiditemName = $row['BID_ITEMNAME'];
$dbbiditemDescription = $row['BID_ITEMDESCRIPTION'];
$dbbidGames = $row['BID_ITEMGAMES'];
$dbbidItemIMG = $row['BID_ITEMIMG'];
$dbsetDateTo = $row['BID_ITEMSETDATETO'];
$dbbidPrice = $row['BID_ITEMPRICE'];  

if(isset($_POST['edit'])){

    $biditemName = mysqli_real_escape_string($conn,$_POST['biditemName']);
    $biditemDescription = mysqli_real_escape_string($conn,$_POST['biditemDescription']);
    $bidItemGame = mysqli_real_escape_string($conn,$_POST['bidItemGame']);
    $biditemSetDateTo = mysqli_real_escape_string($conn,$_POST['biditemSetDateTo']);
    $biditemPrice = mysqli_real_escape_string($conn,$_POST['biditemPrice']);

    //if the user update the text only not inlcude the image 
    if($_FILES['bidItemIMG']['name'] == ""){

        $sql = "UPDATE biditem SET BID_ITEMNAME = '$biditemName',
        BID_ITEMDESCRIPTION = '$biditemDescription', BID_ITEMGAMES = '$bidItemGame',
        BID_ITEMSETDATETO = '$biditemSetDateTo',
        BID_ITEMPRICE = '$biditemPrice' WHERE BID_ITEMID = $updateBidItemID";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Bid Item";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorybid.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Bid item please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
        //when user upload image to update         
    }else{

        $imageName = $_FILES['bidItemIMG']['name'];
        $imageType = $_FILES['bidItemIMG']['type'];
        $imageTempLoc = $_FILES['bidItemIMG']['tmp_name'];
        $imageSize = $_FILES['bidItemIMG']['size'];

        //file path
        //to store images to the folder
        $fileIMG = addslashes(file_get_contents($_FILES['bidItemIMG']['tmp_name']));
        $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
        $img_upload_path = 'dota2IMGDb/'.$new_img_name;
        move_uploaded_file($imageTempLoc,$img_upload_path);

        $sql = "UPDATE biditem SET BID_ITEMNAME = '$biditemName',
        BID_ITEMDESCRIPTION = '$biditemDescription', BID_ITEMGAMES = '$bidItemGame',
        BID_ITEMIMG = '$fileIMG',
        BID_ITEMSETDATETO = '$biditemSetDateTo',
        BID_ITEMPRICE = '$biditemPrice' WHERE BID_ITEMID = $updateBidItemID";

        $results=mysqli_query($conn,$sql);

        if($results){
            $messages = "Successfully updated Bid Item";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorybid.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Bid item please try again";
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
        <title>Update Bid Item</title>
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
    </head>

    <body>

        <div class="wrapper">

            <div class="title">
                <img src = "image/auction.png" width="50" height="50" alt = "Dota 2" >
                Update Bid Item
                <?php echo $message; ?>
            </div>

            <form method = "post" enctype="multipart/form-data">
                <div class = "form">
                
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Item Name:</b></label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Item Name here" name="biditemName" autocomplete="off" value="<?php echo $dbbiditemName;?>" required>
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Item Description:</b></label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Item Name here" name="biditemDescription" autocomplete="off" value="<?php echo $dbbiditemDescription;?>" required>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"><b>Games:</b></label>
                        <select class="form-select" aria-label="Default select example" name="bidItemGame">
                            <!--OPTION LIST DOTA 2 HERO-->
                            <option value="DOTA 2" <?= $dbbidGames == 'DOTA 2' ? 'selected="selected"':'';?>>DOTA 2</option>
                            <option value="CSGO" <?= $dbbidGames == 'CSGO' ? 'selected="selected"':'';?>>CSGO</option>
                            <option value="VALORANT" <?= $dbbidGames == 'VALORANT' ? 'selected="selected"':'';?>>VALORANT</option>
                            <option value="MOBILE LEGENDS" <?= $dbbidGames == 'MOBILE LEGENDS' ? 'selected="selected"':'';?>>MOBILE LEGENDS</option>
                        </select>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Image</b></label>
                        <div class="mb-3">
                            <div class = "row">
                                <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbbidItemIMG).'" width="440" height="240"/>'?>                           
                            </div>
                            <input class="form-control" type="file" accept="image/*" name="bidItemIMG" id="dota2sellitemIMG">   
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label"><b>Set Date and Time to:</b></label>
                      <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($dbsetDateTo));;?>" class="form-control" id="formGroupExampleInput"  name="biditemSetDateTo" autocomplete="off" required>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price</b></label>
                        <input type="text" value="<?php echo $dbbidPrice;?>" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" name="biditemPrice" autocomplete="off" required>
                    </div>
                     
                    <br>
                    <div class="inputfield">
                        <input type="submit" value="Update" name="edit" class="btn">
                    </div>

                    <div class="inputfield">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
                            location.href = 'myinventorybid.php'">Back
                        </button>
                    </div>

                </div>
            </form>    
        </div>	
    </body>
</html>
