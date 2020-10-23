<?php

namespace App\Models;

class DbConnection
{
    public function __construct()
    {
        try {
            return(new PDO('mariadb:host=localhost;dbname=22-logitudski', 'root'));
        } catch (PDOException $e) {
            print'Error!: ' . $e->getMessage() . '<br/>';
            die();}
    }
}