<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\TaskController; // Pindahkan baris ini ke sini
use App\Controllers\Home; // Tambahkan ini jika belum ada
use App\Controllers\Page; // Tambahkan ini jika belum ada
use App\Controllers\Post; // Tambahkan ini jika belum ada
use App\Controllers\PostAdmin; // Tambahkan ini jika belum ada

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'login']);
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/post', 'Post::index');
$routes->get('/post/(:any)', 'Post::viewPost/$1');
// Admin Post
$routes->group('admin', function($routes){
    $routes->get('post', 'PostAdmin::index', ['filter' => 'login']);
    $routes->get('post/(:segment)/preview', 'PostAdmin::preview/$1');
$routes->add('post/new', 'PostAdmin::create');
    $routes->add('post/(:segment)/edit', 'PostAdmin::edit/$1');
    $routes->get('post/(:segment)/delete', 'PostAdmin::delete/$1');
});

// Rute untuk API CRUD Tugas
$routes->group('api', ['filter' => 'login'], function($routes) {
    // Gunakan array untuk class dan method di sini
    $routes->get('tasks', [TaskController::class, 'index']);
    $routes->post('tasks', [TaskController::class, 'create']);
    $routes->put('tasks/(:num)', [TaskController::class, 'update/$1']);
    $routes->delete('tasks/(:num)', [TaskController::class, 'delete/$1']);
});