<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TurkishController::index');
$routes->get('/neler-yapiyoruz', 'TurkishController::capabilities');
$routes->get('/iletisim', 'TurkishController::contact_us');
$routes->get('/nasil-yapiyoruz', 'TurkishController::how_it_works');
$routes->get('/neler-yaptik', 'TurkishController::our_work');
$routes->get('/gizlilik-politikasi', 'TurkishController::privacy_policy');
$routes->get('/biz-kimiz', 'TurkishController::who_we_are');
$routes->get('/bloglar', 'TurkishController::blogs');
$routes->get('/bloglar/(:any)', 'TurkishController::blog_details/$1');

// $routes->get('/blog/:dd', 'TurkishController::blog');
