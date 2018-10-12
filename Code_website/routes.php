<?php
/**
 * Get routes
 */

$router->get('', 'controllers/index.php');
$router->get('home', 'controllers/index.php');
$router->get('overons', 'controllers/overons.php');
$router->get('contact', 'controllers/contact.php');
$router->get('personalPage', 'controllers/personalPage.php');
$router->get('blog', 'controllers/blog.php');
$router->get('agenda', 'controllers/agenda.php');
$router->get('calendar', 'core/functions.php');





/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 14:22
 */