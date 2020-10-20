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
        echo 'EpreuveController->participantsListe affiche la liste des participants pour l\'épreuves :';
        dump($request->query->get('lieu'));
        dump($request->query->get('date'));
//        dump('$request : ',$request);
    }
}