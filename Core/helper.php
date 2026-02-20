<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}


function urls($value)
{
    return ($_SERVER['REQUEST_URI'] === $value) ? "bg-gray-950/50 text-white"  :   "text-gray-300 hover:bg-white/5 hover:text-white";
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require base_path("views/{$statusCode}.php");
    die();
}
function authorize($condition, $statusCode = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($statusCode);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/{$path}");
}
function login($user)
{
    $_SESSION['user'] = [
        'id' => isset($user['id']) ? $user['id'] : null,
        'email' => isset($user['email']) ? $user['email'] : null,
    ];

    session_regenerate_id(true);
}



function logout()
{
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();

    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
