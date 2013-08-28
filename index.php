<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>penmonkey</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- <link rel="stylesheet" href="style.css" type="text/css" /> --> 
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="shortcut icon" href="/favicon.ico"/>
</head>
<body>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<?php include("share.html") ?>
	<div class='container'>
		<div class='title'><img src="img/penmonkey_name.jpg" alt="Penmonkey" /></div>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="order.php">Order</a></li>
						<li><a href="faq.php">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php include("carousel.php") ?>
		<div class='hero-unit' id='main-desc'>
			<p>This awesome pen holder can be attached to your notebooks of different sizes. It has a handy holder strip inside to keep your pens and pencils organized.</p>
			<a href="order.php" class="btn btn-large btn-success">Order</a>
		</div>
	</div>
	<script>
		$(document).ready(function(){
		console.log('started');
		$('.carousel').carousel();
		});
	</script>
</body>
</html>