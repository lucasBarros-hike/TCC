@extends('layouts.HtmlLogin')

@section('title')
Login
@endsection

@section('standard')
<!-- <div class="container">
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
            <p>Não tem conta? <a href="{{url('/cadastro')}}">Cadastre-se</a></p>
          </div>
        </form>
      </div> -->

      <main>
      <div class="form-header">
                <h1>Login</h1>
                <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <form action="">

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="password">
            </label>

            <input class="inline-btn" type="submit" value="Entrar" id="button">

            <div class="link">
              <p><a href="">Esqueci minha senha</a></p>
              <p>Não tem conta? <a href="{{url('/cadastro')}}">Cadastrar</a></p>
            </div>
        </form>
    </main>
    <section class="images">
        <img src="./images/login.png" alt="Mobile">
        <div class="circle"></div>
    </section>
@endsection
