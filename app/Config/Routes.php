<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Dashboard::logout');
$routes->get('/login', 'Login::index');
$routes->get('/admin/login', 'Login::indexadmin');
$routes->post('/auth', 'Login::auth');
$routes->post('/adminauth', 'Login::loginAdmin');
$routes->get('/register', 'Register::index');
$routes->post('/save', 'Register::save');
$routes->get('/tumbuhan', 'Tumbuhan::index');
$routes->post('/insert', 'Tumbuhan::insertData');
$routes->get('/admin/dashboard', 'AdminPage::index');
$routes->get('/admin/delete/(:num)', 'Tumbuhan::deleteTumbuhan/$1');
$routes->get('pdf/show', 'Panduan::showPdf');
