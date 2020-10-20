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
        echo 'Ici EpreuveController->participantsListe';
        dump('$request : ',$request);
        dump('$request->query->get(\'lieu\') : ',$request->query->get('lieu'));
        dump('$request->query->get(\'date\') : ',$request->query->get('date'));
    }
}