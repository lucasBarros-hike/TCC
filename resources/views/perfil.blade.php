@extends('layouts.Body')

@section('title')
Perfil
@endsection

@section('content')

<main>
<section class="user-profile">

   <h1 class="titulo">Perfil</h1>

   <div class="info">    
         <div class="user">

            <div class="user-pfp">
               
            <img src="{{$user->profilePicture}}" alt="">
            <h3>{{$user->name}}</h3>
            @if($user->id == auth()->user()->id)
            <form  enctype="multipart/form-data" action="{{ route("mudarFotoPerfil", ['profile' => $user->id])}}" method="POST">
            @csrf
            @method('put')
                <input type="file" name="profilePicture" id="profilePicture">
                <button type="submit">Mudar Foto de Perfil</button>
            </form>
            @endif
            <p>Estudante</p>
            </div>
            
            <div class="user-rank">
               <div class="flex">
               <i class="fa-solid fa-ranking-star"></i>
                  <div>
                     <span>30</span>
                     <p>Pontuação</p>
                  </div>
               </div>
               <div class="flex">
               <i class="fa-solid fa-book"></i>
               <div>
                  <span>3</span>
                  <p>Atividades Realizadas</p>
               </div>
               </div>
               <a href="{{route('viewAtividade')}}" class="inline-btn">Ver atividades</a>
            </div>

            <div class="user-rank">
               <div class="flex">
               <i class="fa-solid fa-medal"></i>
                  <div>
                     <span>15°</span>
                     <p>Classificação</p>
                  </div>
               </div>
                  <div class="flex-rank">
                     <div class="ranking">
                        <div class="ranking-header">
                           <p>Posição</p>
                           <p>Nome</p>
                           <p>Pontuação</p>
                        </div>
                     <div>
                        <p>1°</p>
                        <p>Lucas</p>
                        <p>180</p>
                     </div>
                     <div>
                        <p>2°</p>
                        <p>Amanda</p>
                        <p>140</p>
                     </div>
                     <div>
                        <p>3°</p>
                        <p>Maria</p>
                        <p>120</p>
                     </div>
                     <div>
                        <p>4°</p>
                        <p>João</p>
                        <p>100</p>
                     </div>
                     <div>
                        <p>5°</p>
                        <p>Leticia</p>
                        <p>80</p>
                     </div>
                     
                     <div class="ranking-user">
                        <p>15°</p>
                        <p>Mateus</p>
                        <p>30</p>
                     </div>

                     </div>
                  </div>
               
            </div>
            
         </div>
         

         <div class="box-container">
   <div class="box">
      <div class="flex">
         <i class="fas fa-bookmark"></i>
         <div>
            <span>{{ $files->count( )}}</span>
            <p>Arquivos Salvos</p>
         </div>
      </div>
      <a href="#" class="inline-btn" onclick="toggleCard('saved-files')">Ver Arquivos Salvos</a>
      
   </div>

   <div class="box">
      <div class="flex">
         <i class="fas fa-heart"></i>
         <div>
            <span>{{ $likes->count() }}</span>
            <p>Curtidos</p>
         </div>
      </div>
      <a href="#" class="inline-btn" onclick="toggleCard('liked-posts')">Ver Curtidos</a>
      
   </div>

   <div class="box">
      <div class="flex">
         <i class="fas fa-comment"></i>
         <div>
            <span>{{ $posts->count() + $answers->count() }}</span>
            <p>Comentários</p>
         </div>
      </div>
      <a href="#" class="inline-btn" onclick="toggleCard('comments')">Ver Comentários</a>
   </div>
