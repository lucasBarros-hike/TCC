@extends('layouts.HtmlQuiz')

@section('title')
Quiz
@endsection

@section('standard')


<main>

    <div class="content">
    
    
        <h3>Introdução ao Javascript</h3>
    <div id="toggle-btn" class="fas fa-sun"></div>
      <span class="spnQtd"></span>
      <span class="question"></span>
      <div class="answers"></div>
      <p class="points">Pontuação <span id="questionValue">10</span></p>
    </div>
    <div class="finish">
      <p> Você acertou <span id="correctCount"></span> de <span id="totalCount"></span></p>
      <button>Reiniciar</button>
      <span id="totalPoints"></span>
    </div>
  </main>

  <script>
    let body = document.body;

let toggleBtn = document.querySelector('#toggle-btn');
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
  toggleBtn.classList.replace('fa-sun', 'fa-moon');
  body.classList.add('dark');
  localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
  toggleBtn.classList.replace('fa-moon', 'fa-sun');
  body.classList.remove('dark');
  localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
  enableDarkMode();
}
toggleBtn.onclick = (e) =>{
  let darkMode = localStorage.getItem('dark-mode');
  if(darkMode === 'disabled'){
    enableDarkMode();
  }else{
    disableDarkMode();
  }
}

  </script>
</section>


@endsection
