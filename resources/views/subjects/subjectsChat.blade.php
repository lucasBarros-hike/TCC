@extends('layouts.Body')

@section('title')
Postagens
@endsection

@section('content')
<main class="chatbox">
  <section class="chat" id="pweb-section" data-materia="programacao-web">
    <div class="chat-header">
      
      <div class="chat-perfil">
      <a href="{{route('viewMaterias')}}" class="chevron"><i class="fa-solid fa-chevron-left"></i></a> 
        <p>{{ $subject->subject}}</p>
      </div>
      <div class="chat-options">
        <a href="#" id="postagens-link">Postagens</a>
        <a href="#" id="arquivos-link">Arquivos</a>
      </div>
    </div>

    <section id="postagens-section">
    <div class="chat-body">
      
      @auth
      @foreach($messages as $message)
        @if(auth()->user()->id == $message->user->id)
        <div class="message-user" >
          <div class="message-chat-user " >
              <a href="{{route('viewProfile', ["profile" => $message->user->id])}}"><div class="name">
                {{ $message->user->name}}
              </div></a>
              <div class="message-text-user">
              <p>{{ $message->message }}</p>
                <span class="timestamp">
                  @php
                  $date = new DateTime($message->created_at);
                  echo $date->format('H:i - d/m/Y');
                  @endphp
                </span>
              </div>
              
          </div>
          <div class="img">
            <img src="{{$message->user->profilePicture}}" alt="Usuário 1">
          </div>
        </div>
        @else
        <div class="message">
          <div class="img">
            <img src="{{$message->user->profilePicture}}" alt="Usuário 1">
          </div>
          <div class="message-chat">
              <a href="{{route('viewProfile', ["profile" => $message->user->id])}}"><div class="name">
                {{ $message->user->name}}
              </div></a>
              <div class="message-text">
              <p>{{ $message->message }}</p>
                <span class="timestamp">
                  @php
                  $date = new DateTime($message->created_at);
                  echo $date->format('H:i - d/m/Y');
                  @endphp
                </span>
              </div>
          </div>
        </div>
        @endif
      @endforeach
      @endauth

      @guest
      @foreach($messages as $message)
        <div class="message">
          <div class="img">
            <img src="{{$message->user->profilePicture}}" alt="Usuário 1">
          </div>
          <div class="message-chat">
              <a href="{{route('viewProfile', ["profile" => $message->user->id])}}"><div class="name">
                {{ $message->user->name}}
              </div></a>
              <div class="message-text">
              <p>{{ $message->message }}</p>
                <span class="timestamp">
                  @php
                  $date = new DateTime($message->created_at);
                  echo $date->format('H:i - d/m/Y');
                  @endphp
                </span>
              </div>
          </div>
        </div>
      @endforeach
      @endguest

    </div>
    <div class="chat-footer">
      <form method="post" action="{{ route('publicarMensagem', ['subject_id' => $subject->id])}}" class="message-box">
      @csrf
      @method('post')
      
        <div class="message">
          
          
            <button type="button"><i class="fa fa-paperclip"></i>
          
          </button>
          
          
            <input type="text" placeholder="Digite uma mensagem" name="message" id="message">
            @isset(auth()->user()->id)
            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
            @endisset
            <input type="hidden" name="subject_id" id="subject_id" value="{{ $subject->id }}"/>
            <button type="submit"> <i class="fa fa-arrow-right"></i></button>
      </form>
      </div>
    
   
      </section>




      <section id="arquivos-section" style="display: none;">
      <div class="chat-body">
      
      @foreach($files as $file)
      <div class="message">
        <div class="message-chat">
            <div class="name">
              {{ $file->name }}
            </div>
            <div class="message-text">
              <div class="message-file">
              <i class="fa-regular fa-folder"></i>
                <p>{{ $file->description}}</p>
                <div class="option">
                  <div id="options-box-{{$file->id}}" class="options-box" style="display: none;">
                      <ul>
                        @auth <li><a href="{{ $file->path }}" download>Baixar</a></li> @endauth
                        @guest <li><a href="{{ route("viewLogin")}}">Baixar</a></li> @endguest
                        @isset(auth()->user()->id)
                          @if(DB::table('saved_files')->where('user_id', 'LIKE', auth()->user()->id)->where('file_id', 'LIKE', $file->id)->get("user_id")->isEmpty())
                              <form method="POST" action="{{ route("salvarArquivo", ["subject_id" => $subject->id, "file_id" => $file->id])}}">
                              @csrf
                                  @auth
                                  <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                                  @endauth
                                  <input type="hidden" id="file_id" name="file_id" value="{{ $file->id }}">
                                  <li><button type="submit">Favoritar</button></li>
                              </form>
                          @else
                              <form method="POST" action="{{ route("removerArquivo", ["subject_id" => $subject->id, "file_id" => $file->id, 'user_id' => auth()->user()->id])}}">
                                  @csrf
                                  <li><button type="submit">Desfavoritar</button></li>
                                </form>
                          @endif
                        @endisset
                      </ul>
                  </div>
                </div>
              <a id="ellipsis-btn-{{$file->id}}"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
            <span class="timestamp">
              @php
                $date = new DateTime($file->created_at);
                echo $date->format('H:i - d/m/Y');
              @endphp
            </span>
        </div>
      </div>
    </div>
    @include('subjects.subjectsChatOptions')
    @endforeach
    </section>
  </section>
  
</main>
<script>
  
  document.getElementById("postagens-link").addEventListener("click", function(event) {
  event.preventDefault();
  document.getElementById("postagens-section").style.display = "block";
  document.getElementById("arquivos-section").style.display = "none";
});

document.getElementById("arquivos-link").addEventListener("click", function(event) {
  event.preventDefault();
  document.getElementById("postagens-section").style.display = "none";
  document.getElementById("arquivos-section").style.display = "block";
});
</script>
@endsection

