<?php
include 'inc.php';
	//post message
if($_POST["message"]){
	$post = R::dispense('post');
	$post->title = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
	$post->author = filter_var($_POST["author"], FILTER_SANITIZE_STRING);
	$post->created = date("Y-m-d H:i:s");
	$id = R::store($post);


?>


<!doctype html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Bedankt</title>
  </head>
  <body>
  <div class="container-fluid">
  <div class="row justify-content-center">
	  <div class="col-lg-6">
		<h1>Bedankt! Je bericht is opgeslagen en over enkele ogenblikken te zien op het scherm!</h1>
		<a href="index.php">Bekijk bericht</a>
		<br>
		<a href="form.php">Nog een bericht!</a>
	  </div>
	</div>

  </div>
</body>
</html>
<?php
}
else{
  echo "Geen bericht ingevuld <br> <a href='form.php'>ga terug</a>";
}
?>
