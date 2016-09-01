<?php

require 'vendor/autoload.php';

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->any('/', function(){
    return 'Home';
});

$router->any('/contact', function(){
    return 'Contact';
});

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Print out the value returned from the dispatched function
echo $response;