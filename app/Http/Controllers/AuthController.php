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
        if($request->input('password') == $request->input('password_repeat'))
        {
            $dados = $request->validate([
                'name' => 'required|string|unique:users,name',
                'email' => 'required|email|ends_with:@etec.sp.gov.br|unique:users,email',
                'password' => 'required'
             ]);
    
             User::create($dados);
             return redirect('/login');
        }
        else {return redirect('/cadastro');}
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
