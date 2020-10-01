<?php
include 'inc.php';

if ($_GET["key"] != $deleteKey)
  exit();

if ($_GET["a"] == "delete") {
  $bericht = R::load('post', $_GET["id"]);
  R::trash($bericht);
  echo "bericht met id " . $_GET["id"] . " verwijderd";
}


$allPosts = R::getAll('SELECT * FROM post ORDER BY created DESC');


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
  <title>WeddingWall - Admin</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <table class="table">
          <?php
          foreach ($allPosts as $post) {
            echo "<tr>
                    <td>" . $post["title"] . "</td>
                    <td>" . $post["author"] . "</td>
                    <td>" . $post["created"] . "</td>
                    <td><a href=admin.php?a=delete&key=" . $deleteKey . "&id=" . $post["id"] . ">delete</a></td>
                    
                 </tr>   ";
          }
          ?>
        </table>
      </div>
    </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>