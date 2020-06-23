<?php

namespace App;

class Controller
{
    function view($view, $params = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('view/');
$twig = new \Twig\Environment($loader, [
    //'cache' => 'cache/',
]);

echo $twig->render($view, $params);
    }
}
