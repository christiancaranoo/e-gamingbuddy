<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Admin - Dota 2 Report List</title>
        <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
        <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
        <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
        <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
        <!--BOOTSTRAP 4 AND 5 EXTENSION-->
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
        <?php echo $_SESSION["username"]; ?>  
        <!--1ST NAVIGATION BAR-->
        <div class="container-fullwidth">
            <nav class="navbar navbar-light bg-primary">
           
                <a class="navbar-brand" href="#" style="color: white;">
                    <img src="image/logo.jpg" alt="E-Gaming Buddy" width="30" height="30" class="d-inline-block align-text-top">
                    E-Gaming Buddy
                </a>
                <a class="nav-link" href="myadminaccount.php" style="color: white;"><i class="fa fa-fw fa-user"></i>Admin Info</a>
                <a class="nav-link" href="adminuserFeedbacks.php" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> User Feedbacks</a>
                <a class="nav-link" href="adminnewsEvent.php" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> News / Events</a>
                <a class="nav-link" href="adminOrderList.php" style="color: white;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Order List</a>
                <a class="nav-link" href="adminReport.php" style="color: white;"><i class="fa fa-question-circle" aria-hidden="true"></i> Report</a>
                
                <div class="btn-group">
                    <a style="color:white" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell" aria-hidden="true"></i>Notification
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                
                <a class="nav-link" href="logout.php" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
           
            </nav>
        </div>
        <!--1ST END NAVIGATION BAR CODE-->
        <br><br>

        <!--START DISPLAY USER LIST -->
        <div class = "container-fluid">

            <div class="table-responsive-xxl">
                <caption>List of User's Complaints</caption>
                <nav aria-label="...">
                    <ul class="pagination pagination-lg">
                        <li class="page-item"><a class="page-link" href="adminReport.php"><img src = "image/visualization.png" width="35" height="35" alt = "Mobile Legends" > ALL</a></li>
                        <li class="page-item"><a class="page-link" href="adminReportMLBBList.php"><img src = "image/mobilelegends.jpg" width="35" height="35" alt = "Mobile Legends" > Mobile Legends</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#"><img src = "image/dota-2.png" height = "35" width = "35"> Dota 2</a></li>
                        <li class="page-item"><a class="page-link" href="adminReportCSGOList.php"><img src="image/csgoicon.jpg" height = "35" width = "35"> CSGO</a></li>
                        <li class="page-item"><a class="page-link" href="adminReportClashofClanList.php"><img src = "image/clashofclan.jpg" width="35" height="35" alt = "Clash of Clan"> Clash of Clan</a></li>
                        <li class="page-item"><a class="page-link" href="adminReportValorantList.php"><img src = "image/valorantlogo.png" width="35" height="35" alt = "Valorant"> Valorant</a></li>
                        <li class="page-item"><a class="page-link" href="adminReportBidList.php"><img src = "image/auction.png" width="35" height="35" alt = "Valorant"> Bid</a></li>
                    </ul>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-sm-3">Report ID</th>
                            <th scope="col-sm-3">Complainant Name:</th>
                            <th scope="col-sm-3">Complain ID</th>
                            <th scope="col-sm-3">Category</th>
                            <th scope="col-sm-3">Details</th>
                            <th scope="col-sm-3">Date</th>
                            <th scope="col-sm-3">Operation</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            $sql = "SELECT DISTINCT
                            b.REPORT_USERID,
                            concat(u.USER_FIRSTNAME,' ',u.USER_MIDDLENAME,' ',u.USER_LASTNAME) as Name,
                            b.DOTA2_SELLITEMID,
                            b.DOTA2_SELLACCOUNTID,
                            b.DOTA2_PSID,
                            b.REPORT_CATEGORY,
                            b.REPORT_DETAIL,
                            b.REPORT_DATETIME
                            FROM
                            reportuser b,
                            users u
                            WHERE
                            b.USER_ID=U.USER_ID
                            AND MLBB_SELLACCOUNTID IS NULL
                            AND ML_PILOTSERVICEID IS NULL
                            AND CSGO_SELLITEMID IS NULL
                            AND CSGO_SELLACCOUNTID IS NULL
                            AND CSGO_PILOTSERVICEID IS NULL
                            AND CLASHOFCLAN_ID IS NULL
                            AND VALORANT_SELLITEMID IS NULL
                            AND VALORANT_PILOTSERVICEID IS NULL
                            AND BID_ITEMID IS NULL
                            ";
                            $result = mysqli_query($conn,$sql);

                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    //fetch all the data in the users database where user type is users
                                    $reportID = $row['REPORT_USERID'];
                                    $userID = $row['Name'];
                                    $dota2SellItemID = $row['DOTA2_SELLITEMID'];
                                    $dota2SellAccountID = $row['DOTA2_SELLACCOUNTID'];
                                    $dota2PilotServiceID = $row['DOTA2_PSID'];
                                    $reportCategory = $row['REPORT_CATEGORY'];
                                    $reportDetails = $row['REPORT_DETAIL'];
                                    $reportDatetime = $row['REPORT_DATETIME'];

                                    $reportdatetimedateFormat =  date("M d, Y  h:i:s A", strtotime($reportDatetime));

                                    //display the data
                                    echo '
                                        <tr>
                                            <th scope="row">'.$reportID.'</th>
                                            <td>'.$userID.'</td>
                                            <td>
                                                <a href="viewComplaintFullDetailsDota2SellItem.php? viewFullDetailsDota2SellItemID='.$dota2SellItemID.'" style="color:blue" target="_blank">
                                                    '.$dota2SellItemID.'
                                                </a>
                                                <a href="viewComplaintFullDetailsDota2SellAccount.php? viewFullDetailsDota2SellAccountID='.$dota2SellAccountID.'" style="color:blue" target="_blank">
                                                    '.$dota2SellAccountID.'
                                                </a>
                                                <a href="viewComplaintFullDetailsDota2PilotService.php? viewFullDetailsDota2PilotServiceID='.$dota2PilotServiceID.'" style="color:blue" target="_blank">
                                                    '.$dota2PilotServiceID.'
                                                </a>
                                            </td>
                                            <td>'.$reportCategory.'</td>
                                            <td>'.$reportDetails.'</td>
                                            <td>'.$reportdatetimedateFormat.'</td>

                                            <td>
                                                <input type="submit" class="btn btn-primary" name="notifyUser" value="Notify User">
                                                <button type="button" class = "btn btn-danger btn-md">
                                                    &nbsp;
                                                    <a href = "deleteComplaintReportUser.php? deleteComplaintReportUserID='.$reportID.'" class = "text-light">
                                                        Delete
                                                    </a>
                                                </button>
                                            </td>
                                        </tr>
                                    ';

                                }
                            }
                        ?>        
                    </tbody>
                </table>
            </div>
        </div> 

        <!--END DISPLAY USER LIST -->            
    </body>
</html>

