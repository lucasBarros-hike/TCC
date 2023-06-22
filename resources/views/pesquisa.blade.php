@extends('layouts.Body')

@section('title')
{{ $search }}
@endsection

@section('content')

<main>
@if ($filter == 'usuarios')
<div class="search">
  <h1 class="titulo">Usuários</h1>
  @foreach($results as $user)
    <div class="search-user">
        <div class="img">
            <img src="{{ $user->profilePicture }}">
        </div>
        <div class="search-answers">
            <div class="name">
                <h3><a href="">{{ $user->name }}</a></h3>
            </div>
            <div class="assunto">
                <p>Classificação Geral: </p>
            </div>
        </div>
    </div>  
  @endforeach
  </div>

            

@elseif ($filter == 'materias')
<div class="search">
<h1 class="titulo">Materias</h1>
        <div class="box-container">
  @foreach($results as $subject)
    
          <div class="box">
              <div class="thumb">
                <img src="images/materias/{{$subject->banner_directory}}" alt="Imagem da matéria de {{$subject->subject}}">
              </div>
              <h3 class="title">{{$subject->subject}}</h3>
              <a href="{{ route('viewChat', [$subject_id = "$subject->id"])}}" class="inline-btn">Entrar</a>
          </div>
        
  @endforeach
    </div>
  </div>
  
@elseif ($filter == 'perguntasForum')

<div class="search">
<div class="search-subforum-row">
@foreach($results as $post)
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
@endforeach
</div>
</div>

@endif
</main>
@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection