<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function send(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:40'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $recipient = env('CONTACT_RECIPIENT_EMAIL', 'noahdzakki12@gmail.com');

        try {
            Mail::to($recipient)->send(new ContactMessageMail($validated));
        } catch (Throwable $exception) {
            Log::error('Failed to send portfolio contact email.', [
                'error' => $exception->getMessage(),
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Could not send your message right now. Please check the mail configuration or try again later.',
                ], 500);
            }

            return back()
                ->withInput()
                ->with('contact_error', 'Could not send your message right now. Please try again later.');
        }

        $successMessage = "Thanks, {$validated['full_name']}! Your message has been sent.";

        if ($request->expectsJson()) {
            return response()->json([
                'message' => $successMessage,
            ]);
        }

        return back()->with('contact_success', $successMessage);
    }
}
