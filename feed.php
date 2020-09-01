
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="Includes/bootstrap.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <title>WeddingWall</title>
    </head>

    <body>
        <div">
            <div id="home">
                <script>
                $(document).ready(function(){
                setInterval(function(){
                $("#home").load('messages.php')
                }, 20);
                });
                </script>
            </div>
            <div id='qr'>
                <img src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo urlencode($QRLink) ?>&chs=300x300'>
            </div>
            <div id="foto">
                <script>
                $(document).ready(function(){
                setInterval(function(){
                $("#foto").load('foto.php')
                }, 1000);
                });
                </script>
            </div>
   

                
        </div>
    </body>
</html>