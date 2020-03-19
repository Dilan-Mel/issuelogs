<?php

 $db = mysqli_connect('localhost','root','','issue_logs')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Issue Logs</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/dist/style1.css">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="images/kpmg.jpg" alt="" /></span>
						<h1>This is <strong>Visualize</strong>, a Issues in Penetration testing designed by KPMG</a><br />
						</h1>
						<!--ul class="icons">
							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul-->
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="input type="search" placeholder="Search...">
										<img src="images/thumbs/windows.jpg" alt="" />
										<h3>Windows</h3>
									</a>
									<a href="images/fulls/02.jpg">
										<img src="images/thumbs/Linux.png" alt="" />
										<h3>Linux</h3>
									</a>
								</div>
								<div>
									<a href="images/fulls/03.jpg">
										<img src="images/thumbs/network.jpg" alt="" />
										<h3>Network</h3>
									</a>
									<a href="images/fulls/04.jpg">
										<img src="images/thumbs/firewall.jpg" alt="" />
										<h3>Firewall</h3>
									</a>
									
								</div>
								<div>
									<a href="images/fulls/06.jpg">
										<img src="images/thumbs/database.png" alt="" />
										<h3>Data Base</h3>
									</a>
									
								</div>
							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">
						<p>&copy; KPMG. All rights reserved. Design: <!--a href="http://templated.co">TEMPLATED</a>. Demo Images: <a href="http://unsplash.com">Unsplash</a-->.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>