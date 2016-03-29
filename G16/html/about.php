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
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="../style/base.css">
	<link rel="stylesheet" type="text/css" href="../style/about.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
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
					$name = $_SESSION['SESS_FIRST_NAME'];
					if (isLoggedIn()){
						echo '<li class="welcome">Welcome, '.$name.'!</li>';
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
					<h1>Our Story</h1>
				</header>
				<main>
					<div class="section group">
						<div class="col span_2_of_3">
							<h3>About</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque dictum nibh, nec varius dui fermentum a. Aliquam gravida est eget tortor volutpat, in condimentum orci porttitor. Vivamus metus lectus, cursus sed viverra quis, euismod ac magna. Nam ullamcorper bibendum mi, vitae sagittis orci dictum tincidunt. Phasellus ultricies posuere lacinia. In tristique, ante et lacinia suscipit, velit ex consectetur eros, ut sollicitudin sapien ipsum sit amet neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et volutpat lorem. Mauris neque felis, lacinia id rhoncus iaculis, laoreet vel odio. Cras at mauris sit amet mauris posuere ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse placerat dolor quis ante sollicitudin accumsan. Morbi eget tortor egestas, tempor mi vel, pretium erat. Proin ullamcorper mi justo, et blandit dui consectetur eget. Cras neque lacus, laoreet quis metus ac, rutrum porttitor nunc. Quisque quis dignissim tortor, ut pretium est.</p>
						</div>
						<div class="col span_1_of_3">
							<div class="about-photo" class=""><img src="../images/placeholder.png" alt="about" class="photos"></div>
						</div>
					</div>
					<div class="section group">
						<div class="col span_1_of_3 photo2">
							<div class="community-photo"></div>
						</div>
							<div class="col span_2_of_3">
								<h3>Community</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque dictum nibh, nec varius dui fermentum a. Aliquam gravida est eget tortor volutpat, in condimentum orci porttitor. Vivamus metus lectus, cursus sed viverra quis, euismod ac magna. Nam ullamcorper bibendum mi, vitae sagittis orci dictum tincidunt. Phasellus ultricies posuere lacinia. In tristique, ante et lacinia suscipit, velit ex consectetur eros, ut sollicitudin sapien ipsum sit amet neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et volutpat lorem. Mauris neque felis, lacinia id rhoncus iaculis, laoreet vel odio. Cras at mauris sit amet mauris posuere ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse placerat dolor quis ante sollicitudin accumsan. Morbi eget tortor egestas, tempor mi vel, pretium erat. Proin ullamcorper mi justo, et blandit dui consectetur eget. Cras neque lacus, laoreet quis metus ac, rutrum porttitor nunc. Quisque quis dignissim tortor, ut pretium est.</p>
								<div class="community-photo2"></div>
							</div>
					</div>
						
					<div class="section group">
						<div class="col span_2_of_3">
							<h3>Environment</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque dictum nibh, nec varius dui fermentum a. Aliquam gravida est eget tortor volutpat, in condimentum orci porttitor. Vivamus metus lectus, cursus sed viverra quis, euismod ac magna. Nam ullamcorper bibendum mi, vitae sagittis orci dictum tincidunt. Phasellus ultricies posuere lacinia. In tristique, ante et lacinia suscipit, velit ex consectetur eros, ut sollicitudin sapien ipsum sit amet neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et volutpat lorem. Mauris neque felis, lacinia id rhoncus iaculis, laoreet vel odio. Cras at mauris sit amet mauris posuere ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse placerat dolor quis ante sollicitudin accumsan. Morbi eget tortor egestas, tempor mi vel, pretium erat. Proin ullamcorper mi justo, et blandit dui consectetur eget. Cras neque lacus, laoreet quis metus ac, rutrum porttitor nunc. Quisque quis dignissim tortor, ut pretium est.</p>
						</div>
						<div class="col span_1_of_3">
							<div class="environment-photo"></div>
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
</body>
</html>