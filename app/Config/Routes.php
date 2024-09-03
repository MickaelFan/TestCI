<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/','UserController::index');

$routes->get('inscription','UserController::inscription');

$routes->post('userStore','UserController::userStore');

$routes->post('login','UserController::login');

$routes->get('accueil','UserController::accueil');

$routes->get('depot','UserController::depot');

$routes->get('retrait','UserController::retrait');

$routes->post('faireDepot','UserController::faireDepot');

$routes->post('faireRetrait','UserController::faireRetrait');