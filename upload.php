<?php
include('functions/connect.php');
if(isset($_POST['btn-signup']))
{
	//$file = ($_POST['file']);
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.jpg','.jpeg','.mp4','.avi');
	$name = strip_tags($_POST['txt_name']);
	$umail = strip_tags($_POST['txt_umail']);
	$caption = strip_tags($_POST['txt_caption']);
	$des = strip_tags($_POST['txt_des']);
	if($name=="")	{
		$error[] = "provide name !";
	}
	else if($caption=="")	{
		$error[] = "provide a caption !";
	}

	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
		$error[] = 'Please enter a valid email address !';
	}
	else if($des=="")	{
		$error[] = "provide a short description !";
	}
	else if (in_array($file_ext,$allowed_file_types) && ($filesize < 20388608))
{
	// Rename file
	if($file_ext == '.jpg' || $file_ext == '.jpeg' ){
		$newfilename = 'img'.. $file_ext;
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/images/" . $newfilename);
		$sql = "INSERT INTO `imgs` (`name`, `email`, `message`) VALUES ('{$name}','{$umail}','{$msg}' )";
		//$query = mysqli_query($con,$sql);
		header("Location: upload.php?pass");
	}
	if($file_ext == '.mp4' || $file_ext == '.avi' ){
		$newfilename = 'vdo'.. $file_ext;
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/videos/" . $newfilename);
		//$sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('{$name}','{$umail}','{$msg}' )";
		//$query = mysqli_query($con,$sql);
		header("Location: upload.php?pass");
	}

}
elseif (empty($file_basename))
{
	// file selection error
	$error[] = "Select a file to upload!";
}
elseif ($filesize > 20388608)

{
	// file size error
	$error[] = "File is too large!. Email the photo with above details!";
}
else
{
	// file type error
	$error[] = "File type error!";
	unlink($_FILES["file"]["tmp_name"]);
}

}
?>
<!DOCTYPE HTML>
<!--
Twenty by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>දේදුනු ගංතොට - upload</title>
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
					<li class="current"><a href="upload.php">Upload files</a></li>
					<li class="submenu">
						<a href="#">MORE</a>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="photo.php">Photo Contest</a></li>
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
			<form method="post" class="form-signin" enctype="multipart/form-data">
				<h2>Upload File.</h2><hr />
				<form method="post" class="form-signin" enctype="multipart/form-data">
					<?php
					if(isset($error))
					{
						foreach($error as $error)
						{
							?>
							<div class="alert alert-danger">
								<i class="glyphicon glyphicon-warning-sign"></i> &nbsp;  <?php echo $error; ?>
							</div>
							<?php
						}
					}
					else if(isset($_GET['pass']))
					{
						?>
						<div class="alert alert-info">
							<i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully Uploaded!
						</div>
						<?php
					}
					?>


						<div class="form-group">
							<input type="button" id="loadFileXml" value="Browse Device" onclick="document.getElementById('file').click();" />
							<input type="file" style="display:none;" id="file" name="file" value="<?php if(isset($error)){echo $file;}?>"/>
						</div>
						<br/>

					<div class="form-group">
						<input type="text" class="form-control" name="txt_name" placeholder="Enter name" value="<?php if(isset($error)){echo $name;}?>" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_umail" placeholder="Enter email" value="<?php if(isset($error)){echo $umail;}?>" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_caption" placeholder="Enter the caption" value="<?php if(isset($error)){echo $caption;}?>" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_des" placeholder="Enter some discription" value="<?php if(isset($error)){echo $des;}?>" />
					</div>

					<div class="clearfix"></div><hr />

					<div class="form-group">

						<button type="submit" class="button special" name="btn-signup">
							<i class="glyphicon glyphicon-open-file"></i>&nbsp;Upload Now
						</button>

					</div>



					<br />
					<label>want to cancel! <a href="index.html">Cancel</a></label>
				</form>


			</div>


		</section>



		<!-- Footer -->
		<footer id="footer">

			<ul class="icons">
				<li><a href="https://www.facebook.com/Dedunu.Ganthota/" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
			</ul>

			<ul class="copyright">
				<li>Created By </li><li>Nilanka Manoj</li>
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
