<?php

require 'vendor\autoload.php';
use App\EpreuveController;

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/22-LogitudSki/index/epreuves', ['App\EpreuveController','epreuvesListe']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);
//dump($httpMethod);
//dump($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
//dump('$routeInfo : ',$routeInfo);
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
        dump('ici une route valide !');
        $classeAAppeler = new $handler[0];
        // ... call $handler with $vars
        call_user_func(array($classeAAppeler,'epreuvesListe'));
        break;
}