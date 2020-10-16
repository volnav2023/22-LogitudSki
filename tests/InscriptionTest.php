<?php

namespace Tests;

use App\Inscription;
use DateTime;
use Exception;

it(
    'Classe correctement instanciée',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = 'Snow';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $numero = 1;
        $inscription = new Inscription(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant
        );
        expect($inscription)->toBeInstanceOf(Inscription::class);
    }
);

it(
    'Les données de l\'inscription sont incomplètes !',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = '';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $inscription = new Inscription(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant
        );
    }
)->throws(Exception::class, 'Les données de l\'inscription sont incomplètes !');
