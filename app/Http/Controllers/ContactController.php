<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\EmailSchedule;;
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

    public function sendSchedule(Request $request)
    {
        $request->validate([
            'Nome' => 'required|string|max:255',
            'Contacto' => 'required|numeric',
            'Local' => 'required|string|max:255',
        ]);
        
        $data = [
            'nome' => $request->Nome,
            'contacto' => $request->Contacto,
            'servico' => $request->Servico,
            'local' => $request->Local,
            'detalhes' => $request->message,
        ];

        // Envie o email usando o Mailable
        Mail::to('llmagaia2@gmail.com')->send(new EmailSchedule($data));

        return redirect()->back()->with('success', 'Email enviado com sucesso!');

    }
}
