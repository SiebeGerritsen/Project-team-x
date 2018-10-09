<?php
$page = 'personalPage'
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
    include_once 'header.php';

    ?>

    <body>


    <div class="container-fluid" style="margin-top:30px">
        <div class="row">

            <div class="col-sm-4">

                <?php
                include_once 'personal/personalMenu.php';
                ?>

                <hr class="d-sm-none">
            </div>

        <div class="col-sm-8">

            <h2>Persoonlijke pagina</h2>

            <div class="container">
                <p id="welkom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img class="mx-auto d-block" src="../img/huis.jpg"><br>
            </div>

        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>

</body>


</html>
<?php
/**
* Created by PhpStorm.
* User: Siebe
* Date: 10-10-2018
* Time: 00:15
*/
