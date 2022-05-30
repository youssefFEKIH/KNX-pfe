<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailMail;

class EmailController extends Controller
{
    public function index()
    {
        return view('emailsend');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message
        );

        Mail::to('dhiflaouisana21840266@gmail.com')->send(new EmailMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }

}

