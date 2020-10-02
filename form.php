<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="includes/style.css">
  <title><?php echo translation_title; ?></title>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h1><?php echo translation_formtitle; ?></h1>
        <p><?php echo translation_formdescription; ?></p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form action="add.php" method="post">
          <div class="form-group">
            <label><?php echo translation_formlabelname; ?></label>
            <input type="text" class="form-control" name="author" maxlength="25">
            <small class="form-text text-muted"><?php echo translation_formlabelmandatory; ?></small>
          </div>
          <div class="form-group">
            <label><?php echo translation_formlabelmessage; ?></label>
            <textarea rows="4" class="form-control" name="message" maxlength="200"></textarea>
            <small class="form-text text-muted"><?php echo translation_formlabelmandatory; ?></small>
          </div>
          <button class="btn btn-light" type="submit"><?php echo translation_formlabelsendbutton; ?></button>
      </div>
      </form>
    </div>
  </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>