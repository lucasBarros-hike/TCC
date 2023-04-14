@extends('layouts.Body')

@section('content')
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
         <div class="box">
            <div class="thumb">
               <img src="images/thumb-5.png" alt="">
            </div>
               <h3 class="title">Programação mobile</h3>
               <a href="playlist.html" class="inline-btn">Entrar</a>
         </div>
         <div class="box">
            <div class="thumb">
               <img src="images/thumb-2.png" alt="">
            </div>
               <h3 class="title">Analise projeto de sistemas</h3>
               <a href="playlist.html" class="inline-btn">Entrar</a>
         </div>
         <div class="box">
            <div class="thumb">
               <img src="images/thumb-4.png" alt="">
            </div>
               <h3 class="title">Internet e protocolos</h3>
               <a href="playlist.html" class="inline-btn">Entrar</a>
         </div>
         <div class="box">
            <div class="thumb">
               <img src="images/thumb-9.png" alt="">
            </div>
               <h3 class="title">Segurança da informação</h3>
               <a href="playlist.html" class="inline-btn">Entrar</a>
         </div>
         <div class="box">
            <div class="thumb">
               <img src="images/thumb-7.png" alt="">
            </div>
               <h3 class="title">Design digital</h3>
               <a href="playlist.html" class="inline-btn">Entrar</a>
      </div>

     

  </div>

</section>
@endsection