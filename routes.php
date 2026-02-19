<?php
// return  [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/notes/delete' => 'controllers/notes/delete.php',
//     '/note' => 'controllers/notes/show.php',
//     '/note/delete' => 'controllers/notes/delete.php',
//     '/note/create' => 'controllers/notes/create.php',
//     '/contact' => 'controllers/contact.php'
// ];


$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/notes/delete', 'controllers/notes/delete.php');
$router->get('/note', 'controllers/notes/show.php');    
$router->delete('/note/delete', 'controllers/notes/delete.php');
$router->get('/note/create', 'controllers/notes/create.php');

$router->post('/note/create', 'controllers/notes/create.php');
$router->post('/note', 'controllers/notes/show.php');

$router->get('/contact', 'controllers/contact.php');
