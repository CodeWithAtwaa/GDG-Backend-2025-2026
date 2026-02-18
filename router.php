<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

/**
 * All Routes of project ya man
 */
$rouets = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php'
];

/**
 * Summary of abort
 * @param mixed $value
 * @return never
 */
function abort($value = 404)
{
    http_response_code($value);
    require("views/page_404.php");
    exit();
}

/**
 * Summary of routeToControllers
 * @param mixed $uri
 * @param mixed $rouets
 * @return void
 */
function routeToControllers($uri, $rouets)
{
    if (array_key_exists($uri, $rouets)) {
        require $rouets[$uri];
    } else {
        abort();
    }
}

routeToControllers($uri, $rouets);
