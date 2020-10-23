<?php


namespace App\Entities;


class Profil
{
    public function __construct($nom)
    {
        if (is_null($nom) or $nom == '') {
            throw new \Exception('Un profil doit avoir un nom !');
        };
    }

}