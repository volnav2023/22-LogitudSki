<?php

namespace App;

class Passage
{
    public function __construct(
        $lieuEpreuve,
        $dateEpreuve,
        $nomParticipant,
        $prenomParticipant,
        $dateNaissParticipant,
        $numero
    ) {
        if ($lieuEpreuve == '' or is_null($lieuEpreuve)
            or $dateEpreuve == '' or is_null($dateEpreuve)
            or $nomParticipant == '' or is_null($nomParticipant)
            or $prenomParticipant == '' or is_null($prenomParticipant)
            or $dateNaissParticipant == '' or is_null($dateNaissParticipant)
            or is_null($numero)) {
            throw new \Exception(
                'Les données du passage sont incomplètes !'
            );
        };

        if ($numero <> 1 and $numero <> 2) {
            throw new \Exception(
                'Le numéro de passage doit être 1 ou 2 !'
            );
        };
    }
}