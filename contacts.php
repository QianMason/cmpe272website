<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
	$person = [];
	$position = [];
	$contact = [];
	$myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
	$count = 0 ;
	while(!feof($myfile)) {
		if ($count % 4 == 0) {
			$person[] = fgets($myfile);
		}
		elseif ($count % 4 == 1) {
			$position[] = fgets($myfile);
		}
		elseif ($count % 4 == 2) {
			$contact[] = fgets($myfile);
		}
		else {
			fgets($myfile);
		}
		$count = $count + 1;
	}
	fclose($myfile);
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
						</ul>
					</nav>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<header>
								<h2><a href="#">Contacts</a></h2>
								<p>
									Our companies contacts made available to you.
								</p>
							</header>
							<div class="container">
								<!-- contacts card -->
								<div class="card card-default" id="card_contacts">
									<div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
										<ul class="list-group pull-down" id="contact-list">
											<li class="list-group-item">
												<div class="row w-100">
													<div class="col-12 col-sm-6 col-md-3 px-0">
														<img src="images/mememan.png" alt="Mike Anamendolla" class="rounded-circle mx-auto d-block img-fluid">
													</div>
													<div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
														<span class="fa fa-mobile fa-2x text-success float-right pulse" title="online now"></span>
														<label class="name lead font-weight-bold"><?php echo $person[0] ?></label>
														<br>
														<span class="name lead"><?php echo $position[0] ?></span>
														<br>
														<span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
														<span class="text-muted">5842 Hillcrest Rd</span>
														<br>
														<span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
														<span class="text-muted small">(870) 288-4149</span>
														<br>
														<span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
														<span class="text-muted small text-truncate"><?php echo $contact[0] ?></span>
													</div>
												</div>
											</li>
											<li class="list-group-item">
												<div class="row w-100">
													<div class="col-12 col-sm-6 col-md-3 px-0">
														<img src="images/mememan.png" alt="Seth Frazier" class="img-fluid rounded-circle d-block mx-auto">
													</div>
													<div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
														<span class="name lead font-weight-bold"><?php echo $person[1] ?></span>
														<br>
														<span class="name lead"><?php echo $position[1] ?></span>
														<br>
														<span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="7396 E North St"></span>
														<span class="text-muted">7396 E North St</span>
														<br>
														<span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(560) 180-4143"></span>
														<span class="text-muted small">(560) 180-4143</span>
														<br>
														<span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="seth.frazier@example.com"></span>
														<span class="text-muted small text-truncate"><?php echo $contact[1] ?></span>
													</div>
												</div>
											</li>
											<li class="list-group-item">
												<div class="row w-100">
													<div class="col-12 col-sm-6 col-md-3 px-0">
														<img src="images/mememan.png" alt="Rosemary Porter" class="img-fluid rounded-circle d-block mx-auto">
													</div>
													<div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
														<span class="fa fa-envelope fa-lg text-danger float-right" title=""></span>
														<span class="name lead font-weight-bold"><?php echo $person[2] ?></span>
														<br>
														<span class="name lead"><?php echo $position[2] ?></span>
														<br>
														<span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5267 Cackson St"></span>
														<span class="text-muted">5267 Cackson St</span>
														<br>
														<span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(497) 160-9776"></span>
														<span class="text-muted small">(497) 160-9776</span>
														<br>
														<span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="rosemary.porter@example.com"></span>
														<span class="text-muted small text-truncate"><?php echo $contact[2] ?></span>
														<br>

													</div>
												</div>
											</li>
											<li class="list-group-item">
												<div class="row w-100">
													<div class="col-12 col-sm-6 col-md-3 px-0">
														<img src="images/mememan.png" alt="Debbie Schmidt" class="img-fluid rounded-circle d-block mx-auto">
													</div>
													<div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
														<label class="name lead font-weight-bold"><?php echo $person[3] ?></label>
														<br>
														<span class="name lead"><?php echo $position[3] ?></span>
														<br>
														<span class="fa fa-fw fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="3903 W Alexander Rd"></span>
														<span class="text-muted">3903 W Alexander Rd</span>
														<br>
														<span class="fa fa-fw fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(867) 322-1852"></span>
														<span class="text-muted small">(867) 322-1852</span>
														<br>
														<span class="fa fa-fw fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="debbie.schmidt@example.com"></span>
														<span class="text-muted small text-truncate"><?php echo $contact[3] ?></span>
													</div>
												</div>
											</li>
											<li class="list-group-item">
												<div class="row w-100">
													<div class="col-12 col-sm-6 col-md-3 px-0">
														<img src="images/mememan.png" alt="Debbie Schmidt" class="img-fluid rounded-circle d-block mx-auto">
													</div>
													<div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
														<label class="name lead font-weight-bold"><?php echo $person[4] ?></label>
														<br>
														<span class="name lead"><?php echo $position[4] ?></span>
														<br>
														<span class="fa fa-fw fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="3903 W Alexander Rd"></span>
														<span class="text-muted">3903 W Alexander Rd</span>
														<br>
														<span class="fa fa-fw fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(867) 322-1852"></span>
														<span class="text-muted small">(867) 322-1852</span>
														<br>
														<span class="fa fa-fw fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="debbie.schmidt@example.com"></span>
														<span class="text-muted small text-truncate"><?php echo $contact[4] ?></span>
													</div>
												</div>
											</li>
										</ul>
										<!--/contacts list-->
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
