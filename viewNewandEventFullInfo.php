<?php 
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}

$useruserName = $_SESSION['username'];
$message = "";
$messageIcon = "";
$messageAddress = "";

$viewNewandEventID = $_GET['viewNewandEventID'];
$sql = "SELECT * FROM newandevent WHERE NEWANDEVENT_ID = $viewNewandEventID"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbnewandEventTitle = $row['NEWANDEVENT_TITLE'];
$dbnewandEventText = $row['NEWANDEVENT_TEXT'];
$dbnewandEventDatetime = $row['NEWANDEVENT_DATETIME'];
$dbnewandEventImage = $row['NEWANDEVENT_IMG']
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
        
        <div class="container">
            <div class = "form">

                <div class="title" style="text-align:center;">
                    <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbnewandEventImage).'" width="650" height="450"/>'?>
                </div>

                <br>
                <h5 style="font-size: 3rem;margin-left:239px;">                
                <b><?php echo $dbnewandEventTitle;?></b></h5>
                <p style="margin-left:240px;">
                    <b>
                        <?php echo date("M d, Y", strtotime($dbnewandEventDatetime));?>
                    </b>
                </p>    
                <br>      
                <p style="margin-left:240px;"><b><?php echo $dbnewandEventText;?></b></p>

            </div>
        </div>
        
    </body>
</html>
