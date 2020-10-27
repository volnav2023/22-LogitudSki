<?php

namespace App\Controllers;

use App\Models\Dbase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EpreuveController
{
    public function epreuvesListe(Request $request, Dbase $dbase)
    {
        $sql = 'SELECT * FROM `epreuve` WHERE 1';

        $twigtest = new ConfigTwig();

        var_dump($donnees = $dbase->query($sql));
        var_dump($donnees = $dbase->query($sql)[0]['lieu']);
        var_dump($donnees = $dbase->query($sql)[0]['date']);

        $reponse = new Response($twigtest->twig->render('epreuve.html.twig', ['rang1'=> $dbase->query($sql)[1]] ));
        $reponse->send();
        $reponse = new Response($twigtest->twig->render('epreuve.html.twig', ['rang2'=> $dbase->query($sql)[2]] ));
        $reponse->send();
    }

    public function participantsListe(Request $request, Dbase $dbase)
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