<?php
$page = 'agenda'
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>

    <?php
    /*met de include functie laad ik een stukje code in zodat ik het niet steeds opnieuwe hoef te typen*/
    include_once '../header.php';

    ?>

    <body>


    <div class="container-fluid" style="margin-top:30px">
        <div class="row">

            <div class="col-sm-4">

                <?php
                include_once 'personalMenu.php';
                ?>

                <hr class="d-sm-none">
            </div>

            <div class="col-sm-8">

                <h2>Persoonlijke pagina</h2>

                <div class="agenda">
                    <p id="welkom"> Hier komt de agenda</p>
                    <img class="mx-auto d-block" src="../img/huis.jpg"><br>
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
