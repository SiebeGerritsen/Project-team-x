<?php


$description = filter_input(INPUT_POST, 'description');
if (!empty($description)){
    var_dump($app['database']);
} else {
    echo "comment moet niet leeg zijn";
}

/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 18-10-2018
 * Time: 11:36
 */