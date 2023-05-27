@extends('layouts.Body')

@section('title')
Atividades
@endsection

@section('content')

<main>
<section class="atividade">

    <div class="ativ-header">
        <h1 class="titulo">Atividades</h1>

    </div>
    <form>
        <label for="assunto">Linguagem: </label>
            <select id="assunto" class="assunto" name="assunto">
                <option value="opcao1">CSS</option>
                <option value="opcao2">Javascript</option>
                <option value="opcao3">Python</option>
                <option value="opcao4">PHP</option>
            </select>
    </form>
    <div class="ativ-container">
        
        <div class="ativ-box">
            <div class="ativ-icon">
                <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>
            </div>
            <div class="ativ-content">
                <h3>Nome da atividade</h3>
                <span>10 pontos</span>
            </div>
        </div>

        <div class="ativ-box">
            <div class="ativ-icon">
                <i class="fa-brands fa-php" style="color: #4F5D95;"></i>
            </div>
            <div class="ativ-content">
                <h3>Nome da atividade</h3>
                <span>10 pontos</span>
            </div>
        </div>

        <div class="ativ-box">
            <div class="ativ-icon">
                <i class="fa-brands fa-css3-alt" style="color: #1572B6"></i>
            </div>
            <div class="ativ-content">
                <h3>Nome da atividade</h3>
                <span>10 pontos</span>
            </div>
        </div>

        <div class="ativ-box">
            <div class="ativ-icon">
                <i class="fa-brands fa-html5" style="color: #E34F26;"></i>
            </div>
            <div class="ativ-content">
                <h3>Nome da atividade</h3>
                <span>10 pontos</span>
            </div>
        </div>

        <div class="ativ-box">
            <div class="ativ-icon">
                <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>
            </div>
            <div class="ativ-content">
                <h3>Nome da atividade</h3>
                <span>10 pontos</span>
            </div>
        </div>

        <div class="ativ-box">
            <div class="ativ-icon">
                <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>
            </div>
            <div class="ativ-content">
                <h3>Nome da atividade</h3>
                <span>10 pontos</span>
            </div>
        </div>
    </div>
</section>
</main>


@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection