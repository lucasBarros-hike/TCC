@extends('layouts.Body')

@section('title')
Postagens
@endsection

@section('content')
<main class="chatbox">
  <section class="chat" id="pweb-section">
    <div class="chat-header">
      <div class="chat-perfil">
        <img src="../images/pic-1.jpg">
        <p>Programação Web</p>
      </div>
      <div class="chat-options">
        <a href="#">Postagens</a>
        <a href="#">Arquivos</a>
      </div>
    </div>

    <div class="chat-body">

      <div class="message">
        <div class="img">
          <img src="../images/pic-2.jpg" alt="Usuário 1">
        </div>
        <div class="message-text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic similique error inventore, temporibus enim omnis quas odio reprehenderit iste corporis! Veritatis reiciendis facere corrupti? Officia soluta numquam magni dolorem adipisci?</p>
          
        </div>
      </div>
      

      <div class="message">
        <div class="img">
          <img src="../images/pic-2.jpg" alt="Usuário 1">
        </div>
        <div class="message-text">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum reprehenderit dicta nihil accusamus autem odio nemo animi aliquid suscipit id doloribus asperiores, sit esse placeat rem dolorum consequuntur harum quas?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dolore similique excepturi maxime inventore, temporibus repellat, molestias minima vel aspernatur voluptas in illum. Esse molestias alias, dolores ex rem rerum.
          </p>
          <span class="timestamp">8:32 PM</span>
        </div>
      </div>
      
      
      <div class="message">
        <div class="img">
          <img src="../images/pic-2.jpg" alt="Usuário 1">
        </div>
        
        <div class="message-text">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum reprehenderit dicta nihil accusamus autem odio nemo animi aliquid suscipit id doloribus asperiores, sit esse placeat rem dolorum consequuntur harum quas?</p>
          <span class="timestamp">8:32 PM</span>
        </div>
      </div>

      <!-- <div class="message-user">
        
        
        <div class="message-text-user">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum reprehenderit dicta nihil accusamus autem odio nemo animi aliquid suscipit id doloribus asperiores, sit esse placeat rem dolorum consequuntur harum quas?</p>
          <span class="timestamp">8:32 PM</span>
        </div>
        <div class="img">
          <img src="../images/pic-2.jpg" alt="Usuário 1">
        </div>
      </div>
       -->

      </div>

      
    <div class="chat-footer">
        
      <form class="message-box" action="#" method="post">
        <div class="add-button">
            <i class="fa fa-plus"></i>
        </div>
        <div class="message">
            <button type="submit"><i class="fa fa-paperclip"></i></button>
            <input type="text" placeholder="Digite uma mensagem">
            
            <button type="submit"> <i class="fa fa-arrow-right"></i></button>
      </form>
      </div>
    </div>
  </section>

  <section class="chat" id="bd-section" style="display: none">
    <div class="chat-header">
      <div class="chat-perfil">
        <img src="img/pic-1.jpg">
        <p>Banco de dados</p>
      </div>
      <div class="chat-options">
        <a href="#">Postagens</a>
        <a href="#">Arquivos</a>
      </div>
    </div>

    <div class="chat-body">

      <div class="message">
        <div class="img">
          <img src="img/pic-2.jpg" alt="Usuário 1">
        </div>
        <div class="message-text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsam culpa velit nostrum soluta fugit tempore, inventore ratione molestias pariatur odio, eum provident, ipsum in rem aut sunt veniam possimus!</p>
          <span class="timestamp">8:32 PM</span>
        </div>
      </div>
      

      <div class="message">
        <div class="img">
          <img src="img/pic-2.jpg" alt="Usuário 1">
        </div>
        <div class="message-text">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum reprehenderit dicta nihil accusamus autem odio nemo animi aliquid suscipit id doloribus asperiores, sit esse placeat rem dolorum consequuntur harum quas?</p>
          <span class="timestamp">8:32 PM</span>
        </div>
      </div>
      
      
      <div class="message">
        <div class="img">
          <img src="img/pic-2.jpg" alt="Usuário 1">
        </div>
        
        <div class="message-text">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum reprehenderit dicta nihil accusamus autem odio nemo animi aliquid suscipit id doloribus asperiores, sit esse placeat rem dolorum consequuntur harum quas?</p>
          <span class="timestamp">8:32 PM</span>
        </div>
      </div>
      </div>

      
    <div class="chat-footer">
      <form action="#" method="post">
        <input type="text" placeholder="Digite uma mensagem">
        <button type="submit">Enviar</button>
      </form>
    </div>
  </section>
</main>
@endsection

