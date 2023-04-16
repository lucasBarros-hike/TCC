@extends('layouts.Html')

@section('title')
Login
@endsection

@section('standard')
<div class="container">
        <form id="myForm" method="post" action="{{ route('login.login')}}" class="form small">
          @csrf
          <h2>Login</h2>
            <div class="input-box">
                <label for="email">Email: </label>
                <input type="text" id="email" name="username" required>
            </div>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
            <div class="input-box">
                <label for="password">Senha: </label>
                <input type="password" id="password" name="password" required>
            </div>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
            <div class="forget">
                <label for=""><input type="checkbox">Lembrar me?</label>
            </div>
            <div class="button">
            <button type="submit" class="option-btn">Entrar</button>
            </div>
          <div class="link">
            <p><a href="">Esqueci minha senha</a></p>
            <p>Não tem conta? <a href="cadastro.html">Cadastre-se</a></p>
          </div>
        </form>
      </div>
@endsection
