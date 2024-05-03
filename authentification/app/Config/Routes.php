<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Utilisateurs::getRegister');
$routes->get('/login', 'Utilisateurs::getLogin');
$routes->post('/auth/register', 'Utilisateurs::register');
$routes->post('/auth/login', 'Utilisateurs::login');