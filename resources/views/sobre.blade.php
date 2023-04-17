@extends('layouts.Body')

@section('title')
Sobre
@endsection

@section('content')
<main class="home">
    <div class="principal">
      <div class="img">
        <img src="" alt="" srcset="">
      </div>
      <div class="slogan">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, incidunt quae. Quis rerum ratione inventore eaque doloribus dignissimos, non nobis dicta quasi, quos ipsam laborum ex consectetur minus et illo!</p>
      </div>
    </div>
</main>

@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection