@extends('layouts.Body')

@section('title')
{{ $search }}
@endsection

@section('content')

<main>
@if ($filter == 'usuarios')
<div class="search">
  @foreach($results as $user)
    
          <h1 class="titulo">Usuários</h1>
            <div class="search-user">
                <div class="img">
                    <img src="../images/pic-1.jpg">
                </div>
                <div class="search-answers">
                    <div class="name">
                        <h3><a href="">{{ $user->name }}</a></h3>
                    </div>
                    <div class="assunto">
                        <p>Estudante</p>
                    </div>
                </div>
            </div>
            <div class="search-user">
                <div class="img">
                    <img src="../images/pic-1.jpg">
                </div>
                <div class="search-answers">
                    <div class="name">
                        <h3><a href="">{{ $user->name }}</a></h3>
                    </div>
                    <div class="assunto">
                        <p>Estudante</p>
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
@foreach($results as $forum_post)
  
  
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-php" style="color: #4F5D95;"></i>
                </div>
                <div class="subforum-column">
                  <h4><a href=""></a></h4>
                  <p class="text">{{ $forum_post->question }}</p>
                </div>
                <div class="subforum-column">
                    <span class="text">
                    Respostas 0
                    </span><br/>
                    <span><a href="">Ver Respostas</a></span>
                </div>
                <div class="subforum-column text-small">
                   data
                </div>
                

                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-php" style="color: #4F5D95;"></i>
                </div>
                <div class="subforum-column">
                  <h4><a href=""></a></h4>
                  <p class="text">{{ $forum_post->question }}</p>
                </div>
                <div class="subforum-column">
                    <span class="text">
                    Respostas 0
                    </span><br/>
                    <span><a href="">Ver Respostas</a></span>
                </div>
                <div class="subforum-column text-small">
                   data
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