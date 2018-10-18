<?php
/**
 * Created by PhpStorm.
 * User: Smit-
 * Date: 17-10-2018
 * Time: 13:27
 */

$query = require 'core/bootstrap.php';
$current = Request::uri();



require 'views/contactToevoegen.view.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
