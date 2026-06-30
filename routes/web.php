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
Route::get('/patient/update', function () {
    return view('admin.patient.update');
});
Route::get('/patient/continueform', function () {
    return view('admin.patient.continueform');
});



Route::get('/version/index', function () {
    return view('admin.version.index');
});
Route::get('/version/view', function () {
    return view('admin.version.view');
});
Route::get('/version/create', function () {
    return view('admin.version.create');
});


Route::get('/hospital/index', function () {
    return view('admin.hospital.index');
});
Route::get('/hospital/view', function () {
    return view('admin.hospital.view');
});
Route::get('/hospital/create', function () {
    return view('admin.hospital.create');
});

Route::get('/registered/list', function () {
    return view('admin.registeredhospitals.index');
});
Route::get('/registered/view', function () {
    return view('admin.registeredhospitals.show');
});







Route::get('/hospital-login/dashboard', function () {
    return view('hospital-login.dashboard');
});



Route::get('/hospital-login/patient/view', function () {
    return view('hospital-login.patient.view');
});
Route::get('/hospital-login/patient/create', function () {
    return view('hospital-login.patient.create');
});
Route::get('/hospital-login/patient/index', function () {
    return view('hospital-login.patient.index');
});






Route::get('/hospital-login/hospital/index', function () {
    return view('hospital-login.hospital.index');
});
Route::get('/hospital-login/hospital/view', function () {
    return view('hospital-login.hospital.view');
});
Route::get('/hospital-login/hospital/create', function () {
    return view('hospital-login.hospital.create');
});



