<?php

require_once __DIR__ . "/../contracts/PostRepositoryInterface.php";
require_once __DIR__ . "/../../models/Post.php";
require_once __DIR__ . "/../../exceptions/DatabaseException.php";

class MysqlPostRepository implements PostRepositoryInterface
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function all(): array
    {
        $rows = [];
        $posts = [];
        try {
            $stmt = $this->connection->query("
                SELECT id, author_id, category_id, title, subtitle, content FROM posts
            ");

            $rows = $stmt->fetchAll();
        } catch (PDOException $exception) {
            throw new DatabaseException("Falha ao tentar obter os posts", $exception->getCode(), $exception);
        }

        if (!empty($rows)) {
            foreach ($rows as $row) {
                $posts[] = new Post(
                    $row['id'],
                    $row['author_id'],
                    $row['category_id'],
                    $row['title'],
                    $row['subtitle'],
                    $row['content']
                );
            }
        }

        return $posts;
    }
}