<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Message $messages)
    {
        $messages = Message::all();
        return view('AdminF.message', compact('messages'));
    }

    public function create(Request $request)
    {
        $post = new Message();
        $post->nom = $request->nom;
        $post->mail = $request->mail;
        $post->sujet = $request->sujet;
        $post->message = $request->message;
        
        if ($post->save()) {
            return redirect()->route('AdminDashboard/message');
        }
    }


    public function destroy($id)
    {
        $messages = Message::find($id);
        $messages->delete();
        return redirect()->route('AdminDashboard/message');
    }
}

