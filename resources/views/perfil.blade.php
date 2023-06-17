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
            
            <div class="user-rank">
               <div class="flex">
               <i class="fa-solid fa-ranking-star"></i>
                  <div>
                     <span>30</span>
                     <p>Pontuação</p>
                  </div>
               </div>
               <div class="flex">
               <i class="fa-solid fa-book"></i>
               <div>
                  <span>3</span>
                  <p>Atividades Realizadas</p>
               </div>
               </div>
               <a href="{{route('viewAtividade')}}" class="inline-btn">Ver atividades</a>
            </div>

            <div class="user-rank">
               <div class="flex">
               <i class="fa-solid fa-medal"></i>
                  <div>
                     <span>15°</span>
                     <p>Classificação</p>
                  </div>
               </div>
                  <div class="flex-rank">
                     <div class="ranking">
                        <div class="ranking-header">
                           <p>Posição</p>
                           <p>Nome</p>
                           <p>Pontuação</p>
                        </div>
                     <div>
                        <p>1°</p>
                        <p>Lucas</p>
                        <p>180</p>
                     </div>
                     <div>
                        <p>2°</p>
                        <p>Amanda</p>
                        <p>140</p>
                     </div>
                     <div>
                        <p>3°</p>
                        <p>Maria</p>
                        <p>120</p>
                     </div>
                     <div>
                        <p>4°</p>
                        <p>João</p>
                        <p>100</p>
                     </div>
                     <div>
                        <p>5°</p>
                        <p>Leticia</p>
                        <p>80</p>
                     </div>
                     
                     <div class="ranking-user">
                        <p>15°</p>
                        <p>Mateus</p>
                        <p>30</p>
                     </div>

                     </div>
                  </div>
               
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
      <a href="#" class="inline-btn" onclick="toggleCard('saved-files')">Ver Arquivos Salvos</a>
      
   </div>

   <div class="box">
      <div class="flex">
         <i class="fas fa-heart"></i>
         <div>
            <span>33</span>
            <p>Curtidos</p>
         </div>
      </div>
      <a href="#" class="inline-btn" onclick="toggleCard('liked-posts')">Ver Curtidos</a>
      
   </div>

   <div class="box">
      <div class="flex">
         <i class="fas fa-comment"></i>
         <div>
            <span>12</span>
            <p>Comentários</p>
         </div>
      </div>
      <a href="#" class="inline-btn" onclick="toggleCard('comments')">Ver Comentários</a>
   </div>
</div>
</section>
<section class="user-profile">
      <div class="card-content" id="liked-posts" style="display: none;"> 
         <div class="liked-pfp">
            <div class="forum-user">
                <div class="img">
                    <img src="../images/pic-1.jpg">
                </div>
                <div class="answers">
                    <div class="name">
                        <h3>Manuel</h3>
                    </div>
                    <div class="assunto">
                        <p>Faz isso e tals</p>
                    </div>
                    <div class=" text-small">
                        data
                    </div>
                </div>
                        <div class="forum-btn">
                            <div class="option">
                                <div id="options-box" class="options-box" style="display: none;">
                                    <ul>
                                        <li><a href="#">Editar</a></li>
                                        <li><a href="#">Excluir</a></li>
                                        <li><a href="#">Denunciar</a></li>
                                    </ul>
                                </div>
                            <button id="ellipsis-btn"><i class="fas fa-ellipsis-vertical"></i></button>
                            </div>
                        
                            <div class="like">
                                
                                <button><i class="fa-solid fa-heart"></i></button>
                                <!-- coração quando clicado:
                                <i class="fa-solid fa-heart"></i> -->
                            </div>
                        </div>
            </div>
            <div class="forum-user">
                <div class="img">
                    <img src="../images/pic-1.jpg">
                </div>
                <div class="answers">
                    <div class="name">
                        <h3>Manuel</h3>
                    </div>
                    <div class="assunto">
                        <p>Faz isso e tals</p>
                    </div>
                    <div class=" text-small">
                        data
                    </div>
                </div>
                        <div class="forum-btn">
                            <div class="option">
                                <div id="options-box" class="options-box" style="display: none;">
                                    <ul>
                                        <li><a href="#">Editar</a></li>
                                        <li><a href="#">Excluir</a></li>
                                        <li><a href="#">Denunciar</a></li>
                                    </ul>
                                </div>
                            <button id="ellipsis-btn"><i class="fas fa-ellipsis-vertical"></i></button>
                            </div>
                        
                            <div class="like">
                                
                                <button><i class="fa-solid fa-heart"></i></button>
                                <!-- coração quando clicado:
                                <i class="fa-solid fa-heart"></i> -->
                            </div>
                        </div>
            </div>
         </div>
         </div>
         
      </div>
      <div class="card-content" id="saved-files" style="display: none;">
         arquivos
      </div>
      <div class="card-content" id="comments" style="display: none;">
         <div class="dropdown">
            <button class="inline-btn" onclick="toggleComments('questions')">Perguntas</button>
            <button class="inline-btn" onclick="toggleComments('answers')">Respostas</button>
         </div>
         <div class="comments-pfp" id="questions" style="display: block;">
            <!-- Conteúdo das perguntas -->
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-html5" style="color: #E34F26;"></i>                    
                </div>
                <div class="subforum-column">
                  <h4><a href="#">Mateus</a></h4>
                  <p class="text">pra fazer um texto grande use h1</p>
                    
                </div>
                <div class="subforum-column">
                    <span class="text">
                        
                    </span><br/>
                    <span><a href="">Ver comentario</a></span>
                </div>
                <div class="subforum-column text-small">
                    data
                </div>

                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-html5" style="color: #E34F26;"></i>                    
                </div>
                <div class="subforum-column">
                  <h4><a href="#">Mateus</a></h4>
                  <p class="text">Texto normal usa a tag p </p>
                    
                </div>
                <div class="subforum-column">
                    <span class="text">
                        
                    </span><br/>
                    <span><a href="">Ver comentario</a></span>
                </div>
                <div class="subforum-column text-small">
                    data
                </div>
            </div>
         </div>
         <div class="comments-pfp" id="answers" style="display: none;">
         <!-- Conteúdo das respostas -->
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-html5" style="color: #E34F26;"></i>                    
                </div>
                <div class="subforum-column">
                  <h4><a href="#">Lucas</a></h4>
                  <p class="text">pra fazer um texto grande faço como?</p>  
                </div>
                <div class="subforum-column">
                    <span class="text">
                        Respostas 2    
                    </span><br/>
                    
                </div>
                <div class="subforum-column text-small">
                    data
                </div>
            </div>

            <div class="forum-user">
                <div class="img">
                    <img src="../images/pic-1.jpg">
                </div>
                <div class="answers">
                    <div class="name">
                        <h3>Mateus</h3>
                    </div>
                    <div class="assunto">
                        <p>usa o h1</p>
                    </div>
                    <div class=" text-small">
                        data
                    </div>         
                </div>
                <div class="forum-btn">
                     <div class="option">
                                <div id="options-box" class="options-box" style="display: none;">
                                    <ul>
                                        <li><a href="#">Editar</a></li>
                                        <li><a href="#">Excluir</a></li>
                                        <li><a href="#">Denunciar</a></li>
                                    </ul>
                                </div>
                            <button id="ellipsis-btn"><i class="fas fa-ellipsis-vertical"></i></button>
                        </div>
                  <button type="submit" class="inline-btn">Comentario</button>
               </div>
         </div>


         <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-html5" style="color: #E34F26;"></i>                    
                </div>
                <div class="subforum-column">
                  <h4><a href="#">Lucas</a></h4>
                  <p class="text">pra fazer um texto grande faço como?</p>  
                </div>
                <div class="subforum-column">
                    <span class="text">
                    Respostas 3    
                    </span><br/>
                    
                </div>
                <div class="subforum-column text-small">
                    data
                </div>       
            </div>

            <div class="forum-user">
                <div class="img">
                    <img src="../images/pic-1.jpg">
                </div>
                <div class="answers">
                    <div class="name">
                        <h3>Mateus</h3>
                    </div>
                    <div class="assunto">
                        <p>usa o h1</p>
                    </div>
                    <div class=" text-small">
                        data
                    </div>
                </div>
                <div class="forum-btn">
                     <div class="option">
                                <div id="options-box" class="options-box" style="display: none;">
                                    <ul>
                                        <li><a href="#">Editar</a></li>
                                        <li><a href="#">Excluir</a></li>
                                        <li><a href="#">Denunciar</a></li>
                                    </ul>
                                </div>
                            <button id="ellipsis-btn"><i class="fas fa-ellipsis-vertical"></i></button>
                        </div>
                  <button type="submit" class="inline-btn">Comentario</button>
               </div>
         </div>
      </div>
      
      
</section>
</main>


@if(!isset($hideFooter) || $hideFooter === false)
  @include('layouts.footer')
@endif
@endsection