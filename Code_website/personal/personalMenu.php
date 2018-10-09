<!DOCTYPE html>
<html>
<head>
    <title>webshop</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

        <div class="container">

            <h3>Persoonlijke menu</h3>

            <!-- navigatie voor persoonlijke pagina's-->
            <ul class="nav nav-pills flex-column">

                <?php if($page== 'personalPage'){
                    /* Als pagina personalPage is*/
                    ?>
                    <li class="nav-item"><a class="nav-link active"  href=#>Persoonlijke Pagina</a></li>
                    <li class="nav-item"><a class="nav-link" href="personal/blog.php">Blog</a> </li>
                    <li class="nav-item"><a class="nav-link" href="personal/agenda.php">Agenda</a> </li>

                <?php } else if($page == 'blog') {
                    /*pagina niet personalPage*/
                    ?>
                    <li class="nav-item"><a class="nav-link"  href="../personalPage.php">Persoonlijke Pagina</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Blog</a> </li>
                    <li class="nav-item"><a class="nav-link" href="agenda.php">Agenda</a> </li>

                <?php } else if ($page == 'agenda'){?>
                    <li class="nav-item"><a class="nav-link" href="../personalPage.php">Persoonlijke Pagina</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a> </li>
                    <li class="nav-item"><a class="nav-link active" href="#">Agenda</a> </li>

                <?php } ?>


            </ul>
                <!--Calender-->
                <div class="container">
                    <?php
                    include_once('calendar.php')
                    ?>
                </div>
        </div>

</body>
<?php
/**
* Created by PhpStorm.
* User: Siebe
* Date: 10-10-2018
* Time: 00:15
*/