@extends('layouts.Body')

@section('title')
Atividades
@endsection

@section('content')

<main>
<section class="atividade">

    <div class="ativ-header">
        <h1 class="titulo">Atividades</h1>

    </div>
    <div class="ativ-container">
    @foreach($activities as $activity)
        <a class="ativ-box" href="{{route('viewQuiz', ['activity_id' => $activity->id])}}" target="_blank">
            <div class="ativ-icon">
                @if ($activity->language == 'HTML')
                <i class="fa-brands fa-html5" style="color: #E34F26;"></i>

                @elseif ($activity->language == 'CSS')
                <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>

                @elseif ($activity->language == 'Javascript')
                <i class="fa-brands fa-js" style="color: #F7DF1E;"></i>

                @elseif ($activity->language == 'PHP')
                <i class="fa-brands fa-php" style="color: #4F5D95;"></i>

                @endif
            </div>
            <div class="ativ-content">
                <h3>{{ $activity->name }}</h3>
                <span>10 pontos</span>
            </div>
        </a>
    @endforeach
    </div>
{{-- 
        <a class="ativ-box" href="{{route('viewQuiz')}}" target="_blank">
        <div class="ativ-icon">
                <i class="fa-brands fa-css3-alt" style="color:#1572B6;"></i>
            </div>
            <div class="ativ-content">
                <h3>Introdução ao CSS</h3>
                <span>10 pontos</span>
            </div>
        </a>

        <a class="ativ-box" href="{{route('viewQuiz')}}" target="_blank">
        <div class="ativ-icon">
                <i class="fa-brands fa-php" style="color: #4F5D95;"></i>
            </div>
            <div class="ativ-content">
                <h3>Introdução ao PHP</h3>
                <span>10 pontos</span>
            </div>
        </a> --}}
</section>
</main>


@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection