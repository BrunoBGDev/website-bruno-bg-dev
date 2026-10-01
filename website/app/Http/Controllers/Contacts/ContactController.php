<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    'unique:contacts,email',
                ],
                'subject' => ['required', 'string', 'max:255'],
                'message' => ['required', 'string', 'max:5000'],
            ],
            [
                'email.unique' => __('contact.validation.email.unique'),
            ]
        );

        $contact = Contact::create($validated);

        Mail::to(config('mail.contact_notification.address'))
            ->send(new ContactReceived($contact));

        return redirect()
            ->back()
            ->withFragment('contact')
            ->with('success', __('contact.messages.success'));
    }
}
