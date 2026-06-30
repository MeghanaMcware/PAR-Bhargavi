<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HospitalRegistration;

class HospitalRegistrationController extends Controller
{
    public function store(Request $request, \App\Services\RegistrationMailService $mailService)
    {
        $validated = $request->validate([
            'sepsis_diagnosis' => 'required|in:1,2',
            'consent_share' => 'required|in:1,2',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255'
        ]);

        $registration = HospitalRegistration::create($validated);

        try {
            $mailService->sendNotification($registration);
        } catch (\Exception $e) {
            \Log::error('Mail Error: ' . $e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Thank you for registering!']);
    }
}
