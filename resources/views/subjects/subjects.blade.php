@extends('layouts.Body')

@section('title')
Matérias
@endsection

@section('content')
<main>
<section class="materia">

  <h1 class="titulo">Materias</h1>

  <div class="box-container">
   @foreach($subjects as $subject)
   <div class="box">
      <div class="thumb">
         <img src="images/materias/{{$subject->banner_directory}}" alt="Imagem da matéria de {{$subject->subject}}">
      </div>
      <h3 class="title">{{$subject->subject}}</h3>
      <a href="{{ route('viewChat', [$subject_id = "$subject->id"])}}" class="inline-btn">Entrar</a>
   </div>
   @endforeach
  </div>
  
</section>
</main>
@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection