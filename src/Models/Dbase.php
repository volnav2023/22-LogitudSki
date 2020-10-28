<?php

namespace App\Models;

class Dbase
{
    protected $pdo;

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
        return ($this->pdo->query($sqlQuery)->fetchAll(\PDO::FETCH_ASSOC));
    }
}

class EpreuveModel
{
    private $dbase;

    public function __construct($dbase)
    {
        $this->dbase = $dbase;
    }

    public function findAll()
    {
        $sql = 'SELECT * FROM `epreuve` WHERE TRUE';
        return $this->dbase->query($sql);
    }

    public function findParticipants($lieu, $date)
    {
        $sql = "SELECT * FROM passage WHERE numeroDePassage = 0 AND lieuEpreuve = '" . $lieu
            . "' AND dateEpreuve = '" . $date . "'";
        return $this->dbase->query($sql);
    }

}
