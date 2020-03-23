<?php 
	include('phpfucntions.php');
 ?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro" style="margin-bottom: 40px;margin-top: -60px">
						<img style="border: 1px  solid black;border-radius: 50% ;height: 280px" src="images/usama.jpg" alt="" />
						<h1>Usama elgindy</h1>
						<p>Software enginner & Android developer</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Usama Elgindy</a>
					</header>

				<!-- Nav -->
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="height: 55px">
				  <a class="navbar-brand" href="#">RunTime</a>
				  <ul class="navbar-nav">
				    <li class="nav-item">
				      <a class="nav-link" href="#about">About</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#skills">Skills</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#certifications">Certifications</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#projects">Projects</a>
				    </li>
			
							
				</ul>		
				<ul class="icons" style="position: absolute;right: 20px">
							<li>
								<a href="https://www.linkedin.com/in/usama-gindy-a06857181/?locale=en_US" target="_blank" class="icon brands fa-linkedin" style="color: white">
									<span class="label">Linkedin</span></a></li>
							<li>
								<a href="https://github.com/UsamaElgendy/" target="_blank" class="icon brands fa-github" style="color: white">
									<span class="label">GitHub</span></a></li>
							<li>
								<a href="https://www.youtube.com/channel/UC7BT8vJbeO-VJFshLkBsYGw?view_as=subscriber" target="_blank" class="icon brands fa-youtube" style="color: white">
									<span class="label">GitHub</span></a></li>
							<li>
								<a href="https://www.facebook.com/usama.gindy" target="_blank" class="icon brands fa-facebook-f" style="color: white">
									<span class="label">Facebook</span></a></li>
				</ul>
				</nav>
					

				<!-- Main -->
					<div id="main">

		
					<div id="skills">
						
						<h3>skills</h3>
					
						<ul>
							<?php foreach($skills as $sk){ ?>
							<li><?php echo $sk['name']; ?></li>
							<?php } ?>
						</ul>
					</div>
						<!-- Posts -->
						<h2 style="border: solid 2px #eeeeee ; border-bottom: .5px; border-left: .5px; border-right: .5px; text-align: center;" id="certifications">Certification</h2>
							<section class="posts" style="border-top: 0;">
								<?php foreach($certifications as $cer){ ?>
								<article style="border-right: 0; border-top: 0;">
									<header>
										<h2> <?php echo $cer['name']; ?></h2>
									</header>
									<a href="#" class="image fit"><img src="images/<?php echo $cer['image'] ?>" alt="" /></a>
									<p> <?php echo $cer['about']; ?></p>
									<ul class="actions special">
										<li><a href="certification.php?id= <?php echo $cer['id'] ?>" class="button">Details</a></li>
									</ul>
								</article>
							<?php } ?>
						
					
						
							</section>
					</div>

					
				<!-- Main -->
				<div id="main">

					<!-- Posts -->

					<h2 style="border: solid 2px #eeeeee ; border-bottom: .5px; border-left: .5px; border-right: .5px; text-align: center;" id="projects">Projects</h2>
						<section class="posts" style="border-top: 0;">
						<?php  foreach($projects as $pro){ ?>
							<?php $pro_img = explode(',',$pro['iamge']) ?>
							<article style="border-right: 0;">
								<header>
									<h2><a href="#"><?php echo $pro['name'] ?></h2>
								</header>
								<a href="#" class="image fit"><img src="<?php echo $pro_img[0] ?>"  /></a>
							
								<ul class="actions special">
									<li><a href="project.php?proid= <?php echo $pro['id'] ?>" class="button">Details</a></li>
								</ul>
							</article>

							
						<?php } ?>
						
						</section>


				</div>

				<!-- Footer -->
					<footer id="footer">
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>Egypt - alexandria</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p>+20 01212081481</p>
							</section>
							<section>
								<h3>Email</h3>
								<p>Usamaelgindy2@gmail.com</p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="https://www.linkedin.com/in/usama-gindy-a06857181/?locale=en_US" target="_blank" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>
									<li><a href="https://github.com/UsamaElgendy/" target="_blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="https://www.youtube.com/channel/UC7BT8vJbeO-VJFshLkBsYGw?view_as=subscriber" target="_blank" class="icon brands fa-youtube"><span class="label">GitHub</span></a></li>
									<li><a href="https://www.facebook.com/usama.gindy" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul>Design: Usama elgindy</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>