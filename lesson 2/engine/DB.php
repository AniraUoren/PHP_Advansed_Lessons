<?php


namespace App\engine;


class DB
{
    protected $connection;

    private $config = [
        "driver" => "mysql",
        "host" => "localhost",
        "db" => "brand",
        'charset' => 'UTF8',
        "login" => "root",
        "pass" => ""
    ];

    private function getDsn()
    {
        return sprintf(
            '%s:host=%s;dbname=%s;charset=%s',
            $this->config['driver'],
            $this->config['host'],
            $this->config['dbname'],
            $this->config['charset']
        );
    }

    protected function getConnection()
    {
        if (empty($this->connection)) {
            $this->connection = new \PDO(
                $this->getDsn(),
                $this->config['login'],
                $this->config['pass']
            );
            $this->connection->setAttribute(
                \PDO::ATTR_DEFAULT_FETCH_MODE,
                \PDO::FETCH_ASSOC
            );
        }

        return $this->connection;
    }
}