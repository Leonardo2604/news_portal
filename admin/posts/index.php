<?php

require __DIR__ . "/../../services/PostService.php";

$postService = new PostService();
$posts = $postService->all();

foreach ($posts as $post) {
    echo $post->getTitle();
    echo "<br />";
    echo $post->getSubtitle();
    echo "<br /><br />";
    echo $post->getContent();
}