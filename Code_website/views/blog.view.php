<?php
$page = 'blog'
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    </head>

    <?php
    /*met de include functie laad ik een stukje code in zodat ik het niet steeds opnieuwe hoef te typen*/
    include_once 'partials/header.php';

    ?>

    <body>


    <div class="container-fluid" style="margin-top:30px">
        <div class="row">

            <div class="col-sm-4">

                <?php
                include_once 'public/personalMenu.php';
                ?>

                <hr class="d-sm-none">
            </div>

            <div class="col-sm-8">

                <h2>blog</h2>

                <div class="container">
                    <p> Hier komt de blog </p>
                    <img class="mx-auto d-block" src="../public/img/huis.jpg"><br>
                </div>

            </div>
        </div>
    </div>
    </body>

    <?php
    include_once 'partials/footer.php';
    ?>

    </html>
<?php
/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 21:13
 */