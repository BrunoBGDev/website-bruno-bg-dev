<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
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

        if ($validator->fails()) {
            return redirect()
                ->route('locale', [
                    'locale' => $request->route('locale'),
                ])
                ->withFragment('contact')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $contact = Contact::create($validated);

        Mail::to(config('mail.contact_notification.address'))
            ->send(new ContactReceived($contact));

        return redirect()
            ->route('locale', [
                'locale' => $request->route('locale'),
            ])
            ->withFragment('contact')
            ->with('success', __('contact.messages.success'));
    }
}