</div>
</section>
<section class="user-profile">
    <div class="card-content" id="liked-posts" style="display: none;"> 
        <div class="liked-pfp">
        @if(count($likes) === 0)
            <h1 class="aviso-pfp">Sem curtidas</h1>
        @else
            @foreach($likes as $liked)
            <div class="forum-user">
                <div class="img">
                    <img src="{{ $liked->answer->user->profilePicture}}">
                </div>
                <div class="answers">
                    <div class="name">
                        <h3><a href="{{route('viewProfile', ["profile" => $liked->user->id])}}">{{ $liked->answer->user->name }}</a></h3>
                    </div>
                    <div class="assunto">
                        <p>{{ $liked->answer->answer }}</p>
                    </div>
                    <div class=" text-small">
                        @php
                            $date = new DateTime($liked->created_at);
                            echo "Curtido em " . $date->format('d/m/Y - H:i');
                        @endphp  
                    </div>
                </div>
                <div class="forum-btn">
                    <a href="{{ route('viewForumAnswers', ['post_id' => $liked->answer->post_id])}}" class="btn">Visualizar</a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

      <div class="card-content" id="saved-files" style="display: ;">
         <div class="files-pfp">
            @foreach($files as $file)
                <div class="message-file">
                <i class="fa-regular fa-folder"></i>
                    <p>{{ $file->file->name }}</p>
                    <div class="option">
                        <div id="options-box-{{$file->id}}" class="options-box" style="display: none;">
                            <ul>
                              @auth <li><a href="{{ $file->file->path }}" download>Baixar</a></li> @endauth
                              @guest <li><a href="{{ route("viewLogin")}}">Baixar</a></li> @endguest
                              @isset(auth()->user()->id)
                                <form method="POST" action="{{ route("removerArquivo", ["subject_id" => $file->file->subject->id, "file_id" => $file->file->id, 'user_id' => auth()->user()->id])}}">
                                @csrf
                                    <li><button type="submit">Desfavoritar</button></li>
                                </form>
                              @endisset
                            </ul>
                        </div>
                      </div>
                    <a id="ellipsis-btn-{{$file->id}}"><i class="fa-solid fa-ellipsis"></i></a>
                </div>     
                @include('subjects.subjectsChatOptions')
            @endforeach       
         </div>
      </div>
      <div class="card-content" id="comments" style="display: none;">
         <div class="dropdown">
            <button class="inline-btn" onclick="toggleComments('questions')">Perguntas</button>
            <button class="inline-btn" onclick="toggleComments('answers')">Respostas</button>
         </div>
         <div class="comments-pfp" id="questions" style="display: block;">
            <!-- Conteúdo das perguntas -->
            <div class="subforum-row">
                @foreach($posts as $post)
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
                  <h4><a href="{{route('viewProfile', ["profile" => $post->user->id])}}">{{$post->user->name}}</a></h4>
                  <p class="text">{{ $post->subject}}</p>
                    
                </div>
                <div class="subforum-column">
                    <span class="text">
                        @php 
                            $post_answers = App\Models\ForumAnswer::where('post_id', '=', $post->id)->count();
                            if($post_answers == 1){
                                echo $post_answers . " Resposta";
                            }
                            else{
                                echo $post_answers . " Respostas";
                            }
                        @endphp
                    </span><br/>
                    <span><a href="{{ route('viewForumAnswers', ['post_id' => $post->id])}}">Ver Respostas</a></span>
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
         <div class="comments-pfp" id="answers" style="display: none;">

         <!-- Conteúdo das respostas -->
         @foreach($answers as $answer)
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    @if ($answer->post->language == 'HTML')
                    <i class="fa-brands fa-html5" style="color: #E34F26;"></i>

                    @elseif ($answer->post->language == 'CSS')
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>

                    @elseif ($answer->post->language == 'JavaScript')
                    <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>

                    @elseif ($answer->post->language == 'PHP')
                    <i class="fa-brands fa-php" style="color: #4F5D95;"></i>

                    @endif                  
                </div>
                <div class="subforum-column">
                  <h4><a href="{{route('viewProfile', ["profile" => $answer->user->id])}}">{{$answer->post->user->name}}</a></h4>
                  <p class="text">{{ $answer->post->subject}}</p>
                    
                </div>
                <div class="subforum-column">
                    <span class="text">
                        @php 
                            $post_answers = App\Models\ForumAnswer::where('post_id', '=', $answer->post->id)->count();
                            if($post_answers == 1){
                                echo $post_answers . " Resposta";
                            }
                            else{
                                echo $post_answers . " Respostas";
                            }
                        @endphp
                    </span><br/>
                    <span><a href="{{ route('viewForumAnswers', ['post_id' => $answer->post->id])}}">Ver Respostas</a></span>
                </div>
                <div class="subforum-column text-small">
                    @php
                        $date = new DateTime($answer->post->created_at);
                        echo $date->format('H:i - d/m/Y');
                    @endphp
                </div>
            </div>

            <div class="forum-user">
                <div class="img">
                    <img src="{{$answer->user->profilePicture}}">
                </div>
                <div class="answers">
                    <div class="name">
                        <h3><a href="{{route('viewProfile', ["profile" => $answer->user->id])}}">{{$answer->user->name}}</a></h3>
                    </div>
                    <div class="assunto">
                        <p>{{ $answer->answer}}</p>
                    </div>
                    <div class="text-small">
                        @php
                            $date = new DateTime($answer->created_at);
                            echo $date->format('H:i - d/m/Y');
                        @endphp
                    </div>
                </div>
                <div class="forum-btn">
                    <div class="option">
                        @php /*DIV VAZIA PARA O BOTÃO DE LIKE APARECER EMBAIXO*/ @endphp
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
                            <form method="POST" action="{{ route("curtirResposta", ["post_id" => $answer->post->id, "answer_id" => $answer->id])}}">
                            @csrf
                                @auth
                                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                                @endauth
                                <input type="hidden" id="answer_id" name="answer_id" value="{{ $answer->id }}">
                                <button type="submit"><p></p><i class="fa-regular fa-heart"></i></button>
                            </form>
                        @else
                            <form method="POST" action="{{ route("descurtirResposta", ["post_id" => $answer->post->id, "answer_id" => $answer->id, 'user_id' => auth()->user()->id])}}">
                                @csrf
                                    <button type="submit"><p></p><i class="fa-solid fa-heart"></i></button>
                                </form>
                        @endif
                    </div>
                </div>
            </div>
         @endforeach
      </div>
</section>
</main>


@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection