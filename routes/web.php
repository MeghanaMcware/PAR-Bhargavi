<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\VersionController;
use App\Http\Controllers\Admin\RegistrationController;



Route::get('/', function () {
    return view('frontend.index');
});

Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
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

    Route::post('/version/toggle-status', [VersionController::class, 'toggleStatus'])->name('version.toggleStatus');
    Route::resource('version', VersionController::class);

    Route::resource('hospital', HospitalController::class);
});

Route::get('/registered/list', [RegistrationController::class, 'index'])->name('registered.list');
Route::get('/registered/view/{id}', [RegistrationController::class, 'show'])->name('registered.show');







use App\Http\Controllers\HospitalRegistrationController;

Route::post('/join-registry', [HospitalRegistrationController::class, 'store'])->name('frontend.registry.store');

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



