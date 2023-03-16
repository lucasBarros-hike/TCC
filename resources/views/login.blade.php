@extends('-standardHtml')

@section('standard')
<div class="container">
        <form id="myForm" action="" class="form small">
          <h2>Login</h2>
            <div class="input-box">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-box">
                <label for="password">Senha: </label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Lembrar me?</label>
            </div>
            <div class="button">
                <a href="" class="option-btn">Entrar</a>
            </div>
          <div class="link">
            <p><a href="">Esqueci minha senha</a></p>
            <p>Não tem conta? <a href="cadastro.html">Cadastre-se</a></p>
          </div>
        </form>
      </div>
@endsection
