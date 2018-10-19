<?php

$idKid = $app['database']->getProfileKids();

foreach($idKid as $id){?>
    <a class="dropdown-item" href=""> <?php echo $id['id'] ?></a>
<?php }

/*
foreach($idKid as $id){?>
    <option><?php echo $id['id']?></option>
<?php }

*/
/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 19-10-2018
 * Time: 00:53
 */