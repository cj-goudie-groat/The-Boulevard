<?php
	include '../forum/functions.php';
	require_once('../forum/config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style/base.css">
	<link rel="stylesheet" type="text/css" href="../style/gallery.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../style/unslider.css">
  <link rel="stylesheet" href="../style/unslider-dots.css">
</head>
<body>	
	<div class="main-container">
		<nav class="nav-container">
			<div class="spacer"></div>
			<div id="logo-link">
				<a href="index.php"><img id="logo" src="../images/logo.png" width="100" height="165" alt="logo"></a>
				<div id="nav-links">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="gallery.php">Art</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="spacer"></div>
			<div id="login">
				<ul>
				<?php
					if (isLoggedIn()){
						echo '<li><a href="../forum/logout.php">Logout</a></li>';
						echo '<li><a href="../forum/forum.php">Go to forum</a></li>';
						echo '<li><a href="../forum/add_topic_form.php">Create topic</a></li>';
					} else {
						echo '<li><a href="../forum/login_form.php">Login</a></li>';
						echo '<li><a href="../forum/register_form.php">Sign Up</a></li>';
					}
				?>
				</ul>
			</div>
			<div id="social-links">
				<a href="https://www.facebook.com/BoulevardCoffeeRoasting" target="_blank"><img src="../images/fb.png" height="30" width="30" alt="facebook"></a>
				<a href="https://twitter.com/blvdroastingco" target="_blank"><img src="../images/twitter.png" height="30" width="30" alt="twitter"></a>
				<a href="https://www.instagram.com/explore/locations/236693420/" target="_blank"><img src="../images/insta.png" height="30" width="30" alt="instagram"></a>
			</div>
		</nav>
				
		<div class="content-container">
			<div class="content">
				<header>
					<div id="bg-header"></div>
					<h1>Art Gallery</h1>
				</header>
				<main>
					<div class="section group">
						<div class="col span_2_of_3">
							<h3>Current Artist</h3>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis tortor eu lorem ultricies mattis. Nunc sit amet malesuada augue. In dignissim mattis nisi, facilisis posuere lectus laoreet ac. Duis pellentesque rhoncus nunc. Vestibulum aliquet ligula mauris, vel ullamcorper ligula faucibus a. Sed id maximus est, sed dapibus urna. Nulla eu rhoncus diam. Donec pulvinar est ut augue malesuada luctus. Pellentesque maximus odio vel tincidunt venenatis. Aenean placerat purus sapien, ut ullamcorper felis bibendum et. Nunc fringilla vehicula libero sed blandit. Pellentesque eros urna, condimentum tempor finibus vitae, condimentum id dolor. Cras vehicula convallis neque, id pulvinar ipsum feugiat eu. Etiam et lacus justo. Sed et varius ex, vel posuere felis.
						</div>
						<div class="col span_1_of_3">
							<div class="pics">
								<img src="../images/latte1.jpg" alt="artist picture">
							</div>
						</div>
					</div>
          <br>
          <br>
          <div class="slider">
          <div class="banner">
            <ul>
              <li><img src="../images/art/paint.jpg"></li>
              <li><img src="../images/art/atonement.jpg"></li>
              <li><img src="../images/art/rorschach.jpg"></li>
              <li><img src="../images/art/amy.jpg"></li>
              <li><img src="../images/art/misc.jpg"></li>
            </ul>
          </div>
          </div>
				</main>
			
				<footer>
					<div id="contact">
						<div id="mobile-social">
							<a href="https://www.facebook.com/BoulevardCoffeeRoasting" target="_blank"><img src="../images/mobilefb.png" height="30" width="30" alt="facebook"></a>
							<a href="https://twitter.com/blvdroastingco" target="_blank"><img src="../images/mobiletwitter.png" height="30" width="30" alt="twitter"></a>
							<a href="https://www.instagram.com/explore/locations/236693420/" target="_blank"><img src="../images/mobileinsta.png" height="30" width="30" alt="instagram"></a>
						</div>
						<div id="address">
							<p>The Boulevard Coffee Roasting Co.</p>
							<p>5970 University Boulevard</p>
							<p>Vancouver, British Columbia Canada V6T 1Z3</p>
							<p>Telephone: 604.827.4488</p>
							<p>Email: info@theboulevard.ca</p>
						</div>
						<div id="sitemap-link">
							<br>
							<p><a href="sitemap.php">Site Map</a></p>
						</div>
					</div>
					
					<div id="hours">
						<table>
							<tr>
								<td>Monday</td>
								<td>7am - 7pm</td>
								<td>Friday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Tuesday</td>
								<td>7am - 7pm</td>
								<td>Saturday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Wednesday</td>
								<td>7am - 7pm</td>
								<td>Sunday</td>
								<td>8am - 6pm</td>
							</tr>
							<tr>
								<td>Thursday</td>
								<td>7am - 7pm</td>
								<td></td><td></td>
							</tr>
						</table>
					</div>
					
					<div id="mobile-hours">
						<table>
							<tr>
								<td>Monday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Tuesday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Wednesday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Thursday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Saturday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Sunday</td>
								<td>8am - 6pm</td>
							</tr>
						</table>
					</div>
				
					<div id="sitemap">
						<table>
							<tr>
								<td><a href="index.php">Home</a></td>
								<td><a href="gallery.php">Art</a></td>
							</tr>
							<tr>
								<td><a href="about.php">About</a></td>
								<td><a href="contact.php">Contact</a></td>
							</tr>
							<tr>
								<td><a href="menu.php">Menu</a></td>
								<td><a href="sitemap.php">Site Map</a></td>
							</tr>
						</table>
					</div>
				</footer>
			</div>
		</div>
	</div>
  
	<script src="http://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
	<script src="../javascript/unslider.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.banner').unslider();
			infinite: true;
			arrows: true;
			dots: true;
		});
	</script>
</body>
</html>
