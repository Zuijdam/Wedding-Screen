<?php
include 'inc.php';
?>


<!doctype html>
<html lang="en">
	<head>
		<title>Wedding Wall by Geensnor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="includes/bootstrap.min.css">
		<link rel="stylesheet" href="includes/style.css">
		<!-- jquery used for reloading messages -->
		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	</head>

	<body>
			<div class="container d-flex h-100">
				<div class="row align-self-center w-100">
							<span id="home">
								<script>
								$(document).ready(function(){
								setInterval(function(){
								$("#home").load('messages.php')
								}, 3000);
								});
								</script>
							</span>
				</div>

			<!-- QR here-->
			<div class="fixed-bottom">
				<div class="float-right">
				<span class="qr">Scan de QR Code of ga naar <a href="<?php echo $QRLink ?>"><?php echo $QRLink ?></a></span>
					<img src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo urlencode($QRLink) ?>&chs=150x150'>
				</div>
				<br>
			</div>
			<!--qr end-->
		</div>
	</body>
</html>