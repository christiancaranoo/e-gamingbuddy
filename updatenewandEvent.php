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

$updatenewandEventID = $_GET['updateNewandEventID'];
$sql = "SELECT * FROM newandevent WHERE NEWANDEVENT_ID = $updatenewandEventID";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbnewandEventTitle = $row['NEWANDEVENT_TITLE'];
$dbnewandEventText = $row['NEWANDEVENT_TEXT'];
$dbnewandEventDatetime = $row['NEWANDEVENT_DATETIME'];
$dbnewandEventImage = $row['NEWANDEVENT_IMG'];

if(isset($_POST['edit'])){

    $newandeventTitle = mysqli_real_escape_string($conn,$_POST['newandeventTitle']);
    $newandeventText = mysqli_real_escape_string($conn,$_POST['newandeventText']);
    $newandeventSetDate = mysqli_real_escape_string($conn,$_POST['newandeventSetDate']);

    //if the user update the text only not inlcude the image 
    if($_FILES['newandeventIMG']['name'] == ""){

        $sql = "UPDATE newandevent SET NEWANDEVENT_TITLE = '$newandeventTitle',
        NEWANDEVENT_TEXT = '$newandeventText',
        NEWANDEVENT_DATETIME = '$newandeventSetDate' WHERE NEWANDEVENT_ID = $updatenewandEventID";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated News and Events";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('adminnewsEvent.php');</script>";
        }else{
            $messages = "Unsuccessful update News and Events Please try again.";
            echo "<script type='text/javascript'>alert('$messages');</script>";
        }
        //when user upload image to update         
    }else{

        $imageName = $_FILES['newandeventIMG']['name'];
        $imageType = $_FILES['newandeventIMG']['type'];
        $imageTempLoc = $_FILES['newandeventIMG']['tmp_name'];
        $imageSize = $_FILES['newandeventIMG']['size'];

        //file path
        //to store images to the folder
        $fileIMG = addslashes(file_get_contents($_FILES['newandeventIMG']['tmp_name']));
        $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
        $img_upload_path = 'dota2IMGDb/'.$new_img_name;
        move_uploaded_file($imageTempLoc,$img_upload_path);

        $sql = "UPDATE newandevent SET NEWANDEVENT_TITLE = '$newandeventTitle',
        NEWANDEVENT_TEXT = '$newandeventText', 
        NEWANDEVENT_DATETIME = '$newandeventSetDate',
        NEWANDEVENT_IMG = '$fileIMG' WHERE NEWANDEVENT_ID = $updatenewandEventID";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated News and Events";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('adminnewsEvent.php');</script>";
        }else{
            $messages = "Unsuccessful update News and Events Please try again.";
            echo "<script type='text/javascript'>alert('$messages');</script>";
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update News and Events</title>
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
    </head>

    <body>

        <div class="wrapper">
            <div class = "form">

                <div class="title">
                    <img src = "image/promotion.png" width="50" height="50" alt = "News and Event" >
                    Update News and Events
                    <?php echo $message; ?>
                </div>

                <form method = "post" enctype="multipart/form-data">        
                    <div class="form-group">
                        <p><b>News Title:</b></p>
                        <input type="text" value="<?php echo $dbnewandEventTitle;?>" class="form-control" id="formGroupExampleInput" placeholder="Input News Title here" name="newandeventTitle" autocomplete="off" required>
                    </div>

                    <br>
                    <p><b>Text:</b></p>
                    <div class="form-group">
                        <div class="form-floating">
                            <textarea class="form-control" name="newandeventText" placeholder="Type here" id="floatingTextarea2" style="height: 100px" autocomplete="off" required><?php echo $dbnewandEventText;?></textarea>
                            <label for="floatingTextarea2" style="font-size: small;">Write list of items you have</label>
                        </div>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Image</b></label>
                        <div class="mb-3">
                            <div class = "row">
                                <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbnewandEventImage).'" width="440" height="240"/>'?>                           
                            </div>
                            <input class="form-control" type="file" accept="image/*" name="newandeventIMG">   
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Set Date:</b></label>
                        <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($dbnewandEventDatetime));;?>" class="form-control" id="formGroupExampleInput" name="newandeventSetDate" autocomplete="off" required> 
                    </div>
                        
                    <br>
                    <div class="inputfield">
                        <input type="submit" value="Update" name="edit" class="btn">
                    </div>

                    <div class="inputfield">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
                            location.href = 'adminnewsEvent.php'">Back
                        </button>
                    </div>
                </form>  

            </div>
        </div>
    </body>
</html>
