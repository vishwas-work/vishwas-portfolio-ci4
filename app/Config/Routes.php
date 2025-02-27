<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');

// $routes->get('/login', 'Login::index');
// $routes->post('/sendMessage', 'Home::sendMessage');

$routes->get('/resume', 'Home::resumeShow');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/projects', 'Home::projects');
$routes->post('/contact-form', 'Home::contactform');
