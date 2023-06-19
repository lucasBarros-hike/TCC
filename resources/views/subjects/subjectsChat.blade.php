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
      
    </div>
    
    
   
      </section>




      <section id="arquivos-section" style="display: none;">
      <div class="chat-body">
      
      <div class="message">
        <div class="img">
          <img src="" alt="Usuário 1">
        </div>
        <div class="message-chat">
            <div class="name">
              testando
            </div>
            <div class="message-text">
              <div class="message-file">
              <i class="fa-regular fa-folder"></i>
                <p>nome do arquivo.png</p>
                <i class="fa-solid fa-ellipsis"></i>
              </div>
              <span class="timestamp">
                
                dia tal
                
              </span>
            </div>
        </div>
        
      </div>
      </section>
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

