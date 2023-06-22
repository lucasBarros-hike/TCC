<?php

namespace App\Http\Controllers;

use App\Models\ForumAnswer;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumAnswerController extends Controller
{
    public function mostrarRespostasForum($post_id)
    {
        $post = ForumPost::where('id',$post_id)->first();
        
        $answers = ForumAnswer::orderByDesc('created_at')
                ->with(['user', 'post'])
                ->where('post_id',$post_id)
                ->get();

        return view('forum.forumAnswers', ['post' => $post, 'answers' => $answers]);
    }

    public function publicarResposta($post_id, Request $request)
    {
        $user_id = $request->input('user_id');
        $post = $request->input('post_id');
        if($user_id == Auth::user()->id)
        {
            if($post == $post_id){
                $dados = $request->validate([
                    'user_id' => "integer|exists:users,id",
                    'post_id' => "integer|exists:forum_posts,id",
                    'answer' => 'string',
                ]);
                ForumAnswer::create($dados);
                return redirect("/forum/$post_id");
            }
        }
        else {return redirect('/');}
    }

    public function editarResposta(ForumPost $post_id, ForumAnswer $answer)
    {
        $dados = request()->validate([
            'answer' => "string"
        ]);
        $answer->update($dados);
        $answer->wasEdited = true;
        $answer->save();
        return redirect()->back();
    }

    public function excluirResposta(ForumPost $post_id, ForumAnswer $answer)
    {
        $answer->delete();
        return redirect()->back();
    }
}
