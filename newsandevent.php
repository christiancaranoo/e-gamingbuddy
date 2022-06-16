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
        <title>News and Event</title>
        <!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
        <link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
        <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
        <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--BOOTSTRAP 4 EXTENSION-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--CSS FOR THE NEWS AND EVENTS-->
        <link href="css1/recent-news-boxes.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    

    <body>
        
        <!--1ST NAVIGATION BAR-->
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-primary">
            
                <a class="navbar-brand" href="#" style="color: white;">
                    <img src="image/logo.jpg" alt="E-Gaming Buddy" width="30" height="30" class="d-inline-block align-text-top">
                    E-Gaming Buddy
                </a>
                <a class="nav-link" aria-current="page" href="homepage.php" style="color: white;"><i class = "fa fa-fw fa-home"></i>Home</a>
                <a class="nav-link" href="myaccount.php" style="color: white;"><i class="fa fa-fw fa-user"></i>My Account</a>
                <a class="nav-link" href="biditem.php" style="color: white;"><i class="fa fa-gavel" aria-hidden="true"></i> Bidding</a>
                <a class="nav-link" href="#" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> News / Events</a>
                
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

                <a class="nav-link" href="faqform.php" style="color: white;"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>
                <a class="nav-link" href="index.php" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            
            </nav>
        </div>
        <!--1ST END NAVIGATION BAR CODE-->
        
        <br>
        <!---DISPLAY THE LIST OF NEWS AND EVENTSS-->
        <div class = "container py-5">
            <div class = "row mt-3">
                <div class = "col-md-12">
                    <h3 class="news-title"><center>List of News / Events</center></h3>
                </div>
            </div>
            <div class = "row mt-4">

                <?php
                $sql = "SELECT * FROM newandevent";
                $result = mysqli_query($conn,$sql);
                $check_result = mysqli_num_rows($result) >  0;

                if($check_result){
                    while($row=mysqli_fetch_assoc($result))
                    {
                        ?>
                        <div class="col-md-3 mt-3">
                            <div class="card">
                                <a href="#"><?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($row['NEWANDEVENT_IMG']).'" width="250" height="250"/>'?></a>
                                <div class="card-body">
                                    <h5 class="ct-blog-header">
                                        <?php echo $row['NEWANDEVENT_TITLE']; ?>
                                    </h5>
                                    <p>
                                        <?php echo date("M d, Y  h:i:s A", strtotime($row['NEWANDEVENT_DATETIME'])); ?>
                                    </p>
                                    <a href="viewNewandEventFullInfo.php? viewNewandEventID=<?php echo $row['NEWANDEVENT_ID'];?>" target="_blank">View Full Information Here</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }    
                else{
                    echo "No News and Eventys found.";
                }
                ?>  
            </div>
        </div>
        <!--END NEWS AND EVENTS CODE-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    </body>
</html>

