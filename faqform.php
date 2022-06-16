<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css1/faq.css">
		<!--CSS FOR HOMEPAGE NAVIGATION DROPDOWN HOVER -->
		<link rel = "stylesheet" type = "text/css" href="bootstrap-5.1.3-dist/css/" media="screen">
        <link rel="stylesheet" type = "text/css" href="css1/homepagedropdownav.css"/>
        <link rel = "stylesheet" type = "text/css" href = "css1/footerdesign.css"/>
        <!--BOOTSTRAP 4 EXTENSION-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- TITLE -->
		<title>Frequently Asked Question</title>

	</head>

	<body>

  		<!--1ST NAVIGATION BAR-->
		<div class="container-fullwidth"></div>
			<nav class="navbar navbar-light bg-primary">
					<a class="navbar-brand" href="#" style="color: white;">
						<img src="image/logo.jpg" alt="E-Gaming Buddy" width="30" height="30" class="d-inline-block align-text-top">
						E-Gaming Buddy
					</a>
					<a class="nav-link" aria-current="page" href="homepage.php" style="color: white;"><i class = "fa fa-fw fa-home"></i>Home</a>
					<a class="nav-link" href="myaccount.php" style="color: white;"><i class="fa fa-fw fa-user"></i>My Account</a>
					<a class="nav-link" href="#" style="color: white;"><i class="fa fa-gavel" aria-hidden="true"></i> Bidding</a>
					<a class="nav-link" href="newsandevent.php" style="color: white;"><i class="fa fa-bullhorn" aria-hidden="true"></i> News / Events</a>
					
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

					<a class="nav-link" href="#" style="color: white;"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>   
					<a class="nav-link" href="index.php" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
				
			</nav>
		</div>
		<!--1ST END NAVIGATION BAR CODE-->


		<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">

			<ul class="cd-faq__categories">
				<li><a class="cd-faq__category truncate" href="#account" style="font-size: 15px;">Account</a></li>
				<li><a class="cd-faq__category truncate" href="#payment" style="font-size: 15px;">Payment</a></li>
				<li><a class="cd-faq__category truncate" href="#bidding" style="font-size: 15px;">Bidding</a></li>
				<li><a class="cd-faq__category truncate" href="#inventory" style="font-size: 15px;">Inventory</a></li>
			</ul> <!-- cd-faq__categories -->

			<div class="cd-faq__items">

				<ul id="account" class="cd-faq__group">
					<li class="cd-faq__title">
						<h2 style="color: black;">
							&nbsp;&nbsp;&nbsp;Account
						</h2>
					</li>

					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0" style="color: blue;"><span>How do I change my password?</span></a>
					
							<div class="cd-faq__content">
          					    <div class="text-component">
            					  <p>Go to your account first. Then click Change Password, type and confirm your new password.</p>
          						</div>
							</div> <!-- cd-faq__content -->
					</li>

					<li class="cd-faq__item">
					    <a class="cd-faq__trigger" href="#0" style="color: blue;"><span>How do I sign up?</span></a>
							
							<div class="cd-faq__content">
          					    <div class="text-component">
           						  <p>You can register on a log in page and then fill in the relevant information.</p>
          						</div>
							</div> <!-- cd-faq__content -->
					</li>

					<li class="cd-faq__item">
							<a class="cd-faq__trigger" href="#0" style="color: blue;"><span>I forgot my password. How do I reset it?</span></a>
								
								<div class="cd-faq__content">
         						    <div class="text-component">
           							 <p>First, click forgot password, and then enter your email address so that we can send you a new password so that you can log in again.	</p>
         							</div>
								</div> <!-- cd-faq__content -->
					</li>

						
				</ul> <!-- cd-faq__group -->			

				<ul id="payment" class="cd-faq__group">
					<li class="cd-faq__title"><h2  style="color: black;">Payments</h2></li>
					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0"  style="color: blue;"><span>What mode of payment can you use?</span></a>
						<div class="cd-faq__content">
         					<div class="text-component">
           						<p>Paypal is the only payment method that we accept.</p>
          					</div>
						</div> <!-- cd-faq__content -->
					</li>	
				</ul> <!-- cd-faq__group -->

				<ul id="#" class="cd-faq__group">
					<li class="cd-faq__title"><h2  style="color: black;">Privacy</h2></li>		
					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0"  style="color: blue;"><span>How can I access my account data?</span></a>	
						<div class="cd-faq__content">
							<div class="text-component">
								<p>Go to your account and you'll be able to see your account information.</p>
							</div>
						</div> <!-- cd-faq__content -->	
					</li>	
				</ul> <!-- cd-faq__group -->

				<ul id="bidding" class="cd-faq__group">
					<li class="cd-faq__title"><h2  style="color: black;">Bidding</h2></li>
					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0"  style="color: blue;"><span>How to bid an item?</span></a>
						<div class="cd-faq__content">
							<div class="text-component">
								<p>Click bid on a navigation bar, select an item to bid on, and then enter the price for how much you intend to bid.</p>
							</div>
						</div> <!-- cd-faq__content -->
					</li>

					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0"  style="color: blue;"><span>Is it possible for me to make changes to the item on which I bid?</span></a>
						<div class="cd-faq__content">
							<div class="text-component">
								<p>Yes, you can update the bid item's price.</p>
							</div>
						</div> <!-- cd-faq__content -->
					</li>

					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0"  style="color: blue;"><span>Is it possible to remove the price of the bidded item and/or the item that I posted?</span></a>
						<div class="cd-faq__content">
							<div class="text-component">
								<p>Yes, you can delete</p>
							</div>
						</div> <!-- cd-faq__content -->
					</li>

				</ul> <!-- cd-faq__group -->

				<ul id="inventory" class="cd-faq__group">
					<li class="cd-faq__title"><h2  style="color: black;">Inventory</h2></li>
					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0"  style="color: blue;"><span>How to locate my inventory?</span></a>
						<div class="cd-faq__content">
							<div class="text-component">
								<p>After you've clicked on my profile, your inventory will appear.</p>
							</div>
						</div> <!-- cd-faq__content -->
					</li>

					<li class="cd-faq__item">
						<a class="cd-faq__trigger" href="#0"  style="color: blue;"><span>Is it possible to update the sold item from my inventory?</span></a>
						<div class="cd-faq__content">
							<div class="text-component">
								<p>Yes, you can update at the same time you can delete posted item, account and pilot services</p>
							</div>
						</div> <!-- cd-faq__content -->
					</li>
				</ul>
			</div> <!-- cd-faq__items -->

			<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
  			<div class="cd-faq__overlay" aria-hidden="true"></div>
		</section> <!-- cd-faq -->

		<script>document.getElementsByTagName("html")[0].className += " js";</script>
		<script src="js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
		<script src="js/main.js"></script> 
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    	<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	</body>
</html>