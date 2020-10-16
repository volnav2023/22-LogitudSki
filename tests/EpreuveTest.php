<?php

namespace Tests;

use App\Epreuve;
use DateTime;
use Exception;

//require 'C:\wamp64\www\22-LogitudSki\vendor\autoload.php';

it(
    'Classe correctement instanciée',
    function () {
        $lieu = 'Vesoul';
        $date = new DateTime('2021-11-01');
        $epreuve = new Epreuve($lieu, $date);
        expect($epreuve)->toBeInstanceOf(Epreuve::class);
    }
);
it(
    'throws exception',
    function () {
        $lieu = 'Vesoul';
        $date = new DateTime('1962-11-01');
        $epreuve = new Epreuve($lieu, $date);
    }
)->throws(Exception::class,'Une épreuve');
