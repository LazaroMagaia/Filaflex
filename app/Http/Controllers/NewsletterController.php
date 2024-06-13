<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();
        return redirect()->back()->with('success', 'You have been successfully subscribed to our newsletter.');
    }
}
