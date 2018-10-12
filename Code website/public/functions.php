<?php
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPosts() {
    // use global $conn object in function
    global $conn;

    $result = $app['database'] = "SELECT * FROM posts WHERE published=true";

    // fetch all posts as an associative array called $posts
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}

// more functions to come here ...

/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 12-10-2018
 * Time: 16:28
 */