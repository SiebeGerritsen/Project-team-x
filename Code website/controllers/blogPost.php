<?php require_once('core/bootstrap.php'); ?>

    <!-- Retrieve all posts from database  -->
<?php $result = $app['database']->getPublishedPosts();

$posts = $result;


foreach ($posts as $post): ?>

<li class="col-xs-12">

        <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <div class="post_info">
                <h3><?php echo $post['title'] ?></h3>
                <div class="info">
                    <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                    <span class="read_more">Read more...</span>
                </div>
            </div>
</li>

<?php
endforeach
?>

