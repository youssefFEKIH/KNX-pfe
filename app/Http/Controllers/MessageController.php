<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Mail\reponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function showmessage(Message $messages)
    {
        $message = Message::all();
        return view('Admin.messages', compact('message'));
    }

    public function create(Request $request)
    {
        $post = new Message();
        $post->nom = $request->nom;
        $post->mail = $request->mail;
        $post->sujet = $request->sujet;
        $post->message = $request->message;
        
        if ($post->save()) {
            return redirect()->route('home');
        }
    }


    public function destroy($id)
    {
        $messages = Message::find($id);
        $messages->delete();
        return redirect()->route('AdminDashboard/messages');
    }
      
    public function reponsemail(Request $request)
    {   $id=$request->id;
        $reponse = Message::find($id);
        $from=$reponse->mail;
        $sujet=$request->sujet;
        $réponse=$request->réponse;
        $detail=[
             'title'=>$sujet,
             'body'=>$réponse,
        ];
      Mail::to($from)->send(new reponse($detail));
      return redirect()->route('AdminDashboard/messages')->with('success', 'Votre message a été envoyé avec succès.');
    }


}

