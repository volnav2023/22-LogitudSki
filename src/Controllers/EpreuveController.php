<?php

namespace App\Controllers;

use App\Models\Dbase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EpreuveController
{
    public function epreuvesListe(Request $request, Dbase $dbase)
    {
        $sql = 'SELECT * FROM `epreuve` WHERE TRUE';

        $twig = new ConfigTwig();

        $reponse = new Response($twig->twig->render('epreuve.html.twig', ['donnees' => $dbase->query($sql)]));
        $reponse->send();
    }

    public function participantsListe(Request $request, Dbase $dbase)
    {
        $sql = "SELECT * FROM passage WHERE numeroDePassage = 0 AND lieuEpreuve = '" . $request->query->get(
                'lieu'
            ) . "' AND dateEpreuve = '" . $request->query->get('date') . "'";

        $twig = new ConfigTwig();

        $reponse = new Response($twig->twig->render('epreuve.html.twig', ['donnees' => $dbase->query($sql)]));
        $reponse->send();
    }
}