<?php
$page = 'agenda'
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

        <!-- Include the jQuery library -->
        <script src="jquery.min.js"></script>

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

                <h2>Persoonlijke pagina</h2>

                <div class="container">

                    <!-- Display event calendar -->
                    <div id="calendar_div">
                        <?php echo getCalender(); ?>
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
 * Date: 11-10-2018
 * Time: 21:13
 */