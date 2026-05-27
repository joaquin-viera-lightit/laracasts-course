<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50.000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$20.000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$20.000',
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50.000',
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$20.000',
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$20.000',
        ],
    ];

    $job = collect($jobs)->firstWhere('id', (int) $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
