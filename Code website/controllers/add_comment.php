<?php

$results = $app['database']->insertDescription($_POST);
$idKid = $app['database']->getProfileKids();

foreach($idKid as $id){?>
    <option><?php echo $id['id']?></option>
<?php }

require_once 'views/blog.view.php';

/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 18-10-2018
 * Time: 11:36
 */