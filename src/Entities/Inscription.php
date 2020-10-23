<?php

namespace App\Entities;

class Inscription
{
    public function __construct(
        $lieuEpreuve,
        $dateEpreuve,
        $nomParticipant,
        $prenomParticipant,
        $dateNaissParticipant
    ) {
        if ($lieuEpreuve == '' or is_null($lieuEpreuve)
            or $dateEpreuve == '' or is_null($dateEpreuve)
            or $nomParticipant == '' or is_null($nomParticipant)
            or $prenomParticipant == '' or is_null($prenomParticipant)
            or $dateNaissParticipant == '' or is_null($dateNaissParticipant)) {
            throw new \Exception(
                'Les données de l\'inscription sont incomplètes !'
            );
        };
    }
}