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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>




<body>

<div class="container-fluid" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <?php
            include_once 'public/personalMenu.php';
            ?>

        </div>

            <div class="col-sm-8">

                <h2>Agenda</h2>

                <div class="container" style="border: 1px solid black">

                        <?php
                        include_once 'core/calendar.php';
                        ?>

                </div>



            </div>
        </div>
    </div>

    <?php
    include_once 'partials/footer.php';
    ?>

    </body>


    </html>
<?php
/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 21:13
 */