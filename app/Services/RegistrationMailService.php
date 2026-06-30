<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Models\HospitalRegistration;

class RegistrationMailService
{
    public function sendNotification(HospitalRegistration $registration)
    {
        // Send the notification to the same email account used by Brevo
        $adminEmail = env('MAIL_FROM_ADDRESS', 'no-reply@example.com');
        
        $sepsis = $registration->sepsis_diagnosis == 1 ? 'Yes' : 'No';
        $consent = $registration->consent_share == 1 ? 'Yes' : 'No';

        $htmlContent = "
            <h2>New Registration Alert</h2>
            <p>A new user has joined the registry.</p>
            <table border='1' cellpadding='10' cellspacing='0'>
                <tr>
                    <th>Name</th>
                    <td>{$registration->name}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{$registration->email}</td>
                </tr>
                <tr>
                    <th>Has Sepsis Diagnosis?</th>
                    <td>{$sepsis}</td>
                </tr>
                <tr>
                    <th>Consented to Share?</th>
                    <td>{$consent}</td>
                </tr>
            </table>
            <br>
            <p>Regards,<br>PAR-BHARGAVI System</p>
        ";

        Mail::html($htmlContent, function ($message) use ($adminEmail) {
            $message->to($adminEmail)
                    ->subject('New Registry Submission - ' . config('app.name'));
        });
    }
}
