<?php

namespace Tests;

use App\Passage;
use DateTime;
use Exception;

it(
    'Construct : Classe correctement instanciée',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = 'Snow';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $numPassage = 1;
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numPassage
        );
        expect($passage)->toBeInstanceOf(Passage::class);
    }
);

it(
    'Construct : Les données du passage sont incomplètes !',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        echo date_format($dateEpreuve, 'd-m-Y H:i:s');
        $nomParticipant = 'White';
        $prenomParticipant = '';
        $dateNaissParticipant = new DateTime('1962-11-01');
        echo date_format($dateNaissParticipant, 'd-m-Y H:i:s');
        $numPassage = 1;
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numPassage
        );
    }
)->throws(Exception::class, 'Les données du passage sont incomplètes !');

it(
    'Construct : Le numéro de passage doit être 1 ou 2 !',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = 'Snow';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $numPassage = 3;
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numPassage
        );
    }
)->throws(Exception::class, 'Le numéro de passage doit être 1 ou 2 !');

it(
    'SetTime : Le numéro de passage doit être 1 ou 2 !',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = 'Snow';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $numPassage = 3;
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numPassage
        );
        $time = 10 ** 9;
        $passage->setTime1($numPassage, $time);
    }
)->throws(Exception::class, 'Le numéro de passage doit être 1 ou 2 !');

it(
    'SetTime : Le temps doit être positif !',
    function () {
        $lieuEpreuve = 'Vesoul';
        $dateEpreuve = new DateTime('2020-12-25');
        $nomParticipant = 'White';
        $prenomParticipant = 'Snow';
        $dateNaissParticipant = new DateTime('1962-11-01');
        $numPassage = 2;
        $passage = new Passage(
            $lieuEpreuve,
            $dateEpreuve,
            $nomParticipant,
            $prenomParticipant,
            $dateNaissParticipant,
            $numPassage
        );
        $time = -10 ** 9;
        $numPassage = 1;
        $passage->setTime($numPassage, $time);
    }
)->throws(Exception::class, 'Le temps doit être positif !');
