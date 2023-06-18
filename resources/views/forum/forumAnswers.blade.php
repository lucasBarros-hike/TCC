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
                    <div class=" text-small">
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
                                @isset(auth()->user()->id)
                                    @if(auth()->user()->id == $answer->user->id)
                                        <li><button id="editar-btn">Editar</button></li>
                                        <li><form method="POST" action="{{ route("excluirResposta", ["post_id" => $post->user->id, "answer" => $answer->id] )}}">
                                        @csrf
                                        @method("delete")
                                            <button type="submit">Excluir</button>
                                        </form></li>
                                    @endif
                                @endisset
                                <li><a href="#">Denunciar</a></li>
                            </ul>
                        </div>
                    <button id="ellipsis-btn"><i class="fas fa-ellipsis-vertical"></i></button>
                    </div>
                
                    <div class="like">
                        @php 
                            $likes = DB::table('likes')->where('answer_id', 'LIKE', $answer->id)->count();
                            if($likes > 0)
                            {
                                //NÚMERO DE CURTIDAS AQUI
                                echo "<h1>" . DB::table('likes')->where('answer_id', 'LIKE', $answer->id)->count() . "</h1>";
                            }
                        @endphp
                        @if(DB::table('likes')->where('user_id', 'LIKE', auth()->user()->id)->where('answer_id', 'LIKE', $answer->id)->get("user_id")->isEmpty())
                            <form method="POST" action="{{ route("curtirResposta", ["post_id" => $post->id, "answer_id" => $answer->id])}}">
                            @csrf
                                @auth
                                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                                @endauth
                                <input type="hidden" id="answer_id" name="answer_id" value="{{ $answer->id }}">
                                <button type="submit"><p></p><i class="fa-regular fa-heart"></i></button>
                            </form>
                        @else
                            <form method="POST" action="{{ route("descurtirResposta", ["post_id" => $post->id, "answer_id" => $answer->id, 'user_id' => auth()->user()->id])}}">
                                @csrf
                                    <button type="submit"><p></p><i class="fa-solid fa-heart"></i></button>
                                </form>
                        @endif
                    </div>
                </div>
            </div>

            <div id="edita-box" class="user-answers" style="display: none">
                <form method="POST" action="{{ route("editarResposta", ["post_id" => $post->user->id, "answer" => $answer->id] )}}">
                @csrf
                @method("put")
                    <textarea class="form-control" rows="5" name="answer" id="answer" required>{{$answer->answer}}</textarea>
                    <button type="submit" class="inline-btn">Editar</button>
                </form>
            </div>
           
            @endforeach
        </div>
    </div>
</main>
    @if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection

