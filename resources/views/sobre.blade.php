@extends('layouts.Body')

@section('title')
Sobre
@endsection

@section('content')

<main class="home">
    <div class="principal">
      <div class="home-img">
        <img src="./images/about-us.png" alt="" srcset="">
      </div>
      <div class="home-slogan">
        <p>Aprenda a programar de forma fácil e divertida com a Volpe! Nossa plataforma educacional oferece recursos interativos e práticos para ajudá-lo a desenvolver suas habilidades de programação.</p>
      </div>
    </div>
</main>
<div class="card-about">
  <div class="card">
    <h3 class="card-title">Missão</h3>
    <p class="card-text">A Volpe se dedica a fornecer aos alunos da ETEC de desenvolvimento de sistemas uma plataforma educacional inovadora e de alta qualidade, para ajudá-los a desenvolver suas habilidades em programação e alcançar o sucesso acadêmico e profissional. Buscamos fornecer conteúdo preciso, confiável e relevante, promovendo um ambiente de aprendizado colaborativo e interativo, e ajudando a preparar nossos alunos para uma carreira bem-sucedida em tecnologia.</p>
  </div>
  <div class="card">
    <h3 class="card-title">Visão</h3>
    <p class="card-text">Ser reconhecido como um site educacional líder e confiável, que apoia o aprendizado e o desenvolvimento de habilidades em programação para estudantes da ETEC de desenvolvimento de sistemas.</p>
  </div>
  <div class="card">
    <h3 class="card-title">Valores</h3>
    <p class="card-text">Qualidade - Comprometemo-nos a fornecer um conteúdo de alta qualidade e recursos educacionais para garantir que os estudantes possam alcançar o seu melhor potencial.

Inovação - Estamos sempre buscando novas e melhores maneiras de fornecer recursos educacionais de alta qualidade para nossos usuários, e buscamos inovar em nossos métodos de ensino.

Responsabilidade - Comprometemo-nos a fornecer conteúdo educacional preciso e confiável para nossos usuários, e a manter uma comunicação transparente e eficaz com nossos alunos.

Comunidade - Valorizamos o poder da comunidade em nosso site, promovendo a interação dos alunos entre si, e incentivando a colaboração e o compartilhamento de conhecimento entre os usuários.

Excelência - Buscamos a excelência em tudo o que fazemos, desde a qualidade do nosso conteúdo até a experiência do usuário em nosso site.</p>
  </div>
</div>


@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection