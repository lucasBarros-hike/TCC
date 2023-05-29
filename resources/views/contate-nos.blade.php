@extends('layouts.Body')

@section('title')
Contato
@endsection

@section('content')
<main class="home">
    <div class="principal">
      
    <div class="contact">
      <h1>Entre em Contato</h1>
      <form class="contact-form" action="enviar-email.php" method="post">
          <label for="nome">Nome:</label>
          
          <input type="text" id="nome" name="nome" required>
          <br>
          <br>
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required>
          <br>
          <br>
          <label for="assunto">Assunto:</label>
          <input type="text" id="assunto" name="assunto" required>
          <br>
          <br>
          <label for="mensagem">Mensagem:</label>
          <textarea id="mensagem" name="mensagem" required></textarea>
          <br>
          
          <button type="submit" class="inline-btn">Enviar</button>
      </form>
      </div>
      <div class="contact-img">
        <img src="./images/contact-us.png" alt="" srcset="">
      </div>
    </div>
</main>

@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection