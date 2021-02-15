<?php

require_once __DIR__ . "/../core/MysqlDatabase.php";
require_once __DIR__ . "/../repositories/mysql/MysqlPostRepository.php";

class PostService
{
    public function all()
    {
        $database = new MysqlDatabase();
        $connection = $database->connect();
        $postRepository = new MysqlPostRepository($connection);
        return $postRepository->all();
    }
}