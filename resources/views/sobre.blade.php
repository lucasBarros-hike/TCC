@extends('layouts.Body')

@section('title')
Sobre
@endsection

@section('content')
<main>
<div class="home">
    <div class="principal">
      <div class="home-img">
        <img src="./images/about-us.png" alt="" srcset="">
      </div>
      <div class="home-slogan">
        <p>Aprenda a programar de forma fácil e divertida com a Volpe! Nossa plataforma educacional oferece recursos interativos e práticos para ajudá-lo a desenvolver suas habilidades de programação.</p>
      </div>
    </div>
</div>
<div class="card-about">
  <div class="card">
    <h3 class="card-title">Missão</h3>
    <p class="card-text">Fornecer aos alunos da ETEC uma plataforma educacional inovadora e de alta qualidade, para ajudá-los a desenvolver suas habilidades em programação e alcançar o sucesso acadêmico e profissional. </p>
  </div>
  <div class="card">
    <h3 class="card-title">Visão</h3>
    <p class="card-text">Ser reconhecido como um site educacional líder e confiável, que apoia o aprendizado e o desenvolvimento de habilidades em programação para estudantes da ETEC de desenvolvimento de sistemas.</p>
  </div>
  <div class="card">
    <h3 class="card-title">Valores</h3>
    <p class="card-text">Qualidade<br/>
                         Inovação<br/>
                         Responsabilidade<br/> 
                         Comunidade<br/>
                         Excelência</p>
  </div>
</div>
</main>

@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection