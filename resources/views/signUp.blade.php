@extends('layouts.HtmlLogin')

@section('title')
Cadastro
@endsection

@section('standard')
<!-- <div class="container">
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
          
        </form>
      </div> -->
          
     
      <main>
        <h1>Criar conta
        <div class="icon">
            <div id="toggle-btn" class="fas fa-sun"></div>
          </div>
        </h1>

        
        
        <form action="">
            <label for="name">
                <span>Nome</span>
                <input type="text" id="name" name="name">
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="password">
            </label>
            <label for="password">
                <span>Repetir senha</span>
                <input type="password" id="password" name="password">
            </label>

            <input class="inline-btn" type="submit" value="Cadastrar" id="button">

            <div class="link">
              <p><a href="">Esqueci minha senha</a></p>
              <p>Já tem conta? <a href="{{url('/login')}}">Entrar</a></p>
            </div>
        </form>
        
    </main>
    
    <section class="images">
        <img src="./images/login.png" alt="Mobile">
        <div class="circle"></div>
    </section>
@endsection