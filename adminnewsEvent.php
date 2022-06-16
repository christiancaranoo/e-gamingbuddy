<?php
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:index.php");
}else{
    //assign Session of the username
    $useruserName = $_SESSION['username'];
    if(isset($_POST['postNewsAndAnnouncement'])){

        $newsTitle = mysqli_real_escape_string($conn, $_POST['newsTitle']);
        $newsText = mysqli_real_escape_string($conn, $_POST['newsText']);
        $newsSetDate = mysqli_real_escape_string($conn, $_POST['newsSetDate']);

        //storing image to the database
        $newsIMGimageName = $_FILES['newsIMG']['name'];
        $newsIMGimageType = $_FILES['newsIMG']['type'];
        $newsIMGimageTempLoc = $_FILES['newsIMG']['tmp_name'];
        $newsIMGimageSize = $_FILES['newsIMG']['size'];

        //file path
        //to store images to the folder
        $newsIMG = addslashes(file_get_contents($_FILES['newsIMG']['tmp_name']));
        $newsIMGimg_ex = pathinfo($newsIMGimageName, PATHINFO_EXTENSION);
        $newsIMGimg_ex_lc = strtolower($newsIMGimg_ex);
        $newsIMGnew_img_name = uniqid("IMG-",true).'.'.$newsIMGimg_ex_lc; 
        $newsIMGimg_upload_path = 'dota2IMGDb/'.$newsIMGnew_img_name;
        move_uploaded_file($newsIMGimageTempLoc,$newsIMGimg_upload_path);
        
        $sql = "INSERT INTO newandevent (USER_ID,NEWANDEVENT_TITLE,NEWANDEVENT_TEXT,
        NEWANDEVENT_DATETIME,NEWANDEVENT_IMG) VALUES ((SELECT USER_ID FROM `users` WHERE USER_USERNAME='$useruserName'),
        '$newsTitle','$newsText','$newsSetDate', '$newsIMG')";

        $result = mysqli_query($conn,$sql);
        if($result){
            $messageSuccess = "Successfully post News and Announcements ";
            echo "<script type='text/javascript'>alert('$messageSuccess');</script>";
        }else{
            $messageFailed = "Unsuccessfully post News and Announcements";
            echo "<script type='text/javascript'>alert('$messageFailed');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Admin News and Event</title>
        <link href="css1/recent-news-boxes.css" rel="stylesheet">
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

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                <i class="fa fa-plus" aria-hidden="true"></i> Add News 
            </button>
            <!--HIMO UG MODAL UG DISPLAY-->
        </div> 
        <!--END DISPLAY USER LIST -->      
       
        <div class="d-flex">
            <div class="p-2">  
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form method="post" enctype="multipart/form-data">

                                <div class="modal-header">
                                    <img src = "image/promotion.png" width="30">
                                    <h5 class="modal-title" id="exampleModalLabel">&nbsp; Create News and Events</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label"><b>News Title:</b></label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input News Title here" name="newsTitle" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label"><b>Text:</b></label>
                                        <textarea class="form-control" name="newsText" placeholder="Type here" id="floatingTextarea2" style="height: 100px" autocomplete="off" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label"><b>Upload Image</b></label>
                                        <div class="mb-3">
                                            <input class="form-control" type="file" accept="image/*" name="newsIMG" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label"><b>Set Date:</b></label>
                                        <input type="datetime-local" class="form-control" id="formGroupExampleInput" name="newsSetDate" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" name="postNewsAndAnnouncement" value="POST">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                </div>
                            </form>   
                        </div>
                        <!--END MODAL CONTENT-->
                    </div>
                <!--END MODAL DIALOG-->
                </div>
            <!--END MODAL CODE-->   
            </div>
        <!--END 3RD FLEX CODE-->
        </div>
        <!--END WHOLE FLEX CODE-->

        
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
                                <p><b>Action:</b></p>
                                <div class = "row">
                                    <div class = "col">
                                        <button type="button" class="btn btn-primary btn-md">
                                            <a href = "updatenewandEvent.php? updateNewandEventID=<?php echo $row['NEWANDEVENT_ID'];?>" class = "text-light">
                                                Update
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-md">
                                            <a href = "deletenewandEvent.php? deleteNewandEventID=<?php echo $row['NEWANDEVENT_ID'];?>" class = "text-light">
                                                Delete
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <?php
                    }
                }    
                else{
                    echo "No News and Events found.";
                }
                ?>  
            </div>
        </div>   
    </body>
</html>

