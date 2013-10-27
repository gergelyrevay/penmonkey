<div id="carousel" class="carousel slide"><!-- class of slide for animation -->
	<div class="carousel-inner">
	<?php
    require_once('img_desciprions.inc');
	$carousel_imgs = scandir("img/carousel");

	for ($i=2; $i <sizeof($carousel_imgs) ; $i++) { 
		if ($i == 2) {
			echo('<div class="item active">');
		} else {
			echo('<div class="item">');
		}
		echo('<img src="img/carousel/'.$carousel_imgs[$i].'" alt="'.$img_description[$carousel_imgs[$i]].'" title="'.$img_description[$carousel_imgs[$i]].'" />');
		echo('</div>');
	}
	?>
<!-- 		<div class="item">
			<img src="img/penmonkey3.jpg" alt="" />
			div class="carousel-caption">
				<p>Caption text here</p>
			</div>
 -->		<!-- </div> -->
 	</div><!-- /.carousel-inner -->
	<!--  Next and Previous controls below
	href values must reference the id for this carousel -->
	<a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
<script>
$(document).ready(function(){
	console.log('started');
	$('.carousel').carousel();
});
</script>
