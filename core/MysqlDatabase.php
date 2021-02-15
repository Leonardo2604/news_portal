<?php

require_once __DIR__ . "/../exceptions/DatabaseException.php";

class MysqlDatabase
{
    private string $host;
    private string $database;
    private string $user;
    private string $password;

    public function __construct()
    {
        $this->connection = null;
        $this->host = "localhost";
        $this->database = "news_portal";
        $this->user = "root";
        $this->password = "";
    }

    public function connect(): PDO
    {
        try {
            $connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $exception) {
            throw new DatabaseException("Falha ao tentar conectar com o banco de dados", $exception->getCode(), $exception);
        }
    }
}