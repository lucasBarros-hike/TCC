@extends('layouts.Body')

@section('title')
{{ $search }}
@endsection

@section('content')

@if ($filter == 'usuarios')
  @foreach($results as $user)
  <ul>
    <li><h1>{{ $user->name }}<h1></li>
  </ul>
  @endforeach
@endif

@if ($filter == 'materias')
  @foreach($results as $subject)
  <ul>
    <li><h1>{{ $subject->subject }}<h1></li>
  </ul>
  @endforeach
@endif

@if ($filter == 'forum')
  @foreach($results as $forum_post)
  <ul>
    <li><h1>{{ $forum_post->question }}<h1></li>
  </ul>
  @endforeach
@endif

@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection