<?php

namespace App\Http\Controllers;

use App\Models\ForumAnswer;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Likes;
use App\Models\ForumPost;

class ProfileController extends Controller
{
    public function mostrarPerfil($profile)
    {
    $user = User::where('id', $profile)->first();
        if ($user === null)
        {
            return redirect('home');
        }
        else
        {
            $likes = Likes::orderByDesc('created_at')
                ->with(['answer'])
                ->where('user_id', $user->id)
                ->get();

            $posts = ForumPost::orderByDesc('created_at')
                ->with(['user'])
                ->where('user_id', $user->id)
                ->get();

            $answers = ForumAnswer::orderByDesc('created_at')
                ->with(['user', 'post'])
                ->where('user_id',$user->id)
                ->get();

            return view('perfil', ['user' => $user, 'likes' => $likes, 'posts' => $posts, 'answers' => $answers]);
        };
    }

    public function mudarFotoPerfil($profile, Request $request)
    {
        $dados = request()->validate([
            'profilePicture' => "file|required"
        ]);

        $file = $dados['profilePicture'];
        $path = $file->store('capa','public');

        User::where('id', $profile)->update(['profilePicture' => "../storage/$path"]);

        return redirect()->back();
    }
}
