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
                            <h1>blog</h1>
                            <br>
                            <div class="col-sm-12">
                                <div class="container" style="width: 100%; background-color: dodgerblue">
                                    <div class="section_subtitle">Blog</div>
                                    <h2>Recente<strong> Blogs</strong></h2>
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
                            <p>dag Bericht <input type="text" name="description"></p>
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