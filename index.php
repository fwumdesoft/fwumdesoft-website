<!DOCTYPE html>
<html>
<head>
	<title>fwumdesoft</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Jason R. Carrete" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		/* global $ */
		function loadHome() {
			$("main").load("html/home.php");
		}
		
		function loadAbout() {
			$("main").load("html/about.html");
		}
	</script>
</head>
<body>
	<div id="page-wrapper">
		<?php include("html/header.html"); ?>

		<main>
			<?php include("html/home.php"); ?>
		</main>
		
		<?php include("html/footer.html"); ?>
	</div>
</body>
<link rel="stylesheet" href="css/style.css" />
</html>
