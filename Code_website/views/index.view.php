<?php
$page='index';
?>

<html>
<head>
    <title>Gezinshuis</title>
</head>
<body>

<?php
/*met de include functie laad ik een stukje code in zodat ik het niet steeds opnieuwe hoef te typen*/
include_once 'partials/header.php';

?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Gezinshuis</h2>
        <p id="welkom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <img style="width: 500px; margin-left: 230px" src="../public/img/huis.jpg"><br>

    </div>
</section>

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
 * Time: 14:34
 */