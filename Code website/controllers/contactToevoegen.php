<?php
/**
 * Created by PhpStorm.
 * User: Smit-
 * Date: 17-10-2018
 * Time: 14:08
 */

$results = $app['database']->insertContactInformation($_POST);

require 'views/contactToevoegen.view.php';


