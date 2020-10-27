<?php

require_once 'vendor\autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;
use App\Controllers\EpreuveController;
use App\Models\Dbase;

$request = Request::createFromGlobals();
$dbase = new Dbase();
$dbase->open('localhost', '22-logitudski', 'root', '');

$dispatcher = FastRoute\simpleDispatcher(
    function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/epreuves', [new EpreuveController(), 'epreuvesListe']);
        $r->addRoute('GET', '/epreuves/{lieu}/{date}', [new EpreuveController(), 'participantsListe']);
        $r->addRoute('GET', '/22-LogitudSki/index/profils', ['App\ProfilController', 'profilsListe']);
        $r->addRoute('GET', '/22-LogitudSki/index/categories', ['App\CategorieController', 'categoriesListe']);
        $r->addRoute('GET', '/22-LogitudSki/index/participants', ['App\ParticipantController', 'participantsListe']);
    }
);

$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        dump('ici le 404 !');
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        dump('ici le 405 !');
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $request->query->add($routeInfo[2]);
        call_user_func($handler, $request, $dbase);
//        $pompier->send();
        break;
    default:
        throw new Exception('Erreur de routage');
}