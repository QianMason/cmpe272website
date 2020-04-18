<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	$error_message = "Error." ;
	$authenticated = false ;
	$error = "" ;
	if (!empty($_POST)) {
		extract($_POST) ;
		if (!$first || !$last || !$email) {
			$error = "You must fill in all the required fields!" ;
		}
		else {
			$query = "INSERT INTO users VALUE(\"{$first}\", \"{$last}\", \"{$email}\", \"{$phone}\")" ;
			$innerquery = "SELECT *
	 		FROM users
	 		WHERE ((first_name LIKE '%{$first}%') AND (last_name LIKE '%{$last}%')) OR (email LIKE '%{$email}%');" ;
			$servername = '127.0.0.1';
			$username = "root";
			$password = "G2rsb9ae0a64!";
			$db = "stonksdb" ;
			$result = array() ;
			// Create connection
			$conn = new mysqli($servername, $username, $password, $db);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$queryset = $conn->query($innerquery) ;
			if ($queryset->num_rows > 0) {
				while ($row = mysqli_fetch_row($queryset)) {
					$result[] = $row ;
				}
				print_r($result) ;
				$error = "User first and last name or email already exist!" ;
			}
			else {
				$conn->query($query) ;

				$error = $conn->error ;
			}
		}
	}
?>
<html>
	<head>
		<title>STONX - Contacts</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo">STONX</a></h1>
							</header>
						</div>

					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="about.php">About</a>
								<ul>
									<li><a href="#">Register</a></li>
									<li><a href="#">Mission Statement</a></li>
									<li><a href="#">History</a></li>
									<li>
										<a href="#">Our Affiliates &hellip;</a>
										<ul>
											<li><a href="#">MemeTrade</a></li>
											<li><a href="#">C@tCoin</a></li>
											<li><a href="#">Make Trading Great Again</a></li>
											<li><a href="#">Infidelity</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="services.php">Services</a></li>
							<li><a href="news.php">News</a></li>
							<li><a href="contacts.php">Contacts</a></li>
							<li><a href="users.php">Users</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</nav>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<header>
								<h2><?php echo $error ;?></h2>
								<h2><a href="#">Register</a></h2>
							</header>
							<div class="container">
								<!-- login class -->
								<div class="card">
									<article class="card-body">
										 <form action="./register.php" method="POST">
										<div class="form-group">
											<label>First name</label>
											<input name="first" class="form-control" placeholder="Required." type="">
										</div> <!-- form-group// -->
										<div class="form-group">
											<label>Last name</label>
											<input name="last" class="form-control" placeholder="Required." type="">
										</div> <!-- form-group// -->
										<div class="form-group">
											<label>Email</label>
											<input name="email" class="form-control" placeholder="Required." type="">
										</div> <!-- form-group// -->
										<div class="form-group">
											<label>Phone #</label>
											<input name="phone" class="form-control" placeholder="" type="">
										</div> <!-- form-group// -->
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block" style="float:left" name="submitButton"> Submit</button>
											<!-- <a href="" class="float-right btn btn-outline-primary">Sign up</a>-->
										</div> <!-- form-group// -->
									</form>
									</article>
									</div> <!-- card.// -->
									</div>
								</div>
							</div>
						</article>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Want to follow us on social media?</h3>
										</header>
										<p>Check out our links below!</p>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Mason Qian Media. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>
