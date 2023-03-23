@extends('layouts.Body')

@section('content')
<div class="forum">

<div class="painel">
  <div class="painel-box">
    <h3 class="titulo">Forum</h3>
    <hr>
    <form name="form" method="post">
        <input type="hidden" id="commentid" name="commentid" value="0">
	<div class="form-group">
	  <label for="user">Nome:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Escreva sua pergunta:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <button type="submit" id="save" name="save" class="inline-btn">Enviar</button>
  </form>
  </div>
</div>
</div>
@endsection