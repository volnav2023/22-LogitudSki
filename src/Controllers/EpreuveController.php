<?php

namespace App\Controllers;

use App\Models\Dbase;
use App\Models\EpreuveModel;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EpreuveController
{
    public function epreuvesListe(Request $request, Dbase $dbase)
    {
        $epreuveModel = new EpreuveModel($dbase);
        $twig = new ConfigTwig();

        $reponse = new Response($twig->twig->render('epreuve.html.twig', ['donnees' => $epreuveModel->findAll()]));
        $reponse->send();
    }

    public function participantsListe(Request $request, Dbase $dbase)
    {
        $epreuveModel = new EpreuveModel($dbase);
        $twig = new ConfigTwig();
        $lieu = $request->query->get('lieu');
        $date = $request->query->get('date');

        $reponse = new Response($twig->twig->render('epreuve.html.twig',['donnees' => $epreuveModel->findParticipants($lieu, $date)]));
        $reponse->send();
    }

    public function afficheForm(Request $request, Dbase $dbase)
    {
        $twig = new ConfigTwig();

        $reponse = new Response($twig->twig->render('epreuveForm.html.twig', ['donnees' => $dbase->query($sql)]));
        $reponse->send();
    }

    public function ajouteEpreuve(Request $request, Dbase $dbase)
    {
        var_dump($request);
        $twig = new ConfigTwig();

        $reponse = new RedirectResponse($twig->twig->render('epreuve.html.twig', ['donnees' => $dbase->query($sql)]));
        $reponse->send();
    }
}