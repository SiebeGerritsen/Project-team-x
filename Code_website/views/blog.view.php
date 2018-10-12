<?php
$page = 'blog'
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/calendar.css">
    </head>


    <body class="bg">


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

                <section class="latets-news-area">

                </section>

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