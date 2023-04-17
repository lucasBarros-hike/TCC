@extends('layouts.Html')

@section('standard')
<!-- começo do header -->
  <header class="header">
    <section class="flex">
      
      <img src="{{ asset('images/light_volpe.png') }}" class="logo" id="logo">
      
      <form action="" method="post" class="busca-form">

        <input type="text" name="busca_box" placeholder="Buscar..." required maxlength="100">

        <button type="submit" class="fas fa-search" name="busca_box"></button>

      </form>

      <div class="icons">
        <div class="icon">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        
      </div>
      
    
    
    </section>
    <!-- começo do sidebar -->
  <div class="sidebar">

    <div class="close-sidebar">
      <i class="fas fa-times"></i>
    </div>
    <div class="perfil">
        <img src="../images/pic-2.jpg" alt="" srcset="">
        <h3>Pessoa</h3>
        <span>Estudante</span>
        <!-- <a href="perfil.html" class="btn">Ver perfil</a>
      <div class="flex-btn">
          <a href="{{url('/login')}}" target="_blank" class="option-btn">Login</a>
          <a href="{{url('/cadastro')}}" target="_blank" class="option-btn">Cadastro</a>
      </div> -->
      
    </div>
    <nav class="navbar">
      <a href="{{url('/')}}" class="active" ><i class="fas fa-home"></i><span>Menu</span></a>
      <a href="{{url('/materias')}}"><i class="fas fa-graduation-cap"></i><span>Materias</span></a>
      <a href="{{url('/forum')}}"><i class="fa-solid fa-comment"></i><span>Forum</span></a>
      <a href="{{url('/sobre')}}"><i class="fas fa-chalkboard-user"></i><span>Sobre</span></a>
      <a href="{{url('/contate-nos')}}"><i class="fas fa-headset"></i><span>Contate-nos</span></a>
    </nav>
 </div>

  <!-- fim do sidebar -->
    <!-- <nav class="navbar">
      <div class="flex">
        <a href="{{url('/')}}" class="active"><span>Menu</span></a>
        <a href="{{url('/materias')}}"><span>Materias</span></a>
        <a href="{{url('/forum')}}"><span>Forum</span></a>
        <a href="#"><span>Sobre</span></a>
        <a href="#"><span>Contate-nos</span></a>
      </div>
    </nav> -->
  </header>
  
  <!-- fim do header -->

@yield('content')

  <!-- começo do footer -->
  <!-- <footer class="footer">
      &copy; Volpe @ 2023 by <span>Volpe</span> | all rights reserved! </br>
      <a href="https://storyset.com/people">People illustrations by Storyset</a>
  </footer> -->



@endsection


