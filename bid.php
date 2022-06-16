<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
$useruserName = $_SESSION['username'];
$bidItem = $_GET['bidItem'];
$sql = "SELECT * FROM biditem WHERE BID_ITEMID = $bidItem";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$userID = $row['USER_ID'];
$dbbiditemName = $row['BID_ITEMNAME'];
$dbbiditemDescription = $row['BID_ITEMDESCRIPTION'];
$dbbidGames = $row['BID_ITEMGAMES'];
$dbbidItemIMG = $row['BID_ITEMIMG'];
$dbsetDateTo = $row['BID_ITEMSETDATETO'];
$dbbidPrice = $row['BID_ITEMPRICE'];
$dateFormatTo =  date("M d, Y  h:i:s A", strtotime($dbsetDateTo));

?>

<?php 
  $messageFailed="";
  $messageSuccess="";
  if(isset($_POST['bid'])){
    $useruserName = $_SESSION['username'];
    $bidPrice = mysqli_real_escape_string($conn,$_POST['bidPrice']);
    if(empty($bidPrice)){
      $messageFail = "Unsuccessful Bid please try again";
      echo "<script type='text/javascript'>alert('$messageFail');</script>";
    }else{
      $sql = "INSERT INTO bid(USER_ID,BID_ITEMID,BID_PRICE) VALUES((SELECT USER_ID FROM users WHERE USER_USERNAME='$useruserName'),
      (SELECT BID_ITEMID FROM biditem WHERE BID_ITEMID = '$bidItem'),'$bidPrice')";
      $result=mysqli_query($conn,$sql);
      if($result){
        $messageSuccess = "Successfully Bid";
        echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
      }else{
        $messageFail = "Unsuccessful Bid please try again";
        echo "<script type='text/javascript'>alert('$messageFail');</script>";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Bid Item</title>
    <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
    <link rel="stylesheet" href="css1/homepagedropdownav.css">
    <!--BOOTSTRAP 4 EXTENSION-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
    

  <body>

    <br>
    <div class="container" style="float:center">
      <div class= "row">
        <p style="margin-left:0%"><b>Bid Item Details</b></p>
        <div class = "col">
          <div class="card border-primary mb-5" style="max-width: 853px;">
            <div class="row g-5">

              <div class="col-md-5">
                <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbbidItemIMG).'" width="350" height="350"/>'?>
              </div>

              <div class="col-md-7"> 
                <br>           
                <p><b>Item Name:</b> <?php echo $dbbiditemName;?></p>
                <p><b>Description:</b> <?php echo $dbbiditemDescription;?></p>
                <p><b>Game:</b> <?php echo $dbbidGames;?></p>
                <p><b>Bid Expiration Date:</b> <?php echo $dateFormatTo;?></p>
                <p><b>Starting Price:</b> <?php echo $dbbidPrice;?></p>
                <br><br>
                          
              </div>
            </div>
          </div>     
        </div>
      </div>
    </div>

    <!--CODE FOR COUNTDOWN SET BY USER-->
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("<?php echo $dbsetDateTo; ?>").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();  
        // Find the distance between now and the count down date
        var distance = countDownDate - now;   
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);  
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "<b>d</b> " + hours + "<b>h</b> "
        + minutes + "<b>m</b> " + seconds + "<b>s</b> ";   
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>

    <div class = "container" style="margin-right: -1px;">
      <div class = "row">
        <div class = "col">
          <h4><b>Time Left:</b> <b><p id="demo"></p></b></h4>
        </div>
      </div>
      <div class = "row">
      </div>
    </div>
          
    <!--display the highest bid from bidders-->
    <?php
      $sql = "SELECT
      b.BID_ID, 
      concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name, 
      p.BID_ITEMNAME,
      b.BID_PRICE as HighestBid, 
      b.BID_DATETIME
      FROM 
      bid b,
      users u,
      biditem p
      WHERE
      b.USER_ID=U.USER_ID
      AND b.BID_ITEMID=p.BID_ITEMID 
      AND p.BID_ITEMID = $bidItem
      ORDER BY HighestBid DESC LIMIT 1
      ";
              
      $result = mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $highestbidName = $row['Name'];
          $highestBid = $row['HighestBid'];
          $highestbidDatetime = $row['BID_DATETIME'];
          $dateFormat =  date("M d, Y  h:i:s A", strtotime($highestbidDatetime));
          
          echo'
            <div class="card" style="width: 18rem;float:right;margin-top:-34.5%;margin-right:5%">
              <p class="card-header"><b>Highest Bidder Info</b></p>
              <div class="card-body">
                <p><b>Bidder Name: '.$highestbidName.'</b></p>
                <p><b>Bid Amount: '.$highestBid.' </b></p>
                <p><b>Date: '.$dateFormat.' </b></p>
                <a href="#" class="btn btn-primary">Message</a>
              </div>
            </div>
          ';
        }
      }
    ?>
    
    <form method="post" enctype="multipart/form-data">
      <div class ="row">
        <div class="col-sm">

          <div class = "container">
            <div class="input-group mb-3" style="width: 850;">
              &emsp;<span class="input-group-text" id="inputGroup-sizing-default">Bid:</span>
              <input type="text" name="bidPrice" class="form-control" placeholder="Input price bid here" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" autocomplete = "off" required>
              <br>
              <input type="submit" class="btn btn-primary" name="bid" value="Bid">
              <button type="button" class="btn btn-success"><a href = "biditem.php" class="text-light">Cancel</a></button>
            </div>
          </div>
          
        </div>
      </div>
    </form>  

    <br>
    <table class="table" style="width: 80.5%;margin-left:140px;">

      <thead class = "table-dark">
        <tr>
          <th scope="col">Bidder ID</th>
          <th scope="col">Bidder Name</th>
          <th scope="col">Bid Item Name</th>
          <th scope="col">Bid Amount</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
          <th scope="col"></th>
        </tr>
      </thead>
              
      <tbody>
                
        <?php 
          $sql = "SELECT
          b.BID_ID, 
          concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name, 
          p.BID_ITEMNAME,
          b.BID_PRICE, 
          b.BID_DATETIME
          FROM 
          bid b,
          users u,
          biditem p
          WHERE
          b.USER_ID=U.USER_ID
          AND b.BID_ITEMID=p.BID_ITEMID
          AND p.BID_ITEMID = $bidItem ORDER BY BID_DATETIME ASC
          ";
                    
          //"SELECT * FROM biddota2item  WHERE DOTA2_SELLITEMID=$biddota2Item";
          $result = mysqli_query($conn,$sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
              $dbbidID = $row['BID_ID'];
              $dbbuyerID = $row['Name'];
              $dbbidItemID = $row['BID_ITEMNAME'];
              $dbbidPrice = $row['BID_PRICE'];
              $dbbidDate = $row['BID_DATETIME'];
              $dateFormatBid =  date("M d, Y  h:i:s A", strtotime($dbbidDate));
              
              echo '
                <tr>
                  <th scope="row">'.$dbbidID.'</th>
                  <td>'.$dbbuyerID.'</td>
                  <td>'.$dbbidItemID.'</td>
                  <td>'.$dbbidPrice.'</td>
                  <td>'.$dateFormatBid.'</td>
                  <td><button type="button" class="btn btn-primary"><a href="updateBid.php? updateBidID='.$dbbidID.'" class="text-light">Update</a></button></td>
                  <td><button type="button" class="btn btn-danger"><a href="deleteBid.php? deleteBidID='.$dbbidID.'" class="text-light">Delete</a></button></td>
                </tr>
              ';   
            } 
          }
        ?>   
      </tbody>
    </table>   

  </body>
</html>
