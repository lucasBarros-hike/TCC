@extends('layouts.HtmlLogin')

@section('title')
Cadastro
@endsection

@section('standard')     
      <main>
        <div class="form-header">
                <h1>Criar conta</h1>
                <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        
        <form method='post' action={{route('realizarCadastro')}}>
        @csrf
        @method('post')
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
                <input type="password" id="" name="">
            </label>

            <input class="inline-btn" type="submit" value="Cadastrar" id="button">

            <div class="link">
              <p><a href="">Esqueci minha senha</a></p>
              <p>Já tem conta? <a href="{{route('viewLogin')}}">Entrar</a></p>
            </div>
            @if ($errors->any())
                <div>
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