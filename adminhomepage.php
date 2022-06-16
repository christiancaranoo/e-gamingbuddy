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
        <title>E-Gaming Buddy</title>
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

            <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" onclick="
                location.href = 'adduserID.php'">
                <i class="fa fa-plus" aria-hidden="true"></i> Add User  
            </button>
            <br><br>

            <div class="table-responsive-xxl">
                <caption>List of users</caption>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-sm-3">#</th>
                            <th scope="col-sm-3">Firstname</th>
                            <th scope="col-sm-3">Middlename</th>
                            <th scope="col-sm-3">Lastname</th>
                            <th scope="col-sm-3">Gender</th>
                            <th scope="col-sm-3">DOB</th>
                            <th scope="col-sm-3">Email Address</th>
                            <th scope="col-sm-3">Phonenumber</th>
                            <th scope="col-sm-3">Address</th>
                            <th scope="col-sm-3">Username</th>
                            <th scope="col-sm-3">Password</th>
                            <th scope="col-sm-3">Usertype</th>
                            <th scope="col-sm-3">Operation</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            $sql = "SELECT * FROM users WHERE USER_USERTYPE='Users'";
                            $result = mysqli_query($conn,$sql);

                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    //fetch all the data in the users database where user type is users
                                    $userID = $row['USER_ID'];
                                    $firstName = $row['USER_FIRSTNAME'];
                                    $middleName = $row['USER_MIDDLENAME'];
                                    $lastName = $row['USER_LASTNAME'];
                                    $gender = $row['USER_GENDER'];
                                    $dateofBirth = $row['USER_DOB'];
                                    $emailAddress = $row['USER_EMAILADDRESS'];
                                    $phoneNumber = $row['USER_PHONENUMBER'];
                                    $address = $row['USER_ADDRESS'];
                                    $username = $row['USER_USERNAME'];
                                    $password = $row['USER_PASSWORD'];
                                    $userType = $row['USER_USERTYPE'];

                                    //display the data
                                    echo '
                                        <tr>
                                            <th scope="row"> '.$userID.' </th>
                                            <td> '.$firstName.' </td>
                                            <td> '.$middleName.' </td>
                                            <td> '.$lastName.' </td>
                                            <td> '.$gender.' </td>
                                            <td> '.$dateofBirth.' </td>
                                            <td> '.$emailAddress.' </td>
                                            <td> '.$phoneNumber.' </td>
                                            <td> '.$address.' </td>
                                            <td> '.$username.' </td>
                                            <td> '.$password.' </td>
                                            <td> '.$userType.' </td>

                                            <td>
                                            
                                                <button type="button" class = "btn btn-primary">
                                                    <a href = "updateuserID.php? updateuserID='.$userID.'" class = "text-light">
                                                        Update
                                                    </a>
                                                </button>
                                                <br><br>

                                                <button type="button" class = "btn btn-danger">
                                                    &nbsp;
                                                    <a href = "deleteuserID.php? deleteuserID='.$userID.'" class = "text-light">
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

