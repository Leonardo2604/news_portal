<?php

require __DIR__ . "/../../app/services/PostService.php";

$postService = new PostService();
$posts = $postService->all();

foreach ($posts as $post) {
    echo $post->getTitle();
    echo "<br />";
    echo $post->getSubtitle();
    echo "<br /><br />";
    echo $post->getContent();
}