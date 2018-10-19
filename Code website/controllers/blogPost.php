<?php require_once('core/bootstrap.php'); ?>



    <!-- Retrieve all posts from database  -->
<?php $result = $app['database']->getPublishedPosts();


$posts = $result;
foreach ($posts as $post) {
    if($post['idkid'] == 2){

        ?>
        <li class="col-xs-12">

            <div class="container" style="margin-top: 0px;">
                <?php echo $post['description'] ?>
            </div>

        </li>
        <?php
    }
}


 ?>

