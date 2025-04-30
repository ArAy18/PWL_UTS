<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthorController::login'); // Halaman default = login

// Route untuk proses login dan logout
$routes->get('/login', 'AuthorController::login');
$routes->post('/login', 'AuthorController::doLogin');
$routes->get('/logout', 'AuthorController::logout');

// Route dashboard untuk masing-masing role
$routes->get('/admin', 'DashboardController::admin');
$routes->get('/user', 'DashboardController::user');

