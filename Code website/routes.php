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
$router->get('contactToevoegen', 'controllers/contactToevoegen.php');
$router->get('blogPost','controllers/blogPost.php');


//post
$router->post('add_comment', 'controllers/add_comment.php');
$router->post('choseChild', 'controllers/choseChild.php');
$router->post('contactToevoegen', 'controllers/contactToevoegen.php');




/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 14:22
 */