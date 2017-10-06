<!DOCTYPE HTML>
<!--
Twenty by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>දේදුනු ගංතොට </title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<?php
	$useragent=$_SERVER['HTTP_USER_AGENT'];

	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
		?>
		<link rel="stylesheet" type="text/css" href="assets/css/slideshow2.css"></link>
	<?php }
	else {


		?>
		<link rel="stylesheet" type="text/css" href="assets/css/slideshow.css"></link>
		<?php
	} ?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="assets/js/slideshow.js"></script>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body class="index">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1 id="logo"><a href="index.html">දේදුනු ගංතොට  <span></span></a></h1>
			<nav id="nav">
				<ul>
					<li class="current"><a href="about.php">About</a></li>
					<li class="submenu">
						<a href="#">MORE</a>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="photo.php">Photo Contest</a></li>
							<li><a href="video.php">Video Contest</a></li>

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
</div>
<article id="main">

	<header class="special container">

		<h2>දේදුනු ගංතොට</h2>
		<p>දේදුනු ගංතොට ගැන </p>
	</header>
</article>

</section>
<div id="slideshow-wrapper">
	<h2>පසුගිය දේදුනු ගංතොට සාහිත්‍යමය උළෙල මැවූ සොඳුරු මතකයන් ...</h2>
	<div id="slideshow">
		<img src="slide/tn_slide1.jpg"></img>
		<img src="slide/tn_slide2.jpg"></img>
		<img src="slide/tn_slide3.jpg"></img>
		<img src="slide/tn_slide4.jpg"></img>
		<img src="slide/tn_slide5.jpg"></img>
		<img src="slide/tn_slide6.jpg"></img>
		<img src="slide/tn_slide7.jpg"></img>
		<img src="slide/tn_slide8.jpg"></img>
		<img src="slide/tn_slide9.jpg"></img>
		<img src="slide/tn_slide10.jpg"></img>

	</div>
	<div style="text-align: center">
		<div id="circle1" class="circle"></div>
		<div id="circle2" class="circle"></div>
		<div id="circle3" class="circle"></div>
		<div id="circle4" class="circle"></div>
		<div id="circle5" class="circle"></div>
		<div id="circle6" class="circle"></div>
		<div id="circle7" class="circle"></div>
		<div id="circle8" class="circle"></div>
		<div id="circle9" class="circle"></div>
		<div id="circle10" class="circle"></div>
	</div>
</div>

<!--
<article id="main">

<header class="special container">
<span class="icon fa-bar-chart-o"></span>
<h2>As this is my <strong>twentieth</strong> freebie for HTML5 UP
<br />
I decided to give it a really creative name.</h2>
<p>Turns out <strong>Twenty</strong> was the best I could come up with. Anyway, lame name aside,
<br />
it's minimally designed, fully responsive, built on HTML5/CSS3/<strong>skel</strong>,
and, like all my stuff,
<br />
released for free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0</a> license. Have fun!</p>
</header>

One
<section class="wrapper style2 container special-alt">
<div class="row 50%">
<div class="8u 12u(narrower)">

<header>
<h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
</header>
<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
<footer>
<ul class="buttons">
<li><a href="#" class="button">Find Out More</a></li>
</ul>
</footer>

</div>
<div class="4u 12u(narrower) important(narrower)">

<ul class="featured-icons">
<li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
<li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
<li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
<li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
<li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
<li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
</ul>

</div>
</div>
</section>

Two
<section class="wrapper style1 container special">
<div class="row">
<div class="4u 12u(narrower)">

<section>
<span class="icon featured fa-check"></span>
<header>
<h3>This is Something</h3>
</header>
<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
</section>

</div>
<div class="4u 12u(narrower)">

<section>
<span class="icon featured fa-check"></span>
<header>
<h3>Also Something</h3>
</header>
<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
</section>

</div>
<div class="4u 12u(narrower)">

<section>
<span class="icon featured fa-check"></span>
<header>
<h3>Probably Something</h3>
</header>
<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
</section>

</div>
</div>
</section>

Three
<section class="wrapper style3 container special">

<header class="major">
<h2>Next look at this <strong>cool stuff</strong></h2>
</header>

<div class="row">
<div class="6u 12u(narrower)">

<section>
<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
<header>
<h3>A Really Fast Train</h3>
</header>
<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
</section>

</div>
<div class="6u 12u(narrower)">

<section>
<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
<header>
<h3>An Airport Terminal</h3>
</header>
<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
</section>

</div>
</div>
<div class="row">
<div class="6u 12u(narrower)">

<section>
<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
<header>
<h3>Hyperspace Travel</h3>
</header>
<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
</section>

</div>
<div class="6u 12u(narrower)">

<section>
<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
<header>
<h3>And Another Train</h3>
</header>
<p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
</section>

</div>
</div>

<footer class="major">
<ul class="buttons">
<li><a href="#" class="button">See More</a></li>
</ul>
</footer>

</section>

</article>

- CTA
<section id="cta">

<header>
<h2>Ready to do <strong>something</strong>?</h2>
<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
</header>
<footer>
<ul class="buttons">
<li><a href="#" class="button special">Take My Money</a></li>
<li><a href="#" class="button">LOL Wut</a></li>
</ul>
</footer>

</section>

Footer -->
</br>
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
