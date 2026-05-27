<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/home', function () {
    return view('frontend.index');
});
Route::get('/registration', function () {
    return view('admin.registration.index');
});

Route::get('/registration/view', function () {
    return view('admin.registration.view');
});


Route::get('/patient/view', function () {
    return view('admin.patient.view');
});
Route::get('/patient/create', function () {
    return view('admin.patient.create');
});
Route::get('/patient/index', function () {
    return view('admin.patient.index');
});
