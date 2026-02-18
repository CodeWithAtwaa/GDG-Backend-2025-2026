<?php

use PDO;

class DB
{
    public $connection;

    public function __construct($config, $username = "root", $password = "MyRoot@1234")
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function query($sql, array $params = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($params);
        return $statement;
    }
}
