<!DOCTYPE html>
<html>
<head>
    <title>webshop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<body>
        <div class="container">

            <h3>Persoonlijke menu</h3>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a class="nav-link active"  href="personalPage.php">Persoonlijke Pagina</a> </li>
                <li class="nav-item"><a class="nav-link" href="agenda.php">Agenda</a> </li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a> </li>
            </ul>

                <div class="container">
                    <?php
                    include_once('calendar.php')
                    ?>
                </div>
        </div>

</body>