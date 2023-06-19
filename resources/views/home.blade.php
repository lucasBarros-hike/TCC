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
    @foreach($subjects as $subject)
    @if($loop->iteration <= 4)
    <div class="box">
       <div class="thumb">
          <img src="images/materias/{{$subject->banner_directory}}" alt="Imagem da matéria de {{$subject->subject}}">
       </div>
       <h3 class="title">{{$subject->subject}}</h3>
       <a href="{{ route('viewChat', [$subject_id = "$subject->id"])}}" class="inline-btn">Entrar</a>
    </div>
    @endif
    @endforeach
  </div>
  <div class="view-more">
  <a href="{{ route('viewMaterias')}}"  class="inline-option-btn">Ver mais</a>
  </div>
</section>
<div class="forum-principal">
<h1 class="titulo">Forum</h1>
<div class="subforum">
    @foreach($posts as $post)
    @if($loop->iteration <= 8)
    <div class="subforum-row">
        <div class="subforum-icon subforum-column">
            @if ($post->language == 'HTML')
            <i class="fa-brands fa-html5" style="color: #E34F26;"></i>

            @elseif ($post->language == 'CSS')
            <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>

            @elseif ($post->language == 'JavaScript')
            <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>

            @elseif ($post->language == 'PHP')
            <i class="fa-brands fa-php" style="color: #4F5D95;"></i>

            @endif
        </div>
        <div class="subforum-column">
            <h4><a href="{{route('viewProfile', ["profile" => $post->user->id])}}">{{ $post->user->name }}</a></h4>
            <p class="text">{{ $post->subject }}</p>
        </div>
        <div class="subforum-column">
            <span class="text">
                @php 
                    $answers = App\Models\ForumAnswer::where('post_id', '=', $post->id)->count();
                    if($answers == 1){
                        echo $answers . " Resposta";
                    }
                    else{
                        echo $answers . " Respostas";
                    }
                @endphp
            </span><br/>
            <span><a href="{{ route('viewForumAnswers', ['post_id' => $post->id])}}">Responder</a></span>
        </div>
        <div class="subforum-column text-small">
            @php
                $date = new DateTime($post->created_at);
                echo $date->format('H:i - d/m/Y');
            @endphp
        </div>
    </div>
    @endif
    @endforeach
    </div>
    
    <div class="view-more">
        <a href="{{route('viewForum')}}"  class="inline-option-btn">Ver mais</a>
    </div>
    
</div>
</main>
@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection