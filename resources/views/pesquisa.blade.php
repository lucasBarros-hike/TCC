@extends('layouts.Body')

@section('title')
{{ $search }}
@endsection

@section('content')

<main>
@if ($filter == 'usuarios')
  @foreach($results as $user)
  <ul>
    <li><h1>{{ $user->name }}<h1></li>
  </ul>
  @endforeach

@elseif ($filter == 'materias')
  @foreach($results as $subject)
  <ul>
    <li><h1>{{ $subject->subject }}<h1></li>
  </ul>
  @endforeach

@elseif ($filter == 'perguntasForum')
  @foreach($results as $forum_post)
  <ul>
    <li><h1>{{ $forum_post->question }}<h1></li>
  </ul>
  @endforeach

@elseif ($filter == 'respostasForum')
  @foreach($results as $forum_answer)
  <ul>
    <li><h1>{{ $forum_answer->answer }}<h1></li>
  </ul>
  @endforeach

@endif
</main>
@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection