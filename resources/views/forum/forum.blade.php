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
                    <label for="subject">Escreva o assunto:</label>
                    <input type="text" name="subject" id="subject" required>
                    <label for="question">Escreva sua pergunta:</label>
                    <textarea class="form-control" rows="5" name="question" id="question" required></textarea>
                </div>
                <label for="assunto">Escolha uma linguagem:</label>
                    <select id="language" class="assunto" name="language">
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
                    <h4><a href="#">{{ $post->user->name }}</a></h4>
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
            @endforeach()
        </div>
</main>
<!-- fim das respostas -->
    @if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection