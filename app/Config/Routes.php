<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->setAutoRoute(true);

$routes->get('/', 'pages::index');

$routes->get('/pages', 'pages\home::index');

$routes->get('/pages/about', 'Pages::about');
$routes->get('/komik', 'Komik::index');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');

