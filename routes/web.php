<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greating' => 'Hello',
        'jobs' => [
            [
                'title' => 'IT',
                'salary' => 2020,
            ],
            [
                'title' => 'CS',
                'salary' => 2023,
            ],
            [
                'title' => 'GIS',
                'salary' => 102,
            ],
            [
                'title' => 'IS',
                'salary' => 10000,
            ]
        ]
    ]);
});

Route::get("/about", function () {
    return view('about');
});
Route::get("/contact", function () {
    return view('contact');
});
