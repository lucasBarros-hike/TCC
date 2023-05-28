<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\View\View;
class AuthController extends Controller
{
    public function mostrarCadastro(): View
    {
        return View('signUp');
    }

    public function realizarCadastro(Request $request)
    {
         $dados = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|ends_with:@etec.sp.gov.br',
            'password' => 'required'
         ]);

         User::create($dados);
         return redirect('/login');

    }

    public function mostrarLogin(): View
    {
        return view('login');
    }

    public function realizarLogin()
    {
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ])->validate();

        if(auth()->attempt(request()->only(['email','password']))){
            return redirect('/');
        }

        return redirect()->back()->withErrors(['email' => 'Informações Erradas!']);
    }

    public function realizarLogout()
    {
        auth()->logout();

        return redirect('/');
    }
}
