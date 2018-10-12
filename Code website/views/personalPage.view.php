<?php
$page = 'personalPage'
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PHP Event Calendar by CodexWorld</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/calendar.css">
    </head>


    <body class="bg">


    <div class="container-fluid" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">

                <?php
                include_once 'public/personalMenu.php';
                ?>

            </div>

            <div class="col-sm-8">

                <div class="container" style="border: 1px solid black">

                <h1> Persoonlijke pagina </h1>


                    <div class="row">

                        <div class="col-sm-4">

                            <div class="container">
                                <img  class="mx-auto d-block" style="max-width: 100%" src="../public/img/profielFoto.png">
                            </div>

                        </div>

                        <div class="col-sm-8">

                            <div class="container">
                                <h3> Persoons gegevens </h3>
                                <br>
                                <br>
                                <p> Naam: Siebe Gerritsen </p>
                                <p> Geboortedatum: 29-07-1996</p>
                                <p> Geboorteplaats: Woudenberg</p>
                                <p> hobby's: </p>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>



    </body>


    </html>
<?php
/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 10-10-2018
 * Time: 00:15
 */