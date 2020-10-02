<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="includes/style.css">
  <title>WeddingWall - Nieuw bericht</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h1>Schrijf iets leuks voor Erik en Merel!</h1>
        <p>Je bericht wordt binnen enkele seconden op het scherm getoond.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form action="add.php" method="post">
          <div class="form-group">
            <label>Je naam</label>
            <input type="text" class="form-control" name="author" maxlength="25">
            <small class="form-text text-muted">verplicht</small>
          </div>
          <div class="form-group">
            <label>Je bericht</label>
            <textarea rows="4" class="form-control" name="message" maxlength="200"></textarea>
            <small class="form-text text-muted">verplicht</small>
          </div>
          <button class="btn btn-light" type="submit">versturen</button>
      </div>
      </form>
    </div>
  </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>