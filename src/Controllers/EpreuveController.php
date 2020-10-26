<?php

namespace App\Controllers;

use App\Models\Dbase;
use Symfony\Component\HttpFoundation\Request;

class EpreuveController
{
    public function epreuvesListe(Request $request, Dbase $dbase)
    {
//        echo 'Ici EpreuveController->epreuvesListe' . "<br>";
        $sql = 'SELECT * FROM `epreuve` WHERE 1';
        foreach ($dbase->query($sql) as $row) {
            print $row['lieu'] . "\t";
            print $row['date'] . "<br>";
        }
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