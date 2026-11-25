<?php

namespace Tests\Feature;

use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_form_sends_email_to_noah(): void
    {
        Mail::fake();

        $payload = [
            'full_name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '+62 812-3456-7890',
            'subject' => 'Project Inquiry',
            'message' => 'Hi Noah, I would love to discuss a UI/UX project with you.',
        ];

        $response = $this->postJson(route('contact.send'), $payload);

        $response
            ->assertOk()
            ->assertJson([
                'message' => 'Thanks, Jane Doe! Your message has been sent.',
            ]);

        Mail::assertSent(ContactMessageMail::class, function (ContactMessageMail $mail) use ($payload) {
            return $mail->hasTo('noahdzakki12@gmail.com')
                && $mail->hasReplyTo($payload['email'], $payload['full_name'])
                && $mail->contactData['subject'] === $payload['subject']
                && $mail->contactData['message'] === $payload['message'];
        });
    }

    public function test_contact_form_requires_all_fields(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.send'), [
            'full_name' => 'Jane Doe',
            'email' => 'invalid-email',
        ]);

        $response
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['email', 'phone', 'subject', 'message']);

        Mail::assertNothingSent();
    }
}
