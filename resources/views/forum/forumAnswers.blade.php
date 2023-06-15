@extends('layouts.Body')

@section('title')
Fórum
@endsection

@section('content')
<main class="forum-main-answers">
    <h1 class="titulo">Respostas</h1>

    <div class="forum-flex">
        <div class="forum-question">
            <div class="img">
                <img src="../images/pic-{{$post->user->id}}.jpg">
            </div>
            <div class="question">
                <div class="name">
                    <h3>{{ $post->user->name }}</h3>
                </div>
                <div class="assunto">
                    <h3>{{ $post->subject }}</h3>
                </div>
                <div class="pergunta">
                    <p> {{ $post->question }}</p>
                </div>
                
            </div>
            
            <div class="forum-btn">
                    <div class="option">
                        <div id="options-question-box" class="options-box" style="display: none;">
                            <ul>
                                <li><a href="#">Editar</a></li>
                                <li><a href="#">Excluir</a></li>
                                <li><a href="#">Denunciar</a></li>
                            </ul>
                        </div>
                        <button id="ellipsis-question-btn"><i class="fas fa-ellipsis-vertical"></i></button>
                        
                    </div>
                    <button id="responder-btn" class="inline-btn">Responder</button>
                
                </div>
        </div>

        <div id="resposta-box" class="user-answers" style="display: none">
            <form method="post" action="{{ route('publicarResposta', ['post_id' => $post->id])}}">
                @csrf
                @method('post')
                @auth
                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                @endauth
                <input type="hidden" id="question_id" name="post_id" value="{{ $post->id }}">
                <textarea class="form-control" rows="5" name="answer" id="answer" required></textarea>
                
                <div class="forum-btn">
                <button type="submit" class="inline-btn">Enviar</button>
            </form>
            </div>
        </div>

        <div class="forum-answers">
            @foreach($answers as $answer)
            <div class="forum-user">
                <div class="img">
                    <img src="../images/pic-{{$answer->user->id}}.jpg">
                </div>
                <div class="answers">
                    <div class="name">
                        <h3>{{$answer->user->name}}</h3>
                    </div>
                    <div class="assunto">
                        <p>{{ $answer->answer}}</p>
                    </div>
                    <div class="subforum-column text-small">
                        @php
                            $date = new DateTime($answer->created_at);
                            echo $date->format('H:i - d/m/Y');
                        @endphp
                        
                    </div>
                </div>
                        <div class="forum-btn">
                            <div class="option">
                                <div id="options-box" class="options-box" style="display: none;">
                                    <ul>
                                        <li><a href="#">Editar</a></li>
                                        <li><a href="#">Excluir</a></li>
                                        <li><a href="#">Denunciar</a></li>
                                    </ul>
                                </div>
                            <button id="ellipsis-btn"><i class="fas fa-ellipsis-vertical"></i></button>
                            </div>
                        
                            <div class="like">
                                <button><i class="fa-regular fa-heart"></i></button>
                                <!-- coração quando clicado:
                                <i class="fa-solid fa-heart"></i> -->
                            </div>
                        </div>
                       
            </div>
           
            @endforeach
        </div>
    </div>
</main>
    @if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection

