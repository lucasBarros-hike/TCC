@extends('layouts.Html')

@section('title')
Cadastro
@endsection

@section('standard')
<div class="container">
        <form method="POST" id="myForm" class="form" action="{{ route('cadastro.store') }}">
          @csrf
          <h2>Cadastro</h2>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="input-box">
                <label for="username">Nome: </label>
                <input type="text" name="username" id="username" name="username" value="{{ old('username') }}" required>
            </div>
            <div class="input-box">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="input-box">
                <label for="password">Senha: </label>
                <input type="password" name="password" id="password" name="password" value="{{ old('password') }}" required>
            </div>
            <div class="input-box">
                <label for="password">Repetir senha: </label>
                <input type="password" name="password_confirmation" id="password" name="password" value="{{ old('password_confirmation') }}" required>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Lembrar me?</label>
            </div>
            <div class="button">
                <button type="submit" class="option-btn">Cadastrar</button>
            </div>
          <div class="link">
            <p><a href="">Esqueci minha senha</a></p>
            <p>Já tem conta? <a href="login.html">Entrar</a></p>
          </div>
        </form>
      </div>
@endsection