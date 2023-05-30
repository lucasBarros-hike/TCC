@extends('layouts.Body')

@section('title')
Matérias
@endsection

@section('content')
<main>
<section class="materia">

  <h1 class="titulo">Materias</h1>

  <div class="box-container">
     <div class="box">
        <div class="thumb">
           <img src="images/thumb-1.png" alt="">
        </div>
        <h3 class="title">Programação Web</h3>
        <a href="{{ route('viewChat', [$subject = 'programacao-web'])}}" class="inline-btn">Entrar</a>
     </div>
     <div class="box">
      <div class="thumb">
         <img src="images/thumb-8.png" alt="">
      </div>
         <h3 class="title">Banco de dados</h3>
         <button id="banco-de-dados-btn" class="inline-btn">Entrar</button>
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
               <img src="images/thumb-9.png" alt="">
            </div>
               <h3 class="title">Programação mobile</h3>
               <a href="playlist.html" class="inline-btn">Entrar</a>
         </div>
  </div>
  
</section>
</main>
@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection