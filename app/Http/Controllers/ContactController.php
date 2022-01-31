<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $req)
    {
        // validate
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message
        ];
        Mail::to('kontakt@opengateweb.com')->send(new ContactMail($data));
        return 'Thanks for reaching out us!';
    }
}
