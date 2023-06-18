let body = document.body;
let logo = document.getElementById('logo');

let searchForm = document.querySelector('.header .flex .busca-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    profile.classList.remove('active');
}

let sideBar = document.querySelector(' .sidebar');

document.querySelector('#menu-btn').onclick = () =>{
    sideBar.classList.toggle('active');
    body.classList.toggle('active');
    const menuIcon = document.querySelector('#menu-btn');

    if (sideBar.classList.contains('active')) {
        menuIcon.classList.replace('fa-times', 'fa-bars');
    } else {
        menuIcon.classList.replace('fa-bars', 'fa-times');
    }
}

document.querySelector('.sidebar .close-sidebar').onclick = () =>{
    sideBar.classList.remove('active');
    body.classList.remove('active');
}

window.onscroll = () =>{
    profile.classList.remove('active');
    searchForm.classList.remove('active');
    
    if(window.innerWidth < 1200){
      searchForm.classList.toggle('active');
      profile.classList.remove('active');
    }
}

window.onload = function() {
    var links = document.querySelectorAll(".navbar .flex a");
  
    for (var i = 0; i < links.length; i++) {
      if (links[i].href == window.location.href) {
        links[i].classList.add("active");
      } else {
        links[i].classList.remove("active");
      }
    }
  };

let toggleBtn = document.querySelector('#toggle-btn');
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
  toggleBtn.classList.replace('fa-sun', 'fa-moon');
  body.classList.add('dark');
  logo.setAttribute('src', 'http://127.0.0.1:8000/images/dark_volpe.png')
  localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
  toggleBtn.classList.replace('fa-moon', 'fa-sun');
  body.classList.remove('dark');
  logo.setAttribute('src', 'http://127.0.0.1:8000/images/light_volpe.png')
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


var caixaResposta = document.getElementById('resposta-box');
var responderBtn = document.getElementById('responder-btn');

responderBtn.addEventListener('click', function() {
  if (caixaResposta.style.display === 'block') {
    caixaResposta.style.display = 'none';
  } else {
    caixaResposta.style.display = 'block';
  }
});

var caixaEdita = document.getElementById('edita-box');
var editarBtn = document.getElementById('editar-btn');

editarBtn.addEventListener('click', function() {
  if (caixaEdita.style.display === 'block') {
    caixaEdita.style.display = 'none';
  } else {
    caixaEdita.style.display = 'block';
  }
});




document.addEventListener('DOMContentLoaded', function() {
  var optionsBox = document.getElementById('options-box');
  var ellipsisBtn = document.getElementById('ellipsis-btn');

  ellipsisBtn.addEventListener('click', function() {
      if (optionsBox.style.display === 'block') {
          optionsBox.style.display = 'none';
      } else {
          optionsBox.style.display = 'block';
      }
  });
});


document.addEventListener('DOMContentLoaded', function() {
  var optionsQuestionBox = document.getElementById('options-question-box');
  var ellipsisQuestionBtn = document.getElementById('ellipsis-question-btn');

  ellipsisQuestionBtn.addEventListener('click', function() {
      if (optionsQuestionBox.style.display === 'block') {
          optionsQuestionBox.style.display = 'none';
      } else {
          optionsQuestionBox.style.display = 'block';
      }
  });
});
function toggleCard(cardId) {
  var card = document.getElementById(cardId);
  var allCards = document.getElementsByClassName("card-content");

  for (var i = 0; i < allCards.length; i++) {
     if (allCards[i].id === cardId) {
        if (card.style.display === 'none') {
           card.style.display = 'block';
        } else {
           card.style.display = 'none';
        }
     } else {
        allCards[i].style.display = 'none';
     }
  }
}

function toggleComments(contentType) {
  var questionsContent = document.getElementById('questions');
  var answersContent = document.getElementById('answers');

  if (contentType === 'questions') {
     questionsContent.style.display = 'block';
     answersContent.style.display = 'none';
  } else if (contentType === 'answers') {
     questionsContent.style.display = 'none';
     answersContent.style.display = 'block';
  }
}

