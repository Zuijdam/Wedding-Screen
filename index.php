<?php
include 'inc.php';
?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="includes/bootstrap.min.css">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        -->
        <link rel="stylesheet" href="includes/style.css">

        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <title>WeddingWall</title>
    </head>

    <body>
       
        
            <div class="container d-flex h-100">
                <div class="row align-self-center w-100">
                            <span id="home">
                                <script>
                                $(document).ready(function(){
                                setInterval(function(){
                                $("#home").load('messages.php')
                                }, 5000);
                                });
                                </script> 
                            </span>
                </div>
                 
                                    
            <!-- QR dingetje hier -->

            <div class="fixed-bottom">
                <div class="float-right">
                    <a href="form.php">Laat ook iets achter</a>! Scan hier de QR Code  
                    <img src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo urlencode($QRLink) ?>&chs=200x200'>
                </div>
                <br>
                
            </div>

            <!--hier-->
        </div>  

        
    </body>
</html>