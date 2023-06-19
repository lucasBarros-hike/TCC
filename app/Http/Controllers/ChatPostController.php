<?php

namespace App\Http\Controllers;

use App\Models\ChatPost;
use App\Models\Files;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatPostController extends Controller
{
    public function mostrarChat(Request $request, $subject_id){
        $subject = Subject::where('id',$subject_id)->first();

        $messages = ChatPost::orderBy('created_at')
                ->with(['user', 'subject'])
                ->where('subject_id',$subject_id)
                ->get();

        $files = Files::orderBy('created_at')
                ->with(['subject'])
                ->where('subject_id',$subject_id)
                ->get();

        return view('subjects.subjectsChat', ['subject' => $subject, 'messages' => $messages, 'files' => $files]);
    }

    public function publicarMensagem(Request $request,  $subject_id)
    {
        $user_id = $request->input('user_id');
        $subject = $request->input('subject_id');
        if($user_id == Auth::user()->id)
        {
            if($subject == $subject_id){
            $dados = $request->validate([
                'user_id' => "integer|exists:users,id",
                'subject_id' => "integer|exists:subjects,id",
                'message' => 'string',
                'subject' => 'string'
            ]);
            
            ChatPost::create($dados);

            return redirect()->back();
            }
        }
        else {return redirect('/materias');}
    }

    public function apagarMensagem(ChatPost $post){
        $post->delete();
        return redirect()->back();
    }
}
