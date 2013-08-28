<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>penmonkey:order</title>
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
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="order.php">Order</a></li>
						<li><a href="faq.php">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php include("carousel.php") ?>
		<div class='hero-unit' id='main-desc'>
			<div class='description ' id='order-desc'>Hi Early-Bird! We are glad that you would like to order Penmonkey, but the truth is it is still in design phase. If you give us your e-mail address (no spam, we promise!), we will let you know when the product is ready for shipping, so that you could be the first to place your order. Also if you have any suggestion how could we make Penmonkey better for You, please write it down in the 'Suggestion' field. Thanks again and see you soon!
			<form method='post' action='letmeknow.php' class='well'>
				<div><span class='span2'>E-mail address: </span><input class='span3' type='text' name='email' id='email-input' placeholder='my-email@hello.com'/></div>
				<div><span class='span2'>Suggestion: </span><textarea class='span3' type='text' name='suggestion' id='suggestion-input' row='10' column='50' placeholder='I think it would be...'></textarea></div>
				<input type='submit' value='Let me know' class='btn btn-large' />
			</form>
			</div>

		</div>
	</div>
</body>
</html>