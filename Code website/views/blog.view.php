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

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>


    <body>


    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-4">

                <?php
                include_once 'public/personalMenu.php';
                ?>

                <hr class="d-sm-none">
            </div>

            <div class="col-sm-8">

                <section class="latets-news-area">
                    <div class="container" style="border: 1px solid black">
                        <div class="row">
                            <div class="col">
                                <div class="container">
                                    <h1>blog</h1>
                                    <br>
                                    <!--select list-->
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <?php require 'controllers/choseChild.php'?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-sm-12">
                                <div class="container" style="width: 100%; margin-top: 20px; background-color: dodgerblue">
                                    <h2>Recente dag berichten</h2>
                                </div>
                            </div>
                        </div>

                        <div class="container" style="width: 100%; background-color: grey; margin-top: 10px; margin-bottom: 10px">
                            <div class="row">
                                <div class="news-active">
                                    <div class="col-md-12">
                                        <?php
                                        require_once 'controllers/blogPost.php'
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

                <div class="container" style="border: 1px solid black">

                    <form action="/add_comment" method="post" >
                        <div class="form-group">
                            <label for="sel1"> Kies idkid: </label>
                            <select class="form-control" id="sel1" name="idkid">
                                <?php require 'controllers/add_comment.php'?>
                            </select>

                            <p>Dag Bericht: <input type="text" name="description"></p>
                            <input type="submit" value="Opslaan"/>
                        </div>
                    </form>
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