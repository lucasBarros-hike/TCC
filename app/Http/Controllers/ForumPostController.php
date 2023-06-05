<?php

namespace App\Http\Controllers;

use App\Models\ForumAnswer;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ForumPostController extends Controller
{
    public function mostrarForum()
    {
        $posts = ForumPost::orderByDesc('created_at')
                ->with('user')
                ->get();

        return view('forum.forum', ['posts' => $posts]);
    }

    public function publicarPergunta(Request $request)
    {
        $user_id = $request->input('user_id');
        if($user_id == Auth::user()->id)
        {
            $dados = $request->validate([
                'user_id' => "integer|exists:users,id",
                'question' => 'string',
                'subject' => 'string',
                'language' => 'string',
            ]);

            ForumPost::create($dados);

            return redirect('/forum');
        }
        else {return redirect('/');}
    }

    public function editarPergunta()
    {

    }

    public function alterarPergunta()
    {

    }

    public function excluirPergunta()
    {

    }
}
