<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Models\User;

class UserController extends Controller
{
    public function index(): View {
        return View('signUp');
    }

    public function cadastrar(Request $request){
        $dados = $request->validate([
            'username' => 'string|required|max:255',
            'email' => 'string|required|max:255',
            'password' => 'string|required|max:255',
            'passwordRepeat' => 'string|required|max:255',
        ]);

        User::create($dados);

        return Redirect::route('/');
    }
}
