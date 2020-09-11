<?php
include 'inc.php';

//post message
if($_POST["message"] && $_POST["author"]){
  //Sanatize input
  $titleSanatized = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $authorSanatized = filter_var($_POST["author"], FILTER_SANITIZE_STRING);

  //Duplicate check
  $duplicatePosts = R::getAll("SELECT * FROM post WHERE title = '".$titleSanatized."' AND author = '".$authorSanatized."'");

  if(!$duplicatePosts){
    $post = R::dispense('post');
    $post->title = $titleSanatized;
    $post->author = $authorSanatized;
    $post->created = date("Y-m-d H:i:s");
    $post->show_time = date("Y-m-d H:i:s");
    $id = R::store($post);
  }

  
?>


<!doctype html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="includes/style.css">
	<title>Bedankt</title>
  </head>
  <body>
  <div class="container-fluid">
  <div class="row justify-content-center">
	  <div class="col-lg-6">
    <?php
    if(!$duplicatePosts){
    echo"
      <h1>Bedankt! Je bericht is opgeslagen en over enkele ogenblikken te zien op het scherm!</h1>
      <br>
      <a href='form.php'>Nog een bericht!</a>";
    }
    else{
      echo"
      <h1>Bericht bestaat al</h1>
      <br>
      <a href='form.php'>Terug</a>";

    }
    ?>
	  </div>
	</div>

  </div>
</body>
</html>

<?php
}
else{
  echo "Geen bericht ingevuld <br> <a href='form.php'>Terug</a>";
}
?>
