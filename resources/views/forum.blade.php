@extends('-standardBody')

@section('content')
<div class="forum-principal">
        <div class="forum">

            <div class="painel">
              <div class="painel-box">
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
        <div class="subforum">
            
            <div class="subforum-title">
                <h1>Recentes</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-html5" style="color:#E34F26 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="" >Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
        </div>
        <div class="subforum">
            <div class="subforum-title">
                <h1>Geral</h1>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
            <div class="subforum-row">
                <div class="subforum-icon subforum-column">
                    <i class="fa-brands fa-css3-alt" style="color:#1572B6 ;"></i>
                </div>
                <div class="subforum-column">
                    <h4><a href="#">Amanda Santos</a></h4>
                    <p class="text">Como faço para centralizar uma div</p>
                </div>
                <div class="subforum-column">
                    <span class="text">4 Posts</span>
                </div>
                <div class="subforum-column text-small">
                    <b><a href="">Ultima postagem</a></b> <a href="">Amanda Santos</a> 
                    <br> 12 Dez 2022
                </div>
            </div>
        </div>
    </div>
@endsection