<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function create(){
        return view('pages.contact');
    }

    public function sendMessage(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('dammy4did@gmail.com')->send(new ContactFormMail($data));

        return redirect('/contact_us')->with('message', 'Thanks, Message Well Received!');

    }
}
