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
    <script src="js/analytics.js"></script>
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
						<li><a href="order.php">Order</a></li>
						<li class="active"><a href="faq.php">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php include("carousel.php") ?>
		<div class='hero-unit' id='faq'>
			<div id='q-and-a'>
                <h3>Questions and Answers</h3>
				<p>
					<div class='question text-info'><strong>Q: How big is this pen case?</strong></div>
					<div class='answer text-success'>A: 20 cm wide and 9 cm high.</div>
				</p>
				<p>
					<div class='question text-info'><strong>Q: How many pens can fit in?</strong></div>
					<div class='answer text-success'>A: 8 COPIC markers, or approx. 20 normal pens and pencils.</div>
				</p>
				<p>
					<div class='question text-info'><strong>Q: How can I get one?</strong></div>
					<div class='answer text-success'>A: Go the <a href='order.php'>Order</a> page and follow the instructions.</div>
				</p>
				<p>
					<div class='question text-info'><strong>Q: To which countries do you deliver?</strong></div>
					<div class='answer text-success'>A: Theoretically we can ship it to anywhere. Write us your country in the Order menu and we will let you know the possibilities. </div>
				</p>
			    <p>
					<div class='questioni text-info'><strong>Q: Where is PENmonkey coming from?</strong></div>
					<div class='anwer text-success'>A: PENmonkey is coming from Germany, and it is designed by a <a href='http://saralaczo.com/'>hungarian designer</a> in Germany.</div>
				</p>

				<a href="order.php" class="btn btn-large btn-success">Order</a>
			</div>
		</div>
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
