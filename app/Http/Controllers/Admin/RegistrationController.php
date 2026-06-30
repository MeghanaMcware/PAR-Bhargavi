<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HospitalRegistration;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = HospitalRegistration::latest()->get();
        return view('admin.registeredhospitals.index', compact('registrations'));
    }

    public function show($id)
    {
        $registration = HospitalRegistration::findOrFail($id);
        return view('admin.registeredhospitals.show', compact('registration'));
    }
}
