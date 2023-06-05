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
        <img src="../images/pic-{{ auth()->user()->id }}.jpg">
        <p>Programação Web</p>
      </div>
      <div class="chat-options">
        <a href="#">Postagens</a>
        <a href="#">Arquivos</a>
      </div>
    </div>

    <div class="chat-body">
      
      @foreach($messages as $message)
      <div class="message">
        <div class="img">
          <img src="../images/pic-{{$message->user->id}}.jpg" alt="Usuário 1">
        </div>
        <div class="message-chat">
            <div class="name">
              {{ $message->user->name}}
            </div>
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

      
    <div class="chat-footer">
        
      <form method="post" action="{{ route('publicarMensagem')}}" class="message-box">
      @csrf
      @method('post')
        <div class="message">
            <button type="submit"><i class="fa fa-paperclip"></i></button>
            <input type="text" placeholder="Digite uma mensagem" name="message" id="message">
            @isset(auth()->user()->id)
            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
            @endisset
            <input type="hidden" name="subject" id="subject" value="{{ $subject }}"/>
            <button type="submit"> <i class="fa fa-arrow-right"></i></button>
      </form>
      </div>
    </div>
  </section>
</main>
@endsection

