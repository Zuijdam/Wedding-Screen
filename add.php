<?php
include 'inc.php';

//post message
if ($_POST["message"] && $_POST["author"]) {
  //Sanatize input
  $titleSanatized = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $authorSanatized = filter_var($_POST["author"], FILTER_SANITIZE_STRING);

  //Duplicate check
  $duplicatePosts = R::getAll("SELECT * FROM post WHERE title = '" . $titleSanatized . "' AND author = '" . $authorSanatized . "'");

  if (!$duplicatePosts) {
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/style.css">
    <title>Bedankt</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <?php
          if (!$duplicatePosts) {
            echo "
      <h1>".translation_messagesaved."</h1>
      <br>
      <a href='form.php'>".translation_newmessage."</a>";
          } else {
            echo "
      <h1>".translation_alreadyexist."</h1>
      <br>
      <a href='form.php'>".translation_back."</a>";
          }
          ?>
        </div>
      </div>

    </div>
  </body>

  </html>


<?php
// empty message error
} else {
  echo translation_nomessage. "<br> <a href='form.php'>".translation_back."</a>";
}
?>