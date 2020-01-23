<?php

$router = new Core\Router;

/**
 * Route pattern (first argument) must begin with a forward slash (/) and 
 * must not have one at the end..
 * dynamic arguments are denoted with a colon sign (:)
 * e.g. '/user/:id'
 * 
 * examples of valid routes: '/user', '/user/:id', '/user/:id/posts'
 * examples of invalid routes: 'user', '/user/', 'user/:id', '/user/:id/posts/'
 * 
 * second argument must be an associative array with
 * two keys: 'controller' and 'action' 
 * 
 * they determine what method on which controller will be invoked
 * when the incoming request matches the route in question
 */

$router->get('/', ['controller' => 'App\Controller\HomeController', 'action' => 'index']);
$router->post('/confirm', ['controller' => 'App\Controller\OrderController', 'action' => 'calculate']);
$router->post('/store', ['controller' => 'App\Controller\OrderController', 'action' => 'store']);
$router->get('/update-rates', ['controller' => 'App\Controller\CurrencyController', 'action' => 'updateRates']);

return $router;