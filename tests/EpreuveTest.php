<?php

namespace Tests;

use App\Epreuve;
use DateTime;
use Exception;

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
it(
    'Date invalide !',
    function () {
        $lieu = 'Vesoul';
        $date = new DateTime('1962-11-33');
        $epreuve = new Epreuve($lieu, $date);
    }
)->throws(Exception::class,'DateTime::__construct(): Failed to parse time string (1962-11-33) at position 9 (3): Unexpected character');
