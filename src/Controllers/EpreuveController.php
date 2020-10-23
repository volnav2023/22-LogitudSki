<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;

class EpreuveController
{
    public function epreuvesListe()
    {
        echo 'Ici EpreuveController->epreuvesListe';
    }

    public function participantsListe(Request $request)
    {
        dump(
            'EpreuveController->participantsListe affiche la liste des participants 
            pour l\'épreuve : ' .
            $request->query->get('lieu') . '  ' .
            $request->query->get('date')
        );
//        dump('$request : ', $request);
    }
}