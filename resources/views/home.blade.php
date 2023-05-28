@extends('layouts.Body')

@section('title')
Menu
@endsection

@section('content')


<main>
<div class="home">
    <div class="principal">
      <div class="home-img">
        <img src="./images/home.png" alt="" srcset="">
      </div>
      <div class="home-slogan">
        <p>Aprenda a programar de forma fácil e divertida com a Volpe! Nossa plataforma educacional oferece recursos interativos e práticos para ajudá-lo a desenvolver suas habilidades de programação.</p>
      </div>
    </div>
</div>
<section class="materia">

  <h1 class="titulo">Materias</h1>

  <div class="box-container">
     <div class="box">
        <div class="thumb">
           <img src="images/thumb-1.png" alt="">
        </div>
        <h3 class="title">Programação web</h3>
        <a href="{{ route('viewChat') }}" class="inline-btn">Entrar</a>
     </div>
     <div class="box">
      <div class="thumb">
         <img src="images/thumb-8.png" alt="">
      </div>
         <h3 class="title">Banco de dados</h3>
         <a href="playlist.html" class="inline-btn">Entrar</a>
      </div>
      <div class="box">
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
         </div>
            <h3 class="title">Desenvolvimento de sistemas</h3>
            <a href="playlist.html" class="inline-btn">Entrar</a>
          </div>
    </div>
         <div class="view-more">
          <a href="{{route('viewMaterias')}}"  class="inline-option-btn">Ver mais</a>
         </div>
</section>
<div class="forum-principal">
<h1 class="titulo">Forum</h1>
<div class="subforum">
    @foreach($posts as $post)
    @if($loop->iteration <= 8)
    <div class="subforum-row">
        <div class="subforum-icon subforum-column">
            @if ($post->subject == 'HTML')
            <i class="fa-brands fa-html5" style="color: #E34F26;"></i>

            @elseif ($post->subject == 'CSS')
            <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>

            @elseif ($post->subject == 'JavaScript')
            <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>

            @elseif ($post->subject == 'PHP')
            <i class="fa-brands fa-php" style="color: #4F5D95;"></i>

            @endif
        </div>
        <div class="subforum-column">
            <h4><a href="#">{{ $post->user->name }}</a></h4>
            <p class="text">{{ $post->question }}</p>
        </div>
        <div class="subforum-column">
            <span class="text">4 Respostas</span>
        </div>
        <div class="subforum-column text-small">
            <b><a href="">Ultima postagem</a></b><br/>
            <a href="">{{ $post->user->name }}</a> 
            <br>
            @php
                date_default_timezone_set("America/Fortaleza");
                $date = new DateTime($post->created_at);
                echo $date->format('H:i - d/m/Y'); // 31.07.2012
            @endphp
        </div>
    </div>
    @endif
    @endforeach()
    </div>
    <section class="materia">
    <div class="view-more">
        <a href="{{route('viewForum')}}"  class="inline-option-btn">Ver mais</a>
    </div>
    </section>
</div>
</main>
@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection