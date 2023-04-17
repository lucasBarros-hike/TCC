@extends('layouts.Body')

@section('title')
Menu
@endsection

@section('content')



<main class="home">
    <div class="principal">
      <div class="home-img">
        <img src="./images/home.png" alt="" srcset="">
      </div>
      <div class="home-slogan">
        <p>Aprenda a programar de forma fácil e divertida com a Volpe! Nossa plataforma educacional oferece recursos interativos e práticos para ajudá-lo a desenvolver suas habilidades de programação.</p>
      </div>
    </div>
</main>
<section class="materia">

  <h1 class="titulo">Materias</h1>

  <div class="box-container">
     <div class="box">
        <div class="thumb">
           <img src="images/thumb-1.png" alt="">
        </div>
        <h3 class="title">Programação web</h3>
        <a href="{{ route('subjectsChat') }}" class="inline-btn">Entrar</a>
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
          <a href="{{url('/materias')}}"  class="inline-option-btn">Ver mais</a>
         </div>
</section>
<div class="forum-principal">
<h1 class="titulo">Forum</h1>
  <div class="subforum">
            
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
    </div>
</div>
@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection