<?php
include 'inc.php';
?>

<!doctype html>
<html lang="en">

<head>
	<title><?php echo translation_title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="includes/style.css">
	<!-- jquery used for reloading messages -->
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
	<!-- Draggable DIV -->
	<div id="mydiv">
		<!-- Include a header DIV with the same name as the draggable DIV, followed by "header" -->
		<div id="mydivheader"><?php echo translation_dragdiv; ?> </div>
		<p><a href="<?php echo $QRLink ?>"><img src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo urlencode($QRLink) ?>&chs=400x400'></a></p>
	</div>
	<div class="container d-flex h-100">
		<div class="row align-self-center w-100">
			<span id="home">
				<script>
					$(document).ready(function() {
						setInterval(function() {
							$("#home").load('messages.php')
						}, 3000);
					});
				</script>
			</span>
		</div>
	</div>
</body>

</html>