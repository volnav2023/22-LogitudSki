<?php

Namespace App\Controllers;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use \Twig\Loader\FilesystemLoader;

class ConfigTwig{
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('src\Views\Templates');
        $this->twig = new Environment($this->loader, ['debug' => true]);
        $this->twig->addExtension(new DebugExtension());
        return $this->twig;
    }
}


