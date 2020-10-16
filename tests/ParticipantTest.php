<?php

namespace Tests;

use App\Epreuve;
use App\Participant;
use App\Profil;
use DateTime;
use Exception;

it(
    'Classe correctement instanciée',
    function () {
        $nom = 'White';
        $prenom = 'Snow';
        $dateNaiss = '1962-11-01';
        $eMail = 'snow.white@disney.com';
        $profil = 'ASVP';
        $participant = new Participant($nom,$prenom,$dateNaiss,$eMail,$profil);
        expect($participant)->toBeInstanceOf(Participant::class);
    }
);
it(
    'eMail non renseigné',
    function () {
        $nom = 'White';
        $prenom = 'Snow';
        $dateNaiss = '1962-11-01';
        $eMail = null;
        $profil = 'ASVP';
        $participant = new Participant($nom,$prenom,$dateNaiss,$eMail,$profil);
        expect($participant)->toBeInstanceOf(Participant::class);
    }
);
it(
    'Caractères invalides dans le nom',
    function () {
        $nom = '$White$';
        $prenom = 'Snow';
        $dateNaiss = '1962-11-01';
        $eMail = null;
        $profil = 'ASVP';
        $participant = new Participant($nom,$prenom,$dateNaiss,$eMail,$profil);
    }
)->throws(Exception::class,'Caractères invalides dans le nom !');;
it(
    'Nom vide',
    function () {
        $nom = '';
        $prenom = 'Snow';
        $dateNaiss = '1962-11-01';
        $eMail = 'snow.white@disney.com';
        $profil = 'ASVP';
        $participant = new Participant($nom,$prenom,$dateNaiss,$eMail,$profil);
    }
)->throws(Exception::class,'Un participant doit avoir au minimum un nom, un prénom, une date de naissance et un profil !');
it(
    'Profil non renseigné',
    function () {
        $nom = 'White';
        $prenom = 'Snow';
        $dateNaiss = '1962-11-01';
        $eMail = 'snow.white@disney.com';
        $profil = '';
        $participant = new Participant($nom,$prenom,$dateNaiss,$eMail,$profil);
    }
)->throws(Exception::class,'Un participant doit avoir au minimum un nom, un prénom, une date de naissance et un profil !');
