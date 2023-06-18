<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LikesController extends Controller
{
    public function curtirResposta($post_id, $answer_id, Request $request)
    {
        $user_id = $request->input('user_id');
        $answer = $request->input('answer_id');
        if($user_id == Auth::user()->id)
        {
            if($answer == $answer_id){
                $dados = $request->validate([
                    'user_id' => "integer|exists:users,id",
                    'answer_id' => "integer|exists:forum_answers,id",
                ]);
                Likes::create($dados);

                return redirect()->back();
            }
        }
        else {return redirect('/');}
    }

    public function descurtirResposta($post_id, $answer_id, $user_id)
    {
        $like = Likes::where('user_id', $user_id)->where('answer_id', $answer_id)->first();
        $like->delete();
        return redirect()->back();
    }
}
