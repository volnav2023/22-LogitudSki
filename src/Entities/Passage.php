<?php

namespace App\Entities;

class Passage
{
    public function __construct(
        $lieuEpreuve,
        $dateEpreuve,
        $nomParticipant,
        $prenomParticipant,
        $dateNaissParticipant,
        $numPassage
    ) {
        if ($lieuEpreuve == '' or is_null($lieuEpreuve)
            or $dateEpreuve == '' or is_null($dateEpreuve)
            or $nomParticipant == '' or is_null($nomParticipant)
            or $prenomParticipant == '' or is_null($prenomParticipant)
            or $dateNaissParticipant == '' or is_null($dateNaissParticipant)
            or is_null($numPassage)) {
            throw new \Exception(
                'Les données du passage sont incomplètes !'
            );
        };

        if ($numPassage <> 1 and $numPassage <> 2) {
            throw new \Exception(
                'Le numéro de passage doit être 1 ou 2 !'
            );
        };
    }

    public function setTime($numPassage,$time)
    {
        if ($numPassage <> 1 and $numPassage <> 2) {
            throw new \Exception(
                'Le numéro de passage doit être 1 ou 2 !'
            );
        };
        if ($time < 0) {
            throw new \Exception(
                'Le temps doit être positif !'
            );
        }
    }
}