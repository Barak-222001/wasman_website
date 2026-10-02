<?php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MembershipController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|string|max:50',
            'phone' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'occupation' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'expertise' => 'required|string|max:255',
            'education' => 'required|string|max:100',
            'join_as' => 'required|in:Student,Staff,Volunteer,Other',
            'join_as_other' => 'nullable|required_if:join_as,Other|string|max:255',
            'membership_type' => 'nullable|string|max:255',
            'interest' => 'required|string|max:3000',
            'contribution' => 'nullable|array',
            'contribution.*' => 'string|max:255',
            'contribution_other' => 'nullable|string|max:500',
            'declaration' => 'accepted',
        ]);

        $validated['status'] = 'Pending';

        $application = MembershipApplication::create($validated);

        /*
         * Email failures must never prevent a successfully saved application
         * from returning the applicant to the confirmation section.
         */
        try {
            $adminEmail = env('WASMAN_ADMIN_EMAIL', 'acme222001@gmail.com');

            Mail::send(
                'emails.membership-admin-notification',
                ['application' => $application],
                function ($message) use ($application, $adminEmail) {
                    $message->to($adminEmail)
                        ->subject('New WASMaN Membership Application - ' . $application->full_name);
                }
            );
        } catch (\Throwable $e) {
            Log::error('WASMaN membership administrator notification failed', [
                'application_id' => $application->id,
                'error' => $e->getMessage(),
            ]);
        }

        try {
            Mail::send(
                'emails.membership-applicant-confirmation',
                ['application' => $application],
                function ($message) use ($application) {
                    $message->to($application->email, $application->full_name)
                        ->subject('WASMaN Membership Application Received');
                }
            );
        } catch (\Throwable $e) {
            Log::error('WASMaN membership applicant confirmation failed', [
                'application_id' => $application->id,
                'applicant_email' => $application->email,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect('/become_member#membership-application')
            ->with(
                'success',
                'Thank you. Your WASMaN membership application has been submitted successfully. A confirmation email has been sent to the email address you provided.'
            );
    }
}
