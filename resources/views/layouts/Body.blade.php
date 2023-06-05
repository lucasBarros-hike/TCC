@extends('layouts.Html')

@section('standard')
<!-- começo do header -->
  <header class="header">
    <section class="flex">


    <div class="icons">
        <div class="icon">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
            
        </div>
        </div> 
      
      
      <form action="" method="post" class="busca-form">

        <input type="text" name="busca_box" placeholder="Buscar..." required maxlength="100">

        <button type="submit" class="fas fa-search" name="busca_box"></button>
        
      </form>

        
      <img src="{{ asset('images/light_volpe.png') }}" class="logo" id="logo"> 
    </section>
    <!-- começo do sidebar -->
  <div class="sidebar">

    <div class="close-sidebar">
      <i class="fas fa-times"></i>
    </div>


    <!-- site sem estar logado -->
    @guest
    <div class="perfil">
      <a href="{{route('realizarLogin')}}" target="_blank" class="option-btn">Fazer Login</a>
      <a href="{{route('realizarCadastro')}}" target="_blank" class="option-btn">Cadastrar-se</a>
    </div>
    @endguest

    <!-- site logado -->
    @auth
    <div class="perfil">
        <img src="../images/pic-{{ auth()->user()->id }}.jpg" alt="" srcset="">
        <a href="{{url('/perfil')}}"><h3>{{ auth()->user()->name }}</h3></a>
        <span>Estudante</span>
          <div class="flex-btn">
            <a href="{{route('realizarLogout')}}" class="option-btn">Sair</a>
          </div>
    </div>
    @endauth

    <nav class="navbar">
      <a href="{{route('home')}}" class="active" ><i class="fas fa-home"></i><span>Menu</span></a>
      <a href="{{route('viewMaterias')}}"><i class="fas fa-graduation-cap"></i><span>Materias</span></a>
      <a href="{{route('viewForum')}}"><i class="fa-solid fa-comment"></i><span>Forum</span></a>
      <a href="{{route('viewAtividade')}}"><i class="fa-solid fa-laptop"></i><span>Atividades</span></a>
      <a href="{{route('viewSobre')}}"><i class="fas fa-chalkboard-user"></i><span>Sobre</span></a>
      <a href="{{route('viewContate-nos')}}"><i class="fas fa-headset"></i><span>Contate-nos</span></a>
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


