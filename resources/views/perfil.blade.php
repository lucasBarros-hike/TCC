@extends('layouts.Body')

@section('title')
Perfil
@endsection

@section('content')

<main>
<section class="user-profile">

   <h1 class="titulo">Perfil</h1>

   <div class="info">    
         <div class="user">

            <div class="user-pfp">
               
            <img src="images/pic-3.jpg" alt="">
            <h3>{{ auth()->user()->name }}</h3>
            <p>Estudante</p>
            <!-- <a href="update.html" class="inline-btn">update profile</a> -->
            </div>
            
            <div class="user-pfp">
               <div class="flex">
               <i class="fa-solid fa-ranking-star"></i>
                  <div>
                     <span>30</span>
                     <p>Pontuação</p>
                  </div>
               </div>
               <a href="#" class="inline-btn">Ver Classificação</a>
            </div>

            <div class="user-pfp">
               <div class="flex">
               <i class="fa-solid fa-ranking-star"></i>
                  <div>
                     <span>30</span>
                     <p>Pontuação</p>
                  </div>
               </div>
               <a href="#" class="inline-btn">Adicionar +</a>
            </div>
         </div>
         

   
      <div class="box-container">
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-bookmark"></i>
               <div>
                  <span>4</span>
                  <p>Arquivos Salvos</p>
               </div>
            </div>
            <a href="#" class="inline-btn">Ver Arquivos Salvos</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-heart"></i>
               <div>
                  <span>33</span>
                  <p>Curtidos</p>
               </div>
            </div>
            <a href="#" class="inline-btn">Ver Curtidos</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-comment"></i>
               <div>
                  <span>12</span>
                  <p>Comentários</p>
               </div>
            </div>
            <a href="#" class="inline-btn">Ver Comentários</a>
         </div>
   
      </div>
   </div>

</section>
</main>


@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection