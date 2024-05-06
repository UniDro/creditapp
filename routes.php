<?php
require_once './controllers/AuthController.php';
require_once './controllers/PlanoController.php';
require_once './controllers/HomeController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout']
    ],

    'plano' => [
        'index' => ['GET', 'PlanoController', 'index'],
        'show' => ['POST', 'PlanoController', 'show']
    ],

    'home' => [
        'index' => ['GET', 'HomeController', 'index'],
    ]



    ];