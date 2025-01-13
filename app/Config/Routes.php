<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/games', 'Page::games');
$routes->get('/community', 'Page::community');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/create', 'Admin::create');
$routes->get('/admin/delete/(:segment)', 'Admin::delete/$1');
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
$routes->post('/admin/update', 'Admin::update/$1');
$routes->post('/admin/store', 'Admin::store');
$routes->get('contact', 'Contact::index'); // Rute untuk menampilkan halaman contact
$routes->post('contact/saveMessage', 'Contact::saveMessage'); // Rute untuk menyimpan pesan dari form contact
