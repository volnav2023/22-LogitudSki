<?php

namespace Tests;

use App\Epreuve;
use App\Profil;
use DateTime;
use Exception;

it(
    'Classe correctement instanciée',
    function () {
        $nom = 'ASVP';
        $profil = new Profil($nom);
        expect($profil)->toBeInstanceOf(Profil::class);
    }
);
it(
    'Nom vide',
    function () {
        $nom = '';
        $profil = new Profil($nom);
    }
)->throws(Exception::class,'Un profil doit avoir un nom !');
it(
    'Nom null',
    function () {
        $nom = null;
        $profil = new Profil($nom);
    }
)->throws(Exception::class,'Un profil doit avoir un nom !');
