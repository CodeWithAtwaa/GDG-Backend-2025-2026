<?php
namespace Core\Middleware;

class Middleware
{
    CONST MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class,
    ];
}