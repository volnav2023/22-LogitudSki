<?php

namespace App\Controllers;

class EpreuveController
{
    public function epreuvesListe()
    {
        echo 'EpreuveController->epreuvesListe';
    }

    public function participantsListe($vars)
    {
        echo 'EpreuveController->participantsListe';
        dump($vars);
        echo $vars['lieu'];
        echo $vars['date'];
    }
}