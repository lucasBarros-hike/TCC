@extends('layouts.Html')

@section('standard')
<!-- começo do header -->
  <header class="header">
    <section class="flex">

      <!-- <a href="home.html" class="logo">Vulp</a> -->
      
      <img src="{{ asset('images/2.png') }}" class="logo" width="55px" height="55px">
  
      <form action="" method="post" class="busca-form">

        <input type="text" name="busca_box" placeholder="Buscar..." required maxlength="100">

        <button type="submit" class="fas fa-search" name="busca_box"></button>

      </form>

      <div class="icons">
        <div class="icon">
            <div id="toggle-btn" class="fas fa-sun"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <div class="flex-btn">
          <a href="{{url('/login')}}" target="_blank" class="option-btn">Login</a>
          <a href="{{url('/cadastro')}}" target="_blank" class="option-btn">Cadastro</a>
        </div>
      </div>
      
    
    
    </section>
    <nav class="navbar">
      <div class="flex">
        <a href="{{url('/')}}" class="active"><span>Menu</span></a>
        <a href="{{url('/materias')}}"><span>Materias</span></a>
        <a href="{{url('/forum')}}"><span>Forum</span></a>
        <a href="#"><span>Sobre</span></a>
        <a href="#"><span>Contate-nos</span></a>
      </div>
    </nav>
  </header>
  
  <!-- fim do header -->

@yield('content')

  <!-- começo do footer -->
  <footer class="footer">
    <div class="boxs">
      <h2>Inicio</h2>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Materias</a></li>
        <li><a href="">Chat</a></li>
      </ul>
    </div>
    <div class="boxs">
      <h2>Informações</h2>
      <ul>
        <li><a href="">Contato</a></li>
        <li><a href="">Email</a></li>
        <li><a href=""></a></li>
      </ul>
    </div>
    <div class="boxs">
      <h2>Suporte</h2>
      <ul>
        <li><a href="">FAQ</a></li>
        <li><a href="">Telefone</a></li>
        <li><a href="">Chat</a></li>
      </ul>
    </div>
    <div class="boxs">
      <h2>Sobre nós</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut explicabo aliquam voluptatibus culpa beatae eum inventore autem, temporibus atque sunt minima tempora nesciunt vitae vero maiores quae, quod eveniet quam?</p>
    </div>
  </footer>

@endsection
