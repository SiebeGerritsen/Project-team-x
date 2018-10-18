<?php
/**
 * GET routes.
 */

$router->get('contactToevoegen', 'controllers/contactToevoegen.php');
$router->get('', 'controllers/index.php');

/**
   POST routes.
 */

$router->post('contactToevoegen', 'controllers/contactToevoegen.php');
