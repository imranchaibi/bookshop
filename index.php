<?php
include './function/dp.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/index.css">
	<title>Document</title>
</head>
<body>
	<!--start nav bar-->
	<nav class="navbar navbar-expand-md navbar-dark ">
   
		<div class="dual-collapse1">
		   <b> <a class="navbar-brand mx-auto" href="index.html">LIBRARY</a></b>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
				<span class="navbar-toggler-icon "></span>
			</button>
		</div>
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2 navpos">
			<ul class="navbar-nav ml-auto itme-end">
				<li class="nav-item">
					<b><a class="nav-link" href="./index.php">Home</a></b>
				</li>
				<li class="nav-item">
				   <b> <a class="nav-link" href="./ourbooks.php">Books</a></b>
				</li>
				<li>
					<b> <a class="nav-link" href="./contactus.php">contact us</a></b>
				</li>
			</ul>
		</div>
	</nav>
	<!--end nav bar-->
	<div class="middle">
	<!--start of middle section and search-->
		<p>READ<br>MORE<br>BOOKS</p>
		<form action="./search.php">
			<input type="text" id="search" name="search" placeholder="find your book here"><br>
			<input type="submit" id="btninpt" value="search">
		</form>
	<!--end of middle section and search-->
	</div>
	<!--scripts-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
