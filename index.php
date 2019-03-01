<?php
$directory = 'img';
$images = '';
$i = 1;

foreach(glob($directory.'/*.*') as $file){
  $images .= '<div class="img"><img src="' . $file . '" alt="pic' . $i . '"></div>';
  $i++;
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="pictures.css">
		<title>Pictures Slider</title>
	</head>
	<body>
		<h1>Picture Slider</h1>

		<div class="wrapper">
			<div id="mainPic"></div>

			<div class="items">
			<div class="arrows left">&#10094;</div>
			<div id="thumbnails">
				<div id="slider" style="left: 0px;"><?php echo $images; ?></div>
			</div>
			<div class="arrows right">&#10095;</div>
			</div>
		</div>

		<footer class="text-center">
		<br>
		<p>Designed and coded by <a href="https://portfolio.proqweb.com/" target="_blank">Osei Quashie</a>.</p>
	</footer>
	<script rel="javascript" src="pictures.js"></script>
	</body>
</html>
