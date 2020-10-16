<?php

namespace App;

class Participant
{
    public function __construct($nom, $prenom, $dateNaiss, $eMail, $profil)
    {
        if (is_null($nom) or $nom == '' or is_null($prenom) or $prenom == '' or is_null(
                $dateNaiss
            ) or $dateNaiss == '' or is_null($profil) or $profil == '') {
            throw new \Exception(
                'Un participant doit avoir au minimum un nom, un prénom, une date de naissance et un profil !'
            );
        };
        if (!ctype_alpha($nom)) {
            throw new \Exception(
                'Caractères invalides dans le nom !'
            );
        }
    }
}