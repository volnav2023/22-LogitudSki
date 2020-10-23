<?php

namespace App\Entities;

class Categorie
{
    public function __construct($nom)
    {
        if (is_null($nom) or $nom == '') {
            throw new \Exception('Une catégorie doit avoir un nom !');
        };
    }

}