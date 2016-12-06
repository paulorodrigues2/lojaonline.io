<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online Booking - Car Wash</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<?php
		require_once('common/database.php');
require_once('common/common.php');
	?>
	
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Book online</h2>
					<ul>
						<li>
							<a href="#">Hand Wash</a>
						</li>
						<li>
							<a href="#">Deluxe Wash</a>
						</li>
						<li>
							<a href="#">Detailing Wash</a>
						</li>
					</ul>
				</div>
				<div>
					<h2>Account</h2>
 				</div>
			</div>
			<div class="main">
				<h1>Car Wash</h1>
                                <hr>
				<p>
				Select the service you require and choose either Car or Truck size of vehicle.<br> Pick the available time slot that suits your schedule. 
				<br> Enter your information to confirm. Click here to return to the <a href="#">Services</a> page at any time.	
				</p>
				<ul class="practices">
					<li class="frame5">
						<a href="#" class="box"><img src="images/car-wash2.jpg" height="198" width="265"><span>Hand Wash</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/car-wash4.jpg" height="198" width="265"><span>Deluxe Wash</span></a>
					</li>
					<li class="frame5">
						<a href="#" class="box"><img src="images/car-wash3.jpg" height="198" width="265"><span>Detailing Wash</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">	
                    
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2014 Online Car Wash Booking. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>