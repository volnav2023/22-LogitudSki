<?php

namespace Tests;

use App\Inscription;
use App\Passage;
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
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numero
        );
        expect($passage)->toBeInstanceOf(Passage::class);
    }
);

it(
    'Les données du passage sont incomplètes !',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = '';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $numero = 1;
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numero
        );
    }
)->throws(Exception::class, 'Les données du passage sont incomplètes !');

it(
    'Le numéro de passage doit être 1 ou 2 !',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = 'Snow';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $numero = 3;
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numero
        );
    }
)->throws(Exception::class, 'Le numéro de passage doit être 1 ou 2 !');
