<?php

namespace App\Http\Controllers;

use App\Models\ChatPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatPostController extends Controller
{
    public function mostrarMaterias(){
        return view('subjects.subjects');
    }

    public function mostrarChat(Request $request, $subject){
        $messages = ChatPost::orderBy('created_at')
                ->with('user')
                ->get();

        return view('subjects.subjectsChat', ['subject' => $subject, 'messages' => $messages]);
    }

    public function publicarMensagem(Request $request)
    {
        $user_id = $request->input('user_id');
        if($user_id == Auth::user()->id)
        {
            $dados = $request->validate([
                'user_id' => "integer|exists:users,id",
                'message' => 'string',
                'subject' => 'string'
            ]);

            ChatPost::create($dados);

            return redirect()->back();
        }
        else {return redirect('/materias');}
    }

}
