<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'email' => 'required|email',
                'sujet' => 'required',
                'message' => 'required',
            ]
        );
        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'dhiflaouisana21840266@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->nom,
                'subject' => $request->sujet,
                'body' => $request->message,
            ];
            \mail::contact('email-template', $mail_data, function ($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
            });
            return redirect()->back()->with('success', 'Email Sent');
        } else {
            return redirect()->back()->withInput()->with('error', 'check');
        }
    }

    public function isOnline($site = "https://youtube.com/")
    {
        if (@fopen($site, 'r')) {
            return true;
        } else {
            return false;
        }
    }
}
