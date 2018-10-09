<?php

?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>webshop</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <img class="logo" src="../img/huis.jpg">
                <?php if ($page == 'blog'||'agenda'){
                ?>
                    <li><a href="../index.php">Home</a> </li>
                    <li><a href="../overons.php">Over ons</a> </li>
                    <li><a href="../contact.php">Contact</a> </li>
                    <li><a href='../personalPage.php'>Persoonlijke pagina</a> </li>
                <?php } else {
                ?>
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="overons.php">Over ons</a> </li>
                    <li><a href="contact.php">Contact</a> </li>
                    <li><a href='personalPage.php'>Persoonlijke pagina</a> </li>
                <?php } ?>

            </ul>

            <div class="nav-login">
                <?php /*zodra ik ben ingelogd wil ik alleen de logout button zien*/
                if (isset($_SESSION['u_id'])) {

                    echo '<form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name="submit">Logout</button>
                        </form>';
                } else {
                    echo ' <form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="Username/e-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                    </form> 
                    <a href="signup.php">Sign up</a>';

                }
                ?>
                <?php
                if (isset($_SESSION['u_id'])) {
                    echo "Welkom {$_SESSION['u_first']} !";


                }
                ?>

            </div>
        </div>
    </nav>

</header><?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 4-10-2018
 * Time: 13:36
 */