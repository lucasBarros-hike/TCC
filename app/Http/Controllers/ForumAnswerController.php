<?php

namespace App\Http\Controllers;

use App\Models\ForumAnswer;
use Illuminate\Http\Request;

class ForumAnswerController extends Controller
{
    public function mostrarRespostasForum()
    {
        $posts = ForumAnswer::orderByDesc('created_at')
                ->with('user')
                ->get();

        return view('forum.forum', ['posts' => $posts]);
    }
}
