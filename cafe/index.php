<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Caf&eacute;!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center">ROOMAN CAFE&eacute;</div>
	</div>
	<br>
	<?php
		// Get the application environment parameters from the Parameter Store.
		include ('getAppParameters.php');

		// Display the server metadata information if the showServerInfo parameter is true.
		include('serverInfo.php');
	?>
	<hr>
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="#aboutUs">About Us</a>
		<a href="#contactUs">Contact Us</a>
		<a href="menu.php">menu</a>
		<a href="orderHistory.php">Order History</a>
	</div>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			<table>
				<tr>
					<td><img src="data:image/jpeg;base64,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" height=auto width="490"></td>
					<td><img src="images/Cake-Vitrine.jpg" height=auto width="450"></td>
				</tr>
			</table>
			<hr>
			<p>Our caf&eacute; offers an assortment of delicious and delectable pastries and coffees that will put a smile on your face. From cookies to croissants, tarts and cakes, each treat is especially prepared to excite your tastebuds and brighten your day!</p>
			<br>
			<table>
				<tr>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Frank bakes a rich variety of cookies. Try them all!</div>
						<table>
							<tr>
								<td><img src="images/Cookies.jpg" height=auto width="300"></td>
							</tr>
						</table>
					</td>
					<td bgcolor="orange">
						<table>
							<tr>
								<td><img src="images/Cup-of-Hot-Chocolate.jpg" height=auto width="200"></td>
								<td class="cursiveText">Tea,<br>Coffee,<br>Lattes,<br> and Hot Chocolate.<br>Yes, we have it!</td>
							</tr>
						</table>
					</td>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Our tarts are always <br/> a customer favorite!<br><br>
					  </div>
						<table>
							<tr>
								<td><img src="images/Strawberry-Tarts.jpg" height=auto width="170"></td>
								<td><img src="images/Strawberry-Blueberry-Tarts.jpg" height=auto width="170"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>

	<div id="aboutUs" class="center">
		<hr>
		<div>
			<h2>About Us</h2>
		</div>
			<table>
				<tr>
					<td><img src="images/Frank-Martha.jpg" height=auto width="400"></td>
					<td><p>Frank and Martha have been adding sweetness to their customers' lives since 2020.  Frank's recipes have been passed down from his mother and use simple and fresh ingredients to produce delightful flavors.  Both of them will personally greet you with a welcoming smile when you visit!</p></td>
				</tr>
			</table>
			<hr>
		</div>

	<div id="contactUs" align="center">
		<hr>
		<div>
			<h2>Contact Us</h2>
		</div>
		<table>
			<tr>
				<td><img src="images/Coffee-Shop.jpg" height=auto width="120"></td>
			</tr>
		</table>
		<div><p>123 Any Street<br>Any Town, USA<br><br>Tel: +1-800-555-0193</p></div>
		<div>
			<h3>Hours</h3>
		</div>
		<div>Weekdays: 6:00am - 6:00pm<br>Saturday: 7:00am - 7:00pm<br>Closed on Sundays</div>
	</div>

	<div id="Copyright" class="center">
		<h5>&copy; 2020, Amazon Web Services, Inc. or its Affiliates. All rights reserved.</h5>
	</div>
</body>
</html>
