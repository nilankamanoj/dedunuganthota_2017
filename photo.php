<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>දේදුනු ගංතොට - photo contest </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">දේදුනු ගංතොට  <span></span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="photo.php">Photo Contest</a></li>
							<li class="submenu">
								<a href="#">MORE</a>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="video.php">Video Contest</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="contact.php">Contact</a></li>
									
								</ul>
							</li>
							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						
					<header>
							<h2>දේදුනු ගංතොට</h2>
						</header>
						<p>සාහිත්‍ය අනුකමිටුව, ඉංජිනේරු පීඨ ශිෂ්‍ය සංගමය, මොරටුව විශ්වවිද්‍යාලය
						<br />

						<!--
						<br />
						by <a href="http://html5up.net">HTML5 UP</a>.</p>
						<footer>
							<ul class="buttons vertical">
								<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
							</ul>
						</footer>
					-->

					</div>

				</section>

			<!-- Main -->
				<article id="main">
				<section class="wrapper style4 container">

							<div class="row 150%">
								<div class="8u 12u(narrower)">
				<div class="content">
                <?php
include('functions/connect.php');
include('functions/functions.php');
?>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/function.js"></script>

<?php 
$sql = "SELECT * FROM items ORDER BY id ASC";
$query = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($query)) {
?>
<li>
<?php if (check_ip($row['id'],get_real_ip()) == 0) { ?>
<a href="javascript:void();" class="like" id="<?php echo $row['id']; ?>">Like <span><?php echo likes($row['id']); ?></span></a>
<?php } else { ?>
<a href="javascript:void();" class="liked">Liked <span><?php echo likes($row['id']); ?></span></a>
<?php } ?>
<br>
<a href="#" class="image featured"><img src=<?php echo 'imggal/'.$row['item'].'.jpg'; ?> alt="left" /></a>
</li>
<br>
<br>
<?php
}
?>
</ul>
</div>
</div>
</div>
</div>



			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>