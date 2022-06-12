<?php

namespace App\Http\Controllers;
use App\Models\test;
use App\Models\question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function ajouterquestion(Request $request,Test $Test,$id)
    {
        $post = new Question();
        $post->question = $request->nom;
        $Test=Test::find($id);
        $post->test_id=$Test->id;
          
           if ($post->save()) {
            return redirect()->route('traitertest',$id);
        }
    }
   
      public function traiterquestion($id,Test $test)
    {   
        $Test=Test::find($id);
        $Question=Test::find($id)->question;
        return view('AdminF.traitertest', compact('Test','Question'));
    }
    public function   modifierquestion ($id,Request $request,Question $question){
        $nom = $request->nom;
        $update = [
        'question' =>$nom,];
        $id1=$request->id;
        $question = Question::find($id);
        $question->update($update);
        return redirect()->route('traitertest',$id1);     

    }
    public function destroy($id)
    {
        $Quiz = Question::find($id);
        $Quiz->delete();
        return redirect()->route('AdminDashboard/cour');
    }
}
