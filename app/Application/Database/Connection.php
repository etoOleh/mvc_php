<?php

namespace App\Application\Database;

use App\Application\Config\Config;

class Connection implements ConnectionInterface
{

    private string $driver;
    private string $host;
    private string $dbname;
    private string $username;
    private string $password;

    public function __construct()
    {
        $this->driver = Config::get("database.driver");
        $this->host = Config::get("database.host");
        $this->dbname = Config::get("database.dbname");
        $this->username = Config::get("database.username");
        $this->password = Config::get("database.password");
    }

    public function connect(): \PDO
    {
        return new \PDO("$this->driver:host=$this->host;dbname=$this->dbname;charset=utf8",
            $this->username,
            $this->password
        );
    }
}