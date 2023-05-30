@extends('layouts.Body')

@section('title')
Fórum
@endsection

@section('content')
<main class="forum-principal">
        <div class="forum">

            <div class="painel">
              <div class="painel-box">
                <form name="form" method="post" action={{ route('publicarPergunta')}}>
                @csrf
                @method('post')

                <input type="hidden" id="commentid" name="commentid" value="0">
                @isset(auth()->user()->id)
                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                @endisset
                <div class="form-group">
                  <label for="question">Escreva sua pergunta:</label>
                  <textarea class="form-control" rows="5" name="question" id="question" required></textarea>
                </div>
                <label for="assunto">Escolha um assunto:</label>
                    <select id="subject" class="assunto" name="subject">
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="JavaScript">Javascript</option>
                        <option value="PHP">PHP</option>
                    </select>
              <button type="submit" id="save" name="save" class="inline-btn">Enviar</button>
              </form>
              </div>
            </div>
        </div>

        <div class="subforum">
            <div class="subforum-title">
                <h1>Recentes</h1>
            </div>
            @foreach($posts as $post)
            @if($loop->iteration <= 8)
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    @if ($post->subject == 'HTML')
                    <i class="fa-brands fa-html5" style="color: #E34F26;"></i>

                    @elseif ($post->subject == 'CSS')
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>

                    @elseif ($post->subject == 'JavaScript')
                    <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>

                    @elseif ($post->subject == 'PHP')
                    <i class="fa-brands fa-php" style="color: #4F5D95;"></i>

                    @endif
                </div>
                <div class="subforum-column">
                    <h4><a href="#">{{ $post->user->name }}</a></h4>
                    <p class="text">{{ $post->question }}</p>
                </div>
                <div class="subforum-column">
                    <span class="text">0 Respostas</span><br/>
                    <span><a href="{{ route('viewForumAnswers')}}">Responder</a></span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b><br/>
                    <a href="">{{ $post->user->name }}</a> 
                    <br>
                    @php
                        $date = new DateTime($post->created_at);
                        echo $date->format('H:i - d/m/Y');
                    @endphp
                </div>
            </div>
            @endif
            @endforeach()
        </div>
</main>
    @if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection