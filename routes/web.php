<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HospitalController;



Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
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

    Route::get('/version/index', function () {
        return view('admin.version.index');
    });
    Route::get('/version/view', function () {
        return view('admin.version.view');
    });
    Route::get('/version/create', function () {
        return view('admin.version.create');
    });

    Route::resource('hospital', HospitalController::class);
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



