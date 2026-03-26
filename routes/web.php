<?php

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/krijgen', function () {
    return Inertia::render('Krijgen');
});

Route::get('/aanvraag', function () {
    return Inertia::render('aanvraag');
});

Route::get('/aanmerking', function () {
    return Inertia::render('aanmerking');
});

Route::get('/terugbetaling', function () {
    return Inertia::render('terugbetaling');
});

Route::get('/deadlines', function () {
    return Inertia::render('deadlines');
});

Route::get('/faq', function () {
    return Inertia::render('faq');
});

Route::get('/fouten', function () {
    return Inertia::render('fouten');
});

Route::get('/enqueteStufie', function () {
    return Inertia::render('enqueteStufie');
});


