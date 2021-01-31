<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'message' => 'required',
        ]);

        Mail::to("glenuk@gmail.com")->send(new ContactMail($data['name'], $data['email'], $data['message']));
        return redirect('/')->with(["success" => "Message sent. Thank you!"]);
    }
}
