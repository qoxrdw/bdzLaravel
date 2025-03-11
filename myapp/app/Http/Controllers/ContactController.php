<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);


         Mail::to('egorskorik398@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->route('contact.index')->with('success', 'Сообщение отправлено!');
    }
}
