<?php

namespace App\Entities;

class Epreuve
{
    public function __construct($lieu, $date)
    {
        if (is_null($date)) {
            throw new \Exception('Une épreuve doit avoir une date !');
        };

        if (is_null($lieu) or $lieu == '') {
            throw new \Exception('Une épreuve doit avoir un lieu !');
        };

        $today = new \DateTime('now');
        if ($date < $today) {
            throw new \Exception('Une épreuve ne peut pas être créée avec une date dans le passé !');
        };
    }
}