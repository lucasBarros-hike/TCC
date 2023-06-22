@extends('layouts.HtmlLogin')

@section('title')
Quiz
@endsection

@section('standard')
      <main>
      <div class="form-header">
                <h1>Login</h1>
                <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <form method='post' action={{route('realizarLogin')}}>
        @csrf
        @method('post')
            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="password">
            </label>
            <div class="entrar">
            <button class="btn" type="submit" id="button">Entrar</button>
            </div>
            <div class="link">
              <p><a href="">Esqueci minha senha</a></p>
              <p>Não tem conta? <a href="{{route('viewCadastro')}}">Cadastrar</a></p>
            </div>
            @if ($errors->any())
                <div class="erro-login">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </main>
    <section class="images">
        <img src="./images/login.png" alt="Mobile">
        <div class="circle"></div>
    </section>
@endsection
