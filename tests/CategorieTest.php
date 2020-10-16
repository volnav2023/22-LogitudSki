<?php

namespace Tests;

use App\Categorie;
use App\Epreuve;
use DateTime;
use Exception;
use phpDocumentor\Reflection\Types\Null_;

it(
    'Classe correctement instanciée',
    function () {
        $nom = 'Snow';
        $categorie = new Categorie($nom);
        expect($categorie)->toBeInstanceOf(Categorie::class);
    }
);
it(
    'Nom vide',
    function () {
        $nom = '';
        $categorie = new Categorie($nom);
    }
)->throws(Exception::class,'Une catégorie doit avoir un nom !');
it(
    'Nom null',
    function () {
        $nom = null;
        $categorie = new Categorie($nom);
    }
)->throws(Exception::class,'Une catégorie doit avoir un nom !');
