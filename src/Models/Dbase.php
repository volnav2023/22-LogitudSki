<?php

namespace App\Models;

class Dbase
{
    private $pdo;

    public function open($serverName, $dbName, $userName, $password)
    {
        try {
            $this->pdo = new \PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            // set the PDO error mode to exception
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//            echo "Dbase connected successfully<br>";
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($sqlQuery)
    {
        return($this->pdo->query($sqlQuery)->fetchAll(\PDO::FETCH_ASSOC));
    }
}
