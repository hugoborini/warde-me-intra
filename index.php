<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;

use Slim\Routing\RouteCollectorProxy;



// Stratégie de route:

// Composer autoloader
require __DIR__ . '/vendor/autoload.php';
require 'controller/controller.php';
session_start();
// Instanciation de l'application Slim
$app = AppFactory::create();
$app->setBasePath("/warde-me-intra");
$app->getRouteCollector()
    ->setDefaultInvocationStrategy(new RequestResponseArgs());
    
$app->addErrorMiddleware(true, true, true);

// Route - page d'accueil
$app->get('/', function (Request $request, Response $response) {
    $response->getBody();
    include 'views/login.php';
    return $response;
});

$app->get('/table', function (Request $request, Response $response){
    
    if(isset($_SESSION["check"]) && $_SESSION["check"] == true){
    $response->getBody();
    include 'views/home.php';
    return $response;
    } else{
        $response->getBody();
        echo "you cannot reach that";
        return $response;
    }

});

$app->get('/responce/{id}', function (Request $request, Response $response, $id) {
    if(isset($_SESSION["check"]) && $_SESSION["check"] == true){
        $response->getBody();
        include 'views/single.php';
        return $response;
    } else {
        $response->getBody();
        echo "you cannot reach that";
        return $response;
    }
});

$app->post('/check', function (Request $request, Response $response){
    $response->getBody();
    checkuser($_POST['username'], $_POST["password"]);
    return $response;
});

$app->any('/advance', function (Request $request, Response $response){
    if(isset($_SESSION["check"]) && $_SESSION["check"] == true){
        $response->getBody();
        include 'views/advance.php';
        return $response;
    } else{
        $response->getBody();
        echo "you cannot reach that";
        return $response;
    }

});

// Démarrage de l'application
$app->run();