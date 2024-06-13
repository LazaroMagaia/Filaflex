<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('llmagaia2@gmail.com')->send(new ContactMail($details));

        return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}
