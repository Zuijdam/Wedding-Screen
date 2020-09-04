
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="includes/style.css">

        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <title>WeddingWall</title>
    </head>

    <body>
        <div">
 

            <div class="container d-flex h-100">
                <div class="row align-self-center w-100">
                    <div class="col-6 mx-auto">
                        <div class="jumbotron" id="home">
                        
                        <script>
                        $(document).ready(function(){
                        setInterval(function(){
                        $("#home").load('messages.php')
                        }, 200);
                        });
                        </script> 
                        </div>
                    </div>
                </div>
            </div>



            <div id='qr'>
                <img src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo urlencode($QRLink) ?>&chs=300x300'>
            </div>
        </div>
    </body>
</html>